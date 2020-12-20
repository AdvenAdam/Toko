<?php

namespace App\Controllers;

use \App\Models\VgaModel;
use \App\Models\MerkModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;

if (session()->get('level') <> 'Warehouse') {
    return redirect()->to('/Dashboard');
}
class Vga extends BaseController
{
    protected $vgaModel;
    protected $merkModel;
    public function __construct()
    {
        $this->vgaModel = new VgaModel();
        $this->merkModel = new MerkModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Daftar VGA',
                'merk'  => $this->merkModel->getMerk(),
                'vga' => $this->vgaModel->getVga()
            ];


        // $komikModel = new \App\Models\KomikModel();

        return view('vga/index', $data);
    }
    public function create()
    {
        //session();
        $data = [
            'title' => 'Tambah Data',
            'validation' => \Config\Services::validation()
        ];
        return view('vga/create', $data);
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
                'rules' => 'required|is_unique[tbl_vga.nama]',
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
            'base_clock' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'boost_clock' => [
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
            'tipe_memori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'lebar_memori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'konektor_daya' => [
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
            return redirect()->to('/vga/create/')->withInput();
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
            $fileGambar->move('img/vga', $namaGambar);
            $image = \Config\Services::image()
                ->withFile('img/motherboard/' . $namaGambar)
                ->resize(500, 500)
                ->save('img/motherboard/' . $namaGambar);
            // ambil nama file
            // $namaSampul = $fileSampul->getName();

        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->vgaModel->save([
            'merk' => $this->request->getVar('merk'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => intval(preg_replace("/[^0-9]/", "", $this->request->getVar('harga'))),
            'stok' => $this->request->getVar('stok'),
            'base_clock' => $this->request->getVar('base_clock'),
            'boost_clock' => $this->request->getVar('boost_clock'),
            'ukuran_memori' => $this->request->getVar('ukuran_memori'),
            'tipe_memori' => $this->request->getVar('tipe_memori'),
            'lebar_memori' => $this->request->getVar('lebar_memori'),
            'konektor_daya' => $this->request->getVar('konektor_daya'),
            'gambar' => $namaGambar,
            'rincian' => $this->request->getVar('rincian'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/vga');
    }
    public function detail($slug)
    {
        $vga = $this->vgaModel->getvga($slug);
        $data = [
            'title' => 'Detail VGA',
            'vga' => $this->vgaModel->getvga($slug)
        ];

        //JIka  data tidak ada di table
        if (empty($data['vga'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('vga ' . $slug . ' tidak ditemukan');
        }

        return view('vga/detail', $data);
    }
    public function delete($id)
    {

        //cari gambar berdasar id
        $vga = $this->vgaModel->find($id);

        // cek gambar bila gambar default aga rfile default.jpg tdk terhapus
        if ($vga['gambar'] != 'default.jpg') {

            // hapus gambar
            unlink('img/vga/' . $vga['gambar']);
        }


        $this->vgaModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/vga');
    }
    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Data VGA',
            'validation' => \Config\Services::validation(),
            'merk'  => $this->merkModel->getMerk(),
            'vga' => $this->vgaModel->getvga($slug)
        ];
        return view('vga/edit', $data);
    }

    // update
    public function update($id)
    {
        //cek nama
        $vgalama = $this->vgaModel->getvga($this->request->getVar('slug'));
        if ($vgalama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[tbl_vga.nama]';
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
            'base_clock' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'boost_clock' => [
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
            'tipe_memori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'lebar_memori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'konektor_daya' => [
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

            return redirect()->to('/vga/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        // cek gambar, Apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            // generate nama file Gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindah gambar
            $fileGambar->move('img/vga', $namaGambar);
            $image = \Config\Services::image()
                ->withFile('img/motherboard/' . $namaGambar)
                ->resize(500, 500)
                ->save('img/motherboard/' . $namaGambar);
            // hapus file gambar lama
            unlink('img/vga/' . $this->request->getVar('gambarLama'));
        }
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->vgaModel->save([
            'id' => $id,
            'merk' => $this->request->getVar('merk'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => intval(preg_replace("/[^0-9]/", "", $this->request->getVar('harga'))),
            'stok' => $this->request->getVar('stok'),
            'base_clock' => $this->request->getVar('base_clock'),
            'boost_clock' => $this->request->getVar('boost_clock'),
            'ukuran_memori' => $this->request->getVar('ukuran_memori'),
            'tipe_memori' => $this->request->getVar('tipe_memori'),
            'lebar_memori' => $this->request->getVar('lebar_memori'),
            'konektor_daya' => $this->request->getVar('konektor_daya'),
            'gambar' => $namaGambar,
            'rincian' => $this->request->getVar('rincian'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/vga');
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Stock Barang',
            'vga' => $this->vgaModel->getvga(),
            'total' => count($this->vgaModel->getvga())
        ];
        return view('vga/tambah', $data);
    }
    public function addstok($id)
    {
        $stokLama = intval($this->request->getVar('stokLama'));
        $stokTambah = intval($this->request->getVar('stok'));
        $stokBaru =  $stokTambah + $stokLama;

        $this->vgaModel->save(
            [
                'id' => $id,
                'stok' => $stokBaru,
            ]
        );
        return redirect()->to('/vga/tambah/');
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
        $sheet->setCellValue('F1', 'Base Clock');
        $sheet->setCellValue('G1', 'Boost Clock');
        $sheet->setCellValue('H1', 'Ukuran Memori');
        $sheet->setCellValue('I1', 'Tipe Memori');
        $sheet->setCellValue('J1', 'Lebar Memori');
        $sheet->setCellValue('K1', 'Konektor Daya');
        $sheet->setCellValue('L1', 'Gambar');
        $sheet->setCellValue('M1', 'Rincian');
        $sheet->setCellValue('N1', 'Created At');
        $sheet->setCellValue('O1', 'Updated At');

        $vga = $this->vgaModel->getVga();
        $no = 1;
        $x = 2;
        foreach ($vga as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['merk']);
            $sheet->setCellValue('C' . $x, $val['nama']);
            $sheet->setCellValue('D' . $x, $val['harga']);
            $sheet->setCellValue('E' . $x, $val['stok']);
            $sheet->setCellValue('F' . $x, $val['base_clock']);
            $sheet->setCellValue('G' . $x, $val['boost_clock']);
            $sheet->setCellValue('H' . $x, $val['ukuran_memori']);
            $sheet->setCellValue('I' . $x, $val['tipe_memori']);
            $sheet->setCellValue('J' . $x, $val['lebar_memori']);
            $sheet->setCellValue('K' . $x, $val['konektor_daya']);
            $sheet->setCellValue('L' . $x, $val['gambar']);
            $sheet->setCellValue('M' . $x, $val['rincian']);
            $sheet->setCellValue('N' . $x, $val['created_at']);
            $sheet->setCellValue('O' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-vga';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function cetak()
    {
        $data = [
            'title' => 'Cetak Daftar VGA',
            'vga' => $this->vgaModel->getVga()
        ];

        return view('/vga/cetak', $data);
    }
}
