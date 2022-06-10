@extends('layouts.backend.app')
@section('title', 'Daftar Ujian')
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
@section('content_title', 'Daftar Ujian')
@section('content')
<x-alert></x-alert>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">

                <!-- <a href="atlet/cetak" class="btn btn-danger btn-sm"><i class="fa fa-pdf fa-fw"></i>
                    Cetak PDF</a> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ujian</th>
                            <th>Tanggal Ujian</th>
                            <th>Kuota</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ujian as $dt)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$dt->name}}</td>
                            <td>{{\Carbon\Carbon::parse($dt->tgl_ujian)->format('d-m-Y') }}</td>
                            <td>{{$dt -> sisa}} dari {{$dt -> kuota}}</td>
                            <td>{{$dt->status}}</td>
                            <td>
                                <div class="row">
                                    <a href="{{route('daftarujian.create')}}"
                                        class="btn btn-primary btn-sm ml-2">Daftar</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

<!-- Edit Modal -->

@stop

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