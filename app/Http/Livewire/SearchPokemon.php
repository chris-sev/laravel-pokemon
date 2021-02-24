<?php

namespace App\Http\Livewire;

use App\Models\Pokemon;
use Livewire\Component;

class SearchPokemon extends Component
{
    public $query = '';

    public function render()
    {
        $allPokemon = Pokemon::where('name', 'like', '%'.$this->query.'%')->get();
        return view('livewire.search-pokemon', [
            'allPokemon' => $allPokemon
        ]);
    }
}
