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
    <h4>T.C. <br>KOCAELİ ÜNİVERSİTESİ<br>{{' '.strtoupper($data['faculty']).' '}} FAKÜLTESİ
        {{' '.strtoupper($data['branch']).' '}} DEKANLIĞINA</h4>
    <table>
        <tr>
            <td>Öğrenci Adı Soyadı: </td>
            <td>{{' '.$data['name'].' '.$data['lastname']}} </td>
        </tr>
        <tr>
            <td>Öğrenci E-Mail: </td>
            <td>{{' '.$data['mail']}} </td>
        </tr>
        <tr>
            <td style="height: 30px;">Öğrenci Adres: </td>
            <td style="height: 30px;">{{' '.$data['address']}} </td>
        </tr>
        <tr>
            <td>Öğrenci Gsm: </td>
            <td>{{' '.$data['phone']}} </td>
        </tr>
        <tr>
            <td>Öğrenci No: </td>
            <td>{{' '.$data['number']}}  </td>
        </tr>
        <tr>
            <td>Bölümü: </td>
            <td>{{' '.$data['branch']}}  </td>
        </tr>
    </table><br>
    <p>
        &nbsp;&nbsp;&nbsp;Daha önce {{' '.$data['universite']}}  {{' '.$data['fakulte']}}  / Meslek Yüksek Okulu
        {{' '.$data['bolum']}}  Bölümünde / Programında aldığım ve aşağıda belirttiğim
        ders / derslerden muaf olmak istiyorum.
        Gereğinin yapılmasını arz ederim.
        <br>
    </p>
    <div class="row">
        <span style="position: relative; left: 60%;">İmza:______</span>
    </div>
    <table>
        <tr>
            <th colspan="5">Daha Önce Aldığım Dersin</th>
            <th colspan="6">Muaf Olmak İstediğim Dersin</th>
        </tr>
        <tr>
            <th>Adı</th>
            <th>T</th>
            <th>UL</th>
            <th>K</th>
            <th>AKTS</th>
            <th>Adı</th>
            <th>T</th>
            <th>UL</th>
            <th>K</th>
            <th>AKTS</th>
        </tr>
        <tr>
            <td>{{$data['dersadi']}} </td>
            <td>{{$data['t']}} </td>
            <td>{{$data['u']}} </td>
            <td>{{$data['l']}} </td>
            <td>{{$data['akts']}} </td>
            <td>{{$data['dersadim']}} </td>
            <td>{{$data['tm']}} </td>
            <td>{{$data['um']}} </td>
            <td>{{$data['lm']}} </td>
            <td>{{$data['aktsm']}} </td>
        </tr>
        <tr>
            <td>{{$data['dersadi2']}} </td>
            <td>{{$data['t2']}} </td>
            <td>{{$data['u2']}} </td>
            <td>{{$data['l2']}} </td>
            <td>{{$data['akts2']}} </td>
            <td>{{$data['dersadim2']}} </td>
            <td>{{$data['tm2']}} </td>
            <td>{{$data['um2']}} </td>
            <td>{{$data['lm2']}} </td>
            <td>{{$data['aktsm2']}} </td>
        </tr>
        <tr>
            <td>{{$data['dersadi3']}} </td>
            <td>{{$data['t3']}} </td>
            <td>{{$data['u3']}} </td>
            <td>{{$data['l3']}} </td>
            <td>{{$data['akts3']}} </td>
            <td>{{$data['dersadim3']}} </td>
            <td>{{$data['tm3']}} </td>
            <td>{{$data['um3']}} </td>
            <td>{{$data['lm3']}} </td>
            <td>{{$data['aktsm3']}} </td>
        </tr>
        <tr>
            <td>{{$data['dersadi4']}} </td>
            <td>{{$data['t4']}} </td>
            <td>{{$data['u4']}} </td>
            <td>{{$data['l4']}} </td>
            <td>{{$data['akts4']}} </td>
            <td>{{$data['dersadim4']}} </td>
            <td>{{$data['tm4']}} </td>
            <td>{{$data['um4']}} </td>
            <td>{{$data['lm4']}} </td>
            <td>{{$data['aktsm4']}} </td>
        </tr>
        <tr>
            <td>{{$data['dersadi5']}} </td>
            <td>{{$data['t5']}} </td>
            <td>{{$data['u5']}} </td>
            <td>{{$data['l5']}} </td>
            <td>{{$data['akts5']}} </td>
            <td>{{$data['dersadim5']}} </td>
            <td>{{$data['tm5']}} </td>
            <td>{{$data['um5']}} </td>
            <td>{{$data['lm5']}} </td>
            <td>{{$data['aktsm5']}} </td>
        </tr>
        <tr>
            <td>{{$data['dersadi6']}} </td>
            <td>{{$data['t6']}} </td>
            <td>{{$data['u6']}} </td>
            <td>{{$data['l6']}} </td>
            <td>{{$data['akts6']}} </td>
            <td>{{$data['dersadim6']}} </td>
            <td>{{$data['tm6']}} </td>
            <td>{{$data['um6']}} </td>
            <td>{{$data['lm6']}} </td>
            <td>{{$data['aktsm6']}} </td>
        </tr>
        <tr>
            <td>{{$data['dersadi7']}} </td>
            <td>{{$data['t7']}} </td>
            <td>{{$data['u7']}} </td>
            <td>{{$data['l7']}} </td>
            <td>{{$data['akts7']}} </td>
            <td>{{$data['dersadim7']}} </td>
            <td>{{$data['tm7']}} </td>
            <td>{{$data['um7']}} </td>
            <td>{{$data['lm7']}} </td>
            <td>{{$data['aktsm7']}} </td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
    </table>
    <p>T: Teorik Ders Saati U / L : Uygulama / Laboratuvar Saati K : Kredi</p>
</div>
</body>
</html>
