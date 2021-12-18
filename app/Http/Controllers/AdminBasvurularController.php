<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminBasvurularController extends Controller
{
    public function yazOkulu(){
        if(Session::get('admin') == "1"){
            $data['title'] = "Kou-Web | Yaz Okulu Başvuruları";
            $resources = app('firebase.firestore')->database()->collection('Resources');
            $query = $resources->where('state', '=', '1')->where('type', '=', 'Yaz Okulu');
            $documents = $query->documents();
            $query2 = $resources->where('state', '=', '2')->where('type', '=', 'Yaz Okulu');
            $documents2 = $query2->documents();
            $query3 = $resources->where('state', '=', '3')->where('type', '=', 'Yaz Okulu');
            $documents3 = $query3->documents();
            $data['durum'] = $documents;
            $data['durum2'] = $documents2;
            $data['durum3'] = $documents3;
            return view('admin.yazOkulu',$data);
        }
        else{
            return redirect('admin')->withErrors('Lütfen Giriş Yapınız.');
        }
    }
    public function yatayGecis(){
        if(Session::get('admin') == "1") {
            $data['title'] = "Kou-Web | Yatay Geçiş Başvuruları";
            $resources = app('firebase.firestore')->database()->collection('Resources');
            $query = $resources->where('state', '=', '1')->where('type', '=', 'Yatay Geçiş');
            $documents = $query->documents();
            $query2 = $resources->where('state', '=', '2')->where('type', '=', 'Yatay Geçiş');
            $documents2 = $query2->documents();
            $query3 = $resources->where('state', '=', '3')->where('type', '=', 'Yatay Geçiş');
            $documents3 = $query3->documents();
            $data['durum'] = $documents;
            $data['durum2'] = $documents2;
            $data['durum3'] = $documents3;
            return view('admin.yatayGecis', $data);
        }
        else{
            return redirect('admin')->withErrors('Lütfen Giriş Yapınız.');
        }
    }
    public function dgs(){
        if(Session::get('admin') == "1") {
            $data['title'] = "Kou-Web | Dgs Başvuruları";
            $resources = app('firebase.firestore')->database()->collection('Resources');
            $query = $resources->where('state', '=', '1')->where('type', '=', 'Dgs');
            $documents = $query->documents();
            $query2 = $resources->where('state', '=', '2')->where('type', '=', 'Dgs');
            $documents2 = $query2->documents();
            $query3 = $resources->where('state', '=', '3')->where('type', '=', 'Dgs');
            $documents3 = $query3->documents();
            $data['durum'] = $documents;
            $data['durum2'] = $documents2;
            $data['durum3'] = $documents3;
            return view('admin.dgs', $data);
        }
        else{
            return redirect('admin')->withErrors('Lütfen Giriş Yapınız.');
        }
    }
    public function cap(){
        if(Session::get('admin') == "1") {
            $data['title'] = "Kou-Web | Çap Başvuruları";
            $resources = app('firebase.firestore')->database()->collection('Resources');
            $query = $resources->where('state', '=', '1')->where('type', '=', 'Çap');
            $documents = $query->documents();
            $query2 = $resources->where('state', '=', '2')->where('type', '=', 'Çap');
            $documents2 = $query2->documents();
            $query3 = $resources->where('state', '=', '3')->where('type', '=', 'Çap');
            $documents3 = $query3->documents();
            $data['durum'] = $documents;
            $data['durum2'] = $documents2;
            $data['durum3'] = $documents3;
            return view('admin.cap', $data);
        }
        else{
            return redirect('admin')->withErrors('Lütfen Giriş Yapınız.');
        }
    }
    public function intibak(){
        if(Session::get('admin') == "1") {
            $data['title'] = "Kou-Web | Ders İntibakı Başvuruları";
            $resources = app('firebase.firestore')->database()->collection('Resources');
            $query = $resources->where('state', '=', '1')->where('type', '=', 'İntibak');
            $documents = $query->documents();
            $query2 = $resources->where('state', '=', '2')->where('type', '=', 'İntibak');
            $documents2= $query2->documents();
            $query3 = $resources->where('state', '=', '3')->where('type', '=', 'İntibak');
            $documents3 = $query3->documents();
            $data['durum'] = $documents;
            $data['durum2'] = $documents2;
            $data['durum3'] = $documents3;
            return view('admin.intibak', $data);
        }
        else{
            return redirect('admin')->withErrors('Lütfen Giriş Yapınız.');
        }
    }
}
