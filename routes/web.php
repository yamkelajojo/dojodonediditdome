<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/albums', [AlbumController::class, 'index']);
Route::get('albums/create', [AlbumController::class, 'create']);
Route::post('albums', [AlbumController::class, 'store']);
Route::get('/albums/{id}', [AlbumController::class, 'show']);
