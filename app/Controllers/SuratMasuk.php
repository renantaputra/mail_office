<?php

namespace App\Controllers;

use App\Models\SuratMasukModel;
use App\Models\UserModel;

class SuratMasuk extends BaseController
{
    protected $helpers = [];
    public function __construct()
    {
        helper(['form']);
        $this->cek_login();
        $this->userModel = new UserModel();
        $this->suratMasukModel = new SuratMasukModel();
    }

    public function index()
    {
        if ($this->cek_login() == FALSE) {
            session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data');
            return redirect()->to('/auth/login');
        }

        // paginate
        $paginate = 5;

        $user     = $this->request->getGet('user');
        $keyword  = $this->request->getGet('keyword');

        $data = [
            'title' => 'Maffice | Data Surat | Surat Masuk',
            'surat_masuk' => $this->suratMasukModel->getSuratMasuk(),
            'surat_masuk' => $this->suratMasukModel->join('user', 'user.id_user = surat_masuk.id_user')->paginate($paginate, 'surat_masuk'),
            'pager'  => $this->suratMasukModel->pager,
            'user' => $user,
            'keyword' => $keyword
        ];

        return view('surat_masuk/index', $data);
    }

    public function pelaporan()
    {
        $data = [
            'title' => 'Maffice | Pelaporan | Surat Masuk',
        ];


        return view('pelaporan/surat_masuk', $data);
    }
}
