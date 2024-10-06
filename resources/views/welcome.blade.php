@extends('layouts.app')
@section('content')
<div class="content" style="border: 1px rgb(75, 18, 87) solid; width: 100%; text-align: center;">
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
    <img class="cover-image" src="/images/SANDAS.jpg" alt="sandas art">  

    {{-- <div class="lightning">
        <div class="noisy">
            <span>4700. Presents</span>
            DojoDoneDidIt
        </div>
        <div class="noisy">
            Dome
            <span>music</span>
        </div>
    </div> --}}
    <div class="logo-text">DojoDoneDidItDome</div>
</div>
@endsection
