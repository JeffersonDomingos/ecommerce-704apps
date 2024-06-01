<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Category;


use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $products = Products::all();

        $categories = Category::all();

        return view('welcome', \compact('products', 'categories'));
    }

    public function listProductsPages()
    {
        $products = Products::all();

        return view('products-page', \compact('products'));
    }

    public function listCategoryPages()
    {
        $categories = Category::all();

        return view('category-page', \compact('categories'));
    }
}
