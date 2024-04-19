<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/principal', function () {
    return view('principal');
})->name('principal');

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/photos', function () {
    return view('photos');
})->name('photos');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
