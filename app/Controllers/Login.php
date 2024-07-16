<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Halaman Login',
        ];

        $ModelMember = new \App\Models\ModelMember();
        $signin = $this->request->getPost('signin');
        if ($signin) {
            $member_username = $this->request->getPost('member_username');
            $member_password = $this->request->getPost('member_password');

            if ($member_username == '' or $member_password == '') {
                $error = "Silahkan masukkan username dan password";
            }
            if (empty($error)) {
                $dataMember = $ModelMember->where("member_username", $member_username)->first();
                if ($dataMember['']) {
                }
            }
            if ($error) {
                session()->setFlashdata('member_username', $member_username);
                session()->setFlashdata('error', $error);
                return redirect()->to("login");
            }
        }
        return view('pages/login');
    }
}
