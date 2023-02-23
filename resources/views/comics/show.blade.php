@extends('layouts.app')

@section('content')

<div class="blue-row">

</div>
<div class="img-cont">

    <img class="thumb-img" src="{{ $single['thumb'] }}" alt="{{ $single['title'] }}">
</div>
<div class="cont">
    <div class="right-part">
        <h3>{{ $single['title'] }}</h3>
        <div class="green-part">
            <div class="sell">
                <div class="price">
                U.S Price: {{ $single['price'] }}
                </div>
                <div class="shop">
                AVAILABLE
                </div>
            </div>
            <div class="disponibility">
            Check Availability
            </div>
        </div>
        <p>{{ $single['description'] }}</p>
    </div>
    <div class="left-part">
        <img src="/img/advisor.jpg" alt="">
    </div>

</div>

@endsection('content')