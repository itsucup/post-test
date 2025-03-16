<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center">Menu</h4>
        <a href="/mahasiswa">Data Mahasiswa</a>
        <a href="/user">Data User</a>
    </div>

    <!-- Main Content -->
    <div class="content">

        <!-- Header -->
        <div class="header">
            <h2>Dashboard</h2>
            <a href="/logout" class="btn-logout">Logout</a>
        </div>

        <!-- Dashboard Content -->
        <div class="table-container">
            <h2 class="mb-3">Data Mahasiswa</h2>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <a href="/mahasiswa/create" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $mhs->id }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->nama_mahasiswa }}</td>
                        <td>{{ $mhs->prodi }}</td>
                        <td>{{ $mhs->email }}</td>
                        <td>{{ $mhs->alamat }}</td>
                        <td>{{ $mhs->status }}</td>
                        <td>
                            <a href="/mahasiswa/edit/{{ $mhs->id }}" class="btn btn-warning">Edit</a>
                            <form action="/mahasiswa/delete/{{ $mhs->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus data?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>

    <style>
        body {
            display: flex;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            color: white;
            padding-top: 20px;
            position: fixed;
            left: 0;
            top: 0;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #495057;
        }

        /* Content */
        .content {
            margin-left: 250px;
            flex-grow: 1;
            padding: 20px;
        }

        /* Header */
        .header {
            background: #f8f9fa;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 250px;
            right: 0;
            box-shadow: 0 4px 2px -2px gray;
        }

        .btn-logout {
            background: #808080;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-logout:hover {
            background: #6e6e6e;
        }

        /* Table Margin */
        .table-container {
            margin-top: 70px;
        }
    </style>