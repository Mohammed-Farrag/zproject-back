<?php

namespace App\Livewire;

use App\Models\Review as ModelsReview;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{

    public $rate = 0;
    public $comment = '';
    public $productId;
    public function selectRate($r)
    {
        $this->rate = $r;
    }

    public function save()
    {
        if (Auth::check()) {

            $review = new ModelsReview();

            $review->user_id = auth()->user()->id;
            $review->rating = $this->rate;
            $review->comment = $this->comment;
            $review->product_id = $this->productId;
            
            $review->save();
            
            $review->comment = '';
            $review->rate = 0;

            $this->dispatch('ReviewAdded');

        } else {
            $this->dispatch('NoAuthAlert');
        }
    }


    public function mount($productId)
    {
        $this->productId = $productId;
    }


    public function render()
    {
        return view('livewire.review');
    }
}
