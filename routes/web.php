<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('user', 'UserController');
Route::get('register', 'UserController@create');
Route::post('register/store', 'UserController@store');

Route::get('/', function () {
    return view('auth.login');
})->middleware(['guest']);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home.index');
});

Route::prefix('pembayaran')
    ->middleware(['auth', 'role:admin|petugas'])
    ->group(function () {
        Route::get('bayar', 'PembayaranController@index')->name(
            'pembayaran.index'
        );
        Route::get('bayar/{nisn}', 'PembayaranController@bayar')->name(
            'pembayaran.bayar'
        );
        Route::get('spp/{tahun}', 'PembayaranController@spp')->name(
            'pembayaran.spp'
        );
        Route::post('bayar/{nisn}', 'PembayaranController@prosesBayar')->name(
            'pembayaran.proses-bayar'
        );
        Route::get(
            'status-pembayaran',
            'PembayaranController@statusPembayaran'
        )->name('pembayaran.status-pembayaran');

        Route::get(
            'status-pembayaran/{siswa:nisn}',
            'PembayaranController@statusPembayaranShow'
        )->name('pembayaran.status-pembayaran.show');

        Route::get(
            'status-pembayaran/{nisn}/{tahun}',
            'PembayaranController@statusPembayaranShowStatus'
        )->name('pembayaran.status-pembayaran.show-status');

        Route::get(
            'history-pembayaran',
            'PembayaranController@historyPembayaran'
        )->name('pembayaran.history-pembayaran');

        Route::get(
            'history-pembayaran/preview/{id}',
            'PembayaranController@printHistoryPembayaran'
        )->name('pembayaran.history-pembayaran.print');

        Route::get('laporan', 'PembayaranController@laporan')->name(
            'pembayaran.laporan'
        );
        Route::post('laporan', 'PembayaranController@printPdf')->name(
            'pembayaran.print-pdf'
        );
    });

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth'])
    ->group(function () {
        Route::middleware(['role:admin'])->group(function () {
            Route::get('atlet/cetak', 'AtletController@pdf');
            Route::get('dashboard', 'DashboardController@index')->name(
                'dashboard.index'
            );
            Route::get('admin-list', 'AdminListController@index')->name(
                'admin-list.index'
            );
            Route::get('admin-list/create', 'AdminListController@create')->name(
                'admin-list.create'
            );
            Route::post('admin-list', 'AdminListController@store')->name(
                'admin-list.store'
            );
            Route::get(
                'admin-list/{id}/edit',
                'AdminListController@edit'
            )->name('admin-list.edit');
            Route::patch('admin-list/{id}', 'AdminListController@update')->name(
                'admin-list.update'
            );
            Route::delete(
                'admin-list/{id}',
                'AdminListController@destroy'
            )->name('admin-list.destroy');
            Route::resource('user', 'UserController');
            Route::resource('petugas', 'PetugasController');
            Route::resource('permissions', 'PermissionController');
            Route::resource('atlet', 'AtletController');
            Route::resource('roles', 'RoleController');

            Route::get(
                'role-permission',
                'RolePermissionController@index'
            )->name('role-permission.index');
            Route::get(
                'role-permission/create/{id}',
                'RolePermissionController@create'
            )->name('role-permission.create');
            Route::post(
                'role-permission/create/{id}',
                'RolePermissionController@store'
            )->name('role-permission.store');
            Route::get('user-role', 'UserRoleController@index')->name(
                'user-role.index'
            );
            Route::get(
                'user-role/create/{id}',
                'UserRoleController@create'
            )->name('user-role.create');
            Route::post(
                'user-role/create/{id}',
                'UserRoleController@store'
            )->name('user-role.store');
            Route::get(
                'user-permission',
                'UserPermissionController@index'
            )->name('user-permission.index');
            Route::get(
                'user-permission/create/{id}',
                'UserPermissionController@create'
            )->name('user-permission.create');
            Route::post(
                'user-permission/create/{id}',
                'UserPermissionController@store'
            )->name('user-permission.store');
        });

        Route::middleware(['role:admin|petugas'])->group(function () {
            Route::resource('spp', 'SppController');
            Route::resource('pembayaran-spp', 'PembayaranController');
            Route::resource('kelas', 'KelasController');
            Route::resource('cobak', 'CobakController');
            Route::resource('atlet', 'AtletController');
            Route::resource('siswa', 'SiswaController');
            Route::resource('prestasi', 'PrestasiController');
            Route::delete(
                'delete-all-siswa',
                'CheckBoxDeleteController@deleteAllSiswa'
            )->name('delete-all-siswa');
        });
    });

Route::prefix('atlet')
    ->middleware(['auth', 'role:atlet'])
    ->group(function () {
        Route::resource('dataAtlet', 'DataAtletController');
        Route::resource('prestasiAtlet', 'PrestasiAtletController');
        Route::get('pembayaran-spp', 'AtletController@pembayaranSpp')->name(
            'atlet.pembayaran-spp'
        );
        Route::get(
            'pembayaran-spp/{spp:tahun}',
            'AtletController@pembayaranSppShow'
        )->name('atlet.pembayaran-spp.pembayaranSppShow');
        Route::get(
            'history-pembayaran',
            'AtletController@historyPembayaran'
        )->name('atlet.history-pembayaran');
        Route::get(
            'history-pembayaran/preview/{id}',
            'AtletController@previewHistoryPembayaran'
        )->name('atlet.history-pembayaran.preview');

        Route::get('prestasi', 'AtletController@prestasi')->name(
            'atlet.prestasi'
        );
        Route::get(
            'prestasi/preview/{id}',
            'AtletController@previewPrestasi'
        )->name('atlet.prestasi.preview');

        Route::get(
            'laporan-pembayaran',
            'AtletController@laporanPembayaran'
        )->name('atlet.laporan-pembayaran');
        Route::post('laporan-pembayaran', 'AtletController@printPdf')->name(
            'atlet.laporan-pembayaran.print-pdf'
        );
    });

Route::prefix('profile')
    ->name('profile.')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/', 'ProfileController@index')->name('index');
        Route::patch('/', 'ProfileController@update')->name('update');
    });