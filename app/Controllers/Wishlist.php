<?php

namespace App\Controllers;

use App\Models\WishModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;
use \App\Models\RamModel;
use \App\Models\MemoriModel;
use \App\Models\CasingModel;
use \App\Models\MotherboardModel;
use \App\Models\PendinginModel;
use \App\Models\ProcesorModel;
use \App\Models\PsuModel;
use \App\Models\VgaModel;

if (session()->get('level') != 'Guest') {
    session()->setFlashdata('pesan', 'Silahkan Login Terlebih dahulu');
    return redirect()->to('/Auth/Login');
}
class wishlist  extends BaseController
{
    protected $wishModel;
    protected $ramModel;
    protected $memoriModel;
    protected $casingModel;
    protected $motherboardModel;
    protected $pendinginModel;
    protected $procesorModel;
    protected $psuModel;
    protected $vgaModel;

    public function __construct()
    {
        $this->wishModel = new WishModel();
        $this->ramModel = new RamModel();
        $this->memoriModel = new MemoriModel();
        $this->casingModel = new CasingModel();
        $this->motherboardModel = new MotherboardModel();
        $this->pendinginModel = new PendinginModel();
        $this->procesorModel = new ProcesorModel();
        $this->psuModel = new PsuModel();
        $this->vgaModel = new VgaModel();
    }

    public function wish($user)
    {
        if ($user != session()->get('username')) {
            return redirect()->to('/');
        }
        $data =
            [
                'title' => 'Daftar Wishlist',
                'validation' => \Config\Services::validation(),
                'wish'      => $this->wishModel->getWish($user),
                'memory'        => $this->memoriModel->getMemori(),
                'ram'           => $this->ramModel->getRam(),
                'casing'        => $this->casingModel->getCasing(),
                'motherboard'   => $this->motherboardModel->getMotherboard(),
                'procesor'      => $this->procesorModel->getProcesor(),
                'pendingin'     => $this->pendinginModel->getPendingin(),
                'psu'           => $this->psuModel->getPsu(),
                'vga'           => $this->vgaModel->getVga(),
                'cart'             => \Config\Services::cart(),

            ];

        return view('layout/front/Wishlist', $data);
    }

    public function save()
    {

        // validasi input
        if (!$this->validate([
            'slug' => [
                'rules' => 'required|is_unique[tbl_wishlist.slug]',
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
            'gambar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],


        ])) {
            return redirect()->to('/');
        }
        $this->wishModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $this->request->getVar('slug'),
            'gambar' => $this->request->getVar('gambar'),
            'kategori' => $this->request->getVar('kategori'),
            'user' => session()->get('username'),
        ]);
        session()->setFlashdata('pesan', 'Wishlist berhasil di tambahkan silahkan melihat produk yang lain :)');

        return redirect()->to('/Shop');
    }

    public function delete($id)
    {
        $this->tokoModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/toko');
    }
}
