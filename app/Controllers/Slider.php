<?php

namespace App\Controllers;

use \App\Models\SliderModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;


class Slider  extends BaseController
{
    protected $sliderModel;
    public function __construct()
    {
        $this->sliderModel = new SliderModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Daftar Tampilan Slider Dashboard',
                'slider' => $this->sliderModel->getSlider()
            ];

        return view('slider/index', $data);
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
            'baris_satu' => [
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
            return redirect()->to('/slider/create')->withInput();
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
            $fileGambar->move('img/slider', $namaGambar);
            // ambil nama file
            // $namaSampul = $fileSampul->getName();

        }
        $this->sliderModel->save([
            'baris_satu' => $this->request->getVar('baris_satu'),
            'baris_dua' => $this->request->getVar('baris_dua'),
            'link' => $this->request->getVar('link'),
            'gambar' => $namaGambar,

        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/slider');
    }

    public function delete($id)
    {

        //cari gambar berdasar id
        $slider = $this->sliderModel->find($id);

        // cek gambar bila gambar default aga rfile default.jpg tdk terhapus
        if ($slider['gambar'] != 'default.jpg') {
            // hapus gambar
            unlink('img/slider/' . $slider['gambar']);
        }


        $this->sliderModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/slider');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Data slider',
            'validation' => \Config\Services::validation(),
            'slider' => $this->sliderModel->getSlider($slug)
        ];
        return view('slider/edit', $data);
    }

    // update
    public function update($id)
    {
        //cek nama
        if (!$this->validate([
            'baris_satu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
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

            return redirect()->to('/slider/edit/' . $this->request->getVar('id'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        // cek gambar, Apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            // generate nama file Gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindah gambar
            $fileGambar->move('img/slider', $namaGambar);
            // hapus file gambar lama
            unlink('img/slider/' . $this->request->getVar('gambarLama'));
        }
        $this->sliderModel->save([
            'id' => $id,
            'baris_satu' => $this->request->getVar('baris_satu'),
            'baris_dua' => $this->request->getVar('baris_dua'),
            'link' => $this->request->getVar('link'),
            'gambar' => $namaGambar,

        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/slider');
    }
}
