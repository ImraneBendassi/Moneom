<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



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

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard', function () {
return view('auth.dashboard');
})->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');