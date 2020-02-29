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
    return view('index');
});
Route::get('/home','mainController@index')->middleware('guest');
Route::get('/daftarkelas','mainController@academy');
Route::get('/dashboard','mainController@dashboard')->middleware('auth');
Route::get('/masuk','mainController@getLogin')->middleware('guest');
Route::post('/masuk','mainController@postLogin')->name('login')->middleware('guest');
Route::get('/daftar','mainController@getRegister')->middleware('guest');
Route::post('/daftar','mainController@postRegister')->name('register')->middleware('guest');
Route::get('/logout','mainController@logout')->middleware('auth');
Route::get('/profil','mainController@profile')->middleware('auth');

Route::get('/edit','mainController@edit')->middleware('auth');
Route::post('/edit','mainController@postEdit')->name('edit')->middleware('auth');

Route::get('/design','mainController@design')->middleware('auth');
Route::post('/pelajaran','mainController@pelajaran')->middleware('auth')->name('pelajaran');

// view daftar kelas
Route::get('/daftarkelas','mainController@daftarkelas');
Route::get('/tambahkelasdesign','mainController@tambahkelasdesign')->name('tambahkelasdesign');
Route::get('/tambahkelasvideoediting','mainController@tambahkelasvideoediting')->name('tambahkelasvideoediting');
Route::get('/tambahkelasphotograpy','mainController@tambahkelasphotograpy')->name('tambahkelasphotograpy');


// view design
route::get('/design/lesson','lessonController@designLesson');
Route::get('/design/1','lessonController@design1')->middleware('auth');
Route::get('/design/2','lessonController@design2')->middleware('auth');
Route::get('/design/3','lessonController@design3')->middleware('auth');
Route::get('/design/4','lessonController@design4')->middleware('auth');
Route::get('/design/5','lessonController@design5')->middleware('auth');
Route::get('/design/6','lessonController@design6')->middleware('auth');
Route::get('/design/7','lessonController@design7')->middleware('auth');
Route::get('/design/8','lessonController@design8')->middleware('auth');
Route::get('/design/9','lessonController@design9')->middleware('auth');
Route::get('/design/10','lessonController@design10')->middleware('auth');

// setifikat dan cetak pdf
Route::get('/sertifikat','mainController@sertifikat')->middleware('auth');
Route::get('/sertifikat/cetak_pdf','mainController@cetak_pdf')->middleware('auth');

// coba
Route::get('/test','designController@materi');
Route::get('/test/{id}','designController@materi');