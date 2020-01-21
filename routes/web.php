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

// Route Basic
Route::get('halo',function()
{
    return 'Halo Ini Aplikasi Laravel Pertama Saya'.
           '<br>Laravel is Magical Framework';
});

Route::get('about',function()
{
    return '<h1>Halo</h1>'
          .'Selamat datang di webapp saya<br>'
          .'Laravel, emang keren.';
});

Route::get('profil/Naila',function()
{
    return 'Halo nama saya Naila';
});

Route::get('kelas/XI RPL 1',function()
{
    return 'Kelas XI RPL 1';
});

Route::get('umur/16',function()
{
    return 'Saya ber umur 16 tahun';
});

Route::get('alamat/bandung',function()
{
    return 'alamat di bandung';
});

Route::get('warna/biru',function()
{
    return 'warna fav: biru';
});

Route::get('biodata/{nama}',function($a)
{
    return 'Halo ini Biodata '.$a;
});

Route::get('bio/{nama}/{alamat}/{umur}',function($a,$b,$c)
{
    return 'Nama saya '.$a.
           '<br>alamat saya di '.$b.
           '<br>umur saya '.$c;
});
