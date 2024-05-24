@extends('layouts.app')

@section('content')

    <section class="py-4">
        <div class="container text-center">
            <h1>Vai ai fumetti DC Comics</h1>
            <a href="{{ route('comics.index') }}"><button class="btn btn-primary">Tutti i fumetti</button></a>
        </div>
    </section>
    

    
@endsection