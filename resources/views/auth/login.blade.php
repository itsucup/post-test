<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        @if($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Belum punya akun? <a href="/register">Daftar</a></p>
        <p>Kembali ke <a href="/home">Halaman Awal</a></p>
    </div>
</body>
</html>

<style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f4f4f4;
    }
    .container {
        background: white;
        padding: 50px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }
    input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    button {
        background: #28a745;
        color: white;
        padding: 10px;
        border: none;
        width: 50%;
        border-radius: 5px;
        cursor: pointer;
    }
    button:hover {
        background: #218838;
    }
    .alert {
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
    }
    .alert-danger { background: #f8d7da; color: #721c24; }
</style>