<?php

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

Route::get('/', function () {
    return view('home');
});


Route::get('/detail', function () {
    return view('detail');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/payment', function () {
    return view('payment');
});
//ADMIN

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/produk', function () {
    return view('admin.produk.produk');
});

Route::get('/admin/kategori', function () {
    return view('admin.kategori.kategori');
});

Route::get('/admin/tambahkategori', function () {
    return view('admin.kategori.tambahkategori');
});


Route::get('/admin/tambahproduk', function () {
    return view('admin.produk.tambahproduk');
});

Route::get('/admin/pesanan', function () {
    return view('admin.pesanan.pesanan');
});

Route::get('/admin/detailpesanan', function () {
    return view('admin.pesanan.detailPesanan');
});

Route::get('/admin/user', function () {
    return view('admin.user.user');
});

//PIMPINAN
Route::get('/pimpinan', function () {
    return view('pimpinan.dashboard');
});

Route::get('/pimpinan/produk', function () {
    return view('pimpinan.produk.produk');
});

Route::get('/pimpinan/kategori', function () {
    return view('pimpinan.kategori.kategori');
});

Route::get('/pimpinan/tambahkategori', function () {
    return view('pimpinan.kategori.tambahkategori');
});


Route::get('/pimpinan/tambahproduk', function () {
    return view('pimpinan.produk.tambahproduk');
});

Route::get('/pimpinan/pesanan', function () {
    return view('pimpinan.pesanan.pesanan');
});

Route::get('/pimpinan/detailpesanan', function () {
    return view('pimpinan.pesanan.detailPesanan');
});

Route::get('/pimpinan/user', function () {
    return view('pimpinan.user.user');
});

//USER


Route::get('/user', function () {
    return view('user.dashboard');
});

Route::get('/user/pesanan', function () {
    return view('user.pesanan.pesanan');
});

Route::get('/user/detailpesanan', function () {
    return view('user.pesanan.detailpesanan');
});

Route::get('/user/profil', function () {
    return view('user.profil.profil');
});



//LOGIN

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/daftaruser', function () {
    return view('login.daftaruser');
});


//CETAK


Route::get('/admin/pesanan/cetak', 'LaporanController@cetakAdminDatapesanan')->name('cetakAdminDatapesanan');
