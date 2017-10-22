<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function postLogin()
    {
        if (Auth::attempt([
            'email' => request()->email,
            'password' => request()->password,
        ])){
            return redirect(route('index.admin'));
        }else{
            return redirect(route('login'));
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
