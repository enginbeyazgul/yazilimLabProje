@extends('index')
@section('body')
    <div class="container">
        <div class="column">
            <div class="row"><h2>Kayıt Ol</h2></div>
            <form action="{{route('ogrencikayitet')}}" method="post">
                @csrf
                <div class="row">
                    <img id="blah" width="80px" src="{{asset('img/avatar.png')}}" alt="önizleme">
                    <label>
                        <input id="imgInp" class="file-input" name="resim" type="file">
                        <span class="file-input-a">Resim Yükle!</span>
                    </label>
                </div>
                <div class="row"><input name="dogumtarihi" placeholder="Doğum Tarihiniz" type="date"></div>
                <div class="row"><input name="ad" placeholder="Ad" type="text"></div>
                <div class="row"><input name="soyad" placeholder="Soyad" type="text"></div>
                <div class="row"><input name="okulno" placeholder="Okul Numarası" type="text"></div>
                <div class="row"><input name="telno" placeholder="Telefon Numarası" type="text"></div>
                <div class="row"><input name="tc" placeholder="TC Kimlik Numarası" type="text"></div>
                <div class="row"><input name="mail" placeholder="Mail" type="text"></div>
                <div class="row"><input name="adres" placeholder="Adres" type="text"></div>
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
                        @foreach ($faculties as $document)
                            @foreach($document->data() as $branchs)
                                @if($document->id() == "Egitim Fakultesi")
                                    <option value="{{$branchs}}">{{$branchs}}</option>
                                @endif
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="row"><input name="sifre" placeholder="Şifre" type="text"></div>
                <div class="row"><input style="margin-bottom: 50px" value="Kayıt Ol" type="submit"></div>
                <input class="hiddeninput" type="hidden">
            </form>
        </div>
    </div>
    <footer>
        <p>Kocaeli Üniversitesi E-Başvuru Sistemi</p>
    </footer>

    <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        // Initialize Firebase
        var firebaseConfig = {
            apiKey: "{{config('services.firebase.apiKey')}}",
            authDomain: "{{config('services.firebase.authDomain')}}",
            projectId: "{{config('services.firebase.projectId')}}",
            storageBucket: "{{config('services.firebase.storageBucket')}}",
            messagingSenderId: "{{config('services.firebase.storageBucket')}}",
            appId: "{{config('services.firebase.appId')}}",
            measurementId: "{{config('services.firebase.measurementId')}}"
        };
        firebase.initializeApp(config);
    </script>
    <script>
        $(document).ready(function () {
            $('#fakulte').val('').change(function () {
                var faculty = $(this).val();
            });
            imgInp.onchange = evt => {
                const [file] = imgInp.files
                if (file) {
                    blah.src = URL.createObjectURL(file)
                }
            }
        });
    </script>
@endsection
