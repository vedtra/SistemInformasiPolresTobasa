<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Polisi;
use App\Models\Laporan;
use App\Models\Perencanaan;
use App\Models\Anggaran;
use App\User;
use DB;
use App;
use PDF;
use Carbon\Carbon;

class BagrenController extends Controller
{
    // LAPORAN
    public function show_laporan()
    {
    	$laporan_bagren = DB::table('laporans')
                          ->join('divisis', 'laporans.divisi', '=', 'divisis.id_divisi')
                          ->where('laporans.divisi', '=', 5)
                          ->select('laporans.*','divisis.nama_divisi')
                          ->get();

        return view('bagren.laporan')->with('laporans', $laporan_bagren);
    }

    public function sv_lap(Request $request)
    {
    	$laporans = new Laporan();

    	$file = $request->file('files');
        $fileName = $file->getClientOriginalName();
        $request->file('files')->move("polisi/laporan/", $fileName);
        $laporans->files = $fileName;

        $laporans->divisi = 5;

        $laporans->save();

        return redirect(url('/bagren/laporan'));
    }

    public function perencanaan()
    {
        $rnc_bagren = DB::table('perencanaans')
                        ->join('divisis', 'perencanaans.divisi', '=', 'divisis.id_divisi')
                        ->select('perencanaans.*','divisis.*')
                        ->get();

        return view('bagren.perencanaan')->with('perencanaans', $rnc_bagren);
    }

    public function getPDF($id){
        $perencanaans = Perencanaan::find($id);
        $pdf=PDF::loadView('pdf.perencanaan', compact('perencanaans'));
        return $pdf->stream('perencanaan.pdf');
    }

    public function tulis_anggaran()
    {
        return view('bagren.tulis_anggaran');
    }

    public function anggaran_save(Request $request)
    {
        $anggarans = new Anggaran();

        $anggarans->pemasukan = $request->pemasukan;
        $anggarans->sumber = $request->sumber;
        $anggarans->pengeluaran = $request->pengeluaran;
        $anggarans->keperluan = $request->keperluan;

        $anggarans->save();

        return redirect(url('/bagren/index'));
    }

    public function delete($id) {
        Laporan::find($id)->delete();

        return redirect(url('/bagren/laporan'));
    }

    public function store(Request $request)
    {
        $crudss = new Anggaran();
        $crudss->keperluan = $request->keperluan;
        $crudss->jumlah_pengeluaran = $request->jumlah_pengeluaran; 
        $crudss ->total = $request->jumlah_pengeluaran + $request->jumlah_pengeluaran;
        $current_time = Carbon::now()->toDayDateTimeString();

        
        $crudss->save();
        return redirect(url('/bagren/anggaran'));
        //
    }

    public function show_anggaran()
    {
        $crudss = Anggaran::all();
        $tambah = Anggaran::select(['jumlah_pengeluaran'])->sum('jumlah_pengeluaran');
        $current_time = Carbon::now()->toDayDateTimeString();
        
      return view('bagren.anggaran',['crudss' => $crudss],['tambah' => $tambah]);
        
        //
    }

    public function destroy($id)
    {
        $crudss = Anggaran::findOrFail($id);
        $crudss->delete();
        return redirect(url('/bagren/anggaran'));
        //
    }
}
