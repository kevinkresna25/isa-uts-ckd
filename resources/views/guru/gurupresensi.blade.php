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
                    <div class="card-title font-weight-bold">Data Mahasiswa</div>
                </div>
                <div class="card-body pt-3">

                    <div class="table-responsive">
                        <table class="table table-hover" id="table-listambilmk">
                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">Kode MK</th>
                                    <th scope="col">Nama MK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border-bottom: 0; text-align: center; vertical-align: middle;"
                                        rowspan="2">1</td>
                                    <td style="border-bottom: 0;">1600C106</td>
                                    <td style="border-bottom: 0;">Aljabar Linier</td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <a data-toggle="modal" data-target="#modalUjian1600C10620232">
                                            NTS: - <span class="text-primary">(H)</span> NAS: - <span
                                                class="text-primary">(P)</span></a><a></a>
                                    </td>
                                    <td align="left">
                                        NA: - Nisbi: -
                                    </td>
                                    <td></td>
                                    <td colspan="2" align="left">
                                        Kehadiran: AIHHHHH &nbsp; Progress: 6/14 (42.86%) <br><progress value="6"
                                            max="14" class="w-100"></progress>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0; text-align: center; vertical-align: middle;"
                                        rowspan="2">2</td>
                                    <td style="border-bottom: 0;">1604C033</td>
                                    <td style="border-bottom: 0;">Database</td>
                                    <td style="border-bottom: 0;">C</td>
                                    <td style="border-bottom: 0;"><a href="#" data-toggle="modal"
                                            data-target="#modalSlideUp1604C03320232">Detail Riwayat</a></td>
                                    <td style="border-bottom: 0;">
                                        <div class="align-self-center">
                                            <a href="/index.php/akademikmhspresensikuliah_classmate/courseCode~1604C033/parallelClass~C/semester~20232"
                                                class="btn btn-primary"><i class="fa fa-address-book mr-2"></i>Anggota
                                                Kelas</a>
                                            <button class="btn btn-secondary" disabled="" style="cursor: not-allowed;"><i
                                                    class="fa fa-close mr-2"></i>Kelas Belum Dibuka</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td align="left">
                                        <a data-toggle="modal" data-target="#modalUjian1604C03320232">
                                            NTS: - <span class="text-primary">(P)</span> NAS: - <span
                                                class="text-primary">(P)</span></a><a></a>
                                    </td>
                                    <td align="left">
                                        NA: - Nisbi: -
                                    </td>
                                    <td></td>
                                    <td colspan="2" align="left">
                                        Kehadiran: HHHHHHHHHHHHHH &nbsp; Progress: 14/28 (50.00%) <br><progress
                                            value="14" max="28" class="w-100"></progress>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0; text-align: center; vertical-align: middle;"
                                        rowspan="2">3</td>
                                    <td style="border-bottom: 0;">1604C042</td>
                                    <td style="border-bottom: 0;">AI Fundamental</td>
                                    <td style="border-bottom: 0;">A</td>
                                    <td style="border-bottom: 0;"><a href="#" data-toggle="modal"
                                            data-target="#modalSlideUp1604C04220232">Detail Riwayat</a></td>
                                    <td style="border-bottom: 0;">
                                        <div class="align-self-center">
                                            <a href="/index.php/akademikmhspresensikuliah_classmate/courseCode~1604C042/parallelClass~A/semester~20232"
                                                class="btn btn-primary"><i class="fa fa-address-book mr-2"></i>Anggota
                                                Kelas</a>
                                            <button class="btn btn-secondary" disabled="" style="cursor: not-allowed;"><i
                                                    class="fa fa-close mr-2"></i>Kelas Belum Dibuka</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td align="left">
                                        <a data-toggle="modal" data-target="#modalUjian1604C04220232">
                                            NTS: - <span class="text-primary">(H)</span> NAS: - <span
                                                class="text-primary">(P)</span></a><a></a>
                                    </td>
                                    <td align="left">
                                        NA: - Nisbi: -
                                    </td>
                                    <td></td>
                                    <td colspan="2" align="left">
                                        Kehadiran: HHHHHHH &nbsp; Progress: 7/14 (50.00%) <br><progress value="7"
                                            max="14" class="w-100"></progress>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0; text-align: center; vertical-align: middle;"
                                        rowspan="2">4</td>
                                    <td style="border-bottom: 0;">1604C043</td>
                                    <td style="border-bottom: 0;">Web Programming</td>
                                    <td style="border-bottom: 0;">B</td>
                                    <td style="border-bottom: 0;"><a href="#" data-toggle="modal"
                                            data-target="#modalSlideUp1604C04320232">Detail Riwayat</a></td>
                                    <td style="border-bottom: 0;">
                                        <div class="align-self-center">
                                            <a href="/index.php/akademikmhspresensikuliah_classmate/courseCode~1604C043/parallelClass~B/semester~20232"
                                                class="btn btn-primary"><i class="fa fa-address-book mr-2"></i>Anggota
                                                Kelas</a>
                                            <button class="btn btn-secondary" disabled=""
                                                style="cursor: not-allowed;"><i class="fa fa-close mr-2"></i>Kelas Belum
                                                Dibuka</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td align="left">
                                        <a data-toggle="modal" data-target="#modalUjian1604C04320232">
                                            NTS: - <span class="text-primary">(H)</span> NAS: - <span
                                                class="text-primary">(P)</span></a><a></a>
                                    </td>
                                    <td align="left">
                                        NA: - Nisbi: -
                                    </td>
                                    <td></td>
                                    <td colspan="2" align="left">
                                        Kehadiran: HHHHHHH &nbsp; Progress: 7/14 (50.00%) <br><progress value="7"
                                            max="14" class="w-100"></progress>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0; text-align: center; vertical-align: middle;"
                                        rowspan="2">5</td>
                                    <td style="border-bottom: 0;">1604C044</td>
                                    <td style="border-bottom: 0;">Distributed Programming</td>
                                    <td style="border-bottom: 0;">A</td>
                                    <td style="border-bottom: 0;"><a href="#" data-toggle="modal"
                                            data-target="#modalSlideUp1604C04420232">Detail Riwayat</a></td>
                                    <td style="border-bottom: 0;">
                                        <div class="align-self-center">
                                            <a href="/index.php/akademikmhspresensikuliah_classmate/courseCode~1604C044/parallelClass~A/semester~20232"
                                                class="btn btn-primary"><i class="fa fa-address-book mr-2"></i>Anggota
                                                Kelas</a>
                                            <button class="btn btn-secondary" disabled=""
                                                style="cursor: not-allowed;"><i class="fa fa-close mr-2"></i>Kelas Belum
                                                Dibuka</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td align="left">
                                        <a data-toggle="modal" data-target="#modalUjian1604C04420232">
                                            NTS: - <span class="text-primary">(P)</span> NAS: - <span
                                                class="text-primary">(P)</span></a><a></a>
                                    </td>
                                    <td align="left">
                                        NA: - Nisbi: -
                                    </td>
                                    <td></td>
                                    <td colspan="2" align="left">
                                        Kehadiran: HHHHHHH &nbsp; Progress: 7/14 (50.00%) <br><progress value="7"
                                            max="14" class="w-100"></progress>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0; text-align: center; vertical-align: middle;"
                                        rowspan="2">6</td>
                                    <td style="border-bottom: 0;">1604C045</td>
                                    <td style="border-bottom: 0;">Information Security and Assurance</td>
                                    <td style="border-bottom: 0;">B</td>
                                    <td style="border-bottom: 0;"><a href="#" data-toggle="modal"
                                            data-target="#modalSlideUp1604C04520232">Detail Riwayat</a></td>
                                    <td style="border-bottom: 0;">
                                        <div class="align-self-center">
                                            <a href="/index.php/akademikmhspresensikuliah_classmate/courseCode~1604C045/parallelClass~B/semester~20232"
                                                class="btn btn-primary"><i data-feather='home'></i>Anggota
                                                Kelas</a>
                                            <button class="btn btn-secondary" disabled=""
                                                style="cursor: not-allowed;"><i class="fa fa-close mr-2"></i>Kelas Belum
                                                Dibuka</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td align="left">
                                        <a data-toggle="modal" data-target="#modalUjian1604C04520232">
                                            NTS: - <span class="text-primary">(P)</span> NAS: - <span
                                                class="text-primary">(P)</span></a><a></a>
                                    </td>
                                    <td align="left">
                                        NA: - Nisbi: -
                                    </td>
                                    <td></td>
                                    <td colspan="2" align="left">
                                        Kehadiran: HHHHHHH &nbsp; Progress: 7/14 (50.00%) <br><progress value="7"
                                            max="14" class="w-100"></progress>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0; text-align: center; vertical-align: middle;"
                                        rowspan="2">7</td>
                                    <td style="border-bottom: 0;">1604C046</td>
                                    <td style="border-bottom: 0;">Data Science Programming</td>
                                    <td style="border-bottom: 0;">E</td>
                                    <td style="border-bottom: 0;"><a href="#" data-toggle="modal"
                                            data-target="#modalSlideUp1604C04620232">Detail Riwayat</a></td>
                                    <td style="border-bottom: 0;">
                                        <div class="align-self-center">
                                            <a href="/index.php/akademikmhspresensikuliah_classmate/courseCode~1604C046/parallelClass~E/semester~20232"
                                                class="btn btn-primary"><i class="fa fa-address-book mr-2"></i>Anggota
                                                Kelas</a>
                                            <button class="btn btn-secondary" disabled=""
                                                style="cursor: not-allowed;"><i class="fa fa-close mr-2"></i>Kelas Belum
                                                Dibuka</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td align="left">
                                        <a data-toggle="modal" data-target="#modalUjian1604C04620232">
                                            NTS: - <span class="text-primary">(P)</span> NAS: - <span
                                                class="text-primary">(P)</span></a><a></a>
                                    </td>
                                    <td align="left">
                                        NA: - Nisbi: -
                                    </td>
                                    <td></td>
                                    <td colspan="2" align="left">
                                        Kehadiran: HHHHHHH &nbsp; Progress: 7/14 (50.00%) <br><progress value="7"
                                            max="14" class="w-100"></progress>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 0; text-align: center; vertical-align: middle;"
                                        rowspan="2">8</td>
                                    <td style="border-bottom: 0;">1604C441</td>
                                    <td style="border-bottom: 0;">Cloud Computing</td>
                                    <td style="border-bottom: 0;">A</td>
                                    <td style="border-bottom: 0;"><a href="#" data-toggle="modal"
                                            data-target="#modalSlideUp1604C44120232">Detail Riwayat</a></td>
                                    <td style="border-bottom: 0;">
                                        <div class="align-self-center">
                                            <a href="/index.php/akademikmhspresensikuliah_classmate/courseCode~1604C441/parallelClass~A/semester~20232"
                                                class="btn btn-primary"><i class="fa fa-address-book mr-2"></i>Anggota
                                                Kelas</a>
                                            <button class="btn btn-secondary" disabled=""
                                                style="cursor: not-allowed;"><i class="fa fa-close mr-2"></i>Kelas Belum
                                                Dibuka</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td align="left">
                                        <a data-toggle="modal" data-target="#modalUjian1604C44120232">
                                            NTS: - <span class="text-primary">(P)</span> NAS: - <span
                                                class="text-primary">(P)</span></a><a></a>
                                    </td>
                                    <td align="left">
                                        NA: - Nisbi: -
                                    </td>
                                    <td></td>
                                    <td colspan="2" align="left">
                                        Kehadiran: HHHHHH &nbsp; Progress: 6/14 (42.86%) <br><progress value="6"
                                            max="14" class="w-100"></progress>
                                    </td>
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
@endsection
