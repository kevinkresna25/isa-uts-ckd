@extends('layouts.main')

@section('title', 'Tambah Karyawan')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/tambahkaryawan">Tambah Karyawan</a></li>
@endsection

@section('card')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <form method="post" action="/tambahKaryawan">
        @csrf
        <div class="form-floating">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama"
                placeholder="Name" required>
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="username">Username</label>
            <input type="username" name="username" class="form-control @error('username') is-invalid @enderror"
                id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                placeholder="Email" required>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                id="password" placeholder="Password" required>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="noTelp">Jenis Kelamin</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenisKelamin" id="genderMale" value="L" checked>
                <label class="form-check-label" for="genderMale">
                    Laki - Laki
                </label>
                <input class="form-check-input" type="radio" name="jenisKelamin" id="genderFemale" value="P">
                <label class="form-check-label" for="genderFemale">
                    Perempuan
                </label>
            </div>
        </div>
        <div class="form-floating">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                placeholder="Alamat" required>
            @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="nomorTelp">Nomor Telepon</label>
            <input type="text" name="nomorTelp" class="form-control @error('nomorTelp') is-invalid @enderror"
                id="nomorTelp" placeholder="Nomor Telepon" required>
            @error('nomorTelp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="tanggalMasuk">Tanggal Masuk</label>
            <input type="date" name="tanggalMasuk" class="form-control @error('tanggalMasuk') is-invalid @enderror"
                id="tanggalMasuk" placeholder="" required>
            @error('tanggalMasuk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="role">Peran</label>
            <select class="form-control" id="roleSelect">
                <option>Admin</option>
                <option>Guru</option>
                <option>Pustakawan</option>
            </select>
            @error('role')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <br>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Tambah Karyawan</button>
    </form>
@endsection
