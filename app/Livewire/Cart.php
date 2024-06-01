<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{

    public $cart ;
    public $listeners = ['loadCart'];


    public function loadCart($cart){
        dd($this->cart);

        $this->cart = $cart;

    }

    public function render()
    {
    
        return view('livewire.cart');
    }
}
