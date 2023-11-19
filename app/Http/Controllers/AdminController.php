<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\Component;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch only  unpublished products from admin review
        // $products = Product::where('published', false)->get();

        $products = Product::all();

        return view('admins.index', compact('products'));
    }

    public function publish($id)
    {
        $product = Product::findOrFail($id);
        $product->published = true;
        $product->save();

        return redirect()->back()->with('Success', 'Product published successfully');
    }

    public function unpublish($id)
    {
        $product = Product::findOrFail($id);
        $product->published = false;
        $product->save();

        return redirect()->back()->with('Success', 'Product unpublished successfully');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
