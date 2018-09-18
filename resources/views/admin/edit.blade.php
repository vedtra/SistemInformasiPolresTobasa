@extends('layouts.profile')
@extends('layouts.masterphoto')

@section('header-in')
    <h4 class="page-title">Edit Data Anggota</h4> </div>

    <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}">Dashboard</a></li>
        <li class="active">Data Akun</li>
        <li class="active">Edit Data Akun</li>
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
    <form class="form-horizontal form-material" role="form" method="POST" action="{{url('admin/update',$user->id_user)}}">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-md-12">Username</label>
            <div class="col-md-12">
                <input type="text" name="username" value="{{ $user->username }}" class="form-control form-control-line"> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Password</label>
            <div class="col-md-12">
                <input type="password" name="password" value="{{ $user->password }}" class="form-control form-control-line"> </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">Role</label>
            <div class="col-sm-12">
                <select class="form-control form-control-line" name="role">
                <option value="{{$user->userRole->id_divisi}}">{{$user->userRole->nama_divisi}}</option>
                <option value="">--PILIH ROLE--</option>
                @foreach($roles as $role)
                <option value="{{$role->id_divisi}}">{{$role->nama_divisi}}</option>
                @endforeach
                    <!-- <option>--Pilih Role--</option>
                    <option value="1">admin</option>
                    <option value="2">kapolres</option>
                    <option value="3">bagops</option>
                    <option value="4">basumda</option>
                    <option value="5">bagren</option>
                    <option value="6">sium</option>
                    <option value="7">reserse</option> -->
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
