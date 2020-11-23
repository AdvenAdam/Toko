<?php

namespace App\Controllers;

use \App\Models\ProcesorModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;

class Procesor extends BaseController
{
    protected $procesorModel;
    public function __construct()
    {
        $this->procesorModel = new ProcesorModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Daftar Processor',
                'procesor' => $this->procesorModel->getProcesor()
            ];


        // $komikModel = new \App\Models\KomikModel();

        return view('procesor/index', $data);
    }
    public function create()
    {
        //session();
        $data = [
            'title' => 'Tambah Data',
            'validation' => \Config\Services::validation()
        ];
        return view('procesor/create', $data);
    }
    public function save()
    {
        // validasi input
        if (!$this->validate([
            'merk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required|is_unique[tbl_procesor.nama]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'stok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'jml_core' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'jml_threads' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'socket' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'frekuensi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'iGPU' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'cache' => [
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
            return redirect()->to('/procesor/create')->withInput();
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
            $fileGambar->move('img/procesor', $namaGambar);
            // ambil nama file
            // $namaSampul = $fileSampul->getName();

        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->procesorModel->save([
            'merk' => $this->request->getVar('merk'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'jml_core' => $this->request->getVar('jml_core'),
            'jml_threads' => $this->request->getVar('jml_threads'),
            'socket' => $this->request->getVar('socket'),
            'frekuensi' => $this->request->getVar('frekuensi'),
            'iGPU' => $this->request->getVar('iGPU'),
            'cache' => $this->request->getVar('cache'),
            'gambar' => $namaGambar,
            'rincian' => $this->request->getVar('rincian'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/procesor');
    }
    public function detail($slug)
    {
        $procesor = $this->procesorModel->getprocesor($slug);
        $data = [
            'title' => 'Detail Processor',
            'procesor' => $this->procesorModel->getprocesor($slug)
        ];

        //JIka  data tidak ada di table
        if (empty($data['procesor'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('procesor ' . $slug . ' tidak ditemukan');
        }

        return view('procesor/detail', $data);
    }
    public function delete($id)
    {

        //cari gambar berdasar id
        $procesor = $this->procesorModel->find($id);

        // cek gambar bila gambar default aga rfile default.jpg tdk terhapus
        if ($procesor['gambar'] != 'default.jpg') {

            // hapus gambar
            unlink('img/procesor/' . $procesor['gambar']);
        }


        $this->procesorModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/procesor');
    }
    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Data procesor',
            'validation' => \Config\Services::validation(),
            'procesor' => $this->procesorModel->getprocesor($slug)
        ];
        return view('procesor/edit', $data);
    }

    // update
    public function update($id)
    {
        //cek nama
        $procesorlama = $this->procesorModel->getprocesor($this->request->getVar('slug'));
        if ($procesorlama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[tbl_procesor.nama]';
        }
        if (!$this->validate([
            'merk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'nama' => [
                'rules' => $rule_nama,
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'stok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'jml_core' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'jml_threads' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'socket' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'frekuensi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'iGPU' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'cache' => [
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

            return redirect()->to('/procesor/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        // cek gambar, Apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            // generate nama file Gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindah gambar
            $fileGambar->move('img/procesor', $namaGambar);
            // hapus file gambar lama
            unlink('img/procesor/' . $this->request->getVar('gambarLama'));
        }
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->procesorModel->save([
            'id' => $id,
            'merk' => $this->request->getVar('merk'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'jml_core' => $this->request->getVar('jml_core'),
            'jml_threads' => $this->request->getVar('jml_threads'),
            'socket' => $this->request->getVar('socket'),
            'frekuensi' => $this->request->getVar('frekuensi'),
            'iGPU' => $this->request->getVar('iGPU'),
            'cache' => $this->request->getVar('cache'),
            'gambar' => $namaGambar,
            'rincian' => $this->request->getVar('rincian'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/procesor');
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Stock Barang',
            'procesor' => $this->procesorModel->getprocesor(),
            'total' => count($this->procesorModel->getprocesor())
        ];
        return view('procesor/tambah', $data);
    }
    public function addstok($id)
    {
        $stokLama = intval($this->request->getVar('stokLama'));
        $stokTambah = intval($this->request->getVar('stok'));
        $stokBaru =  $stokTambah + $stokLama;

        $this->procesorModel->save(
            [
                'id' => $id,
                'stok' => $stokBaru,
            ]
        );
        return redirect()->to('/procesor/tambah');
    }
    public function excel()
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Merk');
        $sheet->setCellValue('C1', 'Nama');
        $sheet->setCellValue('D1', 'Harga');
        $sheet->setCellValue('E1', 'Stok');
        $sheet->setCellValue('F1', 'Jumlah Core');
        $sheet->setCellValue('G1', 'Jumlah Threads');
        $sheet->setCellValue('H1', 'Socket');
        $sheet->setCellValue('I1', 'Frekuensi');
        $sheet->setCellValue('J1', 'iGPU');
        $sheet->setCellValue('K1', 'cache');
        $sheet->setCellValue('L1', 'Gambar');
        $sheet->setCellValue('M1', 'Rincian');
        $sheet->setCellValue('N1', 'Created At');
        $sheet->setCellValue('O1', 'Updated At');

        $procesor = $this->procesorModel->getProcesor();
        $no = 1;
        $x = 2;
        foreach ($procesor as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['merk']);
            $sheet->setCellValue('C' . $x, $val['nama']);
            $sheet->setCellValue('D' . $x, $val['harga']);
            $sheet->setCellValue('E' . $x, $val['stok']);
            $sheet->setCellValue('F' . $x, $val['jml_core']);
            $sheet->setCellValue('G' . $x, $val['jml_threads']);
            $sheet->setCellValue('H' . $x, $val['socket']);
            $sheet->setCellValue('I' . $x, $val['frekuensi']);
            $sheet->setCellValue('J' . $x, $val['iGPU']);
            $sheet->setCellValue('K' . $x, $val['cache']);
            $sheet->setCellValue('L' . $x, $val['gambar']);
            $sheet->setCellValue('M' . $x, $val['rincian']);
            $sheet->setCellValue('N' . $x, $val['created_at']);
            $sheet->setCellValue('O' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-procesor';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function cetak()
    {
        $data = [
            'title' => 'Cetak Daftar Processor',
            'procesor' => $this->procesorModel->getProcesor()
        ];

        return view('/procesor/cetak', $data);
    }
}
