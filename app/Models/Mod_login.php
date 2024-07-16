<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Mod_login extends Model
{

    public function check_db($username)
    {
        return $this->db->table('tbl_user')->where('username', $username)->get();
    }

    public function get_role($username)
    {
        $query = $this->db->table('tbl_user a')
            ->select('b.nama_level')
            ->join('tbl_userlevel b', 'a.id_level = b.id_level')
            ->where('username', $username)
            ->get()->getRow();

        return $query;
    }

    public function check_status($username)
    {
        $query = $this->db->table('tbl_user')
            ->select('status')
            ->where('username', $username)
            ->get()->getRow();
        return $query;
    }

    public function cek_statusLogout_peserta($id_peserta)
    {
        $query = $this->db->table('tbl_user')
            ->where('id_user', $id_peserta)
            ->where('status_logout', 'N')
            ->get()->getRow();
        return $query;
    }
}
