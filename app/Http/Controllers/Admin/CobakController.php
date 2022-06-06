<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cobak;
use App\DataTables\RoleDataTable;

class CobakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cobak = Cobak::get();
        return view('admin.cobak.index', compact('cobak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cobak.create');
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
            'image' => ['required', 'image'],
            'name' => 'required',
            'jenis' => 'jenis',
        ]);
        if ($request->hasfile('image')) {
            $atletImage =
                uniqid(11) .
                '.' .
                $request->file('image')->getClientOriginalExtension();
            $request
                ->file('image')
                ->move(public_path('atlet\images'), $atletImage);
        }
        if ($validator->passes()) {
            Cobak::create([
                'image' => $atletImage,
                'name' => $request->get('name'),
                'jenis' => $request->get('jenis'),
            ]);

            return response()->json(['message' => 'Data berhasil disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);
        return view('admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return response()->json(['data' => $role]);
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
        Role::findOrFail($id)->update($request->all());
        return response()->json(['message' => 'Data berhasil diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::findOrFail($id)->delete();
        return response()->json(['message' => 'Data berhasil dihapus!']);
    }
}