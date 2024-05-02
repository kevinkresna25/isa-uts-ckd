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
                                    <th scope="col">Id</th>
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
            <a href="/generate-pdf" target="_blank" class="btn btn-primary">Print Rapor</a>
        </div>
    </div>
@endsection
