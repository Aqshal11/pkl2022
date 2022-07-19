<?php

namespace App\Http\Controllers;

use App\Siswa;

class Siswacontroller extends Controller
{
    public function tampil()
    {
        //menampilkan semua data dari model siswa
        //dari tabel/migrations siswas
        //atau sama dengan query
        //select*from siswa
        $a =Siswa::all();
        return view('siswa.index',['siswa'=> $a]);
    }
}
