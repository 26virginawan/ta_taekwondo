@extends('layouts.backend.app')
@section('title', 'Data Ujian')
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
@section('content_title', 'Data Ujian')
@section('content')
<div class="container mt-3">

    <div class="jumbotron">
    <a href="/admin/inputkegiatan"><button type="button" class="btn btn-primary btn-sm">Tambah Kegiatan</button></a><br><br>

        <!-- Sesion alert -->
        @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
        @endif 

        <table id="tabel-data" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Tanggal Kegiatan</th>
                    <th>Jumlah Pendaftar</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;    
                ?>
            <!-- melakukan perulangan php dan untuk merekam data -->
                @foreach ($kegiatan as $keg)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$keg -> nama}}</td>
                    <td>{{$keg -> tanggal}}</td>
                    <td> {{$keg -> sisa}} dari {{$keg -> kuota}}</td>
                    <td>{{$keg -> status}}</td>
                    <td>
                    
                    <a href="/admin/ubahstatus/{{$keg -> id}}"><button type="button" class="btn btn-warning btn-sm">ubah</button></a>
                    <a href="/admin/detail/{{$keg -> id}}"><button type="button" class="btn btn-warning btn-sm">Detail</button></a>
                    <a href="/deletedata/{{$keg -> id}}/"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
             
            
                <script>
                    $(document).ready(function() 
                    {
                    $('#tabel-data').DataTable();
                    } );
                </script>
        </table>
    </div>
</div>
@endsection
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

@endpush