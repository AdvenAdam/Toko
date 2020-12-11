<?php

namespace App\Controllers;

use \App\Models\MemoriModel;
use \App\Models\MerkModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;
use CodeIgniter\Config\I18n;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;

if (session()->get('level') <> 'Warehouse') {
    return redirect()->to('/Dashboard');
}

class Memori extends BaseController
{
    protected $memoriModel;
    protected $merkModel;

    public function __construct()
    {
        $this->memoriModel = new MemoriModel();
        $this->merkModel = new MerkModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Daftar Memory Penyimpanan',
                'memori' => $this->memoriModel->getMemori(),
            ];


        // $komikModel = new \App\Models\KomikModel();

        return view('memori/index', $data);
    }
    public function create()
    {
        //session();
        $data = [
            'title' => 'Tambah Data',
            'merk'  => $this->merkModel->getMerk(),
            'validation' => \Config\Services::validation()
        ];
        return view('memori/create', $data);
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
                'rules' => 'required|is_unique[tbl_memori.nama]',
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
            'ukuran_memori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'jenis_memori' => [
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
            return redirect()->to('/memori/create')->withInput();
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
            $fileGambar->move('img/memori', $namaGambar);
            // ambil nama file
            // $namaSampul = $fileSampul->getName();

        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->memoriModel->save([
            'merk' => $this->request->getVar('merk'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => intval(preg_replace("/[^0-9]/", "", $this->request->getVar('harga'))),
            'stok' => $this->request->getVar('stok'),
            'ukuran_memori' => $this->request->getVar('ukuran_memori'),
            'jenis_memori' => $this->request->getVar('jenis_memori'),
            'gambar' => $namaGambar,
            'rincian' => $this->request->getVar('rincian'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/memori');
    }
    public function detail($slug)
    {
        $memori = $this->memoriModel->getmemori($slug);
        $data = [
            'title' => 'Detail Memori',
            'memori' => $this->memoriModel->getmemori($slug)
        ];

        //JIka  data tidak ada di table
        if (empty($data['memori'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('memori ' . $slug . ' tidak ditemukan');
        }

        return view('memori/detail', $data);
    }
    public function delete($id)
    {

        //cari gambar berdasar id
        $memori = $this->memoriModel->find($id);

        // cek gambar bila gambar default aga rfile default.jpg tdk terhapus
        if ($memori['gambar'] != 'default.jpg') {

            // hapus gambar
            unlink('img/memori/' . $memori['gambar']);
        }


        $this->memoriModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/memori');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Data Memory',
            'validation' => \Config\Services::validation(),
            'memori' => $this->memoriModel->getmemori($slug),
            'merk'  => $this->merkModel->getMerk(),

        ];
        return view('memori/edit', $data);
    }

    public function update($id)
    {
        //cek nama
        $memorilama = $this->memoriModel->getmemori($this->request->getVar('slug'));
        if ($memorilama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[tbl_memori.nama]';
        }
        // validasi input
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
            'ukuran_memori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'jenis_memori' => [
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
            return redirect()->to('/memori/edit/' . $this->request->getVar('slug'))->withInput();
        }
        $fileGambar = $this->request->getFile('gambar');

        // cek gambar, Apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            // generate nama file Gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindah gambar
            $fileGambar->move('img/memori', $namaGambar);
            // hapus file gambar lama
            unlink('img/memori/' . $this->request->getVar('gambarLama'));
        }
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->memoriModel->save([
            'id' => $id,
            'merk' => $this->request->getVar('merk'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => intval(preg_replace("/[^0-9]/", "", $this->request->getVar('harga'))),
            'stok' => $this->request->getVar('stok'),
            'ukuran_memori' => $this->request->getVar('ukuran_memori'),
            'jenis_memori' => $this->request->getVar('jenis_memori'),
            'gambar' => $namaGambar,
            'rincian' => $this->request->getVar('rincian'),
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/memori');
    }
    // Tambah Stock Tiap Barang
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Stock Barang',
            'memori' => $this->memoriModel->getmemori(),
            'total' => count($this->memoriModel->getmemori())
        ];
        return view('memori/tambah', $data);
    }
    public function addstok($id)
    {
        $stokLama = intval($this->request->getVar('stokLama'));
        $stokTambah = intval($this->request->getVar('stok'));
        $stokBaru =  $stokTambah + $stokLama;

        $this->memoriModel->save(
            [
                'id' => $id,
                'stok' => $stokBaru,
            ]
        );
        return redirect()->to('/memori/tambah');
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
        $sheet->setCellValue('F1', 'Ukuran Memori');
        $sheet->setCellValue('G1', 'jenis Memori');
        $sheet->setCellValue('H1', 'Gambar');
        $sheet->setCellValue('I1', 'Rincian');
        $sheet->setCellValue('J1', 'Created At');
        $sheet->setCellValue('K1', 'Updated At');

        $memori = $this->memoriModel->getMemori();
        $no = 1;
        $x = 2;
        foreach ($memori as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['merk']);
            $sheet->setCellValue('C' . $x, $val['nama']);
            $sheet->setCellValue('D' . $x, $val['harga']);
            $sheet->setCellValue('E' . $x, $val['stok']);
            $sheet->setCellValue('F' . $x, $val['ukuran_memori']);
            $sheet->setCellValue('G' . $x, $val['jenis_memori']);
            $sheet->setCellValue('H' . $x, $val['gambar']);
            $sheet->setCellValue('I' . $x, $val['rincian']);
            $sheet->setCellValue('J' . $x, $val['created_at']);
            $sheet->setCellValue('K' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-memori';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function cetak()
    {
        $data = [
            'title' => 'Cetak Daftar Memory',
            'memori' => $this->memoriModel->getMemori()
        ];

        return view('/memori/cetak', $data);
    }
}
