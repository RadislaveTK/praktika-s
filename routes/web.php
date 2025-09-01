<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ColectionsController;
use App\Http\Controllers\ExhibController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\UserAuthController;

# Functions

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

# Controllers

Route::get('/exhibitions', [ExhibController::class, 'show'])->name('exhibitions.show');
Route::post('/exhibitions/create', [ExhibController::class, 'create'])->name('exhibitions.create');
Route::get('/exhibitions/delete', [ExhibController::class, 'delete'])->name('exhibitions.delete');

Route::get('/collections', [ColectionsController::class, 'show'])->name('collections.show');
Route::post('/collections/create', [ColectionsController::class, 'create'])->name('collections.create');
Route::get('/collections/delete', [ColectionsController::class, 'delete'])->name('collections.delete');

Route::get('/news', [NewsController::class, 'show'])->name('news.show');
Route::post('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::get('/news/delete', [NewsController::class, 'delete'])->name('news.delete');

Route::get('/tickets/buy', [TicketsController::class, 'showBuyForm'])->name('ticket.buy');
Route::get('/tickets/verify', [TicketsController::class, 'showVerification'])->name('ticket.verify');

# Auth admin / Admin panel

Route::get('/admin/login', [UserAuthController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/admin/login', [UserAuthController::class, 'login']);
Route::post('/admin/logout', [UserAuthController::class, 'logout'])->name('logout');

Route::get('/admin/panel', [UserAuthController::class, 'showAdminPanel'])->middleware('auth')->name('admin.panel');

