@extends('layouts.app')

@section('content')
   <div class="container" >
      <h1 style="text-align:center; padding:5%;">Create Deck</h1>
      <form method="post" action="{{ route('decks.store') }}">
         <div class="form-group">
            @csrf
            <input class="form-control" name="name" type="text" placeholder="Deck Name"></input>
            <br><br>
            <button class="btn btn-outline-dark btn-block" type="submit">Submit</button>
         </div>
      </form>
   </div>
@endsection