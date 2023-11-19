<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'size' => 'required|integer',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'location' => 'nullable|string|max:255',
            'category' => 'required',
            'type' => 'required',
            'image_path' => 'required|image'
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('public/images');
            $validatedData['image_path'] = str_replace('public/', '', $imagePath);
        }

        Product::create($validatedData);
        return redirect(route('products.index'))->with('Success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $product = Product::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'size' => 'required|integer',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'location' => 'nullable|string|max:255',
            'category' => 'required',
            'type' => 'required',
            'image_path' => 'required|image'
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('public/images');
            $validatedData['image_path'] = str_replace('public/', '', $imagePath);
        }


        $product->update($validatedData);

        return redirect(route('products.index'))->with('Success', 'Products updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Product::findOrFail($id);
        return redirect(route('products.index'))->with('Success', 'Product deleted successfully');
    }
}
