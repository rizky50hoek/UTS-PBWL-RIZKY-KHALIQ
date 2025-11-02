<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function produk()
    {
        $produk = ['Laptop', 'Mouse', 'Keyboard', 'Monitor', 'Printer'];
        return view('produk', compact('produk'));
    }

    public function tambahProduk()
    {
        $jenis = ['Elektronik', 'Pakaian', 'Makanan', 'Minuman', 'Aksesoris'];
        return view('tambah_produk', compact('jenis'));
    }
}
