<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use App\Models\Presensi;
use Illuminate\Http\Request;

class SiswaAbsenController extends Controller
{
    public $id_presensi;

    public function index()
    {
        return view('SiswaPresensi/absenMasuk');
    }

    public function store(Request $request)
    {
        //ini mengambil jam dari server
        $timezone = 'Asia/Jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        // $data = Presensi::find($this->id_presensi); 
        $tanggal = $date->format('Y-m-d');
        // $keterangan = $data;
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id','=',auth()->user()->id],
            ['tgl','=',$tanggal],
        ])->first();
        if ($presensi){
            dd("sudah ada");
        }else{
            Presensi::create([
                'user_id' => auth()->user()->id,
                'tgl' => $tanggal,
                // 'keterangan'=>$keterangan,
                'jammasuk' => $localtime,
            ]);
        }
        return redirect('presensi-masuk')->with('status', 'Terima kasih sudah mengisi presensi');;
    }
}
