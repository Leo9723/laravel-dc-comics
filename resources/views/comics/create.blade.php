@extends('layouts.app')

@section('content')

@if($errors->any())
<ul class="text-danger bg-black mb-0">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<div class="form-cont">
    <form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <label for="title">Inserisci il titolo:</label><br>
    <input type="text" name="title" id="title"><br>
    <div class="error">
    @error('title')
    <div class="text-danger">
        {{ $message }}
    </div>
        @enderror
    </div>
    <label for="title">Inserisci una descrizione:</label><br>
    <textarea name="description" id="description" rows="10"></textarea><br>
    <div class="error">
    @error('description')
    <div class="text-danger">
        {{ $message }}
    </div>
        @enderror
    </div>
    <label for="title">Inserisci l'immagine:</label><br>
    <input type="text" name="thumb" id="thumb" value="https://picsum.photos/200/300"><br>
    <label for="title">Inserisci il prezzo:</label><br>
    <input type="text" name="price" id="price"><br>
    <div class="error">
    @error('price')
    <div class="text-danger">
        {{ $message }}
    </div>
        @enderror
    </div>
    <label for="title">Inserisci la serie:</label><br>
    <input type="text" name="series" id="series"><br>
    <div class="error">
    @error('series')
    <div class="text-danger">
        {{ $message }}
    </div>
        @enderror
    </div>
    <label for="title">Inserisci la data di pubblicazione:</label><br>
    <input type="date" name="sale_date" id="sale_date"><br>
    <label for="title">Inserisci la tipologia:</label><br>
    <input type="text" name="type" id="type"><br>
    @error('type')
    <div class="text-danger">
        {{ $message }}
    </div>
        @enderror
    
    <input type="submit" value="Invia" class="sub">
    
    
    </form>
</div>


@endsection('content')