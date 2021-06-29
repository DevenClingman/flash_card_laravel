@extends('layouts.app')

@section('content')

   <div class="container" style="padding: 5%;">
      <form method="post" action="{{ route('cards.store', ['deck_id'=> $deck_id]) }}">
         <div style="background-color:gray; padding:5%;" class="form-group">
            @csrf
            <textarea class="form-control" name="question" type="text" placeholder="Card Question"></textarea>
            @error('question')
               <span class="text-info">{{$message}}</span>
            @enderror
            <br><br>
            <textarea class="form-control" name="answer" type="text" placeholder="Card Answer"></textarea>
            @error('answer')
               <span class="text-info">{{$message}}</span>
            @enderror
            <br><br>
            <button class="btn btn-dark btn-block" type="submit">Submit</button>
         </div>
      </form>
   </div>
@endsection
