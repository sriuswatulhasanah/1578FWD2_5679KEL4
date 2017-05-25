<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Hello-World',function(){
	return 'Hello World';
});

Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');

Route::group(['middleware'=>'AutentifikasiUser'],function ()
 {

	Route::get('pengguna','PenggunaController@awal');
	Route::get('pengguna/tambah','PenggunaController@tambah');
	Route::get('pengguna/{pengguna}','PenggunaController@lihat');
	Route::post('pengguna/simpan','PenggunaController@simpan');
	Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
	Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
	Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

	Route::get('berita','BeritaController@awal');
	Route::get('berita/tambah','BeritaController@tambah');
	Route::get('berita/{berita}','BeritaController@lihat');
	Route::post('berita/simpan','BeritaController@simpan');
	Route::get('berita/edit/{berita}','BeritaController@edit');
	Route::post('berita/edit/{berita}','BeritaController@update');
	Route::get('berita/hapus/{berita}','BeritaController@hapus');

	Route::get('pengelola','PengelolaController@awal');
	Route::get('pengelola/tambah','PengelolaController@tambah');
	Route::get('pengelola/{pengelola}','PengelolaController@lihat');
	Route::post('pengelola/simpan','PengelolaController@simpan');
	Route::get('pengelola/edit/{pengelola}','PengelolaController@edit');
	Route::post('pengelola/edit/{pengelola}','PengelolaController@update');
	Route::get('pengelola/hapus/{pengelola}','PengelolaController@hapus');

	Route::get('budidaya','BudidayaController@awal');
	Route::get('budidaya/tambah','BudidayaController@tambah');
	Route::get('budidaya/{budidaya}','BudidayaController@lihat');
	Route::post('budidaya/simpan','BudidayaController@simpan');
	Route::get('budidaya/edit/{budidaya}','BudidayaController@edit');
	Route::post('budidaya/edit/{budidaya}','BudidayaController@update');
	Route::get('budidaya/hapus/{budidaya}','BudidayaController@hapus');

	Route::get('jenis','JenisController@awal');
	Route::get('jenis/tambah','JenisController@tambah');
	Route::get('jenis/{jenis}','JenisController@lihat');
	Route::post('jenis/simpan','JenisController@simpan');
	Route::get('jenis/edit/{jenis}','JenisController@edit');
	Route::post('jenis/edit/{jenis}','JenisController@update');
	Route::get('jenis/hapus/{jenis}','JenisController@hapus');

	Route::get('kategori','KategoriController@awal');
	Route::get('kategori/tambah','KategoriController@tambah');
	Route::get('kategori/{kategori}','KategoriController@lihat');
	Route::post('kategori/simpan','KategoriController@simpan');
	Route::get('kategori/edit/{kategori}','KategoriController@edit');
	Route::post('kategori/edit/{kategori}','KategoriController@update');
	Route::get('kategori/hapus/{kategori}','KategoriController@hapus');

	Route::get('tempat','TempatController@awal');
	Route::get('tempat/tambah','TempatController@tambah');
	Route::get('tempat/{tempat}','TempatController@lihat');
	Route::post('tempat/simpan','TempatController@simpan');
	Route::get('tempat/edit/{tempat}','TempatController@edit');
	Route::post('tempat/edit/{tempat}','TempatController@update');
	Route::get('tempat/hapus/{tempat}','TempatController@hapus');

	Route::get('tumbuhan','TumbuhanController@awal');
	Route::get('tumbuhan/tambah','TumbuhanController@tambah');
	Route::get('tumbuhan/{tumbuhan}','TumbuhanController@lihat');
	Route::post('tumbuhan/simpan','TumbuhanController@simpan');
	Route::get('tumbuhan/edit/{tumbuhan}','TumbuhanController@edit');
	Route::post('tumbuhan/edit/{tumbuhan}','TumbuhanController@update');
	Route::get('tumbuhan/hapus/{tumbuhan}','TumbuhanController@hapus');

	Route::get('budidaya_tumbuhan','Budidaya_TumbuhanController@awal');
	Route::get('budidaya_tumbuhan/tambah','Budidaya_TumbuhanController@tambah');
	Route::get('budidaya_tumbuhan/{budidaya_tumbuhan}','Budidaya_TumbuhanController@lihat');
	Route::post('budidaya_tumbuhan/simpan','Budidaya_TumbuhanController@simpan');
	Route::get('budidaya_tumbuhan/edit/{budidaya_tumbuhan}','Budidaya_TumbuhanController@edit');
	Route::post('budidaya_tumbuhan/edit/{budidaya_tumbuhan}','Budidaya_TumbuhanController@update');
	Route::get('budidaya_tumbuhan/hapus/{budidaya_tumbuhan}','Budidaya_TumbuhanController@hapus');

	Route::get('userberita','BeritaController@beritaawal');
	Route::get('userberita/{berita}','BeritaController@beritalihat');

	Route::get('userbudidaya','BudidayaController@budidayaawal');
	Route::get('userbudidaya/{budidaya}','BudidayaController@budidayalihat');

	Route::get('userpengelola','PengelolaController@pengelolaawal');
	Route::get('userpengelola/{pengelola}','PengelolaController@pengelolalihat');
});
