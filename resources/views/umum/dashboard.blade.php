@extends('layouts.main')

@section('card')
    <div class="row">
        <div class="col-lg-12">
            <!-- START card -->
            <div class="card card-default">
                <div class="card-header ">
                    <div class="card-title">
                        <h4>Dashboard</h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="card-body">
                    <h5>
                        Selamat datang di SMA Rungkad 01
                    </h5>
                    <br>

                    {{-- TEST --}}

                    <div class="col-md-6 mt-3">
                        <label for="filter-start-date">Rentang Tanggal :</label>
                        <div class="input-group align-items-center" style="gap: 10px;">
                            <input type="text" id="filter-start-date" name="start-date" class="form-control"
                                value="29-04-2024" style="color:black;" required="">
                            <div>s/d</div>
                            <input type="text" id="filter-end-date" name="end-date" class="form-control"
                                value="29-04-2024" style="color:black;" required="">
                        </div>
                    </div>

                    {{-- END TEST --}}

                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <div class="card-title font-weight-bold" id="jadwalkuliah">Jadwal Bidang Studi</div>
                                </div>

                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <table style="height: 400px;" width="800">
                                        <tbody>
                                            <tr style="height: 32px;">
                                                <td style="width: 125px; text-align: center; height: 32px;"><strong>Jadwal
                                                        Kelas</strong></td>
                                                <td style="width: 125px; text-align: center; height: 32px;">
                                                    <strong>Senin</strong>
                                                </td>
                                                <td style="width: 125px; text-align: center; height: 32px;">
                                                    <strong>Selasa</strong>
                                                </td>
                                                <td style="width: 125px; text-align: center; height: 32px;">
                                                    <strong>Rabu</strong>
                                                </td>
                                                <td style="width: 125px; text-align: center; height: 32px;">
                                                    <strong>Kamis</strong>
                                                </td>
                                                <td style="width: 125.719px; text-align: center; height: 32px;">
                                                    <strong>Jumat</strong>
                                                </td>
                                            </tr>
                                            <tr style="height: 32px;">
                                                <td style="width: 125px; text-align: center; height: 32px;"><strong>07.30 -
                                                        08.15</strong></td>
                                                <td style="width: 125px; text-align: center; height: 32px;">senin1</td>
                                                <td style="width: 125px; text-align: center; height: 32px;">selasa1</td>
                                                <td style="width: 125px; text-align: center; height: 32px;">rabu1</td>
                                                <td style="width: 125px; text-align: center; height: 32px;">kamis1</td>
                                                <td style="width: 125.719px; text-align: center; height: 32px;">jumat1</td>
                                            </tr>
                                            <tr style="height: 32px;">
                                                <td style="width: 125px; text-align: center; height: 32px;"><strong>08.15 -
                                                        09.00</strong></td>
                                                <td style="width: 125px; text-align: center; height: 32px;">senin2</td>
                                                <td style="width: 125px; text-align: center; height: 32px;">selasa2</td>
                                                <td style="width: 125px; text-align: center; height: 32px;">rabu2</td>
                                                <td style="width: 125px; text-align: center; height: 32px;">kamis2</td>
                                                <td style="width: 125.719px; text-align: center; height: 32px;">jumat2</td>
                                            </tr>
                                            <tr style="height: 32px;">
                                                <td style="width: 125px; text-align: center; height: 32px;"><strong>09.00 -
                                                        09.15</strong></td>
                                                <td style="width: 125px; text-align: center; height: 32px;" colspan="5">
                                                    <strong>Jam Istirahat</strong>
                                                </td>
                                            </tr>
                                            <tr style="height: 32px;">
                                                <td style="width: 125px; text-align: center; height: 32px;"><strong>09.15 -
                                                        10.00</strong></td>
                                                <td style="width: 125px; text-align: center; height: 32px;">senin3</td>
                                                <td style="width: 125px; text-align: center; height: 32px;">selasa3</td>
                                                <td style="width: 125px; text-align: center; height: 32px;">rabu3</td>
                                                <td style="width: 125px; text-align: center; height: 32px;">kamis3</td>
                                                <td style="width: 125.719px; text-align: center; height: 32px;">jumat3</td>
                                            </tr>
                                            <tr style="height: 32px;">
                                                <td style="width: 125px; text-align: center; height: 32px;"><strong>10.00 -
                                                        10.45</strong></td>
                                                <td style="width: 125px; text-align: center; height: 32px;">senin4</td>
                                                <td style="width: 125px; text-align: center; height: 32px;">selasa4</td>
                                                <td style="width: 125px; text-align: center; height: 32px;">rabu4</td>
                                                <td style="width: 125px; text-align: center; height: 32px;">kamis4</td>
                                                <td style="width: 125.719px; text-align: center; height: 32px;">jumat4</td>
                                            </tr>
                                            <tr style="height: 32.2344px;">
                                                <td style="width: 125px; text-align: center; height: 32.2344px;">
                                                    <strong>10.45 - 11.30</strong>
                                                </td>
                                                <td style="width: 125px; text-align: center; height: 32.2344px;">senin5</td>
                                                <td style="width: 125px; text-align: center; height: 32.2344px;">selasa5
                                                </td>
                                                <td style="width: 125px; text-align: center; height: 32.2344px;">rabu5</td>
                                                <td style="width: 125px; text-align: center; height: 32.2344px;">kamis5</td>
                                                <td style="width: 125.719px; text-align: center; height: 32.2344px;">jumat5
                                                </td>
                                            </tr>
                                            <tr style="height: 32px;">
                                                <td style="width: 125px; text-align: center; height: 32px;"><strong>11.30 -
                                                        11.55</strong></td>
                                                <td style="width: 125px; text-align: center; height: 32px;" colspan="5">
                                                    <strong>Jam Istirahat</strong>
                                                </td>
                                            </tr>
                                            <tr style="height: 32px;">
                                                <td style="width: 125px; text-align: center; height: 32px;"><strong>11.55 -
                                                        12.00</strong></td>
                                                <td style="width: 125px; text-align: center; height: 32px;" colspan="5">
                                                    <strong>Persiapan Pulang</strong>
                                                </td>
                                            </tr>
                                            <tr style="height: 32px;">
                                                <td style="width: 125px; text-align: center; height: 32px;"><strong>12.15 -
                                                        13.15</strong></td>
                                                <td style="width: 125px; text-align: center; height: 32px;">senin6</td>
                                                <td style="width: 125px; text-align: center; height: 32px;">selasa6</td>
                                                <td style="width: 125px; text-align: center; height: 32px;">rabu6</td>
                                                <td style="width: 125px; text-align: center; height: 32px;">kamis6</td>
                                                <td style="width: 125.719px; text-align: center; height: 32px;">jumat6</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- END card -->
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#filter-start-date, #filter-end-date').datepicker({
                dateFormat: 'dd-mm-yy' // Format tanggal sesuai kebutuhan
            });
        });
        $('#filter-start-date, #filter-end-date').datepicker({
            format: 'dd-mm-yy'
        });
    </script>
@endsection
