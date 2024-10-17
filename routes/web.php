<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



//Route for showing the data
Route::get('/players', [PlayerController::class, 'index'])->name('player.index');

//Route for getting data 
Route::get('/players/create', [PlayerController::class, 'create'])->name(('players.create'));

//Route for storing data to database
Route::post('/player', [PlayerController::class, 'store' ])->name('players.store');

//Route for editing the data
Route::get('/players/{player}/edit', [PlayerController::class, 'edit'])->name('players.edit');

//Route for updating the data
Route::put('/players/{player}/update', [PlayerController::class, 'update'])->name('players.update');

//Route for deleting data
Route::delete('/players/{player}/destroy', [PlayerController::class, 'destroy'])->name('players.delete');