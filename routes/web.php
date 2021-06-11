<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DecksController;
use App\Http\Controllers\CardsController;

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

Route::get('/', function () {
    return view('home');
});

Route::resource('decks', DecksController::class)->except([
    'update',
    'destroy'
]);

Route::resource('cards', CardsController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);

//decks

Route::get('/decks/{deck_id}/cards', [CardsController::class, 'create'])->name('cards.create');
Route::post('/decks/{deck_id}/cards', [CardsController::class, 'store'])->name('cards.store');
Route::post('/decks/{deck}', [DecksController::class, 'update'])->name('decks.update');
Route::get('/decks/delete/{deck}', [DecksController::class, 'destroy'])->name('decks.destroy');

//cards

Route::post('/cards/{card}', [CardsController::class, 'update'])->name('cards.update');
Route::get('/cards/delete/{card}', [CardsController::class, 'destroy'])->name('cards.destroy');



