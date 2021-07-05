@extends('layouts.app')

@section('content')
    <div class="container" style="padding:5%;">
        <form method="post" action="{{ route('cards.update', ['card'=> $card_id]) }}">
            <div class="form-group" style="background-color:gray; padding:5%;">
                @csrf
                <textarea class="form-control" name="question" type="text">{{ $card->question }}</textarea>
                @error('question')
                    <span class="text-info">{{$message}}</span>
                @enderror
                <br><br>
                <textarea class="form-control" name="answer" type="text">{{ $card->answer }}</textarea>
                @error('answer')
                    <span class="text-info">{{$message}}</span>
                @enderror
                <br><br>
                <button class="btn btn-dark btn-block" type="submit">Submit</button>
            </div>
       </form>
    </div>
@endsection