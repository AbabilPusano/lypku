<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fullController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang_kami');
})->name('tentang_kami');


Route::get('/artikel', [fullController::class, 'indexArtikel'])->name('artikel');
Route::get('/isi_artikel/{id}', [fullController::class, 'showArtikel'])->name('isi_artikel');


Route::get('/belanja', function () {
    return view('belanja');
})->name('belanja');

Route::get('/kiat', function () {
    return view('kiat');
})->name('kiat');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/tips', function () {
    return view('tips');
})->name('tips');

Route::get('/detail_produk', function () {
    return view('detail_produk');
})->name('detail_produk');

Route::get('/keranjang', function () {
    return view('keranjang');
})->name('keranjang');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/alamat', function () {
    return view('alamat');
})->name('alamat');

Route::get('/pembelian', function () {
    return view('pembelian');
})->name('pembelian');

Route::get('/admin', [fullController::class, 'indexAdmin'])->name('admin');
Route::get('/hewan/{id}', [fullController::class, 'showHewan'])->name('detail_hewan');
Route::get('/list-hewan', [fullController::class, 'indexListHewan'])->name('hewan');
Route::get('/hewan-memory', [fullController::class, 'indexListHem'])->name('hem');
Route::get('/list-memori', [fullController::class, 'indexListMemori'])->name('memori');
Route::get('/memori/{id}', [fullController::class, 'showMemori'])->name('detail_memori');

Route::get('/artikelad', [fullController::class, 'index'])->name('artikelad');
Route::post('/artikelad', [fullController::class, 'store'])->name('artikelad.store');
Route::delete('/artikelad/{id}', [fullController::class, 'destroy'])->name('artikelad.destroy');
Route::put('/artikelad/{id}', [fullController::class, 'update'])->name('artikelad.update');

Route::post('/register', [fullController::class, 'register'])->name('register');
Route::post('/login', [fullController::class, 'login'])->name('login');
Route::post('/logout', [fullController::class, 'logout'])->name('logout');

