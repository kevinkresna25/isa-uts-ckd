@extends('layouts.main')

@section('title', 'Penilaian')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/penilaian">Penilaian</a></li>
@endsection

@section('card')
    @include('umum.datainfo')
    <button type="button" class="btn btn-primary">Primary</button> 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="card-title font-weight-bold" id="jadwalkuliah">Hasil Studi Siswa</div>
                </div>
                <div class="card-body pt-3">
                    <div class="table-responsive">
                        <table class="table table-hover" id="table-listambilmk">
                            <thead>
                                <tr>
                                    <th scope="col">No </th>
                                    <th scope="col">Nama Mata Pelajaran</th>
                                    <th scope="col">NTS</th>
                                    <th scope="col">NAS</th>
                                    <th scope="col">Nilai Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border-bottom: 0;">1</td>
                                    <td style="border-bottom: 0;">Pendidikan Agama dan Budi Pekerti</td>
                                    <td style="border-bottom: 0;">98</td>
                                    <td style="border-bottom: 0;">98</td>
                                    <td style="border-bottom: 0;"> 98</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">2</td>
                                    <td style="border-bottom: 0;">Pendidikan Pancasila dan Kewarganegaraan</td>
                                    <td style="border-bottom: 0;">90</td>
                                    <td style="border-bottom: 0;">92</td>
                                    <td style="border-bottom: 0;"> 91</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">3</td>
                                    <td style="border-bottom: 0;">Bahasa Indonesia</td>
                                    <td style="border-bottom: 0;">90</td>
                                    <td style="border-bottom: 0;">91</td>
                                    <td style="border-bottom: 0;"> 90</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">4</td>
                                    <td style="border-bottom: 0;">Matematika (Umum)</td>
                                    <td style="border-bottom: 0;">100</td>
                                    <td style="border-bottom: 0;">100</td>
                                    <td style="border-bottom: 0;">100</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">5</td>
                                    <td style="border-bottom: 0;">Sejarah Indonesia</td>
                                    <td style="border-bottom: 0;">91</td>
                                    <td style="border-bottom: 0;">93</td>
                                    <td style="border-bottom: 0;"> 92</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">6</td>
                                    <td style="border-bottom: 0;">Bahasa Inggris</td>
                                    <td style="border-bottom: 0;">100</td>
                                    <td style="border-bottom: 0;">100</td>
                                    <td style="border-bottom: 0;">100</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">7</td>
                                    <td style="border-bottom: 0;">Seni Budaya</td>
                                    <td style="border-bottom: 0;">92</td>
                                    <td style="border-bottom: 0;">94</td>
                                    <td style="border-bottom: 0;">93</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">8</td>
                                    <td style="border-bottom: 0;">Pendidikan Jasmani Olahraga dan Kesehatan</td>
                                    <td style="border-bottom: 0;">98</td>
                                    <td style="border-bottom: 0;">96</td>
                                    <td style="border-bottom: 0;"> 97</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">9</td>
                                    <td style="border-bottom: 0;">Prakarya dan Kewirausahaan</td>
                                    <td style="border-bottom: 0;">92</td>
                                    <td style="border-bottom: 0;">94</td>
                                    <td style="border-bottom: 0;">93</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">10</td>
                                    <td style="border-bottom: 0;">Bahasa Jawa</td>
                                    <td style="border-bottom: 0;">90</td>
                                    <td style="border-bottom: 0;">92</td>
                                    <td style="border-bottom: 0;"> 91</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">11</td>
                                    <td style="border-bottom: 0;">Matematika Peminatan</td>
                                    <td style="border-bottom: 0;">100</td>
                                    <td style="border-bottom: 0;">100</td>
                                    <td style="border-bottom: 0;">100</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">12</td>
                                    <td style="border-bottom: 0;">Fisika</td>
                                    <td style="border-bottom: 0;">100</td>
                                    <td style="border-bottom: 0;">100</td>
                                    <td style="border-bottom: 0;">100</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">13</td>
                                    <td style="border-bottom: 0;">Kimia</td>
                                    <td style="border-bottom: 0;">100</td>
                                    <td style="border-bottom: 0;">100</td>
                                    <td style="border-bottom: 0;">100</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">14</td>
                                    <td style="border-bottom: 0;">Biologi</td>
                                    <td style="border-bottom: 0;">100</td>
                                    <td style="border-bottom: 0;">100</td>
                                    <td style="border-bottom: 0;">100</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">15</td>
                                    <td style="border-bottom: 0;">Ekonomi</td>
                                    <td style="border-bottom: 0;">98</td>
                                    <td style="border-bottom: 0;">98</td>
                                    <td style="border-bottom: 0;">98</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

