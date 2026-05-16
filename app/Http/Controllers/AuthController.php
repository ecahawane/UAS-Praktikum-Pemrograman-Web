<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    // FORM LOGIN
    public function login()
    {
        return view('auth.login');
    }

    // PROSES LOGIN
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([

            'email' => ['required'],
            'password' => ['required'],

        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect('/dashboard');

        }

        return back()->with('error', 'Email atau Password salah');
    }

    // FORM REGISTER
    public function register()
    {
        return view('auth.register');
    }

    // PROSES REGISTER
    public function storeRegister(Request $request)
    {
        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user'

        ]);

        return redirect('/login');
    }

    // LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}