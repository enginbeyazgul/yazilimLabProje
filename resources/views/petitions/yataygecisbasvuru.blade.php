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
            margin-top: 15px;
            width: 85%;
            margin-left: 50px;
            font-size: 10px;
        }
        .row span:nth-child(2){
            margin-left: 50%;
        }
    </style>
</head>
<body>
<div class="container">
    <h4>T.C. <br>KOCAELİ ÜNİVERSİTESİ<br>YATAY GEÇİŞ BAŞVURU FORMU</h4>

    <div class="row">
        <span><b>I- BAŞVURU TÜRÜ</b><br>{{' '.strtoupper($data['basvuruturu']).' '}}</span>
    </div>
    <div class="row">
        <span><b>II- KİŞİSEL BİLGİLER</b><br></span>
    </div>
    <div class="row">
        <span>ADI SOYADI: {{' '.$data['name'].' '}}{{$data['lastname'].' '}}<br>T.C. KİMLİK NO: {{' '.$data['tc'].' '}}<br>E-POSTA ADRESİ: {{' '.$data['mail'].' '}}</span>
        <span style="left: 65%; top: -42px; position: relative;"><br>DOĞUM TARİHİ: {{' '.$data['birthday'].' '}}<br>TELEFON (GSM): {{' '.$data['phone'].' '}}<br>TEBLİGAT ADRES: {{' '.$data['address'].' '}}</span>
    </div>
    <div style="margin-top: -20px;" class="row">
            <span>
                <b>III- ÖĞRENİMİNE İLİŞKİN BİLGİLER</b> <br>
                HALEN KAYITLI OLDUĞU ÜNİVERSİTE: Kocaeli Üniversitesi<br>
                HALEN KAYITLI OLDUĞU FAKÜLTE / YÜKSEKOKUL: {{' '.$data['faculty'].' '}} <br>
                HALEN KAYITLI OLDUĞU BÖLÜM / PROGRAM: {{' '.$data['branch'].' '}} <br>
                ÖĞRETİM TÜRÜ: {{' '.$data['ogretimturu'].' '}} <br>
                SINIF/ YARIYIL: {{' '.$data['class'].' '}}<br>
                DİSİPLİN DURUMU: {{' '.$data['disiplindurumu'].' '}}<br>
                GENEL AKADEMİK BAŞARI NOT ORTALAMASI: {{' '.$data['gno'].' '}}<br>
                ÖĞRENCİ NUMARASI (KOCAELİ ÜNİVERSİTESİ ÖĞRENCİLERİ İÇİN): {{' '.$data['number'].' '}}<br>
                HALEN KAYITLI OLDUĞU YÜKSEKÖĞRETİM KURUMUNA YERLEŞTİRİLDİĞİ YIL: {{' '.$data['yil'].' '}}<br>
                HALEN KAYITLI OLUNAN PROGRAMA YERLEŞTİRMEDE KULLANILAN PUAN TÜRÜ VE PUANI: {{' '.$data['puanturu'].' '}}<br>
                ZORUNLU HAZIRLIK SINIFI BULUNAN PROGRAMLARA BAŞVURAN ADAYLAR İÇİN YABANCI DİL PUANI: {{' '.$data['yabancidil'].' '}} <br>
            </span>
    </div>
    <div class="row">
            <span>
                <b>IV – ADAYIN BAŞVURDUĞU YÜKSEKÖĞRETİM PROGRAMINA İLİŞKİN BİLGİLER</b> <br>
                FAKÜLTE / YÜKSEKOKUL/MYO. ADI: {{' '.$data['basvuruf'].' '}}<br>
                BÖLÜM / PROGRAM ADI: {{' '.$data['basvurub'].' '}}<br>
                ÖĞRETİM TÜRÜ: {{' '.$data['ogretimturub'].' '}}<br>
                BAŞVURULAN PROGRAMIN HALEN KAYITLI OLUNAN PUAN TÜRÜ VE PUANI:{{' '.$data['puanturub'].' '}} <br>
            </span>
    </div>
    <p>
        Beyan ettiğim bilgilerin veya belgelerin gerçeğe aykırı olması veya daha önce
        yatay geçiş yapmış olmam halinde hakkımda cezai işlemlerin yürütüleceğini ve
        kaydım yapılmış olsa dahi silineceğini bildiğimi kabul ediyorum.
    </p>
    <div class="row">
        <span style="left: 65%; top:-25px; position: relative;"><br>Adayın Adı Soyadı:{{' '.$data['name'].' '.$data['lastname']}} <br><br> İmzası:_______ </span>
    </div>
    <p style="margin-top: -15px;"><b>BU BÖLÜM ÜNİVERSİTE YETKİLİ BİRİMLERİNCE DOLDURULACAKTIR.</b></p>
    <div class="row">
        <span>BAŞVURUSU UYGUN DEĞİLDİR:</span>
        <span style="left: 65%; top:-12px; position: relative;">
                BAŞVURUSU UYGUN DEĞİLDİR: <br><br>
                Başvuruyu Alan Görevlinin: <br><br>
                Adı Soyadı: <br>
                Unvanı: <br>
                İmza: <br>
                Tarih: <br>
            </span>

    </div>
</div>
</body>
</html>
