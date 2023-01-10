@extends('layouts.app')

@section('content')
    <div style="margin-top: 100px">
        <a href="/profile/{{ auth()->user()->username }}">Profile</a>

        <form action="/logout" method="post">
            @csrf
            <button type="submit">Log Out</button>
        </form>
    </div>
