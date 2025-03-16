<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tambah Mahasiswa</title>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Tambah Mahasiswa</h2>
        <form action="/mahasiswa/store" method="POST">
            @csrf
            <div class="mb-3">
                <label>NIM:</label>
                <input type="text" name="nim" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Nama:</label>
                <input type="text" name="nama_mahasiswa" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Prodi:</label>
                <select name="prodi" class="form-control" required>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Akuntansi">Akuntansi</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Alamat:</label>
                <input type="text" name="alamat" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Status:</label>
                <select name="status" class="form-control">
                    <option value="Aktif">Aktif</option>
                    <option value="Non Aktif">Non Aktif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
