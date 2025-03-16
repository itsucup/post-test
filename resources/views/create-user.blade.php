<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tambah User</title>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Tambah User</h2>
        <form action="/user/store" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password:</label>
                <input type="text" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
