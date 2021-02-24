<?php

namespace App\Http\Livewire;

use App\Models\Pokemon;
use Livewire\Component;

class Search extends Component
{
    public $query = 'charizard';

    public function render()
    {
        $allPokemon = Pokemon::whereName($this->query)->get();
        return view('livewire.search', ['allPokemon' => $allPokemon]);
    }
}
