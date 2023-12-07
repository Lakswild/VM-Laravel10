<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('auth/login');

//     // kalo mau ke login ganti ke auth/login
// });

Route::get('/auth/login', [\App\Http\Controllers\Auth\LoginController::class, 'index'])->name('auth.login');
Route::get('/auth/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('auth.logout');
Route::post('/auth/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('act.auth.login');

Route::prefix('app')->middleware(['authentication'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\User\LevelController::class, 'index'])->name('app.dashboard');
});


Route::get('/level', [\App\Http\Controllers\User\LevelController::class, 'index'])->name('level.index');
Route::get('/level/add', [\App\Http\Controllers\User\LevelController::class, 'add'])->name('level.add');
Route::get('/level/edit', [\App\Http\Controllers\User\LevelController::class, 'edit'])->name('level.edit');

Route::get('/user', [\App\Http\Controllers\User\UserController::class, 'index'])->name('user.index');
Route::get('/user/add', [\App\Http\Controllers\User\UserController::class, 'add'])->name('user.add');
Route::get('/user/edit', [\App\Http\Controllers\User\UserController::class, 'edit'])->name('user.edit');

Route::get('/status', [\App\Http\Controllers\Master\StatusController::class, 'index'])->name('status.index');
Route::get('/status/add', [\App\Http\Controllers\Master\StatusController::class, 'add'])->name('status.add');
Route::get('/status/edit', [\App\Http\Controllers\Master\StatusController::class, 'edit'])->name('status.edit');

Route::get('/kategori', [\App\Http\Controllers\Master\KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/add', [\App\Http\Controllers\Master\KategoriController::class, 'add'])->name('kategori.add');
Route::get('/kategori/edit', [\App\Http\Controllers\Master\KategoriController::class, 'edit'])->name('kategori.edit');

Route::get('/kategoritipeinput', [\App\Http\Controllers\Master\KategoritipeinputController::class, 'index'])->name('kategoritipeinput.index');
Route::get('/kategoritipeinput/add', [\App\Http\Controllers\Master\KategoritipeinputController::class, 'add'])->name('kategoritipeinput.add');
Route::get('/kategoritipeinput/edit', [\App\Http\Controllers\Master\KategoritipeinputController::class, 'edit'])->name('kategoritipeinput.edit');

Route::get('/jenis', [\App\Http\Controllers\Master\JenisController::class, 'index'])->name('jenis.index');
Route::get('/jenis/add', [\App\Http\Controllers\Master\JenisController::class, 'add'])->name('jenis.add');
Route::get('/jenis/edit', [\App\Http\Controllers\Master\JenisController::class, 'edit'])->name('jenis.edit');

Route::get('/tipeinput', [\App\Http\Controllers\Master\TipeinputController::class, 'index'])->name('tipeinput.index');
Route::get('/tipeinput/add', [\App\Http\Controllers\Master\TipeinputController::class, 'add'])->name('tipeinput.add');
Route::get('/tipeinput/edit', [\App\Http\Controllers\Master\TipeinputController::class, 'edit'])->name('tipeinput.edit');

Route::get('/form', [\App\Http\Controllers\Form\FormController::class, 'index'])->name('form.index');

Route::get('/per', [\App\Http\Controllers\Setting\PerController::class, 'index'])->name('per.index');
Route::get('/per/add', [\App\Http\Controllers\Setting\PerController::class, 'add'])->name('per.add');
Route::get('/per/edit', [\App\Http\Controllers\Setting\PerController::class, 'edit'])->name('per.edit');

Route::get('/lokasi', [\App\Http\Controllers\Setting\LokasiController::class, 'index'])->name('lokasi.index');
Route::get('/lokasi/add', [\App\Http\Controllers\Setting\LokasiController::class, 'add'])->name('lokasi.add');
Route::get('/lokasi/edit', [\App\Http\Controllers\Setting\LokasiController::class, 'edit'])->name('lokasi.edit');
