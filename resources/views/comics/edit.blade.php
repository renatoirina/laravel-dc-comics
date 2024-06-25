@extends('layouts.app')

@section('content')
    <h1>Create</h1>

    <form action="{{ route("comics.update", ['comic' => $comic->id ]) }}" method="POST">
        @csrf
        @method("PUT")
        
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
        
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $comic->description }}" >
        
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
        
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" 
            name="price" value="{{ $comic->price }}">
        
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
        
            <label for="sale_date" class="form-label">Date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
            
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
