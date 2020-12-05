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
use \App\Models\RatingModel;

class Home extends BaseController
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
	protected $ratingModel;

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
		$this->ratingModel = new RatingModel();
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
		if (session()->get('level') == 'Guest') {
			return redirect()->to('/');
		}
		$data = [
			'title'         => 'SpaceCom-Dashboard',
			'memory' 		=> $this->memoriModel->shopMemori(),
			'ram'           => $this->ramModel->paginate(5),
			'casing'        => $this->casingModel->paginate(5),
			'motherboard'   => $this->motherboardModel->paginate(5),
			'procesor'      => $this->procesorModel->paginate(5),
			'pendingin'     => $this->pendinginModel->paginate(5),
			'psu'           => $this->psuModel->paginate(5),
			'vga'           => $this->vgaModel->paginate(5),
			'rating'		=> $this->ratingModel->paginate(5),
			'validation' => \Config\Services::validation(),
		];

		return view('layout/front/Home', $data);
	}

	//--------------------------------------------------------------------

}
