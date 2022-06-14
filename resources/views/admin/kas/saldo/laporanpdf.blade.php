<!DOCTYPE html>
<html>

<head>
    <title>GENERATE PDF</title>
</head>

<body>
    <br><br>
    <center>
        <h2 style="font-family: sans-serif;">Laporan Saldo Kas Per Tanggal {{ \Carbon\Carbon::now()->format('d-m-Y') }}
        </h2>
    </center>
    <br>
    <br><br>
    <table style="" border="1" cellspacing="0" cellpadding="10" width="100%">
        <thead>
            <tr>
                <th scope="col" style="font-family: sans-serif;">Kas Masuk</th>
                <th scope="col" style="font-family: sans-serif;">Kas Keluar</th>
                <th scope="col" style="font-family: sans-serif;">Jumlah Saldo</th>
            </tr>
        </thead>
        <tbody>

            <tr>

                <td style="font-family: sans-serif;">Rp.
                    {{ number_format($jumlahmasuk,2,',','.') }}</td>
                <td style="font-family: sans-serif;">Rp.
                    {{ number_format($jumlahkeluar,2,',','.') }}</td>
                <td style="font-family: sans-serif;">Rp.
                    {{ number_format($saldo,2,',','.') }}</td>

            </tr>

        </tbody>
    </table>

</body>

</html>