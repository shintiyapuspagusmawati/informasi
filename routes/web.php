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
Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']], function(){
	Route::resource('mapel','MapelController');
	Route::resource('guru', 'GuruController');
	Route::resource('siswa', 'SiswaController');
	Route::resource('kelas','KelasController');
	Route::resource('jurusan','JurusanController');
	Route::resource('nilai','NilaiController');
    });

 Route::get('/rekayasa', function () {
        return view('nilai.rekperlun.kelass');
    });

 Route::get('/jenmapel', function () {
        return view('nilai.rekperlun.pelajaran.pelajaran_xii_1');
    });
 Route::get('/score', function () {
        return view('nilai.rekperlun.score.score_xii_1');
    });
 Route::get('/bio', function () {
        return view('nilai.rekperlun.biodata.biodata_xii_1');
    });

 Route::get('/guru', function () {
        return view('loginguru.index');
    });
 Route::get('/cretscore', function () {
        return view('loginguru.createnilai');
    });
 Route::get('/isbiosis', function () {
        return view('loginguru.isbiosiswa');
    });
 Route::get('/siswa', function () {
        return view('loginsiswa.index');
    });