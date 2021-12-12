@extends('index')
@section('body')
    <div class="container">
        <div class="column">
            <div class="row"><h2>Kayıt Ol</h2></div>
            @if($errors->any())
                <div class="error-info"><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;{{$errors->first()}}</div>
            @endif
            <form action="{{route('ogrencikayitet')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <img id="blah" width="80px" src="{{asset('img/avatar.png')}}" alt="önizleme">
                    <label style="margin-left: -25px;">
                        <input id="imgInp" class="file-input" name="resim" value="{{ old('resim') }}" type="file">
                        <span class="file-input-a">Resim Yükle!</span>
                    </label>
                </div>
                <div class="row"><input name="dogumtarihi" value="{{ old('dogumtarihi') }}" placeholder="Doğum Tarihiniz" type="date"></div>
                <div class="row"><input name="ad" value="{{ old('ad') }}" placeholder="Ad" type="text"></div>
                <div class="row"><input name="soyad" value="{{ old('soyad') }}" placeholder="Soyad" type="text"></div>
                <div class="row"><input name="okulno" value="{{ old('okulno') }}" placeholder="Okul Numarası" type="text"></div>
                <div class="row"><input name="telno" value="{{ old('telno') }}" placeholder="Telefon Numarası" type="text"></div>
                <div class="row"><input name="tc" value="{{ old('tc') }}" placeholder="TC Kimlik Numarası" type="text"></div>
                <div class="row"><input name="mail" value="{{ old('mail') }}" placeholder="Mail" type="text"></div>
                <div class="row"><input name="adres" value="{{ old('adres') }}" placeholder="Adres" type="text"></div>
                <div class="row">
                    <select name="sınıf" id="">
                        <option value="" selected disabled hidden>Sınıf</option>
                        <option value="Hazırlık">Hazırlık</option>
                        <option value="1. Sınıf">1. Sınıf</option>
                        <option value="2. Sınıf">2. Sınıf</option>
                        <option value="3. Sınıf">3. Sınıf</option>
                        <option value="4. Sınıf">4. Sınıf</option>
                    </select>
                </div>
                <div class="row">
                    <select name="fakulte" id="fakulte">
                        <option value="" selected disabled hidden>Fakülte</option>
                        @foreach ($faculties as $document)
                            <option
                                {{isset($hiddenf) && ($hiddenf == $document->id()) ? 'selected': false}} value="{{$document->id()}}">{{$document->id()}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <select name="bolum" id="branch">
                        <option value="" selected disabled hidden>Bolüm</option>
                        {{--@foreach ($faculties as $document)
                            @foreach($document->data() as $branchs)
                                @if($document->id() != "")
                                    <option value="{{$branchs}}">{{$branchs}}</option>
                                @endif
                            @endforeach
                        @endforeach--}}
                    </select>
                </div>
                <div class="row"><input name="sifre" placeholder="Şifre" type="text"></div>
                <div class="row"><input style="margin-bottom: 50px" value="Kayıt Ol" type="submit"></div>
                <input class="hiddeninput" type="hidden">
            </form>
        </div>
    </div>

    <script>
        //resim avatar için
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
        $(document).ready(function () {


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
        });
    </script>
@endsection
