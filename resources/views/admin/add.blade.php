@extends('layouts.profile')

@section('header-in')
    <h4 class="page-title">Tulis Akun Baru</h4> </div>

    <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}">Dashboard</a></li>
        <li class="active">Tulis Akun Baru</li>
    </ol>
@stop

@section('navigation')
    <ul class="nav" id="side-menu">
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/admin') }}" class="waves-effect"><i class="fa fa-sliders fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
        </li>
        <li style="padding: 10px 0 0;">
            <a href="{{ url('/admin/show') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Data Akun</span></a>
        </li>
        <li>
            <a href="{{ url('/admin/add') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Tulis Akun Baru</span></a>
        </li>
    </ul>
@stop

@section('inner')
    <form class="form-horizontal form-material" role="form" method="POST" action="{{ url('/admin/store') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-md-12">Username</label>
            <div class="col-md-12">
                <input type="text" name="username" class="form-control form-control-line" required> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Password</label>
            <div class="col-md-12">
                <input type="password" name="password" class="form-control form-control-line" required> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Confirm Password</label>
            <div class="col-md-12">
                <input type="password" name="password_confirmation" class="form-control form-control-line" required> </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">Role</label>
            <div class="col-sm-12">
                <select class="form-control form-control-line" name="role" required>
                    <option disabled>--Pilih Role--</option>
                    <option value="1">Admin</option>
                    <option value="2">Kapolres</option>
                    <option value="3">Bagops</option>
                    <option value="4">Basumda</option>
                    <option value="5">Bagren</option>
                    <option value="6">Sium</option>
                    <option value="7">Reserse</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Add</button>
            </div>
        </div>
    </form>
@endsection
