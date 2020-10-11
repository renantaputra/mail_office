<?php

namespace App\Models;

use CodeIgniter\Model;

class Dashboard_model extends Model
{
    // hitung total data pada User
    public function getCountUser()
    {
        return $this->db->table("user")
            ->where('user.status', 'Active')
            ->countAllResults();
    }

    // hitung total data pada bagian
    public function getCountBagian()
    {
        return $this->db->table("bagian")->countAll();
    }

    // hitung total data pada surat masuk
    public function getCountSuratMasuk()
    {
        return $this->db->table("surat_masuk")
            ->where('surat_masuk.id_user', session()->get('id_user'))
            ->countAllResults();
    }

    // hitung total data pada surat masuk Belum Dibaca
    public function getCountSuratMasukBelumDibaca()
    {
        return $this->db->table("surat_masuk")
            ->where('surat_masuk.id_user', session()->get('id_user'))
            ->where('surat_masuk.dibaca', '0')
            ->countAllResults();
    }

    // hitung total data pada surat keluar
    public function getCountSuratKeluar()
    {
        return $this->db->table("surat_keluar")
            ->where('surat_keluar.nama_pengirim', session()->get('nama_lengkap'))
            ->countAllResults();
    }

    public function getSuratMasuk()
    {
        return $this->db->table("surat_masuk")->get();
    }
}
