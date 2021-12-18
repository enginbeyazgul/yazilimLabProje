<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kreait\Firebase\Factory;
use PDF;

class CapController extends Controller
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

    public function cap(){
        if(Session::get('student') == "1") {
            $data['title'] = "Kou-Web | ÇAP Başvuru";
            $data['faculties'] = app('firebase.firestore')->database()->collection('Faculties')->documents();
            return view('ogrenci.cap', $data);
        }
        else{
            return redirect('ogrenci')->withErrors('Lütfen Giriş Yapınız.');
        }
    }

    public function capBasvuru(Request $request){
        //firebase firestore
        $addedDocRef = app('firebase.firestore')->database()->collection('Resources')->add();
        $getDocRef = app('firebase.firestore')->database()->collection('Users')->document(Session::get('studentId'))->snapshot();
        $addedDocRef->set([
            'date' => date('d-m-Y'),
            'state' => '0',
            'studentNumber' => $getDocRef->data()['strNumber'],
            'petitionPath' => '1',
            'transcriptPath' => '1',
            'type' => 'Çap',
            'userUid' => Session::get('studentId'),
        ]);

        //firebase storage transcript pdf
        $transcript = $request->file('transkript'); //image file from frontend
        $student   = app('firebase.firestore')->database()->collection('Pdf')->document(Session::get('studentId').'_transkript');
        $firebase_storage_path = 'CAP/pdf/Transcript/';
        $name     = $student->id();
        $localfolder = public_path('firebase-temp-uploads') .'/';
        $extension = $transcript->getClientOriginalExtension();
        $file      = $name. '.' . $extension;
        if ($transcript->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder.$file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }

        $data = [
            'baslik'=>'Dikey Geçiş Başvurusu',
            'name'=>Session::get('name'),
            'lastname'=>Session::get('lastname'),
            'mail'=>Session::get('mail'),
            'branch'=>Session::get('branch'),
            'faculty'=>Session::get('faculty'),
            'class'=>Session::get('class'),
            'address'=>Session::get('address'),
            'tc'=>Session::get('tc'),
            'phone'=>Session::get('phone'),
            'birthday'=>Session::get('birthday'),
            'number'=>Session::get('strNumber'),
            'fakulte'=>$request->fakulte,
            'bolum'=>$request->bolum,
            'ogretimturu'=>$request->ogretimturu,
            'ogretimturu2'=>$request->ogretimturu2,
        ];
        $pdf = PDF::setOptions(['isHtml5ParserEnabled'=>true,'isRemoteEnabled'=>true])->loadView('petitions.capbasvuru',compact('data'));
        return $pdf->download(time().'.pdf');


        return redirect('ogrencimain/bekleyen')->withErrors(['msg' => 'Lütfen İmzalı Pdf Dosyasını Yükleyiniz.']);
    }
}
