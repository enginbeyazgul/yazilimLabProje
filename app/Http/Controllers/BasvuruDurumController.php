<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BasvuruDurumController extends Controller
{

    public function bekleyen(){
        $data['title'] = "Kou-Web | Bekleyen Başvurularım";
        $resources = app('firebase.firestore')->database()->collection('Resources');
        $query = $resources->where('userUid', '=', Session::get('studentId'))->where('state', '=', '0');
        $documents = $query->documents();
        $data['durum'] = $documents;
        return view('ogrenci.bekleyen',$data);
    }
    public function onaylanan(){
        $data['title'] = "Kou-Web | Onaylanan Başvurularım";
        $resources = app('firebase.firestore')->database()->collection('Resources');
        $query = $resources->where('userUid', '=', Session::get('studentId'))->where('state', '=', '2');
        $documents = $query->documents();
        $data['durum'] = $documents;
        return view('ogrenci.onaylanan',$data);
    }
    public function reddedilen(){
        $data['title'] = "Kou-Web | DGS Başvurusu";
        $resources = app('firebase.firestore')->database()->collection('Resources');
        $query = $resources->where('userUid', '=', Session::get('studentId'))->where('state', '=', '3');
        $documents = $query->documents();
        $data['durum'] = $documents;
        return view('ogrenci.reddedilen',$data);
    }
}
