@extends('layouts.app')

@section('content')
    <h1 class="display-4">Ratings</h1>
    <p>Rating toko tempat transaksii kamu yuk!</p>
    <div class="list-group">
        @foreach($ratings as $rating)
            <div class="list-group-item">
                <h5 class="mb-1">Store: {{ $rating->store->name }}</h5>
                <p class="mb-1">Rating: {{ $rating->rating }} stars</p>
            </div>
        @endforeach
    </div>
@endsection
