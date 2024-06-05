<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductListing extends Component
{
    public $categories;
    public $activeCategory;
    public $products;

    public function mount()
    {
        $this->categories = Category::all();
        $this->activeCategory = $this->categories->first()->id;
        $this->loadProducts();
    }

    public function loadProducts()
    {
        $this->products = Product::where('category_id', $this->activeCategory)->get();
    }

    public function addToCart($productId){

        $product = Product::find($productId);
        $product->quantity = 1;
        $user_data = Auth::user();


        if (Auth::check()) {
            $this->dispatch(
                'productAddedToCart',
                [
                    'product' => $product,
                    'user_data' => $user_data
                ]
            );
        } else {
            $this->dispatch('NoAuthAlert');
        }
    }


    
    public function changeCategory($categoryId)
    {
        
        $this->activeCategory = $categoryId;
        $this->loadProducts();
    }

    public function render()
    {
        return view('livewire.product-listing');
    }
}
