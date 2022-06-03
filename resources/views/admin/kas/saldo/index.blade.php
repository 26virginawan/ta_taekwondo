
@extends('layouts.backend.app')
@section('title', 'Saldo')
@push('css')
<!-- DataTables -->
<link rel="stylesheet"
    href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet"
    href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<!-- Sweetalert 2 -->
<link rel="stylesheet" type="text/css"
    href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/sweetalert2/sweetalert2.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/select2/css/select2.min.css">
<link rel="stylesheet"
    href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endpush
@section('content_title', 'Saldo')
@section('content')
<div class="row">

    
    <div class="col-lg-12">
        @if (Session::has('message'))
        <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">
            {{ Session::get('message') }}</div>
        @endif
    </div>
</div>
<div class="row" style="margin-top: 20px;">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body ">
                <h4 class="card-title"></h4>
                <div class="col-xl-20 col-lg-20 col-md-50 col-sm-20 grid-margin bg-white rounded">
                    <div class="card card-statistics ">
                        <div class="card-body text-center">
                            <div class="clearfix">
                                <div class=" text-center">
                                    <h5 class="mb-0 text-center ">Jumlah Saldo</h5>
                                </div>
                            </div>
                            <p class="text-muted mt-3 mb-0">
                            <h2 class="font-weight-medium  mb-0">
                                Rp.
                                {{ number_format($jumlahkeluar - $jumlahkeluar,2,',','.') }}
                            </h2>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Data Kas Keluar</h4>

                <div class="table-responsive">
                    <table class="table table-striped table-border" id="table">
                        <thead>
                            <tr>
                                <th>
                                    Tanggal
                                </th>
                                <th>
                                    Keterangan
                                </th>
                                <th>
                                    Jumlah
                                </th>
                                <th>
                                    Opsi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kas_keluar as $data)
                            <tr>
                                <td class="py-1">
                                    {{$data->tanggal}}
                                </td>
                                <td>
                                    {{$data->keterangan}}
                                </td>
                                <td>Rp.
                                    {{ number_format($data->jumlah,2,',','.') }}</td>
                                </td>
                                <!-- <td>
                                    <td>
                                    <a class="btn btn-warning btn-sm" href="{{route('kaskeluar.edit', $data->id)}}">
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm text-white"
                                        href="{{route('kaskeluar.edit', $data->id)}}">
                                        delete
                                    </a>
                                </td> -->

                                <td>
                                    <div class="btn-group dropdown">
                                        <button type="button" class="btn btn-success dropdown-toggle btn-sm"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start"
                                            style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                                            
                                            <a class="dropdown-item" href="{{route('kaskeluar.edit', $data->id)}}"> Edit
                                            </a>
                                            <form action="{{ route('kaskeluar.destroy', $data->id) }}" class="pull-left"
                                                method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button class="dropdown-item"
                                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                                    Delete
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </td>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                {{--  {!! $datas->links() !!} --}}
            </div>
        </div>
    </div>
</div>
@endsection