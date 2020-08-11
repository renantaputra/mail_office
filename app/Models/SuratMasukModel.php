<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratMasukModel extends Model
{
    protected $table      = 'surat_masuk';
    protected $primaryKey = 'id_sm';

    protected $useTimestamps = true;

    public function getSuratMasuk($id_sm = false)
    {
        if ($id_sm === false) {
            return $this->table('surat_masuk')
                ->join('user', 'user.id_user = surat_masuk.id_user')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('surat_masuk')
                ->join('user', 'user.id_user = surat_masuk.id_user')
                ->where('surat_masuk.id_sm', $id_sm)
                ->get()
                ->getRowArray();
        }
    }
}
