@extends('layouts.app')

@section('content')
    <h1 class="display-4">Cek Produk yuk!</h1>
    
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Lihat produk</a>
                        <form action="{{ route('buyer.purchase', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Buy</button>
                        </form>
                    </div>
                </div>
            </div>
            
        @endforeach
    </div>
@endsection
