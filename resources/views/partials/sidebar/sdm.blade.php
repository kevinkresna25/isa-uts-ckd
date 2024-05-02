@can('access-admin')
<li><span class='icon-thumbnail'><i data-feather='briefcase'></i></span><a href='#' data-page='#'>SDM<span
            class='arrow'></span></a>
    <ul class='sub-menu'>
        <li><a href='/dataKaryawan' data-page='datakaryawan'>Data Karyawan</a></li>
        <li><a href='/tambahKaryawan' data-page='datakaryawan'>Tambah Karyawan</a></li>
        @endcan
        {{-- <li><a href='/pencarianprofil' data-page='pencarianprofil'>Pencarian Profil</a></li> --}}
    </ul>
</li>
