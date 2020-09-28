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
    return view('welcome');
});

Route::get('halo', function() {
    return "Hallo, Selamat Ngoding Ganteng!.";
});

Route::get('blog', function() {
    return view('blog');
});

Route::get('dosen', 'DosenController@index');

// Route::get('/pegawai/{nama}','PegawaiController@index');

Route::get('/formulir','PegawaiController@formulir');
Route::post('/formulir/proses','PegawaiController@proses');

// route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');


Route::get('/pegawai/cari', 'PegawaiController@cari');

//Form validasi
Route::get('/input', 'GantengController@input');
Route::post('/proses', 'GantengController@proses');

//Eloquent
Route::get('/siswa', 'PegawaiController@siswa');

//Eloquent Employee
Route::get('/employee', 'employeeController@index');
Route::get('/employee/create', 'employeeController@create');
Route::post('/employee/store', 'employeeController@store');
Route::get('/employee/edit/{id}', 'employeeController@edit');
Route::put('/employee/update/{id}', 'employeeController@update');
Route::get('/employee/delete/{id}', 'employeeController@destroy');

//soft Delete
Route::get('/guru', 'GuruController@index');
Route::get('/guru/hapus/{id}', 'GuruController@hapus');
Route::get('/guru/trash', 'GuruController@trash');
Route::get('/guru/kembalikan/{id}', 'GuruController@kembalikan');
Route::get('/guru/kembalikan_semua', 'GuruController@kembalikan_semua');
Route::get('/guru/hapus_permanen/{id}', 'GuruController@hapus_permanen');
Route::get('/guru/hapus_permanen_semua', 'GuruController@hapus_permanen_semua');
