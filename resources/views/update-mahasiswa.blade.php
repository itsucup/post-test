<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tambah Mahasiswa</title>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Update Mahasiswa</h2>
        <form action="/mahasiswa/update/{{ $mahasiswa->id }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>NIM:</label>
                <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" required>
            </div>
            <div class="mb-3">
                <label>Nama:</label>
                <input type="text" name="nama_mahasiswa" class="form-control" value="{{ $mahasiswa->nama_mahasiswa }}" required>
            </div>
            <div class="mb-3">
            <label>Prodi:</label>
                <select name="prodi" class="form-control">
                    <option value="Sistem Informasi" {{ $mahasiswa->prodi == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                    <option value="Manajemen" {{ $mahasiswa->prodi == 'Manajemen' ? 'selected' : '' }}>Manajemen</option>
                    <option value="Akuntansi" {{ $mahasiswa->prodi == 'Akuntansi' ? 'selected' : '' }}>Akuntansi</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $mahasiswa->email }}" required>
            </div>
            <div class="mb-3">
                <label>Alamat:</label>
                <input type="text" name="alamat" class="form-control" value="{{ $mahasiswa->alamat }}" required>
            </div>
            <div class="mb-3">
                <label>Status:</label>
                <select name="status" class="form-control">
                    <option value="Aktif" {{ $mahasiswa->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Non Aktif" {{ $mahasiswa->status == 'Non Aktif' ? 'selected' : '' }}>Non Aktif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
