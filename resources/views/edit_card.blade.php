@extends('layouts.app')

@section('content')
    <h1>Welcome to the Edit Card Page!</h1>

    <form method="post" action="{{ route('cards.update', ['card'=> $card_id]) }}">
        @csrf
        <textarea name="question" type="text">{{ $card->question }}</textarea>
        <br><br>
        <textarea name="answer" type="text">{{ $card->answer }}</textarea>
        <br><br>
        <button type="submit">Submit</button>
   </form>

@endsection