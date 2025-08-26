<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/exhibitions', function () {
    return view('pages.exhibitions');
})->name('exhibitions');

Route::get('/collections', function () {
    return view('pages.collections');
})->name('collections');

Route::get('/news', function () {
    return view('pages.news');
})->name('news');

Route::get('/contacts', function () {
    return view('pages.contacts');
})->name('contacts');

Route::get('/buy-tickets', function () {
    return view('pages.buy');
})->name('buy');
