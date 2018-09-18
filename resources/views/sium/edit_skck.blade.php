@extends('layouts.profile')
@extends('layouts.masterphoto')

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

@section('inner')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="{{url('sium/updatesium', $crudss->id)}}" role="form" method="post">
                    <input name="_method" type="hidden" value="PATCH">
                    {{csrf_field()}}
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Konfirmasi</label>

                                <div class="col-xs-12 col-sm-5">
                                    <span class="block input-icon input-icon-right">
                                        <select name="status" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <option value="diterima">diterima</option>
                                            <option value="ditolak">ditolak</option>
                                        </select>
                                    </span>
                                </div>
                        </div>

                        <br><br><br>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
