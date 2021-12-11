<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OgrenciGirisController extends Controller
{
    public function ogreciGiris(){
        $data['title'] = "Kou-Web | Öğrenci Giriş";
        return view('layouts.ogrenciGiris',$data);
    }

}
