<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cool extends Component
{
    public $message = 'super cool';

    public function render()
    {
        return view('livewire.cool');
    }
}
