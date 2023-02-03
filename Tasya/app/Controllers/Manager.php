<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MenuModel;
use App\Models\UserModel;
use CodeIgniter\Validation\Validation;

class Manager extends BaseController
{
    protected $menuModel;
    protected $userModel;
    public function __construct(){
        $this->menuModel = new MenuModel();
        $this->userModel = new UserModel();
    }


    //section dashboard
    public function index()
    {
        if(session('level') != 'MANAGER'){
            session()->setFlashdata('belum', "Kamu Belum Melakukan Login");
            return redirect()->to(base_url('/'));
        }
        
        $data = [
            'title' => 'Dashboard | Cafsya'
        ];

        return view('manager/index', $data);
    }


    //section menu
    public function menu(){
        $menu = $this->menuModel->findAll();
        $data = [

            'title' => 'Data Menu | Cafsya',
            'menu' => $menu
        ];

        return view('manager/menu/menu', $data);
    }


    //section tambah menu
    public function tambahMenu(){
        $data = [
            'title' => 'Tambah Menu | Cafsya'
        ];

        return view('manager/menu/tambahMenu', $data);
    }

    public function createMenu(){
        if(!$this->validate(
            [
                'namaMenu' => [
                    'rules' => 'required|is_unique[menu.namaMenu]',
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'is_unique' => '{field} sudah terdaftar'
                    ]
                ],
                'gambar' => [
                    'rules' => 'uploaded[gambar]|max_size[gambar,1024]|ext_in[gambar,png,jpg,gif]',
                    'errors' => [
                        'max_size' => 'Ukuran Gambar Terlalu Besar, Max 1024Kb',
                        'ext_in' => 'Format gambar tidak sesuai'
                    ]
                ]  
            ]
        )) {
            return redirect()->to(base_url('menuMan'))->withInput();
        }
        if (!empty($_FILES['gambar']['name'])) {
            // Image upload
            $menu = $this->request->getFile('gambar');
            $pictMenu = str_replace(' ', $menu->getName());
            $menu->move(WRITEPATH . '/public/assets/images/upload/', $pictMenu);
            
        $data = array(
            'idMenu' => $this->request->getVar('idMenu'),
            'namaMenu' => $this->request->getVar('namaMenu'),
            'harga' => $this->request->getVar('harga'),
            'gambar' => $pictMenu,
            'stok' => $this->request->getVar('stok'),
            'status' => $this->request->getVar('status'),
        );

        $this->menuModel->saveMenu($data);
        session()->setFlashdata('userSimpan', 'Register Berhasil');
        return redirect()->to(base_url('menuMan'));
    }
}


    //section transaksi
    public function transaksi(){
        $data = [
            'title' => 'Data Transaksi | Cafsya'
        ];

        return view('manager/transaksi/transaksi', $data);
    }


    //section pegawai
    public function pegawai(){

        $pegawai = $this->userModel->findAll();
        $data = [
            'title' => 'Data Pegawai | Cafsya',
            'pegawai' => $pegawai,
        ];

        return view('manager/pegawai/pegawai', $data);
    }
}
