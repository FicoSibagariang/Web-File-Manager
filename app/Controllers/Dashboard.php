<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Dashboard';
        return view('pages/home', $data);
    }
}
