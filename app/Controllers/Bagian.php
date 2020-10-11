<?php

namespace App\Controllers;

use App\Models\BagianModel;

class Bagian extends BaseController
{
    public function __construct()
    {
        $this->cek_login();
        $this->bagianModel = new BagianModel();
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

        $currentPage = $this->request->getVar('page_bagian') ? $this->request->getVar('page_bagian') : 1;

        $data = [
            'title'  => 'Maffice | Bagian',
            'bagian' => $this->bagianModel->getBagian(),
            'bagian' => $this->bagianModel->paginate(5, 'bagian'),
            'pager'  => $this->bagianModel->pager,
            'currentPage' => $currentPage
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

        $data = [
            'nama_bagian'     => $this->request->getPost('nama_bagian'),
        ];

        if ($validation->run($data, 'bagian') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('bagian/create'));
        } else {
            $simpan = $this->bagianModel->insertBagian($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Bagian Berhasil Ditambahkan');
                return redirect()->to(base_url('bagian'));
            }
        }
    }

    public function edit($id_bagian)
    {
        $data = [
            'title' => 'Maffice | Edit Bagian',
            'bagian' => $this->bagianModel->getBagian($id_bagian)->getRowArray()
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
            $ubah = $this->bagianModel->updateBagian($data, $id_bagian);
            if ($ubah) {
                session()->setFlashdata('info', 'Bagian Berhasil Di Update');
                return redirect()->to(base_url('bagian'));
            }
        }
    }

    public function delete($id_bagian)
    {
        $hapus = $this->bagianModel->deleteBagian($id_bagian);
        if ($hapus) {
            session()->setFlashdata('warning', 'Bagian berhasil Di Hapus');
            return redirect()->to(base_url('bagian'));
        }
    }
}
