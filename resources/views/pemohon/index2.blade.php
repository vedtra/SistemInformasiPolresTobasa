@extends('layouts.masterprimevnew')
@section('header-in')

<div class="container">
	<div class="panel-heading">Silahkan masukan No Pendaftaran Anda untuk Melihat Konfirmasi Permohonan SKCK</div>
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
   
					
        
    </div>
</div>
	@endsection