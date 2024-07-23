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

    public function recent()
    {
        $data['judul'] = 'Recent Files';
        $data['modal_data'] = show_my_modal('manage/modal_file', $data);
        $data['js'] = view('manage/manage-js', $data);
        return view('manage/recent', $data);
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
        $id_parent = $this->request->getVar('id_parent');
        $param_parent_id = "0";
        if ($id_parent) {
            $param_parent_id = $id_parent;
        }
        ini_set('memory_limit', '512M');
        set_time_limit(3600);
        $str_query = "SELECT * FROM tbl_file where id_parent=" . $param_parent_id . "";

        $count = $this->db->query($str_query);
        $query = $this->db->query($str_query . " order by " . ($_POST['draw'] == "1" ? " type asc" : " type asc"));

        $data = array();
        $no = $_POST['start'];
        foreach ($query->getResult() as $tampil) {
            $no++;
            $row = array();
            $row[] = $tampil->nama;
            $row[] = $tampil->keterangan;
            $row[] = $tampil->type;
            $row[] = $tampil->updated_at;
            $row[] = $tampil->id;
            $row[] = $tampil->type_file;
            $row[] = $tampil->id_parent;
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


    public function edit($id)
    {
        $data = $this->Mod_file->getById($id);
        echo json_encode($data);
    }

    public function save()
    {
        $builder = $this->db->table('tbl_file');
        $method = $this->request->getVar('method');
        $id = $this->request->getVar('id');
        $id_parent = $this->request->getVar('id_parent');
        $type = $this->request->getVar('type');
        $file = $this->request->getFile('file');

        $rules = [
            'nama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong.',
                ],
            ],
            'keterangan' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Keterangan tidak boleh kosong.',
                ],
            ],

        ];

        if ($type === 'file') {
            $rules['file'] = [
                'rules'  => 'uploaded[file]',
                'errors' => [
                    'uploaded' => 'File tidak boleh kosong.',
                ]
            ];
        }


        if (!$this->validate($rules)) {
            $data = [
                'status'    => false,
                'errors'    => [
                    'nama' => $this->validator->getError('nama'),
                    'keterangan' => $this->validator->getError('keterangan'),
                    'validasi_file' => $this->validator->getError('file'),
                ]
            ];
            echo json_encode($data);
        } else {
            $save  = array(
                'nama' => $this->request->getVar('nama'),
                'keterangan'  => $this->request->getVar('keterangan'),
                'type'  => $this->request->getVar('type'),
                'id_parent'  => $id_parent,
            );

            $get = $builder->where(['id' => $id])->get()->getRow();
            $dir = str_replace("\\", "/", FCPATH . 'uploads/file');
            if (!empty($_FILES['file']['name'])) {
                if ($file->isValid() && !$file->hasMoved()) {

                    $newName = $file->getRandomName();
                    $file->move($dir, $newName, true);

                    $save['file'] = $newName;
                    $save['size_file_kb'] = $file->getSize();
                    $save['type_file'] = $file->getClientExtension();

                    if ($method === 'edit') {
                        if ($get->file != null) {
                            //hapus file yg ada diserver
                            unlink($dir . '/' . $get->file);
                        }
                    }
                }
            }

            if ($method === 'add') {
                $save['user_created'] = session()->get('id_user');
                $save['updated_at'] = date('Y-m-d H:i:s');
                $action = $builder->insert($save);
            } else {
                $save['updated_at'] = date('Y-m-d H:i:s');
                $action = $builder->update($save, ['id' => $id]);
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
        $builder = $this->db->table('tbl_file');
        $get = $builder->getWhere(['id' => $id])->getRow();
        $dir = str_replace("\\", "/", FCPATH . 'uploads/file');

        if ($get->file != null) {
            //hapus gambar yg ada diserver
            unlink($dir . '/' . $get->file);
        }

        $action = $builder->delete(['id' => $id]);
        if ($action) {
            echo json_encode(['status' => TRUE]);
        } else {
            echo json_encode(['status' => FALSE]);
        }
    }
}
