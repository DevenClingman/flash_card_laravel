@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <ul class="list-group">
            @foreach($decks as $deck)
                <li class="list-group-item list-group-item-action">   
                    <a href="{{ route('decks.show', ['deck' => $deck->id]) }}">
                        <div class="row">
                            <div class="col-md">
                                <a href="{{ route('decks.show', ['deck' => $deck->id]) }}"><h4>{{$deck->name}}</h4></a> 
                            </div>
                            <div class="col-md" style="text-align:right">
                                <a href="{{ route('decks.edit', ['deck' => $deck->id]) }}">Edit / </a>
                                <a href="{{ route('decks.destroy', ['deck' => $deck->id]) }}">Delete</a>
                            </div>
                        </div>
                    </a> 
                </li>
            @endforeach
            </ul>
        </div>
    </div>
@endsection
