<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            return redirect()->back()->with('error', 'Email or password is incorrect');
        }

        return redirect()->route('reminders.index')->with([
            'success' => 'Success',
            'message' => 'Login successfully',
        ]);
    }

    public function register()
    {
        return view('pages.register');
    }

    public function postRegister(RegisterRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        if (User::create($data)) {
            return redirect()->route('login')->with('success', 'Account created successfully.');
        }
        return back()->with('error', 'Failed to create account.');
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('success', 'You are logged out');
    }

    public function forgotPassword()
    {
        return view('pages.forgot-password');
    }

    public function postforgotPassword()
    {
    }

    public function changePassword()
    {
        return view('pages.change-password');
    }

    public function postChangePassword(ChangePasswordRequest $request)
    {
        $user = Auth::user();
        $oldPassword = $request->input('old_password');
        $newPassword = $request->input('password');

        if (!Hash::check($oldPassword, $user->password)) {
            return redirect()->back()->with('error', 'Old password is incorrect');
        }

        $user->password = Hash::make($newPassword);
        if (!$user->save()) {
            return redirect()->back()->with('error', 'Failed to change password');
        }

        return redirect()->back()->with('success', 'Change password successfully');
    }
}
