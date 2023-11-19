<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductToggle extends Component
{
    public $productId;
    public $product;

    public function mount($productId)
    {
        $this->productId = $productId;
        $this->product = Product::find($this->productId);
    }

    public function togglePublish()
    {
        if ($this->product) {
            $this->product->published = !$this->product->published;
            $this->product->save();
        }
    }

    public function render()
    {
        return view('livewire.product-toggle');
    }


}
