@extends('layouts.ogrenciMain')
@section('container')
    <div class="containerr">
        <div class="columnn">
            <div class="row"><h2>Yaz Okulu Başvuru</h2></div>
            @if($errors->any())
                <div class="error-info"><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;{{$errors->first()}}</div>
            @endif
            <form action="{{route('ogrencimain/yazokulu')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row"><input name="danismanadsoyad" value="{{ old('danismanadsoyad') }}" placeholder="Danışman Ad Soyad" type="text"></div>
                <div class="row"><input name="universite" value="{{ old('universite') }}" placeholder="Üniversite Adı" type="text"></div>
                <div class="row"><input name="baslangic" value="{{ old('baslangic') }}" onfocus="(this.type='date')" placeholder="Yaz Okulu Başlangıç" type="text"></div>
                <div class="row"><input name="bitis" value="{{ old('bitis') }}" onfocus="(this.type='date')" placeholder="Yaz Okulu Bitiş" type="text"></div>
                <div class="row"><h4>Yaz Okulunda Alınacak Dersler</h4></div>
                <div class="row">
                    <select name="" id="derssayisi">
                        <option value="" selected disabled hidden>Almak İstediğiniz Ders Sayısı</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="ders">
                <div class="row"><h5>1. Ders</h5></div>
                    <div class="row"><input name="fakultebolum" value="{{ old('fakultebolum') }}" placeholder="Fakülte/Bölüm" type="text"></div>
                    <div class="row"><input name="dersadi" value="{{ old('dersadi') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t" value="{{ old('t') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u" value="{{ old('u') }}" placeholder="U" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l" value="{{ old('l') }}" placeholder="L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts" value="{{ old('akts') }}" placeholder="Akts" type="text">
                    </div>
                </div>
                <div class="ders2">
                    <div class="row"><h5>2.Ders</h5></div>
                    <div class="row"><input name="fakultebolum2" value="{{ old('fakultebolum2') }}" placeholder="Fakülte/Bölüm" type="text"></div>
                    <div class="row"><input name="dersadi2" value="{{ old('dersadi2') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t2" value="{{ old('t2') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u2" value="{{ old('u2') }}" placeholder="U" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l2" value="{{ old('l2') }}" placeholder="L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts2" value="{{ old('akts2') }}" placeholder="Akts" type="text">
                    </div>
                </div>
                <div class="ders3">
                    <div class="row"><h5>3.Ders</h5></div>
                    <div class="row"><input name="fakultebolum3" value="{{ old('fakultebolum3') }}" placeholder="Fakülte/Bölüm" type="text"></div>
                    <div class="row"><input name="dersadi3" value="{{ old('dersad3i') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t3" value="{{ old('t3') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u3" value="{{ old('u3') }}" placeholder="U" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l3" value="{{ old('l3') }}" placeholder="L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts3" value="{{ old('akts3') }}" placeholder="Akts" type="text">
                    </div>
                </div>
                <div class="ders4">
                    <div class="row"><h5>4.Ders</h5></div>
                    <div class="row"><input name="fakultebolum4" value="{{ old('fakultebolum4') }}" placeholder="Fakülte/Bölüm" type="text"></div>
                    <div class="row"><input name="dersadi4" value="{{ old('dersadi4') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t4" value="{{ old('t4') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u4" value="{{ old('u4') }}" placeholder="U" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l4" value="{{ old('l4') }}" placeholder="L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts4" value="{{ old('akts4') }}" placeholder="Akts" type="text">
                    </div>
                </div>
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
    <script>
        $('#derssayisi').change(function (){
            var dersSayisi = $(this).val();
            switch(dersSayisi) {
                case "1":
                    $('.ders').css('display','block');
                    $('.ders2').css('display','none');
                    $('.ders3').css('display','none');
                    $('.ders4').css('display','none');
                    break;
                case "2":
                    $('.ders').css('display','block');
                    $('.ders2').css('display','block');
                    $('.ders3').css('display','none');
                    $('.ders4').css('display','none');
                    break;
                case "3":
                    $('.ders').css('display','block');
                    $('.ders2').css('display','block');
                    $('.ders3').css('display','block');
                    $('.ders4').css('display','none');
                    break;
                case "4":
                    $('.ders').css('display','block');
                    $('.ders2').css('display','block');
                    $('.ders3').css('display','block');
                    $('.ders4').css('display','block');
                    break;
                default:
                // varsayılan kod bloğu
            }
        });
    </script>
@endsection
