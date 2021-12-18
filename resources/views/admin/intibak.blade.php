@extends('layouts.adminMain')
@section('ead')
    <div class="containerr">
        <div class="columnn">
            @if($errors->any())
                <div class="error-info"><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;{{$errors->first()}}</div>
            @endif
            <div class="row"><h2> Bekleyen Yaz Okulu Başvuruları</h2></div>
                @if(isset($durum->rows()[0]) ? $durum->rows()[0]->data()['state'] : "0" === "1")
                @foreach($durum as $elem)
                    <div class="row">
                        <div class="basvuru">
                            <div>{{$elem->data()["date"]}}</div><div>{{$elem->data()["type"]}}</div>
                            <div>
                                @switch($elem->data()["state"])
                                    @case(1)
                                    Onay Bekleniyor
                                    @break
                                    @case(2)
                                    Onaylandı
                                    @break
                                    @case(3)
                                    Reddedildi
                                    @break
                                    @default
                                    Default case...
                                @endswitch
                            </div>
                            <div>
                                <span style="font-size: 18px;margin:3px; padding: 7px 10px" id="indirdilekce" class="file-input-aa"><i class="fas fa-check-circle"></i></span>
                                <span style="font-size: 18px;margin:3px; padding: 7px 10px" class="file-input-aa"><i class="fas fa-times-circle"></i></span>
                                <span style="background-color: #f1c12f ;font-size: 18px;margin:3px; padding: 7px 10px" id="indirdilekce" class="file-input-aa"><i class="fas fa-file-download"></i></span>
                            </div>
                        </div>

                    </div>
                @endforeach
            @else
                <div  class="row"><div style="justify-content: center" class="basvuru"><div >Başvuru Bulunamadı.</div></div></div>
            @endif
            <div class="row"><h2> Onaylanan Yaz Okulu Başvuruları</h2></div>
                @if(isset($durum2->rows()[0]) ? $durum2->rows()[0]->data()['state'] : "0" === "2")
                @foreach($durum2 as $elem)
                    <div class="row">
                        <div class="basvuru">
                            <div>{{$elem->data()["date"]}}</div><div>{{$elem->data()["type"]}}</div>
                            <div>
                                @switch($elem->data()["state"])
                                    @case(1)
                                    Onay Bekleniyor
                                    @break
                                    @case(2)
                                    Onaylandı
                                    @break
                                    @case(3)
                                    Reddedildi
                                    @break
                                    @default
                                    Default case...
                                @endswitch
                            </div>
                            <div>
                                <span style="font-size: 18px;margin:3px; padding: 7px 10px" id="indirdilekce" class="file-input-aa"><i class="fas fa-check-circle"></i></span>
                                <span style="font-size: 18px;margin:3px; padding: 7px 10px" class="file-input-aa"><i class="fas fa-times-circle"></i></span>
                                <span style="background-color: #f1c12f ;font-size: 18px;margin:3px; padding: 7px 10px" id="indirdilekce" class="file-input-aa"><i class="fas fa-file-download"></i></span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div  class="row"><div style="justify-content: center" class="basvuru"><div >Başvuru Bulunamadı.</div></div></div>
            @endif
            <div class="row"><h2> Reddedilen Yaz Okulu Başvuruları</h2></div>
                @if(isset($durum3->rows()[0]) ? $durum2->rows()[0]->data()['state'] : "0" === "3")
                @foreach($durum3 as $elem)
                    <div class="row">
                        <div class="basvuru">
                            <div>{{$elem->data()["date"]}}</div><div>{{$elem->data()["type"]}}</div>
                            <div>
                                @switch($elem->data()["state"])
                                    @case(1)
                                    Onay Bekleniyor
                                    @break
                                    @case(2)
                                    Onaylandı
                                    @break
                                    @case(3)
                                    Reddedildi
                                    @break
                                    @default
                                    Default case...
                                @endswitch
                            </div>
                            <div>
                                <span style="font-size: 18px;margin:3px; padding: 7px 10px" id="indirdilekce" class="file-input-aa"><i class="fas fa-check-circle"></i></span>
                                <span style="font-size: 18px;margin:3px; padding: 7px 10px" class="file-input-aa"><i class="fas fa-times-circle"></i></span>
                                <span style="background-color: #f1c12f ;font-size: 18px;margin:3px; padding: 7px 10px" id="indirdilekce" class="file-input-aa"><i class="fas fa-file-download"></i></span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div  class="row"><div style="justify-content: center" class="basvuru"><div >Başvuru Bulunamadı.</div></div></div>
            @endif
        </div>
    </div>
@endsection
