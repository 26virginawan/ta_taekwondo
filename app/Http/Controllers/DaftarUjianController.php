<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Atlet;
use App\Models\DaftarUjian;
use App\Models\Ujian;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\DataTables\AtletDataTable;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class DaftarUjianController extends Controller
{
    public function index()
    {
        $atlet = Atlet::where(
            'name',

            Auth::user()->name
        )->get();
        $ujian = Ujian::all();

        $daftar = DaftarUjian::all();

        return view('atlet.ujian.index', ['ujian' => $ujian ], compact('daftar','ujian','atlet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $atlet = Atlet::where(
            'name',

            Auth::user()->name
        )->get();
        $ujian = Ujian::where('id')->get();
        return view('atlet.ujian.create', ['data' => $ujian ], compact('atlet','ujian'));
    }
    
    //form dafatar kegiatan
    public function store(Request $req)
    {
        $atlet = Atlet::where(
            'name',

            Auth::user()->name
        )->get();
    $tgl = Carbon::now();
       $name=$req->nama;
       $tgl_daftar=$tgl;
       $sabuk=$req->sabuk;
       $ujian_id=$req->ujian_id;
       $atlet_id=$req->atlet_id;

       $ujian = DB :: table('ujian')->where('id','=', $ujian_id)->get();
       
       // ubah variabel kegiatan menjadi array
        $ujian = $ujian ->toArray(); 
            if($ujian[0]-> sisa >= $ujian[0]->kuota)
            {
            return redirect()->back()->with('alert', 'Anda gagal mendaftar, kuota sudah penuh!'); 
            }
            else
            //input kedatabase
            {
             DB::table('daftarujian')
             ->insert(['name'=> $name ,'tgl_daftar'=> $tgl_daftar ,'sabuk'=> $sabuk, 'ujian_id'=>$ujian_id,'atlet_id'=>$atlet_id]);
             $row = DB :: table('daftarujian')->where('kegiatan_id','=', $ujian[0]->id)->get();
             $hitung = count($row);
            
             // update data dan sisa pada tabel kegiatan
             DB::table('ujian')->where('id','=', $ujian_id)->update (['sisa'=> $hitung]);
            
             // allert dan redirect ke tabel daftar kegiatan
             Alert::success('Sukses', 'Data Berhasil Ditambahkan');
             return view('atlet.ujian.index');
            }
       
    }
}