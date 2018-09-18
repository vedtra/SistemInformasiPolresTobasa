<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Polisi;
use App\Models\Perencanaan;
use App\User;
use PDF;
use DB;

class BasumdaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('basumda.index');
    }

    public function show()
    {
        $polisis = DB::table('polisis')
                    ->join('divisis', 'polisis.divisi', '=', 'divisis.id_divisi')
                    ->select('polisis.*','divisis.*')
                    ->get();

        return view('basumda.data_polisi')->with('polisis', $polisis);
    }

    public function add()
    {
        return view('basumda.add');
    }

	public function store(Request $request)
    {
        $polisi = new Polisi();
        $polisi->nama = $request->nama;
        $polisi->pangkat = $request->pangkat;
        $polisi->divisi = $request->divisi;
        $polisi->tmt_pnkt = $request->tmt_pnkt;
        $polisi->tanggal_lahir = $request->tanggal_lahir;
        $polisi->suku_bangsa = $request->suku_bangsa;
        $polisi->jabatan_tmt = $request->jabatan_tmt;
        $polisi->kelamin = $request->kelamin;
        $polisi->status = $request->status;
        $polisi->pendidikan_terakhir = $request->pendidikan_terakhir;
        $polisi->agama = $request->agama;
        $polisi->dikjur = $request->dikjur;
        $polisi->tanda_jasa = $request->tanda_jasa;

        $file = $request->file('images');


        if ($file->isValid()) {
            $fileName = $file->getClientOriginalName();
            $request->file('images')->move("polisi/image/", $fileName);
            $polisi->images = $fileName;

            //save all data
            $polisi->save();

            return redirect(url('/basumda/show'));
        } else {
            dd($file->getErrorMessage());
        }
	}

    public function edit($id)
    {
        $polisi = Polisi::find($id);

        return view('basumda.edit', compact('polisi'));
    }

    public function detail($id)
    {
        $polisi = Polisi::find($id);

        return view('basumda.detail', compact('polisi'));
    }

    public function update(Request $request, $id)
    {
        $polisi = Polisi::find($id);
        $polisi->nama = $request->input('nama');
        $polisi->pangkat = $request->input('pangkat');
        $polisi->divisi = $request->input('divisi');
        $polisi->tmt_pnkt = $request->input('tmt_pnkt');
        $polisi->tanggal_lahir = $request->input('tanggal_lahir');
        $polisi->suku_bangsa = $request->input('suku_bangsa');
        $polisi->jabatan_tmt = $request->input('jabatan_tmt');
        $polisi->kelamin = $request->input('kelamin');
        $polisi->status = $request->input('status');
        $polisi->pendidikan_terakhir = $request->input('pendidikan_terakhir');
        $polisi->agama = $request->input('agama');
        $polisi->dikjur = $request->input('dikjur');
        $polisi->tanda_jasa = $request->input('tanda_jasa');

        if($request->hasFile('images'))
        {
            // add the new image
            $file = $request->file('images');
            $fileName = $file->getClientOriginalName();
            $request->file('images')->move("polisi/image/", $fileName);
            $oldimage = $polisi->images;
            // update the database
            $polisi->images = $fileName;
        }

        $polisi->save();

        return redirect(url('/basumda/show'));
    }

    public function delete($id) {
        Polisi::find($id)->delete();

        return redirect(url('/basumda/show'));
    }

    public function perencanaan(){
        return view('basumda.perencanaan');
    }

    public function show_perencanaan(){
        $perencanaans = DB::table('perencanaans')
                        ->join('divisis', 'perencanaans.divisi', '=', 'divisis.id_divisi')
                        ->where('perencanaans.divisi', '=', 4)
                        ->select('perencanaans.*','divisis.*')
                        ->get();

        return view('basumda.show_perencanaan')->with('perencanaans', $perencanaans);
    }

    public function renstore(Request $request)
    {
        $perencanaan = new Perencanaan();
        $perencanaan->divisi = 4;
        $perencanaan->nama_kegiatan = $request->nama_kegiatan;
        $perencanaan->tanggal = $request->tanggal;
        $perencanaan->waktu = $request->waktu;
        $perencanaan->tempat_pelaksanaan = $request->tempat_pelaksanaan;
        $perencanaan->deskripsi = $request->deskripsi;
        $perencanaan->anggaran = $request->anggaran;

        //save all data
        $perencanaan->save();

        return redirect(url('/basumda/show_perencanaan'));
    }

    public function rendel($id) {
        Perencanaan::find($id)->delete();

        return redirect(url('/basumda'));
    }

    public function getPDF($id){
        $perencanaans = Perencanaan::find($id);
        $pdf=PDF::loadView('pdf.perencanaan', compact('perencanaans'));
        return $pdf->stream('perencanaan.pdf');
    }

    public function edit_perencanaan($id)
    {
        $rencana = Perencanaan::find($id);

        return view('basumda.edit_perencanaan', compact('rencana'));
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

        return redirect(url('/basumda/show_perencanaan'));
    }
}
