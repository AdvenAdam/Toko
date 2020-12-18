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
use \App\Models\SliderModel;
use \App\Models\TokoModel;
use \App\Models\MerkModel;
use phpDocumentor\Reflection\Types\Null_;

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
	protected $sliderModel;
	protected $tokoModel;
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
		$this->kasModel = new KasModel();
		$this->ratingModel = new RatingModel();
		$this->sliderModel = new SliderModel();
		$this->tokoModel = new TokoModel();
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

		$data = [
			'title'         => 'SpaceCom-Dashboard',
			'casing'        => $this->casingModel->vShop(5),
			'diskonCasing'	=> $this->casingModel->diskonCasing(),
			'memory' 		=> $this->memoriModel->vShop(5),
			'diskonMemori'	=> $this->memoriModel->diskonMemori(),
			'motherboard'   => $this->motherboardModel->vShop(5),
			'diskonMobo'	=> $this->motherboardModel->diskonMobo(),
			'pendingin'     => $this->pendinginModel->vShop(5),
			'diskonCooler'  => $this->pendinginModel->diskonCooler(),
			'procesor'      => $this->procesorModel->vShop(5),
			'diskonProcie'  => $this->procesorModel->diskonProcie(),
			'psu'           => $this->psuModel->vShop(5),
			'diskonPsu'     => $this->psuModel->diskonPsu(),
			'ram'           => $this->ramModel->vShop(5),
			'diskonRam'     => $this->ramModel->diskonRam(),
			'vga'           => $this->vgaModel->vShop(5),
			'diskonVga'     => $this->vgaModel->diskonVga(),
			'rating'		=> $this->ratingModel->getRating(),
			'slider'		=> $this->sliderModel->getSlider(),
			'toko'			=> $this->tokoModel->getTampiltoko(),
			'merk'			=> $this->merkModel->getMerk(),
			'validation' 	=> \Config\Services::validation(),
			'cart' 			=> \Config\Services::cart(),

		];

		return view('layout/front/Home', $data);
	}
	public function search()
	{
		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$data = ([
				'keyword' => $keyword,
				'title' =>  'SpaceCom-Pencarian',
				'casing' =>  $this->casingModel->search($keyword),
				'motherboard' =>  $this->motherboardModel->search($keyword),
				'memory' =>  $this->memoriModel->search($keyword),
				'ram' =>  $this->ramModel->search($keyword),
				'psu' =>  $this->psuModel->search($keyword),
				'pendingin' =>  $this->pendinginModel->search($keyword),
				'procesor' =>  $this->procesorModel->search($keyword),
				'vga' =>  $this->vgaModel->search($keyword),
				'validation' => \Config\Services::validation(),
			]);
		} else {
			$data = ([
				'keyword' =>  null,
				'title' =>  'SpaceCom-Pencarian',
				'validation' => \Config\Services::validation(),
			]);
		}
		return view('layout/front/Search', $data);
	}

	public function hasilSearch()
	{
	}
	//--------------------------------------------------------------------

}
