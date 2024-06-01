<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TypeCategoryController;
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

Route::get('/products-page', [StoreController::class, 'listProductsPages'])->name('store.listProductsPages');

Route::get('/categories-page', [StoreController::class, 'listCategoryPages'])->name('store.listCategoryPages');

Route::get('/cart-page', function () {
    return view('cart-page');
});

Route::get('/', [StoreController::class, 'index'])->name('store.index');


