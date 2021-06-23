@extends('layouts.app')

<style>
.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>

@section('content')
<div class="container" style="text-align:center; margin:auto;">
    <h1 style="color:black;"> {{$deck->name}} Deck</h1>
    <a href="{{ route('cards.create', ['deck_id' => $deck->id]) }}" class="btn btn-dark">Add Card</a>
    <a href="#" class="btn btn-dark">Let's Study</a>
</div>
<br>
    @if($deck->cards->count() > 0)
        @foreach($deck->cards as $card)  
            <livewire:card :card="$card">
        @endforeach
    @endif
@endsection

