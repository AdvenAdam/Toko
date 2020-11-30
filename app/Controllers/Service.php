<?php

namespace App\Controllers;

use \App\Models\ServModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;

class Service extends BaseController
{
    protected $servModel;
    public function __construct()
    {
        $this->servModel = new ServModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Daftar Service',
                'service' => $this->servModel->getServ()
            ];

        return view('service/index', $data);
    }
    public function create()
    {
        //session();
        $data = [
            'title' => 'Tambah Data',
            'validation' => \Config\Services::validation()
        ];
        return view('service/create', $data);
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
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'pc' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'biaya' => [
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
            'rincian_service' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]

        ])) {
            return redirect()->to('/service/create')->withInput();
        }
        $slug = url_title(($this->request->getVar('nama') . $this->request->getVar('pc')), '-', true);
        $this->servModel->save([
            'nama' => $this->request->getVar('nama'),
            'kerusakan' => $this->request->getVar('kerusakan'),
            'pc' => $this->request->getVar('pc'),
            'slug' => $slug,
            'status' => $this->request->getVar('status'),
            'biaya' => $this->request->getVar('biaya'),
            'no_hp' => $this->request->getVar('no_hp'),
            'rincian_service' => $this->request->getVar('rincian_service'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/service');
    }

    public function delete($id)
    {
        //cari gambar berdasar id
        $service = $this->servModel->find($id);
        $this->servModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/service');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Data',
            'validation' => \Config\Services::validation(),
            'service' => $this->servModel->getService($slug)
        ];
        return view('service/edit', $data);
    }

    public function update($id)
    {
        //gak perlu edit nama
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
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'pc' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'biaya' => [
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
            'rincian_service' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('/service/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $this->servModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'kerusakan' => $this->request->getVar('kerusakan'),
            'pc' => $this->request->getVar('pc'),
            'status' => $this->request->getVar('status'),
            'biaya' => $this->request->getVar('biaya'),
            'no_hp' => $this->request->getVar('no_hp'),
            'rincian_service' => $this->request->getVar('rincian_service'),
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/service');
    }
}
