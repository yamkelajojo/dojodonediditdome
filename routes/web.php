<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');
Route::get('albums/create', [AlbumController::class, 'create'])->name('albums.create')->middleware('auth');
Route::post('albums', [AlbumController::class, 'store'])->name('albums.store');
Route::get('/albums/{id}', [AlbumController::class, 'show'])->middleware('auth');

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
