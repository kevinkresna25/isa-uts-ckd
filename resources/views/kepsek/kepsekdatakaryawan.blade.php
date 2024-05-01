@extends('layouts.main')

@section('title', 'Data Karyawan')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/datakaryawan">Data Karyawan</a></li>
@endsection

@section('card')
    @include('umum.datainfo')
@endsection

@section('test')
<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
@endsection