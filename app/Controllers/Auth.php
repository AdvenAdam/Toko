<?php

namespace App\Controllers;

use App\Models\AuthModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;

class Auth extends BaseController
{
    protected $authModel;
    public function __construct()
    {
        $this->authModel = new AuthModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Form Login',
                'validation' => \Config\Services::validation(),
                'uri'           =>  new \CodeIgniter\HTTP\URI(current_url()),
            ];
        return view('layout/front/Auth', $data);
    }


    public function cek_login()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi'
                ]
            ]
        ])) {
            return redirect()->to('/Auth/Registrasi')->withInput();
        }
        // jika valid
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $query = $this->authModel->getUser();
        $cek = $this->authModel->login($username, $password, $query);
        if ($cek) {
            // jika data cocok
            session()->set('log', true);
            session()->set('username', $cek['username']);
            session()->set('level', $cek['level']);
            session()->set('foto', $cek['foto']);
            //login sukses

            return redirect()->to('/dashboard');
        } else {
            // jika tidak cocok
            session()->setFlashData('pesan', 'login gagal pastikan username atau password benar');
            return redirect()->to('/Auth/Login');
        }
    }
    public function logout()
    {
        session()->remove('log');
        session()->remove('username');
        session()->remove('level');
        session()->remove('foto');
        session()->setFlashData('success', 'Logout berhasil');
        return redirect()->to('/Auth/Login');
    }
}
