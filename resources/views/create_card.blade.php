@extends('layouts.app')

@section('content')
<h1>Create Card</h1>
   <form method="post" action="{{ route('cards.store', ['deck_id'=> $deck_id]) }}">
        @csrf
        <textarea name="question" type="text" placeholder="Enter Question"></textarea>
        <br><br>
        <textarea name="answer" type="text" placeholder="Enter Answer"></textarea>
        <br><br>
        <button type="submit">Submit</button>
   </form>
@endsection