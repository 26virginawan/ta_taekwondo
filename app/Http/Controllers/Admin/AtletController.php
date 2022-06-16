<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Atlet;
use App\Models\Spp;
use App\Models\Petugas;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\DataTables\AtletDataTable;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;
use Intervention\Image\ImageManagerStatic as Image;

class AtletController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:read-atlet'])->only(['index', 'show']);
        $this->middleware(['permission:create-atlet'])->only([
            'create',
            'store',
        ]);
        $this->middleware(['permission:update-atlet'])->only([
            'edit',
            'update',
        ]);
        $this->middleware(['permission:delete-atlet'])->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, AtletDataTable $datatable)
    {
        if ($request->ajax()) {
            return $datatable->data();
        }

        $atlet = Atlet::all();
        $spp = Spp::all();
        $kelas = Kelas::all();

        return view('admin.atlet.index', compact('atlet', 'spp', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.atlet.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nisn' => 'required|unique:atlet',
            'image' => 'required|image|mimes:jpeg,png,jpg,',
            'name' => 'required',
            'username' => 'required|unique:users',
            'tgl_registrasi' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'bb' => 'required',
            'tb' => 'required',
            'no_telepon' => 'required',
            'tingkat_sabuk' => 'required',
            'kelas' => 'required',
        ]);

        if ($validator->passes()) {
            DB::transaction(function () use ($request) {
                $user = User::create([
                    'name' => Str::lower($request->name),
                    'username' => Str::lower($request->username),
                    'password' => Hash::make('rahasia'),
                ]);

                $user->assignRole('atlet');
                if ($request->hasfile('image')) {
                    $image = $request->file('image');
                    $imageatlet =
                        uniqid(11) . '.' . $image->getClientOriginalExtension();
                    $image_resize = Image::make($image->getRealPath());
                    $image_resize->resize(300, 350);
                    $image_resize->save(
                        public_path('atlet\images/' . $imageatlet)
                    );
                }

                Atlet::create([
                    'user_id' => $user->id,
                    'kode_atlet' => 'ATLT' . Str::upper(Str::random(5)),
                    'image' => $imageatlet,
                    'name' => $request->name,
                    'nisn' => $request->nisn,
                    'tgl_registrasi' => $request->tgl_registrasi,
                    'tempat_lahir' => $request->tempat_lahir,
                    'tgl_lahir' => $request->tgl_lahir,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'bb' => $request->bb,
                    'tb' => $request->tb,
                    'no_telepon' => $request->no_telepon,
                    'tingkat_sabuk' => $request->tingkat_sabuk,
                    'kelas' => $request->kelas,
                ]);
            });
            Alert::success('Sukses', 'Data Berhasil Ditambahkan');
            return redirect()->route('atlet.index');
        }
        Alert::error('Gagal', 'Ukuran Maksimal Foto 2048 kb');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atlet = Atlet::findOrFail($id);
        return view('admin.atlet.edit', compact('atlet'));
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

            'tgl_registrasi' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'bb' => 'required',
            'tb' => 'required',
            'no_telepon' => 'required',
            'tingkat_sabuk' => 'required',
            'kelas' => 'required',
        ]);

        if ($validator->passes()) {
            $input = $request->all();
            if ($request->hasfile('image')) {
                $imageatlet =
                    uniqid(11) .
                    '.' .
                    $request->file('image')->getClientOriginalExtension();
                $image_resize = Image::make(
                    $request->file('image')->getRealPath()
                );
                $image_resize->resize(300, 380);
                $image_resize->save(public_path('atlet\images/' . $imageatlet));
                $input['image'] = "$imageatlet";
            } else {
                unset($input['image']);
            }
            Atlet::findOrFail($id)->update($input);

            Alert::success('Sukses', 'Data Berhasil Diubah');
            return redirect()->route('atlet.index');
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
        $atlet = Atlet::findOrFail($id);
        User::findOrFail($atlet->user_id)->delete();
        $atlet->delete();
        Alert::success('Sukses', 'Data Berhasil Dihapus');
        return redirect()->route('atlet.index');
    }

    public function pdf()
    {
        $atlet = Atlet::all();
        $pdf = PDF::loadView('admin.atlet.atlet_pdf', compact('atlet'));
        return $pdf
            ->setPaper('a4', 'potrait')
            ->download('data_atlet' . '_' . date('Y-m-d_H-i-s') . '.pdf');
    }

    public function cetak_nama($id)
    {
        $data = Atlet::where('id', $id)->first();

        $pdf = PDF::loadView('admin.kartu_nama.cetak_kartu', $data);
        return $pdf
            ->setPaper('a4', 'potrait')
            ->download('kartu_atlet' . '_' . date('Y-m-d_H-i-s') . '.pdf');
    }
}