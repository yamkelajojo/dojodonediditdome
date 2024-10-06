<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{

    //this constructor line siyifake long after the ones we created below. its basically making all the functions below use the ->middleware thing instead oh putting it in ieach line 1 by 1 in the web.php file at the end of each route
    // public function __construct(){
    //     this->middleware(auth);
    // }

    public function index()
    {
        // $albums = Album::all();

        // $albums = Album::orderBy('year', 'asc')->get();

        // $albums = Album::where('year', '2016')->get();

        $albums = Album::latest()->get();

        return view('albums.index', ["albums" => $albums]);
    }

    public function show($id)
    {
        $album = Album::findOrFail($id);

        return view('albums.show', ['album' => $album]);
    }

    public function create()
    {
    return view('albums.create');
    }
    public function store(Request $request)
    {
        // You can handle any validation or other logic here if needed
        $album = new Album();

        $album->album_name = request('album_name');
        $album->artist = request('artist');
        $album->album_cover = request('album_cover');
        $album->year = request('year');


        $album->save();
    
        // Just redirect to the homepage ("/") without saving the data
        return redirect('/')->with('message', 'Form submitted successfully!');
    }
}

