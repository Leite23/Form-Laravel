<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
public function index(){
    return view('auth.login');
    }
public function create(){
    return view('auth.register');
}
}
