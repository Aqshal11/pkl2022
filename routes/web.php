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

// Route::get('halaman-2', function () {
//     return 'halaman-2';
// });

// Route::get('halaman-2', function () {
//     return 'halaman-2';
// });

// Route::get('halaman-3/{nama}/{jk}', function ($nama, $jk) {
//     return 'halaman profile ' . $nama . ' dengan jenis kelamin :' . $jk;
// });

// Route::get('halaman-profile/{nama?}', function ($nama = 'Belum ada nama') {
//     return ' profile ' . $nama;
// });

// Route::get('profile', function () {
//     return view('profile');
// });

Route::get('about/{nama}', function ($nama) {
    $umur = 1 + 5;
    return view('about', compact('nama', 'umur'));
});

Route::get('pesan/{menu}', function ($a = "silahkan masukan pesanan") {
    return view('pages.pesan', compact('a'));
});

Route::get('menu/{a?}/{b?}/{c?}', function ($a = "Silahkan Pesan Terlebih Dahulu", $b = null, $c = null) {
    return view('pages.menu', compact('a', 'b', 'c'));

});

Route::get('makanan/{makanan}/{minuman}/{harga}', function ($makanan, $minuman, $harga) {
    return view('pages/makanan', compact('makanan', 'minuman', 'harga'));
});

Route::get('hola', 'ContohController@hola');
Route::get('profile', 'ContohController@profile');
Route::get('facebook/{perkalian}-{nama}', 'ContohController@facebook');
Route::get('siswa', 'ContohController@siswa');
Route::get('berat/{berat}/{tinggi}', 'ContohController@berat');
Route::get('dosen', 'ContohController@dosen');
Route::get('mahasiswa', 'ContohController@mahasiswa');
Route::get('kelas', 'ContohController@kelas');
Route::get('shop', 'ContohController@shop');
Route::get('siswa', 'SiswaController@tampil');


