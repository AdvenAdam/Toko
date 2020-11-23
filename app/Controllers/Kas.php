<?php

namespace App\Controllers;

use \App\Models\KasModel;
use CodeIgniter\Config\Config;
use Matrix\Operators\DirectSum;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;

class Kas extends BaseController
{
    protected $kasModel;
    public function __construct()
    {
        $this->kasModel = new KasModel();
    }
    public function index()
    {

        $data =
            [
                'title' => 'Daftar kas',
                'kas' => $this->kasModel->getKas(),
                'pemasukan' => 0,
                'pengeluaran' => 0,
                'saldo' => 0,


            ];

        return view('kas/index', $data);
    }
    public function createMasuk()
    {

        $query  = max($this->kasModel->getKas());
        $angka = $query['id'] + 1;
        $kode = 'KAS-' . $angka;
        //session();
        $data = [
            'title' => 'Input Kas Masuk',
            'validation' => \Config\Services::validation(),
            'kode' => $kode,

        ];

        return view('kas/createMasuk', $data);
    }

    public function createKeluar()
    {

        $query  = max($this->kasModel->getKas());
        $angka = $query['id'] + 1;
        $kode = 'KAS-' . $angka;
        //session();
        $data = [
            'title' => 'Input Kas Keluar',
            'validation' => \Config\Services::validation(),
            'kode' => $kode,

        ];

        return view('kas/createKeluar', $data);
    }
    public function saveMasuk()
    {
        // validasi input
        if (!$this->validate([
            'uraian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'pemasukan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
        ])) {
            return redirect()->to('/kas/create')->withInput();
        }
        $this->kasModel->save([
            'kode_kas' => $this->request->getVar('kode_kas'),
            'jenis_kas' => $this->request->getVar('jenis_kas'),
            'uraian' => $this->request->getVar('uraian'),
            'pemasukan' => intval(preg_replace("/[^0-9]/", "", $this->request->getVar('pemasukan'))),
            'pengeluaran' => intval(preg_replace("/[^0-9]/", "", $this->request->getVar('pengeluaran')))

        ]);


        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/kas');
    }
    public function saveKeluar()
    {
        // validasi input
        if (!$this->validate([
            'uraian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'pengeluaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
        ])) {
            return redirect()->to('/kas/create')->withInput();
        }


        $this->kasModel->save([
            'kode_kas' => $this->request->getVar('kode_kas'),
            'jenis_kas' => $this->request->getVar('jenis_kas'),
            'uraian' => $this->request->getVar('uraian'),
            'pemasukan' => intval(preg_replace("/[^0-9]/", "", $this->request->getVar('pemasukan'))),
            'pengeluaran' => intval(preg_replace("/[^0-9]/", "", $this->request->getVar('pengeluaran')))
        ]);


        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/kas');
    }

    public function delete($id)
    {
        $this->kasModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/kas');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Data Kas',
            'validation' => \Config\Services::validation(),
            'kas' => $this->kasModel->getKas($slug)
        ];
        return view('kas/edit', $data);
    }

    public function update($id)
    {
        // validasi input
        if (!$this->validate([
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
            return redirect()->to('/kas/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $this->kasModel->save([
            'id' => $id,
            'kode_kas' => $this->request->getVar('kode_kas'),
            'jenis_kas' => $this->request->getVar('jenis_kas'),
            'uraian' => $this->request->getVar('uraian'),
            'pemasukan' => preg_replace("/[^0-9]/", "", $this->request->getVar('pemasukan')),
            'pengeluaran' => preg_replace("/[^0-9]/", "", $this->request->getVar('pengeluaran'))

        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/kas');
    }
}
