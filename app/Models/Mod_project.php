<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Mod_project extends Model
{
    public function cekUsername($username)
    {
        $query = $this->db->table('tbl_project')
            ->where('username', $username)
            ->get();
        return $query;
    }

    public function cekProjectUpdate($nama_project)
    {
        $query = $this->db->table('tbl_project')
            ->where('nama_project', $nama_project)
            ->get();
        return $query;
    }

    public function getProject($id)
    {
        $query = $this->db->table('tbl_project')
            ->where('id_project', $id)
            ->get()->getRow();
        return $query;
    }
}
