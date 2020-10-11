<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
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

        $data = [
            'title' => 'Maffice | Profile',
            'validation' =>  \Config\Services::validation(),
            'nama_lengkap' => $this->userModel->getUser['nama_lengkap'],
            'email' =>  $this->userModel->getUser['email'],
            'alamat' =>  $this->userModel->getUser['alamat'],
            'telepon' =>  $this->userModel->getUser['telepon'],
            'pengalaman' =>  $this->userModel->getUser['pengalaman'],
            'level' =>  $this->userModel->getUser['nama_lengkap'],
            'user' => $this->userModel->getUser(session()->get('id_user'))
        ];

        return view('/profile/index', $data);
    }

    public function edit($id_user)
    {
        $data = [
            'title' => 'Maffice | Profile',
            'user' => $this->userModel->getUser($id_user),
            'validation' =>  \Config\Services::validation()
        ];
        echo view('profile/index', $data);
    }

    public function update()
    {
        $id_user = $this->request->getVar('id_user');

        //Validasi input
        if (!$this->validate([
            'nama_lengkap'      => [
                'rules'     => 'required|alpha_numeric_space|min_length[3]|max_length[35]',
                'errors'    => [
                    'required'              => 'Nama wajib diisi',
                    'alpha_numeric_spaces'  => 'Nama hanya boleh berisi huruf, angka dan spasi',
                    'min_length'            => 'Nama minimal 3 karakter',
                    'max_length'            => 'Nama maksimal 35 karakter'
                ]
            ],
            'email'             => [
                'rules'     => 'required|valid_email',
                'errors'    => [
                    'required'      => 'Email wajib diisi',
                    'valid_email'   => 'Email tidak valid'
                ]
            ],
            'alamat'             => [
                'rules' => 'required',
                'errors'    => [
                    'required'      => 'Alamat wajib diisi',
                ]
            ],
            'telepon'             => [
                'rules' => 'required',
                'errors'    => [
                    'required'      => 'Telepon wajib diisi',
                ]
            ],
            'pengalaman'             => [
                'rules' => 'required',
                'errors'    => [
                    'required'      => 'Pengalaman wajib diisi',
                ]
            ]
        ])) {
            return redirect()->to('/profile/edit/' . $id_user)->withInput();
        }

        $data = [
            'username'     => $this->request->getVar('username'),
            'nama_lengkap'   => $this->request->getVar('nama_lengkap'),
            'email'   => $this->request->getVar('email'),
            'alamat'   => $this->request->getVar('alamat'),
            'telepon'   => $this->request->getVar('telepon'),
            'pengalaman'   => $this->request->getVar('pengalaman'),
            'status'   => $this->request->getVar('status'),
            'level'   => $this->request->getVar('level')
        ];

        $ubah = $this->userModel->updateUser($data, $id_user);
        if ($ubah) {
            session()->setFlashdata('info', 'Profile Berhasil Di Update');
            return redirect()->to('/profile');
        }
    }

    public function change($id_user)
    {
        $data = [
            'title' => 'Maffice | Profile | Ubah Password',
            'user' => $this->userModel->getUser($id_user),
            'validation' => \Config\Services::validation()
        ];
        return view('profile/change_pass', $data);
    }

    public function change_password()
    {
        $id_user = session()->get('id_user');

        $data = [
            'password_baru' => $this->request->getPost('password_baru'),
            'confirm_password' => $this->request->getPost('confirm_password')
        ];

        if (!$this->validate([
            'password_baru' => [
                'rules' => 'required|string|min_length[8]|max_length[35]',
                'errors' => [
                    'required' => 'Password Baru wajib diisi',
                    'string'        => 'Password hanya boleh berisi huruf, angka, spasi dan karakter lain',
                    'min_length'    => 'Password minimal 8 karakter',
                    'max_length'    => 'Password maksimal 35 karakter'
                ]
            ],
            'confirm_password' => [
                'rules' => 'required|matches[password_baru]|string|min_length[8]|max_length[35]',
                'errors' => [
                    'required' => 'Confirm Password wajib diisi',
                    'matches' => 'Confirm Password tidak sesuai',
                    'string'        => 'Password hanya boleh berisi huruf, angka, spasi dan karakter lain',
                    'min_length'    => 'Password minimal 8 karakter',
                    'max_length'    => 'Password maksimal 35 karakter'
                ]
            ]
        ])) {
            return redirect()->to(base_url('/profile/change/' . $id_user))->withInput();
        }

        $cryptPass = password_hash($data['password_baru'], PASSWORD_DEFAULT);
        $ubah = $this->userModel->updatePassword($cryptPass, $id_user);
        if ($ubah) {
            session()->setFlashdata('info', 'Password Berhasil Di Update');
            return redirect()->to(base_url('profile'));
        }
    }

    public function changeFoto($id_user)
    {
        $data = [
            'title' => 'Maffice | Profile | Ubah Foto Profil',
            'user' => $this->userModel->getUser($id_user),
            'validation' => \Config\Services::validation()
        ];
        return view('profile/change_foto', $data);
    }

    public function change_foto()
    {
        $id_user = session()->get('id_user');

        if (!$this->validate([
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,10240|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih Foto Profil terlebih dahulu.',
                    'max_size' => 'Ukuran Foto terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in'   => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to(base_url('/profile/changeFoto/' . $id_user))->withInput();
        }
        //ambil Foto
        $fileFoto = $this->request->getFile('foto');

        //cek apakah tetap foto lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            //ambil nama file

            //generate nama acak
            $namaFoto = uniqid('kominfo');
            //menghilangkan garis dari nama acak 
            $namaFoto = strip_tags(stripslashes($namaFoto));
            //menghilangkan . dan / dari nama acak
            $namaFoto = str_replace(".", "", $namaFoto);
            $namaFoto = strrev(str_replace("/", "", $namaFoto));
            //membatasi 3 nama acak
            $namaFoto = substr($namaFoto, 0, 3);

            $namaFoto .= '_';
            $namaFoto .= $fileFoto->getName();
            session()->set('foto', $namaFoto);

            //pindahkan ke file
            $fileFoto->move('img', $namaFoto);

            //hapus foto lama
            unlink('img/' . $this->request->getVar('fotoLama'));
        }

        $data = [
            'foto' => $namaFoto
        ];

        $ubah = $this->userModel->updateFoto($data, $id_user);
        if ($ubah) {
            session()->setFlashdata('info', 'Foto Berhasil Di Update');
            return redirect()->to(base_url('profile'));
        }
    }
}
