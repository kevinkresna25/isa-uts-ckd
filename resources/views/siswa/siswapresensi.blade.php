@extends('layouts.main')

@section('title', 'Presensi')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/presensi">Presensi</a></li>
@endsection

@section('card')
    @include('umum.datainfo')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="card-title font-weight-bold">Data Mata Pelajaran</div>
                </div>
                <div class="card-body pt-3">

                    <div class="table-responsive">
                        <table class="table table-hover" id="table-listambilmk">
                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">Nama Mata Pelajaran</th>
                                    <th scope="col">Kehadiran</th>
                                </tr>
                            </thead>

                            {{-- GUNAKAN YANG INI SAMBUNG KE KONTROLER --}}
                            {{-- <tbody>
                                @foreach ($subjects as $index => $subject)
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;">
                                        {{ $index + 1 }}
                                    </td>
                                    <!-- Asumsi nama mata pelajaran disimpan di kolom 'name' -->
                                    <td>{{ $subject->name }}</td> 
                                     <!-- Asumsi kehadiran disimpan di kolom 'attendance' -->
                                     <!-- coba sesuain lagi sama matkulnya dan presensi dari gurunya -->
                                    <td align="left">Kehadiran: {{ $subject->attendance }}</td>
                                </tr>
                                <tr></tr>
                                @endforeach
                            </tbody> --}}

                            {{-- CONTOH TAMPILAN --}}
                            <tbody>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;" rowspan="2">1</td>
                                    <td>Aljabar Linier</td>
                                    <td colspan="2" align="left">Kehadiran: AIHHHHH
                                    </td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;" rowspan="2">2</td>
                                    <td>Database</td>
                                    <td align="left">Kehadiran: HHHHHHHHHHHHHH</td>
                                </tr>
                            </tbody>


                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
