<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Diplays all the products that have been created and published in landing.blade.php
        $products = Product::where('published', true)->get();

        return view('landing', ['products' => $products]);
    }

    /**
     * Displays created and published products for resort_gardens.blade.php
     * Ensures displayed products are of category=>commercial and type=>resort gardens
     */

    public function resortGardensProducts()
    {
        $products = Product::where('published', true)
        ->where('category', 'Commercial')
        ->where('type', 'Resort Gardens')
        ->get();

        return view('products.commercial.resort_gardens', ['resortGardensProducts' => $products]);
    }

    /**
     * Displays created and published products for business_stalls.blade.php
     * Ensures displayed products are of category=>commercial and type=>business_stalls
     */

    public function businessStallsProducts()
    {
        $products = Product::where('published', true)
        ->where('category', 'Commercial')
        ->where('type', 'Business Stalls')
        ->get();

        return view('products.commercial.business_stalls', ['businessStallsProducts' => $products]);
    }

    /**
     * Displays created and published products for warehouses.blade.php
     * Ensures displayed products are of category=>commercial and type=>warehouses
     */
    public function warehousesProducts()
    {
        $products = Product::where('published', true)
        ->where('category', 'Commercial')
        ->where('type', 'Warehouses')
        ->get();

        return view('products.commercial.warehouses', ['warehousesProducts' => $products]);
    }

    /**
     * Displays created and published products for office_suites.blade.php
     * Ensures displayed products are of category=>commercial and type=>Office Suite
     */
    public function officeSuitesProducts()
    {
        $products = Product::where('published', true)
        ->where('category', 'Commercial')
        ->where('type', 'Office Suite')
        ->get();

        return view('products.commercial.office_suites', ['officeSuitesProducts' => $products]);
    }
    /**
     * Displays created and published products for land.blade.php
     * Ensures displayed products are of category=>commercial and type=>land
     */
    public function landsProducts()
    {
        $products = Product::where('published', true)
        ->where('category', 'Commercial')
        ->where('type', 'Land')
        ->get();

        return view('products.commercial.land', ['landsProducts' => $products]);
    }

     /**
     * Displays created and published products for gated_community.blade.php
     * Ensures displayed products are of category=>residential and type=>gated community
     */
    public function gatedCommunityProducts()
    {
        $products = Product::where('published', true)
        ->where('category', 'Residential')
        ->where('type', 'Gated Community')
        ->get();

        return view('products.residential.gated_community', ['gatedCommunityProducts' => $products]);
    }
    /**
     * Displays created and published products for single_houses.blade.php
     * Ensures displayed products are of category=>residential and type=>Single house
     */
    public function singleHousesProducts()
    {
        $products = Product::where('published', true)
        ->where('category', 'Residential')
        ->where('type', 'Single House')
        ->get();

        return view('products.residential.single_houses', ['singleHousesProducts' => $products]);
    }
    /**
     * Displays created and published products for apartment.blade.php
     * Ensures displayed products are of category=>residential and type=>apartment
     */
    public function apartmentsProducts()
    {
        $products = Product::where('published', true)
        ->where('category', 'Residential')
        ->where('type', 'Apartment')
        ->get();

        return view('products.residential.apartments', ['apartmentsProducts' => $products]);
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
