@extends('layouts.app')

@section('content')
    <h3>All Decks</h3>
    <ul>
        @foreach($decks as $deck)
            <li>{{$deck->name}}</li>
        @endforeach
    </ul>
@endsection