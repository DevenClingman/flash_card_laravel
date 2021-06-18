@include('layouts.styles')

<video autoplay muted loop id="backgroundVideo">
  <Source src="{{asset('assets/videos/WomanOnLaptop.mp4')}}">
</video>

<div class="content">
    <div style="text-align:center">
        <h1>Welcome to the Flash Card App!</h1>

        <a class="btn btn-outline-dark btn-lg home-page-btns" 
           href="{{ route('decks.create') }}">Lets Get Started</a>
        <br><br>
        <a class="btn btn-outline-dark btn-lg home-page-btns"  
           href="{{ route('decks.index') }}">Let Me See My Decks</a>
    </div>
</div>
