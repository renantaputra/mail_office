<?php

namespace App\Models;

use CodeIgniter\Model;

class Dashboard_model extends Model
{
    // hitung total data pada User
    public function getCountUser()
    {
        return $this->db->table("user")->countAll();
    }

    // hitung total data pada bagian
    public function getCountBagian()
    {
        return $this->db->table("bagian")->countAll();
    }

    // hitung total data pada surat masuk
    public function getCountSuratMasuk()
    {
        return $this->db->table("surat_masuk")->countAll();
    }

    // hitung total data pada surat keluar
    public function getCountSuratKeluar()
    {
        return $this->db->table("surat_keluar")->countAll();
    }
}
