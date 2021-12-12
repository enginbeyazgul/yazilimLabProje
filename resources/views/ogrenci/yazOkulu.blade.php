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
                <div class="row"><input name="danismanadsoyad" value="{{ old('danismanadsoyad') }}" placeholder="Ad" type="text"></div>
                <div class="row"><input name="universite" value="{{ old('universite') }}" placeholder="Soyad" type="text"></div>
                <div class="row"><input name="baslangic" value="{{ old('baslangic') }}" onfocus="(this.type='date')" placeholder="Yaz Okulu Başlangıç" type="text"></div>
                <div class="row"><input name="bitis" value="{{ old('bitis') }}" onfocus="(this.type='date')" placeholder="Yaz Okulu Bitiş" type="text"></div>
                <div class="row"><h4>Yaz Okulunda Alınacak Dersler</h4></div>
                <div class="row"><input name="fakultebolum" value="{{ old('fakultebolum') }}" placeholder="Fakülte/Bölüm" type="text"></div>
                <div class="row"><input name="dersadi" value="{{ old('dersadi') }}" placeholder="Ders Adı" type="text"></div>
                <div class="row">
                    <input style="width: 40px" name="t" value="{{ old('t') }}" placeholder="T" type="text">
                    <input style="width: 40px; margin-left: 10px" name="u" value="{{ old('u') }}" placeholder="U" type="text">
                    <input style="width: 40px; margin-left: 10px" name="l" value="{{ old('l') }}" placeholder="L" type="text">
                    <input style="width: 40px; margin-left: 10px" name="akts" value="{{ old('akts') }}" placeholder="Akts" type="text">
                </div>
                <div class="row" style="justify-content: space-around"><span class="file-input-aa">Ders Ekle</span><span class="file-input-aa">Ders Çıkar</span></div>
                <div class="row"><h4>Gerekli Belgeler</h4></div>
                <div class="row">
                    <label>
                        <input  class="file-input" name="transkript" value="{{ old('transkript') }}" type="file">
                        <span class="file-input-aa">Transkript Yükle!</span>
                    </label>
                </div>
                <div class="row">
                    <label>
                        <input  class="file-input" name="derslistesi" value="{{ old('derslistesi') }}" type="file">
                        <span class="file-input-aa">Ders Listesi Yükle!</span>
                    </label>
                </div>
                <div class="row">
                    <label>
                        <input  class="file-input" name="tabanliste" value="{{ old('tabanliste') }}" type="file">
                        <span class="file-input-aa">Taban Liste Yükle!</span>
                    </label>
                </div>
                <div class="row"><input style="margin-bottom: 50px" value="Başvuru Yap" type="submit"></div>
            </form>
        </div>
    </div>
@endsection
