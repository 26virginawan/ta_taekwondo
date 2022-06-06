@extends('layouts.backend.app')
@section('title', 'Edit Atlet')
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
@section('content_title', 'Edit Atlet')
@section('content')
<x-alert></x-alert>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ route('atlet.update', $atlet->id)  }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="block text-sm font-bold text-gray-700">
                                    Photo
                                </label>
                                <div class="mt-2 flex items-center">
                                    <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100 mr-2">
                                        <img src="{{asset('atlet/images/' . $atlet->image)}}" alt=""
                                            style="width:150px;">
                                    </span>
                                    <input class="border border-gray-400 p-2 w-full" type="file" name="image" id="image"
                                        accept=".jpg, .png, .jpeg">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="nisn">NISN:</label>
                                <input required="" type="text" name="nisn" id="nisn" class="form-control"
                                    value="{{$atlet->nisn}}">
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="name">Nama Atlet:</label>
                                <input required="" type="text" name="name" id="name" class="form-control"
                                    value="{{$atlet->name}}">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="tgl_registrasi">Tanggal registrasi:</label>
                                <input required="" type="date" name="tgl_registrasi" id="tgl_registrasi"
                                    class="form-control" value="{{$atlet->tgl_registrasi}}">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir:</label>
                                <input required="" type="text" name="tempat_lahir" id="tempat_lahir"
                                    class="form-control" value="{{$atlet->tempat_lahir}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir:</label>
                                <input required="" type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"
                                    value="{{$atlet->tgl_lahir}}">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin:</label>
                                <select required="" name="jenis_kelamin" id="jenis_kelamin"
                                    class="form-control select2bs4" value="{{$atlet->jenis_kelamin}}">
                                    <option value="{{$atlet->jenis_kelamin}}">{{$atlet->jenis_kelamin}}</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="bb">berat badan:</label>
                                <input required="" type="text" name="bb" id="bb" class="form-control"
                                    value="{{$atlet->bb}}">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="tb">tinggi badan:</label>
                                <input required="" type="text" name="tb" id="tb" class="form-control"
                                    value="{{$atlet->tb}}">
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="no_telepon">No Telepon:</label>
                                <input required="" type="text" name="no_telepon" id="no_telepon" class="form-control"
                                    value="{{$atlet->no_telepon}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="tingkat_sabuk">Tingkat Sabuk:</label>
                                <input required="" type="text" name="tingkat_sabuk" id="tingkat_sabuk"
                                    class="form-control" value="{{$atlet->tingkat_sabuk}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="kelas">kelas:</label>
                                <select required="" name="kelas" id="kelas" class="form-control select2bs4">
                                    <option value="{{$atlet->kelas}}">{{$atlet->kelas}}</option>
                                    <option value="reguler">Reguler</option>
                                    <option value="poomsae">Poomsae</option>
                                    <option value="kyorugi">Kyorugi</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save fa-fw"></i> UPDATE
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
@push('js')
<!-- Select2 -->
<script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript">
//Initialize Select2 Elements
$('.select2').select2()

//Initialize Select2 Elements
$('.select2bs4').select2({
    theme: 'bootstrap4'
})
</script>
@endpush