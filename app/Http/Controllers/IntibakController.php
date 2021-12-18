<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kreait\Firebase\Factory;

class IntibakController extends Controller
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

    public function intibak(){
        if(Session::get('student') == "1") {
            $data['title'] = "Kou-Web | İntibak Başvurusu";
            return view('ogrenci.intibak', $data);
        }
        else{
            return redirect('ogrenci')->withErrors('Lütfen Giriş Yapınız.');
        }
    }

    public function intibakBasvuru(Request $request){
        //firebase firestore
        $addedDocRef = app('firebase.firestore')->database()->collection('Resources')->add();
        $getDocRef = app('firebase.firestore')->database()->collection('Users')->document(Session::get('studentId'))->snapshot();
        $addedDocRef->set([
            'date' => date('d-m-Y'),
            'state' => '0',
            'studentNumber' => $getDocRef->data()['strNumber'],
            'petitionPath' => '1',
            'transcriptPath' => '1',
            'type' => 'İntibak',
            'userUid' => Session::get('studentId'),
        ]);

        //firebase storage transcript pdf
        $transcript = $request->file('transkript'); //image file from frontend
        $student   = app('firebase.firestore')->database()->collection('Pdf')->document(Session::get('studentId').'_transkript');
        $firebase_storage_path = 'Intibak/pdf/Transcript/';
        $name     = $student->id();
        $localfolder = public_path('firebase-temp-uploads') .'/';
        $extension = $transcript->getClientOriginalExtension();
        $file      = $name. '.' . $extension;
        if ($transcript->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder.$file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }

        //firebase storage ders listesi pdf
        $transcript = $request->file('derslistesi'); //image file from frontend
        $student   = app('firebase.firestore')->database()->collection('Pdf')->document(Session::get('studentId').'_derslistesi');
        $firebase_storage_path = 'Intibak/pdf/LessonContent/';
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
            'universite'=>$request->universite,
            'fakulte'=>$request->fakulte,
            'bolum'=>$request->bolum,
            'dersadi'=>$request->dersadi,
            't'=>$request->t,
            'u'=>$request->u,
            'l'=>$request->l,
            'akts'=>$request->akts,
            'dersadi2'=>$request->dersadi2,
            't2'=>$request->t2,
            'u2'=>$request->u2,
            'l2'=>$request->l2,
            'akts2'=>$request->akts2,
            'dersadi3'=>$request->dersadi3,
            't3'=>$request->t3,
            'u3'=>$request->u3,
            'l3'=>$request->l3,
            'akts3'=>$request->akts3,
            'dersadi4'=>$request->dersadi4,
            't4'=>$request->t4,
            'u4'=>$request->u4,
            'l4'=>$request->l4,
            'akts4'=>$request->akts4,
            'dersadi5'=>$request->dersadi5,
            't5'=>$request->t5,
            'u5'=>$request->u5,
            'l5'=>$request->l5,
            'akts5'=>$request->akts5,
            'dersadi6'=>$request->dersadi6,
            't6'=>$request->t6,
            'u6'=>$request->u6,
            'l6'=>$request->l6,
            'akts6'=>$request->akts6,
            'dersadi7'=>$request->dersadi7,
            't7'=>$request->t7,
            'u7'=>$request->u7,
            'l7'=>$request->l7,
            'akts7'=>$request->akts7,
            'dersadim'=>$request->dersadim,
            'tm'=>$request->tm,
            'um'=>$request->um,
            'lm'=>$request->lm,
            'aktsm'=>$request->aktsm,
            'dersadi2m'=>$request->dersadi2m,
            't2m'=>$request->t2m,
            'u2m'=>$request->u2m,
            'l2m'=>$request->l2m,
            'akts2m'=>$request->akts2m,
            'dersadi3m'=>$request->dersadi3m,
            't3m'=>$request->t3m,
            'u3m'=>$request->u3m,
            'l3m'=>$request->l3m,
            'akts3m'=>$request->akts3m,
            'dersadi4m'=>$request->dersadi4m,
            't4m'=>$request->t4m,
            'u4m'=>$request->u4m,
            'l4m'=>$request->l4m,
            'akts4m'=>$request->akts4m,
            'dersadi5m'=>$request->dersadi5m,
            't5m'=>$request->t5m,
            'u5m'=>$request->u5m,
            'l5m'=>$request->l5m,
            'akts5m'=>$request->akts5m,
            'dersadi6m'=>$request->dersadi6m,
            't6m'=>$request->t6m,
            'u6m'=>$request->u6m,
            'l6m'=>$request->l6m,
            'akts6m'=>$request->akts6m,
            'dersadi7m'=>$request->dersadi7m,
            't7m'=>$request->t7m,
            'u7m'=>$request->u7m,
            'l7m'=>$request->l7m,
            'akts7m'=>$request->akts7m,
        ];
        $pdf = PDF::setOptions(['isHtml5ParserEnabled'=>true,'isRemoteEnabled'=>true])->loadView('petitions.capbasvuru',compact('data'));
        return $pdf->download(time().'.pdf');




        return redirect('ogrencimain/bekleyen')->withErrors(['msg' => 'Lütfen İmzalı Pdf Dosyasını Yükleyiniz.']);
    }
}
