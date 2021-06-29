@extends('layouts.app')

@section('content')
    <div class="container" style="padding:5%;">
        <div>
            <ul class="list-group">
            @foreach($decks as $deck)
                <li style="background-color:gray;" class="list-group-item list-group-item-action">   
                    <a href="{{ route('decks.show', ['deck' => $deck->id]) }}">
                        <div class="row">
                            <div class="col-md">
                                <a class="text-white"href="{{ route('decks.show', ['deck' => $deck->id]) }}"><h4>{{$deck->name}}</h4></a> 
                            </div>
                            <div class="col-md" style="text-align:right">
                                <a class="btn btn-info" href="{{ route('decks.edit', ['deck' => $deck->id]) }}">Edit</a>
                                <a class="btn btn-danger" href="{{ route('decks.destroy', ['deck' => $deck->id]) }}">Delete</a>
                            </div>
                        </div>
                    </a> 
                </li>
            @endforeach
            </ul>
        </div>
    </div>
@endsection
