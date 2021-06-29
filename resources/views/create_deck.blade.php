@extends('layouts.app')

@section('content')
   <div class="container" style="padding:5%;" >
      <form method="post" action="{{ route('decks.store') }}">
         <div style="background-color:gray; padding:5%;" class="form-group">
            @csrf
            <input class="form-control" name="name" type="text" placeholder="Deck Name">
            @error('name')
               <span class="text-info">{{ $message }}</span>
            @enderror
            <br><br>
            <button class="btn btn-dark btn-block" type="submit">Submit</button>
         </div>
      </form>
   </div>
@endsection
