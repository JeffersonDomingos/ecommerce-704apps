<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart', []);

        // Carregar os produtos associados aos itens do carrinho
        $productIds = array_keys($cartItems);
        $products = Products::whereIn('id', $productIds)->get();

        // Associar produtos aos itens do carrinho
        $cartData = [];
        foreach ($products as $product) {
            if (isset($cartItems[$product->id])) {
                $cartData[] = [
                    'product' => $product,
                    'quantity' => $cartItems[$product->id]['quantity'],
                ];
            }
        }

        return view('cart-page', compact('cartData'));
    }

    public function addToCart(Request $request, $productId)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += 1;
        } else {
            $product = Products::find($productId);
            if ($product) {
                $cart[$productId] = [
                    'quantity' => 1,
                    'price' => $product->price,
                    'name' => $product->name,
                    'image' => $product->image
                ];
            }
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function increaseQuantity($productId)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += 1;
        }
        session()->put('cart', $cart);

        return redirect()->route('cart.index');

       
    }

    public function decreaseQuantity($productId)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$productId]) && $cart[$productId]['quantity'] > 1) {
            $cart[$productId]['quantity'] -= 1;
        } elseif (isset($cart[$productId]) && $cart[$productId]['quantity'] == 1) {
            unset($cart[$productId]);
        }
        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function checkout(Request $request)
    {
        $cartItems = session()->get('cart', []);

        if (!$cartItems) {
            return redirect()->route('cart.index')->with('error', 'Seu carrinho está vazio.');
        }

        foreach ($cartItems as $productId => $details) {
            Cart::create([
                'product_id' => $productId,
                'quantity' => $details['quantity'],
                'price' => $details['price'],
                'name' => $details['name'],
                'image' => $details['image']
            ]);
        }

        session()->forget('cart');

        return redirect()->route('cart.index')->with('success', 'Compra finalizada com sucesso!');
    }
}
