@extends('layouts.main')

@section('title', 'Pencarian Profil')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="/pencarianprofil">Pencarian Profil</a></li>
@endsection



@section('card')
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <br>
    @include('umum.datainfo')
@endsection




