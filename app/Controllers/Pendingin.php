<?php

namespace App\Controllers;

use \App\Models\PendinginModel;
use \App\Models\MerkModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;

class Pendingin  extends BaseController
{
    protected $pendinginModel;
    protected $merkModel;
    public function __construct()
    {
        $this->pendinginModel = new PendinginModel();
        $this->merkModel = new MerkModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Daftar Cooler',
                'pendingin' => $this->pendinginModel->getPendingin()
            ];


        // $komikModel = new \App\Models\KomikModel();

        return view('pendingin/index', $data);
    }
    public function create()
    {
        //session();
        $data = [
            'title' => 'Tambah Data',
            'merk'  => $this->merkModel->getMerk(),
            'validation' => \Config\Services::validation()
        ];
        return view('pendingin/create', $data);
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
                'rules' => 'required|is_unique[tbl_pendingin.nama]',
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
            'jenis_pendingin' => [
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
            return redirect()->to('/pendingin/create')->withInput();
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
            $fileGambar->move('img/pendingin', $namaGambar);
            // ambil nama file
            // $namaSampul = $fileSampul->getName();

        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->pendinginModel->save([
            'merk' => $this->request->getVar('merk'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'jenis_pendingin' => $this->request->getVar('jenis_pendingin'),
            'gambar' => $namaGambar,
            'rincian' => $this->request->getVar('rincian'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/pendingin');
    }
    public function detail($slug)
    {
        $pendingin = $this->pendinginModel->getpendingin($slug);
        $data = [
            'title' => 'Detail Cooler',
            'pendingin' => $this->pendinginModel->getpendingin($slug)
        ];

        //JIka  data tidak ada di table
        if (empty($data['pendingin'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('pendingin ' . $slug . ' tidak ditemukan');
        }

        return view('pendingin/detail', $data);
    }
    public function delete($id)
    {

        //cari gambar berdasar id
        $pendingin = $this->pendinginModel->find($id);

        // cek gambar bila gambar default aga rfile default.jpg tdk terhapus
        if ($pendingin['gambar'] != 'default.jpg') {

            // hapus gambar
            unlink('img/pendingin/' . $pendingin['gambar']);
        }


        $this->pendinginModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/pendingin');
    }
    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Data Cooler',
            'validation' => \Config\Services::validation(),
            'merk'  => $this->merkModel->getMerk(),
            'pendingin' => $this->pendinginModel->getpendingin($slug)
        ];
        return view('pendingin/edit', $data);
    }

    // update
    public function update($id)
    {
        //cek nama
        $pendinginlama = $this->pendinginModel->getpendingin($this->request->getVar('slug'));
        if ($pendinginlama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[tbl_pendingin.nama]';
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
            'jenis_pendingin' => [
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

            return redirect()->to('/pendingin/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        // cek gambar, Apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            // generate nama file Gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindah gambar
            $fileGambar->move('img/pendingin', $namaGambar);
            // hapus file gambar lama
            unlink('img/pendingin/' . $this->request->getVar('gambarLama'));
        }
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->pendinginModel->save([
            'id' => $id,
            'merk' => $this->request->getVar('merk'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'jenis_pendingin' => $this->request->getVar('jenis_pendingin'),
            'gambar' => $namaGambar,
            'rincian' => $this->request->getVar('rincian'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/pendingin');
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Stock Barang',
            'pendingin' => $this->pendinginModel->getpendingin(),
            'total' => count($this->pendinginModel->getpendingin())
        ];
        return view('pendingin/tambah', $data);
    }
    public function addstok($id)
    {
        $stokLama = intval($this->request->getVar('stokLama'));
        $stokTambah = intval($this->request->getVar('stok'));
        $stokBaru =  $stokTambah + $stokLama;

        $this->pendinginModel->save(
            [
                'id' => $id,
                'stok' => $stokBaru,
            ]
        );
        return redirect()->to('/pendingin/tambah');
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
        $sheet->setCellValue('F1', 'Jenis Pendingin');
        $sheet->setCellValue('G1', 'Gambar');
        $sheet->setCellValue('H1', 'Rincian');
        $sheet->setCellValue('I1', 'Created At');
        $sheet->setCellValue('J1', 'Updated At');

        $pendingin = $this->pendinginModel->getPendingin();
        $no = 1;
        $x = 2;
        foreach ($pendingin as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['merk']);
            $sheet->setCellValue('C' . $x, $val['nama']);
            $sheet->setCellValue('D' . $x, $val['harga']);
            $sheet->setCellValue('E' . $x, $val['stok']);
            $sheet->setCellValue('F' . $x, $val['jenis_pendingin']);
            $sheet->setCellValue('G' . $x, $val['gambar']);
            $sheet->setCellValue('H' . $x, $val['rincian']);
            $sheet->setCellValue('I' . $x, $val['created_at']);
            $sheet->setCellValue('J' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-pendingin';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function cetak()
    {
        $data = [
            'title' => 'Cetak Daftar Cooler',
            'pendingin' => $this->pendinginModel->getPendingin()
        ];

        return view('/pendingin/cetak', $data);
    }
}
