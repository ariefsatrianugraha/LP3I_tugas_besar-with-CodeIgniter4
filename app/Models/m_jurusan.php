<?php namespace App\Models;
use CodeIgniter\Model;

class m_jurusan extends Model
{
    public function get_jurusan(){
        return $this->db->table('master_jurusan')
        ->get()->getResultArray();
    }
}