<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\PegawaiModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;

class User extends BaseController
{
    protected $authModel;
    protected $pegawaiModel;
    public function __construct()
    {
        $this->authModel = new AuthModel();
        $this->pegawaiModel = new PegawaiModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Daftar User',
                'user' => $this->authModel->getUser(),
            ];


        // $komikModel = new \App\Models\KomikModel();

        return view('user/index', $data);
    }
    public function create()
    {

        $data = [
            'title' => 'Tambah User',
            'validation' => \Config\Services::validation(),
            'pegawai' => $this->pegawaiModel->getPegawai(),
        ];
        return view('user/create', $data);
    }
    public function save()
    {

        // validasi input
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[tbl_user.username]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[8]|max_length[20]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => '{field} harus berisi minimal 8 karakter',
                    'max_length' => '{field} harus berisi maximal 20 karakter'
                ]
            ],
            'repassword' => [
                'label' => 'Retype Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'matches' => '{field} tidak sama'
                ]
            ],

            'no_pegawai' => [
                'label' => 'Nomor Pegawai',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'level' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'foto' => [
                'rules' => 'is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran foto terlalu besar',
                    'is_image' => 'yang anda pilih bukan foto',
                    'mime_in' => 'yang anda pilih bukan foto'
                ]
            ]

        ])) {
            return redirect()->to('/user/create')->withInput();
        }
        // ambil gambar
        $fileGambar = $this->request->getFile('foto');
        // apakah tidak ada gambar yang dipilih
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {

            // generate nama sampul
            $namaGambar = $fileGambar->getRandomName();

            //pindah file ke img
            // $fileSampul->move('img');
            // memindahkan file dengan nama file yang dirandomkan
            $fileGambar->move('img/user', $namaGambar);
            // ambil nama file
            // $namaSampul = $fileSampul->getName();

        }
        // $options = [
        //     'cost' => 10,
        // ];
        $password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        $slug = url_title($this->request->getVar('username'), '-', true);
        $this->authModel->save([
            'username' => $this->request->getVar('username'),
            'slug' => $slug,
            'password' => $password,
            'no_pegawai' => $this->request->getVar('no_pegawai'),
            'level' => $this->request->getVar('level'),
            'email' => "-",
            'foto' => '/img/user/' . $namaGambar,
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/user');
    }
    public function save_guest()
    {

        // validasi input
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[tbl_user.username]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[8]|max_length[20]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => '{field} harus berisi minimal 8 karakter',
                    'max_length' => '{field} harus berisi maximal 20 karakter'
                ]
            ],
            'repassword' => [
                'label' => 'Retype Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'matches' => '{field} tidak sama'
                ]
            ],
        ])) {
            return redirect()->to('/Auth #lg2')->withInput();
        }

        $password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        $slug = url_title($this->request->getVar('username'), '-', true);
        $this->authModel->save([
            'username' => $this->request->getVar('username'),
            'slug' => $slug,
            'password' => $password,
            'email' => $this->request->getVar('email'),
            'level' => "Guest",
        ]);

        session()->setFlashdata('success', 'Regis Berhasil');
        return redirect()->to('/Auth');
    }

    public function delete($id)
    {

        //cari gambar berdasar id
        $user = $this->authModel->find($id);

        // cek gambar bila gambar default agar file default.jpg tdk terhapus
        if ($user['foto'] != 'default.jpg') {

            // hapus gambar
            unlink('img/user/' . $user['foto']);
        }

        $this->authModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/user');
    }
}
