<?php

namespace App\Controllers;

use App\Models\Mod_login;

class Login extends BaseController
{
    protected $Mod_login;
    public function __construct()
    {
        $this->Mod_login = new Mod_login();
        helper('my_helper');
    }

    public function index()
    {
        $logged_in = session()->get('logged_in');
        if ($logged_in == TRUE) {
            return redirect()->to('/dashboard');
        } else {
            return view('pages/login');
        }
    }

    function loginAkun()
    {

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        if ($username != NULL && $password != NULL) {
            //cek username database
            $username = anti_injection($username);
            $status = $this->Mod_login->check_status($username);

            if ($this->Mod_login->check_db($username)->getNumRows() == 1) {
                if ($status->status != '0') {
                    $db = $this->Mod_login->check_db($username)->getRow();

                    if (hash_verified(anti_injection($password), $db->password)) {
                        //cek username dan password yg ada di database
                        $userdata = array(
                            'id_user'     => $db->id_user,
                            'username'    => $db->username,
                            'photo'       => $db->photo,
                            'full_name'   => ucfirst($db->nama),
                            'logged_in'   => TRUE,
                        );

                        $save['last_login_at'] = date('Y-m-d H:i:s');
                        $this->db->table('tbl_user')->where('id_user', $db->id_user)->update($save);

                        session()->set($userdata);

                        $data['status'] = TRUE;
                        $data['url'] = "dashboard";
                        echo json_encode($data);
                    } else {

                        $data['pesan'] = "Username atau Password Salah!";
                        $data['error'] = TRUE;
                        echo json_encode($data);
                    }
                } else {
                    $data['pesan'] = "Akun Anda belum aktif, silakan hubungi administrator";
                    $data['error'] = TRUE;
                    echo json_encode($data);
                }
            } else {
                $data['pesan'] = "Akun Anda belum terdaftar!";
                $data['error'] = TRUE;
                echo json_encode($data);
            }
        } else {
            $data['pesan'] = "Username atau Password tidak boleh kosong!";
            $data['error'] = TRUE;
            echo json_encode($data);
        }
    }

    public function logout()
    {

        // Menghapus semua data sesi
        session()->destroy();
        // Membersihkan semua cache
        cache()->clean();
        ob_clean();

        return redirect()->to('/login');
    }
}

/* End of file Login.php */