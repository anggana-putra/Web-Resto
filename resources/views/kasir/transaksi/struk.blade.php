<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Pembayaran</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/struk.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrap-struk">
        <div class="up-part">
            <h1>Cafe Bisa Ngopi</h1>
            <p>{{ $transaksis->nama_pegawai }} | {{ $transaksis->created_at->format('d-m-Y') }}</p>
        </div>
        <hr></hr>
        <div class="table-wrap">
        <table>
            <tr>
                <td>ID Transaksi</td>
                <td>:</td>
                <td>{{ $transaksis->id }}</td>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td>{{ $transaksis->nama_pelanggan }}</td>
            </tr>
            <tr>
                <td>Nama Menu</td>
                <td>:</td>
                <td>{{ $transaksis->nama_menu }}</td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td>{{ $transaksis->jumlah }}</td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td>:</td>
                <td>Rp {{ number_format($transaksis->total_harga,0,',','.') }}</td>
            </tr>
        </table>
        </div>
        <table>

    </div>

</body>
</html>