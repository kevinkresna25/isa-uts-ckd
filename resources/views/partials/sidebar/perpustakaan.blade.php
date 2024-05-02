@can('access-siswa')
    <li><span class='icon-thumbnail'><i data-feather='book-open'></i></span><a href='#' data-page='#'>Perpustakaan<span
                class='arrow'></span></a>
        <ul class='sub-menu'>
            <li><a href='/siswapeminjamanbuku' data-page='peminjamanbuku'>Peminjaman Buku</a></li>
        </ul>
    @endcan
    @can('access-pustakawan')
    <li><span class='icon-thumbnail'><i data-feather='book-open'></i></span><a href='#' data-page='#'>Perpustakaan<span
                class='arrow'></span></a>
        <ul class='sub-menu'>
            <li><a href='/pustakapeminjamanbuku' data-page='peminjamanbuku'>Data Peminjaman Buku</a></li>
        </ul>
    @endcan
</li>
