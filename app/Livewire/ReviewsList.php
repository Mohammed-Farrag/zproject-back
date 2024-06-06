<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;

class ReviewsList extends Component
{

    public $productId;
    public $reviews;

    public function mount($productId){
        $this->productId = $productId;
        $this->reviews = Review::where('product_id', '=' , $productId)->with('user')->get();

      
    }
    public function render()
    {
        return view('livewire.reviews-list');
    }
}
