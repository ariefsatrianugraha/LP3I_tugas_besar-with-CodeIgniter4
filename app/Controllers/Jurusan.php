<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\m_jurusan;

class Jurusan extends BaseController
{
    protected $jurusan;

    public function __construct(){
        helper('form');
        $this->jurusan = new m_jurusan();
    }


    public function index(){

        
        if(session()->get('username') == ''){
            session()->setFlashdata('get','Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}

        $data = [
            'nama' => 'Jurusan',
            'judul' => "Data Jurusan",
            'jurusan' => $this->jurusan->get_jurusan(),
            'isi' => "Jurusan/v_jurusan"
        ];
    
        echo view('layouts/v_wrapper',$data);
    }

}