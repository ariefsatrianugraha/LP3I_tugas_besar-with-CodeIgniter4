<?php namespace App\Models;
use CodeIgniter\Model;

class m_login extends Model
{

    protected $table = 'pengguna';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lengkap','username','password'];

}