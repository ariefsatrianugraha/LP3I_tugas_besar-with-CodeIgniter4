<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	// validasi mahasiswa
	public $mahasiswa = [
		'nim' => 'required|is_unique[master_mahasiswa.nim]|min_length[4]|max_length[10]',
		'nama' => 'required|is_unique[master_mahasiswa.nama]|max_length[50]',
		'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,2000]',
	];

	public $mahasiswa_errors = [
		'nim' => [
			'required' => 'Wajib diisi !! , Nim tidak boleh kosong',
			'is_unique' => 'NIM sudah tersedia',
			'min_length' => 'Isi NIM minimal 4 karakter',
			'max_length' => 'Isi NIM maximal 10 karakter'
		],
		'nama' => [
			'required' => 'Wajib diisi !! , Nama tidak boleh kosong',
			'is_unique' => 'Nama ini sudah tersedia',
			'max_length' => 'Isi nama maximal 50 karakter',
		],
		'foto' => [
			'uploaded' => 'Wajib diisi !! , Foto silahkan upload terlebih dahulu',
		]
	];

	public $register = [
		'nama_lengkap' => 'required|min_length[5]|max_length[100]',
		'username' => 'required|is_unique[pengguna.username]|max_length[10]',
		'password' => 'required|min_length[8]',
	];

	public $register_errors = [
		'nama_lengkap' => [
			'required' => 'Wajib diisi !! , Nama Lengkap tidak boleh kosong',
			'min_length' => 'Isi Nama Lengkap minimal 5 karakter',
			'max_length' => 'Isi Nama Lengkap maximal 100 karakter'
		],
		'username' => [
			'required' => 'Wajib diisi !! , Username tidak boleh kosong',
			'is_unique' => 'Username ini sudah tersedia',
			'max_length' => 'Isi nama maximal 10 karakter',
		],
		'password' => [
			'required' => 'Wajib diisi !! , Password tidak boleh kosong',
			'min_length' => 'Isi password minimal 8 karakter',
		]
	];
}
