<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penjumlahan</title>
</head>
    <body>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ url('/tambah') }}" method="get">
            <label for="angka1">Angka 1:</label>
            <input type="text" name="angka1" id="angka1" value="">
            <br>

            <label for="angka2">Angka 2:</label>
            <input type="text" name="angka2" id="angka2" value="">
            <br>

            <button type="submit">Hitung</button>
        </form>

        @if(isset($hasil))
        <h1>{{ $angka1 }} + {{ $angka2 }} = {{ $hasil }}</h1>
        @endif
    </body>
</html>
