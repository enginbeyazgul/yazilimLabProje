<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public/css/main.css?t='.time())}}">
    <title>{{$title}}</title>
</head>
<body>

@yield('body')

{{-- firebase module --}}
<script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.5.0/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.5.0/firebase-analytics.js";
    const firebaseConfig = {
        apiKey: "{{config('services.firebase.apiKey')}}",
        authDomain: "{{config('services.firebase.authDomain')}}",
        projectId: "{{config('services.firebase.projectId')}}",
        storageBucket: "{{config('services.firebase.storageBucket')}}",
        messagingSenderId: "{{config('services.firebase.storageBucket')}}",
        appId: "{{config('services.firebase.appId')}}",
        measurementId: "{{config('services.firebase.measurementId')}}"
    };
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
</script>
{{-- jquery cdn --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- js file --}}
<script src="{{asset('public/js/script.js?t='.time())}}" ></script>
</body>
</html>

