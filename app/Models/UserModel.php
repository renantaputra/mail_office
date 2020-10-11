<?php

namespace App\Models;

use CodeIgniter\Database\SQLite3\Table;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id_user';

    protected $allowedFields = [
        'username', 'password', 'nama_lengkap', 'email', 'alamat',
        'telp', 'pengalaman', 'level', 'status', 'foto'
    ];

    protected $useTimestamps = true;

    public function getUser($id_user = false)
    {
        if ($id_user == false) {
            return $this->findAll();
        } else {
            return $this->where(['id_user' => $id_user])->first();
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

    public function updatePassword($new_pass, $id_user)
    {
        $updatePass = $this->db->table('user');
        $updatePass->where('id_user', $id_user);
        return $updatePass->update(['password' => $new_pass]);
    }

    public function updateFoto($new_foto, $id_user)
    {
        $updateFoto = $this->db->table('user');
        $updateFoto->where('id_user', $id_user);
        return $updateFoto->update(['foto' => $new_foto]);
    }
}
