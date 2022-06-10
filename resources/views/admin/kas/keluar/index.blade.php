@extends('layouts.backend.app')
@section('title', 'Kas Keluar')
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
@section('content_title', 'Kas Keluar')
@section('content')
<div class="row">

    <div class="col-lg-2">
        <a href="{{ route('kaskeluar.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
            Tambah Kas Keluar</a>
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
        <div class="card card-statistics">
            <div class="card-body text-center ">

                <div class="col-xl-20 col-lg-20 col-md-50 col-sm-20 grid-margin bg-white rounded">

                    <div class="clearfix">
                        <div class=" text-center">
                            <h5 class="mb-0 text-center ">Jumlah Kas Keluar</h5>
                        </div>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                    <h2 class="font-weight-medium  mb-0">
                        Rp.
                        {{ number_format($jumlahkeluar,2,',','.') }}
                    </h2>
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-tittle">
                    <h4>Data Kas Keluar</h4>
                </div>
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

                            <td>
                                <div class="row">
                                    <a href="{{route('kaskeluar.edit', $data->id)}}"
                                        class="btn btn-primary btn-sm ml-2">Edit</a>

                                    <form action="{{ route('kaskeluar.destroy', $data->id) }}" class="pull-left"
                                        method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="btn btn-danger btn-sm ml-2"
                                            onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<!-- DataTables  & Plugins -->
<script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
</script>
<script
    src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js">
</script>
<script
    src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
</script>
<!-- Sweetalert 2 -->
<script type="text/javascript"
    src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Select2 -->
<script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/select2/js/select2.full.min.js"></script>
<script>

</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable({
        "iDisplayLength": 10
    });

});
</script>

@endpush