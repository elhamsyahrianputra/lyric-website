<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login()
    {
        return view('auth.login', [
            'title' => 'Login | My Project',
        ]);
    }

    function signup()
    {
        return view('auth.signup', [
            'title' => 'Sign Up | My Project',
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:4|max:255|unique:users',
            'email' => ['required', 'unique:users'],
            'password' => 'required|min:8|max:255',
            'birthday' => 'required',
        ]);

        if ($request->file('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('user-avatar');
        }

        if ($request->file('cover')) {
            $data['cover'] = $request->file('cover')->store('user-cover');
        }

        $data['username'] = Str::lower($data['username']);
        $data['email'] = Str::lower($data['email']);
        $data['name'] = Str::title($data['name']);
        $data['password'] = hash::make($data['password']);

        User::create($data);

        return redirect('/');
    }

    function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'error' => 'Incorrect username or password',
        ])->onlyInput('error');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
