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

Route::get('/', function () {
    $nav_links = [
            "charaters","comics","movies","tv","games","collectibles","videos","fans","news","shop"
        ];
        $comics = config('comics');
    return view('home.index', compact('nav_links', 'comics'));
})->name('home');

Route::get('/charaters', function () {
    $nav_links = [
        "charaters","comics","movies","tv","games","collectibles","videos","fans","news","shop"
    ];
    return view('charaters', compact('nav_links'));
})->name('charaters');

Route::get('/collectibles', function () {
    $nav_links = [
        "charaters","comics","movies","tv","games","collectibles","videos","fans","news","shop"
    ];
    return view('collectibles', compact('nav_links'));
})->name('collectibles');

Route::get('/comics', function () {
    $nav_links = [
        "charaters","comics","movies","tv","games","collectibles","videos","fans","news","shop"
    ];
    return view('comics', compact('nav_links'));
})->name('comics');

Route::get('/fans', function () {
    $nav_links = [
        "charaters","comics","movies","tv","games","collectibles","videos","fans","news","shop"
    ];
    return view('fans', compact('nav_links'));
})->name('fans');

Route::get('/games', function () {
    $nav_links = [
        "charaters","comics","movies","tv","games","collectibles","videos","fans","news","shop"
    ];
    return view('games', compact('nav_links'));
})->name('games');

Route::get('/movies', function () {
    $nav_links = [
        "charaters","comics","movies","tv","games","collectibles","videos","fans","news","shop"
    ];
    return view('movies', compact('nav_links'));
})->name('movies');

Route::get('/news', function () {
    $nav_links = [
        "charaters","comics","movies","tv","games","collectibles","videos","fans","news","shop"
    ];
    return view('news', compact('nav_links'));
})->name('news');

Route::get('/shop', function () {
    $nav_links = [
        "charaters","comics","movies","tv","games","collectibles","videos","fans","news","shop"
    ];
    return view('shop', compact('nav_links'));
})->name('shop');

Route::get('/tv', function () {
    $nav_links = [
        "charaters","comics","movies","tv","games","collectibles","videos","fans","news","shop"
    ];
    return view('tv', compact('nav_links'));
})->name('tv');

Route::get('/videos', function () {
    $nav_links = [
        "charaters","comics","movies","tv","games","collectibles","videos","fans","news","shop"
    ];
    return view('videos', compact('nav_links'));
})->name('videos');


