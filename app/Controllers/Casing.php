<?php

namespace App\Controllers;

use \App\Models\CasingModel;
use \App\Models\MerkModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;

if (session()->get('level') <> 'Warehouse') {
    return redirect()->to('/Dashboard');
}
class Casing  extends BaseController
{
    protected $casingModel;
    protected $merkModel;

    public function __construct()
    {
        $this->casingModel = new CasingModel();
        $this->merkModel = new MerkModel();
    }

    public function index()
    {
        $data =
            [
                'title' => 'Daftar Cassing',
                'casing' => $this->casingModel->getCasing()
            ];

        return view('casing/index', $data);
    }
    public function create()
    {
        //session();
        $data = [
            'title' => 'Tambah Data',
            'merk'  => $this->merkModel->getMerk(),
            'validation' => \Config\Services::validation()
        ];
        return view('casing/create', $data);
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
                'rules' => 'required|is_unique[tbl_casing.nama]',
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
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'numeric' => 'Pastikan {field} diisi dengan angka saja'
                ]
            ],
            'faktor_bentuk' => [
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
            return redirect()->to('/casing/create/')->withInput();
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
            $fileGambar->move('img/casing', $namaGambar);
            $image = \Config\Services::image()
                ->withFile('img/casing/' . $namaGambar)
                ->resize(500, 500)
                ->save('img/casing/' . $namaGambar);
            // ambil nama file
            // $namaSampul = $fileSampul->getName();

        }
        $faktorbentuk = $this->request->getVar('faktor_bentuk');
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->casingModel->save([
            'merk' => $this->request->getVar('merk'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => intval(preg_replace("/[^0-9]/", "", $this->request->getVar('harga'))),
            'stok' => $this->request->getVar('stok'),
            'faktor_bentuk' => implode(",", $faktorbentuk),
            'gambar' => $namaGambar,
            'rincian' => $this->request->getVar('rincian'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/casing');
    }

    public function detail($slug)
    {
        $casing = $this->casingModel->getCasing($slug);
        $data = [
            'title' => 'Detail Casing',
            'casing' => $this->casingModel->getCasing($slug)
        ];

        //JIka  data tidak ada di table
        if (empty($data['casing'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Casing ' . $slug . ' tidak ditemukan');
        }

        return view('casing/detail', $data);
    }
    public function delete($id)
    {

        //cari gambar berdasar id
        $casing = $this->casingModel->find($id);

        // cek gambar bila gambar default aga rfile default.jpg tdk terhapus
        if ($casing['gambar'] != 'default.jpg') {

            // hapus gambar
            unlink('img/casing/' . $casing['gambar']);
        }


        $this->casingModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/casing');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Data Casing',
            'validation' => \Config\Services::validation(),
            'casing' => $this->casingModel->getcasing($slug),
            'merk'  => $this->merkModel->getMerk(),
        ];
        return view('casing/edit', $data);
    }

    // update
    public function update($id)
    {
        //cek nama
        $casinglama = $this->casingModel->getcasing($this->request->getVar('slug'));
        if ($casinglama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[tbl_casing.nama]';
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
            'faktor_bentuk' => [
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

            return redirect()->to('/casing/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        // cek gambar, Apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            // generate nama file Gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindah gambar
            $fileGambar->move('img/casing', $namaGambar);
            $image = \Config\Services::image()
                ->withFile('img/casing/' . $namaGambar)
                ->resize(500, 500)
                ->save('img/casing/' . $namaGambar);
            // hapus file gambar lama
            unlink('img/casing/' . $this->request->getVar('gambarLama'));
        }
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $faktorbentuk = $this->request->getVar('faktor_bentuk');
        $this->casingModel->save([
            'id' => $id,
            'merk' => $this->request->getVar('merk'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => intval(preg_replace("/[^0-9]/", "", $this->request->getVar('harga'))),
            'stok' => $this->request->getVar('stok'),
            'faktor_bentuk' => implode(",", $faktorbentuk),
            'gambar' => $namaGambar,
            'rincian' => $this->request->getVar('rincian')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/casing');
    }

    // Tambah Stock Tiap Barang
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Stock Barang',
            'casing' => $this->casingModel->getcasing(),
            'total' => count($this->casingModel->getcasing())
        ];
        return view('casing/tambah', $data);
    }
    public function addstok($id)
    {
        $stokLama = intval($this->request->getVar('stokLama'));
        $stokTambah = intval($this->request->getVar('stok'));
        $stokBaru =  $stokTambah + $stokLama;

        $this->casingModel->save(
            [
                'id' => $id,
                'stok' => $stokBaru,
            ]
        );
        return redirect()->to('/casing/tambah/');
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
        $sheet->setCellValue('F1', 'Faktor Bentuk');
        $sheet->setCellValue('G1', 'Gambar');
        $sheet->setCellValue('H1', 'Rincian');
        $sheet->setCellValue('I1', 'Created At');
        $sheet->setCellValue('J1', 'Updated At');

        $casing = $this->casingModel->getCasing();
        $no = 1;
        $x = 2;
        foreach ($casing as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['merk']);
            $sheet->setCellValue('C' . $x, $val['nama']);
            $sheet->setCellValue('D' . $x, $val['harga']);
            $sheet->setCellValue('E' . $x, $val['stok']);
            $sheet->setCellValue('F' . $x, $val['faktor_bentuk']);
            $sheet->setCellValue('G' . $x, $val['gambar']);
            $sheet->setCellValue('H' . $x, $val['rincian']);
            $sheet->setCellValue('I' . $x, $val['created_at']);
            $sheet->setCellValue('J' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-casing';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function cetak()
    {
        $data = [
            'title' => 'Cetak Daftar Cassing',
            'casing' => $this->casingModel->getCasing()
        ];

        return view('/casing/cetak', $data);
    }
}
