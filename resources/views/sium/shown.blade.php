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
                                 <td>No Pendaftaran</td><td><td><td><td><td><td><td>{{ $crudss->nopendaftaran }}</td>
                             </tr>
                             <tr>
                                 <td>Nama Pemohon</td><td><td><td><td><td><td><td>{{ $crudss->namapemohon }}</td>
                             </tr>
                             <tr>
                                 <td>Tempat Lahir</td><td><td><td><td><td><td><td>{{ $crudss->tempatlahir }}</td>
                             </tr>

                             <tr>
                                 <td>Tanggal Lahir</td><td><td><td><td><td><td><td>{{ $crudss->tanggallahir }}</td>
                             </tr>

                             <tr>
                                 <td>Agama</td><td><td><td><td><td><td><td>{{ $crudss->agama }}</td>
                             </tr>

                             <tr>
                                 <td>Kebangsaan</td><td><td><td><td><td><td><td>{{ $crudss->kebangsaan }}</td>
                             </tr>

                             <tr>
                                 <td>Jenis Kelamin</td><td><td><td><td><td><td><td>{{ $crudss->jeniskelamin }}</td>
                             </tr>

                             <tr>
                                 <td>Status Perkawinan</td><td><td><td><td><td><td><td>{{ $crudss->statusperkawinan }}</td>
                             </tr>

                             <tr>
                                 <td>Pekerjaan</td><td><td><td><td><td><td><td>{{ $crudss->pekerjaan }}</td>
                             </tr>

                             <tr>
                                 <td>Alamat</td><td><td><td><td><td><td><td>{{ $crudss->alamat }}</td>
                             </tr>

                             <tr>
                                 <td>No Passport</td><td><td><td><td><td><td><td>{{ $crudss->nopassport }}</td>
                             </tr>

                             <tr>
                                 <td>No KTP</td><td><td><td><td><td><td><td>{{ $crudss->noktp }}</td>
                             </tr>

                             <tr>
                                 <td>No Telp</td><td><td><td><td><td><td><td>{{ $crudss->notelp }}</td>
                             </tr>

                             <tr>
                                 <td><h4 class="lighter block green">Informasi Berkaitan Hubungan Keluarga</h4></td>
                             </tr>
                             <br>
                             <br>

                             <tr>
                                 <td><h4 class="lighter block green">1. Istri/Suami</h4></td>
                             </tr>

                             <tr>
                                 <td>Nama</td><td><td><td><td><td><td><td>{{ $crudss->nama_istrisuami }}</td>
                             </tr>

                             <tr>
                                 <td>Umur</td><td><td><td><td><td><td><td>{{ $crudss->umur_istrisuami }}</td>
                             </tr>

                             <tr>
                                 <td>Agama</td><td><td><td><td><td><td><td>{{ $crudss->agama_istrisuami }}</td>
                             </tr>

                             <tr>
                                 <td>Kebangsaan</td><td><td><td><td><td><td><td>{{ $crudss->kebangsaan_istrisuami }}</td>
                             </tr>

                             <tr>
                                 <td>Pekerjaan</td><td><td><td><td><td><td><td>{{ $crudss->pekerjaan_istrisuami }}</td>
                             </tr>

                             <tr>
                                 <td>Alamat</td><td><td><td><td><td><td><td>{{ $crudss->alamat_istrisuami }}</td>
                             </tr>
                             <tr>
                                 <td><h4 class="lighter block green">2.Bapak Sendiri</h4></td>
                             </tr>
                             <tr>
                                 <td>Nama</td><td>2.<td><td><td><td><td><td>{{ $crudss->nama_bapak}}</td>
                             </tr>

                             <tr>
                                 <td>Umur</td><td><td><td><td><td><td><td>{{ $crudss->umur_bapak }}</td>
                             </tr>

                             <tr>
                                 <td>Agama</td><td><td><td><td><td><td><td>{{ $crudss->agama_bapak }}</td>
                             </tr>

                             <tr>
                                 <td>Kebangsaan</td><td><td><td><td><td><td><td>{{ $crudss->kebangsaan_bapak }}</td>
                             </tr>

                             <tr>
                                 <td>Pekerjaan</td><td><td><td><td><td><td><td>{{ $crudss->pekerjaan_bapak }}</td>
                             </tr>

                             <tr>
                                 <td>Alamat</td><td><td><td><td><td><td><td>{{ $crudss->alamat_bapak }}</td>
                             </tr>

                             <tr>
                                 <td><h4 class="lighter block green">3.Ibu Sendiri</h4></td>
                             </tr>

                             <tr>
                                 <td>Nama</td><td><td><td><td><td><td><td>{{ $crudss->nama_ibu }}</td>
                             </tr>

                             <tr>
                                 <td>Umur</td><td><td><td><td><td><td><td>{{ $crudss->umur_ibu }}</td>
                             </tr>

                             <tr>
                                 <td>Agama</td><td><td><td><td><td><td><td>{{ $crudss->agama_ibu }}</td>
                             </tr>

                             <tr>
                                 <td>Kebangsaan</td><td><td><td><td><td><td><td>{{ $crudss->kebangsaan_ibu }}</td>
                             </tr>

                             <tr>
                                 <td>Pekerjaan</td><td><td><td><td><td><td><td>{{ $crudss->pekerjaan_ibu }}</td>
                             </tr>

                             <tr>
                                 <td>Alamat</td><td><td><td><td><td><td><td>{{ $crudss->alamat_ibu }}</td>
                             </tr>
                            <tr>
                                 <td><h4 class="lighter block green">4.Saudara Kandung</h4></td>
                             </tr>
                             <tr>
                                 <td><h4 class="lighter block green">4.1 Saudara Pertama</h4></td>
                             </tr>
                             <tr>
                                 <td>Nama</td><td><td><td><td><td><td><td>{{ $crudss->nama_saudrapertama }}</td>
                             </tr>

                             <tr>
                                 <td>Umur</td><td><td><td><td><td><td><td>{{ $crudss->umur_saudrapertama }}</td>
                             </tr>

                             <tr>
                                 <td>Pekerjaan</td><td><td><td><td><td><td><td>{{ $crudss->pekerjaan_saudrapertama }}</td>
                             </tr>

                             <tr>
                                 <td>Alamat</td><td><td><td><td><td><td><td>{{ $crudss->alamat_saudrapertama }}</td>
                             </tr>
                             <tr>
                                 <td><h4 class="lighter block green">4.2 Saudara Kedua</h4></td>
                             </tr>
                             <tr>
                                 <td>Nama</td><td><td><td><td><td><td><td>{{ $crudss->nama_saudrakedua }}</td>
                             </tr>

                              <tr>
                                 <td>Umur</td><td><td><td><td><td><td><td>{{ $crudss->umur_saudrakedua }}</td>
                             </tr>

                              <tr>
                                 <td>Pekerjaan</td><td><td><td><td><td><td><td>{{ $crudss->pekerjaan_saudrakedua }}</td>
                             </tr>
                             <tr>
                                 <td>Alamat</td><td><td><td><td><td><td><td>{{ $crudss->alamat_saudrakedua }}</td>
                             </tr>


                             <tr>
                                 <td><h4 class="lighter block green">4.3 Saudara Ketiga</h4></td>
                             </tr>
                              <tr>
                                 <td>Nama</td><td><td><td><td><td><td><td>{{ $crudss->nama_saudraketiga }}</td>
                             </tr>
                             
                             <tr>
                                 <td>Umur</td><td><td><td><td><td><td><td>{{ $crudss->umur_saudraketiga }}</td>
                             </tr>
                             
                             <tr>
                                 <td>Pekerjaan</td><td><td><td><td><td><td><td>{{ $crudss->pekerjaan_saudraketiga }}</td>
                             </tr>
                             

                             <tr>
                                 <td>Alamat</td><td><td><td><td><td><td><td>{{ $crudss->alamat_saudraketiga }}</td>
                             </tr>
                             <tr>
                                 <td><h4 class="lighter block green">4.4 Saudara Keempat</h4></td>
                             </tr>

                             <tr>
                                 <td>Nama</td><td><td><td><td><td><td><td>{{ $crudss->nama_saudrakeempat }}</td>
                             </tr>
                             

                             <tr>
                                 <td>Umur</td><td><td><td><td><td><td><td>{{ $crudss->umur_saudrakeempat }}</td>
                             </tr>
                             

                             <tr>
                                 <td>Pekerjaan</td><td><td><td><td><td><td><td>{{ $crudss->pekerjaan_saudrakeempat }}</td>
                             </tr>
                             

                             <tr>
                                 <td>Alamat</td><td><td><td><td><td><td><td>{{ $crudss->alamat_saudrakeempat }}</td>
                             </tr>
                             <tr>
                                 <td><h4 class="lighter block green">5. Riwayat Sekolah</h4></td>
                             </tr>
                             <tr>
                                 <td>jenjang 1</td><td><td><td><td><td><td><td>{{ $crudss->jenjangpendidikansatu }}</td>
                             </tr>
                             
                             <tr>
                                 <td>jenjang 2</td><td><td><td><td><td><td><td>{{ $crudss->jenjangpendidikandua }}</td>
                             </tr>
                             

                             <tr>
                                 <td>jenjang 3</td><td><td><td><td><td><td><td>{{ $crudss->jenjangpendidikantiga }}</td>
                             </tr>
                             

                             <tr>
                                 <td>jenjang 4</td><td><td><td><td><td><td><td>{{ $crudss->jenjangpendidikanempat }}</td>
                             </tr>
                             

                             <tr>
                                 <td>jenjang 5</td><td><td><td><td><td><td><td>{{ $crudss->jenjangpendidikanlima }}</td>
                             </tr>
                             <tr>
                                 <td><h4 class="lighter block green">Tersangkut Perkara Pidana dan Pelanggaran

                                </h4></td>
                             </tr>

                             <tr>
                                 <td><h4 class="lighter block green">1. Perkara Pidana



                                </h4></td>
                             </tr>

                             <tr>
                                 <td>a. Apakah Saudara pernah tersangkut perkara pidana?</td><td><td><td><td><td><td><td>{{ $crudss->pertanyaan_perkara }}</td>
                             </tr>
                             

                             <tr>
                                 <td>b. Dalam perkara apa?</td><td><td><td><td><td><td><td>{{ $crudss->perkaraapa }}</td>
                             </tr>

                            <tr>
                                 <td>c. Bagaimana putusannya dan vonis Hakim?
                            </td><td><td><td><td><td><td><td>{{ $crudss->putusanhakim }}</td>
                             </tr>
                            
                            <tr>
                                 <td>d. Apakah Saudara sedang dalam proses perkara pidana?
                            </td><td><td><td><td><td><td><td>{{ $crudss->apakahdalamproseshukum }}</td>
                             </tr>
                             

                            <tr>
                                 <td>e. Sampai sejauh mana proses hukumnya?</td><td><td><td><td><td><td><td>{{ $crudss->sejauhmana }}</td>
                             </tr>
                             <tr>
                                 <td><h4 class="lighter block green">2. Pelanggaran

                                </h4></td>
                             </tr>
                            
                            <tr>
                                 <td>a. Apakah Saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial?
</td><td><td><td><td><td><td><td>{{ $crudss->pelanggaranhukum }}</td>
                             </tr>
                            
                            <tr>
                                 <td>b. Pelanggaran hukum atau norma-norma sosial apa?
</td><td><td><td><td><td><td><td>{{ $crudss->pelanggaranapa }}</td>
                             </tr>
                            
                            <tr>
                                 <td>c. Sampai sejauh mana prosesnya?</td><td><td><td><td><td><td><td>{{ $crudss->sejauhmanapelanggaran }}</td>
                             </tr>
                             <tr>
                                 <td><h4 class="lighter block green">Lain-lain

                                </h4></td>
                             </tr>
                             <tr>
                                 <td><h4 class="lighter block green">1. Informasi Lain

                                </h4></td>
                             </tr>

                             <tr>
                                 <td>Riwayat Pekerjaan</td><td><td><td><td><td><td><td>{{ $crudss->riwayat_pekerjaan }}</td>
                             </tr>
                            <tr>
                                 <td>Hoby</td><td><td><td><td><td><td><td>{{ $crudss->hoby }}</td>
                             </tr>
                            
                            <tr>
                                 <td>Alamat Yang mudah dapat Dihubungi</td><td><td><td><td><td><td><td>{{ $crudss->alamatygmudahdihub }}</td>
                             </tr>
                            <tr>
                                 <td><h4 class="lighter block green">2. Sponsor (Khusus orang asing)

                                </h4></td>
                             </tr>
                            <tr>
                                 <td>a. Disponsori oleh?</td><td><td><td><td><td><td><td>{{ $crudss->sponsor }}</td>
                             </tr>
                            
                            <tr>
                                 <td>b. Alamat sponsor?</td><td><td><td><td><td><td><td>{{ $crudss->alamatsponsor }}</td>
                             </tr>
                            
                            <tr>
                                 <td>c.Telp./Fax?</td><td><td><td><td><td><td><td>{{ $crudss->telpsponsor }}</td>
                             </tr>
                            
                            <tr>
                                 <td>d. Jenis usaha?</td><td><td><td><td><td><td><td>{{ $crudss->jenisusaha }}</td>
                             </tr>
						</table>
					</div>
				</div>
			</div>	
    </div>
</div>
	@endsection