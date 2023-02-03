<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\MenuModel;

class Admin extends BaseController
{
    protected $userModel;
    public function __construct(){
        $this->userModel = new UserModel();
        $this->menuModel = new MenuModel();
    }



    //menampilkan halaman dashboard
    public function index()
    {
        if(session('level') != 'ADMIN'){
            session()->setFlashdata('belum', 'Kamu Belum Melakukan Login');
            return redirect()->to(base_url('/'));
        }

        $data = [
            'title' => 'Dashboard | Cafsya',
           
        ];
        return view('admin/index', $data);
    }


    //menampilkan halaman pegawai
    public function pegawai(){
        $pegawai = $this->userModel->findAll();
        $data = [
            'title' => 'Data Pegawai | Cafsya',
            'pegawai' => $pegawai,
        ];

        return view('admin/pegawai/pegawai', $data);
    }



    //section CRUD pegawai
    public function tambahPeg(){
        $data = [
            'title' => 'Tambah Pegawai | Cafsya',
            'validation' => \Config\Services::validation(),
        ];

        return view('admin/pegawai/tambahPeg', $data);
    }

    public function ubahPeg(){
        $data = [
            'title' => 'Edit Pegawai | Cafsya',
            'validation' => \Config\Services::validation(),
        ];

        return view('admin/pegawai/editPeg', $data);
    }

    public function createPeg(){
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
            return redirect()->to(base_url('pegawai'))->withInput();
        }

        $data = array(
            'idUser' => $this->request->getVar('idUser'),
            'namaUser' => $this->request->getVar('namaUser'),
            'username' => $this->request->getVar('username'),
            'password' => sha1($this->request->getVar('password')),
            'level' => $this->request->getVar('level'),
            'status' => $this->request->getVar('status'),
        );

        $this->userModel->saveUser($data);
        session()->setFlashdata('userSimpan', 'Register Berhasil');
        return redirect()->to(base_url('pegawai'));
    }

    public function editPeg($idUser){
        
    }

    public function update($idUser)
    {
        helper(['form', 'url']);

        $validation = $this->validate([
            'namaUser' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama User'
                ]
            ],
        ]);

        if(!$validation) {

            //model initialize
            $userModel = new UserModel();

            //render view with error validation message
            return view('pegawai', [
                'edit' => $userModel->find($idUser),
                'validation' => $this->validator
            ]);

        } else {

            //model initialize
            $userModel = new UserModel();
            
            //insert data into database
            $userModel->update($idUser, [
                'idUser'   => $this->request->getPost('idUser'),
                'namaUser' => $this->request->getPost('namaUser'),
                'username' => $this->request->getPost('username'),
                'password' => sha1($this->request->getVar('password')),
                'level' => $this->request->getPost('level'),
                'status' => $this->request->getPost('status')
            ]);

            //flash message
            session()->setFlashdata('userEdit', 'User Berhasil Diupdate');

            return redirect()->to(base_url('pegawai'));
                      }
        }

    //menampilkan halaman meja
    public function meja(){
        $data = [
            'title' => 'Meja | Cafsya'
        ];

        return view('admin/meja/meja', $data);
    }

    

    //menampilkan halaman menu
    public function menu(){
        $menu = $this->menuModel->findAll();
        $data = [
            'title' => 'Menu | Cafsya',
            'menu' => $menu
        ];

        return view('admin/menu/menu', $data);
    }
}
