<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('welcome'); // ou ta vue d'accueil
});

Route::get('/services', function () {
    return view('services'); // resources/views/services.blade.php
});

Route::get('/contact', function () {
    return view('contact'); // resources/views/contact.blade.php
});

Route::get('/ressource', function () {
    return view('ressource'); // resources/views/contact.blade.php
});

Route::get('/login', function () {
    return view('login'); // on met ta page dans resources/views/login.blade.php
});

Route::post('/login', function(Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect('/dashboard');
    }

    return back()->withErrors([
        'email' => 'Les identifiants sont incorrects.',
    ]);
});

Route::get('/dashboard', function() {
    if (!Auth::check()) {
        return redirect('/login');
    }
    return "Vous êtes connecté, bienvenue " . Auth::user()->name;
});
