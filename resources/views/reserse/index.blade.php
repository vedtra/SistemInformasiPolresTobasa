
@extends('layouts.master')

@section('header-in')
    <h4 class="page-title"></h4> </div>
    
    <ol class="breadcrumb">
        <li><a href="{{ url('/reserse') }}">Dashboard</a></li>
    </ol>
@stop

@section('navigation')
    <ul class="nav" id="side-menu">
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/reserse') }}" class="waves-effect"><i class="fa fa-sliders fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/reserse/add_kasus') }}" class="waves-effect"><i class="fa fa-edit fa-fw" aria-hidden="true"></i><span class="hide-menu">Tulis Kasus</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/reserse/data_kasus') }}" class="waves-effect"><i class="fa fa-th-list fa-fw" aria-hidden="true"></i><span class="hide-menu">Data Kasus</span></a>
        </li>

    </ul>
@stop

@section('row1')
    <div class="col-sm-12">
        <div class="white-box">
            <table border="0">
            <tr>
                <td width="300px">

                </td>
                <td>
                    <img src="../plugins/images/reserse.png" height="400px"/>
                </td>
            </tr>
            </table>
        </div>
    </div>
@stop