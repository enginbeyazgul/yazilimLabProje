@extends('layouts.ogrenciMain')
@section('container')
    <div class="containerr">
        <div class="columnn">
            <div class="row"><h2>İntibak Başvuru</h2></div>
            @if($errors->any())
                <div class="error-info"><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;{{$errors->first()}}</div>
            @endif
            <form action="{{route('ogrencimain/intibak')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row"><input name="universite" value="{{ old('universite') }}" placeholder="Eski Üniversite" type="text"></div>
                <div class="row"><input name="fakulte" value="{{ old('fakulte') }}" placeholder="Eski Fakülte vb." type="text"></div>
                <div class="row"><input name="bolum" value="{{ old('bolum') }}" placeholder="Eski Bölüm" type="text"></div>
                <div class="row">
                    <select name="" id="derssayisi">
                        <option value="" selected disabled hidden>Muaf Olmak İstediğiniz Ders Sayısı</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>
                <div class="row"><h4>Daha Önce Aldığım</h4></div>

                <div class="ders">
                    <div class="row"><h5>1. Ders</h5></div>
                    <div class="row"><input name="dersadi" value="{{ old('dersadi') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t" value="{{ old('t') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u" value="{{ old('u') }}" placeholder="U/L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l" value="{{ old('l') }}" placeholder="K" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts" value="{{ old('akts') }}" placeholder="Akts" type="text">
                    </div>
                </div>
                <div class="ders2">
                    <div class="row"><h5>2.Ders</h5></div>
                    <div class="row"><input name="dersadi2" value="{{ old('dersadi2') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t2" value="{{ old('t2') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u2" value="{{ old('u2') }}" placeholder="U/L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l2" value="{{ old('l2') }}" placeholder="K" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts2" value="{{ old('akts2') }}" placeholder="Akts" type="text">
                    </div>
                </div>
                <div class="ders3">
                    <div class="row"><h5>3.Ders</h5></div>
                    <div class="row"><input name="dersadi3" value="{{ old('dersad3i') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t3" value="{{ old('t3') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u3" value="{{ old('u3') }}" placeholder="U/L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l3" value="{{ old('l3') }}" placeholder="K" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts3" value="{{ old('akts3') }}" placeholder="Akts" type="text">
                    </div>
                </div>
                <div class="ders4">
                    <div class="row"><h5>4.Ders</h5></div>
                    <div class="row"><input name="dersadi4" value="{{ old('dersadi4') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t4" value="{{ old('t4') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u4" value="{{ old('u4') }}" placeholder="U/L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l4" value="{{ old('l4') }}" placeholder="K" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts4" value="{{ old('akts4') }}" placeholder="Akts" type="text">
                    </div>
                </div>
                <div class="ders5">
                    <div class="row"><h5>5.Ders</h5></div>
                    <div class="row"><input name="dersadi5" value="{{ old('dersadi5') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t5" value="{{ old('t5') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u5" value="{{ old('u5') }}" placeholder="U/L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l5" value="{{ old('l5') }}" placeholder="K" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts5" value="{{ old('akts5') }}" placeholder="Akts" type="text">
                    </div>
                </div>
                <div class="ders6">
                    <div class="row"><h5>6.Ders</h5></div>
                    <div class="row"><input name="dersadi6" value="{{ old('dersadi6') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t6" value="{{ old('t6') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u6" value="{{ old('u6') }}" placeholder="U/L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l6" value="{{ old('l6') }}" placeholder="K" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts6" value="{{ old('akts6') }}" placeholder="Akts" type="text">
                    </div>
                </div>
                <div class="ders7">
                    <div class="row"><h5>7.Ders</h5></div>
                    <div class="row"><input name="dersadi7" value="{{ old('dersadi7') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t7" value="{{ old('t7') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u7" value="{{ old('u7') }}" placeholder="U/L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l7" value="{{ old('l7') }}" placeholder="K" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts7" value="{{ old('akts7') }}" placeholder="Akts" type="text">
                    </div>
                </div>
                <div class="row"><h4>Muaf Olmak İstediğim</h4></div>
                <div class="ders">
                    <div class="row"><h5>1. Ders</h5></div>
                    <div class="row"><input name="dersadim" value="{{ old('dersadim') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="tm" value="{{ old('tm') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="um" value="{{ old('um') }}" placeholder="U/L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="lm" value="{{ old('lm') }}" placeholder="K" type="text">
                        <input style="width: 40px; margin-left: 10px" name="aktsm" value="{{ old('aktsm') }}" placeholder="Akts" type="text">
                    </div>
                </div>
                <div class="ders2">
                    <div class="row"><h5>2.Ders</h5></div>
                    <div class="row"><input name="dersadi2m" value="{{ old('dersadi2') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t2m" value="{{ old('t2m') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u2m" value="{{ old('u2m') }}" placeholder="U/L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l2m" value="{{ old('l2m') }}" placeholder="K" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts2m" value="{{ old('akts2m') }}" placeholder="Akts" type="text">
                    </div>
                </div>
                <div class="ders3">
                    <div class="row"><h5>3.Ders</h5></div>
                    <div class="row"><input name="dersadi3m" value="{{ old('dersad3m') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t3m" value="{{ old('t3m') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u3m" value="{{ old('u3m') }}" placeholder="U/L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l3m" value="{{ old('l3m') }}" placeholder="K" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts3m" value="{{ old('akts3m') }}" placeholder="Akts" type="text">
                    </div>
                </div>
                <div class="ders4">
                    <div class="row"><h5>4.Ders</h5></div>
                    <div class="row"><input name="dersadi4m" value="{{ old('dersadi4m') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t4m" value="{{ old('t4m') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u4m" value="{{ old('u4m') }}" placeholder="U/L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l4m" value="{{ old('l4m') }}" placeholder="K" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts4m" value="{{ old('akts4m') }}" placeholder="Akts" type="text">
                    </div>
                </div>
                <div class="ders5">
                    <div class="row"><h5>5.Ders</h5></div>
                    <div class="row"><input name="dersadi5m" value="{{ old('dersadi5m') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t5m" value="{{ old('t5m') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u5m" value="{{ old('u5m') }}" placeholder="U/L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l5m" value="{{ old('l5m') }}" placeholder="K" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts5m" value="{{ old('akts5m') }}" placeholder="Akts" type="text">
                    </div>
                </div>
                <div class="ders6">
                    <div class="row"><h5>6.Ders</h5></div>
                    <div class="row"><input name="dersadi6m" value="{{ old('dersadi6m') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t6m" value="{{ old('t6m') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u6m" value="{{ old('u6m') }}" placeholder="U/L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l6m" value="{{ old('l6m') }}" placeholder="K" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts6m" value="{{ old('akts6m') }}" placeholder="Akts" type="text">
                    </div>
                </div>
                <div class="ders7">
                    <div class="row"><h5>7.Ders</h5></div>
                    <div class="row"><input name="dersadi7m" value="{{ old('dersadi7m') }}" placeholder="Ders Adı" type="text"></div>
                    <div class="row">
                        <input style="width: 40px" name="t7m" value="{{ old('t7m') }}" placeholder="T" type="text">
                        <input style="width: 40px; margin-left: 10px" name="u7m" value="{{ old('u7m') }}" placeholder="U/L" type="text">
                        <input style="width: 40px; margin-left: 10px" name="l7m" value="{{ old('l7m') }}" placeholder="K" type="text">
                        <input style="width: 40px; margin-left: 10px" name="akts7m" value="{{ old('akts7m') }}" placeholder="Akts" type="text">
                    </div>
                </div>
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
    <script>
        $('#derssayisi').change(function (){
            var dersSayisi = $(this).val();
            switch(dersSayisi) {
                case "1":
                    $('.ders').css('display','block');
                    $('.ders2').css('display','none');
                    $('.ders3').css('display','none');
                    $('.ders4').css('display','none');
                    $('.ders5').css('display','none');
                    $('.ders6').css('display','none');
                    $('.ders7').css('display','none');
                    break;
                case "2":
                    $('.ders').css('display','block');
                    $('.ders2').css('display','block');
                    $('.ders3').css('display','none');
                    $('.ders4').css('display','none');
                    $('.ders5').css('display','none');
                    $('.ders6').css('display','none');
                    $('.ders7').css('display','none');
                    break;
                case "3":
                    $('.ders').css('display','block');
                    $('.ders2').css('display','block');
                    $('.ders3').css('display','block');
                    $('.ders4').css('display','none');
                    $('.ders5').css('display','none');
                    $('.ders6').css('display','none');
                    $('.ders7').css('display','none');
                    break;
                case "4":
                    $('.ders').css('display','block');
                    $('.ders2').css('display','block');
                    $('.ders3').css('display','block');
                    $('.ders4').css('display','block');
                    $('.ders5').css('display','none');
                    $('.ders6').css('display','none');
                    $('.ders7').css('display','none');
                    break;
                case "5":
                    $('.ders').css('display','block');
                    $('.ders2').css('display','block');
                    $('.ders3').css('display','block');
                    $('.ders4').css('display','block');
                    $('.ders5').css('display','block');
                    $('.ders6').css('display','none');
                    $('.ders7').css('display','none');
                    break;
                case "6":
                    $('.ders').css('display','block');
                    $('.ders2').css('display','block');
                    $('.ders3').css('display','block');
                    $('.ders4').css('display','block');
                    $('.ders5').css('display','block');
                    $('.ders6').css('display','block');
                    $('.ders7').css('display','none');
                    break;
                case "7":
                    $('.ders').css('display','block');
                    $('.ders2').css('display','block');
                    $('.ders3').css('display','block');
                    $('.ders4').css('display','block');
                    $('.ders5').css('display','block');
                    $('.ders6').css('display','block');
                    $('.ders7').css('display','block');
                    break;
                default:
                // varsayılan kod bloğu
            }
        });
    </script>
@endsection
