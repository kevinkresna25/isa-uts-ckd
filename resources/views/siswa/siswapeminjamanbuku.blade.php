@extends('layouts.main')

@section('title', 'Peminjaman Buku')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/peminjamanbuku">Peminjaman Buku</a></li>
@endsection

@section('card')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="card-title font-weight-bold">Rapor Siswa</div>
                </div>
                <div class="card-body pt-3">
                    <div class="row">
                        <div class="col col-md-3">Id</div>
                        <div class="col col-md-9">: {{ Auth::user()->id }}</div>
                        <div class="col col-md-3">Nama</div>
                        <div class="col col-md-9">: {{ Auth::user()->siswa->nama }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="card-title font-weight-bold" id="jadwalkuliah">Penilaian Siswa</div>
                </div>
                <div class="card-body pt-3 ">
                    <div class="row">
                    <div class="table-responsive">
                        <table class="table table-hover" id="table-listambilmk">
                            <thead>
                                <tr>
                                    <th scope="col">Id Pinjam</th>
                                    <th scope="col">Id Buku</th>
                                    <th scope="col">Nama Buku</th>
                                    <th scope="col">Tanggal Pinjam</th>
                                    <th scope="col">Tanggal Kembali</th>
                                    <th scope="col">Status Pengembalian</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pinjamBuku as $buku)
                                    <tr>
                                        <td style="border-bottom: 0;">{{ $buku->id }}</td>
                                        <td style="border-bottom: 0;">{{ $buku->buku->idBuku}}</td>
                                        <td style="border-bottom: 0;">{{ $buku->buku->namaBuku}}</td>
                                        <td style="border-bottom: 0;">{{ $buku->tanggalPinjam}}</td>
                                        <td style="border-bottom: 0;">{{ $buku->tanggalKembali}}</td>
                                        <td style="border-bottom: 0;">{{ $buku->statusKembali}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
