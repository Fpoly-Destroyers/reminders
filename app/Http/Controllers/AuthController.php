<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }

    public function postLogin() {

    }

    public function register()
    {
        return view('pages.register');
    }

    public function postRegister() {
        
    }

    public function logout() {
        
    }
}
