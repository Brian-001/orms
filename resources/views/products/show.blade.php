@extends('layouts.app')

@section('content')

<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-4 text-center">Product Details</h1>

        <div class="mb-3">
            <label class="block text-gray-700">Product Name:</label>
            <p class="text-gray-900">{{ $product->name }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Size (in square feet):</label>
            <p class="text-gray-900">{{ $product->size }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Price:</label>
            <p class="text-gray-900">{{ $product->price }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Description:</label>
            <p class="text-gray-900">{{ $product->description }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Location:</label>
            <p class="text-gray-900">{{ $product->location }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Category:</label>
            <p class="text-gray-900">{{ $product->category }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Type:</label>
            <p class="text-gray-900">{{ $product->type }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Image:</label>
            <img src="{{ asset('storage/' . $product->image_path) }}" alt="Product Image" class="w-full">
        </div>

        <div class="mb-4 text-center">
            <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500">Edit Product</a>
        </div>
    </div>
</div>

@endsection
