@extends('layouts.centered')

@section('center-content')
    <div class="centered">
        <h1 class="title">Kitteh Science!</h1>
        <p class="fact">
            {{ $fact }}
        </p>
    </div>
@endsection
