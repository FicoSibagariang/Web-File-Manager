<?php

namespace App\Controllers;

use App\Libraries\Fungsi;
use App\Models\Mod_file;
use App\Models\Mod_recentfile;

class FileManager extends BaseController
{
    protected $Mod_file;
    protected $Fungsi;
    public function __construct()
    {
        $this->Mod_file = new Mod_file();
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

        $data['judul'] = 'File Manager';
        $data['modal_data'] = show_my_modal('manage/modal_file', $data);
        $data['js'] = view('manage/manage-js', $data);
        return view('manage/manage', $data);
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
            $row[] = $tampil->id_parent;
            $row[] = $tampil->type;
            $row[] = $tampil->ket_project;
            $row[] = $tampil->status;
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

    public function ajax_list_recent_file()
    {
        ini_set('memory_limit', '512M');
        set_time_limit(3600);
        $str_query = "SELECT a.*,b.nama as nama_user FROM tbl_file a LEFT JOIN tbl_user b ON a.user_created=b.id_user where type='file'";

        $count = $this->db->query($str_query);
        $query = $this->db->query($str_query . " ORDER BY " . ($_POST['draw'] == "1" ? "  updated_at ASC" : "  updated_at ASC "));

        $data = array();
        $no = $_POST['start'];
        foreach ($query->getResult() as $tampil) {
            $no++;
            $row = array();
            $row[] = $tampil->nama;
            $row[] = $tampil->updated_at;
            $row[] = $tampil->size_file_kb;
            $row[] = $tampil->ket_project;
            $row[] = $tampil->nama_user;
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


    public function editfile($id)
    {
        $data = $this->Mod_file->getFile($id);
        echo json_encode($data);
    }

    public function save()
    {
        $builder = $this->db->table('tbl_file');
        $method = $this->request->getVar('method');
        $id = $this->request->getVar('id');
        $pasfoto = $this->request->getFile('file');

        $rules = [
            'user_created' => [
                'rules'  => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Username tidak boleh kosong.',
                    'min_length' => 'Username minimal 5 karakter'
                ],
            ],
            'nama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nama Project tidak boleh kosong.',
                ],
            ],
            'keterangan' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Keterangan tidak boleh kosong.',
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
                    'user_created' => $this->validator->getError('user_created'),
                    'nama' => $this->validator->getError('nama'),
                    'keterangan' => $this->validator->getError('keterangan'),
                    'validasi_file' => $this->validator->getError('file'),
                ]
            ];
            echo json_encode($data);
        } else {
            $save  = array(
                'user_created' => $this->request->getVar('user_created'),
                'nama' => $this->request->getVar('nama'),
                'keterangan'  => $this->request->getVar('keterangan'),
            );

            $get = $builder->where(['id' => $id])->get()->getRow();
            $dir = str_replace("\\", "/", FCPATH . 'uploads/file');
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
                $save['updated_at'] = date('Y-m-d H:i:s');
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
        $builder = $this->db->table('tbl_manage');
        $get = $builder->getWhere(['id_file' => $id])->getRow();
        $dir = str_replace("\\", "/", FCPATH . 'uploads/manage');

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
