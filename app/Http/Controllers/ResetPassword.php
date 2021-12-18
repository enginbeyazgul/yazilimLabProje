<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Kreait\Firebase\Factory;

class ResetPassword extends Controller
{
    protected $auth, $database;
    public function __construct()
    {
        $factory = (new Factory)
            ->withServiceAccount('C:\xampp\htdocs\yazilimLabProje\firebase-credentials.json')
            ->withDatabaseUri('https://yazilimlab-49317.firebaseapp.com');

        $this->auth = $factory->createAuth();
        $this->database = $factory->createDatabase();
        $this->storage = $factory->createStorage();
    }

    public function reset(){
        return view('layouts.resetpassword');
    }
    public function resetp(Request $request){
        if($request->mail){
            $this->auth->sendPasswordResetLink($request->mail);
            return redirect('ogrenci')->withErrors(['msg' => 'Şifre sıfırlama maili yollandı.']);
        }
        else{
            return redirect()->back();
        }
    }
}
