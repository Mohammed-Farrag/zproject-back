<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\NewModel;
use Livewire\Component;

class NewListing extends Component
{

    public $categories;
    public $activeCategory;
    public $news;


    public function mount()
    {
        $this->categories = Category::all();
        $this->activeCategory = $this->categories->first()->id;
        $this->loadNews();
    }

    public function loadNews()
    {
        $this->news = NewModel::where('category_id', $this->activeCategory)->get();
    }


    
    public function changeCategory($categoryId)
    {
        
        $this->activeCategory = $categoryId;
        $this->loadNews();
    }




    public function render()
    {
        return view('livewire.new-listing');
    }
}
