<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
//use App\Models\User;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }
    public function handleLogin(AuthRequest $request)
    {
        dd($request->all());
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return redirect()->route('dashboard');
        }
        return redirect()->route('login')->with('error_msg', 'Les informations d\'identification invalides');
    }
}
