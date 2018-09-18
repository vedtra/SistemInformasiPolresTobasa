<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Perencanaan;
use App\Models\UserRole;
use App\User;
use DB;
use PDF;

class BagopsController extends Controller
{
    public function laporan()
    {
        $laporans = DB::table('laporans')
                    ->join('divisis', 'laporans.divisi', '=', 'divisis.id_divisi')
                    ->select('laporans.*','divisis.nama_divisi', 'divisis.id_divisi')
                    ->get();

        $divisi = UserRole::get();

        return view('bagops.laporan')->with('laporans', $laporans)->withDivisi($divisi);
    }

    public function delete_laporan($id) {
        Laporan::find($id)->delete();

        return redirect(url('/bagops/laporan'));
    }

    public function add_perencanaan()
    {
        return view('bagops.add_perencanaan');
    }

    public function perencanaan()
    {
        $rnc_bagren = DB::table('perencanaans')
                      ->join('divisis', 'perencanaans.divisi', '=', 'divisis.id_divisi')
                      ->where('perencanaans.divisi', '=', 3)
                      ->select('perencanaans.*','divisis.*')
                      ->get();

        return view('bagops.perencanaan')->with('perencanaans', $rnc_bagren);
    }

    public function saveren(Request $request)
    {
        $perencanaan = new Perencanaan();
        $perencanaan->divisi = 3;
        $perencanaan->nama_kegiatan = $request->nama_kegiatan;
        $perencanaan->tanggal = $request->tanggal;
        $perencanaan->waktu = $request->waktu;
        $perencanaan->tempat_pelaksanaan = $request->tempat_pelaksanaan;
        $perencanaan->deskripsi = $request->deskripsi;
        $perencanaan->anggaran = $request->anggaran;

        //save all data
        $perencanaan->save();

        return redirect(url('/bagops/perencanaan'));
    }

    public function getPDF($id)
    {
        $perencanaans = Perencanaan::find($id);
        $pdf=PDF::loadView('pdf.perencanaan', compact('perencanaans'));
        return $pdf->stream('perencanaan.pdf');
    }

    public function editren($id)
    {
        $rencana = Perencanaan::find($id);

        return view('bagops.edit_perencanaan', compact('rencana'));
    }

    public function update_perencanaan(Request $request, $id)
    {
        $rnc = Perencanaan::find($id);
        $rnc->nama_kegiatan = $request->input('nama_kegiatan');
        $rnc->tanggal = $request->input('tanggal');
        $rnc->waktu = $request->input('waktu');
        $rnc->tempat_pelaksanaan = $request->input('tempat_pelaksanaan');
        $rnc->deskripsi = $request->input('deskripsi');
        $rnc->anggaran = $request->input('anggaran');

        $rnc->save();

        return redirect(url('/bagops/perencanaan'));
    }
}
