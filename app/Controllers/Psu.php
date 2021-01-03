<?php

namespace App\Controllers;

use App\Models\MerkModel;
use \App\Models\PsuModel;
use \App\Models\Merkodel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;

if (session()->get('level') <> 'Warehouse') {
    return redirect()->to('/Dashboard');
}
class Psu  extends BaseController
{
    protected $psuModel;
    protected $merkModel;
    public function __construct()
    {
        $this->psuModel = new PsuModel();
        $this->merkModel = new MerkModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Daftar Power Supply',
                'psu' => $this->psuModel->getPsu()
            ];


        // $komikModel = new \App\Models\KomikModel();

        return view('psu/index', $data);
    }
    public function create()
    {
        //session();
        $data = [
            'title' => 'Tambah Data',
            'merk'  => $this->merkModel->getMerk(),
            'validation' => \Config\Services::validation()
        ];
        return view('psu/create', $data);
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
                'rules' => 'required|is_unique[tbl_psu.nama]',
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
            'sertifikat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'jenis_kabel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'mb_power' => [
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
            return redirect()->to('/psu/create/')->withInput();
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
            $fileGambar->move('img/psu', $namaGambar);
            $image = \Config\Services::image()
                ->withFile('img/psu/' . $namaGambar)
                ->resize(500, 500)
                ->save('img/psu/' . $namaGambar);
            // ambil nama file
            // $namaSampul = $fileSampul->getName();

        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->psuModel->save([
            'merk' => $this->request->getVar('merk'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => intval(preg_replace("/[^0-9]/", "", $this->request->getVar('harga'))),
            'stok' => $this->request->getVar('stok'),
            'sertifikat' => $this->request->getVar('sertifikat'),
            'jenis_kabel' => $this->request->getVar('jenis_kabel'),
            'mb_power' => $this->request->getVar('mb_power'),
            'gambar' => $namaGambar,
            'rincian' => $this->request->getVar('rincian'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/psu');
    }
    public function detail($slug)
    {
        $psu = $this->psuModel->getpsu($slug);
        $data = [
            'title' => 'Detail Power Supply',
            'psu' => $this->psuModel->getpsu($slug)
        ];

        //JIka  data tidak ada di table
        if (empty($data['psu'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('psu ' . $slug . ' tidak ditemukan');
        }

        return view('psu/detail', $data);
    }
    public function delete($id)
    {

        //cari gambar berdasar id
        $psu = $this->psuModel->find($id);

        // cek gambar bila gambar default aga rfile default.jpg tdk terhapus
        if ($psu['gambar'] != 'default.jpg') {

            // hapus gambar
            unlink('img/psu/' . $psu['gambar']);
        }


        $this->psuModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/psu');
    }
    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Data Power Supply',
            'validation' => \Config\Services::validation(),
            'merk'  => $this->merkModel->getMerk(),
            'psu' => $this->psuModel->getpsu($slug)
        ];
        return view('psu/edit', $data);
    }

    // update
    public function update($id)
    {
        //cek nama
        $psulama = $this->psuModel->getpsu($this->request->getVar('slug'));
        if ($psulama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[tbl_psu.nama]';
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
            'sertifikat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'jenis_kabel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'mb_power' => [
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

            return redirect()->to('/psu/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        // cek gambar, Apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            // generate nama file Gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindah gambar
            $fileGambar->move('img/psu', $namaGambar);
            $image = \Config\Services::image()
                ->withFile('img/psu/' . $namaGambar)
                ->resize(500, 500)
                ->save('img/psu/' . $namaGambar);
            // hapus file gambar lama
            if ($namaGambar != 'default.jpg') {
                unlink('img/psu/' . $this->request->getVar('gambarLama'));
            }
        }
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->psuModel->save([
            'id' => $id,
            'merk' => $this->request->getVar('merk'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => intval(preg_replace("/[^0-9]/", "", $this->request->getVar('harga'))),
            'stok' => $this->request->getVar('stok'),
            'sertifikat' => $this->request->getVar('sertifikat'),
            'jenis_kabel' => $this->request->getVar('jenis_kabel'),
            'mb_power' => $this->request->getVar('mb_power'),
            'gambar' => $namaGambar,
            'rincian' => $this->request->getVar('rincian'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/psu');
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Stock Barang',
            'psu' => $this->psuModel->getpsu(),
            'total' => count($this->psuModel->getpsu())
        ];
        return view('psu/tambah', $data);
    }
    public function addstok($id)
    {
        $stokLama = intval($this->request->getVar('stokLama'));
        $stokTambah = intval($this->request->getVar('stok'));
        $stokBaru =  $stokTambah + $stokLama;

        $this->psuModel->save(
            [
                'id' => $id,
                'stok' => $stokBaru,
            ]
        );
        return redirect()->to('/psu/tambah/');
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
        $sheet->setCellValue('F1', 'Sertifikat');
        $sheet->setCellValue('G1', 'Jenis Kabel');
        $sheet->setCellValue('H1', 'Power');
        $sheet->setCellValue('I1', 'Gambar');
        $sheet->setCellValue('J1', 'Rincian');
        $sheet->setCellValue('K1', 'Created At');
        $sheet->setCellValue('L1', 'Updated At');

        $psu = $this->psuModel->getPsu();
        $no = 1;
        $x = 2;
        foreach ($psu as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['merk']);
            $sheet->setCellValue('C' . $x, $val['nama']);
            $sheet->setCellValue('D' . $x, $val['harga']);
            $sheet->setCellValue('E' . $x, $val['stok']);
            $sheet->setCellValue('F' . $x, $val['sertifikat']);
            $sheet->setCellValue('G' . $x, $val['jenis_kabel']);
            $sheet->setCellValue('H' . $x, $val['mb_power']);
            $sheet->setCellValue('I' . $x, $val['gambar']);
            $sheet->setCellValue('J' . $x, $val['rincian']);
            $sheet->setCellValue('K' . $x, $val['created_at']);
            $sheet->setCellValue('L' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-powersupply';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function cetak()
    {
        $data = [
            'title' => 'Cetak Daftar Power Supply',
            'psu' => $this->psuModel->getPsu()
        ];

        return view('/psu/cetak', $data);
    }
}
