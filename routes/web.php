<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tentang', function(){
    return view('tentang');
});

Route::get('sapa/{nama}', function($nama){
    return "Hallo, $nama! Selamat Datang di toko online.";
});
Route::get('kategori/{nama?}', function($nama= "Semua"){
    return "Menampilkan Kategori : $nama .";
});

Route::get('produk/{id}', function ($id){
    return "Detail Produk #$id .";
})->name('produk.detail');