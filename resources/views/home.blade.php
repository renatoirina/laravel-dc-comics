@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Elenco Fumetti</h1>
        <div class="row justify-content-center">
            @foreach ($comics as $comic)
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card mb-4 h-100 d-flex flex-column">
                        <img src="{{ $comic->thumb }}" class="card-img-top" style="max-height: 18rem;" alt="{{ $comic->title }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text" style="flex-grow: 1; font-size: 0.8rem;">{{ $comic->description }}</p>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary mt-auto">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
