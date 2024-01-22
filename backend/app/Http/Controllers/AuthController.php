<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        User::create($request->except('_token'));
        return redirect()->route('auth.index');
    }
    public function consult(Request $request)
    {
        $user = User::where('email', $request->email)->get();
        if ($user->password == Hash::make($request->password)) {
            return redirect()->route('home');
        }
        return redirect()->back();
    }
}
