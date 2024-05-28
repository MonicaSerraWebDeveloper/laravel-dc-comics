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
                <form class="py-3" action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
                <p>{{ $comic->description }}</p>
            </div>
        </div>
    </section>
    
@endsection