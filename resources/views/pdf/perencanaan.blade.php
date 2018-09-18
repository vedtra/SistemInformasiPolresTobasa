<!DOCTYPE html>
<html>
	<head>
		<title>Perencanaan</title>
	</head>
	<body>
		<table>
			<tr>
				<td>
					<center>
						KEPOLISIAN REPUBLIK INDONESIA<br>
						DAERAH SUMATERA UTARA<br>
						RESORT TOBASA<br>
						<u>Jalan Sipinggol Dolok Siantar Narumonda 22384</u>
					</center>
				</td>
				<td width="400px">
				</td>
			</tr>
			<tr>
				<td></td>
				<td align="right">
					Siantar Narumonda,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Juni 2017
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td>Nomor</td>
							<td>:</td>
							<td>B/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/III/2017</td>
						</tr>
						<tr>
							<td>Klarifikasi</td>
							<td>:</td>
							<td>BIASA</td>
						</tr>
						<tr>
							<td>Lampiran</td>
							<td>:</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Perihal</td>
							<td>:</td>
							<td>Surat Permohonan Melakukan {{ $perencanaans->nama_kegiatan }}</td>
						</tr>
					</table>
				</td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td style="padding-left: 174px;">
					Kepada<br>
					Yth. Kepala Bagian Perencanaan<br>
					Polres Tobasa<br>
					di<br>
					<u>Porsea</u>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					Dengan hormat,<br><br>
					Melalui surat ini, kami dari

					@if($perencanaans->divisi == 3)
						Bagian Operasional
					@elseif($perencanaans->divisi == 4)
						Bagian Sumber Daya
					@elseif($perencanaans->divisi == 5)
						Bagian Perencanaan
					@elseif($perencanaans->divisi == 6)
						Bagian Sium
					@elseif($perencanaans->divisi == 7)
						Bagian Reserse dan Kriminalitas
					@endif

					mengajukan rencana untuk melakukan kegiatan dengan rincian sebagai berikut :<br><br>
					nama kegiatan : {{ $perencanaans->nama_kegiatan }}<br>
					tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $perencanaans->tanggal }}<br>
					waktu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $perencanaans->waktu }}<br>
					tempat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $perencanaans->tempat_pelaksanaan }}<br>
					deskripsi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $perencanaans->deskripsi }}<br>
					anggaran&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $perencanaans->anggaran }}<br><br>
					Demikian surat pengajuan ini kami sampaikan. Atas perhatian Saudara saya mengucapkan terimakasih.
				</td>
			</tr>
			<tr>
				<td height="150px"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<center> 
						@if($perencanaans->divisi == 3)
							Kepala Bagian Operasional
						@elseif($perencanaans->divisi == 4)
							Kepala Bagian Sumber Daya
						@elseif($perencanaans->divisi == 5)
							Kepala Bagian Perencanaan
						@elseif($perencanaans->divisi == 6)
							Kepala Bagian Sium
						@elseif($perencanaans->divisi == 7)
							Kepala Bagian Reserse dan Kriminalitas
						@endif
						<br><br><br><br><br><br><br><br>
						@if($perencanaans->divisi == 3)
							Nama Kepala Bagian Operasional
						@elseif($perencanaans->divisi == 4)
							Nama Kepala Bagian Sumber Daya
						@elseif($perencanaans->divisi == 5)
							Nama Kepala Bagian Perencanaan
						@elseif($perencanaans->divisi == 6)
							Nama Kepala Bagian Sium
						@elseif($perencanaans->divisi == 7)
							Nama Kepala Bagian Reserse dan Kriminalitas
						@endif
					</center>
				</td>
			</tr>
		</table>
	</body>
</html>
