<?php

namespace App\Controllers;

use \App\Models\ServModel;
use \App\Models\TransaksiModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;

class Service extends BaseController
{
    protected $servModel;
    protected $trxModel;
    public function __construct()
    {
        $this->servModel = new ServModel();
        $this->trxModel = new TransaksiModel();
    }
    //customer service
    public function index()
    {
        $query  = max($this->servModel->getServ());
        $angka = $query['id'] + 1;
        $kode = 'A-' . $angka;
        $currentPage = $this->request->getVar('page_service') ? $this->request->getVar('page_service') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $service =  $this->servModel->search($keyword);
        } else {
            $service = $this->servModel;
        }
        $data =
            [
                'title'       => 'Daftar Service',
                'service'     => $this->servModel->paginate(10, 'service'),
                'pager'       => $this->servModel->pager,
                'currentPage' => $currentPage,
                'validation'  => \Config\Services::validation(),
                'kode'        => $kode,
                'cart'        => \Config\Services::cart(),


            ];
        return view('/service/index', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'kerusakan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'no_hp' => [
                'rules' => 'required',
                'label' => 'No HP',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],

        ])) {
            return redirect()->to('/service')->withInput();
        }
        $this->servModel->save([
            'nama' => $this->request->getVar('nama'),
            'kerusakan' => $this->request->getVar('kerusakan'),
            'antrian_pc' => $this->request->getVar('antrian'),
            'status' => 'diterima',
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('no_hp'),
            'kerusakan' => $this->request->getVar('kerusakan'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/service');
    }
    public function cetakBukti($antrian)
    {
        $data = [
            'title' => 'Bukti Transaksi Service',
            'service' => $this->servModel->getServ($antrian)
        ];
        return view('service/cetak', $data);
        return redirect()->to('/service');
    }
    public function ambil($antrian)
    {
        $id = $this->request->getVar('id');
        $this->servModel->save([
            'id'                => $id,
            'status'            => 'diambil',
        ]);
        $this->trxModel->save([
            'pelanggan'        => $this->request->getVar('nama'),
            'jenis'            => 'Service PC/Laptop',
            'nilai'            => $this->request->getVar('biaya'),
            'customer_service' => session()->get('username'),
            'rincian'          => $this->request->getVar('rincian')
        ]);
        $data = [
            'title' => 'Invoice Service',
            'service' => $this->servModel->getServ($antrian)
        ];
        return view('service/invoice', $data);
    }
    public function delete($id)
    {
        $this->servModel->delete($id);
        session()->setFlashdata('pesan', 'Berhasil');
        return redirect()->to('/service');
    }

    // action teknisi
    public function proses($id)
    {
        if (session()->get('level') != 'Teknisi') {
            return redirect()->to('/Home');
        }
        $this->servModel->save([
            'id' => $id,
            'teknisi' => $this->request->getVar('teknisi'),
            'status' => 'diproses',
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/service/teknisi');
    }

    public function teknisi()
    {
        if (session()->get('level') != 'Teknisi') {
            return redirect()->to('/Home');
        }
        $user = session()->get('username');
        $data =
            [
                'title'       => 'Daftar Service',
                'diproses'    => $this->servModel->getProses($user),
                'diterima'    => $this->servModel->getTrx('diterima'),
                'selesai'     => $this->servModel->getTrx('selesai'),
                'service'     => $this->servModel->getServ(),
                'validation'  => \Config\Services::validation(),

            ];
        return view('/service/v_teknisi', $data);
    }

    public function selesai($id)
    {
        if (session()->get('level') != 'Teknisi') {
            return redirect()->to('/Home');
        }
        if (!$this->validate([
            'biaya' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'rincian_service' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
        ])) {
            return redirect()->to('/service')->withInput();
        }
        $this->servModel->save([
            'id'                => $id,
            'biaya'             => intval(preg_replace("/[^0-9]/", "", $this->request->getVar('biaya'))),
            'status'            => 'selesai',
            'rincian_service'   => $this->request->getVar('rincian_service'),
        ]);

        session()->setFlashdata('pesan', 'Berhasil Menyelesaikan Service');
        return redirect()->to('/service/teknisi');
    }
}
