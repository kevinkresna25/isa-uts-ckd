@extends('layouts.main')

@section('title', 'Penilaian')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/penilaian">Penilaian</a></li>
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
                <div class="card-body pt-3">
                    <div class="table-responsive">
                        <form action="/guruTambahPenilaian" method="post">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-floating">
                                <label for="nama">Tahun Ajaran</label>
                                <select name="tahunSekolah_idtahunSekolah"  class="form-control">
                                    @foreach ($listTahun as $tahun)
                                        <option value="{{ $tahun->idtahunSekolah}}">{{ $tahun->tahun}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-floating">
                                <label for="nama">Nama Murid</label>
                                <select name="tSiswa_idSiswa"  class="form-control">
                                    @foreach ($listSiswa as $user)
                                        <option value="{{ $user->idSiswa}}">{{ $user->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-floating">
                                <label for="nama">Nama Subjek</label>
                                <select name="tSubjek_id"  class="form-control">
                                    @foreach ($listSubjek as $subjek)
                                        <option value="{{ $subjek->id}}">{{ $subjek->namaSubjek }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="form-floating">
                                <input type="number" name="nilaiUTS"
                                    class="form-control @error('nilaiUTS') is-invalid @enderror" id="nilaiUTS"
                                    placeholder="Nilai UTS" required>
                            </div>
                            <br>
                            <div class="form-floating">
                                <input type="number" name="nilaiUAS"
                                    class="form-control @error('nilaiUAS') is-invalid @enderror" id="nilaiUAS"
                                    placeholder="Nilai UAS" required>
                            </div>
                            <br>
                            <div class="form-floating">
                                <input type="number" name="nilaiAfektif"
                                    class="form-control @error('nilaiAfektif') is-invalid @enderror" id="nilaiAfektif"
                                    placeholder="Nilai Afektif" required>
                            </div>
                            <br>
                            <div class="form-floating">
                                <input type="text" name="pendapatGuru"
                                    class="form-control @error('pendapaGuru') is-invalid @enderror" id="pendapaGuru"
                                    placeholder="Pendapat Guru" required>
                            </div>
                            <br>
                    </div>
                    <br>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Tambahkan Nilai</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
