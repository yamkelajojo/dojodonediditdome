@extends('layouts.app')

@section('content')
<div class="albums-header">
    <h1 style="text-align: center; color:gray;">Album</h1>
</div>
<div style="width: 100%;">
    <h1>Album ID - {{ $album->id }}</h1> <!-- Access the album ID here -->
    <p>Album Name - {{ $album->album_name }}</p>
    <p>Artist - {{ $album->artist }}</p>
    <p>Year - {{ $album->year }}</p>
    @if ($album->album_cover)
        <img src="{{ asset($album->album_cover) }}" alt="{{ $album->album_name }}">
    @endif
</div>
@endsection
