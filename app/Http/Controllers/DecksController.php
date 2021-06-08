<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use App\Models\User;
use Illuminate\Http\Request;

class DecksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $decks = Deck::all();
        return view('decks', compact('decks'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::findOrFail(1);

        $deck = new Deck;
        $deck->name = "Science";
        $deck->user_id = 1;
        $user->deck()->save($deck);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function show(Deck $deck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function edit(Deck $deck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deck $deck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deck $deck)
    {
        //
    }
}
