<?php

namespace App\Controllers;

use \App\Models\TransaksiModel;
use \App\Models\RamModel;
use \App\Models\MemoriModel;
use \App\Models\CasingModel;
use \App\Models\MotherboardModel;
use \App\Models\PendinginModel;
use \App\Models\ProcesorModel;
use \App\Models\PsuModel;
use \App\Models\VgaModel;
use Config\Validation;

class Trx extends BaseController
{
    protected $trxModel;
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
        $this->trxModel = new TransaksiModel();
        $this->ramModel = new RamModel();
        $this->memoriModel = new MemoriModel();
        $this->casingModel = new CasingModel();
        $this->motherboardModel = new MotherboardModel();
        $this->pendinginModel = new PendinginModel();
        $this->procesorModel = new ProcesorModel();
        $this->psuModel = new PsuModel();
        $this->vgaModel = new VgaModel();
        helper('number');
        helper('form');
        helper('date');
    }


    public function Save()
    {
        $cart = \Config\Services::cart();
        // mengambbil stok
        if (!$this->validate([
            'pelanggan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => ' Nama {field} harus diisi'
                ]
            ],
        ])) {
            return redirect()->to('/shop/cart')->withInput();
        }
        $i = 1;
        // mengulang sebanyak jumlah data cart
        for ($counter = 1; $counter <= count($cart->contents()); $counter++) {
            $a = $i++;
            $kategori = $this->request->getVar('kategori' . $a);
            $id = $this->request->getVar('id' . $a);
            $qty = intval($this->request->getVar('qty' . $a));
            $this->trxModel->save([
                'pelanggan'        => $this->request->getVar('pelanggan'),
                'jenis'            => $this->request->getVar('jenis'),
                'nilai'            => $this->request->getVar('nilai' . $a),
                'customer_service' => $this->request->getVar('customer'),
                'rincian'          => $this->request->getVar('rincian' . $a)
            ]);
            // mengurangi stok
            if ($kategori == 'casing') {
                $stokBarang = $this->casingModel->getStok($id);
                foreach ($stokBarang as $val) {
                    $stok = intval($val['stok']);
                }
                $this->casingModel->save([
                    'id' => $id,
                    'stok' => $stok - $qty,
                ]);
            }
            if ($kategori == 'memori') {
                $stokBarang = $this->memoriModel->getStok($id);
                foreach ($stokBarang as $val) {
                    $stok = intval($val['stok']);
                }
                $this->memoriModel->save([
                    'id' => $id,
                    'stok' => $stok - $qty,
                ]);
            }
            if ($kategori == 'motherboard') {
                $stokBarang = $this->motherboardModel->getStok($id);
                foreach ($stokBarang as $val) {
                    $stok = intval($val['stok']);
                }
                $this->motherboardModel->save([
                    'id' => $id,
                    'stok' => $stok - $qty,
                ]);
            }
            if ($kategori == 'pendingin') {
                $stokBarang = $this->pendinginModel->getStok($id);
                foreach ($stokBarang as $val) {
                    $stok = intval($val['stok']);
                }
                $this->pendinginModel->save([
                    'id' => $id,
                    'stok' => $stok - $qty,
                ]);
            }
            if ($kategori == 'procesor') {
                $stokBarang = $this->procesorModel->getStok($id);
                foreach ($stokBarang as $val) {
                    $stok = intval($val['stok']);
                }
                $this->procesorModel->save([
                    'id' => $id,
                    'stok' => $stok - $qty,
                ]);
            }
            if ($kategori == 'psu') {
                $stokBarang = $this->psuModel->getStok($id);
                foreach ($stokBarang as $val) {
                    $stok = intval($val['stok']);
                }
                $this->psuModel->save([
                    'id' => $id,
                    'stok' => $stok - $qty,
                ]);
            }
            if ($kategori == 'ram') {
                $stokBarang = $this->ram->getStok($id);
                foreach ($stokBarang as $val) {
                    $stok = intval($val['stok']);
                }
                $this->ram->save([
                    'id' => $id,
                    'stok' => $stok - $qty,
                ]);
            }
            if ($kategori == 'vga') {
                $stokBarang = $this->vgaModel->getStok($id);
                foreach ($stokBarang as $val) {
                    $stok = intval($val['stok']);
                }
                $this->vgaModel->save([
                    'id' => $id,
                    'stok' => $stok - $qty,
                ]);
            }
        }
        $data = [
            'title' => 'Invoice Transaksi',
            'cart' => $cart
        ];

        return view('layout/front/BuktiTrx', $data);
    }
}
