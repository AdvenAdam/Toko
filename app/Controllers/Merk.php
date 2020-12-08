<?php

namespace App\Controllers;

use \App\Models\MerkModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;


class Merk  extends BaseController
{
    protected $merkModel;
    public function __construct()
    {
        $this->merkModel = new MerkModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Daftar Tampilan Merk',
                'merk' => $this->merkModel->getMerk(),
            ];

        return view('merk/index', $data);
    }

    public function create()
    {
        //session();
        $data = [
            'title' => 'Tambah Data',
            'validation' => \Config\Services::validation()
        ];
        return view('slider/create', $data);
    }
    public function save()
    {
        // validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],

            'gambar' => [
                'rules' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar'
                ]
            ]

        ])) {
            return redirect()->to('/merk/create')->withInput();
        }
        // ambil gambar
        $fileGambar = $this->request->getFile('gambar');
        // apakah tidak ada gambar yang dipilih
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {

            // generate nama sampul
            $namaGambar = $fileGambar->getRandomName();
            //pindah file ke img
            // $fileSampul->move('img');
            // memindahkan file dengan nama file yang dirandomkan
            $fileGambar->move('img/merk', $namaGambar);
            // ambil nama file
            // $namaSampul = $fileSampul->getName();

        }
        $this->merkModel->save([
            'nama' => $this->request->getVar('nama'),
            'link' => $this->request->getVar('link'),
            'gambar' => $namaGambar,

        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/merk');
    }

    public function delete($id)
    {

        //cari gambar berdasar id
        $merk = $this->merkModel->find($id);

        // cek gambar bila gambar default aga rfile default.jpg tdk terhapus
        if ($merk['gambar'] != 'default.jpg') {
            // hapus gambar
            unlink('img/merk/' . $merk['gambar']);
        }


        $this->merkModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/merk');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Data merk',
            'validation' => \Config\Services::validation(),
            'merk' => $this->merkModel->getMerk($slug)
        ];
        return view('merk/edit', $data);
    }

    // update
    public function update($id)
    {
        //cek nama
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],

            'gambar' => [
                'rules' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar'
                ]
            ]

        ])) {

            return redirect()->to('/merk/edit/' . $this->request->getVar('id'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        // cek gambar, Apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            // generate nama file Gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindah gambar
            $fileGambar->move('img/merk', $namaGambar);
            // hapus file gambar lama
            unlink('img/merk/' . $this->request->getVar('gambarLama'));
        }
        $this->merkModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'link' => $this->request->getVar('link'),
            'gambar' => $namaGambar,
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/merk');
    }
}
