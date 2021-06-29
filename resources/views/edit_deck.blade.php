@extends('layouts.app')

@section('content')
<div class="container" style="padding:5%;">
   <form method="post" action="{{ route('decks.update', [ 'deck' => $deck->id ]) }}">
      <div class="form-group" style="background-color:gray; padding:5%; opacity:0.7;">
         @csrf
         <input class="form-control" name="name" type="text" value="{{ $deck->name }}">
         <br><br>
         <button class="btn btn-dark btn-block" type="submit">Submit</button>            
      </div>
   </form>
</div>
   
@endsection