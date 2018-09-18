
@extends('layouts.master')

@section('header-in')
    <h4 class="page-title">Tulis Anggaran</h4> </div>
    
    <ol class="breadcrumb">
        <li><a href="{{ url('/bagren') }}">Dashboard</a></li>
        <li class="active">Tulis Anggaran</li>
    </ol>
@stop

@section('navigation')
    <ul class="nav" id="side-menu">
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/bagren') }}" class="waves-effect"><i class="fa fa-sliders fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/bagren/tulis_anggaran') }}" class="waves-effect"><i class="fa fa-money fa-fw" aria-hidden="true"></i><span class="hide-menu">Tulis Anggaran</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/bagren/anggaran') }}" class="waves-effect"><i class="fa fa-money fa-fw" aria-hidden="true"></i><span class="hide-menu">Anggaran</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/bagren/laporan') }}" class="waves-effect"><i class="fa fa-book fa-fw" aria-hidden="true"></i><span class="hide-menu">Laporan</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/bagren/perencanaan') }}" class="waves-effect"><i class="fa fa-th-list fa-fw" aria-hidden="true"></i><span class="hide-menu">Perencanaan</span></a>
        </li>
    </ul>
@stop

@section('row1')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <form action="{{url('bagren/tambahanggarans')}}" method="post">
                    {{csrf_field()}}
                        

                        <div class="form-group{{ $errors->has('keperluan') ? ' has-error' : '' }}">
                            <input type="text" name="keperluan" class="form-control" placeholder="Keperluan">
                            {!! $errors->first('Keperluan', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group{{ $errors->has('jumlah_pengeluaran') ? ' has-error' : '' }}">
                            <input type="text" name="jumlah_pengeluaran" class="form-control" placeholder="Jumlah Pengeluaran">
                            {!! $errors->first('Jumlah Pengeluaran', '<p class="help-block">:message</p>') !!}
                        </div>

                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form> 
      
</div>
@endsection
