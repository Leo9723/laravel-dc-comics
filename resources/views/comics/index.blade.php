@extends('layouts.app')

@section('content')



<div class="maincont">
@foreach ($comics as $comic)
<div class="cardContainer">
   <div class="carta">
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
            <div class="thumb">
               <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
            <div class="title">
               {{ $comic['title'] }}
            </div>
         </a>
         <button class="edit-button"><a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">EDIT</a></button>
         <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="confirm-delete-comic" data-title="{{ $comic->title }}">DELETE</button>
         </form>
         </div>

</div>
   @endforeach
  </div>
    <div class="button">
      <button><a href="{{ route('comics.create') }}">AGGIUNGI FUMETTO</a></button>
    </div>


    @include('partials.model_delete')
@endsection('content')