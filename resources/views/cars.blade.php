<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mobil</title>
</head>
<body>
    <h2>Daftar Mobil</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Tanggal Pembuatan</th>
        </tr>
        @foreach($cars as $car)
        <tr>
            <td>{{ $car->nama }}</td>
            <td>{{ $car->jenis }}</td>
            <td>{{ number_format($car->harga, 0, ',', '.') }}</td>
            <td>{{ $car->tanggal_pembuatan }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
