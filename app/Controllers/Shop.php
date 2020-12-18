<?php

namespace App\Controllers;

use \App\Models\RamModel;
use \App\Models\MemoriModel;
use \App\Models\CasingModel;
use \App\Models\MotherboardModel;
use \App\Models\PendinginModel;
use \App\Models\ProcesorModel;
use \App\Models\PsuModel;
use \App\Models\VgaModel;
use \App\Models\MerkModel;

class Shop extends BaseController
{
    protected $ramModel;
    protected $memoriModel;
    protected $casingModel;
    protected $motherboardModel;
    protected $pendinginModel;
    protected $procesorModel;
    protected $psuModel;
    protected $vgaModel;
    protected $merkModel;

    public function __construct()
    {
        $this->ramModel = new RamModel();
        $this->memoriModel = new MemoriModel();
        $this->casingModel = new CasingModel();
        $this->motherboardModel = new MotherboardModel();
        $this->pendinginModel = new PendinginModel();
        $this->procesorModel = new ProcesorModel();
        $this->psuModel = new PsuModel();
        $this->vgaModel = new VgaModel();
        $this->merkModel = new MerkModel();
        helper('number');
        helper('form');
        helper('date');
    }
    public function index()
    {
        if (session()->get('level') == 'Warehouse') {
            return redirect()->to('/dashboard/Warehouse');
        }
        if (session()->get('level') == 'Accountant') {
            return redirect()->to('/dashboard/Accountant');
        }
        if (session()->get('level') == 'Teknisi') {
            return redirect()->to('/dashboard/Teknisi');
        }
        if (session()->get('level') == 'Admin') {
            return redirect()->to('/dashboard/Admin');
        }


        $data = [
            'title'         => 'SpaceCom-Shop',
            'memory'        => $this->memoriModel->getMemori(),
            'ram'           => $this->ramModel->getRam(),
            'casing'        => $this->casingModel->getCasing(),
            'motherboard'   => $this->motherboardModel->getMotherboard(),
            'procesor'      => $this->procesorModel->getProcesor(),
            'pendingin'     => $this->pendinginModel->getPendingin(),
            'psu'           => $this->psuModel->getPsu(),
            'vga'           => $this->vgaModel->getVga(),
            'merk'          => $this->merkModel->getMerk(),
            'cart'          => \Config\Services::cart(),
            'uri'           =>  new \CodeIgniter\HTTP\URI(current_url()),
            'validation' => \Config\Services::validation()
        ];

        return view('layout/front/Shop', $data);
    }
    // cart shop
    public function add()
    {
        $id = $this->request->getVar('id');
        // $stok = intval($this->request->getVar('stok')) - 1;
        $kategori = $this->request->getVar('kategori');
        $cart = \Config\Services::cart();
        $cart->insert([
            'id'      => $id,
            'qty'     => 1,
            'price'   => $this->request->getVar('price'),
            'name'    => $this->request->getVar('name'),
            'options' => array(
                'gambar' => $this->request->getVar('gambar'),
                'kategori' => $kategori
            )
        ]);

        // end
        session()->setflashdata('pesan', 'Berhasil diambahkan ke keranjang');
        return redirect()->to('/shop/cart');
    }
    //--------------------------------------------------------------------
    public function clear()
    {
        $cart = \Config\Services::cart();
        $cart->destroy();
        session()->setflashdata('pesan', 'Berhasil Mengosongkan');
        return redirect()->to('/Shop/cart');
    }
    public function cart()
    {

        $data = [
            'title' => 'Cart View',
            'cart' => \Config\Services::cart(),
            'times' => format_indo(date('Y-m-d')),
            'validation' => \Config\Services::validation()

        ];
        return view('layout/front/Shopcart', $data);
    }
    public function update()
    {
        $cart = \Config\Services::cart();
        $i = 1;
        foreach ($cart->contents() as $key => $value) {
            $stok = intval($this->request->getVar('qty' . $i++));
            $cart->update([
                'rowid'      => $value['rowid'],
                'qty'     => $stok,
            ]);
        }
        session()->setflashdata('pesan', 'Berhasil Menambahkan');
        return redirect()->to('/Shop/cart');
    }
    public function delete($rowid)
    {
        $cart = \Config\Services::cart();
        $cart->remove($rowid);
        session()->setflashdata('pesan', 'Berhasil Menghapus');
        return redirect()->to('/Shop/cart');
    }
}
