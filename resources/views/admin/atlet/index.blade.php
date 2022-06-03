@extends('layouts.backend.app')
@section('title', 'Data Atlet')
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
@section('content_title', 'Data Atlet')
@section('content')
<x-alert></x-alert>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                @can('create-atlet')
                <a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal"
                    data-target="#createModal">
                    <i class="fas fa-plus fa-fw"></i> Tambah Data
                </a>
                @endcan

                <a href="atlet/cetak" class="btn btn-danger btn-sm"><i class="fa fa-pdf fa-fw"></i>
                    Cetak PDF</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="dataTable2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama Atlet</th>
                            <th>NISN</th>
                            <th>Tanggal Registrasi</th>
                            <th>No Telepon</th>
                            <th>Tingkat Sabuk</th>
                            <th>Kelas</th>
                            <th width="200px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
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

<!-- Create Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" enctype="multipart/form-data" id="createModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="store" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="alert alert-danger print-error-msg" style="display: none;">
                        <ul></ul>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="nisn">NISN:</label>
                                <input required="" type="text" name="nisn" id="nisn" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="gambar" class="col-md-4 control-label">Foto</label>

                                <input type="file" name="gambar" class="form-control">

                            </div>
                            <div class="img-holder"> </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="name">Nama Atlet:</label>
                                <input required="" type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input required="" type="text" name="username" id="username" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="tgl_registrasi">Tanggal registrasi:</label>
                                <input required="" type="date" name="tgl_registrasi" id="tgl_registrasi"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir:</label>
                                <input required="" type="text" name="tempat_lahir" id="tempat_lahir"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir:</label>
                                <input required="" type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin:</label>
                                <select required="" name="jenis_kelamin" id="jenis_kelamin"
                                    class="form-control select2bs4">
                                    <option disabled="" selected="">- PILIH JENIS KELAMIN -</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="bb">berat badan:</label>
                                <input required="" type="text" name="bb" id="bb" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="tb">tinggi badan:</label>
                                <input required="" type="text" name="tb" id="tb" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="no_telepon">No Telepon:</label>
                                <input required="" type="text" name="no_telepon" id="no_telepon" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="tingkat_sabuk">Tingkat Sabuk:</label>
                                <input required="" type="text" name="tingkat_sabuk" id="tingkat_sabuk"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="kelas">kelas:</label>
                                <select required="" name="kelas" id="kelas" class="form-control select2bs4">
                                    <option disabled="" selected="">- PILIH KELAS -</option>
                                    <option value="reguler">Reguler</option>
                                    <option value="poomsae">Poomsae</option>
                                    <option value="kyorugi">Kyorugi</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save fa-fw"></i> SIMPAN
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Create Modal -->

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="update">
                <div class="modal-body">
                    <div class="alert alert-danger print-error-msg" style="display: none;">
                        <ul></ul>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="name">Nama Atlet:</label>
                                <input type="hidden" name="id_edit" id="id_edit" class="form-control" readonly="">
                                <input required="" type="text" name="name" id="name_edit" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="nisn">NISN:</label>
                                <input required="" type="text" name="nisn" id="nisn_edit" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="tgl_registrasi">Tanggal registrasi:</label>
                                <input required="" type="date" name="tgl_registrasi" id="tgl_registrasi_edit"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir:</label>
                                <input required="" type="text" name="tempat_lahir" id="tempat_lahir_edit"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir:</label>
                                <input required="" type="date" name="tgl_lahir" id="tgl_lahir_edit"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin:</label>
                                <select required="" name="jenis_kelamin" id="jenis_kelamin_edit"
                                    class="form-control select2bs4">

                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="bb">berat badan:</label>
                                <input required="" type="text" name="bb" id="bb_edit" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="tb">tinggi badan:</label>
                                <input required="" type="text" name="tb" id="tb_edit" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="no_telepon">No Telepon:</label>
                                <input required="" type="text" name="no_telepon" id="no_telepon_edit"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="tingkat_sabuk">Tingkat Sabuk:</label>
                                <input required="" type="text" name="tingkat_sabuk" id="tingkat_sabuk_edit"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="kelas">kelas:</label>
                                <select required="" name="kelas" id="kelas_edit" class="form-control select2bs4">

                                    <option value="reguler">Reguler</option>
                                    <option value="poomsae">Poomsae</option>
                                    <option value="kyorugi">Kyorugi</option>
                                </select>
                            </div>
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
    </div>
</div>
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
@include('admin.atlet.ajax')
@endpush