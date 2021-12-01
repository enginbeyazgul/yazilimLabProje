<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGirisController extends Controller
{
    public function adminGiris(){
        $data['title'] = "Kou-Web Admin Giriş";
        return view('layouts.adminGiris',$data);
    }
}
