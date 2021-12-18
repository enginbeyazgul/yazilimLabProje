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
    <h4>T.C. <br>KOCAELİ ÜNİVERSİTESİ<br>{{strtoupper($data['faculty']).' '}}{{strtoupper($data['branch'])}} BÖLÜM BAŞKANLIĞINA</h4>
    <p>
        &nbsp;&nbsp;&nbsp;{{$data['faculty'].' '}}
        {{$data['number'].' '}} numaralı {{$data['name'].' '}}{{$data['lastname'].' '}} isimli öğrencisiyim.
        Yaz öğretimi kapsamında aşağıda bilgilerini verdiğim ders/
        dersleri almak istiyorum. Kontrol listesinde belirtilen adımları
        tamamladım. <br>
    </p>
    <div class="row">
        <p>Gereği için arz ederim. </p>
        <span style="position: relative; top: -22px;">İmza:______</span>
    </div>
    <table>
        <tr>
            <td>Öğrenci E-Mail: </td>
            <td>{{$data['mail'].' '}} </td>
        </tr>
        <tr>
            <td style="height: 30px;">Öğrenci Adres: </td>
            <td style="height: 30px;">{{$data['address'].' '}} </td>
        </tr>
        <tr>
            <td>Öğrenci Gsm: </td>
            <td>{{$data['phone'].' '}} </td>
        </tr>
        <tr>
            <td>Öğrenci Danışmanı Adı Soyadı: </td>
            <td>{{$data['danismanadsoyad']}} </td>
        </tr>
        <tr>
            <td>Başvurulan Üniversite: </td>
            <td>{{$data['universite']}} </td>
        </tr>
        <tr>
            <td>Başlama-Bitiş Tarihleri: </td>
            <td>{{$data['baslangic'].' '}}{{$data['bitis']}} </td>
        </tr>
    </table>
    <p>Yaz öğretimi kapsamında alınacak ders/dersler:<br></p>
    <table>
        <tr>
            <th>Fakülte/Bölüm</th>
            <th>Dersin Adı ve Kodu</th>
            <th>T</th>
            <th>UL</th>
            <th>K</th>
            <th>AKTS</th>
        </tr>
        <tr>
            <td>{{$data['fakultebolum']}} </td>
            <td>{{$data['dersadi']}} </td>
            <td>{{$data['t']}} </td>
            <td>{{$data['u']}} </td>
            <td>{{$data['l']}} </td>
            <td>{{$data['akts']}} </td>
        </tr>
        <tr>
            <td>{{$data['fakultebolum2']}} </td>
            <td>{{$data['dersadi2']}} </td>
            <td>{{$data['t2']}} </td>
            <td>{{$data['u2']}} </td>
            <td>{{$data['l2']}} </td>
            <td>{{$data['akts2']}} </td>
        </tr>
        <tr>
            <td>{{$data['fakultebolum3']}} </td>
            <td>{{$data['dersadi3']}} </td>
            <td>{{$data['t3']}} </td>
            <td>{{$data['u3']}} </td>
            <td>{{$data['l3']}} </td>
            <td>{{$data['akts3']}} </td>
        </tr>
        <tr>
            <td>{{$data['fakultebolum4']}} </td>
            <td>{{$data['dersadi4']}} </td>
            <td>{{$data['t4']}} </td>
            <td>{{$data['u4']}} </td>
            <td>{{$data['l4']}} </td>
            <td>{{$data['akts4']}} </td>
        </tr>
    </table>
    <p style="font-size: 8px;">
        <b style="font-size: 10px;">Dilekçe Ekleri</b><br>
        1-Yaz döneminde ders almak istenilen Üniversite ve Kocaeli Üniversitesinin ilgili bölümlerinin, öğrencinin üniversiteye giriş yılındaki taban
        puanlarını gösteren belge ektedir. <br>
        2-Alınmak istenilen derslerin karşı Üniversitedeki ders saati/kredi/AKTS ve ders içeriklerini gösteren belge ektedir. <br>
        3-Başvurulan dönem içinde alınmış transkript ektedir.
    </p>
    <table>
        <tr>
            <th></th>
            <th>Ünvan, Adı, Soyadı</th>
            <th>İmza</th>
        </tr>
        <tr>
            <th>Öğrenci Danışmanı</th>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <th>Bölüm Başkanı</th>
            <td> </td>
            <td> </td>
        </tr>
    </table>
    <h6 style="text-align: center; font-size: 7px;">KOCAELİ ÜNİVERSİTESİ
        YAZ ÖĞRETİMİ ESASLARI</h6>
    <p style="font-size: 7px;">
        ESAS l- (1) Spor Bilimleri Fakültesi dışındaki tüm akademik birimlerde okuyan öğrencilerin, diğer yükseköğretim kurumlarından yaz öğretiminde ders
        alabilmeleri için; Üniversiteye giriş yılı esas olmak üzere ilgili bölüm/program taban puanın en fazla 40 puan düşük olma koşulu aranır. <br>
        (3) Yaz okulunda diğer yükseköğretim kurumlarından alınacak dersler için öğrencinin kayıtlı olduğu ilgili birimin Bölüm/Anabilim Dalı veya Program
        (4) Yaz okulunda Bölüm/Anabilim Dalı veya Program Başkanlığı bu konudaki değerlendirmesini; ilgili bölüm müfredatındaki benzer içeriğe veya program
        yeterliliğine sahip olmakla birlikte, ders(ler)in AKTS/kedi/saat değer(ler)inden herhangi birini dikkate alarak yapar. <br>
        3-Başvurulan dönem içinde alınmış transkript ektedir. <br>
        ESAS 2- (l) Öğrenciler, yaz öğretiminde derslerin AKTS/kredi/saat değerlerine bakılmaksızın, en çok 3 ders alabilir. <br>
        ESAS 3- (l) Güz ve/veya bahar yarıyıllarında kayıt donduran öğrenciler, kayıt dondurdukları yarıyıllara ilişkin dersleri yaz öğretiminde alamazlar. <br>
        ESAS 6 (l)Yaz öğretimi kapsamında alınan ders(ler)in notu genel not ortalamasına bakılmaksızın 4'lük sistem üzerinden 2'nin altında ise öğrenci bu
        ders(ler)den başarısız sayılır. <br>
        ESAS 9- (l) Yaz öğretimi aynı öğretim yılına ait üçüncü bir yarıyıl değildir. Yaz öğretiminde alınan ders(ler)in notları, öğrencilerin güz ve bahar
        yarıyıllarındaki yarıyıl not ortalamalarını ve yarıyıllardaki derslerin koşul durumlarını etkilemez. Ancak, öğrencinin genel not ortalaması (GNO)
        hesaplanmasına dahil edilir.
    </p>
</div>
</body>
</html>
