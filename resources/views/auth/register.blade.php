<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/x-icon" href="/favicon.png">
    <meta name="description" content="My UBAYA">
    <meta name="author" content="Cemazz Ko Deck Corp.">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="pages/css/themes/icon.css" rel="stylesheet">
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet">
    <link class="main-stylesheet" href="pages/css/themes/light.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
</head>

<body class="fixed-header menu-pin">
    <!-- Content -->
    <div class="login-wrapper" style="background: url('../gradient-bg.png');">
        {{-- <!-- START Register Background Pic Wrapper-->
        <div class="bg-pic">
            <!-- START Background Caption-->

            <!-- END Background Caption-->
        </div>
        <!-- END Register Background Pic Wrapper--> --}}
        <!-- START Register Right Container-->
        <div class="login-container bg-white" style="overflow-y: scroll;">
            <div class="p-t-50 d-none d-sm-block"></div>
            <div class="p-l-50 p-r-50 p-t-0 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
                <img src="https://my.ubaya.ac.id/assets/img/web_banner.png" alt="logo"
                    data-src="https://my.ubaya.ac.id/assets/img/web_banner.png"
                    data-src-retina="https://my.ubaya.ac.id/assets/img/web_banner.png" height="60">
                <div class="p-t-25 d-none d-sm-block"></div>
                <h2 class="p-t-0"><span class="d-none d-sm-block"></span>SMA Suka Maju 26 Surabaya</h2>

                <!-- START Login Form -->
                <main class="form-signin">
                    <h1 class="h3 mb-3 fw-normal text-center">Silakan Registrasi</h1>
                    <form action="/register" method="post">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-floating">
                            <label for="nama">Name</label>
                            <input type="text" name="name"
                                class="form-control @error('name') is-invalid @enderror" id="name"
                                placeholder="Name" required>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <label for="username">Username</label>
                            <input type="username" name="username"
                                class="form-control @error('username') is-invalid @enderror" id="username"
                                placeholder="Username" autofocus required value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <label for="email">Email</label>
                            <input type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="Email" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <label for="password">Password</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="Password" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <label for="noTelp">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="genderMale"
                                    value="L" checked>
                                <label class="form-check-label" for="genderMale">
                                    Laki - Laki
                                </label>
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="genderFemale"
                                    value="P">
                                <label class="form-check-label" for="genderFemale">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="form-floating">
                            <label for="tanggalLahir">Tanggal Lahir</label>
                            <input type="date" name="tanggalLahir"
                                class="form-control @error('tanggalLahir') is-invalid @enderror" id="tanggalLahir"
                                placeholder="" required>
                            @error('tanggalLahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat"
                                class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                placeholder="Alamat" required>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <label for="nomorTelp">Nomor Telepon</label>
                            <input type="text" name="nomorTelp"
                                class="form-control @error('nomorTelp') is-invalid @enderror" id="nomorTelp"
                                placeholder="Nomor Telepon" required>
                            @error('nomorTelp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <label for="tanggalMasuk">Tanggal Masuk</label>
                            <input type="date" name="tanggalMasuk"
                                class="form-control @error('tanggalMasuk') is-invalid @enderror" id="tanggalMasuk"
                                placeholder="" required>
                            @error('tanggalMasuk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <label for="tanggalKeluar">Tanggal Keluar</label>
                            <input type="date" name="tanggalKeluar"
                                class="form-control @error('tanggalKeluar') is-invalid @enderror" id="tanggalKeluar"
                                placeholder="" required>
                            @error('tanggalKeluar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">REGISTER</button>
                    </form>
                </main>
                <!--END Login Form-->
                <div class="mt-4" style="width: 400px;">
                    <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-2">
                                    <iconify-icon icon="mdi:location"></iconify-icon>
                                    <span class="ml-2">Jl. Terus Nggak Pernah Jadian no.77</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <iconify-icon icon="material-symbols:mail"></iconify-icon>
                                    <span class="ml-2">sma@sukamaju26.sch.id</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-2">
                                    <iconify-icon icon="ic:baseline-phone"></iconify-icon>
                                    <span class="ml-2">(+62 31) 1234 5678</span>
                                </div><br>
                                <div class="d-flex align-items-center">
                                    <iconify-icon icon="ic:outline-whatsapp"></iconify-icon>
                                    <span class="ml-2">+62 811 1234 5678</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Register Right Container-->
    </div>
</body>

</html>
