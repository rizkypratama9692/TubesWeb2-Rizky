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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/asterix', 'AsterixController@index');
// Route::get('barang/add', [BarangController::class, 'add']);
// Route::get('asterix', [AsterixController::class, 'index']);
// Route::get('asterix/toko', [AsterixController::class, 'toko']);

// Route::resource('asterix', AsterixController::class);
Route::get('/asterix', 'AsterixController@index');
Route::get('/asterix/toko', 'AsterixController@toko');
Route::get('/asterix/struk', 'AsterixController@ngitung');
Route::get('/asterix/admin/alat', 'AsterixController@admin_alat');
Route::get('/asterix/admin/alat/tambah', 'AsterixController@tambah_item');
Route::get('/asterix/admin/alat/edit/{id}', 'AsterixController@edit_item');

// ini routing buat proses daftar pake route::post
Route::post('daftar', 'AsterixController@register');
Route::post('masuk', 'AsterixController@authenticate');
Route::post('keluar', 'AsterixController@logout');
Route::post('tambah', 'AsterixController@store');
?>