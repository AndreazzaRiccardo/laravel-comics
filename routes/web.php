<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// $nav_links = config('nav.header_links');

// Route::get('/', function () use ($nav_links) {
//         $comics = config('comics');
//     return view('home.index', compact('comics', 'nav_links'));
// })->name('home');



Route::get('/', function () {
        $comics = config('comics');
    return view('home.index', compact('comics'));
})->name('home');

Route::get('/charaters', function () {
    return view('charaters');
})->name('charaters');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/comics', function () {
    return view('comics');
})->name('comics');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');


