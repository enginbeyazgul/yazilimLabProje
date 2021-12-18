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

@yield('body')
<script>
    //firebase firestore
    firebase.initializeApp({
        apiKey: 'AIzaSyDtCmNFvNVBaT2A3G6g08rUH2bhnhitUG0',
        authDomain: 'yazilimlab-49317.firebaseapp.com',
        projectId: 'yazilimlab-49317',
        storageBucket: 'gs://yazilimlab-49317.appspot.com'
    });
    var db = firebase.firestore();
    var storage = firebase.storage();
</script>
{{-- js file --}}
<script src="{{asset('js/script.js?t='.time())}}" ></script>
<footer>
    <p>Kocaeli Üniversitesi E-Başvuru Sistemi</p>
</footer>
</body>
</html>

