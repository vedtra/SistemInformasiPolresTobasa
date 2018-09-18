
@extends('layouts.master')

@section('header-in')
    <h4 class="page-title">Laporan</h4> </div>
    
    <ol class="breadcrumb">
        <li><a href="{{ url('/kapolres') }}">Dashboard</a></li>
        <li class="active">Laporan</li>
    </ol>
@stop

@section('navigation')
    <ul class="nav" id="side-menu">
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/') }}" class="waves-effect"><i class="fa fa-sliders fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/kapolres/laporan') }}" class="waves-effect"><i class="fa fa-book fa-fw" aria-hidden="true"></i><span class="hide-menu">Laporan</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/kapolres/perencanaan') }}" class="waves-effect"><i class="fa fa-th-list fa-fw" aria-hidden="true"></i><span class="hide-menu">Perencanaan</span></a>
        </li>
        <li>
            <a href="{{ url('/kapolres/anggaran') }}" class="waves-effect"><i class="fa fa-money fa-fw" aria-hidden="true"></i><span class="hide-menu">Anggaran</span></a>
        </li>
    </ul>
@stop

@section('row1')
    <div class="col-sm-12">
        <div class="white-box">
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>FILE NAME</th>
                                <th>DIVISI</th>
                                <th>UPLOADED DATE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach($laporans as $laporan)
                            <?php $i++ ?>
                            <tr>
                                <td class="txt-oflo">{{ $i }}</td>
                                <td>{{ $laporan->files }}</td>
                                <td>{{ $laporan->nama_divisi }}</td>
                                <td class="txt-oflo">{{ $laporan->created_at }}</td>
                                <td>
                                <form class="" action="{{url('kapolres/delete',$laporan->id_laporan)}}" method="post">
                                    <input type="hidden" name="method" value="delete">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <a href="../polisi/laporan/{{ $laporan->files }}" download="{{ $laporan->files }}">
                                            <button type="button" class="btn btn-primary">
                                                <i class="glyphicon glyphicon-download"> Download</i>
                                            </button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
@stop
