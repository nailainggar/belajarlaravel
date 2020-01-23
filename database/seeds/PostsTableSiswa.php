<?php

use Illuminate\Database\Seeder;

class PostsTableSiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Siswa = [
            ['nama'=>'naila', 'nis'=>'123', 'jenis_kelamin'=>'perempuan', 'alamat'=>'bandung', 'tgl_lahir'=>'2003-01-29', 'umur'=>'16'],
            ['nama'=>'sisil', 'nis'=>'1234', 'jenis_kelamin'=>'perempuan', 'alamat'=>'bandung', 'tgl_lahir'=>'2003-02-19', 'umur'=>'16'],
            ['nama'=>'suci', 'nis'=>'12345', 'jenis_kelamin'=>'perempuan', 'alamat'=>'bandung', 'tgl_lahir'=>'2003-06-29', 'umur'=>'16'],
            ['nama'=>'siska', 'nis'=>'123456', 'jenis_kelamin'=>'perempuan', 'alamat'=>'bandung', 'tgl_lahir'=>'2003-04-05', 'umur'=>'16'],
            ['nama'=>'santia', 'nis'=>'1234567', 'jenis_kelamin'=>'perempuan', 'alamat'=>'bandung', 'tgl_lahir'=>'2003-03-24', 'umur'=>'16'],
    ];
// masukkan data ke database
DB::table('siswa')->insert($Siswa);
    }
}
