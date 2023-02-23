<?php
   $menu = [
    'CHARACTERS',
    'COMICS',
    'MOVIES',
    'TV',
    'GAMES',
    'COLLECTIBLES',
    'VIDEOS',
    'FANS',
    'NEWS',
    'SHOP'
];

?>

   <div class="container">
    <img src="/img/dc-logo.png" alt="">
    <ul class="header-ul">
            @foreach($menu as $item)
            <li><a href="{{ route('comics.index') }}">{{ $item }}</a></li>
            @endforeach
        </ul>
  </div>