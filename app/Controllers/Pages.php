<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
        ];
        return view('pages/home', $data);
    }
    public function manage()
    {
        $data = [
            'title' => 'File Manager',
        ];
        return view('pages/manage', $data);
    }
    public function project()
    {
        $data = [
            'title' => 'Project',
        ];
        return view('pages/project', $data);
    }
    public function files()
    {
        $data = [
            'title' => 'Files',
        ];
        return view('pages/files', $data);
    }
    public function profsettings()
    {
        $data = [
            'title' => 'Profile Settings',
        ];
        return view('pages/profsettings', $data);
    }

    public function settings()
    {
        $data = [
            'title' => 'Settings',
        ];
        return view('pages/settings', $data);
    }
    
}
