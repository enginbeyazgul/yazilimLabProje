@extends('index')
@section('body')
    <div class="container">
        <div class="column">
            <div class="row"><img class="logo" src="{{asset('public/img/logo.png')}}" alt="Kou-logo"></div>
            <div class="row"><h3>Kayıt Ol</h3></div>
            <form action="{{route('ogrenciKayit')}}" method="post">
                <div class="row"><input placeholder="İsim" type="text"></div>
                <div class="row"><input placeholder="Mail" type="text"></div>
                <div class="row"><input placeholder="Şifre" type="text"></div>
                <div class="row"><input value="Kayıt Ol" type="submit"></div>
            </form>
        </div>
    </div>
    <nav class="navigation">
        <div>
            <a href="ogrenci">Öğrenci</a>
            <a href="admin">Admin</a>
        </div>
    </nav>
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
        var facebookProvider = new firebase.auth.FacebookAuthProvider();
        var googleProvider = new firebase.auth.GoogleAuthProvider();
        var facebookCallbackLink = '/login/facebook/callback';
        var googleCallbackLink = '/login/google/callback';
        async function socialSignin(provider) {
            var socialProvider = null;
            if (provider == "facebook") {
                socialProvider = facebookProvider;
                document.getElementById('social-login-form').action = facebookCallbackLink;
            } else if (provider == "google") {
                socialProvider = googleProvider;
                document.getElementById('social-login-form').action = googleCallbackLink;
            } else {
                return;
            }
            firebase.auth().signInWithPopup(socialProvider).then(function(result) {
                result.user.getIdToken().then(function(result) {
                    document.getElementById('social-login-tokenId').value = result;
                    document.getElementById('social-login-form').submit();
                });
            }).catch(function(error) {
                // do error handling
                console.log(error);
            });
        }
    </script>

@endsection
