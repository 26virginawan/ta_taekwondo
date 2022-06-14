<!DOCTYPE html>
<html>

<head>
    <title>GENERATE PDF</title>
</head>

<body>
    <br><br>
    <center>
        <h2 style="font-family: sans-serif;">Laporan Pembayaran Spp</h2>
    </center>
    <br>
    <b>Dari tanggal {{ \Carbon\Carbon::parse(request()->tanggal_mulai)->format('d-m-Y') }} -
        {{ \Carbon\Carbon::parse(request()->tanggal_selesai)->format('d-m-Y') }}</b><br><br>
    <table style="" border="1" cellspacing="0" cellpadding="10" width="100%">
        <thead>
            <tr>
                <th scope="col" style="font-family: sans-serif;">No</th>
                <th scope="col" style="font-family: sans-serif;">Nama Atlet</th>
                <th scope="col" style="font-family: sans-serif;">Nisn</th>
                <th scope="col" style="font-family: sans-serif;">Kelas</th>
                <th scope="col" style="font-family: sans-serif;">Tanggal Bayar</th>
                <th scope="col" style="font-family: sans-serif;">Jumlah Bayar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembayaran as $row)
            <tr>
                <th scope="row" style="font-family: sans-serif;">{{ $loop->iteration }}</th>
                <td style="font-family: sans-serif;">{{ $row->atlet->name }}</td>
                <td style="font-family: sans-serif;">{{ $row->nisn }}</td>
                <td style="font-family: sans-serif;">{{ $row->atlet->kelas }}</td>
                <td style="font-family: sans-serif;">
                    {{ \Carbon\Carbon::parse($row->tanggal_bayar)->format('d-m-Y') }}
                </td>

                <td style="font-family: sans-serif;">{{ $row->jumlah_bayar }}</td>
            </tr>
            @endforeach
        </tbody>

        
    </table>
    <br>
    <br>
    <table style="float:right; margin-right:30px;" >    
    <tr>
			<td align="right">
				<p>Mengetahui,</p>
				<img class="mx-auto" src="images/sign.png" alt="" width="80" style="margin-left:25px; margin-top: 5px;">
                <div class="border-b border-black border-b-1 w-full register-hr"></div>
				<p><b>Dwi Wijayanto</b></p>
			</td>
		</tr>
    </table>
    <!-- <img class="mx-auto" src="images/sign.png" alt="" width="70" style="margin-left:25px; margin-top: 5px;">
    <div class="border-b border-black border-b-1 w-full register-hr"></div>
    <span class="mx-auto text-center block" style="margin-left: 25px;">Register</span> -->

        
</body>

</html>