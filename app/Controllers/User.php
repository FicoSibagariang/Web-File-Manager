<?php

namespace App\Controllers;

use App\Libraries\Fungsi;
use App\Models\Mod_user;

class User extends BaseController
{
    protected $Mod_user;
    protected $Fungsi;
    public function __construct()
    {
        $this->Mod_user = new Mod_user();
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

        $data['judul'] = 'Manajemen User';
        $data['modal_data'] = show_my_modal('user/modal_user', $data);
        $data['js'] = view('user/user-js', $data);
        return view('user/home', $data);
    }

    public function ajax_list()
    {
        ini_set('memory_limit', '512M');
        set_time_limit(3600);
        $str_query = "SELECT * FROM tbl_user";

        $count = $this->db->query($str_query);
        $query = $this->db->query($str_query . " order by " . ($_POST['draw'] == "1" ? " id_user ASC" : " id_user ASC "));

        $data = array();
        $no = $_POST['start'];
        foreach ($query->getResult() as $tampil) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $tampil->nama;
            $row[] = $tampil->username;
            $row[] = $tampil->status;
            $row[] = $tampil->id_user;
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


    public function edituser($id)
    {
        $data = $this->Mod_user->getUser($id);
        echo json_encode($data);
    }

    public function save()
    {
        $builder = $this->db->table('tbl_user');
        $method = $this->request->getVar('method');
        $id = $this->request->getVar('id_user');
        $pasfoto = $this->request->getFile('pasfoto');

        $rules = [
            'username' => [
                'rules'  => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Username tidak boleh kosong.',
                    'min_length' => 'Username minimal 5 karakter'
                ],
            ],
            'nama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong.',
                ],
            ],
            'status' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Status tidak boleh kosong.',
                ],
            ],
            'id_level' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Hak Akses tidak boleh kosong.',
                ],
            ],
        ];
        if (!empty($_FILES['pasfoto']['name'])) {
            $rules['pasfoto'] = [
                'rules'  => 'uploaded[pasfoto]|mime_in[pasfoto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pasfoto tidak boleh kosong.',
                ]
            ];
        }

        if ($method === 'add') {
            $rules['password'] = [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong.',
                ],
            ];
        }

        if (!$this->validate($rules)) {
            $data = [
                'status'    => false,
                'errors'    => [
                    'username' => $this->validator->getError('username'),
                    'nama' => $this->validator->getError('nama'),
                    'password' => $this->validator->getError('password'),
                    'status' => $this->validator->getError('status'),
                    'id_level' => $this->validator->getError('id_level'),
                    'validasi_pasfoto' => $this->validator->getError('uploaded'),
                ]
            ];
            echo json_encode($data);
        } else {
            $username = $this->request->getVar('username');
            if ($method === 'add') {
                $cek = $this->Mod_user->cekUsername($username);
            } else {
                $cek = $this->Mod_user->cekUsernameUpdate($username, $id);
            }

            if ($cek->getNumRows() > 0) {
                $data['pesan'] = "Username Sudah Ada!!";
                $data['error'] = TRUE;
                echo json_encode($data);
            } else {
                $save  = array(
                    'username' => $this->request->getVar('username'),
                    'nama' => $this->request->getVar('nama'),
                    'password'  => get_hash($this->request->getVar('password')),
                    'id_level'  => $this->request->getVar('id_level'),
                    'status' => $this->request->getVar('status')
                );

                $get = $builder->where(['id_user' => $id])->get()->getRow();
                $dir = str_replace("\\", "/", FCPATH . 'uploads/user');
                if (!empty($_FILES['pasfoto']['name'])) {
                    if ($pasfoto->isValid() && !$pasfoto->hasMoved()) {

                        $newName = $pasfoto->getRandomName();
                        $pasfoto->move($dir, $newName, true);

                        $save['photo'] = $newName;

                        if ($method === 'edit') {
                            if ($get->photo != null) {
                                //hapus gambar yg ada diserver
                                unlink($dir . '/' . $get->photo);
                            }
                        }
                    }
                }

                if ($method === 'add') {
                    $action = $builder->insert($save);
                } else {
                    $save['updated_at'] = date('Y-m-d H:i:s');
                    $action = $builder->update($save, ['id_user' => $id]);
                }
                if ($action) {
                    echo json_encode(['status' => TRUE]);
                } else {
                    echo json_encode(['status' => FALSE]);
                }
            }
        }
    }


    public function delete()
    {
        $id = $this->request->getVar('id');
        $builder = $this->db->table('tbl_user');
        $get = $builder->getWhere(['id_user' => $id])->getRow();
        $dir = str_replace("\\", "/", FCPATH . 'uploads/user');

        if ($get->photo != null) {
            //hapus gambar yg ada diserver
            unlink($dir . '/' . $get->photo);
        }

        $action = $builder->delete(['id_user' => $id]);
        if ($action) {
            echo json_encode(['status' => TRUE]);
        } else {
            echo json_encode(['status' => FALSE]);
        }
    }

    public function reset()
    {
        $id = $this->request->getVar('id');
        $save['password']  = get_hash('password123');
        $action = $this->db->table('tbl_user')->update($save, ['id_user' => $id]);

        if ($action) {
            echo json_encode(['status' => TRUE]);
        } else {
            echo json_encode(['status' => FALSE]);
        }
    }
}
