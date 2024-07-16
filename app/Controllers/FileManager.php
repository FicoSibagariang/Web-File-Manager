<?php

namespace App\Controllers;

class FileManager extends BaseController
{
    public function index(): string
    {
        return view('pages/manage');
    }
}
