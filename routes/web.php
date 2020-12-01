<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TypeController;

Route::get('/', [PokemonController::class, 'index']);
Route::get('/creation', [PokemonController::class, 'create']);
Route::post('/store', [PokemonController::class, 'store']);
Route::get('/show', [PokemonController::class, 'show']);
Route::get('/showBtn/{id}', [PokemonController::class, 'showBtn']);
Route::get('/editPokemon/{id}', [PokemonController::class, 'edit']);
Route::post('/editPokemon/{id}', [PokemonController::class, 'update']);
Route::post('/deletePokemon/{id}', [PokemonController::class, 'destroy']);

Route::get('/type', [TypeController::class, 'index']);
Route::get('/typeCreation', [TypeController::class, 'create']);
Route::post('/typeStore', [TypeController::class, 'store']);
Route::get('/typeShow', [TypeController::class, 'show']);
Route::get('/editType/{id}', [TypeController::class, 'edit']);
Route::post('/editType/{id}', [TypeController::class, 'update']);
Route::post('/deleteType/{id}', [TypeController::class, 'destroy']);