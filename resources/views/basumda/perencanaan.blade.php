
@extends('layouts.master')

@section('header-in')
    <h4 class="page-title">Tulis Perencanaan</h4> </div>
    
    <ol class="breadcrumb">
        <li><a href="{{ url('/basumda') }}">Dashboard</a></li>
        <li class="active">Tulis Perencanaan</li>
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

@section('row1')
    <form class="form-horizontal form-material" role="form" method="POST" action="{{ url('basumda/perencanaan/store') }}">
        {{ csrf_field() }}
        <div class="col-sm-12">
            <div class="white-box">

                <div class="table-responsive">
                        <table class="table ">
                            <tr>
                                <td>
                                    <div>
                                        <label for="kegiatan" class="col-md-4 control-label">Nama Kegiatan</label>
                                </td>
                                <td>
                                    <div class="col-md-6">
                                        <input id="nama_kegiatan" type="text" class="form-control" name="nama_kegiatan" required autofocus>
                                    </div>
                                </td>
                            </tr>
                                </div>

                            <tr>
                                <td>
                                    <div>
                                        <label for="tanggal" class="col-md-4 control-label">Tanggal</label>
                                </td>
                                <td>
                                    <div class="col-md-6">
                                        <input id="tanggal" type="date" class="form-control" placeholder="yyyy-mm-dd" name="tanggal" required autofocus>
                                    </div>
                                </td>
                            </tr>
                                </div>

                            <tr>
                                <td>
                                    <div>
                                        <label for="waktu" class="col-md-4 control-label">Waktu</label>
                                </td>
                                <td>
                                    <div class="col-md-6">
                                        <input id="waktu" type="text" class="form-control" placeholder="00:00" name="waktu" required autofocus>
                                    </div>
                                </td>
                            </tr>
                                </div>

                            <tr>
                                <td>
                                    <div>
                                        <label for="tempat" class="col-md-4 control-label">Tempat Pelaksanaan</label>
                                </td>
                                <td>
                                    <div class="col-md-6">
                                        <input id="tempat_pelaksanaan" type="text" class="form-control" name="tempat_pelaksanaan" required autofocus>
                                    </div>
                                </td>
                            </tr>
                                </div>

                            <tr>
                                <td>
                                    <div>
                                        <label for="deskripsi" class="col-md-4 control-label">Deskripsi</label>
                                </td>
                                <td>
                                    <div class="col-md-6">
                                        <textarea name="deskripsi" cols="52" rows="3" required autofocus></textarea>
                                    </div>
                                </td>
                            </tr>
                                </div>

                            <tr>
                                <td>
                                    <div>
                                        <label for="anggaran" class="col-md-4 control-label">Anggaran</label>
                                </td>
                                <td>
                                    <div class="col-md-6">
                                        <input id="anggaran" type="double" class="form-control" name="anggaran" required autofocus>
                                    </div>
                                </td>
                            </tr>
                                </div>

                            <tr>
                                <td>
                                    <div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Add</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                </div>
                        </table>
                </div>

            </div>
        </div>

        
    </form>
@stop