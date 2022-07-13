<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'halo'
		];
		return view('index', $data);
	}
}
