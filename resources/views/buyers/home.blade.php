@extends('layouts.app')

@section('content')
    <h1 class="display-4">Selamat datang di halaman rumah kamu!</h1>
    <p>Pelajari produksi dan konsumsi yang bertanggung jawab disini!</p>

    <div class="row">

        <div class="col-6 mb-3">
            <a href="{{ route('products.index') }}" class="btn btn-outline-success w-100">
                Cari Produk
            </a>
        </div>

        <div class="col-6 mb-3">
            <a href="{{ route('Articles.index') }}" class="btn btn-outline-success w-100">
                Eksplor Artikel
            </a>
        </div>

        <div class="col-6 mb-3">
            <a href="{{ route('ratings.index') }}" class="btn btn-outline-success w-100">
                Berikan Rating
            </a>
        </div>
    </div>
@endsection
