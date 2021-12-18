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
<div class="hamburger"><i class="fas fa-bars"></i></div>
<div class="sidebar">
    <img width="100px" src="{{ asset('img/logo.png') }}" alt="">
    <ul id="ul1">
        <li><a href="{{route('adminmain/yazokulu')}}">Yaz Okulu Başvurusu</a></li>
        <li><a href="{{route('adminmain/yataygecis')}}">Yatay Geçiş Başvurusu</a></li>
        <li><a href="{{route('adminmain/dgs')}}">DGS Başvurusu</a></li>
        <li><a href="{{route('adminmain/cap')}}">Çap Başvurusu</a></li>
        <li><a href="{{route('adminmain/intibak')}}">İntibak Başvurusu</a></li>
    </ul>
</div>

@yield('ead')

<script>
    $('.hamburger').click(function (){
        if($(this).children().attr('class') == 'fas fa-bars'){
            $(this).children().attr('class','fas fa-times');
            $('.sidebar').css('left','0');
        }
        else {
            $(this).children().attr('class','fas fa-bars');
            $('.sidebar').css('left','-300px');
        }
    });
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

