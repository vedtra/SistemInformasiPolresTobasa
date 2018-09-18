@extends('layouts.profile')
@extends('layouts.masterphoto')

@section('header-in')
    <h4 class="page-title">Tulis Anggota Baru</h4> </div>

    <ol class="breadcrumb">
        <li><a href="{{ url('/basumda') }}">Dashboard</a></li>
        <li class="active">Tulis Anggota Baru</li>
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
    <form class="form-horizontal form-material" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/basumda/store') }}"">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-md-12">Nama</label>
            <div class="col-md-12">
                <input type="text" name="nama" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Pangkat</label>
            <div class="col-md-12">
                <input type="text" name="pangkat" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Divisi</label>
            <div class="col-md-12">
                <select class="form-control form-control-line" name="divisi" required>
                    <option disabled>--Pilih Role--</option>
                    <option value="2">Kapolres</option>
                    <option value="3">Bagops</option>
                    <option value="4">Basumda</option>
                    <option value="5">Bagren</option>
                    <option value="6">Sium</option>
                    <option value="7">Reserse</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">TMT PNKT</label>
            <div class="col-md-12">
                <input type="date" placeholder="yyyy-mm-dd" name="tmt_pnkt" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Tanggal Lahir</label>
            <div class="col-md-12">
                <input type="date" placeholder="yyyy-mm-dd" name="tanggal_lahir" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Suku Bangsa</label>
            <div class="col-md-12">
                <input type="text" name="suku_bangsa" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Jabatan TMT</label>
            <div class="col-md-12">
                <input type="date" placeholder="yyyy-mm-dd" name="jabatan_tmt" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Kelamin</label>
            <div class="col-md-12">
                <select class="form-control form-control-line" name="kelamin" required>
                    <option disabled>--Pilih--</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Status</label>
            <div class="col-md-12">
                <select class="form-control form-control-line" name="status" required>
                    <option>Aktif</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Pendidikan Terakhir</label>
            <div class="col-md-12">
                <input type="text" name="pendidikan_terakhir" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Agama</label>
            <div class="col-md-12">
                <select class="form-control form-control-line" name="agama" required>
                    <option disabled>--Pilih--</option>
                    <option>Kristen Protestan</option>
                    <option>Katolik</option>
                    <option>Islam</option>
                    <option>Budha</option>
                    <option>Hindu</option>
                    <option>Kong Hu Cu</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Dikjur</label>
            <div class="col-md-12">
                <input type="text" name="dikjur" class="form-control form-control-line"> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Tanda Jasa</label>
            <div class="col-md-12">
                <input type="text" name="tanda_jasa" class="form-control form-control-line"> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Foto</label>
            <div class="col-md-12">
                <img src="../polisi/image.png" id="showimages" style="max-width: 200px; max-height: 200px; float: left;"/>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <input type="file" id="inputimages" name="images" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Add</button>
            </div>
        </div>
    </form>
@endsection
