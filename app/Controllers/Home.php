<?php

namespace App\Controllers;


class Home extends BaseController
{

	public function __construct()
	{
	}

	public function index()
	{

		$data =
			[
				'title' => 'Form Login',
				'validation' => \Config\Services::validation()
			];
		return view('pages/login', $data);
	}

	//--------------------------------------------------------------------

}
