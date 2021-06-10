@extends('layouts.app')

@section('content')
    <h3>All Decks</h3>
    <ul>
        @foreach($decks as $deck)
            <li>
                <a href="{{ route('decks.show', ['deck' => $deck->id]) }}">{{$deck->name}}--</a>
                <a href="{{ route('decks.edit', ['deck' => $deck->id]) }}">Edit / </a>
                <a href="{{ route('decks.destroy', ['deck' => $deck->id]) }}">Delete</a>
            </li>
        @endforeach
    </ul>
@endsection