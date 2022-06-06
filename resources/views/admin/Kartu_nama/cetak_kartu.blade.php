<!DOCTYPE html>

<html>

<head>

    <link rel="stylesheet" href="">

    <style>
    .card {
        background: #404853;

        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

        height: auto;
        width: 300px;



        margin: auto;



        font-family: arial;

    }

    .title {

        color: grey;

        font-size: 18px;

    }

    button {

        border: none;

        outline: 0;

        display: inline-block;

        padding: 8px;

        color: white;

        background-color: #006400;

        text-align: center;

        cursor: pointer;

        width: 100%;

        font-size: 18px;

    }

    a {

        text-decoration: none;

        font-size: 22px;

        color: black;

    }

    button:hover,
    a:hover {

        opacity: 0.7;

    }
    </style>

</head>

<body>

    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h2 style="text-align:center">KARTU TANDA ANGGOTA TAEKWONDO BUMIAJI</h2>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4">

                    <img src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/dist/img/laravel.png" alt="AdminLTE Logo"
                        class="brand-image">
                </div>
                <div class="col-8">
                    @foreach($data as $data)
                    <h3>{{$data->name}}</h3>

                    <p class="title">{{$data->kelas}}</p>

                    <p>{{$data->tempat_lahir}}</p>
                    <p>{{$data->jenis_kelamin}}</p>
                    <p>{{$data->no_hp}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>


</body>

</html>