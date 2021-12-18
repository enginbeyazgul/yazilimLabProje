@extends('index')
@section('body')
<div class="container">
    <div class="column">
        <div class="row"><img class="logo" src="{{asset('img/logo.png')}}" alt="Kou-logo"></div>
        <div class="row"><h3>Admin Giriş</h3></div>
        @if($errors->any())
            <div class="error-info"><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;{{$errors->first()}}</div>
        @endif
        <form action="{{route('adminmain')}}" method="post">
            @csrf
            <div class="row"><input name="adminmail" placeholder="Mail" type="text"></div>
            <div class="row"><input name="adminsifre" placeholder="Şifre" type="text"></div>
            <div class="row">
                <label class="checkbox">
                    <input type="checkbox">
                    <span class="ilk">
                <span class="son"></span>
            </span>
                    <span class="beni">Beni hatırla!</span>
                </label>
            </div>
            <div class="row"><input value="Giriş" type="submit"></div>
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
