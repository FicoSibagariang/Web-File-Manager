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

    public function word()
    {
        $data['judul'] = 'Word Files';

        $data['type_file'] = 'docx';
        $data['js'] = view('manage/file-js', $data);
        return view('manage/file', $data);
    }

    public function pdf()
    {
        $data['judul'] = 'PDF Files';

        $data['type_file'] = 'pdf';
        $data['js'] = view('manage/file-js', $data);
        return view('manage/file', $data);
    }

    public function powerpoint()
    {
        $data['judul'] = 'PPT Files';

        $data['type_file'] = 'pptx';
        $data['js'] = view('manage/file-js', $data);
        return view('manage/file', $data);
    }

    public function excel()
    {
        $data['judul'] = 'Excel Files';

        $data['type_file'] = 'xlsx';
        $data['type_file'] = 'csv';
        $data['js'] = view('manage/file-js', $data);
        return view('manage/file', $data);
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
        $str_query = "SELECT * FROM tbl_file where id_parent=" . $param_parent_id . " " . ($_POST['search']['value'] != "" ? "AND nama like '%" . $_POST['search']['value'] . "%'" : "");

        $count = $this->db->query($str_query);
        $query = $this->db->query($str_query . " ORDER BY " . ($_POST['draw'] == "1" ? " type asc" : " type asc") . " LIMIT " . $_POST['length'] . " OFFSET " . $_POST['start']);

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
        $str_query = "SELECT a.*,a.updated_at as last_modified, b.nama as created_by FROM tbl_file a LEFT JOIN tbl_user b ON a.user_created=b.id_user where a.type='file'";

        $count = $this->db->query($str_query);
        $query = $this->db->query($str_query . " ORDER BY " . ($_POST['draw'] == "1" ? "  a.updated_at ASC" : "  a.updated_at ASC "));

        $data = array();
        $no = $_POST['start'];
        foreach ($query->getResult() as $tampil) {
            $no++;
            $row = array();
            $row[] = $tampil->nama . '.' . $tampil->type_file;
            $row[] = $tampil->last_modified;
            $row[] = $this->convert_filesize($tampil->size_file_kb);
            $row[] = $tampil->created_by;
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

    public function convert_filesize($bytes, $decimals = 2)
    {
        $size = array(' B', ' kB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
        $factor = floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
    }


    public function edit($id)
    {
        $data = $this->Mod_file->getById($id);
        echo json_encode($data);
    }

    public function get_data_file()
    {
        $id_parent = $this->request->getVar('id_parent');

        $data = $this->Mod_file->getByIdParent($id_parent, 'file');

        $response = array(
            "status" => 'sukses',
            "data" => $data
        );

        echo json_encode($response);
    }

    public function get_data_file_byType()
    {
        $nama = $this->request->getVar('nama');
        $id_parent = $this->request->getVar('id_parent');
        $type_file = $this->request->getVar('type_file');

        $data = $this->Mod_file->getFile($id_parent, 'file', $type_file, $nama);

        $response = array(
            "status" => 'sukses',
            "data" => $data
        );

        echo json_encode($response);
    }

    public function get_data_folder()
    {
        $id_parent = $this->request->getVar('id_parent');

        $data = $this->Mod_file->getByIdParent($id_parent, 'folder');

        $response = array(
            "status" => 'sukses',
            "data" => $data
        );

        echo json_encode($response);
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

            date_default_timezone_set('Asia/Jakarta');

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

    public function type()
    {
        $data['judul'] = 'Word Files';
        $data['js'] = view('manage/manage-js', $data);
        return view('/manage/type', $data);
    }

    public function folder()
    {
        $data['judul'] = 'Folder';
        $data['js'] = view('manage/manage-js', $data);
        return view('/manage/folder', $data);
    }
}
