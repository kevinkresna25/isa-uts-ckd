@extends('layouts.main')

@section('title', 'Tambah Buku')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/pustakatambahbuku">Tambah Buku</a></li>
@endsection

@section('card')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="card-title font-weight-bold">Tambah Buku</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('buku.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" class="form-control" id="pengarang" name="pengarang" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tahun_terbit">Tahun Terbit</label>
                            <input type="date" id="tahun_terbit" name="tahun_terbit" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Buku</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
