@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->title }}">
            </div>
            <div class="col-md-6">
                <h3>Details</h3>
                <p><strong>Description:</strong> {{ $comic->description }}</p>
                <p><strong>Price:</strong> {{ $comic->price }}</p>
                <p><strong>Series:</strong> {{ $comic->series }}</p>
                <p><strong>Sale Date:</strong> {{ $comic->sale_date }}</p>
                <p><strong>Type:</strong> {{ $comic->type }}</p>
                <a href="{{ route('comics.home') }}" class="btn btn-secondary">Back to list</a>
            </div>
        </div>
    </div>
@endsection
