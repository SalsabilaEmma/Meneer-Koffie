<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\jenisController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\reservasiController;
use App\Http\Controllers\userController;
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
//     return view('user.index');
// });
Route::get('/', [userController::class, 'index'])->name('index');
Route::get('/menu', [userController::class, 'menu'])->name('menu');
Route::get('/gallery', [userController::class, 'gallery'])->name('gallery');
Route::get('/reservation', [reservasiController::class, 'indexClient'])->name('reservasi');
Route::post('/reservation/store', [reservasiController::class, 'store'])->name('reserv.store');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [adminController::class, 'index'])->name('admin');
    Route::post('/admin-jenis/store', [jenisController::class, 'store'])->name('store.jenis');
    Route::post('/admin-jenis/{id}', [jenisController::class, 'destroy'])->name('delete.jenis');
    Route::post('/admin-jenis/update{id}', [jenisController::class, 'update'])->name('update.jenis');

    Route::get('/admin-menu', [menuController::class, 'index'])->name('index.menu');
    Route::post('/admin-menu/store', [menuController::class, 'store'])->name('store.menu');
    Route::post('/admin-menu/delete{id}', [menuController::class, 'destroy'])->name('delete.menu');
    Route::get('/admin-menu/{id}', [menuController::class, 'edit'])->name('edit.menu');
    Route::post('/admin-menu/update{id}', [menuController::class, 'update'])->name('update.menu');

    Route::post('/admin-booklet/store', [menuController::class, 'storeBooklet'])->name('store.booklet');
    Route::post('/admin-booklet/delete{id}', [menuController::class, 'destroyBooklet'])->name('delete.booklet');

    Route::get('/admin-gallery', [galleryController::class, 'index'])->name('index.gallery');
    Route::post('/admin-gallery/store', [galleryController::class, 'store'])->name('store.gallery');
    Route::post('/admin-gallery/{id}', [galleryController::class, 'destroy'])->name('delete.gallery');
    Route::post('/admin-gallery/update{id}', [galleryController::class, 'update'])->name('update.gallery');

    Route::get('/admin-reservasi', [reservasiController::class, 'index'])->name('index.reserv');
    Route::get('/admin-reservasi/detail{id}', [reservasiController::class, 'indexDetail'])->name('indexDetail.reserv');
});

require __DIR__ . '/auth.php';
