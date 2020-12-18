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

class Rakit extends BaseController
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
        $data = [
            'title'         => 'SpaceCom-Rakit',
            'coba'          => $this->request->getVar('merk'),
            'memori'        => $this->memoriModel->getMemori(),
            'ram'           => $this->ramModel->getRam(),
            'casing'        => $this->casingModel->getCasing(),
            'motherboard'   => $this->motherboardModel->getMotherboard(),
            'procesor'      => $this->procesorModel->getProcesor(),
            'pendingin'     => $this->pendinginModel->getPendingin(),
            'psu'           => $this->psuModel->getPsu(),
            'vga'           => $this->vgaModel->getVga(),
            'merk'          => $this->merkModel->getMerk(),
            'uri'           =>  new \CodeIgniter\HTTP\URI(current_url()),
            'validation' => \Config\Services::validation(),
            'cart'             => \Config\Services::cart(),

        ];

        return view('layout/rakit/v_rakit', $data);
    }

    public function getMobos()
    {
        $socket = $this->request->getPost('socket');
        $data = $this->motherboardModel->getSelect($socket);
        echo json_encode($data);
    }
    public function getProcie()
    {
        $merk = $this->request->getPost('merk');
        $data = $this->procesorModel->getSelect($merk);
        echo json_encode($data);
    }
    public function getRam()
    {
        $jenis_ram = $this->request->getPost('jenis_ram');
        $data = $this->ramModel->getSelect($jenis_ram);
        echo json_encode($data);
    }
    public function getCasing()
    {
        $faktor_bentuk = $this->request->getPost('faktor_bentuk');
        $data = $this->casingModel->getSelect($faktor_bentuk);
        echo json_encode($data);
    }
    //--------------------------------------------------------------------

}
