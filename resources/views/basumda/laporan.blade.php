
@extends('layouts.master')
@extends('layouts.masterphoto')

@section('header-in')
    <h4 class="page-title">Laporan</h4> </div>
    
    <ol class="breadcrumb">
        <li><a href="{{ url('/basumda') }}">Dashboard</a></li>
        <li class="active">Laporan</li>
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
            <form class="form-horizontal form-material" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/basumda/sv_lap') }}"">
                {{ csrf_field() }}

                <div class="form-group">
                    <div class="col-md-12">
                        <input type="file" id="inputfiles" name="files" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('row2')
    <div class="col-sm-12">
        <div class="white-box">
            
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>FILE NAME</th>
                                <th>UPLOAD DATE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0 ?>
                            @foreach($laporans as $laporan)
                            <?php $i++ ?>
                            <tr>
                                <td class="txt-oflo">{{ $i }}</td>
                                <td class="txt-oflo">{{ $laporan->files }}</td>
                                <td><span class="text-success">{{ $laporan->created_at }}</span></td>
                                <td>
                                    <form class="" action="{{url('basumda/del_lap',$laporan->id_laporan)}}" method="post">
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