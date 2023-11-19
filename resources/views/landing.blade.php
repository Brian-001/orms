@extends('layouts.app')

@section('content')
    <main class="main flex flex-col h-auto -ml-64 md:ml-0  transition-all duration-150 ease-in">
        <div class="main-content flex flex-col p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                @foreach($products as $product)
                    <a href="{{ route('products.show', ['product' => $product->id]) }}" class="w-full mb-4">
                        <div class="pcard bg-white-200 shadow-md rounded h-full">
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
                @endforeach
            </div>
        </div>
    </main>
@endsection

