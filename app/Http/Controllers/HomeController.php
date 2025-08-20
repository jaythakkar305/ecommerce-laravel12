<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }


    public function shop()
    {
        return view('shop.index');
    }
    
    public function loginRegister()
    {
        return view('login-register.index');
    }
}
