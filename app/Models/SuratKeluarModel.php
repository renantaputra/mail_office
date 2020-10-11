<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratKeluarModel extends Model
{
    protected $table      = 'surat_keluar';
    protected $primaryKey = 'id_sk';

    protected $allowedFields = ['no_surat', 'tgl_surat', 'perihal', 'nama_pengirim', 'deskripsi', 'lampiran'];

    protected $useTimestamps = true;
    protected $createdField = 'tgl_surat';
    protected $updatedField = 'tgl_surat';

    public function getSuratKeluar($id_sk = false)
    {
        if ($id_sk === false) {
            return $this->table('surat_keluar')
                ->join('user', 'user.id_user = surat_keluar.id_user')
                ->where('surat_keluar.nama_pengirim', session()->get('nama_lengkap'))
                ->orderby('surat_keluar.id_sk desc')
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

    public function pelaporanSuratKeluar($tgl_awal = null, $tgl_akhir = null)
    {
        if ($tgl_awal === null && $tgl_akhir === null) {
            return $this->table('surat_keluar')
                ->join('user', 'user.id_user = surat_keluar.id_user')
                ->where('surat_keluar.nama_pengirim', session()->get('nama_lengkap'))
                ->where('surat_keluar.tgl_surat >=', '1998-10-98')
                ->where('surat_keluar.tgl_surat <=', '1998-10-98')
                ->orderby('surat_keluar.id_sk asc')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('surat_keluar')
                ->join('user', 'user.id_user = surat_keluar.id_user')
                ->where('surat_keluar.nama_pengirim', session()->get('nama_lengkap'))
                ->where('surat_keluar.tgl_surat >=', $tgl_awal)
                ->where('surat_keluar.tgl_surat <=', $tgl_akhir)
                ->orderby('surat_keluar.id_sk asc')
                ->get()
                ->getResultArray();
        }
    }
}
