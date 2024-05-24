@extends('layouts.app')

@section('content')

    <section class="py-4">
        <div class="container">
            <h2 class="text-center">Tutti i fumetti DC</h2>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-4 my-3">
                        <div class="card">
                            <div class="card-body">
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $comic->price }}</h6>
                            <p class="card-text">{{ $comic->series }}</p>
                            <a href="{{ route('comics.show', [ 'comic' => $comic->id]) }}"><button class="btn btn-primary">Scropri di più</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>    
        </div>
    </section>
    
@endsection