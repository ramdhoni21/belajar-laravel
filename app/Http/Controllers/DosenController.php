<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Ngatik Ramdhoni";

        $pelajaran = ["Basis Data","Pemrograman","Framework"];

        return view('biodata',['nama' => $nama, 'makul' => $pelajaran]);
    }
}
