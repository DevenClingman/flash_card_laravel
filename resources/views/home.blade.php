@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to the Flash Card App!</h1>

        <a href="{{ route('decks.create') }}">Add Deck</a>
        <br><br>
        <a href="{{ route('decks.index') }}">View Decks</a>
    </div>

@endsection