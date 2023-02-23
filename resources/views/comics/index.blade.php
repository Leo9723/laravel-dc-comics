@extends('layouts.app')

@section('content')



<div class="maincont">
@foreach ($comics as $comic)
<div class="cardContainer">
   <div class="carta">
            <a href="{{ route('comics.show', ['comic' => $comic['id']]) }}">
            <div class="thumb">
               <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
            <div class="title">
               {{ $comic['title'] }}
            </div>
         </a>
         </div>

</div>
   @endforeach
  </div>
    <div class="button">
      <button>LOAD MORE</button>
    </div>

@endsection('content')