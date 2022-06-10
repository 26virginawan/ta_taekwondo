<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Id Card</title>
    <style>
    .page-break {
        page-break-after: always;
    }

    .main {
        width: 346px;
        height: 214px;
        margin: auto;
        margin-bottom: 30px;
        position: relative;
    }

    .background-image {
        width: 345px;
        height: 212px;
        border-radius: 6px;
        position: relative;
        border: 1px solid gray;
        position: absolute;
    }

    .main-data {
        width: 345px;
        height: 212px;
        position: absolute;
    }

    .right-div {
        font-size: 10pt;
        margin-left: 20px;
        position: absolute;
        float: left;
        width: 172px;
        height: 212px;
    }

    .left-div {
        position: absolute;
        float: left;
        width: 130px;
        height: 212px;
    }

    .logo {
        position: absolute;
        margin: 25px 0 0 18px;
    }

    .info {
        position: absolute;
        padding: 0 12px;
        height: 120px;
        margin-top: 5px;
    }

    .capitalize {
        text-transform: capitalize;
        font-weight: bold;
    }

    .register-hr {
        border-bottom: 1px solid black;
        width: 100px;
    }



    .back-div {
        padding: 10px;
        position: absolute;
        height: 194px;
        margin-left: 120px;
        width: 208px;
        display:
    }
    </style>
</head>

<body>
    @foreach ($atlet as $dt)
    <div>
        <div class="main">
            <img class="background-image" src="images/bg.jpg" alt="">



            <div class="main-data">
                <center style=" padding-top : 5px;">
                    <span>KARTU TANDA ATLET TAEKWONDO</span>
                </center>
                <hr>
                <div class="left-div" style="font-size:15px;">
                    <div class="info">
                        <img style="width: 80px; height: 80px;" src="{{public_path('atlet/images/' . $dt->image)}}"
                            alt="">
                        <!-- <div class="flex items-center" style="margin-top: 10px;">

                            <span class="text-xs ml-2" style="font-size: 13px;">{{$dt->no_telepon}}</span>
                        </div> -->
                        <div class="flex items-center">
                            <span class="text-xs ml-2"
                                style="font-size: 13px; margin-left: 20px;">{{$dt->tgl_lahir}}</span>
                        </div>
                        <img class="mx-auto" src="images/sign.png" alt="" width="45"
                            style="margin-left:25px; margin-top: 5px;">
                        <div class="border-b border-black border-b-1 w-full register-hr"></div>
                        <span class="mx-auto text-center block" style="margin-left: 25px;">Register</span>

                    </div>
                </div>
                <div class="right-div" style=" padding-top : 10px; line-height: 2.0; letter-spacing: 4px;">
                    <span class="capitalize">Nama: {{$dt->name}}</span><br>
                    <span class="text-sm">NISN: {{$dt->nisn}}</span><br>
                    <span class="text-md">JK: {{$dt->jenis_kelamin}}</span><br>
                    <span class="text-md">Kelas: {{$dt->kelas}}</span><br>

                </div>
            </div>

        </div>
    </div>
    @if (!$loop->last)
    <div class="page-break"></div>
    @endif
    @endforeach
</body>

</html>