<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KasKeluar;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use Excel;
use RealRashid\SweetAlert\Facades\Alert;

class KasKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // if (Auth::user()->level == 'user') {
        //     Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
        //     return redirect()->to('/');
        // }
        $kas_keluar = KasKeluar::get();
        $jumlahkeluar = 0;
        foreach ($kas_keluar as $item => $value) {
            // simpan nilai harga ke variabel $harga_total
            $jumlahkeluar += $value['jumlah'];
        }

        return view('admin.kas.keluar.index', compact('kas_keluar', 'jumlahkeluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->level == 'user') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/kaskeluar');
        }
        $kas_keluar = KasKeluar::all();

        return view('admin.kas.keluar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        KasKeluar::create([
            'tanggal' => $request->get('tanggal'),
            'keterangan' => $request->get('keterangan'),
            'jumlah' => $request->get('jumlah'),
        ]);
        
        return redirect('/admin/kaskeluar');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::user()->level == 'user') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }

        $kas_keluar = KasKeluar::findOrFail($id);

        return view('admin.kaskeluar.show', compact('kas_keluar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->level == 'user') {
            Alert::info('Oopss..', 'Anda dilarang melakukan ini.');
            return redirect()->to('/kaskeluar');
        }

        $kas_keluar = KasKeluar::findOrFail($id);
        return view('admin.kas.keluar.edit', compact('kas_keluar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kas_keluar = KasKeluar::findOrFail($id);

        KasKeluar::find($id)->update([
            'tanggal' => $request->get('tanggal'),
            'keterangan' => $request->get('keterangan'),
            'jumlah' => $request->get('jumlah'),
        ]);

        // alert()->success('Berhasil.', 'Data telah diubah!');
        return redirect('/admin/kaskeluar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->level == 'user') {
            Alert::info('Oopss..', 'Anda dilarang melakukan ini.');
            return redirect()->to('/dataprestasi');
        }
        KasKeluar::find($id)->delete();
        
        return redirect('/admin/kaskeluar');
    }
}