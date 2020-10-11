<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth_model extends Model
{
    protected $table = "user";

    public function cek_login($email)
    {

        $query = $this->table('user')
            ->where('email', $email)
            ->countAll();

        if ($query >  0) {
            $hasil = $this->table('user')
                ->where('email', $email)
                ->limit(1)
                ->get()
                ->getRowArray();
        } else {
            $hasil = array();
        }
        return $hasil;
    }

    public function register($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
