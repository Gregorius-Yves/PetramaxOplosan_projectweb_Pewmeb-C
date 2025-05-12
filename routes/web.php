<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/laravel/login', '/login')->name('login');
Route::redirect('/laravel/register', '/register')->name('register');

Route::get('/', function () {
    return view('landing');
});

Route::get('/explore', function () {
    return view('explore');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/', [\App\Http\Controllers\LandingController::class, 'index']);

require __DIR__.'/auth.php';
