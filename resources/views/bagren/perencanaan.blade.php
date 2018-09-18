
@extends('layouts.master')

@section('header-in')
    <h4 class="page-title">Perencanaan</h4> </div>
    
    <ol class="breadcrumb">
        <li><a href="{{ url('/bagren') }}">Dashboard</a></li>
        <li class="active">Perencanaan</li>
    </ol>
@stop

@section('navigation')
    <ul class="nav" id="side-menu">
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/bagren') }}" class="waves-effect"><i class="fa fa-sliders fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/bagren/tulis_anggaran') }}" class="waves-effect"><i class="fa fa-money fa-fw" aria-hidden="true"></i><span class="hide-menu">Tulis Anggaran</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/bagren/anggaran') }}" class="waves-effect"><i class="fa fa-money fa-fw" aria-hidden="true"></i><span class="hide-menu">Anggaran</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/bagren/laporan') }}" class="waves-effect"><i class="fa fa-book fa-fw" aria-hidden="true"></i><span class="hide-menu">Laporan</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/bagren/perencanaan') }}" class="waves-effect"><i class="fa fa-th-list fa-fw" aria-hidden="true"></i><span class="hide-menu">Perencanaan</span></a>
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
                                <th>DIVISI</th>
                                <th>NAMA KEGIATAN</th>
                                <th>TANGGAL</th>
                                <th>WAKTU</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0 ?>
                            @foreach($perencanaans as $rencana)
                            <?php $i++ ?>
                            <tr>
                                <td>{{ $i }}</td>
                                <td class="txt-oflo">{{ $rencana->nama_divisi }}</td>
                                <td>{{ $rencana->nama_kegiatan }}</td>
                                <td class="txt-oflo">{{ $rencana->tanggal }}</td>
                                <td><span class="text-success">{{ $rencana->waktu }}</span></td>
                                <td>
                                <form class="" action="{{url('bagops/perencanaan/delete',$rencana->id_perencanaan)}}" method="post">
                                    <input type="hidden" name="method" value="delete">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <a href="{{url('bagren/perencanaan/getPDF',$rencana->id_perencanaan)}}" class="btn btn-success">PDF</a>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@stop