@extends('layouts.ogrenciMain')
@section('container')

    <div class="containerr">
        <div class="columnn">
            <div class="row"><h2>Çift Anadal Başvuru</h2></div>
            @if($errors->any())
                <div class="error-info"><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;{{$errors->first()}}</div>
            @endif
            <form action="{{route('ogrencimain/cap')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <select name="ogretimturu" id="">
                        <option value="" selected disabled hidden>Aktif Öğretim Türü</option>
                        <option value="1. Öğretim">1. Öğretim</option>
                        <option value="2. Öğretim">2. Öğretim</option>
                    </select>
                </div>
                <div class="row">
                    <select name="fakulte" id="fakulte">
                        <option value="" selected disabled hidden>Geçilecek Fakülte</option>
                        @foreach ($faculties as $document)
                            <option
                                {{isset($hiddenf) && ($hiddenf == $document->id()) ? 'selected': false}} value="{{$document->id()}}">{{$document->id()}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <select name="bolum" id="branch">
                        <option value="" selected disabled hidden>Geçilecek Bolüm</option>
                    </select>
                </div>
                <div class="row">
                    <select name="ogretimturu2" id="">
                        <option value="" selected disabled hidden>Öğretim Türü</option>
                        <option value="1. Öğretim">1. Öğretim</option>
                        <option value="2. Öğretim">2. Öğretim</option>
                    </select>
                </div>
                <div class="row"><h4>Gerekli Belgeler</h4></div>
                <div class="row">
                    <label>
                        <input  class="file-input" name="transkript" value="{{ old('transkript') }}" type="file">
                        <span class="file-input-aa">Transkript Yükle!</span>
                    </label>
                </div>
                <div class="row"><input style="margin-bottom: 50px" value="Başvuru Yap" type="submit"></div>
            </form>
        </div>
    </div>
    <script>
        //firebase firestore
        firebase.initializeApp({
            apiKey: 'AIzaSyDtCmNFvNVBaT2A3G6g08rUH2bhnhitUG0',
            authDomain: 'yazilimlab-49317.firebaseapp.com',
            projectId: 'yazilimlab-49317'
        });
        var db = firebase.firestore();
        $('#fakulte').val('').change(function selectedFaculty() {
            var faculty = $(this).val();
            var docRef = db.collection("Faculties").doc(faculty);//firestore fakülteler
            $('#branch').find('option').remove();
            docRef.get().then((doc) => {
                if (doc.exists) {
                    console.log("Document data:", doc.data()[0]);
                    $.each(doc.data(), function (i, item) {
                        $('#branch').append($('<option>', {
                            value: item,
                            text : item
                        }));
                    });
                } else {
                    console.log("No such document!");
                }
            }).catch((error) => {
                console.log("Error getting document:", error);
            });

        });
    </script>
@endsection
