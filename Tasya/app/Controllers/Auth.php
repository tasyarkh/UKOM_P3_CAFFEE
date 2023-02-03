<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\Request;
use App\Models\UserModel;

$request = \Config\Services::request();

class Auth extends BaseController
{
    
    protected $userModel;
    public function __construct(){
        $this->userModel = new UserModel(); //meninisialisasikan loginModel dari data user model
    }

    //section login
    public function login()
    {
        $data = [
            'title' => 'Login | Cafsya',
            
        ];
        return view('auth/login', $data);
    }

    //fungsi untuk cek saat login
    public function checkLogin(){
        $username = $this->request->getPost('username');
        $password = sha1($this->request->getPost('password'));

        $row = $this->userModel->check($username, $password);//mengambil parameter method check di UserModel

        if (isset($row['username'], $row['password'])) {
            if (($row['username'] == $username) && ($row['password'] == $password)) {
                if(($row['status'] == "Aktif") && ($row['level'] == "ADMIN")) {
                    session()->set('namaUser', $row['namaUser']);
                    session()->set('username', $row['username']);
                    session()->set('level', $row['level']);
                    session()->setFlashdata('berhasil', 'Selamat Anda Telah Login');
                    return redirect()->to(base_url('admin'));
                } else 
                if (($row['status'] == "Aktif") && ($row['level'] == "MANAGER")) {
                    session()->set('namaUser', $row['namaUser']);
                    session()->set('username', $row['username']);
                    session()->set('level', $row['level']);
                    session()->setFlashdata('berhasil', 'Selamat Anda Berhasil Login');
                    return redirect()->to(base_url('manager'));
                } else 
                if (($row['status'] == "Aktif") && ($row['level'] == "KASIR")) {
                    session()->set('namaUser', $row['namaUser']);
                    session()->set('username', $row['username']);
                    session()->set('level', $row['level']);
                    session()->setFlashdata('berhasil', 'Selamat Anda Berhasil Login');
                    return redirect()->to(base_url('kasir'));
                } else {
                    session()->setFlashdata('tidakAktif', 'Akun anda belum aktif');
                    return redirect()->to(base_url('/'))->withInput();
                }
            }
        } else {
            session()->setFlashdata('gagal', 'Username atau Password salah !');
            return redirect()->to(base_url('/'))->withInput();
        }
    }

    //section register
    public function register(){
        $data = [
            'title' => 'Regist | Cafsya',
            
        ];
        return view('auth/register', $data);
    }

    public function createUser(){
        if(!$this->validate(
            [
                'username' => [
                    'rules' => 'required|is_unique[user.username]',
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'is_unique' => '{field} sudah terdaftar'
                    ]
                ]
            ]
        )) {
            return redirect()->to(base_url('/'))->withInput();
        }

        $data = array(
            'idUser' => $this->request->getVar('idUser'),
            'namaUser' => $this->request->getVar('namaUser'),
            'username' => $this->request->getVar('username'),
            'password' => sha1($this->request->getVar('password')),
            'status' => "Pasif",
        );

        $this->userModel->saveUser($data);
        session()->setFlashdata('userSimpan', 'Register Berhasil');
        return redirect()->to(base_url('/'));
    }


    //section logout
    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}
