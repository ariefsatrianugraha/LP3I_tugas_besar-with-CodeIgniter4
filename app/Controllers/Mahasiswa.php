<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\m_mahasiswa;

class Mahasiswa extends BaseController
{

	protected $mahasiswa;

	public function __construct(){
		helper('form');
		$this->mahasiswa = new m_mahasiswa();
	}

	public function index()
	{
		
        if(session()->get('username') == ''){
			session()->setFlashdata('get','Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}

		$data = [
            'nama' => 'Mahasiswa',
			'judul' => 'Data Mahasiswa',
			'mahasiswa' => $this->mahasiswa->get_mahasiswa(),
			'isi' => 'Mahasiswa/v_mahasiswa'
		];
		echo view('layouts/v_wrapper', $data);
	}

	public function tambah_data()
	{
		
        if(session()->get('username') == ''){
			session()->setFlashdata('get','Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}

		$data = [
			'nama' => 'Mahasiswa',
			'judul' => 'Tambah Data Mahasiswa',
			'isi' => 'Mahasiswa/v_tambah'
		];

		echo view('layouts/v_wrapper',$data);
	}

	public function save()
	{
		$validasi = \Config\Services::validation();

		$gambar = $this->request->getFile('foto');
		$nama_gambar = $gambar->getRandomName();

		$data = [
			'nim' => $this->request->getPost('nim'),
			'nama' => $this->request->getPost('nama'),
			'kode_jurusan' => $this->request->getPost('kode_jurusan'),
			'semester' => $this->request->getPost('semester'),
			'foto' => $nama_gambar
		];

		if($validasi->run($data,'mahasiswa') == false){
			session()->setFlashData('input', $this->request->getPost());
			session()->setFlashData('errors', $validasi->getErrors());
			return redirect()->to(base_url('mahasiswa/tambah_data'));
		}else{
			$gambar->move(ROOTPATH.'public/images', $nama_gambar);
			$this->mahasiswa->insert_mahasiswa($data);
			
			session()->setFlashdata('sukses_tambahData','Data Berhasil Ditambahkan !!');
			return redirect()->to(base_url('mahasiswa'));
		}
	}

	public function get_edit($nim){
		
        if(session()->get('username') == ''){
			session()->setFlashdata('get','Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}

		$data = [
			'nama' => 'Mahasiswa',
			'judul' => 'Edit Data Mahasiswa',
			'mahasiswa' => $this->mahasiswa->get_update_mahasiswa($nim),
			'isi' => 'mahasiswa/v_edit',
		];
		
		echo view('layouts/v_wrapper', $data);
	}

	public function edit($nim){

		$data = [
			'nama' => $this->request->getPost('nama'),
			'kode_jurusan' => $this->request->getPost('kode_jurusan'),
			'semester' => $this->request->getPost('semester'),
			'foto' => $this->request->getFile('foto'),
		];
			$this->mahasiswa->update_mahasiswa($data,$nim);

			session()->setFlashdata('sukses_editData','Data Berhasil Diedit !!');
			return redirect()->to(base_url('mahasiswa'));
	}
	
	public function delete($nim){
		$this->mahasiswa->delete_mahasiswa($nim);
		session()->setFlashdata('sukses_deleteData','Data Berhasil Dihapus !!');
		return redirect()->to(base_url('mahasiswa'));
	}
}