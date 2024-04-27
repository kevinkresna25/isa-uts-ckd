<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>SMA Rungkad 01</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="/favicon.png">
    <meta name="description" content="My UBAYA">
    <meta name="author" content="Cemazz Ko Deck Corp.">
    
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="pages/css/themes/icon.css" rel="stylesheet">
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link class="main-stylesheet" href="pages/css/themes/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet">
    
</head>

<body class="fixed-header menu-pin">
    <script src="assets/plugins/jquery/jquery-3.7.1.min.js" type="text/javascript"></script>

    <!-- Content -->
    <!-- BEGIN SIDEBPANEL-->

    @include('partials.sidebar')
    
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
        <!-- START HEADER -->
        <div class="header ">
            <!-- START MOBILE SIDEBAR TOGGLE -->
            <a href="#" class="btn-link toggle-sidebar d-lg-none  pg-icon btn-icon-link" data-toggle="sidebar">
                menu</a>
            <!-- END MOBILE SIDEBAR TOGGLE -->
            <div class="">
                <div class="brand inline">
                    <img src="https://my.ubaya.ac.id/assets/img/LogoUbaya_Medium.png" alt="logo"
                        data-src="https://my.ubaya.ac.id/assets/img/LogoUbaya_Medium.png"
                        data-src-retina="https://my.ubaya.ac.id/assets/img/LogoUbaya_Medium.png" width="78" height="22">
                </div>
            </div>
            <div class="d-flex align-items-center">
                <!-- START User Info-->
                <div class="pull-left p-r-10 fs-14 d-lg-inline-block d-none m-l-20">
                    <span class="semi-bold">SI UDIN</span>
                    <small
                        style="display: block; margin-top: -1.3em; position: relative; top: 1em; color: gray; text-align: right;">160422077</small>
                </div>
                <div class="dropdown pull-right d-lg-block d-none">
                    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" aria-label="profile dropdown">
                        <span class="thumbnail-wrapper d32 circular inline">
                            <img src="https://my.ubaya.ac.id/img/mhs/160422077_m.jpg"
                                alt="" data-src="https://my.ubaya.ac.id/img/mhs/160422077_m.jpg"
                                data-src-retina="https://my.ubaya.ac.id/img/mhs/160422077_m.jpg"
                                onerror="this.onerror=null;this.src='/assets/img/profiles/4xs.png';this.setAttribute('data-src',this.src);this.setAttribute('data-src-retina',this.src);"
                                width="32" height="32" style="object-fit: cover;object-position: 50% 0px;">
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                        <a href="#" class="dropdown-item"><span>Signed in as <br /><b>SI UDIN</b> (160422077)</span></a>
                        <div class="dropdown-divider"></div>
                        <a href="https://ws.ubaya.ac.id/oauth2/logout" class="dropdown-item">Logout</a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-item fs-12 hint-text" id="servertime"></span>
                    </div>
                </div>
                <!-- END User Info-->

            </div>
        </div>
        <!-- END HEADER -->

        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper" style="margin-top: 0px;">
            <!-- START PAGE CONTENT -->

            <!-- START PAGE CONTENT -->
            <div class="content sm-gutter">
                <!-- START JUMBOTRON -->
                <div data-pages="parallax">
                    <div class="container-fluid p-l-25 p-r-25 sm-p-l-0 sm-p-r-0">
                        <div class="inner">
                            <!-- START BREADCRUMB -->
                            <ol class="breadcrumb sm-p-b-5">
                                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                @yield('breadcrumb')
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END JUMBOTRON -->
                <!-- SHOW ERROR MESSAGE -->
                <!-- END SHOW ERROR MESSAGE -->
                <!-- START CONTAINER FLUID -->
                <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10">
                    <!-- START ROW -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- START card -->
                            <div class="card card-default">
                                <div class="card-header ">
                                    <div class="card-title">
                                        <h4>{{ $title }}</h4>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="card-body">
                                    {{-- ISI KONTEN --}}
                                    @yield('content')
                                </div>
                            </div>
                            <!-- END card -->
                        </div>
                    </div>
                    <!-- END ROW -->
                </div>
                <!-- END CONTAINER FLUID -->
            </div>
            <!-- END PAGE CONTENT -->


        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->



    <!-- BEGIN VENDOR JS -->
    <script src="assets/plugins/feather-icons/feather.min.js" type="text/javascript"></script>
    <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    {{-- Untuk Headernya --}}
    <script src="assets/plugins/popper/umd/popper.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    

    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="pages/js/pages.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <script>
        feather.replace({
            width: '16',
            height: '16'
        })
    </script>

</body>

</html>
