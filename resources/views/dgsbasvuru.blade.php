@php use Illuminate\Support\Facades\Session; @endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dgs Dilekçesi</title>
    <style>
        *{
            font-family:"DeJaVu Sans Mono",monospace;
        }
        h4{
            text-align: center;
        }
        .container{
            width: 85%;
            flex-wrap: wrap;
            height: auto;
            margin: 35px auto;
        }
        p{
            font-size: 10px;
        }
        .row{
            margin-top: 30px;
            width: 85%;
            margin-left: 50px;
            font-size: 10px;
        }
        .row:last-child span:nth-child(2){
            margin-left: 45%;
        }
    </style>
</head>
<body>
<div class="container">
    <h4>T.C. <br>KOCAELİ ÜNİVERSİTESİ<br>DİKEY GEÇİŞ BAŞVURU FORMU</h4>
    <p>
        &nbsp;&nbsp;&nbsp;Üniversiteniz {{\Illuminate\Support\Facades\Session::get('faculty').' '.\Illuminate\Support\Facades\Session::get('branch')}}ne Dikey Geçiş Sınavı ile yerleştirildim. Daha önce
        bitirmiş olduğum okuldaki transkriptim ve ders içerikleri ekte sunulmuştur.
        Gerekli ders muafiyetimin ve sınıf intibakımın yapılabilmesi için gereğini
        arz ederim.
    </p>
    <div class="row">
        <span>Öğrenci Numarası:{{\Illuminate\Support\Facades\Session::get('number')}}</span>
        <span style="margin-left: 30%;">Tarih: {{date("d/m/Y")}}</span>
    </div>
    <div class="row">
        <span>Telefon Numarası:{{\Illuminate\Support\Facades\Session::get('phone')}}</span>
        <span style="margin-left: 22%;">Adı Soyadı:{{\Illuminate\Support\Facades\Session::get('name').' '.\Illuminate\Support\Facades\Session::get('lastname')}}</span>
    </div>
    <div style="margin-top: 50px;" class="row">
        <span>Adres: {{\Illuminate\Support\Facades\Session::get('address')}}</span>
        <span>İmza:___________</span>
    </div>
</div>
</body>
</html>
