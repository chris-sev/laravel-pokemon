<?php

namespace App\Http\Livewire;

use App\Models\Pokemon;
use Livewire\Component;

class ShowPokemon extends Component
{
    public Pokemon $pokemon;

    public function incrementCuteness() {
        $this->pokemon->increment('cuteness');
    }

    public function render()
    {
        return view('livewire.show-pokemon');
    }
}
