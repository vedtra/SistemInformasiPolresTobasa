@extends('layouts.profile')
@extends('layouts.masterphoto')

@section('header-in')
    <h4 class="page-title">Edit Perencanaan</h4> </div>

    <ol class="breadcrumb">
        <li><a href="{{ url('/basumda') }}">Dashboard</a></li>
        <li class="active">Edit Perencanaan</li>
    </ol>
@stop

@section('navigation')
    <ul class="nav" id="side-menu">
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/basumda') }}" class="waves-effect"><i class="fa fa-sliders fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/basumda/show') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Data Anggota</span></a>
        </li>
        <li>
            <a href="{{ url('basumda/add') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Tulis Anggota Baru</span></a>
        </li>
        <li>
            <a href="{{ url('basumda/perencanaan') }}" class="waves-effect"><i class="fa fa-th-list fa-fw" aria-hidden="true"></i><span class="hide-menu">Tulis Perencanaan</span></a>
        </li>
        <li>
            <a href="{{ url('basumda/show_perencanaan') }}" class="waves-effect"><i class="fa fa-th-list fa-fw" aria-hidden="true"></i><span class="hide-menu">Perencanaan</span></a>
        </li>
        <li>
            <a href="{{ url('basumda/laporan') }}" class="waves-effect"><i class="fa fa-book fa-fw" aria-hidden="true"></i><span class="hide-menu">Laporan</span></a>
        </li>
    </ul>
@stop

@section('inner')
    <form class="form-horizontal form-material" role="form" method="POST" action="{{url('basumda/show_perencanaan/update', $rencana->id_perencanaan)}}">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-md-12">Nama Kegiatan</label>
            <div class="col-md-12">
                <input type="text" name="nama_kegiatan" value="{{ $rencana->nama_kegiatan }}" class="form-control form-control-line"> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Tanggal</label>
            <div class="col-md-12">
                <input type="date" name="tanggal" value="{{ $rencana->tanggal }}" class="form-control form-control-line"> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Waktu</label>
            <div class="col-md-12">
                <input type="text" name="waktu" value="{{ $rencana->waktu }}" class="form-control form-control-line"> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Tempat Pelaksanaan</label>
            <div class="col-md-12">
                <input type="text" name="tempat_pelaksanaan" value="{{ $rencana->tempat_pelaksanaan }}" class="form-control form-control-line"> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Deskripsi</label>
            <div class="col-md-12">
                <input type="text" name="deskripsi" value="{{ $rencana->deskripsi }}" class="form-control form-control-line"> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Anggaran</label>
            <div class="col-md-12">
                <input type="double" name="anggaran" value="{{ $rencana->anggaran }}" class="form-control form-control-line"> </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
