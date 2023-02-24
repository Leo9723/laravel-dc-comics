@extends('layouts.app')

@section('content')


<div class="form-cont">
    <form action="{{ route('comics.update', $comic->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Inserisci il titolo:</label><br>
    <input type="text" name="title" id="title" value="{{ old('title') ?? $comic->title }}"><br>
    @error('title')
    <div class="text-danger">
        {{ $message }}
    </div>
        @enderror
    <label for="title">Inserisci una descrizione:</label><br>
    <textarea name="description" id="description" rows="10">{{ old('description') ?? $comic->description }}</textarea><br>
    @error('description')
    <div class="text-danger">
        {{ $message }}
    </div>
        @enderror
    <label for="title">Inserisci l'immagine:</label><br>
    <input type="text" name="thumb" id="thumb" value="https://picsum.photos/200/300" value="{{ old('thumb') ?? $comic->thumb }}"><br>
    <label for="title">Inserisci il prezzo:</label><br>
    <input type="text" name="price" id="price" value="{{ old('price') ?? $comic->price }}"><br>
    @error('price')
    <div class="text-danger">
        {{ $message }}
    </div>
        @enderror
    <label for="title">Inserisci la serie:</label><br>
    <input type="text" name="series" id="series" value="{{ old('series') ?? $comic->series }}"><br>
    @error('series')
    <div class="text-danger">
        {{ $message }}
    </div>
        @enderror
    <label for="title">Inserisci la data di pubblicazione:</label><br>
    <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date') ?? $comic->sale_date }}"><br>
    <label for="title">Inserisci la tipologia:</label><br>
    <input type="text" name="type" id="type" value="{{ old('type') ?? $comic->type }}"><br>
    @error('type')
    <div class="text-danger">
        {{ $message }}
    </div>
        @enderror
    
    <input type="submit" value="Invia" class="sub">
    
    
    </form>
</div>


@endsection('content')