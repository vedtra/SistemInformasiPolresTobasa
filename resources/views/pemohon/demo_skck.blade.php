@extends('layouts.skck_app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="{{ asset('usium/js/bootstrap.min.js')}}"></script>

    <script src="{{ asset('usium/js/chosen.jquery.min.js')}}"></script>
    
  <script src="{{ asset('usium/js/bootstrap-datetimepicker.min.js')}}"></script>
    
    <!-- ace scripts -->
    <script src="{{ asset('usium/js/ace-elements.min.js') }}"></script>
    <script src="{{ asset('usium/js/ace.min.js') }}"></script>

        </head>    
    <div class="container">
	<div class="panel-heading"></div>
    <div class="row">

            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="hr hr-18 hr-double dotted"></div>

                <div class="widget-box">
                    <div class="widget-header widget-header-blue widget-header-flat">
                        <h4 class="widget-title lighter">Formulir SKCK</h4>
                    </div>
                        <div class="widget-body">
                        <div class="widget-main">
                            <div id="fuelux-wizard-container" class="no-steps-container">
                                <div>
                                    <ul class="steps" style="margin-left: 0">
                                        <li data-step="1" class="active">
                                            <span class="step">1</span>
                                            <span class="title">Data Diri</span>
                                        </li>

                                        <li data-step="2" class="">
                                            <span class="step">2</span>
                                            <span class="title">Hubungan Keluarga</span>
                                        </li>

                                        <li data-step="3">
                                            <span class="step">3</span>
                                            <span class="title">Perkara Pidana</span>
                                        </li>

                                        <li data-step="4">
                                            <span class="step">4</span>
                                            <span class="title">Informasi Lain</span>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="step-content pos-rel">
                                <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{url('/tambahskck/saveskck')}}">
                        {{ csrf_field() }}
                                    <div class="step-pane active" data-step="1">
                                        <div class="form-horizontal" id="sample-form" style="display: block;">

                                             <div class="form-group{{ $errors->has('nopendaftaran') ? ' has-error' : '' }}"><div class="alert alert-success" role="alert">
  <strong>Silahkan Mencatat Nopendaftaran untuk Melihat konfirmasi permohonan SKCK! .</strong>
</div>
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">No Pendaftaran</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="width-100 form-control" name="nopendaftaran" value="<?php echo uniqid('skck',true); 
 
                            ?>" readonly="">
                                                    </span>
                                                </div>
                                            </div>

                                    <div class="form-group{{ $errors->has('nopendaftaran') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Status</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="width-100 form-control" name="status" value="Request" readonly="">
                                                    </span>
                                                </div>
                                            </div>

 
                                        
                                            <hr>
                                            <h3 class="lighter block green">Informasi berkaitan data diri</h3>
                                            <hr>

                                     
                                            <div class="form-group{{ $errors->has('namapemohon') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Nama</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="width-100 form-control" name="namapemohon" value="{{ old('namapemohon') }}" required>
                                                    </span>
                                                </div>
                                            </div>

                                             <div class="form-group{{ $errors->has('tempatlahir') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Tempat Lahir</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="width-100 form-control" name="tempatlahir" value="{{ old('tempatlahir') }}"  required>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('tanggallahir') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Tanggal Lahir</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="date" class="width-100 form-control" name="tanggallahir" value="{{ old('tanggallahir') }}" required>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Agama</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="width-100 form-control" name="agama" value="{{ old('agama') }}" requierd>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('kebangsaan') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Kebangsaan</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="width-100 form-control" name="kebangsaan" value="{{ old('kebangsaan') }}" required>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('jeniskelamin') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Jenis Kelamin</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <select name="jeniskelamin" class="form-control" required>
                                                            <option value="">-pilih jenis kelamin-</option>
                                                            <option value="L">Laki-laki</option>
                                                            <option value="P">Perempuan</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('statusperkawinan') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Status Perkawinan</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <select name="statusperkawinan" class="form-control" required>
                                                            <option value="">-pilih-</option>
                                                            <option value="Kawin">Kawin</option>
                                                            <option value="Tidak Kawin">Tidak Kawin</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>


                                             <div class="form-group{{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Pekerjaan</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="width-100 form-control" name="pekerjaan" value="{{ old('pekerjaan') }}" requierd>
                                                    </span>
                                                </div>
                                            </div>

                                           <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Alamat</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <textarea class="form-control" name="alamat" value="{{ old('alamat') }}" required></textarea>
                                                    </span>
                                                </div>
                                            </div>

                                           <div class="form-group{{ $errors->has('nopassport') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Nomor Passport</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="width-100 form-control" name="nopassport" value="{{ old('nopassport') }}" >
                                                    </span>
                                                </div>
                                            </div>

                                             <div class="form-group{{ $errors->has('noktp') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Nomor KTP</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="width-100 form-control" name="noktp" value="{{ old('noktp') }}" required>
                                                    </span>
                                                </div>
                                            </div>

                                             <div class="form-group{{ $errors->has('notelp') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Nomor Telpon</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="width-100 form-control" name="notelp"  value="{{ old('notelp') }}" required>
                                                    </span>
                                                </div>
                                            </div>
                                    <div class="form-group">
                         <label for="notelp" class="col-md-4 control-label">Scan Kartu Tanda Penduduk</label>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="file" id="inputimages" name="imagesktp" required>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="notelp" class="col-md-4 control-label">Scan Kartu Keluarga</label>
                            
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="file" id="inputimages" name="imageskk" required>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="notelp" class="col-md-4 control-label">Scan Akte Kelahiran</label>
                            
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="file" id="inputimages" name="imagesakte" required>
                            </div>
                        </div>

                                        </div>
                                    </div>

                                    <div class="step-pane" data-step="2">
                                        <div>
                                            <div class="form-horizontal" id="sample-form" style="display: block;">
                                                <hr>
                                                <h3 class="lighter block green">Informasi berkaitan Hubungan Keluarga</h3>
                                                <hr>
                                                <h4 class="lighter block green">1. Istri/Suami</h4>
                                                <hr>
                                                <div class="form-group{{ $errors->has('nama_istrisuami') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Nama</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="nama_istrisuami" value="{{ old('nama_istrisuami') }}" >
                                                        </span>
                                                    </div>
                                                </div>

                                                 <div class="form-group{{ $errors->has('umur_istrisuami') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Umur (tahun)</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="number" class="width-100 form-control" name="umur_istrisuami" value="{{ old('umur_istrisuami') }}">
                                                        </span>
                                                    </div>
                                                </div>

                                                 <div class="form-group{{ $errors->has('agama_istrisuami') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Agama</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="agama_istrisuami" value="{{ old('agama_istrisuami') }}" >
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('kebangsaan_istrisuami') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Kebangsaan</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="kebangsaan_istrisuami" value="{{ old('kebangsaan_istrisuami') }}">
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('pekerjaan_istrisuami') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Pekerjaan</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="pekerjaan_istrisuami" value="{{ old('pekerjaan_istrisuami') }}" >
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('alamat_istrisuami') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Alamat</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="alamat_istrisuami" value="{{ old('alamat_istrisuami') }}">
                                                        </span>
                                                    </div>
                                                </div>
                                                <h4 class="lighter block green">2. Bapak Kandung</h4>
                                                <hr>
                                                <div class="form-group{{ $errors->has('nama_bapak') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Nama</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="nama_bapak" value="{{ old('nama_bapak') }}">
                                                        </span>
                                                    </div>
                                                </div>

                                                 <div class="form-group{{ $errors->has('umur_bapak') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Umur (tahun)</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="umur_bapak" value="{{ old('umur_bapak') }}">
                                                        </span>
                                                    </div>
                                                </div>

                                                 <div class="form-group{{ $errors->has('agama_bapak') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Agama</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="agama_bapak" value="{{ old('agama_bapak') }}">
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('kebangsaan_bapak') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Kebangsaan</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="kebangsaan_bapak" value="{{ old('kebangsaan_bapak') }}">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group{{ $errors->has('pekerjaan_bapak') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Pekerjaan</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="pekerjaan_bapak" value="{{ old('pekerjaan_bapak') }}">
                                                        </span>
                                                    </div>
                                                </div>

                                                 <div class="form-group{{ $errors->has('alamat_bapak') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Alamat</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="alamat_bapak" value="{{ old('alamat_bapak') }}">
                                                        </span>
                                                    </div>
                                                </div>

                                                <h4 class="lighter block green">3. Ibu Kandung</h4>
                                                <hr>
                                                <div class="form-group{{ $errors->has('nama_ibu') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Nama</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="nama_ibu" value="{{ old('nama_ibu') }}">
                                                        </span>
                                                    </div>

                                                </div>
                                                 <div class="form-group{{ $errors->has('umur_ibu') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Umur (tahun)</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="number" class="width-100 form-control" name="umur_ibu" value="{{ old('umur_ibu') }}">
                                                        </span>
                                                    </div>
                                                </div>

                                                 <div class="form-group{{ $errors->has('agama_ibu') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Agama</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="agama_ibu" value="{{ old('agama_ibu') }}">
                                                        </span>
                                                    </div>
                                                </div>

                                                 <div class="form-group{{ $errors->has('kebangsaan_ibu') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Kebangsaan</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="kebangsaan_ibu" value="{{ old('kebangsaan_ibu') }}">
                                                        </span>
                                                    </div>
                                                </div>

                                                 <div class="form-group{{ $errors->has('pekerjaan_ibu') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Pekerjaan</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}">
                                                        </span>
                                                    </div>
                                                </div>

                                                 <div class="form-group{{ $errors->has('alamat_ibu') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Alamat</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="alamat_ibu" value="{{ old('alamat_ibu') }}">
                                                        </span>
                                                    </div>
                                                </div>
                                                <h4 class="lighter block green">4. Saudara Sekandung</h4>
                                                <hr>
                                                <table class="table">
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama</th>
                                                        <th>Umur</th>
                                                        <th>Pekerjaan</th>
                                                        <th>Alamat</th>
                                                    </tr>
                                                                                                            <tr>
                                                            <td>1</td>
                                                            <td><input type="text" name="nama_saudrapertama" class="form-control"></td>
                                                            <td><input type="number" name="umur_saudrapertama" class="form-control"></td>
                                                            <td><input type="text" name="pekerjaan_saudrapertama" class="form-control"></td>
                                                            <td><input type="text" name="alamat_saudrapertama" class="form-control"></td>
                                                        </tr>
                                                                                                            <tr>
                                                            <td>2</td>
                                                            <td><input type="text" name="nama_saudrakedua" class="form-control"></td>
                                                            <td><input type="number" name="umur_saudrakedua" class="form-control"></td>
                                                            <td><input type="text" name="pekerjaan_saudrakedua" class="form-control"></td>
                                                            <td><input type="text" name="alamat_saudrakedua" class="form-control"></td>
                                                        </tr>
                                                                                                            <tr>
                                                            <td>3</td>
                                                            <td><input type="text" name="nama_saudraketiga" class="form-control"></td>
                                                            <td><input type="number" name="umur_saudraketiga" class="form-control"></td>
                                                            <td><input type="text" name="pekerjaan_saudraketiga" class="form-control"></td>
                                                            <td><input type="text" name="alamat_saudraketiga" class="form-control"></td>
                                                        </tr>
                                                                                                            <tr>
                                                            <td>4</td>
                                                            <td><input type="text" name="nama_saudrakeempat" class="form-control"></td>
                                                            <td><input type="number" name="umur_saudrakeempat" class="form-control"></td>
                                                            <td><input type="text" name="pekerjaan_saudrakeempat" class="form-control"></td>
                                                            <td><input type="text" name="alamat_saudrakeempat" class="form-control"></td>
                                                        </tr>
                                                                                                            
                                                                                                    </table>
                                                <h4 class="lighter block green">5. Riwayat Sekolah</h4>
                                                <hr>
                                                <table class="table">
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Jenjang Pendidikan (Tahun Lulus)</th>
                                                        
                                                    </tr>
                                                                                                            <tr>
                                                            <td>1</td>
                                                            <td><input type="text" name="jenjangpendidikansatu" class="form-control"></td>
                                                        </tr>
                                                                                                            <tr>
                                                            <td>2</td>
                                                            <td><input type="text" name="jenjangpendidikandua" class="form-control"></td>
                                                        </tr>
                                                                                                            <tr>
                                                            <td>3</td>
                                                            <td><input type="text" name="jenjangpendidikantiga" class="form-control"></td>
                                                        </tr>
                                                                                                            <tr>
                                                            <td>4</td>
                                                            <td><input type="text" name="jenjangpendidikanempat" class="form-control"></td>
                                                        </tr>
                                                                                                            <tr>
                                                            <td>5</td>
                                                            <td><input type="text" name="jenjangpendidikanlima" class="form-control"></td>
                                                        </tr>
                                                                                                    </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="step-pane" data-step="3">
                                        <div>
                                            <div class="form-horizontal" id="sample-form" style="display: block;">
                                                <hr>
                                                <h3 class="lighter block green">Tersangkut Perkara Pidana dan Pelanggaran</h3>
                                                <hr>
                                                <h4 class="lighter block green">1. Perkara Pidana</h4>
                                                <hr>
                                                 <div class="form-group{{ $errors->has('pertanyaan_perkara') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-12">a. Apakah Saudara pernah tersangkut perkara pidana?</label>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <span class="block input-icon input-icon-right">
                                                            <textarea type="text" class="width-100 form-control" name="pertanyaan_perkara" value="{{ old('pertanyaan_perkara') }}" ></textarea>
                                                        </span>
                                                    </div>
                                                </div>
                                                 <div class="form-group{{ $errors->has('perkaraapa') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-12">b. Dalam perkara apa?</label>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <span class="block input-icon input-icon-right">
                                                            <textarea type="text" class="width-100 form-control" name="perkaraapa" value="{{ old('perkaraapa') }}"></textarea>
                                                        </span>
                                                    </div>
                                                </div>

                                                 <div class="form-group{{ $errors->has('putusanhakim') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-12">c. Bagaimana putusannya dan vonis Hakim?</label>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <span class="block input-icon input-icon-right">
                                                            <textarea type="text" class="width-100 form-control" name="putusanhakim" value="{{ old('putusanhakim') }}"></textarea>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('apakahdalamproseshukum') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-12">d. Apakah Saudara sedang dalam proses perkara pidana?</label>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <span class="block input-icon input-icon-right">
                                                            <textarea type="text" class="width-100 form-control" name="apakahdalamproseshukum" value="{{ old('apakahdalamproseshukum') }}"></textarea>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('sejauhmana') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-12">e. Sampai sejauh mana proses hukumnya?</label>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <span class="block input-icon input-icon-right">
                                                            <textarea type="text" class="width-100 form-control" name="sejauhmana" value="{{ old('sejauhmana') }}"></textarea>
                                                        </span>
                                                    </div>
                                                </div>

                                                <h4 class="lighter block green">2. Pelanggaran</h4>
                                                <hr>
                                              <div class="form-group{{ $errors->has('pelanggaranhukum') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-12">a. Apakah Saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial?</label>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <span class="block input-icon input-icon-right">
                                                            <textarea type="text" class="width-100 form-control" name="pelanggaranhukum" value="{{ old('pelanggaranhukum') }}"></textarea>
                                                        </span>
                                                    </div>
                                                </div>

                                                 <div class="form-group{{ $errors->has('pelanggaranapa') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-12">b. Pelanggaran hukum atau norma-norma sosial apa?</label>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <span class="block input-icon input-icon-right">
                                                            <textarea type="text" class="width-100 form-control" name="pelanggaranapa" value="{{ old('pelanggaranapa') }}"></textarea>
                                                        </span>
                                                    </div>
                                                </div>

                                                 <div class="form-group{{ $errors->has('sejauhmanapelanggaran') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-12">c. Sampai sejauh mana prosesnya?</label>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <span class="block input-icon input-icon-right">
                                                            <textarea type="text" class="width-100 form-control" name="sejauhmanapelanggaran" value="{{ old('sejauhmanapelanggaran') }}"></textarea>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="step-pane" data-step="4">
                                        <div>
                                            <div class="form-horizontal" id="sample-form" style="display: block;">
                                                <hr>
                                                <h3 class="lighter block green">Lain-lain</h3>
                                                <hr>
                                                <h4 class="lighter block green">1. Informasi Lain</h4>
                                                <hr>
                                                <div class="form-group{{ $errors->has('riwayat_pekerjaan') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-12">a. Riwayat Pekerjaan atau Negara-Negara yang pernah dikunjungi?</label>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <span class="block input-icon input-icon-right">
                                                            <textarea type="text" class="width-100 form-control" name="riwayat_pekerjaan" value="{{ old('riwayat_pekerjaan') }}"></textarea>
                                                        </span>
                                                    </div>
                                                </div>

                                                 <div class="form-group{{ $errors->has('hoby') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-12">b. Kesenangan/Kegemaran/Hobi?</label>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <span class="block input-icon input-icon-right">
                                                            <textarea type="text" class="width-100 form-control" name="hoby" value="{{ old('hoby') }}"></textarea>
                                                        </span>
                                                    </div>
                                                </div>

                                                 <div class="form-group{{ $errors->has('alamatygmudahdihub') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-12">c. Alamat yang mudah dihubungi (telepon)?</label>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <span class="block input-icon input-icon-right">
                                                            <textarea type="text" class="width-100 form-control" name="alamatygmudahdihub" value="{{ old('alamatygmudahdihub') }}"></textarea>
                                                        </span>
                                                    </div>
                                                </div>
                                                <h4 class="lighter block green">2. Sponsor (Khusus orang asing)</h4>
                                                <hr>
                                                 <div class="form-group{{ $errors->has('sponsor') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-12">a. Disponsori oleh?</label>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <span class="block input-icon input-icon-right">
                                                            <textarea type="text" class="width-100 form-control" name="sponsor" value="{{ old('sponsor') }}"></textarea>
                                                        </span>
                                                    </div>
                                                </div>

                                                 <div class="form-group{{ $errors->has('alamatsponsor') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-12">b. Alamat sponsor?</label>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <span class="block input-icon input-icon-right">
                                                            <textarea type="text" class="width-100 form-control" name="alamatsponsor" value="{{ old('alamatsponsor') }}"></textarea>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('telpsponsor') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-12">c. Telp./Fax?</label>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <span class="block input-icon input-icon-right">
                                                            <textarea type="text" class="width-100 form-control" name="telpsponsor" value="{{ old('telpsponsor') }}"></textarea>
                                                        </span>
                                                    </div>
                                                </div>

                                                 <div class="form-group{{ $errors->has('jenisusaha') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-12">d. Jenis usaha?</label>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <span class="block input-icon input-icon-right">
                                                            <textarea type="text" class="width-100 form-control" name="jenisusaha" value="{{ old('namapemohon') }}"></textarea>
                                                        </span>
                                                    </div>
                                                </div>
                                                <p>Keterangan diatas saya buat dengan sebenarnya atas sumpah menurut kepercayaan saya. apabila dikemudian hari ternyata keterangan ini tidak benar maka saya sanggup dituntut berdasarkan hukum yang berlaku.</p>
                                            </div>
                                        </div>
                                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>

                            <hr>
                            <div class="wizard-actions">
                                <button class="btn btn-prev" disabled="disabled">
                                    <i class="ace-icon fa fa-arrow-left"></i>
                                    Prev
                                </button>

                                <button class="btn btn-success btn-next" data-last="Finish">
                                    Next
                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i></button>
                            </div>
                        </div><!-- /.widget-main -->
                    </div><!-- /.widget-body -->
                </div>

                <div id="modal-wizard" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div id="modal-wizard-container" class="no-steps-container">
                                <div class="modal-header">
                                    <ul class="steps" style="margin-left: 0">
                                        <li data-step="1" class="active">
                                            <span class="step">1</span>
                                            <span class="title">Validation states</span>
                                        </li>

                                        <li data-step="2">
                                            <span class="step">2</span>
                                            <span class="title">Alerts</span>
                                        </li>

                                        <li data-step="3">
                                            <span class="step">3</span>
                                            <span class="title">Payment Info</span>
                                        </li>

                                        <li data-step="4">
                                            <span class="step">4</span>
                                            <span class="title">Other Info</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="modal-body step-content">
                                    <div class="step-pane active" data-step="1">
                                        <div class="center">
                                            <h4 class="blue">Step 1</h4>
                                        </div>
                                    </div>

                                    <div class="step-pane" data-step="2">
                                        <div class="center">
                                            <h4 class="blue">Step 2</h4>
                                        </div>
                                    </div>

                                    <div class="step-pane" data-step="3">
                                        <div class="center">
                                            <h4 class="blue">Step 3</h4>
                                        </div>
                                    </div>

                                    <div class="step-pane" data-step="4">
                                        <div class="center">
                                            <h4 class="blue">Step 4</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer wizard-actions">
                                <button class="btn btn-sm btn-prev" disabled="disabled">
                                    <i class="ace-icon fa fa-arrow-left"></i>
                                    Prev
                                </button>

                                <button class="btn btn-success btn-sm btn-next" data-last="Finish">
                                    Next
                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                </button>

                                <button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
                                    <i class="ace-icon fa fa-times"></i>
                                    Cancel
                                </button>
                                <script type="text/javascript">
            try{ace.settings.check('main-container' , 'fixed')}catch(e){}
        </script>
        <div class="main-container" id="main-container">
            <div id="sidebar" class="sidebar responsive">
  <script type="text/javascript">
    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    function goBack() {
      window.history.back();
    }
    function refresh() {
      location.reload();
    }
  </script>

                            </div>
                        </div>
                    </div>
                     </form>
                </div><!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
      
    </div>
    </div>

</div>

                </div>
            </div>
            <div class="footer">
	<div class="footer-inner">
		<div class="footer-content">
			<span class="bigger-120">
				<span class="blue bolder"></span>
				
			</span>

			&nbsp; &nbsp;
					</div>
	</div>
</div>
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>        </div>
 <script src="{{ asset('usium/js/ckeditor.js') }}"></script>
            <script src="{{ asset('usium/js/wizard.min.js') }}"></script>
   
    <script>
    $(document).ready(function() {
        $("#reset_waktu_selesai").click(function(){
            $("#waktu_selesai").val("");
        });
        $('.chosen-select').chosen({allow_single_deselect:true});
        $('.datetimepicker').datetimepicker({
            format: 'DD/MM/YYYY h:mm:ss A',//use this option to display seconds
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-arrows ',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
            }
        });


        

        $("#simpan").click(function(event) {
            event.preventDefault();
            var vals = $("#form_berita").find('input, select').serializeArray();
            vals.push({name: 'isi_berita', value: CKEDITOR.instances.editor1.getData()});
            
            $.ajax({
               
                type: 'post',
                dataType: 'json',
                data: vals,
                success: function(data){
                    console.log(data);
                    if(data.status == 1) {
                        $("#msg_submit").html("<i style='color:green;'>"+data.msg+"</i>");
                    }
                    else {
                        $("#msg_submit").html("<i style='color:red;'>"+data.msg+"</i>");
                        setTimeout(function(){ window.location.reload(); }, 5000);
                    }
                }
            });
            
        });

        // timer = setInterval(updateDiv,100);
        // function updateDiv(){
        //     var editorText = CKEDITOR.instances.editor1.getData();
        //     $('#isi_berita').val(editorText);
        // }

    });

    jQuery(function($) {
            
        $('[data-rel=tooltip]').tooltip();
    
        // $('.select2').css('width','200px').select2({allowClear:true})
        // .on('change', function(){
        //     $(this).closest('form').validate().element($(this));
        // }); 
    
    
        var $validation = false;
        $('#fuelux-wizard-container')
        .ace_wizard({
            //step: 2 //optional argument. wizard will jump to step "2" at first
            //buttons: '.wizard-actions:eq(0)'
        })
        .on('actionclicked.fu.wizard' , function(e, info){
            if(info.step == 1 && $validation) {
                if(!$('#validation-form').valid()) e.preventDefault();
            }
        })
        //.on('changed.fu.wizard', function() {
        //})
        .on('finished.fu.wizard', function(e) {
            bootbox.dialog({
                message: "Thank you! Your information was successfully saved!", 
                buttons: {
                    "success" : {
                        "label" : "OK",
                        "className" : "btn-sm btn-primary"
                    }
                }
            });
        }).on('stepclick.fu.wizard', function(e){
            //e.preventDefault();//this will prevent clicking and selecting steps
        });
    
    
        //jump to a step
        /**
        var wizard = $('#fuelux-wizard-container').data('fu.wizard')
        wizard.currentStep = 3;
        wizard.setState();
        */
    
        //determine selected step
        //wizard.selectedItem().step
    
    
    
        //hide or show the other form which requires validation
        //this is for demo only, you usullay want just one form in your application
        $('#skip-validation').removeAttr('checked').on('click', function(){
            $validation = this.checked;
            if(this.checked) {
                $('#sample-form').hide();
                $('#validation-form').removeClass('hide');
            }
            else {
                $('#validation-form').addClass('hide');
                $('#sample-form').show();
            }
        })
    
    
    
        //documentation : http://docs.jquery.com/Plugins/Validation/validate
    
    
        $.mask.definitions['~']='[+-]';
        $('#phone').mask('(999) 999-9999');
    
        jQuery.validator.addMethod("phone", function (value, element) {
            return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
        }, "Enter a valid phone number.");
    
        $('#validation-form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            ignore: "",
            rules: {
                email: {
                    required: true,
                    email:true
                },
                password: {
                    required: true,
                    minlength: 5
                },
                password2: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                name: {
                    required: true
                },
                phone: {
                    required: true,
                    phone: 'required'
                },
                url: {
                    required: true,
                    url: true
                },
                comment: {
                    required: true
                },
                state: {
                    required: true
                },
                platform: {
                    required: true
                },
                subscription: {
                    required: true
                },
                gender: {
                    required: true,
                },
                agree: {
                    required: true,
                }
            },
    
            messages: {
                email: {
                    required: "Please provide a valid email.",
                    email: "Please provide a valid email."
                },
                password: {
                    required: "Please specify a password.",
                    minlength: "Please specify a secure password."
                },
                state: "Please choose state",
                subscription: "Please choose at least one option",
                gender: "Please choose gender",
                agree: "Please accept our policy"
            },
    
    
            highlight: function (e) {
                $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
            },
    
            success: function (e) {
                $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                $(e).remove();
            },
    
            errorPlacement: function (error, element) {
                if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                    var controls = element.closest('div[class*="col-"]');
                    if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                    else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                }
                // else if(element.is('.select2')) {
                //     error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                // }
                else if(element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element.parent());
            },
    
            submitHandler: function (form) {
            },
            invalidHandler: function (form) {
            }
        });
    
        
        
        
        $('#modal-wizard-container').ace_wizard();
        $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
        
        
        /**
        $('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
            $(this).closest('form').validate().element($(this));
        });
        
        $('#mychosen').chosen().on('change', function(ev) {
            $(this).closest('form').validate().element($(this));
        });
        */
        
        
        $(document).one('ajaxloadstart.page', function(e) {
            //in ajax mode, remove remaining elements before leaving page
            // $('[class*=select2]').remove();
        });
    });


    </script>
	<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs1.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKUXBMgf6AC9AYeDsMxJZa%2bdqj2uQia6EhvA1xaKwNFfKiDqBLasK29M231tCX4QVY0dllOizP2BbAdzTw%2fePMuheeMJO1Lg3YH%2fivCf42bEO8zwWDrfVuhZPA8W8fN9GWjcCj6K58nU3IBxhNlZThwP62DUMpbHkzGrqUEVfARBMVy6AEyqjk9q1n8Nu6Ozd9diVBbAno%2fZ56sxTWdCRddaLmWcRtS9m3A46DSck7X60Vsu4gyvbs9POEfKRuytozh1GTWoBeSjoy8ehZW08KVDhFAWCdo9Oc1IHpyHCCRiez1YpJG%2fMG7WZ7ZuauSl%2fi7K9mmzjfJFfNyBcWvVQbzCZ85%2bNj6MCTSVoR3qPb2E%2b83W17RfFYC%2f0lxOYVNjYDOP%2fZspwP62epzIIGL486xsC3ynaTJCtFDavKlGsI%2bsjRuKpogSbtnVESCtzY9H6JAMqzwNqQhFaP%2bLfXwS1oJ%2b99X3mGaE6pp4qCo33ZQB74YAowezjvlYwATrTg%2ffNMfBap2pMHZvaanoAbE3Y%2f%2bMTDymhGagOd" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>





    </div>
    </div>

</html>
@endsection