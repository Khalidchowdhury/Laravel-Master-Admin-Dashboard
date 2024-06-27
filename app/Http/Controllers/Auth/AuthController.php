<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    // Register Controller
    Public function showRegisterPage(){
        return view('Dashboard.Auth.register');
    }

    // Login Controller
    Public function showLoginPage(){
        return view('Dashboard.Auth.login');
    }

    // Forget Password Controller
    Public function showForgetPage(){
        return view('Dashboard.Auth.forget-password');
    }



}
