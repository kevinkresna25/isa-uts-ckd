<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>SMA Suka Maju 26</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="/favicon.png">
    <meta name="description" content="My UBAYA">
    <meta name="author" content="Cemazz Ko Deck Corp.">
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="pages/css/themes/icon.css" rel="stylesheet">
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"
        media="screen">

    @yield('head')

    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link class="main-stylesheet" href="pages/css/themes/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet">
</head>

{{-- TEST ROLE STATIC --}}
@php
    $role = 'pustaka';
@endphp

<body class="fixed-header menu-pin">
    <script src="assets/plugins/jquery/jquery-3.7.1.min.js" type="text/javascript"></script>

    <!-- Content -->
    <!-- BEGIN SIDEBPANEL-->

    @include('partials.sidebar')

    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">

        @include('partials.navbar')

        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper" style="margin-top: 0px;">
            <!-- START PAGE CONTENT -->

            <!-- START PAGE CONTENT -->
            <div class="content sm-gutter">
                <!-- START JUMBOTRON -->
                <div data-pages="parallax">
                    <div class="container-fluid p-l-25 p-r-25 sm-p-l-0 sm-p-r-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="inner mb-3 border-bottom">
                                    <h3 class="mb-1 ml-1"><b>@yield('title')</b></h3>
                                    <ol class="breadcrumb pt-0 pb-2">
                                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>

                                        @yield('breadcrumb')

                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END JUMBOTRON -->
                <!-- SHOW ERROR MESSAGE -->
                <!-- END SHOW ERROR MESSAGE -->
                <!-- START CONTAINER FLUID -->
                <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10">
                    <!-- START ROW -->

                    @yield('card')

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
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>

    {{-- Header --}}
    <script src="assets/plugins/popper/umd/popper.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/plugins/select2/js/select2.full.min.js"></script>

    {{-- Body --}}
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>

    @yield('script')

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
