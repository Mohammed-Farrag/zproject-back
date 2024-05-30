<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class SingleProduct extends Component
{

    public $productId;
    public $product;
    public $selectedSize;
    public $selectedQuantity = 1;




    public function mount($productId)
    {
        $this->productId = $productId;
        $this->product = Product::find($productId);
        $this->selectedSize = $this->product->size;
    }
    public function selectSize($size)
    {
        $this->selectedSize = $size;
    }
    public function selectQuantity($quantity)
    {
        $this->selectedQuantity = $quantity;
    }

    public function inc(){
        $this->selectedQuantity++;
    }

    public function dec(){
        if($this->selectedQuantity  > 1 ){

            $this->selectedQuantity--;
        }else {
            $this->selectedQuantity = 1;
        }
    }




    public function addToCart()
    {
        
        $product = [
            'id' => $this->product->id,
            'title' => $this->product->title,
            'description' => $this->product->description,
            'price' => $this->product->price,
            'size' => $this->selectedSize,
            'quantity' => $this->selectedQuantity,
            'category_id' => $this->product->category_id,
            'image' => $this->product->image
        ];

        $this->dispatch('productAddedToCart', $product);
    }

    public function render()
    {
        return view('livewire.single-product');
    }
}
