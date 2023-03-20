<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup() {
        return view('auth.signup');
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'username' => ['required', 'min:4', 'max:255', 'unique:users'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required', 'min:8', 'max:255'],
        ]);

        $validateData['avatar'] = 'default/avatar_default.jpg';
        $validateData['cover'] = 'default/cover_default.jpg';
        $validateData['username'] = Str::lower($validateData['username']);
        $validateData['email'] = Str::lower($validateData['email']);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/login');
    }

    public function login() {
        return view('auth.login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'username' => [''],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'failedLogin' => 'The provided credentials do not match our records.',
        ])->onlyInput('failedLogin', 'username');
    }
}
