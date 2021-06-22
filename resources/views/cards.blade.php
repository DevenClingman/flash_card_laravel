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
<div class="container" style="text-align:center;">
    <h1 style="color:black;"> {{$deck->name}} Deck</h1>
    <a href="{{ route('cards.create', ['deck_id' => $deck->id]) }}" class="btn btn-dark">Add Card</a>
</div>



<br>
    
    @if($deck->cards->count() > 0)
        @foreach($deck->cards as $card)  
            <div class="container" style="text-align:center">
                    <ul>
                        <li>
                            <div id="card" class="card" style="width: 25rem; margin:auto; height:10rem" onclick="switchCard({{$loop->index}},
                                                                                                                '{{$card->question}}',
                                                                                                                '{{$card->answer}}');">
                                <div class="card-body center">
                                    <h6 id="card-text{{$loop->index}}">{{ $card->question }}</h6>                                
                                </div>
                            </div>
                            <a href="{{ route('cards.edit', ['card' => $card->id]) }}">Edit / </a> 
                            <a href="{{ route('cards.destroy', ['card' => $card->id]) }}">Delete</a>
                        </li>
                    </ul>
            </div>
        @endforeach
        <script>
            function switchCard(index, question, answer){
                var currentHTML = document.getElementById("card-text" + index).innerHTML;
                if (currentHTML == question){
                    document.getElementById("card-text" + index).innerHTML = answer;
                }else{
                    document.getElementById("card-text" + index).innerHTML = question;
                }  
            }
        </script>
    @endif

    

@endsection

