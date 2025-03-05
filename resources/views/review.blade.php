<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Mobil</title>
</head>
<body>

    <h2>Review Mobil: {{ $car->nama }} ({{ $car->jenis }})</h2>

    <hr>

    <h3>Tambah Review</h3>
    <form action="{{ route('insertReview', ['car_id' => $car->id]) }}" method="POST">
        @csrf
        <label for="nilai">Nilai (1-5):</label><br>
        <input type="number" name="nilai" min="1" max="5" required><br><br>

        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label for="isi">Isi Review:</label><br>
        <textarea name="isi" rows="4" required></textarea><br><br>

        <button type="submit">Tambah Review</button>
    </form>

    <hr>

    <h3>Daftar Review</h3>
    @if($car->reviews->isEmpty())
        <p>Belum ada review.</p>
    @else
        @foreach($car->reviews as $review)
            <p>
                <strong>{{ $review->nama }}</strong> ({{ $review->nilai }}/5) <br>
                {{ $review->isi }}
            </p>
            <hr>
        @endforeach
    @endif

</body>
</html>
