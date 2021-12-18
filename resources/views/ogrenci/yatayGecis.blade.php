@extends('layouts.ogrenciMain')
@section('container')
    <div class="containerr">
        <div class="columnn">
            <div class="row"><h2>Yatay Geçiş Başvuru</h2></div>
            @if($errors->any())
                <div class="error-info"><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;{{$errors->first()}}</div>
            @endif
            <form action="{{route('ogrencimain/yataygecis')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <select name="basvuruturu" id="">
                        <option value="" selected disabled hidden>Başvuru Türü</option>
                        <option value="Kurum İçi Yatay Geçiş Başvurusu">Kurum İçi Yatay Geçiş Başvurusu</option>
                        <option value="Kurumlararası Yatay Geçiş Başvurusu">Kurumlararası Yatay Geçiş Başvurusu</option>
                        <option value="Mer. Yer. Yatay Geçiş Başvurusu">Mer. Yer. Yatay Geçiş Başvurusu</option>
                        <option value="Yurt Dışı Yatay Geçiş Başvurusu">Yurt Dışı Yatay Geçiş Başvurusu</option>
                    </select>
                </div>
                <div class="row">
                    <select name="ogretimturu" id="">
                        <option value="" selected disabled hidden>Öğretim Türü</option>
                        <option value="1. Öğretim">1. Öğretim</option>
                        <option value="2. Öğretim">2. Öğretim</option>
                    </select>
                </div>
                <div class="row"><input name="yariyil" value="{{ old('yariyil') }}" placeholder="Yarıyıl" type="text"></div>
                <div class="row">
                    <select name="disiplindurumu" id="">
                        <option value="" selected disabled hidden>Disiplin Durumu</option>
                        <option value="Disiplin Cezası Aldım.">Disiplin Cezası Aldım.</option>
                        <option value="Disiplin Cezası Almadım.">Disiplin Cezası Almadım.</option>
                    </select>
                </div>
                <div class="row"><input name="gno" value="{{ old('gno') }}" placeholder="Genel Not Ortalaması" type="text"></div>
                <div class="row"><input name="yil" value="{{ old('yil') }}" placeholder="Yerleşme Yılı" type="text"></div>
                <div class="row"><input name="puan" value="{{ old('puan') }}" placeholder="Yerleşme Puanı" type="text"></div>
                <div class="row">
                    <select name="puanturu" id="">
                        <option value="" selected disabled hidden>Puan Türü</option>
                        <option value="Sayısal">Sayısal</option>
                        <option value="Sözel">Sözel</option>
                        <option value="Eşit Ağırlık">Eşit Ağırlık</option>
                        <option value="Yabancı Dil">Yabancı Dil</option>
                        <option value="Tyt">Tyt</option>
                        <option value="Ales Sözel">Ales Sözel</option>
                        <option value="Ales Sayısal">Ales Sayısal</option>
                        <option value="Ales Eşit Ağırlık">Ales Eşit Ağırlık</option>
                    </select>
                </div>
                <div class="row"><input name="yabancidil" value="{{ old('yabancidil') }}" placeholder="Yabancı Dil Puanı" type="text"></div>
                <div class="row"><h4>Adayın Başvurduğu Programa İlişkin Bilgiler</h4></div>
                <div class="row"><input name="basvuruf" value="{{ old('basvuruf') }}" placeholder="Başvurulacak Fakülte vb." type="text"></div>
                <div class="row"><input name="basvurub" value="{{ old('basvurub') }}" placeholder="Başvurulacak Bölüm" type="text"></div>
                <div class="row">
                    <select name="ogretimturub" id="">
                        <option value="" selected disabled hidden>Öğretim Türü</option>
                        <option value="1. Öğretim">1. Öğretim</option>
                        <option value="2. Öğretim">2. Öğretim</option>
                    </select>
                </div>
                <div class="row"><input name="puanb" value="{{ old('puanb') }}" placeholder="Başvurulacak Bölüme Ait Puan" type="text"></div>
                <div class="row">
                    <select name="puanturub" id="">
                        <option value="" selected disabled hidden>Puan Türü</option>
                        <option value="Sayısal">Sayısal</option>
                        <option value="Sözel">Sözel</option>
                        <option value="Eşit Ağırlık">Eşit Ağırlık</option>
                        <option value="Yabancı Dil">Yabancı Dil</option>
                        <option value="Tyt">Tyt</option>
                        <option value="Ales Sözel">Ales Sözel</option>
                        <option value="Ales Sayısal">Ales Sayısal</option>
                        <option value="Ales Eşit Ağırlık">Ales Eşit Ağırlık</option>
                    </select>
                </div>
                <div class="row"><h4>Gerekli Belgeler</h4></div>
                <div class="row">
                    <label>
                        <input class="file-input" name="transkript" value="{{ old('transkript') }}" type="file">
                        <span class="file-input-aa">Transkript Yükle!</span>
                    </label>
                </div>
                <div class="row"><input style="margin-bottom: 50px" value="Başvuru Yap" type="submit"></div>
            </form>
        </div>
    </div>
@endsection
