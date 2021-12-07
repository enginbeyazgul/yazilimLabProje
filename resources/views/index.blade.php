<!doctype html>
<html lang="en">
<head>
    {{-- jquery cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>{{$title}}</title>
</head>
<body>

@yield('body')

{{-- firebase module --}}
<script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.0/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.0/firebase-analytics.js";
    const firebaseConfig = {
        apiKey: "AIzaSyDtCmNFvNVBaT2A3G6g08rUH2bhnhitUG0",
        authDomain: "yazilimlab-49317.firebaseapp.com",
        projectId: "yazilimlab-49317",
        storageBucket: "yazilimlab-49317.appspot.com",
        messagingSenderId: "570591867623",
        appId: "1:570591867623:web:b25ab9b38372109899a842",
        measurementId: "G-DB97STPPRY"
    };
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
</script>

{{-- js file --}}
<script src="{{asset('js/script.js?t='.time())}}" ></script>
</body>
</html>

