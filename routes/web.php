<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

Route::get('/', [PokemonController::class, 'index']);
Route::get('/creation', [PokemonController::class, 'create']);
Route::post('/store', [PokemonController::class, 'store']);
Route::get('/show', [PokemonController::class, 'show']);
Route::get('/showBtn/{id}', [PokemonController::class, 'showBtn']);
Route::get('/editPokemon/{id}', [PokemonController::class, 'edit']);
Route::post('/editPokemon/{id}', [PokemonController::class, 'update']);
Route::post('/deletePokemon/{id}', [PokemonController::class, 'destroy']);