
@extends('layouts.profilephoto')
@extends('layouts.masterphoto')

@section('header-in')
    <h4 class="page-title">{{$polisi->nama}} ({{$polisi->pangkat}})</h4> </div>

    <ol class="breadcrumb">
        <li><a href="{{ url('/basumda') }}">Dashboard</a></li>
        <li class="active">Detail</li>
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

@section('foto')
	<div class="user-bg"> <img width="100%" alt="user" src="{{ asset('polisi/image/'.$polisi->images) }}"></div>
@endsection

@section('inner')
	<form class="form-horizontal form-material" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-md-12">Nama</label>
            <div class="col-md-12">
                <input type="text" value="{{ $polisi->nama }}" name="nama" class="form-control form-control-line" disabled> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Pangkat</label>
            <div class="col-md-12">
                <input type="text"  value="{{ $polisi->pangkat }}" name="pangkat" class="form-control form-control-line" disabled> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Divisi</label>
            <div class="col-md-12">
                <input type="text"  value="@if($polisi->divisi == 1) Admin @elseif($polisi->divisi == 2) Kapolres @elseif($polisi->divisi == 3) Bagian Operasional @elseif($polisi->divisi == 4) Bagian Sumber Daya @elseif($polisi->divisi == 5) Bagian Perencanaan @elseif($polisi->divisi == 6) Bagian Sium @elseif($polisi->divisi == 7) Bagian Reserse dan Kriminal @endif" name="divisi" class="form-control form-control-line" disabled> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">TMT PNKT</label>
            <div class="col-md-12">
                <input type="date" placeholder="yyyy-mm-dd" value="{{ $polisi->tmt_pnkt }}" name="tmt_pnkt" class="form-control form-control-line" disabled> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Tanggal Lahir</label>
            <div class="col-md-12">
                <input type="date" placeholder="yyyy-mm-dd" value="{{ $polisi->tanggal_lahir }}" name="tanggal_lahir" class="form-control form-control-line" disabled> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Suku Bangsa</label>
            <div class="col-md-12">
                <input type="text" value="{{ $polisi->suku_bangsa }}" name="suku_bangsa" class="form-control form-control-line" disabled> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Jabatan TMT</label>
            <div class="col-md-12">
                <input type="date" placeholder="yyyy-mm-dd" value="{{ $polisi->jabatan_tmt }}" name="jabatan_tmt" class="form-control form-control-line" disabled> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Kelamin</label>
            <div class="col-md-12">
                <input type="text" name="kelamin" value="{{ $polisi->kelamin }}" class="form-control form-control-line" disabled> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Status</label>
            <div class="col-md-12">
                <input type="text" name="status" value="{{ $polisi->status }}" class="form-control form-control-line" disabled> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Pendidikan Terakhir</label>
            <div class="col-md-12">
                <input type="text" name="pendidikan_terakhir" value="{{ $polisi->pendidikan_terakhir }}" class="form-control form-control-line" disabled> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Agama</label>
            <div class="col-md-12">
                <input type="text" name="agama" value="{{ $polisi->agama }}" class="form-control form-control-line" disabled> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Dikjur</label>
            <div class="col-md-12">
                <input type="text" name="dikjur" value="{{ $polisi->dikjur }}" class="form-control form-control-line" disabled> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Tanda Jasa</label>
            <div class="col-md-12">
                <input type="text" name="tanda_jasa" value="{{ $polisi->tanda_jasa }}" class="form-control form-control-line" disabled> </div>
        </div>
    </form>
@endsection
