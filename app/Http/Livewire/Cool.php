<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cool extends Component
{
    public $name = 'chris';

    public function render()
    {
        return view('livewire.cool');
    }
}
