<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::view('/', 'welcome');

// the laravel way
Route::resource('pokemon', PokemonController::class);

// the javascript way
Route::view('javascript', 'pokemon-javascript');

// the livewire way
// searching pokemon
// adding cuteness
Route::view('livewire', 'pokemon-livewire');
