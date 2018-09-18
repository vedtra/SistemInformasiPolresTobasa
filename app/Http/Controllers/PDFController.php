<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Skck;
use App\Models\Polisi;
use App\Models\Perencanaan;
use App\User;
use PDF;
use Carbon\Carbon;

class PDFController extends Controller
{
    public function getPDF($id){
    	$perencanaans = Perencanaan::find($id);
    	$pdf=PDF::loadView('pdf.perencanaan', compact('perencanaans'));
    	return $pdf->stream('perencanaan.pdf');
    }

    public function getpdff($id){
        $crudss = Skck::findOrFail($id);
            
        view()->share('crudss',$crudss);                         
        $pdf = PDF::loadView('pdf.bukti',['crudss' => $crudss]);
        view()->share('bukti',$crudss);
        return $pdf->download('bukti.pdf');

    }
}
