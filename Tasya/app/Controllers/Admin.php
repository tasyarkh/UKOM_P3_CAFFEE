<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Cafsya',
            
        ];
        return view('admin/index', $data);
    }

    public function pegawai(){
        $data = [
            'title' => 'Data Pegawai | Cafsya'
        ];

        return view('admin/pegawai/pegawai', $data);
    }

    public function tambahPeg(){
        $data = [
            'title' => 'Tambah Pegawai | Cafsya'
        ];

        return view('admin/pegawai/tambahPeg', $data);
    }
}
