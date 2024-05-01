@extends('layouts.main')

@section('title', 'Pencarian Profil')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/pencarianprofil">Pencarian Profil</a></li>
@endsection


@section('card')
    {{-- PENCARIAN --}}
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header border-bottom">
                    <div class="card-title font-weight-bold">Filter</div>
                </div>
                <div class="card-body pt-3">
                    {{-- <form method="POST" action="{{ route('siswa.search') }}"> --}}
                    <form>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="search-npk">ID :</label>
                                <input name="id" id="search-id" class="form-control" value=""
                                    placeholder="'1, 2, 3, 4'">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="search-name">Nama :</label>
                                <input name="name" id="search-name" class="form-control" value=""
                                    placeholder="Bambang Darmono">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="search-type">Jenis Peran :</label>
                                <select class="form-control select2" name="type" id="search-type">
                                    <option value="">Semua Jenis Peran</option>
                                    <option value="">Siswa</option>
                                    <option value="">Guru</option>
                                    <option value="">Pustakawan</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="search-bdu">Unit Bidang/Kelas :</label>
                                <select class="form-control select2" name="unit" id="search-unit">
                                    <option value="">Semua Unit</option>
                                    <option value="">Matematika</option>
                                    <option value="">Biologi</option>
                                    <option value="">Bahasa Indonesia</option>
                                    <option value="">Perpustakaan</option>
                                    <option value="">10A</option>
                                    <option value="">11A</option>
                                    <option value="">12A</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-100 btn-lg"><i data-feather="search"
                                    class="mr-2"></i>Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- HASIL TAMPILAN CARI --}}
    <div class="card" style="display: none;">
        <div class="card-header border-bottom">
            <div class="card-title font-weight-bold">Daftar Profil</div>
        </div>
        <div class="card-body pt-2">

            <div class="table-responsive my-2">
                <table id="tables" class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center font-weight-bold" width="5%">No.</th>
                            <th class="text-center font-weight-bold" width="10%">ID</th>
                            <th class="text-center font-weight-bold">Nama</th>
                            <th class="text-center font-weight-bold">Peran</th>
                            <th class="text-center font-weight-bold">Unit Bidang/Kelas</th>
                            <th class="text-center font-weight-bold">Email</th>
                        </tr>
                    </thead>
                    <tbody id="table_container" style="display: none;">
                        @forelse ($siswa as $index => $s)
                            <tr>
                                <td class="px-3 py-2 text-center">{{ $index + 1 }}</td>
                                <td class="px-3 py-2 text-center">{{ $s->idSiswa }}</td>
                                <td class="px-3 py-2 text-center">{{ $s->nama }}</td>
                                <td class="px-3 py-2 text-center">{{ $s->jenis_peran }}</td>
                                <td class="px-3 py-2 text-center">{{ $s->tKelompokKelas_id }}</td>
                                <td class="px-3 py-2 text-center"><a
                                        href="mailto:{{ $s->email }}">{{ $s->email }}</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada data yang ditemukan.</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>


            {{-- <div class="table-responsive my-2">
                <table id="tables" class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center font-weight-bold" width="5%">No.</th>
                            <th class="text-center font-weight-bold" width="10%">ID</th>
                            <th class="text-center font-weight-bold">Nama</th>
                            <th class="text-center font-weight-bold">Peran</th>
                            <th class="text-center font-weight-bold">Unit Bidang/Kelas</th>
                            <th class="text-center font-weight-bold">Email</th>
                        </tr>
                    </thead>
                    <tbody id="table_container">
                        <tr>
                            <td class="px-3 py-2 text-center">1</td>
                            <td class="px-3 py-2 text-center">34</td>
                            <td class="px-3 py-2 text-center">Moch. Ali Syamsudin, S.S.</td>
                            <td class="px-3 py-2 text-center">Guru</td>
                            <td class="px-3 py-2 text-center">Matematika</td>
                            <td class="px-3 py-2 text-center"><a
                                    href="mailto:ali@staff.ubaya.ac.id">ali@staff.ubaya.ac.id</a></td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 text-center">2</td>
                            <td class="px-3 py-2 text-center">45</td>
                            <td class="px-3 py-2 text-center">Moh. Dwi Rizaludin Akbar, S.T.</td>
                            <td class="px-3 py-2 text-center">Guru</td>
                            <td class="px-3 py-2 text-center">IPA</td>
                            <td class="px-3 py-2 text-center"><a
                                    href="mailto:rizaludinakbar@staff.ubaya.ac.id">rizaludinakbar@staff.ubaya.ac.id</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 text-center">3</td>
                            <td class="px-3 py-2 text-center">15</td>
                            <td class="px-3 py-2 text-center">Lutfiani</td>
                            <td class="px-3 py-2 text-center">Pustakawan</td>
                            <td class="px-3 py-2 text-center">Perpustakaan</td>
                            <td class="px-3 py-2 text-center"><a
                                    href="mailto:rizaludinakbar@staff.ubaya.ac.id">rizaludinakbar@staff.ubaya.ac.id</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> --}}
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                allowClear: true
            });
        });

        function toggleTable(tableId) {
            var tbody = document.getElementById(tableId);
            if (#t.style.display === "none") {
                table.style.display = "block";
            } else {
                table.style.display = "none";
            }
        }
    </script>
@endsection
