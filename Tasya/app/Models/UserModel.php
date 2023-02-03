<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'idUser';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["namaUser", "username", "password", "level", "status"];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

     //method cek untuk proses login
     public function check($username, $password){
        return $this->db->table('user')->where(
            array(
                'username' => $username,
                'password' => $password,
            )
        )
        ->get()->getRowArray();
    }

    //membuat user untuk register
    public function saveUser($data){
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function getUser($idUser = false){
        if($idUser === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['idUser' => $idUser]);
        }
    }

    //update pegawai
    public function updatePeg($data, $idUser)
    {
        $query = $this->db->table($this->table)->update($data, array('idUser' => $idUser));
        return $query;
    }

    //query builder untuk menampilkan jumlah user
    public function countUser(){
        $builder = $this->db->table('user');
        $query = $builder->countAllResults();
        return $query;
    }

}
