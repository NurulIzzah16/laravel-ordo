<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mobil & Tambah Fitur</title>
</head>
<body>

    <h2>Tambah Fitur Baru</h2>
    <form action="{{ route('features.store') }}" method="POST">
        @csrf
        <label for="nama">Nama Fitur:</label>
        <input type="text" name="nama" required>
        <button type="submit">Tambah Fitur</button>
    </form>

    <h2>Tambah Fitur ke Mobil</h2>
    <form action="{{ route('cars.addFeatures') }}" method="POST">
        @csrf
        <label for="car_id">Pilih Mobil:</label>
        <select name="car_id" required>
            <option value="">-- Pilih Mobil --</option>
            @foreach($cars as $car)
                <option value="{{ $car->id }}">{{ $car->nama }} ({{ $car->jenis }})</option>
            @endforeach
        </select>

        <h4>Pilih Fitur:</h4>
        @foreach($features as $feature)
            <label>
                <input type="checkbox" name="features[]" value="{{ $feature->id }}">
                {{ $feature->nama }}
            </label><br>
        @endforeach

        <button type="submit">Tambah Fitur</button>
    </form>

    <h2>Daftar Mobil & Fitur</h2>
    <table border="1">
        <tr>
            <th>Nama Mobil</th>
            <th>Jenis</th>
            <th>Fitur</th>
        </tr>
        @foreach($cars as $car)
        <tr>
            <td>{{ $car->nama }}</td>
            <td>{{ $car->jenis }}</td>
            <td>
                @if($car->features->isEmpty())
                    <em>Tidak ada fitur</em>
                @else
                    @foreach($car->features as $feature)
                        {{ $feature->nama }},
                    @endforeach
                @endif
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>
