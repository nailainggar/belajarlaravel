<?php

use Illuminate\Database\Seeder;

class PostsTablebio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio = [
            ['nama'=>'naila', 'jk'=>'perempuan', 'tgl_lahir'=>'2003-01-29', 'umur'=>'16','alamat'=>'bandung', 'hoby'=>'makan', 'warna_fav'=>'biru'],
            ['nama'=>'sisil', 'jk'=>'perempuan', 'tgl_lahir'=>'2003-05-12', 'umur'=>'16','alamat'=>'bandung', 'hoby'=>'renang', 'warna_fav'=>'merah'],
            ['nama'=>'siska', 'jk'=>'perempuan', 'tgl_lahir'=>'2003-09-23', 'umur'=>'16','alamat'=>'bandung', 'hoby'=>'nyanyi', 'warna_fav'=>'kuning'],
            ['nama'=>'suci', 'jk'=>'perempuan', 'tgl_lahir'=>'2003-07-13', 'umur'=>'16','alamat'=>'bandung', 'hoby'=>'membaca', 'warna_fav'=>'hijau'],
            ['nama'=>'nanda', 'jk'=>'perempuan', 'tgl_lahir'=>'2003-04-24', 'umur'=>'16','alamat'=>'bandung', 'hoby'=>'menulis', 'warna_fav'=>'putih'],
            ['nama'=>'santia', 'jk'=>'perempuan', 'tgl_lahir'=>'2003-03-25', 'umur'=>'16','alamat'=>'bandung', 'hoby'=>'mendaki', 'warna_fav'=>'hitam'],
            ['nama'=>'seli', 'jk'=>'perempuan', 'tgl_lahir'=>'2003-02-26', 'umur'=>'16','alamat'=>'bandung', 'hoby'=>'main sepeda', 'warna_fav'=>'ungu'],
            ['nama'=>'raiza', 'jk'=>'perempuan', 'tgl_lahir'=>'2003-09-28', 'umur'=>'16','alamat'=>'bandung', 'hoby'=>'main biola', 'warna_fav'=>'hitam'],
            ['nama'=>'bilgis', 'jk'=>'perempuan', 'tgl_lahir'=>'2003-12-17', 'umur'=>'16','alamat'=>'bandung', 'hoby'=>'main piano', 'warna_fav'=>'orange'],
            ['nama'=>'ririn', 'jk'=>'perempuan', 'tgl_lahir'=>'2003-04-18', 'umur'=>'16','alamat'=>'bandung', 'hoby'=>'main skate', 'warna_fav'=>'abu'],

        ];


// masukkan data ke database
DB::table('bio')->insert($bio);
    }
}
