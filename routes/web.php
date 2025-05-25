<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginQueryController;
use App\Http\Controllers\ProfileController;

Route::post('/profile/image/update', [ProfileController::class, 'updateProfileImage'])->name('profile.image.update');
Route::get('/login', [LoginQueryController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginQueryController::class, 'login']);
Route::get('/register', [LoginQueryController::class, 'showRegister']);
Route::post('/register', [LoginQueryController::class, 'register']);
Route::post('/logout', [LoginQueryController::class, 'logout']);
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

Route::get('/feedback', function () {
    return view('feedback');
})->middleware('auth');

Route::get('/map', function () {
    return view('map');
})->middleware('auth');

Route::get('/settings', function () {
    return view('settings.settings');
})->name('settings');

Route::get('/settings/editprofile', function () {
    return view('settings.editprofile');
});

Route::get('/settings/feedback', function () {
    return view('settings.feedback');
})->name('feedback');

Route::get('/', [\App\Http\Controllers\LandingController::class, 'index']);

require __DIR__.'/auth.php';
