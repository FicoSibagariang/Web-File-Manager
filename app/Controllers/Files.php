<?php

namespace App\Controllers;

class Files extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Files';
        return view('files/files', $data);
    }   
}
