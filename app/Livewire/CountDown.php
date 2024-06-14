<?php

namespace App\Livewire;

use Livewire\Component;

class CountDown extends Component
{

    public $date;
    public $image;
    public $id;
    public function mount($id, $date, $image, )
    {
        $this->id = $id;
        $this->date = $date;
        $this->image = $image;

        $this->dispatch(
            'date',
            [
                'date' => $this->date,
                'id' => $this->id
            ]
        );
    }
    public function render()
    {
        return view('livewire.count-down');
    }
}
