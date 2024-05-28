@extends('layouts.app')

@section('content')
    <section class="py-4">
        <div class="container d-flex justify-content-center">
            <div class="col-6">
                <h3>Aggiungi il tuo fumetto DC</h3>
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo</label>
                      <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">
                    </div>
                    <!-- Error Title -->
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine copertina</label>
                        <input id="thumb" type="text" class="form-control" name="thumb" value="{{ old('thumb') }}">
                    </div>

                    <!-- Error Thumb -->
                    @error('thumb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input id="price" type="float" class="form-control" name="price" value="{{ old('price') }}">
                    </div>

                    <!-- Error Price -->
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input id="series" type="text" class="form-control" name="series" value="{{ old('series') }}">
                    </div>

                    <!-- Error Series -->
                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data oggi</label>
                        <input id="sale_date" type="date" class="form-control" name="sale_date" value="{{ old('sale_date') }}">
                    </div>

                    <!-- Error Sale Date -->
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input id="type" type="text" class="form-control" name="type" value="{{ old('type') }}">
                    </div>

                    <!-- Error Type -->
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea id="description" class="form-control" rows="5" name="description" value="{{ old('description') }}"></textarea>
                    </div>

                     <!-- Error Description -->
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary">Carica il fumetto</button>
                </form>
            </div>
        </div>
    </section>
@endsection