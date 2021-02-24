<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemon')->insert(
            ['id' => 4, 'name' => 'charizard', 'image' => 'https://pokeres.bastionbot.org/images/pokemon/4.png'],
            ['id' => 10, 'name' => 'caterpie', 'image' => 'https://pokeres.bastionbot.org/images/pokemon/10.png'],
            ['id' => 77, 'name' => 'ponyta', 'image' => 'https://pokeres.bastionbot.org/images/pokemon/77.png'],
            ['id' => 108, 'name' => 'lickitung', 'image' => 'https://pokeres.bastionbot.org/images/pokemon/108.png'],
            ['id' => 132, 'name' => 'ditto', 'image' => 'https://pokeres.bastionbot.org/images/pokemon/132.png'],
            ['id' => 133, 'name' => 'eevee', 'image' => 'https://pokeres.bastionbot.org/images/pokemon/133.png'],
        );
    }
}
