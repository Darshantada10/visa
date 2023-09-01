<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view("FrontEnd.Login.index");
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials))
        {
            return redirect('partner/dashboard');
            
        }
       
        return redirect('login')->with('status','login details are not valid'); 
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('');
    }
}
