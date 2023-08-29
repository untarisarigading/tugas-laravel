<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;

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
    return view('welcome');
});

Route::get('/petugas', [PerpustakaanController::class, 'petugas'])
->name('get_petugas');

Route::get('/buku', [PerpustakaanController::class, 'buku'])
->name('get_buku');

Route::get('/anggota', [PerpustakaanController::class, 'anggota'])
->name('get_anggota');
