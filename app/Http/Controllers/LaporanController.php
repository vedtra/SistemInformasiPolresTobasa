<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Polisi;
use App\Models\Laporan;
use App\User;
use DB;
use Validator;
use App;

class LaporanController extends Controller
{
    public function downfunc()
    {
        $downloads = DB::table('laporans')->get();
        return view('basumda.laporan', compact('downloads'));
    }

	public function show()
    {
        $laporans = DB::table('laporans')
                    ->join('divisis', 'laporans.divisi', '=', 'divisis.id_divisi')
                    ->where('laporans.divisi','=',4)
                    ->select('laporans.*','divisis.nama_divisi')
                    ->get();

        return view('basumda.laporan')->with('laporans', $laporans);
    }

    public function store(Request $request)
    {
    	$laporans = new Laporan();

    	$file = $request->file('files');

        $fileName = $file->getClientOriginalName();
        $request->file('files')->move("polisi/laporan/", $fileName);
        $laporans->files = $fileName;

        $laporans->divisi = 4;

        $laporans->save();

        return redirect(url('/basumda/laporan'));
    }

    public function delete($id) {
        Laporan::find($id)->delete();

        return redirect(url('/basumda/laporan'));
    }
}
