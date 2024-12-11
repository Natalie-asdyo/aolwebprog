@extends('layouts.app')

@section('content')
    <h1 class="display-4">Search Products</h1>

    <!-- Search Form -->
    <form method="GET" action="{{ route('products.index') }}" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search products" value="{{ request()->get('search') }}">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </div>
    </form>

    @if($products->isEmpty())
        <p>No products found based on your search.</p>
    @else
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                            <p class="card-text"><strong>Type:</strong> {{ ucfirst($product->type) }}</p>
                            <p class="card-text"><strong>Location:</strong> {{ $product->location }}</p>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">View Product</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        {{ $products->links() }}
    @endif
@endsection
