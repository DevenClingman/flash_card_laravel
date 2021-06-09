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

Route::resource('decks', DecksController::class);

Route::resource('cards', CardsController::class)->except([
    'create',
    'store'
]);

Route::get('/decks/{deck_id}/cards', [CardsController::class, 'create'])->name('cards.create');
Route::post('/decks/{deck_id}/cards', [CardsController::class, 'store'])->name('cards.store');



