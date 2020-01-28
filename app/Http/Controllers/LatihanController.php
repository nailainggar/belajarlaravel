<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function halo()
    {
        return 'Halo Nama Saya Naila';
    }

    public function pertambahan($a=null, $b=null)
    {
        if (!$a) {
            echo 'masukkan angka pertama';
        }elseif (!$B) {
            echo 'masukkan angka kedua';
        }elseif (isset($a) && isset($b)) {
            $jml = $a + $b;
            return 'Hasil : $a + $b= $jml';
        }

    }

    public function pengurangan($a=null, $b=null)
    {
        if (!$a) {
            echo 'masukkan angka pertama';
        }elseif (!$B) {
            echo 'masukkan angka kedua';
        }elseif (isset($a) && isset($b)) {
            $jml = $a - $b;
            return 'Hasil : $a - $b= $jml';
        }


    }


    public function pembagian($a=null, $b=null)
    {
        if (!$a) {
            echo 'masukkan angka pertama';
        }elseif (!$B) {
            echo 'masukkan angka kedua';
        }elseif (isset($a) && isset($b)) {
            $jml = $a / $b;
            return 'Hasil : $a / $b= $jml';
        }

    }

    public function perkalian($a=null, $b=null)
    {
        if (!$a) {
            echo 'masukkan angka pertama';
        }elseif (!$B) {
            echo 'masukkan angka kedua';
        }elseif (isset($a) && isset($b)) {
            $jml = $a * $b;
            return 'Hasil : $a * $b= $jml';
        }

    }

    public function loop()
    {
        $data = [
            ['Nama'=>'Hari','Kelas'=>'RPL 1','uang_jajan'=>10000],

        ];
        // dd($data);
            foreach ($data as $val => $key )
            {
                echo "$Nama         : ". $key['Nama'].
                     "- Kelas       : ". $key['Kelas'].
                     "- uang_jajan  : ". $key['uang_jajan'].
                     "<hr>";

            }
    }
    public function latihan()
    {
        $data = [
            ['Nama'=>'Naila','Kelas'=>'RPL 1','uang_jajan'=>60000],
            ['Nama'=>'silvana','Kelas'=>'RPL 1','uang_jajan'=>15000],
            ['Nama'=>'suci','Kelas'=>'RPL 1','uang_jajan'=>25000],
            ['Nama'=>'bilgi','Kelas'=>'RPL 1','uang_jajan'=>10000],
            ['Nama'=>'siska','Kelas'=>'RPL 1','uang_jajan'=>30000],

        ];

        foreach ($data as $val => $key) {
            if ($key['uang_jajan']>=50000) {
                $na= $key['uang_jajan']*25/100;
                $total= $key['uang_jajan']-$na;
            }
            elseif ($key['uang_jajan']>=25000) {
                $na= $key['uang_jajan']*15/100;
                $total= $key['uang_jajan']-$na;
            }
            elseif ($key['uang_jajan']>=10000) {
                $na= $key['uang_jajan']*10/100;
                $total= $key['uang_jajan']-$na;
            }
            else {
                $na=0;
                $total=['uang_jajan'];
            }
            echo "Nama : ".$key['Nama'].
                 "- Kelas : ".$key['Kelas'].
                 "- uang_jajan : ".$total.
                 "- uang tabungan : ".$na.
                 "<hr>";
        }
    }

    public function latihan1()
    {
        $data = [
            ['Nama'=>'Naila','agama'=>'islam','alamat'=>'bandung','jk'=>'perempuan','jabatan'=>'sekretaris','jamkerja'=>'250'],
            ['Nama'=>'Sisil','agama'=>'islam','alamat'=>'bandung','jk'=>'perempuan','jabatan'=>'manager','jamkerja'=>'200'],
            ['Nama'=>'Santia','agama'=>'islam','alamat'=>'bandung','jk'=>'perempuan','jabatan'=>'staff','jamkerja'=>'250'],

        ];
        foreach ($data as $var => $key) {
            if ($var['jabatan' == manager]) {
                $gaji = 5000000;
                if ($var['jamkerja'] >= 250) {
                    $bonus = $gaji/10;
                }
                elseif ($var['jamkerja'] >= 200) {
                    $bonus = $gaji*5/100;
                }
                else {
                    $bonus=0;
                }
                $gaji_bersih = $gaji+$bonus;
                $potong = $gaji_bersih*2.5/100;
            }
        }
    }
}
