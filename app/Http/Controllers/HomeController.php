<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atlet;

class HomeController extends Controller
{
    public function index()
    {
        $atlet = Atlet::where('user_id', \Auth::user()->id)->first();

        $user_id = \Auth::user()->id;

        $cek = Atlet::where('id', $user_id)->count();
        if ($cek < 1) {
            $pesan = 'Harap Melengkapi Biodata Terlebih Dahulu';
        } else {
            $pesan = 'Biodata Anda Sudah Dilengkapi.. Terima Kasih';
        }
        return view('home', compact('atlet', 'pesan', 'user_id', 'cek'));
    }
}