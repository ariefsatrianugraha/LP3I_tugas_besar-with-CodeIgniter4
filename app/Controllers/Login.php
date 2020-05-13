<?php namespace App\Controllers;
use App\Models\m_login;

class Login extends BaseController
{

    protected $login;

    public function __construct(){
        helper('form');
        $this->login = new m_login();
    }

    public function index(){
        echo view('login/v_login');
    }

    public function register(){
        echo view('login/v_register');
    }

    public function submit_register(){

        $validasi = \Config\Services::validation();

		if($validasi->run($_POST,'register') == false){
			session()->setFlashData('input', $this->request->getPost());
			session()->setFlashData('errors', $validasi->getErrors());
			return redirect()->to(base_url('login/register'));
		}else{
            $_POST['password'] = password_hash($_POST['password'],PASSWORD_BCRYPT);
            $this->login->insert($_POST);
			session()->setFlashdata('sukses_register','Berhasil Register !!');
			return redirect()->to(base_url('login'));
		}

    }

    public function submit_login(){

        if($this->masuk($_POST['username'],$_POST['password']) != NULL){
            $session = session();
            $session->set('username',$_POST['username']);
            return redirect()->to(base_url('home'));
        }else{
            session()->setFlashdata('gagal_login','Gagal Login');
            return view('login/v_login');
        }

    }

    private function masuk($username,$password){
        $login = $this->login->where('username',$username)->first();
        if($login != NULL){
            if(password_verify($password,$login['password'])){
                return $login;
            }
        }
    }

    public function logout(){
        $session = session();
        $session->remove('username');
        return redirect()->to(base_url('login'));
    }

}