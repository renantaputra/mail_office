<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratKeluarModel extends Model
{
    protected $table      = 'surat_keluar';
    protected $primaryKey = 'id_sk';

    protected $allowedFields = ['no_surat', 'tgl_surat', 'perihal'];

    protected $useTimestamps = true;

    public function getSuratKeluar($id_sk = false)
    {
        if ($id_sk === false) {
            return $this->table('surat_keluar')
                ->join('user', 'user.id_user = surat_keluar.id_user')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('surat_keluar')
                ->join('user', 'user.id_user = surat_keluar.id_user')
                ->where('surat_keluar.id_sk', $id_sk)
                ->get()
                ->getRowArray();
        }
    }

    public function insertSuratKeluar($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateSuratKeluar($data, $id_sk)
    {
        return $this->db->table($this->table)->update($data, ['id_sk' => $id_sk]);
    }

    public function deleteSuratKeluar($id_sk)
    {
        return $this->db->table($this->table)->delete(['id_sk' => $id_sk]);
    }
}
