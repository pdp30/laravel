<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{

    public function showLoginForm()
{
    return view('auth.login');
}

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            return redirect('/home');
        } else {
            return back()->withErrors(['Invalid credentials!']);
        }
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    
}
