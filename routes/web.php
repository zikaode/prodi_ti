<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\staticController;

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

Route::controller(staticController::class)->group(function () {
    Route::get('/', 'index')->name('static.index');
    Route::get('/tentang', 'profil')->name('static.profil');
    Route::get('/data-mahasiswa', 'dataMahasiswa')->name('static.dataMahasiswa');
    Route::get('/struktur-pimpinan', 'strukturPimpinan')->name('static.strukturPimpinan');
    Route::get('/kuesioner-mahasiswa', 'kuesionerMahasiswa')->name('static.kuesionerMahasiswa');
    Route::get('/kuesioner-alumni', 'kuesionerAlumni')->name('static.kuesionerAlumni');
    Route::get('/data-dosen', 'dataDosen')->name('static.dataDosen');

    // Fasilitas
    Route::get('/fasilitas/laboratorium', 'laboratorium')->name('static.laboratorium');
});
