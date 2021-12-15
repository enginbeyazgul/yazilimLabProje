@extends('layouts.ogrenciMain')
@section('container')

    <div class="containerr">
        <div class="columnn">
            <div class="row"><h2>Reddedilen Başvurularım</h2></div>
            @if($errors->any())
                <div class="error-info"><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;{{$errors->first()}}</div>
            @endif
            @foreach($durum as $elem)
                <div class="row">

                    <div class="basvuru">
                        <div>{{$elem->data()["date"]}}</div><div>{{$elem->data()["type"]}}</div><div>Başvurunuz Reddedilmiştir</div>
                        <div>
                            <span style="font-size: 18px;margin:5px; padding: 7px 12px" class="file-input-aa"><i class="fas fa-file-upload"></i></span>
                            <span style="font-size: 18px;margin:5px; padding: 7px 12px" class="file-input-aa"><i class="fas fa-file-download"></i></span>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
