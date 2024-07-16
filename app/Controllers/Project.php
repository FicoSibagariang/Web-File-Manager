<?php

namespace App\Controllers;

class Project extends BaseController
{
    public function index(): string
    {
        return view('pages/project');
    }
}
