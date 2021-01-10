<?php

namespace App\Controllers;

use \App\Models\PegawaiModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;
use CodeIgniter\Config\I18n;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;


class Pegawai extends BaseController
{
    protected $pegawaiModel;
    public function __construct()
    {
        $this->pegawaiModel = new PegawaiModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Daftar Pegawai',
                'pegawai' => $this->pegawaiModel->getpegawai()
            ];


        // $komikModel = new \App\Models\KomikModel();

        return view('pegawai/index', $data);
    }
    public function create()
    {

        $query  = max($this->pegawaiModel->getPegawai());
        $angka = $query['id'] + 1;
        $kode = 'PG-' . $angka;
        //session();
        $data = [
            'title' => 'Tambah Data',
            'validation' => \Config\Services::validation(),
            'kode' => $kode,

        ];

        return view('pegawai/create', $data);
    }
    public function save()
    {
        // validasi input
        if (!$this->validate([
            'no_pegawai' => [
                'rules' => 'required|is_unique[tbl_pegawai.no_pegawai]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'no_hp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'gaji_pokok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'foto' => [
                'rules' => 'is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran foto terlalu besar',
                    'is_image' => 'yang anda pilih bukan foto',
                    'mime_in' => 'yang anda pilih bukan foto'
                ]
            ]

        ])) {
            return redirect()->to('/pegawai/create')->withInput();
        }
        // ambil gambar
        $fileGambar = $this->request->getFile('foto');
        // apakah tidak ada gambar yang dipilih
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {

            // generate nama sampul
            $namaGambar = $fileGambar->getRandomName();

            //pindah file ke img
            // $fileSampul->move('img');
            // memindahkan file dengan nama file yang dirandomkan
            $fileGambar->move('img/pegawai', $namaGambar);
            $image = \Config\Services::image()
                ->withFile('img/pegawai/' . $namaGambar)
                ->resize(500, 500)
                ->save('img/pegawai/' . $namaGambar);
            // ambil nama file
            // $namaSampul = $fileSampul->getName();

        }

        $slug = url_title($this->request->getVar('no_pegawai'), '-', true);
        $this->pegawaiModel->save([
            'no_pegawai' => $this->request->getVar('no_pegawai'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
            'email' => $this->request->getVar('email'),
            'gaji_pokok' => $this->request->getVar('gaji_pokok'),
            'jabatan' => $this->request->getVar('jabatan'),
            'foto' => $namaGambar,
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/pegawai');
    }
    public function detail($slug)
    {
        $pegawai = $this->pegawaiModel->getpegawai($slug);
        $data = [
            'title' => 'Detail pegawai',
            'pegawai' => $this->pegawaiModel->getpegawai($slug)
        ];

        //JIka  data tidak ada di table
        if (empty($data['pegawai'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('pegawai ' . $slug . ' tidak ditemukan');
        }

        return view('pegawai/detail', $data);
    }
    public function delete($id)
    {

        //cari gambar berdasar id
        $pegawai = $this->pegawaiModel->find($id);

        // cek gambar bila gambar default agar file default.jpg tdk terhapus
        if ($pegawai['foto'] != 'default.jpg') {

            // hapus gambar
            unlink('img/pegawai/' . $pegawai['foto']);
        }


        $this->pegawaiModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/pegawai');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Data Pegawai',
            'validation' => \Config\Services::validation(),
            'pegawai' => $this->pegawaiModel->getpegawai($slug)
        ];
        return view('pegawai/edit', $data);
    }

    public function update($id)
    {
        //cek nama
        $pegawailama = $this->pegawaiModel->getpegawai($this->request->getVar('slug'));
        if ($pegawailama['no_pegawai'] == $this->request->getVar('no_pegawai')) {
            $rule = 'required';
        } else {
            $rule = 'required|is_unique[tbl_pegawai.no_pegawai]';
        }
        // validasi input
        if (!$this->validate([
            'no_pegawai' => [
                'rules' => $rule,
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'no_hp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'gaji_pokok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'foto' => [
                'rules' => 'is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran foto terlalu besar',
                    'is_image' => 'yang anda pilih bukan foto',
                    'mime_in' => 'yang anda pilih bukan foto'
                ]
            ]

        ])) {
            return redirect()->to('/pegawai/edit/' . $this->request->getVar('slug'))->withInput();
        }
        $fileGambar = $this->request->getFile('foto');

        // cek gambar, Apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('fotoLama');
        } else {
            // generate nama file Gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindah gambar
            $fileGambar->move('img/pegawai', $namaGambar);
            $image = \Config\Services::image()
                ->withFile('img/pegawai/' . $namaGambar)
                ->resize(500, 500)
                ->save('img/pegawai/' . $namaGambar);
            // hapus file gambar lama
            unlink('img/pegawai/' . $this->request->getVar('fotoLama'));
        }
        $slug = url_title($this->request->getVar('no_pegawai'), '-', true);
        $this->pegawaiModel->save([
            'id' => $id,
            'no_pegawai' => $this->request->getVar('no_pegawai'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
            'email' => $this->request->getVar('email'),
            'gaji_pokok' => $this->request->getVar('gaji_pokok'),
            'jabatan' => $this->request->getVar('jabatan'),
            'foto' => $namaGambar,
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/pegawai');
    }
    public function excel()
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'No Pegawai');
        $sheet->setCellValue('C1', 'Nama');
        $sheet->setCellValue('D1', 'Alamat');
        $sheet->setCellValue('E1', 'No HP');
        $sheet->setCellValue('F1', 'Email');
        $sheet->setCellValue('G1', 'Gaji Pokok');
        $sheet->setCellValue('H1', 'Jabatan');
        $sheet->setCellValue('I1', 'Foto');
        $sheet->setCellValue('J1', 'Created At');
        $sheet->setCellValue('K1', 'Updated At');

        $pegawai = $this->pegawaiModel->getPegawai();
        $no = 1;
        $x = 2;
        foreach ($pegawai as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['no_pegawai']);
            $sheet->setCellValue('C' . $x, $val['nama']);
            $sheet->setCellValue('D' . $x, $val['alamat']);
            $sheet->setCellValue('E' . $x, $val['no_hp']);
            $sheet->setCellValue('F' . $x, $val['email']);
            $sheet->setCellValue('G' . $x, $val['gaji_pokok']);
            $sheet->setCellValue('H' . $x, $val['jabatan']);
            $sheet->setCellValue('I' . $x, $val['foto']);
            $sheet->setCellValue('J' . $x, $val['created_at']);
            $sheet->setCellValue('K' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-pegawai';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function cetak()
    {
        $data = [
            'title' => 'Cetak Daftar Pegawai',
            'pegawai' => $this->pegawaiModel->getPegawai()
        ];

        return view('/pegawai/cetak', $data);
    }
}
