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
	<div class="container">
    <div class="row">
    <table class="table table-striped">
						<tr>
							<th>No</th>
							<th>Keperluan</th>
							<th>Jumlah Pengeluaran</th>
							<th>Tanggal</th>
							
							
						</tr>
						<?php $i=0 ?>
						@foreach($crudss as $crud)
						<?php $i++ ?>
						<tr>
							<td>{{ $i }}</td>
							<td>{{$crud->keperluan}}</td>
							<td>{{$crud->jumlah_pengeluaran}}</td>
							<td>{{date('d-m-Y', strtotime($crud->created_at))}}</td>
							<td>
								<form method="POST" action="{{ route('hapusanggaran.destroy', $crud->id_anggaran) }}" accept-charset="UTF-8">
		                            <input name="_method" type="hidden" value="DELETE">
		                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
		                        </form>
							</td>
						</tr>
						@endforeach
						<tr>
                                 <td>Total</td><td><td>Rp {{$tambah}}</td>
                             </tr>

                            
					</table>
					
    </div>
</div>
	@endsection