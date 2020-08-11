<?php

namespace App\Controllers;

use App\Models\BagianModel;

class Bagian extends BaseController
{
    public function __construct()
    {
        $this->cek_login();
    }

    public function index()
    {
        if ($this->cek_login() == FALSE) {
            session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data');
            return redirect()->to('/auth/login');
        }

        // paginate
        $paginate = 5;

        $bagian = new BagianModel();

        $data = [
            'title'  => 'Maffice | Bagian',
            'bagian' => $bagian->getBagian(),
            'bagian' => $bagian->paginate($paginate, 'bagian'),
            'pager'  => $bagian->pager
        ];

        return view('bagian/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Maffice | Tambah Bagian',
        ];

        return view('bagian/create', $data);
    }

    public function bagian()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'nama_bagian'     => $this->request->getPost('nama_bagian'),
        );

        if ($validation->run($data, 'bagian') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('bagian/create'));
        } else {
            $model = new BagianModel();
            $simpan = $model->insertBagian($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Bagian Berhasil Ditambahkan');
                return redirect()->to(base_url('bagian'));
            }
        }
    }

    public function edit($id_bagian)
    {
        $model = new BagianModel();
        $data = [
            'title' => 'Maffice | Edit Bagian',
            'bagian' => $model->getBagian($id_bagian)->getRowArray()
        ];
        echo view('bagian/edit', $data);
    }

    public function update()
    {
        $id_bagian = $this->request->getPost('id_bagian');

        $validation =  \Config\Services::validation();

        $data = array(
            'nama_bagian'     => $this->request->getPost('nama_bagian')
        );

        if ($validation->run($data, 'bagian') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('bagian/edit/' . $id_bagian));
        } else {
            $model = new BagianModel();
            $ubah = $model->updateBagian($data, $id_bagian);
            if ($ubah) {
                session()->setFlashdata('info', 'Bagian Berhasil Di Update');
                return redirect()->to(base_url('bagian'));
            }
        }
    }

    public function delete($id_bagian)
    {
        $model = new BagianModel();
        $hapus = $model->deleteBagian($id_bagian);
        if ($hapus) {
            session()->setFlashdata('warning', 'Bagian berhasil Di Hapus');
            return redirect()->to(base_url('bagian'));
        }
    }
}
