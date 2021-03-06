
@extends('layouts.master')

@section('header-in')
    <h4 class="page-title"></h4> </div>
    
    <ol class="breadcrumb">
        <li><a href="{{ url('/bagren') }}">Dashboard</a></li>
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
            <table border="0">
            <tr>
                <td width="170px">

                </td>
                <td>
                    <img src="../plugins/images/bagren.png" height="500px"/>
                </td>
            </tr>
            </table>
        </div>
    </div>
@endsection
