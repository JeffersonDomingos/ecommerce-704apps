<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
            return view('admin.categorias', \compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-categories');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'category_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $data = $request->all();

        if ($request->hasFile('category_image')) {
            $imagePath = $request->file('category_image')->store('categories', 'public');
            $data['category_image'] = $imagePath;
        }

        Category::create($data);

        return redirect()->route('categorias.index')->with('success', 'Categoria cadastrada com sucesso!');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
            $category = Category::findOrFail($id);
            return view('admin.update-categories', \compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $category = Category::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('category_image')) {

            $imagePath = $request->file('category_image')->store('categories', 'public');


            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }


            $data['category_image'] = $imagePath;
        }

        $category->update($data);

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categorias.index')
                         ->with('success', 'Categoria deletada com sucesso.');
    }
}
