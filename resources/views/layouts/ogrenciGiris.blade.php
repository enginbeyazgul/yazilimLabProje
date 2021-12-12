@extends('index')
@section('body')
<div class="container">
    <div class="column">
        <div class="row"><img onclick="ogrenciLogin()" class="logo" src="{{asset('img/logo.png')}}" alt="Kou-logo"></div>
        <div class="row"><h3>Öğrenci Giriş</h3></div>
        @if($errors->any())
            <div class="error-info"><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;{{$errors->first()}}</div>
        @endif
        <form action="{{route('ogrencimain')}}" method="post">
            @csrf
        <div class="row"><input placeholder="Mail" name="ogrmail" value="{{ old('mail') }}" type="text" id="email_field"></div>
        <div class="row"><input placeholder="Şifre" name="ogrsifre" type="text" id="password_field"></div>
        <div class="row">
            <label class="checkbox">
                <input type="checkbox">
                <span class="ilk">
                    <span class="son"></span>
                </span>
                <span class="beni">Beni hatırla!</span>
            </label>
            <a href="{{route('ogrencikayit')}}" class="font-15">Kayıt Ol</a><span class="font-15">&nbsp;/&nbsp;</span><span class="font-15">Şifremi Unuttum</span>
        </div>
        <div class="row"><input value="Giriş"  type="submit"></div>
        </form>
    </div>
</div>
<nav class="navigation">
    <div>
        <a href="{{route('ogrenci')}}">Öğrenci</a>
        <a href="{{route('admin')}}">Admin</a>
    </div>
</nav>
@endsection
