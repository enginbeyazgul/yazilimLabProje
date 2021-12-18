<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kreait\Firebase\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Kreait\Firebase\Auth\SignInResult\SignInResult;

class AdminMainController extends Controller
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

    public function adminMain()
    {
        $data['title'] = "Kou-Web | Admin Main";
        return view('layouts.adminMain', $data);
    }

    public function adminControl(Request $request){
        $email = $request->adminmail;
        $pass = $request->adminsifre;
        try {
            $signInResult = $this->auth->signInWithEmailAndPassword($email, $pass);
            Session::put('adminId', $signInResult->firebaseUserId());
            Session::put('idToken', $signInResult->idToken());
            Session::save();
            $users = app('firebase.firestore')->database()->collection('Users')->documents();
            foreach ($users as $user){
                if (Session::get('adminId') == $user->id() && $user->data()['isAdmin'] == "1"){
                    Session::put('mail',$user->data()["strMail"]);
                    Session::put('name',$user->data()["strName"]);
                    Session::put('admin',$user->data()['isAdmin']);
                    Session::put('lastname',$user->data()["strLastName"]);
                    Session::put('address',$user->data()["strAddress"]);
                    Session::put('tc',$user->data()["strIdentity"]);
                    Session::put('phone',$user->data()["strPhone"]);
                    Session::save();
                }
            }
            if (Session::get('admin')) {
                return redirect('adminmain/yazokulu');
            }
            //dd($signInResult); admin bilgileri görüntüle
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
