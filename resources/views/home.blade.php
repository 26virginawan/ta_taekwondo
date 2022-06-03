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

            <p>Mohon Lengkapi Data Diri Anda, <a href="{{ route('dataAtlet.update', $dt->id.'/edit') }}">Klik
                    Disini</a>
            </p>

            @endrole
            <p class="lead">Selamat datang di WEB SPPR.</p>
            <hr class="my-4">
        </div>
    </div>
</div>
@endsection