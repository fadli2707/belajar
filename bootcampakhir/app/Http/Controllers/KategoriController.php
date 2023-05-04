<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KategoriController extends Controller
{
    public function index(){
    
            //mengambil data darri database menggunakan db::table() dan disimpan ke dalam $data
            //menggunakan ->join() untuk menggabungkan tabel lainnya
            //diakhir get() untuk mengambil data array
    
            //diakhir first() jika hanya satu data yang diambil
    
            $data = DB::table('kategori')->get();
    
            //tampilkan view barang dan kirim datanya ke view tersebut
            return view('kategori')->with('data', $data);
        }
}
