<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
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

    public function postRegister(RegisterRequest $request) {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        if (User::create($data)) {
            return redirect()->route('login')->with('success', 'Account created successfully.');
        }
        return back()->with('error', 'Failed to create account.');
    }

    public function logout() {
        
    }
}
