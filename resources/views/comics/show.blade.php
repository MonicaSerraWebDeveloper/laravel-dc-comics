@extends('layouts.app')

@section('content')

    <section class="py-4">
        <div class="container d-flex flex-column align-items-center">
            <div class="col-5 d-flex flex-column gap-3">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <h2>{{ $comic->title }}</h2>
                <div>€ {{ $comic->price }}</div>
                <div>Serie: {{ $comic->series }}</div>
                <div>Tipo: {{ $comic->type }}</div>
                <p>{{ $comic->description }}</p>
            </div>
        </div>
    </section>
    
@endsection