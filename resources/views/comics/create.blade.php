@extends('layouts.app')

@section('content')

<form action="{{ route('comics.store') }}" method="POST">
@csrf

<input type="text" name="title" id="title" placeholder="inserisci titolo"><br>
<textarea name="description" id="description" cols="30" rows="10" placeholder="inserisci la descrizione"></textarea><br>
<input type="text" name="thumb" id="thumb" placeholder="inserisci url immagine"><br>
<input type="text" name="price" id="price" placeholder="inserisci prezzo"><br>
<input type="text" name="series" id="series" placeholder="inserisci serie"><br>
<input type="date" name="sale_date" id="sale_date" placeholder="inserisci data di pubblicazione"><br>
<input type="text" name="type" id="type" placeholder="inserisci tipologia"><br>

<input type="submit" value="Invia">


</form>

@endsection('content')