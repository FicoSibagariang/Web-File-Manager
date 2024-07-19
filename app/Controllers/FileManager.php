<?php

namespace App\Controllers;

class FileManager extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'File Manager';
        return view('pages/manage', $data);
    }
}
