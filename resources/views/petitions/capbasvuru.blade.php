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
        table{
            font-size: 10px;
            border-collapse: collapse;
            width: 85%;
            margin: auto;
            margin-top: 15px;
        }
        table tr{
            border: 1px solid black;
        }
        table tr td,table tr th{
            height: 12px;
            width: 50%;
            border: 1px solid black;
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
            margin-left: 100px;
            font-size: 10px;
        }
        .row span:nth-child(2){
            margin-left: 50%;
        }
        .row:last-child span:nth-child(2){
            margin-left: 62%;
        }
    </style>
</head>
<body>
<div class="container">
    <h4>T.C. <br>KOCAELİ ÜNİVERSİTESİ<br>{{strtoupper($data['fakulte'])}} <br> {{strtoupper($data['bolum'])}} BAŞKANLIĞINA</h4>
    <p>
        &nbsp;&nbsp;&nbsp;{{$data['faculty'].' '}} {{$data['branch']}} Bölümü {{$data['ogretimturu'].' '}}
        {{$data['number'].' '}} numaralı {{$data['name'].' '.$data['lastname']}} isimli öğrencisiyim.
        Kocaeli Üniversitesi Ön Lisans ve Lisans Eğitim ve Öğretim
        Yönetmeliği’nin 45.maddesi uyarınca, Egitim Fakultesinde Temel Eğitim
        Bölümü'nde II.Öğretim Çift Anadal Programı (ÇAP) kapsamında öğrenim görme
        talebimin kabul edilmesini arz ederim.
        <br>
    </p>
    <div class="row">
        <span style="position: relative; left: 60%;">İmza:______</span>
    </div>
    <br>
    <table>
        <tr>
            <td>Adı ve Soyadı: </td>
            <td>{{$data['name'].' '.$data['lastname']}} </td>
        </tr>
        <tr>
            <td style="height: 30px;">Öğrenci Adres: </td>
            <td style="height: 30px;">{{$data['address']}} </td>
        </tr>
        <tr>
            <td>Öğrenci No: </td>
            <td>{{$data['number']}} </td>
        </tr>
        <tr>
            <td>Bölümü-Sınıfı: </td>
            <td>{{$data['class']}} </td>
        </tr>
        <tr>
            <td>Cep Telefon No: </td>
            <td>{{$data['phone']}} </td>
        </tr>
        <tr>
            <td>E-posta Adresi: </td>
            <td>{{$data['mail']}} </td>
        </tr>
    </table>
    <br><br>
    <p style="font-size: 8px;">
        <b style="font-size: 11px;">Çift Anadal Programı</b><br>
        MADDE 43 – (1) Bir bölümün öğrencileri, ön lisans/lisans öğrenimleri boyunca aynı fakülte, yüksekokul ve meslek
        yüksekokulu içinde veya dışında asıl bölümüne konu bakımından yakın olan başka bir lisans öğretimini aynı zamanda takip
        edebilir. Bununla ilgili esaslar Senato tarafından belirlenir. <br>
        MADDE 6- (2) Başvuru anında anadal diploma programındaki GNO'su 4.00'lük not sisteminde en az 3.00 olan ve anadal
        başvurabilir.<br>
        c) Anadal diploma programındaki GNO'su en az 3.00 olan ancak anadal diploma programının ilgili sınıfında başarı sıralaması
        itibariyle en üst %20'sinde yer almayan öğrencilerden çift anadal yapılacak bölümün/programın ilgili yıldaki taban puanından az
        olmamak üzere puana sahip olanlar da ÇAP'a başvurabilirler.
    </p>

</div>
</body>
</html>
