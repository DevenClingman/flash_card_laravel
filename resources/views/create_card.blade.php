@extends('layouts.app')

@section('content')
<h1>Create Card</h1>
   <form method="post" action="{{ route('cards.store') }}">
        @csrf
        <input name="question" type="text" placeholder="Enter Question"></input>
        <br><br>
        <input name="answer" type="text" placeholder="Enter Answer"></input>
        <br><br>
        <button type="submit">Submit</button>
   </form>
@endsection