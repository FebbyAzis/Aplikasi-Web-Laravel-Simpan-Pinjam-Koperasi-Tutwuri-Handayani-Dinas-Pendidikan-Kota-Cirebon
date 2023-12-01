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
    Route::resource('/pinjaman-reguler-anggota', PinjamanRegulerController::class);
    Route::resource('/utang-barang', UtangBarangController::class);
    Route::resource('/utang-p3', UtangP3Controller::class);
    Route::resource('/utang-p3-anggota', UtangP3DetailController::class);
    Route::resource('/penarikan-simpanan', PenarikanController::class);
    Route::resource('/utang-barang-anggota', UtangBarangDetailController::class);
    Route::resource('/angsuran-pinjaman-reguler', AngsuranRegulerController::class);
    // Route::put('/anggota/delete/{id}', [AnggotaController::class, 'anggotaDelete']);
    Route::get('/calculate/{anggota_id}', 'SimpananWajibController@calculate')->name('form.calculate');
    

});

Route::middleware(['auth'])->group(function(){
    Route::resource('/dashboard-anggota', DashboardUserController::class);
    Route::resource('/data-anggota', DataAnggotaController::class);
    // Route::get('/data-anggota/{user}', [DataAnggotaController::class, 'dataanggota']);

    

});

