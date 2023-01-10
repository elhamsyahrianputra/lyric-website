<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::where('username', auth()->user()->username)->first();
        return view('home.index', [
            'title' => $user->name . ' | My Project',
            'user' => $user,
        ]);
    }

    public function user($username)
    {
        // return User::where('username', $username)->get();
        $user = User::where('username', $username)->first();

        return view('home.user', [
            'title' => $user->name . ' | My Project',
            'user' => $user,
        ]);
    }
}
