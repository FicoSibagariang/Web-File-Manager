<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Mod_user extends Model
{

    public function cekUsername($username)
    {
        $query = $this->db->table('tbl_user')
            ->where('username', $username)
            ->get();
        return $query;
    }

    public function cekUsernameUpdate($username, $id)
    {
        $query = $this->db->table('tbl_user')
            ->where('username', $username)
            ->whereNotIn('id_user', [$id])
            ->get();
        return $query;
    }

    public function getUser($id)
    {
        $query = $this->db->table('tbl_user')
            ->where('id_user', $id)
            ->get()->getRow();
        return $query;
    }

}