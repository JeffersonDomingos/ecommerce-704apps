<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return view('admin.produtos', \compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-products');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { {
            $request->validate([
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
                'vlwidth' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
                'vlheigth' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
                'vllength' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
                'vlweigth' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            ]);


            Products::create($request->all());

            return redirect()->route('produtos.index')
                ->with('success', 'Produto cadastrado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
            $product = Products::findOrFail($id);
            return view('admin.update-products', \compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        
        $product = Products::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('produtos.index')
                         ->with('success', 'Produto atualizado com sucesso.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $product = Products::findOrFail($id);
        $product->delete();

        return redirect()->route('produtos.index')
                         ->with('success', 'Produto deletado com sucesso.');
    }
}
