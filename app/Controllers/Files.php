<?php

namespace App\Controllers;

class Files extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Files';
        return view('pages/files', $data);
    }   
}
