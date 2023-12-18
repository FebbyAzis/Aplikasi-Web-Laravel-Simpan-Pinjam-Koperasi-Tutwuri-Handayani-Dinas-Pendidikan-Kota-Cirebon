<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\SimpananWajibController;
use App\Http\Controllers\SimpananPokokController;
use App\Http\Controllers\SimpananManasukaController;
use App\Http\Controllers\ManasukaDetailController;
use App\Http\Controllers\WajibDetailController;
use App\Http\Controllers\DataAnggotaController;
use App\Http\Controllers\PinjamanRegulerController;
use App\Http\Controllers\PinjRegController;
use App\Http\Controllers\UtangBarangController;
use App\Http\Controllers\UtangP3Controller;
use App\Http\Controllers\PenarikanController;
use App\Http\Controllers\UtangBarangDetailController;
use App\Http\Controllers\UtangP3DetailController;
use App\Http\Controllers\AngsuranRegulerController;
use App\Http\Controllers\AngsuranUtangBarangController;
use App\Http\Controllers\AngsuranUtangP3Controller;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::middleware(['auth', 'admin'])->group(function(){
    Route::resource('/dashboard-admin', DashboardAdminController::class);
    Route::resource('/anggota', AnggotaController::class);
    Route::resource('/foto', FotoController::class);
    Route::resource('/simpanan-pokok', SimpananPokokController::class);
    Route::resource('/simpanan-wajib', SimpananWajibController::class);
    Route::resource('/simpanan-manasuka', SimpananManasukaController::class);
    Route::resource('/manasuka-detail', ManasukaDetailController::class);
    Route::resource('/wajib-detail', WajibDetailController::class);
    Route::resource('/pinjaman-reguler', PinjRegController::class);
    Route::resource('/pinjaman-reguler-detail', PinjamanRegulerController::class);
    Route::resource('/utang-barang', UtangBarangController::class);
    Route::resource('/utang-p3', UtangP3Controller::class);
    Route::resource('/utang-p3-detail', UtangP3DetailController::class);
    Route::resource('/penarikan-simpanan', PenarikanController::class);
    Route::resource('/utang-barang-detail', UtangBarangDetailController::class);
    Route::resource('/angsuran-pinjaman-reguler', AngsuranRegulerController::class);
    Route::resource('/angsuran-utang-barang', AngsuranUtangBarangController::class);
    Route::resource('/angsuran-utang-p3', AngsuranUtangP3Controller::class);
    // Route::get('/status-pinjaman/{id}', [PinjamanRegulerController::class, 'lunas']);
    Route::put('/status-pinjaman-reguler/{id}', [PinjamanRegulerController::class, 'lunas']);
    Route::put('/status-utang-barang/{id}', [UtangBarangDetailController::class, 'lunas']);
    Route::put('/status-utang-p3/{id}', [UtangP3DetailController::class, 'lunas']);
    Route::put('/hapus-simpanan-wajib/{id}', [SimpananWajibController::class, 'hapusSimpananWajib']);
    Route::put('/hapus-pinjaman-reguler/{id}', [PinjamanRegulerController::class, 'hapusPinjamanReguler']);
    Route::put('/hapus-utang-barang-detail/{id}', [UtangBarangDetailController::class, 'hapusUtangBarangDetail']);
    Route::put('/hapus-utang-p3-detail/{id}', [UtangP3DetailController::class, 'hapusUtangP3Detail']);
    Route::put('/hapus-angsuran-reguler/{id}', [AngsuranRegulerController::class, 'hapusAngsuranReguler']);
    Route::put('/hapus-angsuran-utang-barang/{id}', [AngsuranUtangBarangController::class, 'hapusAngsuranUtangBarang']);
    Route::put('/hapus-angsuran-utang-p3/{id}', [AngsuranUtangP3Controller::class, 'hapusAngsuranUtangP3']);
    
    Route::get('/calculate/{anggota_id}', 'SimpananWajibController@calculate')->name('form.calculate');
    

});

Route::middleware(['auth'])->group(function(){
    Route::resource('/dashboard-anggota', DashboardUserController::class);
    Route::resource('/data-anggota', DataAnggotaController::class);
    Route::get('/simpanan-manasuka-anggota', [UserController::class, 'simpanan_manasuka']);
    Route::get('/pinjaman-reguler-anggota', [UserController::class, 'pinjaman_reguler']);
    Route::get('/pinjaman-reguler-anggota/{id}', [UserController::class, 'pinjaman_reguler_detail']);
    Route::get('/utang-barang-anggota', [UserController::class, 'utang_barang']);
    Route::get('/utang-barang-anggota/{id}', [UserController::class, 'utang_barang_detail']);
    Route::get('/utang-p3-anggota', [UserController::class, 'utang_p3']);
    Route::get('/utang-p3-anggota/{id}', [UserController::class, 'utang_p3_detail']);
    Route::get('/simpanan-pokok-anggota', [UserController::class, 'simpanan_pokok']);
    Route::get('/simpanan-wajib-anggota', [UserController::class, 'simpanan_wajib']);
    Route::get('/simpanan-manasuka-anggota', [UserController::class, 'simpanan_manasuka']);
    // Route::get('/data-anggota/{user}', [DataAnggotaController::class, 'dataanggota']);

    

});

