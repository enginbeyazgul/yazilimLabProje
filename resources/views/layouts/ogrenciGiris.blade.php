@extends('index')
@section('body')
<div class="container">
    <div class="column">
        <div class="row"><img class="logo" src="{{asset('public/img/logo.png')}}" alt="Kou-logo"></div>
        <div class="row"><h3>Öğrenci Giriş</h3></div>
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
            <a href="{{route('ogrenciKayit')}}" class="font-15">Kayıt Ol</a><span class="font-15">&nbsp;/&nbsp;</span><span class="font-15">Şifremi Unuttum</span>
        </div>
        <div class="row"><input type="submit"></div>
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
@endsection
