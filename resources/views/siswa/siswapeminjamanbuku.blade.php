@extends('layouts.main')

@section('title', 'Peminjaman Buku')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/peminjamanbuku">Peminjaman Buku</a></li>
@endsection

@section('card')
    <div class="container-fluid container-fixed-lg bg-white">
        <div class="card card-transparent">
            <div class="card-header">
                <div class="card-title">
                    <h6>Peminjaman Buku</h6>
                </div>
            </div>
            <div class="card-body">

                <div class="row">

                    <div class="col-md-10">
                        <form id="form">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Status</label>
                                        <select class="form-control select2" name="statusId" id="input-status-select">
                                            <option value="" selected>Semua Status</option>
                                            <option value="1">Sedang Dipinjam</option>
                                            <option value="2">Sudah Kembalikan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-2 d-flex">
                                        <button type="submit" class="btn btn-primary btn-lg mb-3">
                                            <i data-feather='search' class="mr-2"></i>Go
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID Pinjam</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Id Buku</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tanggal Peminjaman</th>
                                <th scope="col">Tanggal Pengembalian</th>
                            </tr>
                        </thead>

                        {{-- GUNAKAN YANG INI SAMBUNG KE KONTROLER --}}
                        {{-- <tbody>
                            @if($buku->count() > 0)
                                @foreach($buku as $item)
                                    <tr>
                                        <td style="border-bottom: 0; text-align: center; vertical-align: middle;">
                                            <strong>{{ $item->id }}</strong>
                                        </td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->kode_buku }}</td>
                                        <td>
                                            <span class="btn {{ $item->status == 'Sudah Kembalikan' ? 'btn-success' : 'btn-warning' }}">
                                                {{ $item->status }}
                                            </span>
                                        </td>
                                        <td>{{ $item->tanggal_peminjaman }}</td>
                                        <td>{{ $item->tanggal_pengembalian }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" style="text-align: center;">Tidak ada data peminjaman buku.</td>
                                </tr>
                            @endif
                        </tbody> --}}

                        {{-- CONTOH TAMPILAN --}}
                        <tbody>
                            <tr>
                                <td style="text-align: center; vertical-align: middle;">
                                    <strong>18160</strong>
                                </td>
                                <td>Marlin Kundang Kechil</td>
                                <td>D0014</td>
                                <td><span class="btn btn-success">Sudah Kembalikan</span></td>
                                <td>Selasa, 30 April 2024</td>
                                <td>Rabu, 1 May 2024</td>
                            </tr>
                            <tr>
                                <td style="text-align: center; vertical-align: middle;">
                                    <strong>18161</strong>
                                </td>
                                <td>Marlin Kundang Marathon</td>
                                <td>D0015</td>
                                <td><span class="btn btn-warning">Sedang Dipinjam</span></td>
                                <td>Rabu, 1 May 2024</td>
                                <td>Kamis, 2 May 2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
    </script>
@endsection
