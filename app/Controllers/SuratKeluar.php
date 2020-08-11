<?php

namespace App\Controllers;

use App\Models\SuratKeluarModel;
use App\Models\UserModel;

class SuratKeluar extends BaseController
{
    protected $helpers = [];
    public function __construct()
    {
        helper(['form']);
        $this->cek_login();
        $this->userModel = new UserModel();
        $this->suratKeluarModel = new SuratKeluarModel();
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
            'title' => 'Maffice | Data Surat | Surat Keluar',
            'surat_keluar' => $this->suratKeluarModel->getSuratKeluar(),
            'surat_keluar' => $this->suratKeluarModel->join('user', 'user.id_user = surat_keluar.id_user')->paginate($paginate, 'surat_keluar'),
            'pager'  => $this->suratKeluarModel->pager,
            'user' => $user,
            'keyword' => $keyword
        ];

        return view('surat_keluar/index', $data);
    }

    public function create()
    {
        $user = $this->userModel->where('status', 'Active')->findAll(); //status user
        $data = [
            'title' => 'Maffice | Data Surat | Tambah Surat Keluar',
            'user' => ['' => 'Pilih User'] + array_column($user, 'nama_lengkap', 'id_user')
        ];

        return view('surat_keluar/create', $data);
    }

    public function surat_keluar()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'id_user'           => $this->request->getPost('id_user'),
            'no_surat'          => $this->request->getPost('no_surat'),
            'tgl_surat'         => $this->request->getPost('tgl_surat'),
            'perihal'           => $this->request->getPost('perihal'),
        );

        if ($validation->run($data, 'surat_keluar') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('SuratKeluar/create'));
        } else {
            // insert
            $simpan = $this->suratKeluarModel->insertSuratKeluar($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Surat Keluar Berhasil di tambahkan');
                return redirect()->to(base_url('SuratKeluar'));
            }
        }
    }

    public function show($id_sk)
    {
        $data = [
            'title' => 'Maffice | Data Surat | Show Surat Keluar',
            'surat_keluar' => $this->suratKeluarModel->getSuratKeluar($id_sk)
        ];

        return view('surat_keluar/show', $data);
    }

    public function edit($id_sk)
    {
        $user = $this->userModel->where('status', 'Active')->findAll();

        $data = [
            'title' => 'Maffice | Data Surat | Edit Surat Keluar',
            'user' => ['' => 'Pilih User'] + array_column($user, 'nama_lengkap', 'id_user'),
            'surat_keluar' => $this->suratKeluarModel->getSuratKeluar($id_sk)
        ];

        return view('surat_keluar/edit', $data);
    }

    public function update()
    {
        $id_sk = $this->request->getPost('id_sk');

        $validation =  \Config\Services::validation();

        $data = array(
            'id_user'           => $this->request->getPost('id_user'),
            'no_surat'          => $this->request->getPost('no_surat'),
            'tgl_surat'         => $this->request->getPost('tgl_surat'),
            'perihal'           => $this->request->getPost('perihal'),
        );

        if ($validation->run($data, 'surat_keluar') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('surat_keluar/edit/' . $id_sk));
        } else {
            // update
            $ubah = $this->suratKeluarModel->updateSuratKeluar($data, $id_sk);
            if ($ubah) {
                session()->setFlashdata('info', 'Surat Keluar berhasil di Update');
                return redirect()->to(base_url('SuratKeluar'));
            }
        }
    }

    public function delete($id_sk)
    {
        $hapus = $this->suratKeluarModel->deleteSuratKeluar($id_sk);
        if ($hapus) {
            session()->setFlashdata('warning', 'Surat Keluar Berhasil Di Hapus');
            return redirect()->to(base_url('SuratKeluar'));
        }
    }

    public function pelaporan()
    {
        $data = [
            'title' => 'Maffice | Pelaporan | Surat Keluar',
        ];


        return view('pelaporan/surat_keluar', $data);
    }
}
