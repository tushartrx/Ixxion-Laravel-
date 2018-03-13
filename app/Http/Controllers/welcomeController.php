<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public  function index(){
        //return view('admin.login.login');
        return view('auth.login');
    }
    public  function register(){
        //return view('admin.login.register');
    }
}
