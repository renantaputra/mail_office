<?php

namespace App\Controllers;

use App\Models\Dashboard_model;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->cek_login();
        $this->dashboard_model = new Dashboard_model();
    }
    public function index()
    {
        if ($this->cek_login() == FALSE) {
            session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data');
            return redirect()->to('/auth/login');
        }

        $data = [
            'title' => 'Maffice | Beranda',
            'total_user' => $this->dashboard_model->getCountUser(),
            'total_bagian' => $this->dashboard_model->getCountBagian(),
            'total_surat_masuk' => $this->dashboard_model->getCountSuratMasuk(),
            'total_surat_keluar' => $this->dashboard_model->getCountSuratKeluar()

        ];

        return view('dashboard', $data);
    }
}
