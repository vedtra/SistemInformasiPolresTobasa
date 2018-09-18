
@extends('layouts.master')
@extends('layouts.masterphoto')

@section('header-in')
    <h4 class="page-title">Laporan</h4> </div>
    
    <ol class="breadcrumb">
        <li><a href="{{ url('/bagops') }}">Dashboard</a></li>
        <li class="active">Laporan</li>
    </ol>
@stop

@section('navigation')
    <ul class="nav" id="side-menu">
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/bagops') }}" class="waves-effect"><i class="fa fa-sliders fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/bagops/laporan') }}" class="waves-effect"><i class="fa fa-book fa-fw" aria-hidden="true"></i><span class="hide-menu">Laporan</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/bagops/perencanaan') }}" class="waves-effect"><i class="fa fa-th-list fa-fw" aria-hidden="true"></i><span class="hide-menu">Perencanaan</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/bagops/add_perencanaan') }}" class="waves-effect"><i class="fa fa-th-list fa-fw" aria-hidden="true"></i><span class="hide-menu">Tulis Perencanaan</span></a>
        </li>
    </ul>
@stop

@section('row1')
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Divisi
                <div class="col-md-2 col-sm-4 col-xs-12 pull-right">
                    <select class="form-control pull-right row b-none" name="divisi">
                        @foreach($divisi as $divisis)
                            <option value="{{ $divisis->id_divisi }}">{{ $divisis->nama_divisi }}</option>
                        @endforeach
                    </select>
                </div>
            </h3>
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>FILE NAME</th>
                                <th>DIVISI</th>
                                <th>UPLOAD DATE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach($laporans as $laporan)
                            <?php $i++ ?>
                            <tr>
                                <td class="txt-oflo">{{ $i }}</td>
                                <td class="txt-oflo">{{ $laporan->files }}</td>
                                <td class="txt-oflo">{{ $laporan->nama_divisi }}</td>
                                <td><span class="text-success">{{ $laporan->created_at }}</span></td>
                                <td>
                                    <form class="" action="{{url('bagops/del_lap',$laporan->id_laporan)}}" method="post">
                                        <input type="hidden" name="method" value="delete">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <a href="../polisi/laporan/{{ $laporan->files }}" download="{{ $laporan->files }}">
                                            <button type="button" class="btn btn-primary">
                                                <i class="glyphicon glyphicon-download"> Download</i>
                                            </button>

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