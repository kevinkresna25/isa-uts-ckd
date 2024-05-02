@extends('layouts.main')

@section('title', 'Data Karyawan')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/datakaryawan">Data Karyawan</a></li>
@endsection

@section('card')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header border-bottom">
                <div class="card-title font-weight-bold">Data Guru</div>
            </div>
            <div class="card-body pt-3">
                <div class="row">
                    <div class="col col-md-3">Id</div>
                    <div class="col col-md-9">: {{ Auth::user()->id }}</div>
                    <div class="col col-md-3">Nama</div>
                    <div class="col col-md-9">: {{ Auth::user()->pegawai->nama }}</div>
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
                                <th scope="col">Id</th>
                                <th scope="col">Nama Pegawai</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Nomor Telp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listPegawai as $pegawai)
                                <tr>
                                    <td style="border-bottom: 0;">{{ $pegawai->idPegawai}}</td>
                                    <td style="border-bottom: 0;">{{ $pegawai->nama }}</td>
                                    <td style="border-bottom: 0;">{{ $pegawai->alamat }}</td>
                                    <td style="border-bottom: 0;">{{ $pegawai->nomorTelp }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a href="/tambahKaryawan" class="btn btn-primary align-right">Tambah Nilai</a>
    </div>
</div>
@endsection
