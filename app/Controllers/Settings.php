<?php

namespace App\Controllers;

class Settings extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Manajemen User';
        return view('pages/settings', $data);
    }
}
