<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Perencanaan;
use App\Models\Anggaran;
use App\User;
use DB;
use PDF;
use Carbon\Carbon;

class KapolresController extends Controller
{
    public function laporan()
    {
    	$laporans = DB::table('laporans')
                    ->join('divisis', 'laporans.divisi', '=', 'divisis.id_divisi')
                    ->select('laporans.*','divisis.nama_divisi')
                    ->get();

    	return view('kapolres.laporan')->with('laporans', $laporans);
    }

    public function perencanaan()
    {
    	$perencanaans = DB::table('perencanaans')
                        ->join('divisis', 'perencanaans.divisi', '=', 'divisis.id_divisi')
                        ->select('perencanaans.*','divisis.*')
                        ->get();

        return view('kapolres.perencanaan')->with('perencanaans', $perencanaans);
    }

    public function getPDF($id)
    {
        $perencanaans = Perencanaan::find($id);

        $pdf=PDF::loadView('pdf.perencanaan', compact('perencanaans'));
        return $pdf->stream('perencanaan.pdf');
    }

    public function anggaran()
    {
        $crudss = Anggaran::all();
        $tambah = Anggaran::select(['jumlah_pengeluaran'])->sum('jumlah_pengeluaran');
        $current_time = Carbon::now()->toDayDateTimeString();
        
      return view('kapolres.anggaran',['crudss' => $crudss],['tambah' => $tambah]);
        
        //
    }
}
