<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OgrenciKayitController extends Controller
{
    public function ogrenciKayit(){
        $data['title'] = "Kou-Web Öğrenci";
        return view('layouts.ogrenciKayit',$data);
    }
}
