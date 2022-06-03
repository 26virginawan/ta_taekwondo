<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Atlet;
use App\Models\Spp;
use App\Models\Prestasi;
use App\Models\Petugas;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\DataTables\PrestasiAtletDataTable;

class PrestasiAtletController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:read-prestasiAtlet'])->only([
            'index',
            'show',
        ]);
        $this->middleware(['permission:create-prestasiAtlet'])->only([
            'create',
            'store',
        ]);
        $this->middleware(['permission:update-prestasiAtlet'])->only([
            'edit',
            'update',
        ]);
        $this->middleware(['permission:delete-prestasiAtlet'])->only([
            'destroy',
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, PrestasiAtletDataTable $datatable)
    {
        if ($request->ajax()) {
            return $datatable->data();
        }

        // $dataprofil = Prestasi::get();
        $spp = Spp::all();
        $atlet = Atlet::where(
            'name',

            Auth::user()->name
        )->get();

        return view('atlet.prestasi.index', compact('spp', 'atlet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'nama_kejuaraan' => 'required',
            'tingkat' => 'required',
            'kelas' => 'required',
            'kategori' => 'required',
            'perolehan' => 'required',
            'tgl_acara' => 'required',
            'lokasi' => 'required',
        ]);

        if ($validator->passes()) {
            Prestasi::create([
                'name' => $request->name,
                'nama_kejuaraan' => $request->nama_kejuaraan,
                'tingkat' => $request->tingkat,
                'kelas' => $request->kelas,
                'kategori' => $request->kategori,
                'perolehan' => $request->perolehan,
                'tgl_acara' => $request->tgl_acara,
                'lokasi' => $request->lokasi,
            ]);

            return response()->json(['message' => 'Data berhasil disimpan!']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return response()->json(['data' => $prestasi]);
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'nama_kejuaraan' => 'required',
            'tingkat' => 'required',
            'kelas' => 'required',
            'kategori' => 'required',
            'perolehan' => 'required',
            'tgl_acara' => 'required',
            'lokasi' => 'required',
        ]);

        if ($validator->passes()) {
            Prestasi::findOrFail($id)->update([
                'name' => $request->name,
                'nama_kejuaraan' => $request->nama_kejuaraan,
                'tingkat' => $request->tingkat,
                'kelas' => $request->kelas,
                'kategori' => $request->kategori,
                'perolehan' => $request->perolehan,
                'tgl_acara' => $request->tgl_acara,
                'lokasi' => $request->lokasi,
                'atlet_id' => $request->atlet_id,
            ]);

            return response()->json(['message' => 'Data berhasil diupdate!']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();
        return response()->json(['message' => 'Data berhasil dihapus!']);
    }
}