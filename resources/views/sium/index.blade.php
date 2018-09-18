@extends('layouts.master')

@section('navigation')
    <ul class="nav" id="side-menu">
        <li style="padding: 10px 0 0;">
            <a href="{{url('/sium') }}" class="waves-effect"><i class="fa fa-sliders fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
        </li>
        <li>
            <a href="{{url('/sium/data') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Data Pemohon</span></a>
        </li>                    
        <li>
            <a href="{{url('/sium/laporan') }}" class="waves-effect"><i class="fa fa-book fa-fw" aria-hidden="true"></i><span class="hide-menu">Laporan</span></a>
        </li>
    </ul>
@stop

@section('row1')
<div class="col-sm-12">
       <div class="white-box">
			<div class="container">
				<div class="panel-heading"></div>
		    		<div class="row">
		    			<table class="table table-striped">
							<tr>
								<th>No Pendaftaran</th>
								<th>Nama Pemohon</th>
								<th>Alamat</th>
								<th>Tgl Lahir</th>
								<th>Agama</th>
								<th>Kebangsaan</th>
								<th>Pekerjaan</th>
								<th>No Telp/HP</th>
								<!--<th>Foto KTP</th>
								<th>Foto KK</th>
								<th>Foto Akte Kelahiran</th>-->
								<th>Status</th>
								<th>Action</th>
							</tr>
							@foreach($crudss as $key => $crud)
							<tr>
								<td>{{$crud->nopendaftaran}}</td>
								<td>{{$crud->namapemohon}}</td>
								<td>{{$crud->alamat}}</td>
								<td>{{$crud->tanggallahir}}</td>
								<td>{{$crud->agama}}</td>
								<td>{{$crud->kebangsaan}}</td>
								<td>{{$crud->pekerjaan}}</td>
								<td>{{$crud->notelp}}</td>
							  	<td>{{$crud->status}}</td>
								<td>
									<form method="POST" action="{{ route('hapusskck.destroy', $crud->id) }}" accept-charset="UTF-8">
			                            <input name="_method" type="hidden" value="DELETE">
			                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
			                            <a href="{{url('sium/konf', $crud->id)}}" class="fa fa-check-square fa-fw"></a>
			                            <a href="{{url('tampilkanskck', $crud->id)}}" class="fa fa-eye fa-fw"></a>
			                            <a href="{{url('hapusskck', $crud->id)}}" class="fa fa-trash-o fa-fw"></a>
			                        </form>
								</td>
							</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>	
    </div>
</div>
	@endsection