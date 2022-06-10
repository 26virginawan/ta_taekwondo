<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KasMasuk;
use App\Models\KasKeluar;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use Excel;
use RealRashid\SweetAlert\Facades\Alert;

class SaldoController extends Controller
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

        $keluar = KasKeluar::where('jumlah')->get();

        $kas_masuk = KasMasuk::get();
        $jumlahmasuk = 0;
        foreach ($kas_masuk as $item => $value) {
            // simpan nilai harga ke variabel $harga_total
            $jumlahmasuk += $value['jumlah'];
        }
        $masuk = KasMasuk::where('jumlah')->get();

        $data_saldo = KasMasuk::with(['KasKeluar'])->get();
        $saldo = $jumlahmasuk - $jumlahkeluar;

        return view(
            'admin.kas.saldo.index',
            compact(
                'saldo',
                'jumlahmasuk',
                'jumlahkeluar',
                'kas_masuk',
                'kas_keluar',
                'data_saldo'
            )
        );
    }

    //     /**
    //      * Show the form for creating a new resource.
    //      *
    //      * @return \Illuminate\Http\Response
    //      */
    //     public function create()
    //     {
    //         if (Auth::user()->level == 'user') {
    //             Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
    //             return redirect()->to('/kasmasuk');
    //         }
    //         $kas_masuk = KasMasuk::all();

    //         return view('admin.kas.masuk.create');
    //     }

    //     /**
    //      * Store a newly created resource in storage.
    //      *
    //      * @param  \Illuminate\Http\Request  $request
    //      * @return \Illuminate\Http\Response
    //      */

    //     public function store(Request $request)
    //     {
    //         KasMasuk::create([
    //             'tanggal' => $request->get('tanggal'),
    //             'keterangan' => $request->get('keterangan'),
    //             'jumlah' => $request->get('jumlah'),
    //         ]);
    //         return redirect('/admin/kasmasuk');
    //     }

    //     /**
    //      * Display the specified resource.
    //      *
    //      * @param  int  $id
    //      * @return \Illuminate\Http\Response
    //      */
    //     public function show($id)
    //     {
    //         if (Auth::user()->level == 'user') {
    //             Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
    //             return redirect()->to('/');
    //         }

    //         $kas_masuk = KasMasuk::findOrFail($id);

    //         return view('admin.kas.masuk.show', compact('kas_masuk'));
    //     }

    //     /**
    //      * Show the form for editing the specified resource.
    //      *
    //      * @param  int  $id
    //      * @return \Illuminate\Http\Response
    //      */
    //     public function edit($id)
    //     {
    //         if (Auth::user()->level == 'user') {
    //             Alert::info('Oopss..', 'Anda dilarang melakukan ini.');
    //             return redirect()->to('/admin/kasmasuk');
    //         }

    //         $kas_masuk = KasMasuk::findOrFail($id);
    //         return view('admin.kas.masuk.edit', compact('kas_masuk'));
    //     }

    //     /**
    //      * Update the specified resource in storage.
    //      *
    //      * @param  \Illuminate\Http\Request  $request
    //      * @param  int  $id
    //      * @return \Illuminate\Http\Response
    //      */
    //     public function update(Request $request, $id)
    //     {
    //         $kas_masuk = KasMasuk::findOrFail($id);

    //         KasMasuk::find($id)->update([
    //             'tanggal' => $request->get('tanggal'),
    //             'keterangan' => $request->get('keterangan'),
    //             'jumlah' => $request->get('jumlah'),
    //         ]);

    //         // alert()->success('Berhasil.', 'Data telah diubah!');
    //         return redirect('/admin/kasmasuk');
    //     }

    //     /**
    //      * Remove the specified resource from storage.
    //      *
    //      * @param  int  $id
    //      * @return \Illuminate\Http\Response
    //      */
    //     public function destroy($id)
    //     {
    //         if (Auth::user()->level == 'user') {
    //             Alert::info('Oopss..', 'Anda dilarang melakukan ini.');
    //             return redirect()->to('/kasmasuk');
    //         }
    //         KasMasuk::find($id)->delete();
    //         // alert()->success('Berhasil.', 'Data telah dihapus!');
    //         return redirect('/admin/kasmasuk');
    //     }
}