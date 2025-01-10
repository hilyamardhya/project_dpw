<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #2c2c2c;
            color: white;
        }
        .btn-custom {
            border-radius: 50px;
            width: 40px;
            height: 40px;
        }
    </style>
</head>
<body>
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <button class="btn btn-danger px-4">Tambah</button>
        <div class="d-flex align-items-center">
            <input type="text" class="form-control me-2" placeholder="Cari...">
            <button class="btn btn-danger">Cari</button>
        </div>
        <div>
            <img src="path/to/avatar.jpg" class="rounded-circle" width="40" alt="Avatar">
        </div>
    </div>

    <table class="table table-dark table-hover">
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
        @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie['name'] }}</td>
                <td>
                    <img src="{{ asset($movie['cover']) }}" alt="Cover" style="width: 80px; height: 80px; object-fit: cover;">
                </td>
                <td>{{ $movie['year'] }}</td>
                <td>{{ $movie['director'] }}</td>
                <td>{{ $movie['studio'] }}</td>
                <td>
                    <button class="btn btn-warning btn-custom"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger btn-custom"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
