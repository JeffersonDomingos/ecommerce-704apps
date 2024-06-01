<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/home', function () {
    return view('admin.app');
});
Auth::routes();

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/admin/categorias', CategoryController::class);

Route::resource('/admin/produtos', ProductsController::class);

Route::resource('/admin/usuarios', UserController::class);

