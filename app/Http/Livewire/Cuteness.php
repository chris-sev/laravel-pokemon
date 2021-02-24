<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cuteness extends Component
{
    public $cuteness;

    public function render()
    {
        return view('livewire.cuteness');
    }
}
