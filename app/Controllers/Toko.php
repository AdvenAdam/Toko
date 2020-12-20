<?php

namespace App\Controllers;

use \App\Models\TokoModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;

class Toko  extends BaseController
{
    protected $tokoModel;
    public function __construct()
    {
        $this->tokoModel = new TokoModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Daftar Toko',
                'toko' => $this->tokoModel->getToko()
            ];

        return view('toko/index', $data);
    }
    public function create()
    {
        //session();
        $data = [
            'title' => 'Tambah Data',
            'validation' => \Config\Services::validation()
        ];
        return view('toko/create', $data);
    }
    public function save()
    {
        // validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'platform' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],

            'tampil' => [
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
            return redirect()->to('/toko/create')->withInput();
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
            $fileGambar->move('img/toko', $namaGambar);
            $image = \Config\Services::image()
                ->withFile('img/toko/' . $namaGambar)
                ->resize(900, 600)
                ->save('img/toko/' . $namaGambar);
            // ambil nama file
            // $namaSampul = $fileSampul->getName();

        }
        $slug = url_title($this->request->getVar('nama') . $this->request->getVar('platform'), '-', true);
        $this->tokoModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'platform' => $this->request->getVar('platform'),
            'link' => $this->request->getVar('link'),
            'gambar' => $namaGambar,
            'tampil' => $this->request->getVar('tampil'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/toko');
    }

    public function delete($id)
    {

        //cari gambar berdasar id
        $toko = $this->tokoModel->find($id);
        // cek gambar bila gambar default aga rfile default.jpg tdk terhapus
        if ($toko['gambar'] != 'default.jpg') {
            // hapus gambar
            unlink('img/toko/' . $toko['gambar']);
        }

        $this->tokoModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/toko');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Data toko',
            'validation' => \Config\Services::validation(),
            'toko' => $this->tokoModel->getToko($slug)
        ];
        return view('toko/edit', $data);
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
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'platform' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],

            'tampil' => [
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

            return redirect()->to('/toko/edit/' . $this->request->getVar('id'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        // cek gambar, Apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            // generate nama file Gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindah gambar
            $fileGambar->move('img/toko', $namaGambar);
            $image = \Config\Services::image()
                ->withFile('img/toko/' . $namaGambar)
                ->resize(900, 600)
                ->save('img/toko/' . $namaGambar);
            // hapus file gambar lama
            unlink('img/toko/' . $this->request->getVar('gambarLama'));
        }

        $this->tokoModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'platform' => $this->request->getVar('platform'),
            'link' => $this->request->getVar('link'),
            'gambar' => $namaGambar,
            'tampil' => $this->request->getVar('tampil'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/toko');
    }

    public function excel()
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama');
        $sheet->setCellValue('C1', 'Platform');
        $sheet->setCellValue('D1', 'Link');
        $sheet->setCellValue('E1', 'Gambar');
        $sheet->setCellValue('F1', 'Tampil');
        $sheet->setCellValue('G1', 'Created At');
        $sheet->setCellValue('H1', 'Updated At');

        $toko = $this->tokoModel->getCasing();
        $no = 1;
        $x = 2;
        foreach ($toko as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['nama']);
            $sheet->setCellValue('C' . $x, $val['platform']);
            $sheet->setCellValue('D' . $x, $val['link']);
            $sheet->setCellValue('E' . $x, $val['gambar']);
            $sheet->setCellValue('F' . $x, $val['tampil']);
            $sheet->setCellValue('G' . $x, $val['created_at']);
            $sheet->setCellValue('H' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-toko';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function cetak()
    {
        $data = [
            'title' => 'Cetak Daftar Toko',
            'toko' => $this->tokoModel->getToko()
        ];
        return view('/toko/cetak', $data);
    }
}
