<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
{
    return view('auth.login');
}

public function showRegistrationForm()
{
    return view('auth.register');
}

public function register(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
    ]);

    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->input('password'));
    $user->save();

    Auth::login($user);

    return redirect('/login');
}

public function showForgotPasswordForm()
{
    return view('auth.password');
}


/*login*/
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
    /*home*/
    
    public function main()
    {
   
        return view('home');
    }

}
