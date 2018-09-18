@extends('layouts.masterprimevnew')

@section('header-in')
    <h4 class="page-title">Pencarian</h4> </div>
    
    <ol class="breadcrumb">
        <li><a href="{{ url('/pemohon/index') }}">Pencarian</a></li>
    </ol>
@stop

@section('navigation')
    <ul class="nav" id="side-menu">
    <li>
          <a href="{{url('/skck') }}" class="waves-effect"><i class="fa fa-home fa-fw" aria-hidden="true"></i><span class="hide-menu">Home</span></a>
      </li>                    
  </ul>
@stop

@section('row1')
	<div class="container">
	<div class="panel-heading"></div>
    <div class="row">
 

    <div class="panel-heading">{!! Form::open(['method'=>'GET','url'=>'pencarian','class'=>'navbar-form navbar-left','role'=>'search']) !!}
      <div class="input-group custom-search-form">
        <input type="text" name="search" class="form-control" placeholder="Search ....">
        <span class="input-group-btn">
          <button type="submit" class="btn btn-default-sm">
            <i class="fa fa-search"></i>
          </button>
        </span>
      </div>
      {!! Form::close() !!}</div>
      
    <table class="table table-striped">
						<tr>
							<th>No Pendaftaran</th>
							<th>Nama Pemohon</th>
							<th>Jenis Kelamin</th>
							<th>Status</th>
              <th>Action</th>
						</tr>
						@foreach($crudss as $crud)
						<tr>
							<td>{{$crud->nopendaftaran}}</td>
							<td>{{$crud->namapemohon}}</td>
							<td>{{$crud->jeniskelamin}}</td>
							<td>{{$crud->status}}</td>
              <td><a href="{{url('/pdf', $crud->id)}}" class="waves-effect"> <span class="glyphicon glyphicon-print"></span> Print
                </a></a><td>
							<!--<div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                <td><img src="/image/{{ $crud->imagesktp }}" alt="gambar" style="max-width: 200px; max-height: 150px; float: left;"/> </td>
                 </div>
                 </div>


                 <div class="col-md-6 col-md-offset-4">
                <td><img src="/image/{{ $crud->imageskk }}" alt="gambar" style="max-width: 200px; max-height: 150px; float: left;"/> </td>
                 </div>
                 </div>


                 <div class="col-md-6 col-md-offset-4">
                <td><img src="/image/{{ $crud->imagesakte }}" alt="gambar" style="max-width: 200px; max-height: 150px; float: left;"/> </td>
                 </div>
                 </div>-->
						</tr>
						@endforeach
					</table>
    </div>
</div>
	@endsection