@extends('layouts.main')

@section('title', 'Peminjaman Buku')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/pustakapeminjamanbuku">Peminjaman Buku</a></li>
@endsection

@section('card')
    @include('umum.datainfo')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form id="form" method="POST" action="{{ route('peminjaman.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="card-title font-weight-bold">Peminjaman Buku</div>
                    </div>
                    <div class="card-body pt-3">

                        <div class="row pr-2">
                            <div class="col-md-12">
                                <label for="input-buku">Buku ID - Nama Buku : <span class="text-danger">*</span></label>
                                <div class="input-menu mb-3">
                                    <select name="tBuku_idBuku" class="form-control" id="input-buku">
                                        <option value="" selected> Pilih Buku</option>
                                        @foreach ($tbuku as $buku)
                                            <option value="{{ $buku->idBuku }}">{{ $buku->idBuku }} - {{ $buku->namaBuku }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row pr-2">
                            <div class="col-md-12">
                                <label for="input-siswa">Siswa ID : <span class="text-danger">*</span></label>
                                <div class="input-menu mb-3">
                                    <select name="tSiswa_idSiswa" class="form-control" id="input-siswa">
                                        <option value="" selected> Pilih Siswa</option>
                                        @foreach ($tsiswa as $siswa)
                                            <option value="{{ $siswa->idSiswa }}">{{ $siswa->idSiswa }} -
                                                {{ $siswa->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row pr-2">
                            <div class="col-md-12">
                                <label for="input-peminjaman">Tanggal Peminjaman : <span
                                        class="text-danger">*</span></label>
                                <div class="input-group align-items-center" style="gap: 10px;">
                                    <input type="date" id="input-peminjaman" name="tanggalPinjam" class="form-control"
                                        required="">
                                    <div>s/d</div>
                                    <input type="date" id="input-pengembalian" name="tanggalSeharusnyaKembali"
                                        class="form-control" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <button type="button" onclick="showConfirmationText();" class="btn btn-primary btn-lg w-100"><i
                        data-feather="check-circle" class="mr-2"></i>SIMPAN</button>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script>
        function showConfirmationText() {
            if (!$("#form")[0].reportValidity()) {
                return false;
            }
            Swal.fire({
                title: "Apakah Anda yakin?",
                html: "Konfirmasi menyimpan data peminjaman buku",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Ya",
                cancelButtonText: "Tidak",
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    $("#form").submit();
                }
            });
        }
    </script>
@endsection
