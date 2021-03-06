<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

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
	    return view('create_deck');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required | unique:decks'
        ]);

        $user = User::find(1);
        $deck = new Deck();
        $deck->name = $request->name;
        $deck->slug = Str::slug($deck->name);
        $deck->user_id = $user->id;
        $user->decks()->save($deck);
        $decks = $user->decks;
        return view('decks', compact('decks'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function show(Deck $deck)
    {
        //return $deck->cards->count();
        
        return view('cards', compact('deck'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function edit(Deck $deck)
    {
        return view('edit_deck', compact('deck'));
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
        $validated = $request->validate([
            'name' => ['required', Rule::unique('decks', 'name')->ignore($deck->id)]
        ]);

        $deck->name = $request->name;
        $deck->save();
        $decks = User::find(1)->decks;
        
        return view('decks', compact('decks'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deck $deck)
    {
        $deck->cards()->delete();
        $deck->delete();
        $decks = User::find(1)->decks;
        return view('decks', compact('decks'));
    }
}
