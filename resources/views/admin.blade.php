<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
    <!-- Tambahkan Bootstrap atau CSS lainnya -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-4">
            <h1>Daftar Film</h1>
            <a href="{{ route('films.create') }}" class="btn btn-danger">Tambah</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Film</th>
                    <th>Cover</th>
                    <th>Tahun Rilis</th>
                    <th>Sutradara</th>
                    <th>Studio</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($films as $film)
                <tr>
                    <td>{{ $film->nama }}</td>
                    <td><img src="{{ asset('storage/' . $film->cover) }}" alt="{{ $film->nama }}" width="100"></td>
                    <td>{{ $film->tahun_rilis }}</td>
                    <td>{{ $film->sutradara }}</td>
                    <td>{{ $film->studio }}</td>
                    <td>
                        <a href="{{ route('films.edit', $film) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('films.destroy', $film) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Tambahkan Bootstrap JS atau JS lainnya -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
