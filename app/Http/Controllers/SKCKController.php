<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skck;
use App\Models\Laporan;
use App\Http\Requests;
use Carbon\Carbon;
use PDF;
use DB;

class SKCKController extends Controller
{
    public function index()
    {
        return view('pemohon.index');
    }

    public function halpemohon()
    {
        return view('pemohon.index2');
    }

    public function skck()
    {
    	$crudss = Skck::all();

        return view('pemohon.index',['crudss' => $crudss]);
        //
    }
    public function pencarian()
    {
        $crudss = Skck::all();

        $search = \Request::get('search');
        $crudss = Skck::where('nopendaftaran','like','%'.$search.'%')->orderBy('id')->paginate(1);
        
        return view('pemohon.pencarian_skck',['crudss' => $crudss]);
        //
    }
    public function pemohonskck()
    {
        $crudss = Skck::all();
        
        return view('sium.index',['crudss' => $crudss]);
        //
    }

public function editskck($id)
    {
        $crudss = Skck::findOrFail($id);
        return view('editskck', compact('crudss'));
        //
    }

public function konf($id)
    {
        $crudss = Skck::find($id);
        return view('sium.edit_skck', compact('crudss'));
    }

public function show($id)
    {
        $crudss = Skck::find($id);
       return view('sium.shown', compact('crudss'));
        //
    }
public function update(Request $request, $id)
    {
        $crudss = Skck::findOrFail($id);
       
        $crudss->namapemohon = $request->namapemohon;
        
        $crudss->alamat = $request ->alamat;
        $crudss->tgllahir= $request ->tgllahir;
        $crudss->agama = $request ->agama;
        $crudss->kebangsaan = $request ->kebangsaan;
        $crudss->jeniskelamin = $request ->jeniskelamin;
        $crudss->statusperkawinan = $request ->statusperkawinan;
        $crudss->pekerjaan = $request ->pekerjaan;
        $crudss->notelp = $request ->notelp;
        $crudss->status = $request ->status;
        $crudss->save();
        return redirect()->route('sium.index')->with('alert-success', 'Data Berhasil Diubah.');
        //
    }


public function updates(Request $request, $id)
    {
        $crudss = Skck::find($id);
       
        
        $crudss->status = $request ->status;
        
        $crudss->save();

        return redirect('sium/data')->with('alert-success', 'Data Berhasil Diubah.');
        //
    }
	public function createskck()
    {
        return view ('pemohon.demo_skck');
        //
    }
    public function store(Request $request)
    {
        
        $crudss = new Skck();
        
        $crudss->namapemohon = $request->namapemohon;
        //$crudss->tempattgllahir = $request->datepicker;
        $crudss->tempatlahir = $request ->tempatlahir;
        $crudss->tanggallahir=$request->tanggallahir;
        $crudss->tanggallahir=Carbon::parse($request->date_of_birth)->format('m-d-y');
        $crudss->agama = $request ->agama;
        $crudss->kebangsaan = $request ->kebangsaan;
        $crudss->jeniskelamin = $request ->jeniskelamin;
        $crudss->statusperkawinan = $request ->statusperkawinan;
        $crudss->pekerjaan = $request ->pekerjaan;
        $crudss->status = $request ->status;
        $crudss->alamat = $request ->alamat;

        $crudss->nopassport = $request ->nopassport;        
        $crudss->noktp = $request ->noktp;
        $crudss->notelp = $request ->notelp;
        $crudss->nama_istrisuami = $request ->nama_istrisuami;
        $crudss->umur_istrisuami = $request ->umur_istrisuami;
        $crudss->agama_istrisuami = $request ->agama_istrisuami;
        $crudss->kebangsaan_istrisuami = $request ->kebangsaan_istrisuami;
        $crudss->pekerjaan_istrisuami = $request ->pekerjaan_istrisuami;
        $crudss->alamat_istrisuami = $request ->alamat_istrisuami;
        $crudss->nama_bapak = $request ->nama_bapak;
        $crudss->umur_bapak = $request ->umur_bapak;
        $crudss->agama_bapak = $request ->agama_bapak;
        $crudss->kebangsaan_bapak = $request ->kebangsaan_bapak;
        $crudss->pekerjaan_bapak = $request ->pekerjaan_bapak;
        $crudss->alamat_bapak = $request ->alamat_bapak;
        $crudss->nama_ibu = $request ->nama_ibu;
        $crudss->umur_ibu = $request ->umur_ibu;
        $crudss->agama_ibu = $request ->agama_ibu;
        $crudss->kebangsaan_ibu = $request ->kebangsaan_ibu;
        $crudss->pekerjaan_ibu = $request ->pekerjaan_ibu;
        $crudss->alamat_ibu = $request ->alamat_ibu;

        $crudss->nama_saudrapertama = $request ->nama_saudrapertama;
        $crudss->umur_saudrapertama = $request ->umur_saudrapertama;
        $crudss->pekerjaan_saudrapertama = $request ->pekerjaan_saudrapertama;
        $crudss->alamat_saudrapertama = $request ->alamat_saudrapertama;

        $crudss->nama_saudrakedua= $request ->nama_saudrakedua;
        $crudss->umur_saudrakedua = $request ->umur_saudrakedua;
        $crudss->pekerjaan_saudrakedua = $request ->pekerjaan_saudrakedua;
        $crudss->alamat_saudrakedua = $request ->alamat_saudrakedua;

        $crudss->nama_saudraketiga = $request ->nama_saudraketiga;
        $crudss->umur_saudraketiga = $request ->umur_saudraketiga;
        $crudss->pekerjaan_saudraketiga = $request ->pekerjaan_saudraketiga;
        $crudss->alamat_saudraketiga = $request ->alamat_saudraketiga;

        $crudss->nama_saudrakeempat = $request ->nama_saudrakeempat;
        $crudss->umur_saudrakeempat = $request ->umur_saudrakeempat;
        $crudss->pekerjaan_saudrakeempat = $request ->pekerjaan_saudrakeempat;
        $crudss->alamat_saudrakeempat = $request ->alamat_saudrakeempat;

        $crudss->jenjangpendidikansatu = $request ->jenjangpendidikansatu;
        $crudss->jenjangpendidikandua = $request ->jenjangpendidikandua;
        $crudss->jenjangpendidikantiga = $request ->jenjangpendidikantiga;
        $crudss->jenjangpendidikanempat = $request ->jenjangpendidikanempat;
        $crudss->jenjangpendidikanlima = $request ->jenjangpendidikanlima;
        $crudss->pertanyaan_perkara = $request ->pertanyaan_perkara;
        $crudss->perkaraapa = $request ->perkaraapa;
        $crudss->putusanhakim = $request ->putusanhakim;
        $crudss->apakahdalamproseshukum = $request ->apakahdalamproseshukum;
        $crudss->sejauhmana = $request ->sejauhmana;
        $crudss->pelanggaranhukum = $request ->pelanggaranhukum;
        $crudss->pelanggaranapa = $request ->pelanggaranapa;
        $crudss->sejauhmanapelanggaran = $request ->sejauhmanapelanggaran;
        $crudss->riwayat_pekerjaan = $request ->riwayat_pekerjaan;
        $crudss->hoby = $request ->hoby;
        $crudss->alamatygmudahdihub = $request ->alamatygmudahdihub;
        $crudss->sponsor = $request ->sponsor;
        $crudss->alamatsponsor = $request ->alamatsponsor;
        $crudss->telpsponsor = $request ->telpsponsor;
        $crudss->jenisusaha = $request ->jenisusaha;
        
        $crudss->save();
        return redirect('pemohon/skck')->with('alert-success', 'Data Berhasil Disimpan.');
        //
    }

    public function create(Request $request)
    {
        $crudss = new Skck;
        $crudss->nopendaftaran = $request->nopendaftaran;
        $crudss->namapemohon = $request->namapemohon;
        //$crudss->tempattgllahir = $request->datepicker;
        $crudss->tempatlahir = $request ->tempatlahir;
        $crudss->tanggallahir=$request->tanggallahir;
        $crudss->tanggallahir=Carbon::parse($request->tanggallahir)->format('y-m-d');
        $crudss->agama = $request ->agama;
        $crudss->kebangsaan = $request ->kebangsaan;
        $crudss->jeniskelamin = $request ->jeniskelamin;
        $crudss->statusperkawinan = $request ->statusperkawinan;
        $crudss->pekerjaan = $request ->pekerjaan;
        $crudss->status = $request ->status;
        $crudss->alamat = $request ->alamat;

        $file = $request->file('imagesktp');
        $fileName = $file->getClientOriginalName();
        $request->file('imagesktp')->move("image/",$fileName);
        $crudss ->imagesktp = $fileName;
        
       $file = $request->file('imageskk');
       $fileName = $file->getClientOriginalName();
       $request->file('imageskk')->move("image/",$fileName);
       $crudss ->imageskk = $fileName;

      $file = $request->file('imagesakte');
      $fileName = $file->getClientOriginalName();
      $request->file('imagesakte')->move("image/",$fileName);
      $crudss ->imagesakte = $fileName;

       $crudss->nopassport = $request ->nopassport;        
       $crudss->noktp = $request ->noktp;
       $crudss->notelp = $request ->notelp;
       $crudss->imagesktp = $request ->imagesktp;
       $crudss->imageskk = $request ->imageskk;
      //  $crudss->imagesakte = $request ->imagesakte;

        $crudss->nopassport = $request ->nopassport; 
        $crudss->noktp = $request ->noktp; 
        $crudss->notelp = $request ->notelp;
        $crudss->nama_istrisuami = $request ->nama_istrisuami;
        $crudss->umur_istrisuami = $request ->umur_istrisuami;
        $crudss->agama_istrisuami = $request ->agama_istrisuami;
        $crudss->kebangsaan_istrisuami = $request ->kebangsaan_istrisuami;
        $crudss->pekerjaan_istrisuami = $request ->pekerjaan_istrisuami;
        $crudss->alamat_istrisuami = $request ->alamat_istrisuami;
        $crudss->nama_bapak = $request ->nama_bapak;
        $crudss->umur_bapak = $request ->umur_bapak;
        $crudss->agama_bapak = $request ->agama_bapak;
        $crudss->kebangsaan_bapak = $request ->kebangsaan_bapak;
        $crudss->pekerjaan_bapak = $request ->pekerjaan_bapak;
        $crudss->alamat_bapak = $request ->alamat_bapak;
        $crudss->nama_ibu = $request ->nama_ibu;
        $crudss->umur_ibu = $request ->umur_ibu;
        $crudss->agama_ibu = $request ->agama_ibu;
        $crudss->kebangsaan_ibu = $request ->kebangsaan_ibu;
        $crudss->pekerjaan_ibu = $request ->pekerjaan_ibu;
        $crudss->alamat_ibu = $request ->alamat_ibu;

        $crudss->nama_saudrapertama = $request ->nama_saudrapertama;
        $crudss->umur_saudrapertama = $request ->umur_saudrapertama;
        $crudss->pekerjaan_saudrapertama = $request ->pekerjaan_saudrapertama;
        $crudss->alamat_saudrapertama = $request ->alamat_saudrapertama;

        $crudss->nama_saudrakedua= $request ->nama_saudrakedua;
        $crudss->umur_saudrakedua = $request ->umur_saudrakedua;
        $crudss->pekerjaan_saudrakedua = $request ->pekerjaan_saudrakedua;
        $crudss->alamat_saudrakedua = $request ->alamat_saudrakedua;

        $crudss->nama_saudraketiga = $request ->nama_saudraketiga;
        $crudss->umur_saudraketiga = $request ->umur_saudraketiga;
        $crudss->pekerjaan_saudraketiga = $request ->pekerjaan_saudraketiga;
        $crudss->alamat_saudraketiga = $request ->alamat_saudraketiga;

        $crudss->nama_saudrakeempat = $request ->nama_saudrakeempat;
        $crudss->umur_saudrakeempat = $request ->umur_saudrakeempat;
        $crudss->pekerjaan_saudrakeempat = $request ->pekerjaan_saudrakeempat;
        $crudss->alamat_saudrakeempat = $request ->alamat_saudrakeempat;

        $crudss->jenjangpendidikansatu = $request ->jenjangpendidikansatu;
        $crudss->jenjangpendidikandua = $request ->jenjangpendidikandua;
        $crudss->jenjangpendidikantiga = $request ->jenjangpendidikantiga;
        $crudss->jenjangpendidikanempat = $request ->jenjangpendidikanempat;
        $crudss->jenjangpendidikanlima = $request ->jenjangpendidikanlima;
        $crudss->pertanyaan_perkara = $request ->pertanyaan_perkara;
        $crudss->perkaraapa = $request ->perkaraapa;
        $crudss->putusanhakim = $request ->putusanhakim;
        $crudss->apakahdalamproseshukum = $request ->apakahdalamproseshukum;
        $crudss->sejauhmana = $request ->sejauhmana;
        $crudss->pelanggaranhukum = $request ->pelanggaranhukum;
        $crudss->pelanggaranapa = $request ->pelanggaranapa;
        $crudss->sejauhmanapelanggaran = $request ->sejauhmanapelanggaran;
        $crudss->riwayat_pekerjaan = $request ->riwayat_pekerjaan;
        $crudss->hoby = $request ->hoby;
        $crudss->alamatygmudahdihub = $request ->alamatygmudahdihub;
        $crudss->sponsor = $request ->sponsor;
        $crudss->alamatsponsor = $request ->alamatsponsor;
        $crudss->telpsponsor = $request ->telpsponsor;
        $crudss->jenisusaha = $request ->jenisusaha;


        $crudss->save();
        return redirect('/')->with('alert-success', 'Data Berhasil Disimpan.');
    //
    }
    public function destroy($id)
    {
        $crudss = Skck::findOrFail($id);
        $crudss->delete();
        return redirect('sium/data')->with('alert-success', 'Data Berhasil Dihapus.');
        //
    }

    public function show_laporan()
    {
        $laporan_bagren = DB::table('laporans')
                          ->join('divisis', 'laporans.divisi', '=', 'divisis.id_divisi')
                          ->where('laporans.divisi', '=', 6)
                          ->select('laporans.*','divisis.nama_divisi')
                          ->get();

        return view('sium.laporan')->with('laporans', $laporan_bagren);
    }

    public function sv_lap(Request $request)
    {
        $laporans = new Laporan();

        $file = $request->file('files');
        $fileName = $file->getClientOriginalName();
        $request->file('files')->move("polisi/laporan/", $fileName);
        $laporans->files = $fileName;

        $laporans->divisi = 6;

        $laporans->save();

        return redirect(url('/sium/laporan'));
    }

    public function delete($id) {
        Laporan::find($id)->delete();

        return redirect(url('/sium/laporan'));
    }
}
