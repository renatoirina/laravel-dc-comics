@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $comics->title }}</h1>
    <img src="{{ $comics->thumb }}" alt="">
    <p>{{ $comics->description }}</p>
</div>
@endsection