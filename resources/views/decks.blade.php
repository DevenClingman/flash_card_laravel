@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>All Decks</h3>
        <div>
            <ul class="list-group">
            @foreach($decks as $deck)
                <li class="list-group-item list-group-item-action">
                    <a href="{{ route('decks.show', ['deck' => $deck->id]) }}">{{$deck->name}}--</a>
                    <a href="{{ route('decks.edit', ['deck' => $deck->id]) }}">Edit / </a>
                    <a href="{{ route('decks.destroy', ['deck' => $deck->id]) }}">Delete</a>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
@endsection
