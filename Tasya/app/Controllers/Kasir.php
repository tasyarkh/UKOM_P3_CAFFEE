<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class Kasir extends BaseController
{
    

    public function index()
    {
        if(session('level') != 'KASIR'){
            session()->setFlashdata('belum', "Kamu Belum Melakukan Login");
            return redirect()->to(base_url('/'));
        }

        $data = [
            'title' => 'Kasir | Cafsya',
            'validation' => \Config\Services::validation(),
        ];

        return view('kasir/index', $data);
    }

    
}
