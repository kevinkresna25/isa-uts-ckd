@extends('layouts.main')

@section('title', 'Penilaian')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/penilaian">Penilaian</a></li>
@endsection

@section('card')
    @include('umum.datainfo')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="card-title font-weight-bold" id="jadwalkuliah">Input Rapor</div>
                </div>
                <div class="card-body pt-3">
                    <div class="table-responsive">
                        <table class="table table-hover" id="table-listambilmk">
                            <tbody>
                                <tr>
                                    <td style="border-bottom: 0;">Pilih Kelas</td>
                                    <td><input type="text" name="nama"></td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0;">Pilih Mata Pelajaran</td>
                                    <td><input type="text" name="nama"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="card-title font-weight-bold" id="jadwalkuliah">Input Nilai Siswa</div>
                </div>
                <div class="card-body pt-3">
                    <div class="table-responsive">
                        <table class="table table-hover" id="table-listambilmk">
                            <thead>
                                <tr>
                                    <th scope="row">No </th>
                                    <th scope="row">Nama</th>
                                    <th scope="row">NISN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border-bottom: 0;">1</td>
                                    <td style="border-bottom: 0;">Lloyd Montgomery Garmadon</td>
                                    <td style="border-bottom: 0;">123456789</td>
                                    <td>
                                        <button onclick="toggleTable('edit')" type="button"
                                            class="btn btn-primary">Edit</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
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
    </div>
@endsection

@section('script')
    <script>
        function toggleTable(tableId) {
            var table = document.getElementById(tableId);
            if (table.style.display === "none") {
                table.style.display = "block";
            } else {
                table.style.display = "none";
            }
        }
    </script>
@endsection
