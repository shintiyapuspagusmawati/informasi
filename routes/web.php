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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin|guru|siswa']], function(){
	Route::resource('mapel','MapelController');
	Route::resource('guru', 'GuruController');
	Route::resource('siswa', 'SiswaController');
	Route::resource('kelas','KelasController');
	Route::resource('jurusan','JurusanController');
	Route::resource('nilai','NilaiController');
    });

Route::get('/filter/{mapel}','HomeController@filter');