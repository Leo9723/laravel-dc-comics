@extends('layouts.app')

@section('content')

<div class="form-cont">
    <form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <label for="title">Inserisci il titolo:</label><br>
    <input type="text" name="title" id="title"><br>
    <label for="title">Inserisci una descrizione:</label><br>
    <textarea name="description" id="description" rows="10"></textarea><br>
    <label for="title">Inserisci l'immagine:</label><br>
    <input type="text" name="thumb" id="thumb"><br>
    <label for="title">Inserisci il prezzo:</label><br>
    <input type="text" name="price" id="price"><br>
    <label for="title">Inserisci la serie:</label><br>
    <input type="text" name="series" id="series"><br>
    <label for="title">Inserisci la data di pubblicazione:</label><br>
    <input type="date" name="sale_date" id="sale_date"><br>
    <label for="title">Inserisci la tipologia:</label><br>
    <input type="text" name="type" id="type"><br>
    
    <input type="submit" value="Invia" class="sub">
    
    
    </form>
</div>


@endsection('content')