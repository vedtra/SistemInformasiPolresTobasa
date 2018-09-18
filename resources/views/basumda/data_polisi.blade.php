
@extends('layouts.master')

@section('header-in')
    <h4 class="page-title">Data Polisi</h4> </div>
    
    <ol class="breadcrumb">
        <li><a href="{{ url('/basumda') }}">Dashboard</a></li>
        <li class="active">Data Polisi</li>
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
    <div class="col-sm-12">
        <div class="white-box">
                    
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NAMA</th>
                                <th>PANGKAT</th>
                                <th>DIVISI</th>
                                <th>JABATAN TMT</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($polisis as $polisi)
                            <tr>
                                <td>{{ $polisi->nama }}</td>
                                <td>{{ $polisi->pangkat }}</td>
                                <td>{{ $polisi->nama_divisi }}</td>
                                <td>{{ $polisi->jabatan_tmt }}</td>
                                <td>
                                <form class="" action="{{url('basumda/delete',$polisi->id_anggota)}}" method="post">
                                    <input type="hidden" name="method" value="delete">

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <a href="{{url('basumda/detail',$polisi->id_anggota)}}" class="btn btn-success">Detail</a>
                                    
                                    <a href="{{url('basumda/edit',$polisi->id_anggota)}}" class="btn btn-primary">Edit</a>
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data ?');" name="name" value="Delete">
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
@stop