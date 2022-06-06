<!DOCTYPE html>
<html>

<head>
    <title>GENERATE PDF</title>
</head>

<body>
    <br><br>
    <center>
        <h2 style="font-family: sans-serif;">Laporan Data Atlet</h2><br><br>
    </center>
    <br>
    <table style="" border="1" cellspacing="0" cellpadding="10" width="100%">
        <thead>
            <tr>
                <th style="font-family: sans-serif;">No</th>
                <th style="font-family: sans-serif;">Foto</th>
                <th style="font-family: sans-serif;">Nama Atlet</th>
                <th style="font-family: sans-serif;">Nisn</th>
                <th style="font-family: sans-serif;">tgl_registrasi</th>
                <th style="font-family: sans-serif;">Jenis Kelamin</th>
                <th style="font-family: sans-serif;">Tingkat Sabuk</th>
                <th style="font-family: sans-serif;">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($atlet as $row)
            <tr>
                <td style="font-family: sans-serif;">{{ $loop->iteration }}</td>
                <td>

                    <img src="{{asset('atlet/images/'.$row->image)}}" alt="" style="width:80px;">
                </td>
                <td style="font-family: sans-serif;">{{ $row->name }}</td>
                <td style="font-family: sans-serif;">{{ $row->nisn }}</td>
                <td style="font-family: sans-serif;">{{\Carbon\Carbon::parse ($row->tgl_registrasi)->format('d-m-Y') }}
                </td>

                <td style="font-family: sans-serif;">{{ $row->jenis_kelamin }}</td>
                <td style="font-family: sans-serif;">{{ $row->tingkat_sabuk }}</td>
                <td style="font-family: sans-serif;">{{ $row->kelas }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>