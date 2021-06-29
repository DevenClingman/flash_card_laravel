@extends('layouts.app')

@section('content')
<div class="container" style="padding:5%;">
   <form method="post" action="{{ route('decks.update', [ 'deck' => $deck->id ]) }}">
      <div class="form-group" style="background-color:gray; padding:5%;">
         @csrf
         <input class="form-control" name="name" type="text" value="{{old('name') == null ? $deck->name : old('name')}} ">
         @error('name')
            <span class="text-info">{{ $message }}</span>
         @enderror
         <br><br>
         <button class="btn btn-dark btn-block" type="submit">Submit</button>            
      </div>
   </form>
</div>
   
@endsection