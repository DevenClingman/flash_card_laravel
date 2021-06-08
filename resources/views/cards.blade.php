@extends('layouts.app')

@section('content')
<h1> {{$deck->name}} Deck</h1>
<br>
<a href="{{ route('cards.create')}}">Add Card</a>
    @foreach($deck->cards() as $card)
        <ul>
            <li>
                <a href="{{ route('cards.show', [card => $card->id]) }}">$card->name</a>
            </li>
        </ul>
    @endforeach
@endsection