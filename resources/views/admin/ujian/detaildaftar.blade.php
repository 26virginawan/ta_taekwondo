@extends('layouts.backend.app')
@section('title', 'Daftar Atlet Ujian')
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
@section('content_title', 'Daftar Atlet Ujian')
@section('content')
<x-alert></x-alert>
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="height:160px;">
                    <div class="card-header" style="font-weight: bold;">Cetak Daftar Atlet Berdasarkan tanggal</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('daftarujian.print') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="date" name="tanggal_daftar" required="" class="form-control"
                                        id="tanggal_daftar">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-danger btn-sm" target="_blank">
                                        PRINT
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Filter Daftar Ujian
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Nama Ujian</label>
                                <select id="filter-ujian" class="form-control filter">
                                    <option value="">Pilih Nama Ujian</option>
                                    @foreach($ujian as $dt)
                                    <option value="{{$dt->id}}">{{$dt->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Daftar Ujian
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Atlet</th>
                            <th>Tanggal Lahir</th>
                            <th>Tanggal Daftar</th>
                            <th>Sabuk</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($daftarujian as $dt)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$dt->name}}</td>
                            <td>{{\Carbon\Carbon::parse($dt->tgl_lahir)->format('d-m-Y') }}</td>
                            <td>{{\Carbon\Carbon::parse($dt->tgl_daftar)->format('d-m-Y') }}</td>
                            <td>{{$dt -> sabuk}}</td>

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
let ujian = $("#filter-ujian").val()
$(document).ready(function() {
    $('#table').DataTable({
        "iDisplayLength": 10
        data: function(d) {
            d.ujian = ujian;
            return d
        }
    });

});

$(".filter").on('change', function() {
    ujian = $("#filter-ujian").val()
    table.reload(null, false)
})
</script>

@endpush