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
use \App\Models\KasModel;
use \App\Models\SubsModel;
use \App\Models\RatingModel;
use \App\Models\TokoModel;
use \App\Models\AuthModel;
use \App\Models\MerkModel;
use \App\Models\ServModel;
use \App\Models\TransaksiModel;



class Dashboard extends BaseController
{
    protected $ramModel;
    protected $memoriModel;
    protected $casingModel;
    protected $motherboardModel;
    protected $pendinginModel;
    protected $procesorModel;
    protected $psuModel;
    protected $vgaModel;
    protected $kasModel;
    protected $subsModel;
    protected $ratingModel;
    protected $tokoModel;
    protected $authModel;
    protected $merkModel;
    protected $servModel;
    protected $trxModel;


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
        $this->kasModel = new KasModel();
        $this->subsModel = new SubsModel();
        $this->ratingModel = new RatingModel();
        $this->tokoModel = new TokoModel();
        $this->authModel = new AuthModel();
        $this->merkModel = new merkModel();
        $this->servModel = new ServModel();
        $this->trxModel = new TransaksiModel();
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
        } else {
            return redirect()->to('/Home');
        }
    }

    public function Warehouse()
    {
        if (session()->get('level') != 'Warehouse') {
            return redirect()->to('/Dashboard');
        }
        $data = [
            'title'         => 'Halaman Dashboard Warehouse',
            'ram'           => count($this->ramModel->getRam()),
            'memori'        => count($this->memoriModel->getMemori()),
            'casing'        => count($this->casingModel->getcasing()),
            'motherboard'   => count($this->motherboardModel->getmotherboard()),
            'procesor'      => count($this->procesorModel->getProcesor()),
            'pendingin'     => count($this->pendinginModel->getPendingin()),
            'psu'           => count($this->psuModel->getPsu()),
            'vga'           => count($this->vgaModel->getVga()),
            'merk'           => ($this->merkModel->getMerk()),


        ];
        return view('pages/Warehouse', $data);
    }

    //--------------------------------------------------------------------
    public function Accountant()
    {
        if (session()->get('level') != 'Accountant') {
            return redirect()->to('/Dashboard');
        } else {

            $data = [
                'title' => 'Halaman Dashboard Accountant',
                'kas' => ($this->kasModel->getKas()),
                'transaksi' => ($this->trxModel->getTrx()),
                'trxpenjualan' => count($this->trxModel->getJenis('Transaksi Penjualan')),
                'trxservice' => count($this->trxModel->getJenis('Service PC/Laptop')),

            ];
            return view('pages/Accountan', $data);
        }
    }
    public function Admin()
    {
        if (session()->get('level') != 'Admin') {
            return redirect()->to('/Home');
        }
        $data = [
            'title'     => 'Halaman Dashboard Admin',
            'rating'    => $this->ratingModel->getRating(),
            'bintang0'  => count($this->ratingModel->getBintang0()),
            'bintang1'  => count($this->ratingModel->getBintang1()),
            'bintang2'  => count($this->ratingModel->getBintang2()),
            'bintang3'  => count($this->ratingModel->getBintang3()),
            'bintang4'  => count($this->ratingModel->getBintang4()),
            'bintang5'  => count($this->ratingModel->getBintang5()),
            'subs'      => $this->subsModel->paginate(8),
            'countsub'  => count($this->subsModel->getSubs()),
            'toko'      => $this->tokoModel->getToko(),
            'user'      => $this->authModel->getNotguest(),
            'guest'     => count($this->authModel->getGuest()),

        ];
        return view('pages/Admin', $data);
    }

    public function Teknisi()
    {
        if (session()->get('level') != 'Teknisi') {
            return redirect()->to('/Home');
        }
        $data = [
            'title'       => 'Halaman Dashboard Teknisi',
            'teknisi'     => $this->authModel->getTeknisi(),
            'diproses'    => count($this->servModel->getTrx('diproses')),
            'diterima'    => count($this->servModel->getTrx('diterima')),
            'selesai'     => count($this->servModel->getTrx('selesai')),

        ];
        return view('pages/Teknisi', $data);
    }
}
