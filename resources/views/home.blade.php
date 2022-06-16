@extends('layouts.backend.app')
@section('title', 'Home')
@section('content_title', 'Home')
@section('content')
<x-alert></x-alert>
<div class="row">
    <div class="col-lg">
        <div class="jumbotron">
            @role('admin|petugas')
            <h1 class="display-4">Hello, {{ Universe::petugas()->nama_petugas }}!</h1>
            @endrole

            @role('atlet')


            <h1 class="display-4">Hello, {{ Auth::user()->username }}!</h1>
            <p class="lead">Selamat datang di TAEKWONDO BUMIAJI.</p>
            <br>
            <!-- <p>Mohon Lengkapi Data Diri Anda, <a href="{{ route('dataAtlet.update', $atlet->id.'/edit') }}">Klik
                    Disini</a>
            </p> -->




            <!-- @if($cek > 0) <a href="{{ route('dataAtlet.update', $atlet->id.'/edit') }}">Klik
                Disini</a>
            @endif -->


            @endrole


            <hr class="my-4">

        </div>
    </div>
</div>
@endsection