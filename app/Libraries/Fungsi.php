<?php

namespace App\Libraries;

use App\Models\MyModel;

class Fungsi
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function greet($name)
    {
        return "Hello, " . $name;
    }

    function rupiah($nominal)
    {
        $rp = number_format($nominal, 0, ',', '.');
        return $rp;
    }

    public function tanggal_lap($tanggal)
    {
        $bulan = array(
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $p = explode('/', $tanggal);
        return $p[2] . ' ' . $bulan[(int)$p[1]] . ' ' . $p[0];
    }

    public function tanggalindo($tanggal)
    {
        $bulan = array(
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $p = explode('-', $tanggal);
        return $p[2] . ' ' . $bulan[(int)$p[1]] . ' ' . $p[0];
    }

    public function ValidasiLogin($logged_in)
    {
        if ($logged_in != TRUE || empty($logged_in)) {
            return redirect()->to('/login');
        }
    }
}