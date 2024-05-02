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
                <div class="card-body pt-3 ">
                    <div class="row">
                    <div class="table-responsive">
                        <table class="table table-hover" id="table-listambilmk">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Mata Pelajaran</th>
                                    <th scope="col">Nilai UTS</th>
                                    <th scope="col">Nilai UAS</th>
                                    <th scope="col">Nilai Afektif</th>
                                    <th scope="col">Pendapat Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listRapor as $rapor)
                                    <tr>
                                        <td style="border-bottom: 0;">{{ $rapor->id }}</td>
                                        <td style="border-bottom: 0;">{{ $rapor->siswa->nama }}</td>
                                        <td style="border-bottom: 0;">{{ $rapor->Subjek->namaSubjek }}</td>
                                        <td style="border-bottom: 0;">{{ $rapor->nilaiUTS }}</td>
                                        <td style="border-bottom: 0;">{{ $rapor->nilaiUAS }}</td>
                                        <td style="border-bottom: 0;">{{ $rapor->nilaiAfektif }}</td>
                                        <td style="border-bottom: 0;">{{ $rapor->pendapatGuru }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <a href="/guruTambahPenilaian" class="btn btn-primary align-right">Tambah Nilai</a>
        </div>
    </div>
{{--     
    <div class="row" id="edit" style="display: none;">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="card-title font-weight-bold" id="jadwalkuliah">Edit Presensi Siswa</div>
                </div>
                <div class="card-body pt-3">
                    <div class="table-responsive">
                        <table class="table table-hover" id="table-listambilmk">
                            <!-- Isi tabel edit -->
                            <thead>
                                <tr>
                                    <th scope="row">Nilai </th>
                                    <th scope="row">Deskripsi Capaian</th>
                                </tr>
                            </thead>
                            <tr>
                                <td><input type="text" name="nama"></td>
                                <td>
                                    <textarea name="pesan" cols="60px" rows="3px"></textarea>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
