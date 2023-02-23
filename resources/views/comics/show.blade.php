@extends('layouts.app')

@section('content')

<h1>{{ $single['title'] }}</h1>

<span>{{ $single['price'] }}</span> <br>
<span>{{ $single['sale_date'] }}</span>

@endsection('content')