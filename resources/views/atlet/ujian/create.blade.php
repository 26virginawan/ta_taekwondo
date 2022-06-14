@extends('layouts.backend.app')
@section('title', 'Tambah Daftar Ujian')
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
@section('content_title', 'Tambah Daftar Ujian ')
@section('content')
<x-alert></x-alert>
<div class="row">
    <div class="col-8">
        <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ route('daftarujian.store')  }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="name">Nama Atlet:</label>
                                @foreach($atlet as $row)
                                <input type="text" class="form-control" name="name" value="{{$row->name}}" readonly>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="tingkat_sabuk">Tanggal daftar:</label>
                                <input required="" type="date" name="tgl_daftar" id="tgl_daftar" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="tingkat_sabuk">Tingkat Sabuk:</label>
                                <input required="" type="text" name="sabuk" id="sabuk" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="ujian">Daftar Ujian</label>
                                <select class="form-control" id="ujian_id" name="ujian_id" required>
                                    <option selected disabled value="">Pilih Ujian </option>
                                    @foreach ($var_kegiatan as $ujian)

                                    @if ($ujian ->status == "tutup");
                                    @php
                                    echo '<option value="'.$ujian->id.'" disabled>'.$ujian ->name.'</option>';
                                    @endphp
                                    @else
                                    @php
                                    echo '<option value="'.$ujian->id.'">'.$ujian ->name.'</option>';
                                    @endphp
                                    @endif
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Silahkan Pilih Kegiatan!
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">KEMBALI</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save fa-fw"></i> DAFTAR
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@stop