@extends('layouts.seller')

@section('content')

    <div class="flex justify-center items-center h-screen">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-md px-4 py-3 bg-white rounded shadow-lg">
            @csrf

            <div class="mb-3">
                <label for="name" class="block text-gray-700">Product Name</label>
                <input type="text" name="name" id="name" class="w-full px-2 py-1 border rounded">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="size" class="block text-gray-700">Size (in square feet)</label>
                <input type="number" name="size" id="size" class="w-full px-2 py-1 border rounded">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price</label>
                <input type="number" name="price" id="price" step="0.01" class="w-full px-2 py-1 border rounded">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4" class="w-full px-2 py-1 border rounded"></textarea>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="location" class="block text-gray-700">Location</label>
                <input type="text" name="location" id="location" class="w-full px-2 py-1 border rounded">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Add fields for Category and Type as select inputs -->
            <div class="mb-4">
                <label for="category" class="block text-gray-700">Category</label>
                <select name="category" id="category" class="w-full px-2 py-1 border rounded">
                    <option value="" class="font-semibold text-sm text-gray-100">..Select Category..</option>
                    <option value="Commercial">Commercial</option>
                    <option value="Residential">Residential</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="type" class="block text-gray-700">Type</label>
                <select name="type" id="type" class="w-full px-2 py-1 border rounded">
                    <!-- This will be populated dynamically based on the selected category -->
                </select>
            </div>

            <div class="mb-4">
                <label for="file" class="block text-gray-700">Upload Image</label>
                <input type="file" name="image_path" id="image_path">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
             </div>

            <div class="mb-4">
                <button type="submit" class="w-full px-4 py-2 bg-gray-800 text-white rounded">Upload Product</button>
            </div>
        </form>
    </div>

    <script>
        const categorySelect = document.getElementById('category');
        const typeSelect = document.getElementById('type');

        categorySelect.addEventListener('change', function () {
            const selectedCategory = categorySelect.value;
            // Clear the existing options
            typeSelect.innerHTML = '';

            // Create new options based on the selected category
            if (selectedCategory === 'Commercial') {
                const commercialTypes = [
                    'Resort Gardens',
                    'Business Stalls',
                    'Warehouses',
                    'Office Suite',
                    'Land',
                ];
                commercialTypes.forEach((type) => {
                    const option = document.createElement('option');
                    option.value = type;
                    option.text = type;
                    typeSelect.appendChild(option);
                });
            } else if (selectedCategory === 'Residential') {
                const residentialTypes = [
                    'Single House',
                    'Gated Community',
                    'Apartment',
                ];
                residentialTypes.forEach((type) => {
                    const option = document.createElement('option');
                    option.value = type;
                    option.text = type;
                    typeSelect.appendChild(option);
                });
            }
        });
    </script>

</body>
</html>

@endsection
