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

Route::get('name/{param?}',function($a="naila"){
    return 'your name is '.$a;
});


Route::get('pesan/{makan?}/{minum?}/{harga?}',function($a=null, $b=null, $c){
    if (isset($a)) {
        echo "anda memesan ".$a;
    }if (isset($b)) {
        echo "& $b";
    }if (isset($c)) {
        if ($c >= 35000) {
            $e = "size large";
        }elseif ($c >= 25000) {
            $e = "size medium";
        }elseif ($c < 0) {
            $e = "small";
        }else {
            return ' harga tidak valid';
        }
        echo "<br> $e dengan harga $c";

    }
    if (!$a && !$b) {
        return 'silahkan memesan terlebih dahulu';
    }
});

Route::get('tes-tni/{nama?}/{bb?}/{umur?}',function($a = null, $b = null, $c = null){
    if (isset($a)) {
        echo "nama anda $a";
    }
    if (isset($b)) {
        if ($b >=76 && $b <= 100) {
            $d= "anda harus turun berat badan";
        }elseif ($b >=65 && $b <= 75) {
            $d = "berat badan anda ideal";
        }elseif ($b >=50 && $b <= 64) {
            $d = "naikkan berat badan anda";
        }elseif ($b >= 1 && $b <= 50) {
            $d = " anda kurang nutrisi";
        }else {
            return "berat badan valid";
        }
        echo " berat badan anda $b : $d";
    }
    if (isset($c)) {
        if ($c >= 50 && $c <= 60) {
            $f = "perwira";
        }elseif ($c <= 40) {
            $f= "laksamana";
        }elseif ($c <= 30) {
            $f="jendral";
        }else {
            return "umur badan valid";
        }
        echo "<br>peringkat anda $f";
    }
    if (!$a && !$b) {
        return 'silahkan isi terlebih dahulu';
    }
}
);
