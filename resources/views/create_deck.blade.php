@extends('layouts.app')

@section('content')
   <h1>Create Deck</h1>
   <form method="post" action="{{ route('decks.store') }}">
        @csrf
        <input name="name" type="text" placeholder="Deck Name"></input>
        <br><br>
        <button type="submit">Submit</button>
   </form>
@endsection