<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class datakegiatanController extends Controller
{
    public function index()
    {
     $kegiatan = DB::table('kegiatan')->get();
     return view('admin.ujian.index', ['kegiatan' => $kegiatan]);
    }

    //update status kegiatan
     public function updatestatus($id) 
     { 
       
     $status = DB::table('kegiatan')->where('id', '=', $id)->get(); 
     //mengubah data status menjadi kondisi php sederhana (penyederhanaan data)
     $status = $status->toArray(); 
     if ($status[0]->status == "buka") 
      { 
       DB::table('kegiatan')->where('id', '=', $id)->update(['status' => "tutup"]);
       return redirect()->back()->with('alert', 'Status Pendaftaran Berhasil Ditutup!');
      }  
      else 
      { 
       DB::table('kegiatan')->where('id', '=', $id)->update(['status' => "buka"]); 
       return redirect()->back()->with('alert', 'Status Pendaftaran Berhasil Dibuka!'); } 
      }
             
            
    //detail kegiatan,
     public function detail(Request $req)
     {
        //prtoses mendefinisikan variabel pada bagian detail
        $id =$req->id;
        $nama =$req->nama;
        $kegiatan = $req ->kegiatan;
        $kegiatan_id=$req->kegiatan_id;

        //mendapatkan variabel kegiatan pada tabel kegiatan
        $kegiatan = DB :: table('kegiatan')->select('nama')->where('id', '=', $id)->get();
        //proses mendapatkan variabel detail, dan mengkondisikan data yang akan ditampilkan pada view detail 
        //sesuai dengan data pendaftar. 
        $detail = DB::table('anggota')->where('kegiatan_id','=', $id)->get();
        
        return view('detail', ['kegiatan'=>$kegiatan, 'nama'=> $nama, 'detail' => $detail, 'kegiatan_id'=>$id]);
        }
        
    //delete kegiatan

     public function deleteData($id)
     { 
       //  mengkoneksikan denga tabel kegiatan untuk menghapus data kegiatan.   
       DB::table('kegiatan')->where('id', '=', $id)->delete();
       //mengkoneksikan dengan tabel anggota untuk menghapus data anggota (pendaftar).
       DB::table('anggota')->where('kegiatan_id','=',$id)->delete();
       $kegiatan = DB::table('kegiatan')->get();
       // alert
       return redirect()->back()->with('alert', 'Data Kegiatan Berhasil Dihapus!'); 
       return view('datakegiatan', ['kegiatan' => $kegiatan]);
     }

}