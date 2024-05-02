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
                        <div class="col col-md-9">: 123456789</div>
                        <div class="col col-md-3">Nama</div>
                        <div class="col col-md-9">: LOUIS DEWA VOTERRA</div>
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
                        <table class="table table-hover" id="table-listambilmk">
                            <thead>
                                <tr>
                                    <th scope="col">No </th>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border-bottom: 0;">1</td>
                                    <td style="border-bottom: 0;">Pendidikan Agama dan Budi Pekerti</td>
                                    <td style="border-bottom: 0;">98</td>
                                    <td style="border-bottom: 0;">98</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">2</td>
                                    <td style="border-bottom: 0;">Pendidikan Pancasila dan Kewarganegaraan</td>
                                    <td style="border-bottom: 0;">90</td>
                                    <td style="border-bottom: 0;">92</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">3</td>
                                    <td style="border-bottom: 0;">Bahasa Indonesia</td>
                                    <td style="border-bottom: 0;">90</td>
                                    <td style="border-bottom: 0;">91</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">4</td>
                                    <td style="border-bottom: 0;">Matematika (Umum)</td>
                                    <td style="border-bottom: 0;">100</td>
                                    <td style="border-bottom: 0;">100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
