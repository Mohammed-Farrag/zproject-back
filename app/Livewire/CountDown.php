<?php

namespace App\Livewire;

use Livewire\Component;

class CountDown extends Component
{

    public $date;
    public $image;
    public function mount($date, $image)
    {
        $this->date = $date;
        $this->image = $image;

        $this->dispatch(
            'date',
            [
                'date' => $this->date
            ]
        );
    }
    public function render()
    {
        return view('livewire.count-down');
    }
}
