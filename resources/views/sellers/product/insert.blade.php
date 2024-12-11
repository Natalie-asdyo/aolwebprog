@extends('layouts.app')

@section('content')
    <h1>Insert New Product</h1>
    <form method="POST" action="{{ route('seller.product.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nama Produl</label>
            <input type="text" name="name" class="form-control" id="name"  required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi Produk</label>
            <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar Produk</label>
            <input type="file" name="image" class="form-control" id="image" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipe produk</label>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="type" data-bs-toggle="dropdown" aria-expanded="false">
                    Select Product Type
            </button>
            <ul class="dropdown-menu" aria-labelledby="type">
                <li><a class="dropdown-item" href="#" onclick="setProductType('cooked')">Cooked</a></li>
                <li><a class="dropdown-item" href="#" onclick="setProductType('half-cooked')">Half-Cooked</a></li>
                <li><a class="dropdown-item" href="#" onclick="setProductType('raw')">Raw</a></li>
            </ul>
        </div>
            <input type="hidden" name="type" id="selectedType">
        </div>



        <div class="mb-3">
            <label for="location" class="form-label">Lokasi</label>
            <input type="text" name="location" class="form-control" id="location" required>
        </div>

        <button type="submit" class="btn btn-primary">Unggah</button>
    </form>
@endsection
