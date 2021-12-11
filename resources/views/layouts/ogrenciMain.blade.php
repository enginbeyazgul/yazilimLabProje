<!doctype html>
<html lang="en">
<head>
    {{-- jquery cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- firebase js --}}
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-firestore.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('img/logo.png')}}">
    <title>{{$title}}</title>
</head>
<body>
<div class="sidebar">
    <img width="100px" src="{{ asset('img/logo.png') }}" alt="">
    <ul id="ul1">
        <li><a href="{{route('ogrencimain/yazokulu')}}">Yaz Okulu Başvurusu</a></li>
        <li><a href="{{route('ogrencimain/yataygecis')}}">Yatay Geçiş Başvurusu</a></li>
        <li><a href="{{route('ogrencimain/dgs')}}">DGS Başvurusu</a></li>
        <li><a href="{{route('ogrencimain/cap')}}">Çap Başvurusu</a></li>
        <li><a href="{{route('ogrencimain/intibak')}}">İntibak Başvurusu</a></li>
    </ul>
    <ul id="ul2">
        <li><a href="{{route('ogrencimain/bekleyen')}}">Bekleyen Başvurularım</a></li>
        <li><a href="{{route('ogrencimain/onaylanan')}}">Onaylanan Başvurularım</a></li>
        <li><a href="{{route('ogrencimain/reddedilen')}}">Reddedilen Başvurularım</a></li>
    </ul>
</div>

@yield('container')

<script>
    //firebase firestore
    firebase.initializeApp({
        apiKey: 'AIzaSyDtCmNFvNVBaT2A3G6g08rUH2bhnhitUG0',
        authDomain: 'yazilimlab-49317.firebaseapp.com',
        projectId: 'yazilimlab-49317'
    });
    var db = firebase.firestore();
</script>
<footer>
    <p>Kocaeli Üniversitesi E-Başvuru Sistemi</p>
</footer>
</body>
</html>

