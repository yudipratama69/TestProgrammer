<?php

use App\Http\Controllers\karyawancontroller;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/karyawan', [karyawancontroller::class, 'formKaryawan'])->name('karyawan.form');
Route::post('/simpan', [karyawancontroller::class, 'store'])->name('karyawan.store');

Route::get('/edit/{id}', [karyawancontroller::class, 'edit'])->name('karyawan.edit');
Route::post('/update/{id}', [karyawancontroller::class, 'update'])->name('karyawan.update');

Route::delete('/delete/{id}', [karyawancontroller::class, 'destroy'])->name('karyawan.destroy');
