<!-- @section('js')
<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable({
        "iDisplayLength": 50
    });

});
</script>
@stop -->
@extends('layouts.backend.app')
@section('title', 'Kas Masuk')
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
@section('content_title', 'Kas Masuk')
@section('content')
<div class="row">

    <div class="col-lg-2">
        <a href="{{ route('kasmasuk.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
            Tambah Kas Masuk</a>
    </div>
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
                                    <h5 class="mb-0 text-center ">Jumlah Kas Masuk</h5>
                                </div>
                            </div>
                            <p class="text-muted mt-3 mb-0">
                            <h2 class="font-weight-medium  mb-0">
                                Rp.
                                {{ number_format($jumlahmasuk,2,',','.') }}
                            </h2>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h4 class="card-title">Data Kas Masuk</h4>

                <div class="table-responsive">
                    <table class="table table-striped" id="table">
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
                            @foreach($kas_masuk as $data)
                            <tr>
                                <td class="py-1">
                                    {{$data->tanggal}}
                                </td>
                                <td>
                                    {{$data->keterangan}}
                                </td>
                                <td> Rp.
                                    {{$data->jumlah}}
                                </td>
                                <td>
                                    <div class="btn-group dropdown">
                                        <button type="button" class="btn btn-success dropdown-toggle btn-sm"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start"
                                            style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                                            
                                            <a class="dropdown-item" href="{{route('kasmasuk.edit', $data->id)}}"> Edit
                                            </a>
                                            <form action="{{ route('kasmasuk.destroy', $data->id) }}" class="pull-left"
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