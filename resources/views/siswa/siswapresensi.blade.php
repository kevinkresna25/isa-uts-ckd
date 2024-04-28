@extends('layouts.main')

@section('title', 'Presensi')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/presensi">Presensi</a></li>
@endsection

@section('card')
    @include('umum.datainfo')
@endsection
