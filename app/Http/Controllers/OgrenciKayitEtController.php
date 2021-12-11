<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OgrenciKayitEtController extends Controller
{
    public function ogrenciKayitEt(Request $request){
        $stuRef = app('firebase.firestore')->database()->collection('Users')->newDocument();
        $stuRef->set([
            'isStudent' => '1',
            'strAddress' => $request->adres,
            'strBirthday' => $request->dogumtarihi,
            'strDepartment' => $request->bolum,
            'strFaculty' => $request->fakulte,
            'strIdentity' => $request->tc,
            'strInfoClass' => $request->sınıf,
            'strLastName' => $request->soyad,
            'strMail' => $request->mail,
            'strPassword' => $request->sifre,
            'strPhone' => $request->telno,
            'strUniversity' => 'Kocaeli Üniversitesi'
        ]);
        $data['title'] = "Kou-Web | Öğrenci Kayıt edildi";
        return view('layouts.ogrenciGiris',$data)->withErrors(['msg' => 'Kayıt İşlemi Tamamlandı.']);

    }
}
