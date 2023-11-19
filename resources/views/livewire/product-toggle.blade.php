<button class="bg-blue-500 text-white hover:text-black hover:font-semibold px-4 rounded-md py-2"
    wire:click="togglePublish">
    @if ($product && $product->published)
        Unpublish
    @else
        Publish
    @endif
</button>




