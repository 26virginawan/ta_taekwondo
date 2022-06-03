<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atlet;

class HomeController extends Controller
{
    public function index()
    {
        $dt = Atlet::where('user_id', \Auth::user()->id)->first();
        return view('home', compact('dt'));
    }
}