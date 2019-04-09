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

Route::get('/login', function () {
    return view('halamanlogin');
});

Auth::routes();
Route::get('/', function (){
  return view('home_guest');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/layani/{id}', 'HomeController@layani')->name('layani');
Route::post('/selesai/{id}', 'HomeController@selesai')->name('selesai');
Route::get('/cancle/{id}', 'HomeController@cancle')->name('cancle');
Route::get('/tampil_all', 'HomeController@tampil_antrian')->name('tampil_all');
Route::post('/tampil_by_date', 'HomeController@tampil_by_date')->name('tampil_by_date');

//dokter route
Route::get('form_input_dokter', 'DokterController@index')->name('input_data_dokter');
Route::get('form_update_dokter/{id}', 'DokterController@edit')->name('form_update_data_dokter');
Route::post('update_dokter/{id}','DokterController@update')->name('update_dokter');

Route::get('form_update_jadwal/{id}','DokterController@form_jadwal')->name('form_jadwal');
Route::post('update_jadwal/{id}','DokterController@update_jadwal')->name('update_jadwal');

Route::post('simpandokter', 'DokterController@store')->name('simpandokter');
Route::get('tampil_dokter', 'DokterController@create')->name('tampil_dokter');
Route::get('delete_dokter/{id}', 'DokterController@destroy')->name('delete_dokter');

//layanan route
Route::get('form_input_layanan', 'LayananController@index')->name('form_input_layanan');
Route::post('simpanlayanan', 'LayananController@store')->name('simpanlayanan');
Route::get('tampil_layanan', 'LayananController@create')->name('tampil_layanan');

Route::get('form_update_layanan/{id}','LayananController@show')->name('form_update_layanan');
Route::post('update_layanan/{id}','LayananController@update')->name('update_layanan');

Route::get('delete_layanan/{id}', 'LayananController@destroy')->name('delete_layanan');

//analisis date
Route::get('/analisa', 'AnalisaController@index')->name('analisa');
Route::get('/analisaall', 'AnalisaController@analisall')->name('analisaall');
Route::post('/analisabyid', 'AnalisaController@analisaLayananById')->name('analisabyid');
Route::get('/updatewaktulayanan/{nama_layanan}/{waktu}','AnalisaController@updateWaktuLayanan')->name('update_waktu_layanan');
