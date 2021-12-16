<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kreait\Firebase\Factory;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Auth\SignInResult\SignInResult;
use Kreait\Firebase\Exception\FirebaseException;
use Kreait\Firebase\Auth;

class OgrenciMainController extends Controller
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

    public function ogrenciMain()
    {
        $data['title'] = "Kou-Web | Öğrenci Main";
        return view('layouts.ogrenciMain', $data);
    }

    public function ogrenciControl(Request $request)
    {

        $email = $request->ogrmail;
        $pass = $request->ogrsifre;
        try {
            $signInResult = $this->auth->signInWithEmailAndPassword($email, $pass);
            Session::put('studentId', $signInResult->firebaseUserId());
            Session::put('idToken', $signInResult->idToken());
            Session::save();
            $users = app('firebase.firestore')->database()->collection('Users')->documents();
            foreach ($users as $user){
                if (Session::get('studentId') == $user->id()){
                    Session::put('mail',$user->data()["strMail"]);
                    Session::put('branch',$user->data()["strDepartment"]);
                    Session::put('faculty',$user->data()["strFaculty"]);
                    Session::put('class',$user->data()["strInfoClass"]);
                    Session::put('name',$user->data()["strName"]);
                    Session::put('lastname',$user->data()["strLastName"]);
                    Session::put('address',$user->data()["strAddress"]);
                    Session::put('tc',$user->data()["strIdentity"]);
                    Session::put('phone',$user->data()["strPhone"]);
                    Session::put('birthday',$user->data()["strBirthday"]);
                    Session::put('number',$user->data()["strNumber"]);
                    Session::save();
                }
            }
            if (Session::get('studentId')) {
                return redirect('ogrencimain/yazokulu');
            }
            //dd($signInResult); öğrenci bilgileri görüntüle
        } catch (\Throwable $e) {
            switch ($e->getMessage()) {
                case 'INVALID_PASSWORD':
                    return redirect()->back()->withErrors(['msg' => 'Hatalı Şifre.']);
                    break;
                case 'EMAIL_NOT_FOUND':
                    return redirect()->back()->withErrors(['msg' => 'Hatalı Mail Adresi.']);
                    break;
                default:
                    return redirect()->back()->withErrors(['msg' => 'Bilinmeyen Hata.']);
                    break;
            }
        }
    }
}
