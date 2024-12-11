@extends('layouts.app')

@section('content')
    <h1>Rate the Store</h1>
    <form method="POST" action="{{ route('buyer.rating.store') }}">
        @csrf
        <div class="mb-3">
            <label for="store_id" class="form-label">Toko</label>
            <select name="store_id" class="form-control" id="store_id" required>
                @foreach($stores as $store)
                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <select name="rating" class="form-control" id="rating" required>
                <option value="1">1 Star</option>
                <option value="2">2 Stars</option>
                <option value="3">3 Stars</option>
                <option value="4">4 Stars</option>
                <option value="5">5 Stars</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Unggah</button>
    </form>
@endsection
