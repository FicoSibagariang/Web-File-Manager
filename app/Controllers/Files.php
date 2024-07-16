<?php

namespace App\Controllers;

class Files extends BaseController
{
    public function index(): string
    {
        return view('pages/files');
    }
}
