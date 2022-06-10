<!DOCTYPE html>
<html>

<head>
    <title>GENERATE PDF</title>
</head>

<body>
    <br><br>
    <center>
        <h2 style="font-family: sans-serif;">Laporan Pembayaran Spp</h2><br><br>
        <b style="font-family: sans-serif;">Nama Atlet : {{ $data_atlet->name }}</b><br><br>
        <b style="font-family: sans-serif;">Kode Atlet : {{ $data_atlet->kode_atlet }}</b><br><br>
        <b style="font-family: sans-serif;">Kelas : {{ $data_atlet->kelas}}</b><br><br>
    </center>
    <br>
    <b>Untuk Tahun : {{ request()->tahun_bayar }}</b><br><br>
    <table style="" border="1" cellspacing="0" cellpadding="10" width="100%">
        <thead>
            <tr>
                <th style="font-family: sans-serif;">No</th>
                <th style="font-family: sans-serif;">Nama Atlet</th>
                <th style="font-family: sans-serif;">Kode Atlet</th>
                <th style="font-family: sans-serif;">Tanggal Bayar</th>
                <th style="font-family: sans-serif;">Untuk Bulan</th>
                <th style="font-family: sans-serif;">Untuk Tahun</th>
                <th style="font-family: sans-serif;">Nominal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembayaran as $row)
            <tr>
                <td style="font-family: sans-serif;">{{ $loop->iteration }}</td>
                <td style="font-family: sans-serif;">{{ $row->atlet->name }}</td>
                <td style="font-family: sans-serif;">{{ $row->atlet->kode_atlet }}</td>
                <td style="font-family: sans-serif;">{{ \Carbon\Carbon::parse($row->tanggal_bayar)->format('d-m-Y') }}
                </td>

                <td style="font-family: sans-serif;">{{ $row->bulan_bayar }}</td>
                <td style="font-family: sans-serif;">{{ $row->tahun_bayar }}</td>
                <td style="font-family: sans-serif;">{{ $row->jumlah_bayar }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>