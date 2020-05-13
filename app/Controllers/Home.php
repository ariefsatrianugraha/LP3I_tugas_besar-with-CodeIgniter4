<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		if(session()->get('username') == ''){
			session()->setFlashdata('get','Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}

		$data = [
			'nama' => 'home',
			'judul' => 'Selamat Datang',
			'isi' => 'v_home'
		];

		echo view('layouts/v_wrapper', $data);
	}

}
