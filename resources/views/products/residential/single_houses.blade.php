@extends('layouts.app')

@section('content')
    <h1 class="font-bold text-2xl text-gray-700">Single Houses</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
        @forelse($singleHousesProducts as $product)
            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="w-full mb-4">
                <div class="pcard bg-white-200 shadow-md rounded h-full">
                    <!-- ... (existing product card code) ... -->
                        <div class="relative w-full pb-[75%]">
                            <img src="{{ asset('storage/' . $product->image_path) }}" alt=""
                                class="absolute top-0 left-0 w-full h-full object-cover object-center rounded-t-md">
                        </div>
                        <div class="p-2 h-1/4">
                            <p class="text-sm">Name: {{$product->name}}</p>
                            <p class="text-sm">Location: {{$product->location}}</p>
                            <p class="text-sm">Size: {{$product->size}}</p>
                            <p class="text-sm">Price: {{$product->price}}</p>
                        </div>
                </div>
            </a>
        @empty
            <div class="px-4 py-6 text-center">
                <p >No Single Houses Posted</p>
            </div>
        @endforelse
    </div>
@endsection
