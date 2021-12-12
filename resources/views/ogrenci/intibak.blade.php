@extends('layouts.ogrenciMain')
@section('container')
    <div class="containerr">
        <div class="columnn">
            <div class="row"><h2>Yaz Okulu Başvuru</h2></div>
            @if($errors->any())
                <div class="error-info"><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;{{$errors->first()}}</div>
            @endif
            <form action="{{route('ogrencikayitet')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row"><input name="universite" value="{{ old('universite') }}" placeholder="Eski Üniversite" type="text"></div>
                <div class="row"><input name="fakulte" value="{{ old('fakulte') }}" placeholder="Eski Fakülte vb." type="text"></div>
                <div class="row"><input name="bolum" value="{{ old('bolum') }}" placeholder="Eski Bölüm" type="text"></div>

                <div class="row"><h4>Daha Önce Aldığım</h4></div>
                <div class="row"><input name="dersadi" value="{{ old('dersadi') }}" placeholder="Ders Adı" type="text"></div>
                <div class="row">
                    <input style="width: 40px" name="t" value="{{ old('t') }}" placeholder="T" type="text">
                    <input style="width: 40px; margin-left: 10px" name="u" value="{{ old('u') }}" placeholder="U" type="text">
                    <input style="width: 40px; margin-left: 10px" name="l" value="{{ old('l') }}" placeholder="L" type="text">
                    <input style="width: 40px; margin-left: 10px" name="akts" value="{{ old('akts') }}" placeholder="Akts" type="text">
                </div>
                <div class="row" style="justify-content: space-around"><span class="file-input-aa">Ders Ekle</span><span class="file-input-aa">Ders Çıkar</span></div>
                <div class="row"><h4>Muaf Olmak İstediğim</h4></div>
                <div class="row"><input name="dersadii" value="{{ old('dersadi') }}" placeholder="Ders Adı" type="text"></div>
                <div class="row">
                    <input style="width: 40px" name="tt" value="{{ old('t') }}" placeholder="T" type="text">
                    <input style="width: 40px; margin-left: 10px" name="uu" value="{{ old('u') }}" placeholder="U" type="text">
                    <input style="width: 40px; margin-left: 10px" name="ll" value="{{ old('l') }}" placeholder="L" type="text">
                    <input style="width: 40px; margin-left: 10px" name="aktss" value="{{ old('akts') }}" placeholder="Akts" type="text">
                </div>
                <div class="row" style="justify-content: space-around"><span class="file-input-aa">Ders Ekle</span><span class="file-input-aa">Ders Çıkar</span></div>
                <div class="row"><h4>Gerekli Belgeler</h4></div>
                <div class="row">
                    <label>
                        <input class="file-input" name="transkript" value="{{ old('transkript') }}" type="file">
                        <span class="file-input-aa">Transkript Yükle!</span>
                    </label>
                </div>
                <div class="row">
                    <label>
                        <input  class="file-input" name="derslistesi" value="{{ old('derslistesi') }}" type="file">
                        <span class="file-input-aa">Ders Listesi Yükle!</span>
                    </label>
                </div>
                <div class="row"><input style="margin-bottom: 50px" value="Başvuru Yap" type="submit"></div>
            </form>
        </div>
    </div>
@endsection
