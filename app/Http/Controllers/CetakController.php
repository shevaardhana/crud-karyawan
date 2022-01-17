<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Karyawan;

class CetakController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cetak_pdf()
    {
    	$items = Karyawan::all();

        $pdf = PDF::loadview('pdf',['items'=>$items])->setOptions(['defaultFont' => 'sans-serif'])->setPaper('A4','landscape');
	    return $pdf->stream('karyawan.pdf');
    }
}
