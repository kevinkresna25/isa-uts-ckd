@can('access-siswa')
    <li><span class='icon-thumbnail'><i data-feather='book'></i></span><a href='#' data-page='#'>Akademik<span
                class='arrow'></span></a>
        <ul class='sub-menu'>
            <li><a href='/siswapenilaian' data-page='penilaian'>Penilaian</a></li>
            {{-- <li><a href='/siswapresensi' data-page='presensi'>Presensi</a></li> --}}
        </ul>
    @endcan
    @can('access-guru')
    <li><span class='icon-thumbnail'><i data-feather='book'></i></span><a href='#' data-page='#'>Akademik<span
                class='arrow'></span></a>
        <ul class='sub-menu'>
            <li><a href='/gurupenilaian' data-page='penilaian'>Penilaian Murid</a></li>
            {{-- <li><a href='/gurupresensi' data-page='presensi'>Presensi Murid</a></li> --}}
            {{-- <li><a href='/{{ $role }}jadwalkelas' data-page='jadwalkelas'>Jadwal Kelas</a></li> --}}
        </ul>
    @endcan
</li>
