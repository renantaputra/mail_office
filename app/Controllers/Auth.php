<?php

namespace App\Controllers;

use App\Models\Auth_model;

class Auth extends BaseController
{
    protected $helper = [];

    public function __construct()
    {
        helper(['form']);
        $this->cek_login();
        $this->auth_model = new Auth_model();
    }

    public function index()
    {
        if ($this->cek_login() == TRUE) {
            return redirect()->to('/dashboard');
        }
        echo view('auth/login');
    }

    public function login()
    {
        if ($this->cek_login() == TRUE) {
            return redirect()->to('/dashboard');
        }
        echo view('auth/login');
    }

    public function proses_login()
    {
        $validation =  \Config\Services::validation();

        $email  = $this->request->getPost('email');
        $password   = $this->request->getPost('password');

        $data = [
            'email' => $email,
            'password' => $password
        ];

        if ($validation->run($data, 'authlogin') == FALSE) {
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to('/auth/login');
        } else {

            $cek_login = $this->auth_model->cek_login($email);

            // email didapatkan
            if ($cek_login == TRUE) {

                // jika email dan password cocok
                if (password_verify($password, $cek_login['password'])) {

                    session()->set('email', $cek_login['email']);
                    session()->set('nama_lengkap', $cek_login['nama_lengkap']);
                    session()->set('level', $cek_login['level']);
                    session()->set('status', $cek_login['status']);

                    return redirect()->to('/dashboard');
                    // email cocok, tapi password salah
                } else {
                    session()->setFlashdata('errors', ['' => 'Password yang Anda masukan salah']);
                    return redirect()->to('/auth/login');
                }
            } else {
                // email tidak cocok / tidak terdaftar
                session()->setFlashdata('errors', ['' => 'Email yang Anda masukan tidak terdaftar']);
                return redirect()->to('/auth/login');
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
