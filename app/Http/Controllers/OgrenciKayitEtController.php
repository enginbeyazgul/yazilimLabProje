<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class OgrenciKayitEtController extends Controller
{
    //firebase firestore,storage,authentication
    protected $auth, $database, $storage;
    public function __construct()
    {
        $factory = (new Factory)
            ->withServiceAccount('C:\xampp\htdocs\yazilimLabProje\firebase-credentials.json')
            ->withDatabaseUri('https://yazilimlab-49317.firebaseapp.com');

        $this->auth = $factory->createAuth();
        $this->database = $factory->createDatabase();
        $this->storage = $factory->createStorage();
    }
    public function ogrenciKayitEt(Request $request){

        //firebase storage img
        $image = $request->file('resim'); //image file from frontend
        $student   = app('firebase.firestore')->database()->collection('Users')->document($request->okulno.'_'.$request->ad);
        $firebase_storage_path = 'img/';
        $name     = $student->id();
        $localfolder = public_path('firebase-temp-uploads') .'/';
        $extension = 'jpg';
        $file      = $name. '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder.$file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }



        //firebase authentication
        $email = $request->mail;
        $pass = $request->sifre;
        try {
            $newUser = $this->auth->createUserWithEmailAndPassword($email, $pass);

            //firebase firestore
            $stuRef = app('firebase.firestore')->database()->collection('Users')->Document($newUser->uid);
            $stuRef->set([
                'isStudent' => '1',
                'strAddress' => $request->adres,
                'strBirthday' => $request->dogumtarihi,
                'strDepartment' => $request->bolum,
                'strFaculty' => $request->fakulte,
                'strIdentity' => $request->tc,
                'strInfoClass' => $request->sınıf,
                'strNumber' => $request->okulno,
                'strLastName' => $request->soyad,
                'strMail' => $request->mail,
                'strPassword' => $request->sifre,
                'strPhone' => $request->telno,
                'strUniversity' => 'Kocaeli Üniversitesi'
            ]);

            //dd($newUser);
        } catch (\Throwable $e) {
            switch ($e->getMessage()) {
                case 'The email address is already in use by another account.':
                    //dd("Geçerli bir mail adresi girin");
                    return redirect()->back()->withErrors(['msg' => 'Bu Mail Adresi Kullanılmakta.']);
                    break;
                case 'A password must be a string with at least 6 characters.':
                    //dd("Şifreniz 6 karakter olmalı");
                    return redirect()->back()->withErrors(['msg' => 'Şifreniz 6 Haneli Olmalı.']);
                    break;
                default:
                    //dd($e->getMessage());
                    return redirect()->back()->withErrors(['msg' => 'Bilinmeyen Hata.']);
                    break;
            }
        }

        //$data['title'] = "Kou-Web | Öğrenci Kayıt edildi";
        return redirect('ogrenci')->withErrors(['msg' => 'Öğrenci Kayıt Edildi']);
    }
}
