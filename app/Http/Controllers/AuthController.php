<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //* Login
    public function login_view() : View{
        return view("auth.login");
    }
    //* Register
    public function register_view() : View{
        return view("auth.register");
    }
}
