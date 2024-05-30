<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('admin.app');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categorias', function () {
    return view('admin.categorias');
});

Route::get('/usuarios', function () {
    return view('admin.usuarios');
});

Route::get('/produtos', function () {
    return view('admin.produtos');
});
