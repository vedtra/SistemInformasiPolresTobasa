@extends('layouts.master')

@section('header-in')
    <h4 class="page-title"></h4> </div>
    
    <ol class="breadcrumb">
        <li><a href="{{ url('/reserse') }}">Dashboard</a></li>
        <li class="active">Data Kasus</li>
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
            
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
								<th>Nama Kasus</th>
								<th>Waktu kejadian</th>
								<th>Nama Pelaku</th>
								<th>Nama Pelapor</th>	
								<th>Barang Bukti</th>
								<th>Tempat Perkara</th>
								<th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kas as $pelakus)
						<tr>
							<td>{{$pelakus->nama_kasus}}</td>
							<td>{{$pelakus->waktu_kejadian}}</td>
							<td>{{$pelakus->dalaku->nama_pelaku}}</td>
							<td>{{$pelakus->dalapor->nama_pelapor}}</td>
							<td>{{$pelakus->barbut->nama_barang}}</td>
							<td>{{$pelakus->datkp->nama_tempat}}</td>


							<td>
								<form method="POST" action="{{ route('hapuskasus.destroy', $pelakus->id_kasus) }}" accept-charset="UTF-8">
		                            <input name="_method" type="hidden" value="DELETE">
		                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
		                            <a href="{{url('/tampilkankasus', $pelakus->id_kasus)}}" class="btn btn-success">Tampilkan</a> 
		                            <input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Hapus">
		                        </form>
							</td>
						</tr>
						@endforeach
                        </tbody>
                    </table>
        </div>
    </div>
@stop