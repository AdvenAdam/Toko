<?php

namespace App\Controllers;

use \App\Models\MemoriModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;

class Memori extends BaseController
{
    protected $memoriModel;
    public function __construct()
    {
        $this->memoriModel = new MemoriModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Daftar Memori Penyimpanan',
                'memori' => $this->memoriModel->getMemori()
            ];


        // $komikModel = new \App\Models\KomikModel();

        return view('memori/index', $data);
    }
}
