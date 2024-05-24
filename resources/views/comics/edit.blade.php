@extends('layouts.app')

@section('content')

<section class="py-4">
    <div class="container d-flex justify-content-center">
        <div class="col-6">
            <h3>Modifica il fumetto DC</h3>
            <form action="{{ route('comics.update', [ 'comic' => $comic->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Titolo</label>
                  <input id="title" type="text" class="form-control" name="title" value="{{ $comic->title }}">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine copertina</label>
                    <input id="thumb" type="text" class="form-control" name="thumb" value="{{ $comic->thumb }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input id="price" type="float" class="form-control" name="price" value="{{ $comic->price }}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input id="series" type="text" class="form-control" name="series" value="{{ $comic->series }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data oggi</label>
                    <input id="sale_date" type="date" class="form-control" name="sale_date" value="{{ $comic->sale_date }}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input id="type" type="text" class="form-control" name="type" value="{{ $comic->type }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea id="description" class="form-control" rows="5" name="description">{{ $comic->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Modifica il fumetto</button>
            </form>
        </div>
    </div>
</section>
    
@endsection