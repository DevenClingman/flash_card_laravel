@extends('layouts.app')

@section('content')
    <ul>
        @foreach($decks as $deck)
            <li>{{$deck->name}}</li>
        @endforeach
    </ul>

    <form>
        <p>Deck Name</p>
        <input type="text">
        <p>user_id</p>
        <input type="text">
        <br><br>
        <a href="decks/create">Submit</a>
    </form>
@endsection