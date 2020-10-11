<?php

namespace App\Controllers;

use App\Models\Dashboard_model;
use App\Models\SuratMasukModel;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->cek_login();
        $this->dashboard_model = new Dashboard_model();
        $this->suratMasukModel = new suratMasukModel();
    }
    public function index()
    {
        if ($this->cek_login() == FALSE) {
            session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data');
            return redirect()->to('/auth/login');
            if (session()->get('cek' === 'Maffice@Project_2020')) {
                session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data');
                return redirect()->to('/auth/login');
            }
        }

        $data = [
            'title' => 'Maffice | Beranda',
            'total_user' => $this->dashboard_model->getCountUser(),
            'total_bagian' => $this->dashboard_model->getCountBagian(),
            'total_surat_masuk' => $this->dashboard_model->getCountSuratMasuk(),
            'total_surat_keluar' => $this->dashboard_model->getCountSuratKeluar(),
            'surat_masuk_baru' => $this->dashboard_model->getCountSuratMasukBelumDibaca()

        ];

        return view('dashboard', $data);
    }
}
