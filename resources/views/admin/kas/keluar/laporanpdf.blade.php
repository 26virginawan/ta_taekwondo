<!DOCTYPE html>
<html>

<head>
    <title>GENERATE PDF</title>
</head>

<body>
    <br><br>
    <center>
        <h2 style="font-family: sans-serif;">Laporan Kas keluar</h2>
    </center>
    <br>
    <b>Dari tanggal {{ \Carbon\Carbon::parse(request()->tanggal_mulai)->format('d-m-Y') }} -
        {{ \Carbon\Carbon::parse(request()->tanggal_selesai)->format('d-m-Y') }}</b><br><br>
    <table style="" border="1" cellspacing="0" cellpadding="10" width="100%">
        <thead>
            <tr>
                <th scope="col" style="font-family: sans-serif;">No</th>
                <th scope="col" style="font-family: sans-serif;">Tanggal</th>
                <th scope="col" style="font-family: sans-serif;">Keterangan</th>
                <th scope="col" style="font-family: sans-serif;">jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kaskeluar as $row)
            <tr>
                <th scope="row" style="font-family: sans-serif;">{{ $loop->iteration }}</th>
                <td style="font-family: sans-serif;">
                    {{ \Carbon\Carbon::parse($row->tanggal)->format('d-m-Y') }}
                </td>
                <td style="font-family: sans-serif;">{{ $row->keterangan }}</td>
                <td style="font-family: sans-serif;">Rp.
                    {{ number_format($row->jumlah,2,',','.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>