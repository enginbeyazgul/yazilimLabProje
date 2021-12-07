@extends('index')
@section('body')
<div class="container">
    <div class="column">
        <div class="row"><img class="logo" src="{{asset('img/logo.png')}}" alt="Kou-logo"></div>
        <div class="row"><h3>Admin Giriş</h3></div>
        <form action="" method="post">
            <div class="row"><input placeholder="Mail" type="text"></div>
            <div class="row"><input placeholder="Şifre" type="text"></div>
            <div class="row">
                <label class="checkbox">
                    <input type="checkbox">
                    <span class="ilk">
                <span class="son"></span>
            </span>
                    <span class="beni">Beni hatırla!</span>
                </label>
            </div>
            <div class="row"><input type="submit"></div>
        </form>
    </div>
</div>
<nav class="navigation">
    <div>
        <a href="{{route('ogrenci')}}">Öğrenci</a>
        <a href="{{route('admin')}}">Admin</a>
    </div>
</nav>
<footer>
    <p>Kocaeli Üniversitesi E-Başvuru Sistemi</p>
</footer>
@endsection
