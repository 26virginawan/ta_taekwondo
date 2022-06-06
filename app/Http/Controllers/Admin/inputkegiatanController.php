<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
 
class inputkegiatanController extends Controller
{ 
    //
    public function inputkegiatan(Request $req)
    {
       $nama =$req->nama;
       $tanggal=$req->tanggal;
       $kuota=$req->kuota;
       $sisa=$req->sisa;
       $status=$req->status;

       //input ke database
       DB::table('kegiatan')
       ->insert(['nama'=>$nama,'tanggal'=>$tanggal,'kuota'=>$kuota, 'sisa'=> '0', 'status'=>'buka']);
       //alert
       return redirect()->back()->with('alert', 'Data Kegiatan Berhasil Ditambahkan!'); 
       return view('admin.datakegiatan');
       
    }

   
}

