<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OgrenciKayitEtController extends Controller
{
    public function ogrenciKayitEt(){
        $stuRef = app('firebase.firestore')->database()->collection('User')->newDocument();
        $stuRef->set([
            'firstname' => 'ibrahim',
            'lastname' => 'a',
            'age'    => 19
        ]);
        $data['title'] = "Kou-Web Öğrenci Kayıt edildi";
        return view('layouts.ogrenciGiris',$data);

    }
}
