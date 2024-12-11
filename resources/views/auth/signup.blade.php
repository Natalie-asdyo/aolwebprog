@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 30rem;">
            <div class="card-header text-center">
                <h4>Daftarkan Akun</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('signup') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Pilih Role</label>
                        <select name="role" class="form-select" id="role" required>
                            <option value="buyer">Pembeli</option>
                            <option value="seller">Penjual</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
