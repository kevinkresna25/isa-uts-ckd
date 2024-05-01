@extends('layouts.main')

@section('title', 'Peminjaman Buku')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/pustakapeminjamanbuku">Peminjaman Buku</a></li>
@endsection

@section('card')
    @include('umum.datainfo')

    <form id="form" method="POST" action="/pustakapeminjamanbuku" enctype="multipart/form-data">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="card-title font-weight-bold">Peminjaman Buku</div>
                    </div>
                    <div class="card-body pt-3">

                        <div class="row pr-2">
                            <div class="col-md-12">
                                <label for="input-unitCode">Buku ID : <span class="text-danger">*</span></label>
                                <div class="input-menu mb-3">
                                    <select name="unitCode" class="form-control" id="input-unitCode-select">
                                        <option value="" selected> Pilih Unit</option>
                                        <option value="623000" id="option-unitCode-623000">
                                            Direktorat Pusat Pengembangan Kurikulum Pembelajaran - 623000
                                        <option value="605000" id="option-unitCode-605000">
                                            Direktorat Perpustakaan - 605000
                                        <option value="608000" id="option-unitCode-608000">
                                            Direktorat Keuangan - 608000
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="input-title">Judul Buku : <span class="text-danger">*</span></label>
                                <div class="input-menu mb-12">
                                    <input type="text" class="form-control" name="title" id="input-title"
                                        value="" maxlength="100" required>
                                </div>
                            </div>
                        </div>

                        <div class="row pr-2">
                            <div class="col-md-12">
                                <label for="input-unitCode">Siswa ID : <span class="text-danger">*</span></label>
                                <div class="input-menu mb-3">
                                    <select name="unitCode" class="form-control" id="input-unitCode-select">
                                        <option value="" selected> Pilih Unit</option>
                                        <option value="623000" id="option-unitCode-623000">
                                            Direktorat Pusat Pengembangan Kurikulum Pembelajaran - 623000
                                        <option value="605000" id="option-unitCode-605000">
                                            Direktorat Perpustakaan - 605000
                                        <option value="608000" id="option-unitCode-608000">
                                            Direktorat Keuangan - 608000
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row pr-2">
                            <div class="col-md-12">
                                <label for="filter-start-date">Tanggal Peminjaman : <span class="text-danger">*</label>
                                <div class="input-group align-items-center" style="gap: 10px;">
                                    <input type="text" id="filter-start-date" name="start-date" class="form-control"
                                        style="color:black;" required="" disabled>
                                    <div>s/d</div>
                                    <input type="text" id="filter-end-date" name="end-date" class="form-control"
                                        style="color:black;" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row"> <!-- Tombol -->
            <div class="col-md-4 mb-4">
                <button type="button" onclick="window.showConfirmationText();" class="btn btn-primary btn-lg w-100"><i
                        data-feather="check-circle" class="mr-2"></i>SIMPAN</button>
            </div>
        </div>

    </form>
@endsection

@section('script')
    <script>
        function showConfirmationText_f() {
            if (!$("#form")[0].reportValidity()) {
                return false;
            }
            Swal.fire({
                title: "Apakah Anda yakin?",
                html: "Konfirmasi menyimpan data peminjaman buku: <br>" + $("#input-title").val(),
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
        window.showConfirmationText = showConfirmationText_f;

        $(document).ready(function() {
            $('#input-activityType, #input-unitCode-select, #input-typeId-select').select2({
                placeholder: "Pilih Unit",
                allowClear: true
            });
        });

        // $(document).ready(function() {
        //     var currentDate = new Date();
        //     var dateString = ("0" + currentDate.getDate()).slice(-2) + '-' +
        //         ("0" + (currentDate.getMonth() + 1)).slice(-2) + '-' +
        //         currentDate.getFullYear();

        //     $('#filter-start-date, #filter-end-date').datepicker({
        //         dateFormat: 'dd-mm-yy'
        //     });

        //     $('#filter-start-date').datepicker("setDate", new Date());
        //     $('#filter-end-date').datepicker("setDate", new Date());

        //     $('#filter-start-date').val(dateString);
        //     $('#filter-end-date').val(dateString);
        // });

        $(document).ready(function() {
            $('#filter-start-date, #filter-end-date').datepicker({
                dateFormat: 'dd-mm-yy' // Mengatur format tanggal yang benar
            });

            var currentDate = new Date();
            $('#filter-start-date, #filter-end-date').datepicker("setDate", currentDate); // Set tanggal saat ini
        });
    </script>
@endsection
