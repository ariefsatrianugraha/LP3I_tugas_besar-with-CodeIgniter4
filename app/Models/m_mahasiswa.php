<?php namespace App\Models;
use CodeIgniter\Model;

class m_mahasiswa extends Model
{
    public function get_mahasiswa(){
        return $this->db->table('master_mahasiswa')
        ->join('master_jurusan','master_jurusan.kode_jurusan=master_mahasiswa.kode_jurusan')
        ->get()->getResultArray();
    }

    public function insert_mahasiswa($data){
        return $this->db->table('master_mahasiswa')->insert($data);
    }

    public function get_update_mahasiswa($nim){
        return $this->db->table('master_mahasiswa')->where('nim',$nim)->get()->getRowArray();
    }

    public function update_mahasiswa($data, $nim){
        return $this->db->table('master_mahasiswa')->update($data, array('nim' => $nim));
    }

    public function delete_mahasiswa($nim){
        return $this->db->table('master_mahasiswa')->delete(array('nim' => $nim));
    }
}