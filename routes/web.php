<?php

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


Auth::routes();

Route::get('admin/brand', 'BrandController@index');
Route::get('admin/brand/tambah-brand', 'BrandController@create');
Route::post('admin/brand/insert-brand', 'BrandController@insert');
Route::get('admin/brand/edit-brand/{id}', 'BrandController@edit');
Route::post('admin/brand/update-brand/{id}', 'BrandController@update');
Route::get('admin/brand/hapus-brand/{id}', 'BrandController@hapus');


Route::get('/', 'HomeController@index');

Route::get('admin', 'HomeController@admin')->name('admin.home')->middleware('is_admin');

Route::get('admin/produk', 'ProdukController@list');
Route::get('admin/produk/tambah-produk', 'ProdukController@tambah');
Route::post('admin/produk/insert-produk', 'ProdukController@insert');
Route::get('admin/produk/edit-produk/{id}', 'ProdukController@edit');
Route::post('admin/produk/update-produk/{id}', 'ProdukController@update');
Route::get('admin/produk/hapus-produk/{id}', 'ProdukController@hapus');

Route::get('admin/kategori', 'KategoriController@index');
Route::get('admin/kategori/tambah-kategori', 'KategoriController@tambah');
Route::post('admin/kategori/insert-kategori', 'KategoriController@insert');
Route::get('admin/kategori/edit-kategori/{id}', 'KategoriController@edit');
Route::get('admin/kategori/hapus-kategori/{id}', 'KategoriController@hapus');
Route::post('admin/kategori/update-kategori/{id}', 'KategoriController@update');

Route::get('admin/pesanan', 'PesananController@index');
Route::post('admin/pesanan/konfirmasi-pembayaran/{id}', 'PesananController@konfirmasi_pembayaran');
Route::post('admin/pesanan/batal-konfirmasi-pembayaran/{id}', 'PesananController@batal_konfirmasi_pembayaran');
Route::post('admin/pesanan/konfirmasi-pengambilan/{id}', 'PesananController@konfirmasi_pengambilan');
Route::post('admin/pesanan/batal-konfirmasi-pengambilan/{id}', 'PesananController@batal_konfirmasi_pembayaran');
Route::post('admin/pesanan/konfirmasi-pengembalian/{id}', 'PesananController@konfirmasi_pengembalian');
Route::post('admin/pesanan/batal-konfirmasi-pengembalian/{id}', 'PesananController@batal_konfirmasi_pengembalian');

Route::get('admin/member', 'MemberController@index');

Route::get('admin/rekening', 'RekeningController@index');
Route::get('admin/rekening/tambah-rekening', 'RekeningController@tambah');
Route::post('admin/rekening/insert-rekening', 'RekeningController@insert');
Route::get('admin/rekening/edit-rekening/{id}', 'RekeningController@edit');
Route::post('admin/rekening/update-rekening/{id}', 'RekeningController@update');
Route::get('admin/rekening/hapus-rekening/{id}', 'RekeningController@hapus');

Route::get('home', 'HomeController@index')->name('home');
Route::get('produk', 'ProdukController@index');
Route::get('/list_brand/{brand}', 'ProdukController@brand_kategori')->name('brand.kategori');
Route::get('/list_brand/list_kategori/{kategori}', 'ProdukController@list_kategori')->name('list.kategori');
Route::get('kontak', 'KontakController@index');
Route::get('kontak', 'KontakController@index');
Route::get('pesanan', 'PesananController@client');

Route::get('profile', 'ProfileController@index');
Route::get('edit-profile', 'ProfileController@edit');
Route::post('update-profile', 'ProfileController@update');
Route::post('upload-foto-profil', 'ProfileController@upload_foto_profil');

Route::get('rental/{id}', 'RentalController@index');
Route::post('rental/{id}', 'RentalController@rental');

Route::get('checkout', 'RentalController@checkout');
Route::delete('checkout/{id}', 'RentalController@delete');

Route::get('admin/pesanan-detail/{id}','PesananController@pesanan_detail');
Route::get('pembayaran', 'PembayaranController@index');
Route::post('upload-bukti-pembayaran', 'PembayaranController@upload_bukti');