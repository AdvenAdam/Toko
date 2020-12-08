<?php

namespace App\Controllers;

use \App\Models\RamModel;
use \App\Models\MerkModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;

class Ram extends BaseController
{
    protected $merkModel;
    protected $ramModel;
    public function __construct()
    {
        $this->ramModel = new RamModel();
        $this->merkModel = new MerkModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Daftar  RAM',
                'ram' => $this->ramModel->getRam()
            ];


        // $komikModel = new \App\Models\KomikModel();

        return view('ram/index', $data);
    }
    public function create()
    {
        //session();
        $data = [
            'title' => 'Tambah Data',
            'merk'  => $this->merkModel->getMerk(),
            'validation' => \Config\Services::validation()
        ];
        return view('ram/create', $data);
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
                'rules' => 'required|is_unique[tbl_ram.nama]',
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
            'jenis_ram' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'ukuran_ram' => [
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
            'gambar' => [
                'rules' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar'
                ]
            ]

        ])) {
            return redirect()->to('/ram/create')->withInput();
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
            $fileGambar->move('img/ram', $namaGambar);
            // ambil nama file
            // $namaSampul = $fileSampul->getName();

        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->ramModel->save([
            'merk' => $this->request->getVar('merk'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'jenis_ram' => $this->request->getVar('jenis_ram'),
            'ukuran_ram' => $this->request->getVar('ukuran_ram'),
            'frekuensi' => $this->request->getVar('frekuensi'),
            'gambar' => $namaGambar,
            'rincian' => $this->request->getVar('rincian'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/ram');
    }
    public function detail($slug)
    {
        $ram = $this->ramModel->getram($slug);
        $data = [
            'title' => 'Detail RAM',
            'ram' => $this->ramModel->getram($slug)
        ];

        //JIka  data tidak ada di table
        if (empty($data['ram'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('ram ' . $slug . ' tidak ditemukan');
        }

        return view('ram/detail', $data);
    }
    public function delete($id)
    {

        //cari gambar berdasar id
        $ram = $this->ramModel->find($id);

        // cek gambar bila gambar default aga rfile default.jpg tdk terhapus
        if ($ram['gambar'] != 'default.jpg') {

            // hapus gambar
            unlink('img/ram/' . $ram['gambar']);
        }


        $this->ramModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/ram');
    }
    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Data RAM',
            'validation' => \Config\Services::validation(),
            'merk'  => $this->merkModel->getMerk(),
            'ram' => $this->ramModel->getram($slug)
        ];
        return view('ram/edit', $data);
    }

    // update
    public function update($id)
    {
        //cek nama
        $ramlama = $this->ramModel->getram($this->request->getVar('slug'));
        if ($ramlama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[tbl_ram.nama]';
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
            'jenis_ram' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'ukuran_ram' => [
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
            'gambar' => [
                'rules' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar'
                ]
            ]

        ])) {

            return redirect()->to('/ram/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        // cek gambar, Apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            // generate nama file Gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindah gambar
            $fileGambar->move('img/ram', $namaGambar);
            // hapus file gambar lama
            unlink('img/ram/' . $this->request->getVar('gambarLama'));
        }
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->ramModel->save([
            'id' => $id,
            'merk' => $this->request->getVar('merk'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'jenis_ram' => $this->request->getVar('jenis_ram'),
            'ukuran_ram' => $this->request->getVar('ukuran_ram'),
            'frekuensi' => $this->request->getVar('frekuensi'),
            'gambar' => $namaGambar,
            'rincian' => $this->request->getVar('rincian'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/ram');
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Stock Barang',
            'ram' => $this->ramModel->getram(),
            'total' => count($this->ramModel->getram())
        ];
        return view('ram/tambah', $data);
    }
    public function addstok($id)
    {
        $stokLama = intval($this->request->getVar('stokLama'));
        $stokTambah = intval($this->request->getVar('stok'));
        $stokBaru =  $stokTambah + $stokLama;

        $this->ramModel->save(
            [
                'id' => $id,
                'stok' => $stokBaru,
            ]
        );
        return redirect()->to('/ram/tambah');
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
        $sheet->setCellValue('F1', 'Jenis RAM');
        $sheet->setCellValue('G1', 'Ukuran RAM');
        $sheet->setCellValue('H1', 'Frekuensi');
        $sheet->setCellValue('I1', 'Gambar');
        $sheet->setCellValue('J1', 'Rincian');
        $sheet->setCellValue('K1', 'Created At');
        $sheet->setCellValue('L1', 'Updated At');

        $ram = $this->ramModel->getRam();
        $no = 1;
        $x = 2;
        foreach ($ram as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['merk']);
            $sheet->setCellValue('C' . $x, $val['nama']);
            $sheet->setCellValue('D' . $x, $val['harga']);
            $sheet->setCellValue('E' . $x, $val['stok']);
            $sheet->setCellValue('F' . $x, $val['jenis_ram']);
            $sheet->setCellValue('G' . $x, $val['ukuran_ram']);
            $sheet->setCellValue('H' . $x, $val['frekuensi']);
            $sheet->setCellValue('I' . $x, $val['gambar']);
            $sheet->setCellValue('J' . $x, $val['rincian']);
            $sheet->setCellValue('K' . $x, $val['created_at']);
            $sheet->setCellValue('L' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-ram';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function cetak()
    {
        $data = [
            'title' => 'Cetak Daftar Cassing',
            'ram' => $this->ramModel->getRam()
        ];

        return view('/ram/cetak', $data);
    }
}
