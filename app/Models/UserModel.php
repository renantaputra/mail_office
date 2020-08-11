<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id_user';

    protected $allowedFields = [
        'username', 'password', 'nama_lengkap', 'email', 'alamat',
        'telp', 'pengalaman', 'level', 'status'
    ];

    protected $useTimestamps = true;

    public function getUser($id_user = false)
    {
        if ($id_user === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_user' => $id_user]);
        }
    }

    public function insertUser($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateUser($data, $id_user)
    {
        return $this->db->table($this->table)->update($data, ['id_user' => $id_user]);
    }

    public function deleteUser($id_user)
    {
        return $this->db->table($this->table)->delete(['id_user' => $id_user]);
    }
}
