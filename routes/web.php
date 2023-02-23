<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController as PageController;
use App\Http\Controllers\ComicController as ComicController;




Route::get('/', [PageController::class, 'index'])->name('homepage');

Route::resource('comics', ComicController::class);