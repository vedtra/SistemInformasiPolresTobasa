
@extends('layouts.master')

@section('header-in')
    <h4 class="page-title">Data Akun</h4> </div>
    
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}">Dashboard</a></li>
        <li class="active">Data Akun</li>
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

@section('row1')
    <div class="col-sm-12">
        <div class="white-box">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>USERNAME</th>
                                <th>ROLE</th>
                                <th>PASSWORD</th>
                                <th>ACTION</th>
                            </tr>
                            {{ csrf_field() }}
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="txt-oflo">{{ $user->username }}</td>
                                <td><span class="text-success">{{ $user->nama_divisi }}</span></td>
                                <td class="txt-oflo">{{ $user->password }}</td>
                                <td>
                                    <form class="" action="{{url('admin/delete',$user->id_user)}}" method="post">
                                    <input type="hidden" name="method" value="delete">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <a href="{{url('admin/edit',$user->id_user)}}" class="btn btn-primary">Edit</a>
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data ?');" name="name" value="Delete">
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
@endsection
