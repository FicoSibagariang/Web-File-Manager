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

    public function getByIdParent($id_parent = null, $type = null)
    {
        if ($id_parent) {
            $query = $this->db->table('tbl_file a')
                ->select('a.*,b.nama as nama_created')
                ->join('tbl_user b ', 'a.user_created=b.id_user')
                ->where('a.id_parent', $id_parent)
                ->where('a.type', $type)
                ->get()->getResult();
        } else {
            $query = $this->db->table('tbl_file a')
                ->select('a.*,b.nama as nama_created')
                ->join('tbl_user b ', 'a.user_created=b.id_user')
                ->where('a.type', $type)
                ->get()->getResult();
        }
        return $query;
    }
}
