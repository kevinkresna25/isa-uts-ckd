<nav class="page-sidebar" data-pages="sidebar">
    <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
    <div class="sidebar-overlay-slide from-top" id="appMenu">
    </div>
    <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
    <!-- BEGIN SIDEBAR MENU HEADER-->
    <div class="sidebar-header">
        <img src="assets/img/logo-suka-maju.png" alt="logo" class="brand"
            data-src="assets/img/logo-suka-maju.png"
            data-src-retina="assets/img/logo-suka-maju.png" height="22">
        <div class="sidebar-header-controls">
            <button aria-label="Toggle Drawer" type="button"
                class="btn btn-icon-link sidebar-slide-toggle m-l-20 m-r-10" data-pages-toggle="#appMenu">
                <i class="pg-icon">chevron_down</i>
            </button>
            <button aria-label="Pin Menu" type="button"
                class="btn btn-icon-link d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none"
                data-toggle-pin="sidebar">
                <i class="pg-icon"></i>
            </button>
        </div>
    </div>
    <!-- END SIDEBAR MENU HEADER-->
    <!-- START SIDEBAR MENU -->
    <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
            {{-- <li>
                <span class='icon-thumbnail'><i data-feather='home'></i></span>
                <a href='/'>Home</a>
            </li> --}}

            <li>
                <span class='icon-thumbnail'><i data-feather='home'></i></span>
                <a href='/'>Home</a>
            </li>
            {{-- Include Sidebar Menu --}}
            @include('partials.sidebar.akademik')
            @include('partials.sidebar.perpustakaan')
            @include('partials.sidebar.sdm')
            
            {{-- @if (in_array($role, ['siswa', 'guru', 'admin', 'pustaka', 'kepsek']))
                
            @endif

            <!-- Sesuaikan dengan role -->
            @if (in_array($role, ['siswa', 'guru', 'admin']))
                @include('partials.sidebar.akademik')
            @endif

            @if (in_array($role, ['siswa', 'pustaka']))
                @include('partials.sidebar.perpustakaan')
            @endif

            @if (in_array($role, ['siswa', 'guru', 'admin', 'pustaka', 'kepsek']))
                @include('partials.sidebar.sdm')
            @endif --}}

            <li class="d-lg-none d-xl-none"><a href="https://ws.ubaya.ac.id/oauth2/logout"
                    class="detailed">Logout</a><span class="icon-thumbnail"><i data-feather="lock"></i></span>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- END SIDEBAR MENU -->
</nav>
