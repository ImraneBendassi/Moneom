<?php

use Illuminate\Support\Facades\Route;

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

