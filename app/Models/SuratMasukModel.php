<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratMasukModel extends Model
{
    protected $table      = 'surat_masuk';
    protected $primaryKey = 'id_sm';

    protected $useTimestamps = true;
    protected $createdField = 'tgl_surat';
    protected $updatedField = 'tgl_surat';

    public function insertSuratMasuk($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function getSuratMasuk($id_sm = false)
    {
        if ($id_sm === false) {
            return $this->table('surat_masuk')
                ->join('user', 'user.id_user = surat_masuk.id_user')
                ->where('surat_masuk.id_user', session()->get('id_user'))
                ->orderby('surat_masuk.id_sm desc')
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

    public function updateBaca($data, $id_sm)
    {
        return $this->db->table($this->table)->update($data, ['id_sm' => $id_sm]);
    }

    public function deleteSuratMasuk($id_sm)
    {
        return $this->db->table($this->table)->delete(['id_sm' => $id_sm]);
    }

    public function pelaporanSuratMasuk($tgl_awal = null, $tgl_akhir = null)
    {
        if ($tgl_awal === null && $tgl_akhir === null) {
            return $this->table('surat_masuk')
                ->join('user', 'user.id_user = surat_masuk.id_user')
                ->where('surat_masuk.id_user', session()->get('id_user'))
                ->where('surat_masuk.tgl_surat >=', '1998-10-29')
                ->where('surat_masuk.tgl_surat <=', '1998-10-29')
                ->orderby('surat_masuk.id_sm asc')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('surat_masuk')
                ->join('user', 'user.id_user = surat_masuk.id_user')
                ->where('surat_masuk.id_user', session()->get('id_user'))
                ->where('surat_masuk.tgl_surat >=', $tgl_awal)
                ->where('surat_masuk.tgl_surat <=', $tgl_akhir)
                ->orderby('surat_masuk.id_sm asc')
                ->get()
                ->getResultArray();
        }
    }
}
