<?php

use App\Http\Controllers\MahasiswaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [MahasiswaController::class, 'index'])->name('index'); //mengarahkan ke halaman index
Route::get('/create', [MahasiswaController::class, 'create'])->name('create'); //mengarahkan ke halaman input mahasiswa
Route::post('/created', [MahasiswaController::class, 'created'])->name('created'); // mengirim data agar dapat di tambahkan kedalam data base
Route::get('/{nim}/edit', [MahasiswaController::class, 'edit'])->name('edit'); //mengarahkan ke halaman edit dengan parameter nim
Route::post('/edit', [MahasiswaController::class, 'update'])->name('update'); // update data sesuai dengan nim
Route::get('/{nim}/delete', [MahasiswaController::class, 'delete'])->name('delete'); // mengarahkan ke controller agar data dapat dihapus
Route::get('/aboutme',[MahasiswaController::class, 'aboutme'])->name('aboutme'); //mengarahkan ke halaman about me