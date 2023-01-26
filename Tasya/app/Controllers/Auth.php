<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function login()
    {
        $data = [
            'title' => 'Login | Cafsya',
            
        ];
        return view('auth/login', $data);
    }

    public function register(){
        $data = [
            'title' => 'Regist | Cafsya',
            
        ];
        return view('auth/register', $data);
    }
}
