@extends('layouts.app')

@section('content')
<h1>Edit {{ $deck->name }} Deck</h1>
   <form method="post" action="{{ route('decks.update', [ 'deck' => $deck->id ]) }}">
        @csrf
        <input name="name" type="text" value="{{ $deck->name }}"></input>
        <br><br>
        <button type="submit">Submit</button>
   </form>
@endsection