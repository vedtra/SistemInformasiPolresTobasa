
@extends('layouts.master')

@section('header-in')
    <h4 class="page-title"></h4> </div>
    
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}">Dashboard</a></li>
    </ol>
@stop

@section('navigation')
    <ul class="nav" id="side-menu">
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/admin') }}" class="waves-effect"><i class="fa fa-sliders fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/admin/show') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Data Akun</span></a>
        </li>
        <li>
            <a href="{{ url('/admin/add') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Tulis Akun Baru</span></a>
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
                    <img src="../plugins/images/admin2.png" height="500px"/>
                </td>
            </tr>
            </table>
        </div>
    </div>
@endsection
