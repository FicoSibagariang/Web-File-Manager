<?php

namespace App\Controllers;

use App\Libraries\Fungsi;
use App\Models\Mod_project;

class Project extends BaseController
{
    protected $Mod_project;
    protected $Fungsi;
    public function __construct()
    {
        $this->Mod_project = new Mod_project();
        $this->Fungsi = new Fungsi();
        helper(['form', 'my_helper']);
    }

    private function _cek_status()
    {
        $logged_in = session()->get('logged_in');
        return $this->Fungsi->ValidasiLogin($logged_in);
    }

    public function index()
    {
        // Jika _cek_status mengembalikan redirect, kita lanjutkan dengan redirect tersebut
        if ($this->_cek_status() instanceof \CodeIgniter\HTTP\RedirectResponse) {
            return $this->_cek_status();
        }

        $data['judul'] = 'Project';
        $data['modal_data'] = show_my_modal('project/modal_project', $data);
        $data['js'] = view('project/project-js', $data);
        return view('project/home', $data);
    }

    public function ajax_list()
    {
        ini_set('memory_limit', '512M');
        set_time_limit(3600);
        $str_query = "SELECT * FROM tbl_project";

        $count = $this->db->query($str_query);
        $query = $this->db->query($str_query . " order by " . ($_POST['draw'] == "1" ? " id_project ASC" : " id_project ASC "));

        $data = array();
        $no = $_POST['start'];
        foreach ($query->getResult() as $tampil) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $tampil->nama_project;
            $row[] = $tampil->username;
            $row[] = $tampil->ket_project;
            $row[] = $tampil->status;
            $row[] = $tampil->id_project;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "search" => $_POST['search'],
            "start" => $_POST['start'],
            "length" => $_POST['length'],
            "columns" => $_POST['columns'],
            "recordsFiltered" => $count->getNumRows(),
            "recordsTotal" => $count->getNumRows(),
            "data" => $data
        );

        //output to json format
        echo json_encode($output);
    }


    public function editproject($id)
    {
        $data = $this->Mod_project->getProject($id);
        echo json_encode($data);
    }

    public function save()
    {
        $builder = $this->db->table('tbl_project');
        $method = $this->request->getVar('method');
        $id = $this->request->getVar('id_project');
        $pasfoto = $this->request->getFile('file');

        $rules = [
            'username' => [
                'rules'  => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Username tidak boleh kosong.',
                    'min_length' => 'Username minimal 5 karakter'
                ],
            ],
            'nama_project' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong.',
                ],
            ],
            'ket_project' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Keterangan tidak boleh kosong.',
                ],
            ],
            'status' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Status tidak boleh kosong.',
                ],
            ],

        ];
        $rules['file'] = [
            'rules'  => 'uploaded[file]',
            'errors' => [
                'uploaded' => 'File tidak boleh kosong.',
            ]
        ];


        if (!$this->validate($rules)) {
            $data = [
                'status'    => false,
                'errors'    => [
                    'username' => $this->validator->getError('username'),
                    'nama_project' => $this->validator->getError('nama_project'),
                    'status' => $this->validator->getError('status'),
                    'ket_project' => $this->validator->getError('ket_project'),
                    'validasi_file' => $this->validator->getError('file'),
                ]
            ];
            echo json_encode($data);
        } else {
            $save  = array(
                'username' => $this->request->getVar('username'),
                'nama_project' => $this->request->getVar('nama_project'),
                'ket_project'  => $this->request->getVar('ket_project'),
                'status' => $this->request->getVar('status')
            );

            $get = $builder->where(['id_project' => $id])->get()->getRow();
            $dir = str_replace("\\", "/", FCPATH . 'uploads/project');
            if (!empty($_FILES['file']['name'])) {
                if ($pasfoto->isValid() && !$pasfoto->hasMoved()) {

                    $newName = $pasfoto->getRandomName();
                    $pasfoto->move($dir, $newName, true);

                    $save['file'] = $newName;

                    if ($method === 'edit') {
                        if ($get->photo != null) {
                            //hapus file yg ada diserver
                            unlink($dir . '/' . $get->file);
                        }
                    }
                }
            }

            if ($method === 'add') {
                $action = $builder->insert($save);
            } else {
                $save['updated_at'] = date('Y-m-d H:i:s');
                $action = $builder->update($save, ['id_project' => $id]);
            }
            if ($action) {
                echo json_encode(['status' => TRUE]);
            } else {
                echo json_encode(['status' => FALSE]);
            }
        }
    }
    public function delete()
    {
        $id = $this->request->getVar('id');
        $builder = $this->db->table('tbl_project');
        $get = $builder->getWhere(['id_project' => $id])->getRow();
        $dir = str_replace("\\", "/", FCPATH . 'uploads/project');

        if ($get->file != null) {
            //hapus gambar yg ada diserver
            unlink($dir . '/' . $get->file);
        }

        $action = $builder->delete(['id_project' => $id]);
        if ($action) {
            echo json_encode(['status' => TRUE]);
        } else {
            echo json_encode(['status' => FALSE]);
        }
    }
}
