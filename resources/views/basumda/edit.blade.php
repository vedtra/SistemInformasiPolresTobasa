@extends('layouts.profile')
@extends('layouts.masterphoto')

@section('header-in')
    <h4 class="page-title">Edit Data</h4> </div>

    <ol class="breadcrumb">
        <li><a href="{{ url('/basumda') }}">Dashboard</a></li>
        <li class="active">Edit Data</li>
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
    <form class="form-horizontal form-material" role="form" method="POST" enctype="multipart/form-data" action="{{url('basumda/update',$polisi->id_anggota)}}"">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-md-12">Nama</label>
            <div class="col-md-12">
                <input type="text" name="nama" value="{{ $polisi->nama }}" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Pangkat</label>
            <div class="col-md-12">
                <input type="text"  value="{{ $polisi->pangkat }}" name="pangkat" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Divisi</label>
            <div class="col-md-12">
                <select class="form-control form-control-line" name="divisi" required>
                    <option disabled>--Pilih Role--</option>
                    <option value="1">admin</option>
                    <option value="2">kapolres</option>
                    <option value="3">bagops</option>
                    <option value="4">basumda</option>
                    <option value="5">bagren</option>
                    <option value="6">sium</option>
                    <option value="7">reserse</option>
                </select>
        </div>

        <div class="form-group">
            <label class="col-md-12">TMT PNKT</label>
            <div class="col-md-12">
                <input type="date" placeholder="yyyy-mm-dd" value="{{ $polisi->tmt_pnkt }}" name="tmt_pnkt" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Tanggal Lahir</label>
            <div class="col-md-12">
                <input type="date" placeholder="yyyy-mm-dd" value="{{ $polisi->tanggal_lahir }}" name="tanggal_lahir" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Suku Bangsa</label>
            <div class="col-md-12">
                <input type="text" value="{{ $polisi->suku_bangsa }}" name="suku_bangsa" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Jabatan TMT</label>
            <div class="col-md-12">
                <input type="date" placeholder="yyyy-mm-dd" value="{{ $polisi->jabatan_tmt }}" name="jabatan_tmt" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Kelamin</label>
            <div class="col-md-12">
                <input type="text" name="kelamin" value="{{ $polisi->kelamin }}" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Status</label>
            <div class="col-md-12">
                <input type="text" name="status" value="{{ $polisi->status }}" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Pendidikan Terakhir</label>
            <div class="col-md-12">
                <input type="text" name="pendidikan_terakhir" value="{{ $polisi->pendidikan_terakhir }}" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Agama</label>
            <div class="col-md-12">
                <input type="text" name="agama" value="{{ $polisi->agama }}" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Dikjur</label>
            <div class="col-md-12">
                <input type="text" name="dikjur" value="{{ $polisi->dikjur }}" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Tanda Jasa</label>
            <div class="col-md-12">
                <input type="text" name="tanda_jasa" value="{{ $polisi->tanda_jasa }}" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Foto</label>
            <div class="col-md-12">
                <img src="{{ asset('polisi/image/'.$polisi->images) }}" id="showimages" style="max-width: 200px; max-height: 200px; float: left;"/>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <input type="file" id="inputimages" name="images">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
