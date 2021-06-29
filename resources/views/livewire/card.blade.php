<div style="text-align:center" >
    <br>      
    <div wire:click="switchCard" id="card" class="card" style="width: 20rem; margin:auto; height:10rem" >
        <div class="card-body center">
            <h6>{{ $displayed }}</h6>
        </div>
    </div>
    <p>
        <a class="btn btn-info" href="{{route('cards.edit', $card->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('cards.destroy', $card->id)}}">Delete</a>
    </p>
</div>

