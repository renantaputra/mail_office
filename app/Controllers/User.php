<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
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

        $user = new UserModel();

        $data = [
            'title' => 'Maffice | User',
            'user' => $user->getUser(),
            'user' => $user->paginate($paginate, 'user'),
            'pager' => $user->pager
        ];

        return view('user/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Maffice | Tambah User',
        ];

        return view('user/create', $data);
    }

    public function user()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'username'     => $this->request->getPost('username'),
            'nama_lengkap'   => $this->request->getPost('nama_lengkap'),
            'email'   => $this->request->getPost('email'),
            'alamat'   => $this->request->getPost('alamat'),
            'telepon'   => $this->request->getPost('telepon'),
            'pengalaman'   => $this->request->getPost('pengalaman'),
            'status'   => $this->request->getPost('status'),
            'level'   => $this->request->getPost('level'),
        );

        if ($validation->run($data, 'user') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('user/create'));
        } else {
            $model = new UserModel();
            $simpan = $model->insertUser($data);
            if ($simpan) {
                session()->setFlashdata('success', 'User Berhasil Ditambahkan');
                return redirect()->to(base_url('user'));
            }
        }
    }

    public function edit($id_user)
    {
        $model = new UserModel();
        $data = [
            'title' => 'Maffice | Edit User',
            'user' => $model->getUser($id_user)->getRowArray()
        ];
        echo view('user/edit', $data);
    }

    public function update()
    {
        $id_user = $this->request->getPost('id_user');

        $validation =  \Config\Services::validation();

        $data = array(
            'username'     => $this->request->getPost('username'),
            'nama_lengkap'   => $this->request->getPost('nama_lengkap'),
            'email'   => $this->request->getPost('email'),
            'alamat'   => $this->request->getPost('alamat'),
            'telepon'   => $this->request->getPost('telepon'),
            'pengalaman'   => $this->request->getPost('pengalaman'),
            'status'   => $this->request->getPost('status'),
            'level'   => $this->request->getPost('level'),
        );

        if ($validation->run($data, 'user') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('user/edit/' . $id_user));
        } else {
            $model = new UserModel();
            $ubah = $model->updateUser($data, $id_user);
            if ($ubah) {
                session()->setFlashdata('info', 'User Berhasil Di Update');
                return redirect()->to(base_url('user'));
            }
        }
    }

    public function delete($id_user)
    {
        $model = new UserModel();
        $hapus = $model->deleteUser($id_user);
        if ($hapus) {
            session()->setFlashdata('warning', 'User berhasil Di Hapus');
            return redirect()->to(base_url('user'));
        }
    }
}
