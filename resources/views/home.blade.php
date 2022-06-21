@extends('layouts.backend.app')
@section('title', 'Home')
@section('content_title', 'Home')
@section('content')
<x-alert></x-alert>
<div class="row">
    <div class="col-lg">
        <div class="jumbotron">
            @role('admin|petugas')
            <h1 class="display-4">Hello, {{ Auth::user()->username }}!</h1>
            @endrole

            @role('atlet')


            <h1 class="display-4">Hello, {{ Auth::user()->username }}!</h1>
            <p class="lead">Selamat datang di TAEKWONDO BUMIAJI.</p>
            <br>
            @endrole
            <h2><b>Menunggu Verifikasi Admin </b> </h2>

            <h2 style="color:red;">Lakukan Pembayaran dan Pengumpulan Berkas Saat Latihan !!</h2>
            <hr class="my-4">

        </div>
    </div>
</div>
@endsection