@extends('layouts.layout')
@section('content')
    <div class="albums-header">
        <h1 style="text-align: center;" class="">Albums</h1>
    </div>
    @if ($albums->isEmpty())
        <p>No albums available.</p>
    @else
    <div class="albums">
        @foreach ($albums as $album)
            <div class="album">
                @if ($album->album_cover)
                    <img src="{{ asset($album->album_cover) }}" alt="{{ $album->album_name }}">
                @endif
                <div class="album-details">
                    {{-- <p>{{$loop -> index + 1}}</p> --}}
                    <p>{{$album->album_name}}</p>
                    <p>{{$album->artist}}</p>
                </div>
            </div>
        @endforeach
    </div>
     @endif
@endsection