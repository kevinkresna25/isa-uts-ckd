@extends('layouts.main')

@section('title', 'Pencarian Profil')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/pencarianprofil">Pencarian Profil</a></li>
@endsection

@section('card')
    @include('umum.datainfo')
@endsection

