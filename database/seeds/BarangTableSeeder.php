<?php

use Illuminate\Database\Seeder;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['code_barang' => '1', 'nama_barang' => 'kerudung pashmina', 'tipe_barang' => 'made indonesia', 'harga_barang' => 25000, 'qty' => 12, 'warna' => 'merah', 'deskripsi' => 'barang terjamin aman'],
            ['code_barang' => '1', 'nama_barang' => 'kerudung pashmina', 'tipe_barang' => 'made indonesia', 'harga_barang' => 25000, 'qty' => 12, 'warna' => 'merah', 'deskripsi' => 'barang terjamin aman'],
            ['code_barang' => '1', 'nama_barang' => 'kerudung pashmina', 'tipe_barang' => 'made indonesia', 'harga_barang' => 25000, 'qty' => 12, 'warna' => 'merah', 'deskripsi' => 'barang terjamin aman'],
            ['code_barang' => '1', 'nama_barang' => 'kerudung pashmina', 'tipe_barang' => 'made indonesia', 'harga_barang' => 25000, 'qty' => 12, 'warna' => 'merah', 'deskripsi' => 'barang terjamin aman'],
            ['code_barang' => '1', 'nama_barang' => 'kerudung pashmina', 'tipe_barang' => 'made indonesia', 'harga_barang' => 25000, 'qty' => 12, 'warna' => 'merah', 'deskripsi' => 'barang terjamin aman'],
            ['code_barang' => '1', 'nama_barang' => 'kerudung pashmina', 'tipe_barang' => 'made indonesia', 'harga_barang' => 25000, 'qty' => 12, 'warna' => 'merah', 'deskripsi' => 'barang terjamin aman'],
            ['code_barang' => '1', 'nama_barang' => 'kerudung pashmina', 'tipe_barang' => 'made indonesia', 'harga_barang' => 25000, 'qty' => 12, 'warna' => 'merah', 'deskripsi' => 'barang terjamin aman'],
            ['code_barang' => '1', 'nama_barang' => 'kerudung pashmina', 'tipe_barang' => 'made indonesia', 'harga_barang' => 25000, 'qty' => 12, 'warna' => 'merah', 'deskripsi' => 'barang terjamin aman'],
            ['code_barang' => '1', 'nama_barang' => 'kerudung pashmina', 'tipe_barang' => 'made indonesia', 'harga_barang' => 25000, 'qty' => 12, 'warna' => 'merah', 'deskripsi' => 'barang terjamin aman'],
            ['code_barang' => '1', 'nama_barang' => 'kerudung pashmina', 'tipe_barang' => 'made indonesia', 'harga_barang' => 25000, 'qty' => 12, 'warna' => 'merah', 'deskripsi' => 'barang terjamin aman']

        ];

        DB::table('barangs')->insert($posts);
    }
}
