<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function __construct(){

    }
    public function index(){
        $data['title'] = "Kou-Web | Öğrenci";
        return view('layouts.ogrenciGiris',$data);
    }

}
