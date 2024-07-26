<?php

namespace App\Controllers;

class Deleted extends BaseController
{
    public function index(): string
    {
        $data['judul'] = 'Deleted Files';
        return view('pages/deleted', $data);
    }   
}
