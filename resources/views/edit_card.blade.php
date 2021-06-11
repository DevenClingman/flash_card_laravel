@extends('layouts.app')

@section('content')
    <h1>Welcome to the Edit Card Page!</h1>

    <form method="post" action="{{ route('cards.update', ['card'=> $card_id]) }}">
        @csrf
        <input name="question" type="text" value="{{ $card->question }}"></input>
        <br><br>
        <input name="answer" type="text" value="{{ $card->answer }}"></input>
        <br><br>
        <button type="submit">Submit</button>
   </form>

@endsection