<?php

namespace App\Models;

use CodeIgniter\Model;

class BagianModel extends Model
{
    protected $table      = 'bagian';
    protected $primaryKey = 'id_bagian';

    protected $allowedFields = ['nama_bagian'];

    public function getBagian($id_bagian = false)
    {
        if ($id_bagian === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_bagian' => $id_bagian]);
        }
    }

    public function insertBagian($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateBagian($data, $id_bagian)
    {
        return $this->db->table($this->table)->update($data, ['id_bagian' => $id_bagian]);
    }

    public function deleteBagian($id_bagian)
    {
        return $this->db->table($this->table)->delete(['id_bagian' => $id_bagian]);
    }
}
