<?php

use App\Http\Controllers\Controller;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [Controller::class, 'getNewPokemon'])
    ->name('searchPokemon');

Route::get('/savePokemon', [Controller::class, 'savePokemon'])
    ->name('savePokemon');

Route::get('/mypokemons', [Controller::class, 'listcapture'])
    ->name('mypokemons');
