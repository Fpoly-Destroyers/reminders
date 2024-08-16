<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if(!Auth::attempt($credentials)) {
            return redirect()->back()->with('error', 'Email or password is incorrect');
        }
        return redirect()->route('reminders.index')->with('success', 'You are logged in');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function postRegister()
    {
    }

    public function logout()
    {
    }
}
