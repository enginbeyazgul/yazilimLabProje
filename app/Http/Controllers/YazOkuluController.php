<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kreait\Firebase\Factory;
use PDF;


class YazOkuluController extends Controller
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

    public function yazOkulu(){
        if(Session::get('student') == "1") {
            $data['title'] = "Kou-Web | Yaz Okulu Başvuru";
            return view('ogrenci.yazOkulu', $data);
        }
        else{
            return redirect('ogrenci')->withErrors('Lütfen Giriş Yapınız.');
        }
    }

    public function yazOkuluBasvuru(Request $request){
        //firebase firestore
        $addedDocRef = app('firebase.firestore')->database()->collection('Resources')->add();
        $getDocRef = app('firebase.firestore')->database()->collection('Users')->document(Session::get('studentId'))->snapshot();
        $addedDocRef->set([
            'date' => date('d-m-Y'),
            'lessonPath' => '1',
            'state' => '0',
            'studentNumber' => $getDocRef->data()['strNumber'],
            'petitionPath' => '1',
            'subScorePath' => '1',
            'transcriptPath' => '1',
            'type' => 'Yaz Okulu',
            'userUid' => Session::get('studentId'),
        ]);
        //firebase storage transcript pdf
        $transcript = $request->file('transkript'); //image file from frontend
        $student   = app('firebase.firestore')->database()->collection('Pdf')->document(Session::get('studentId').'_transkript');
        $firebase_storage_path = 'YazOkul/pdf/Transcript/';
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
        $transcript = $request->file('derslistesi');
        $student   = app('firebase.firestore')->database()->collection('Pdf')->document(Session::get('studentId').'_derslistesi');
        $firebase_storage_path = 'YazOkul/pdf/LessonContents/';
        $name     = $student->id();
        $localfolder = public_path('firebase-temp-uploads') .'/';
        $extension = $transcript->getClientOriginalExtension();
        $file      = $name. '.' . $extension;
        if ($transcript->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder.$file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }
        //firebase storage taban liste pdf
        $transcript = $request->file('tabanliste');
        $student   = app('firebase.firestore')->database()->collection('Pdf')->document(Session::get('studentId').'_tabanliste');
        $firebase_storage_path = 'YazOkul/pdf/SubScore/';
        $name     = $student->id();
        $localfolder = public_path('firebase-temp-uploads') .'/';
        $extension = $transcript->getClientOriginalExtension();
        $file      = $name. '.' . $extension;
        if ($transcript->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder.$file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }
        //pdf veri gönderme indirme
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
            'danismanadsoyad'=>$request->danismanadsoyad,
            'universite'=>$request->universite,
            'baslangic'=>$request->baslangic,
            'bitis'=>$request->bitis,
            'fakultebolum'=>$request->fakultebolum,
            'dersadi'=>$request->dersadi,
            't'=>$request->t,
            'u'=>$request->u,
            'l'=>$request->l,
            'akts'=>$request->akts,
            'fakultebolum2'=>$request->fakultebolum2,
            'dersadi2'=>$request->dersadi2,
            't2'=>$request->t2,
            'u2'=>$request->u2,
            'l2'=>$request->l2,
            'akts2'=>$request->akts2,
            'fakultebolum3'=>$request->fakultebolum3,
            'dersadi3'=>$request->dersadi3,
            't3'=>$request->t3,
            'u3'=>$request->u3,
            'l3'=>$request->l3,
            'akts3'=>$request->akts3,
            'fakultebolum4'=>$request->fakultebolum4,
            'dersadi4'=>$request->dersadi4,
            't4'=>$request->t4,
            'u4'=>$request->u4,
            'l4'=>$request->l4,
            'akts4'=>$request->akts4,

        ];
        $pdf = PDF::setOptions(['isHtml5ParserEnabled'=>true,'isRemoteEnabled'=>true])->loadView('petitions.yazokulubasvuru',compact('data'));
        return $pdf->download(time().'.pdf');



        return redirect('ogrencimain/bekleyen')->withErrors(['msg' => 'Lütfen İmzalı Pdf Dosyasını Yükleyiniz.']);
    }
}
