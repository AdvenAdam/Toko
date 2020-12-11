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
        if (session()->get('level') == 'Customer_service') {
            return redirect()->to('/dashboard/CustomerService');
        }

        // $merk = $this->request->getVar('merk');
        // if ($merk) {
        //     $casing =  $this->casingModel->search($merk);
        // } else {
        //     $casing = $this->casingModel->getCasing();
        // }

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
            'uri'           =>  new \CodeIgniter\HTTP\URI(current_url()),
            'validation' => \Config\Services::validation()
        ];

        return view('layout/front/Shop', $data);
    }

    //--------------------------------------------------------------------

}
