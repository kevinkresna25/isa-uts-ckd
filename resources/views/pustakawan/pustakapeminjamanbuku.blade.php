@extends('layouts.main')

@section('title', 'Peminjaman Buku')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/peminjamanbuku">Peminjaman Buku</a></li>
@endsection

@section('card')
    @include('umum.datainfo')
@endsection

