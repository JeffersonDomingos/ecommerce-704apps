<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Category;
use App\Utils\Pay704Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StoreController extends Controller
{
   
    public function test704Pay() {

        $paymentDataPix = [
            'amount' => (1 * 100),
            'dueDate'=> Carbon::now()->format('Y-m-d'),
            'customer' => [
                'name' => "Jefferson Domingos",
                'documentNumber' => "61462200354",
                'email' =>  "jefferson@teste.com",
            ],
        ];
        $pay704 = new Pay704Service("34deed9a-8227-46e0-81e2-e46926f53c9f", "rO1428704Car001597635", false);
        $pay704 ->pixPayment($paymentDataPix);
        return view('welcome');
    }
    
    public function index()
    {
        
        $products = Products::latest()->take(5)->get();

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

    public function listProducts()
{
    $products = Products::latest()->take(5)->get();
    return view('index', compact('products'));
}

}
