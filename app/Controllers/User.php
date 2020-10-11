<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function __construct()
    {
        $this->cek_login();
        $this->userModel = new UserModel();
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

        $currentPage = $this->request->getVar('page_user') ? $this->request->getVar('page_user') : 1;

        $data = [
            'title' => 'Maffice | User',
            'user' => $this->userModel->getUser(),
            'user' => $this->userModel->paginate(5, 'user'),
            'pager' => $this->userModel->pager,
            'currentPage' => $currentPage
        ];

        return view('user/index', $data);
    }

    public function detail($id_user)
    {
        $data = [
            'title' => 'Maffice | User | Detail User',
            'user' => $this->userModel->getUser($id_user)
        ];

        return view('user/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Maffice | Tambah User',
            'validation' => \Config\Services::validation()
        ];

        return view('user/create', $data);
    }

    public function user()
    {
        //Validasi input
        if (!$this->validate([
            'username'      => [
                'rules'     => 'required|alpha_dash|is_unique[user.username]|min_length[8]|max_length[35]',
                'errors'    => [
                    'required'      => 'Username wajib diisi',
                    'alpha_dash' => 'Username hanya boleh berisi huruf, angka, dan karakter',
                    'is_unique'     => 'Username sudah terdaftar',
                    'min_length'    => 'Username minimal 8 karakter',
                    'max_length'    => 'Username maksimal 35 karakter'
                ]
            ],
            'nama_lengkap'      => [
                'rules'     => 'required|alpha_numeric_space|min_length[3]|max_length[35]',
                'errors'    => [
                    'required'              => 'Name wajib diisi',
                    'alpha_numeric_spaces'  => 'Name hanya boleh berisi huruf, angka dan spasi',
                    'min_length'            => 'Name minimal 3 karakter',
                    'max_length'            => 'Name maksimal 35 karakter'
                ]
            ],
            'email'             => [
                'rules'     => 'required|valid_email|is_unique[user.email]',
                'errors'    => [
                    'required'      => 'Email wajib diisi',
                    'valid_email'   => 'Email tidak valid',
                    'is_unique'     => 'Email sudah terdaftar'
                ]
            ],
            'password'          => [
                'rules' => 'required|string|min_length[8]|max_length[35]',
                'errors'    => [
                    'required'      => 'Password wajib diisi',
                    'string'        => 'Password hanya boleh berisi huruf, angka, spasi dan karakter lain',
                    'min_length'    => 'Password minimal 8 karakter',
                    'max_length'    => 'Password maksimal 35 karakter'
                ]
            ],
            'status'             => [
                'rules' => 'required',
                'errors'    => [
                    'required'      => 'Status wajib diisi',
                ]
            ],
            'level'             => [
                'rules' => 'required',
                'errors'    => [
                    'required'      => 'Level wajib diisi',
                ]
            ]
        ])) {
            return redirect()->to('/user/create')->withInput();
        }

        $namaFoto = 'default.png';

        $data = [
            'username'     => $this->request->getVar('username'),
            'nama_lengkap'   => $this->request->getVar('nama_lengkap'),
            'email'   => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'status'   => $this->request->getVar('status'),
            'alamat'   => $this->request->getVar('alamat'),
            'telepon'   => $this->request->getVar('telepon'),
            'pengalaman'   => $this->request->getVar('pengalaman'),
            'level'   => $this->request->getVar('level'),
            'foto'     => $namaFoto
        ];

        $simpan = $this->userModel->insertUser($data);
        if ($simpan) {
            session()->setFlashdata('success', 'User Berhasil Ditambahkan');
            return redirect()->to('/user');
        }
    }

    public function edit($id_user)
    {
        $data = [
            'title' => 'Maffice | Edit User',
            'user' => $this->userModel->getUser($id_user),
            'validation' =>  \Config\Services::validation()

        ];
        echo view('user/edit', $data);
    }

    public function update()
    {
        $id_user = $this->request->getVar('id_user');

        //Validasi input
        if (!$this->validate([
            'username'      => [
                'rules'     => 'required|alpha_dash|min_length[8]|max_length[35]',
                'errors'    => [
                    'required'      => 'Username wajib diisi',
                    'alpha_dash' => 'Username hanya boleh berisi huruf, angka, dan karakter',
                    'min_length'    => 'Username minimal 3 karakter',
                    'max_length'    => 'Username maksimal 35 karakter'
                ]
            ],
            'nama_lengkap'      => [
                'rules'     => 'required|alpha_numeric_space|min_length[3]|max_length[35]',
                'errors'    => [
                    'required'              => 'Name wajib diisi',
                    'alpha_numeric_spaces'  => 'Name hanya boleh berisi huruf, angka dan spasi',
                    'min_length'            => 'Name minimal 3 karakter',
                    'max_length'            => 'Name maksimal 35 karakter'
                ]
            ],
            'email'             => [
                'rules'     => 'required|valid_email',
                'errors'    => [
                    'required'      => 'Email wajib diisi',
                    'valid_email'   => 'Email tidak valid'
                ]
            ],
            'status'             => [
                'rules' => 'required',
                'errors'    => [
                    'required'      => 'Status wajib diisi',
                ]
            ],
            'level'             => [
                'rules' => 'required',
                'errors'    => [
                    'required'      => 'Level wajib diisi',
                ]
            ]
        ])) {
            return redirect()->to('/user/edit/' . $id_user)->withInput();
        }

        $data = [
            'username'     => $this->request->getVar('username'),
            'nama_lengkap'   => $this->request->getVar('nama_lengkap'),
            'email'   => $this->request->getVar('email'),
            'alamat'   => $this->request->getVar('alamat'),
            'telepon'   => $this->request->getVar('telepon'),
            'pengalaman'   => $this->request->getVar('pengalaman'),
            'status'   => $this->request->getVar('status'),
            'level'   => $this->request->getVar('level'),
        ];

        $ubah = $this->userModel->updateUser($data, $id_user);
        if ($ubah) {
            session()->setFlashdata('info', 'User Berhasil Di Update');
            return redirect()->to(base_url('user'));
        }
    }

    public function delete($id_user)
    {
        //cari gambar berdasarkan id
        $user = $this->userModel->find($id_user);

        //cek jika file gambarnya default
        if ($user['foto'] != 'default.png') {
            //hapus gambar
            unlink('img/' . $user['foto']);
        }

        $hapus = $this->userModel->deleteUser($id_user);
        if ($hapus) {
            session()->setFlashdata('warning', 'User berhasil Di Hapus');
            return redirect()->to(base_url('user'));
        }
    }
}
