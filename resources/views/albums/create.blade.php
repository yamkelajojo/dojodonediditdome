@extends('layouts.app')

@section('content')
<div class="albums-header">
    <h1 style="font-size:1.6rem; font-weight: bold">Create Album</h1>
</div>

<form action="/albums" method="POST" enctype="multipart/form-data" class=form>
    @csrf
    <div class='input_block'>
        <label for="album_name">Album Name:</label>
        <input type="text" name="album_name" id="album_name" required>
    </div>
    
    <div class='input_block'>
        <label for="artist">Artist:</label>
        <input type="text" name="artist" id="artist" required>
    </div>

    <div class='input_block'>
        <label for="album_cover">Album Cover:</label>
        <input type="text" name="album_cover" id="album_cover" required>
    </div>

    <div class='input_block'>
        <label for="year">Year:</label>
        <input type="number" id="year" name="year" min="1984" max="2024" maxlength="4" oninput="if(this.value.length > 4) this.value = this.value.slice(0, 4);" required>
    </div>

    <button type="submit" name="Create Album" class="button">Create Album</button>
</form>
@endsection
