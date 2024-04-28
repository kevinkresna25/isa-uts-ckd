@extends('layouts.main')

@section('title', 'Data Karyawan')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/datakaryawan">Data Karyawan</a></li>
@endsection

@section('card')
    @include('umum.datainfo')
@endsection

