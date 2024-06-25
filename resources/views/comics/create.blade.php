@extends('layouts.app')

@section('content')
    <h1>Create</h1>
    @if ( $errors->any() )
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul> 
        </div>
    @endif


    <form action="{{ route("comics.store") }}" method="POST">
        @csrf
        
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old("title") }}">
        
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old("description") }}" >
        
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old("thumb") }}">
        
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" 
            name="price" value="{{ old("price") }}">
        
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ old("series") }}">
        
            <label for="sale_date" class="form-label">Date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old("sale_date") }}">
        
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old("type") }}">
            
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
