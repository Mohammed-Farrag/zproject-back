<?php

namespace App\Livewire;

use Livewire\Component;

class CountDown extends Component
{

    public $date;
    public function mount($date){
        $this->date = $date;
    }
    public function render()
    {
        return view('livewire.count-down');
    }
}
