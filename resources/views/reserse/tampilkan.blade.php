@extends('layouts.master')

@section('header-in')
    <h4 class="page-title"></h4> </div>
    
    <ol class="breadcrumb">
        <li><a href="{{ url('/reserse') }}">Dashboard</a></li>
        <li class="active">Data Kasus</li>
        <li class="active">Detail</li>
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
	<div class="container">
	<div class="panel-heading"></div>
    <div class="row">
    <table class="table table-striped">

                           
                             <tr>
                                 <td><h4 class="lighter block green" width="100%"><b>Kasus</b></h4></td>
                             </tr>
                             <tr>
                                 <td>Nama kasus</td><td><td><td><td><td><td><td>{{ $kasu->nama_kasus }}</td>
                             </tr>
                             <tr>
                                 <td>Waktu Kejadian</td><td><td><td><td><td><td><td>{{ $kasu->waktu_kejadian }}</td>
                             </tr>
                             <tr>
                                 <td><h4 class="lighter block green" width="100%"><b>Data Pelaku</b></h4></td>
                             </tr>
                             
                             <tr>
                                 <td>Nama Pelaku</td><td><td><td><td><td><td><td>{{ $kasu->dalaku->nama_pelaku }}</td>
                             </tr>

                             <tr>
                                 <td>Agama</td><td><td><td><td><td><td><td>{{ $kasu->dalaku->Agama }}</td>
                             </tr>

                             <tr>
                                 <td>Jenis kelamin</td><td><td><td><td><td><td><td>{{ $kasu->dalaku->jeniskelamin }}</td>
                             </tr>

                             <tr>
                                 <td>Tanggal Lahir</td><td><td><td><td><td><td><td>{{ $kasu->dalaku->tgllahir_pelaku }}</td>
                             </tr>

                             <tr>
                                 <td>Alamat</td><td><td><td><td><td><td><td>{{ $kasu->dalaku->alamat }}</td>
                             </tr>

                             <tr>
                                 <td>Kebangsaan</td><td><td><td><td><td><td><td>{{ $kasu->dalaku->kewarganegaraan }}</td>
                             </tr>

                             <tr>
                                 <td>Foto</td><td><td><td><td><td><td>

                                 <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                <td><img src="/image/{{ $kasu->dalaku->images_pelaku }}" alt="gamabar" style="max-width: 200px; max-height: 150px; float: left;"/> </td>
                 </div>
                 </div>
                 </td>
                             </tr>

                             <tr>
                                 <td><h4 class="lighter block green" width="100%"><b>Data Pelapor</b></h4></td>
                             </tr>

                             <tr>
                                 <td>Nama Pelapor</td><td><td><td><td><td><td><td>{{ $kasu->dalapor->nama_pelapor }}</td>
                             </tr>

                             <tr>
                                 <td>Agama</td><td><td><td><td><td><td><td>{{ $kasu->dalapor->Agama }}</td>
                             </tr>

                             <tr>
                                 <td>Jenis Kelamin</td><td><td><td><td><td><td><td>{{ $kasu->dalapor->jeniskelamin }}</td>
                             </tr>

                    

                             <tr>
                                 <td>No Telp</td><td><td><td><td><td><td><td>{{ $kasu->dalapor->notelp }}</td>
                             </tr>

                             <tr>
                                 <td>Tanggal Lahir</td><td><td><td><td><td><td><td>{{ $kasu->dalapor->tgllahir_pelapor }}</td>
                             </tr>

                             <tr>
                                 <td>Alamat</td><td><td><td><td><td><td><td>{{ $kasu->dalapor->alamat }}</td>
                             </tr>

                             <tr>
                                 <td>Pekerjaan</td><td><td><td><td><td><td><td>{{ $kasu->dalapor->pekerjaan }}</td>
                             </tr>

                             <tr>
                                 <td>Kebangsaan</td><td><td><td><td><td><td><td>{{ $kasu->dalapor->kewarganegaraan }}</td>
                             </tr>

                             <tr>
                                 <td>Foto</td><td><td><td><td><td><td> 
                                 <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                <td><img src="/image/{{ $kasu->dalapor->images }}" alt="gamabar" style="max-width: 200px; max-height: 150px; float: left;"/> </td>
                 </div>
                 </div>

                                 </td>
                             </tr>

                             <tr>
                                 <td><h4 class="lighter block green" width="100%"><b>Data Barang Bukti</b></h4></td>
                             </tr>

                             <tr>
                                 <td>Nama Barang</td><td><td><td><td><td><td><td>{{ $kasu->barbut->nama_barang }}</td>
                             </tr>

                             <tr>
                                 <td>Keterangan</td><td><td><td><td><td><td><td>{{ $kasu->barbut->keterangan }}</td>
                             </tr>

                             <tr>
                                 <td>Foto</td><td><td><td><td><td><td>
                                     <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                <td><img src="/image/{{ $kasu->barbut->images_barang }}" alt="gambar" style="max-width: 200px; max-height: 150px; float: left;"/> </td>
                 </div>
                 </div>

                                 </td>
                             </tr>

                             <tr>
                                 <td><h4 class="lighter block green" width="100%"><b>Data TKP</b></h4></td>
                             </tr>

                             <tr>
                                 <td>Nama Tempat</td><td><td><td><td><td><td><td>{{ $kasu->datkp->nama_tempat }}</td>
                             </tr>

                             <tr>
                                 <td>Alamat</td><td><td><td><td><td><td><td>{{ $kasu->datkp->alamat }}</td>
                             </tr>

                             
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
	@endsection