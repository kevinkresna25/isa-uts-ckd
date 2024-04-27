@extends('layouts.main')

@section('title', 'Dashboard')

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

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <div class="card-title font-weight-bold" id="jadwalkuliah">Jadwal Bidang Studi</div>
                                </div>
                                <div class="card-body pt-3">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="table-listambilmk">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Hari</th>
                                                    <th scope="col">Jam</th>
                                                    <th scope="col">Ruang</th>
                                                    <th scope="col">Kode MK</th>
                                                    <th scope="col">Nama MK</th>
                                                    <th scope="col">KP</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="border-bottom: 0;">Senin</td>
                                                    <td style="border-bottom: 0;">09:45 - 12:30</td>
                                                    <td style="border-bottom: 0;">TG 03.04</td>
                                                    <td style="border-bottom: 0;">1604C441</td>
                                                    <td style="border-bottom: 0;">Cloud Computing</td>
                                                    <td style="border-bottom: 0;">A</td>
                                                </tr>
                                                <tr>
                                                    <td style="border-bottom: 0;">Senin</td>
                                                    <td style="border-bottom: 0;">13:00 - 14:50</td>
                                                    <td style="border-bottom: 0;">TC 04.01A</td>
                                                    <td style="border-bottom: 0;">1604C033</td>
                                                    <td style="border-bottom: 0;">Database</td>
                                                    <td style="border-bottom: 0;">C</td>
                                                </tr>
                                                <tr>
                                                    <td style="border-bottom: 0;">Selasa</td>
                                                    <td style="border-bottom: 0;">07:00 - 09:45</td>
                                                    <td style="border-bottom: 0;">TF 03.02</td>
                                                    <td style="border-bottom: 0;">1604C045</td>
                                                    <td style="border-bottom: 0;">Information Security and Assurance</td>
                                                    <td style="border-bottom: 0;">B</td>
                                                </tr>
                                                <tr>
                                                    <td style="border-bottom: 0;">Selasa</td>
                                                    <td style="border-bottom: 0;">10:40 - 12:30</td>
                                                    <td style="border-bottom: 0;">TF 02.02</td>
                                                    <td style="border-bottom: 0;">1600C106</td>
                                                    <td style="border-bottom: 0;">Aljabar Linier</td>
                                                    <td style="border-bottom: 0;">B</td>
                                                </tr>
                                                <tr>
                                                    <td style="border-bottom: 0;">Rabu</td>
                                                    <td style="border-bottom: 0;">07:00 - 09:45</td>
                                                    <td style="border-bottom: 0;">TB 01.01C</td>
                                                    <td style="border-bottom: 0;">1604C043</td>
                                                    <td style="border-bottom: 0;">Web Programming</td>
                                                    <td style="border-bottom: 0;">B</td>
                                                </tr>
                                                <tr>
                                                    <td style="border-bottom: 0;">Rabu</td>
                                                    <td style="border-bottom: 0;">13:00 - 15:45</td>
                                                    <td style="border-bottom: 0;">TB 01.01C</td>
                                                    <td style="border-bottom: 0;">1604C046</td>
                                                    <td style="border-bottom: 0;">Data Science Programming</td>
                                                    <td style="border-bottom: 0;">E</td>
                                                </tr>
                                                <tr>
                                                    <td style="border-bottom: 0;">Rabu</td>
                                                    <td style="border-bottom: 0;">15:45 - 17:35</td>
                                                    <td style="border-bottom: 0;">TC 04.01A</td>
                                                    <td style="border-bottom: 0;">1604C033</td>
                                                    <td style="border-bottom: 0;">Database</td>
                                                    <td style="border-bottom: 0;">C</td>
                                                </tr>
                                                <tr>
                                                    <td style="border-bottom: 0;">Kamis</td>
                                                    <td style="border-bottom: 0;">09:45 - 12:30</td>
                                                    <td style="border-bottom: 0;">TF 03.03</td>
                                                    <td style="border-bottom: 0;">1604C042</td>
                                                    <td style="border-bottom: 0;">AI Fundamental</td>
                                                    <td style="border-bottom: 0;">A</td>
                                                </tr>
                                                <tr>
                                                    <td style="border-bottom: 0;">Kamis</td>
                                                    <td style="border-bottom: 0;">13:00 - 15:45</td>
                                                    <td style="border-bottom: 0;">LA 02.06B</td>
                                                    <td style="border-bottom: 0;">1604C044</td>
                                                    <td style="border-bottom: 0;">Distributed Programming</td>
                                                    <td style="border-bottom: 0;">A</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

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
