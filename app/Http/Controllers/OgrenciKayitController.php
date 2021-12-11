<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OgrenciKayitController extends Controller
{
    public function ogrenciKayit(){
        $data['title'] = "Kou-Web | Kayıt Ol";
        $data['faculties'] = app('firebase.firestore')->database()->collection('Faculties')->documents();
        return view('layouts.ogrenciKayit',$data);
    }
}
