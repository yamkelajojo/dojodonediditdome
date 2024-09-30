<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        dd($albums);

        return view('albums', ["albums" => $albums]);
    }

    public function show($id)
    {
        return view('details', ["id" => $id]);
    }
}