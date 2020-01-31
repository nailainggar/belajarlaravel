<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class BarangController extends Controller
{
    public function pass4()
    {
        $barang = Barang::all();
        return view('latihanbarang', compact('barang'));
    }
    public function pass5($id)
    {
        $barang = Barang::findOrFail($id);
        return view('latihanbarang1', compact('barang'));
    }
}
