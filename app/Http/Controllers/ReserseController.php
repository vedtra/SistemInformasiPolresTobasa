<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Polisi;
use App\Models\Perencanaan;
use App\Models\Kasus;
use App\Models\Pelaku;
use App\Models\Pelapor;
use App\Models\BarangBukti;
use App\Models\Tkp;
use App\User;
use DB;

class ReserseController extends Controller
{
    public function index()
    {
        return view('reserse.index');
    }

    public function create()
    {
        return view('reserse.add_kasus');
    }

    public function show()
    {
    	$kas = Kasus::all();
        
        return view('reserse.data_kasus')->withKas($kas);
    }

    public function simpankasus(Request $request)
    {
        $kas = new Kasus;
        $pela = new Pelaku;
        $lapor = new Pelapor;
        $tkp = new Tkp;
        $barang = new BarangBukti;


        $kas->id_kasus ;
        $kas->nama_kasus = $request->nama_kasus;
        $kas->waktu_kejadian = $request->waktu_kejadian;
        $kas->save();

        $pela->kode_kasus =$kas->id_kasus ;
        $pela->nama_pelaku = $request->nama_pelaku;
        $pela->Agama = $request->Agama;
        $pela->jeniskelamin = $request->jeniskelamin;
        $pela->kewarganegaraan = $request->kewarganegaraan;

        $pela->tgllahir_pelaku = $request->tgllahir_pelaku;
        $pela->alamat = $request->alamat;
        $file = $request->file('images_pelaku');
        $fileName = $file->getClientOriginalName();
        $request->file('images_pelaku')->move("image/",$fileName);
        $pela ->images_pelaku = $fileName;


        $lapor->kode_kasus = $kas->id_kasus ;
        $lapor->nama_pelapor = $request->nama_pelapor;
        $lapor->Agama = $request->Agama;
        $lapor->jeniskelamin = $request->jeniskelamin;
        $lapor->notelp = $request->notelp;
        $lapor->kewarganegaraan = $request->kewarganegaraan;
        $lapor->tgllahir_pelapor = $request->tgllahir_pelapor;
        $lapor->alamat = $request->alamat;
        $lapor->pekerjaan = $request->pekerjaan;
        $file = $request->file('images');
        $fileName = $file->getClientOriginalName();
        $request->file('images')->move("image/",$fileName);
        $lapor->images = $fileName;

        $barang->kode_kasus = $kas->id_kasus ;
        $barang->nama_barang = $request->nama_barang;
        $barang->keterangan = $request->keterangan;
        $file = $request->file('images_barang');
        $fileName = $file->getClientOriginalName();
        $request->file('images_barang')->move("image/",$fileName);
        $barang->images_barang = $fileName;

        $tkp->kode_kasus = $kas->id_kasus ;
        $tkp->nama_tempat = $request->nama_tempat;
        $tkp->alamat = $request->alamat;
        
        
        $pela->save();
        $lapor->save();
        $tkp->save();
        $barang->save();
        return redirect('reserse/data_kasus')->with('alert-success', 'Data Berhasil Disimpan.');
    }

    public function destroy($id)
    {

        $crudss = Kasus::find($id);
        $crudss->delete();
        return redirect('reserse/data_kasus')->with('alert-success', 'Data Berhasil Dihapus.');
    }

    public function tampil($id)
    {
        $kasu = Kasus::find($id);
        
        return view('reserse.tampilkan')->withKasu($kasu);
        //
    }
}
