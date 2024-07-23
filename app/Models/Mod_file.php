<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Mod_file extends Model
{
    public function cekUsername($username)
    {
        $query = $this->db->table('tbl_user')
            ->where('username', $username)
            ->get();
        return $query;
    }

    public function cekFile($nama)
    {
        $query = $this->db->table('tbl_project')
            ->where('nama', $nama)
            ->get();
        return $query;
    }

    public function getById($id)
    {
        $query = $this->db->table('tbl_file')
            ->where('id', $id)
            ->get()->getRow();
        return $query;
    }
}
