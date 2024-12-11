@extends('layouts.app')

@section('content')
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #121212; /* Latar belakang gelap */
        color: #E0E0E0; /* Warna teks abu terang */
    }

    .container {
        width: 90%;
        max-width: 800px;
        margin: auto;
        background-color: #1E1E1E; /* Latar belakang kontainer */
        border-radius: 15px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.6); /* Bayangan lebih tajam */
        padding: 20px;
        border: 2px solid #BB86FC; /* Border ungu */
    }

    .container h2 {
        text-align: center;
        color: #BB86FC; /* Warna judul ungu */
        margin-bottom: 20px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .table th,
    .table td {
        text-align: left;
        padding: 12px;
        border-bottom: 1px solid #333; /* Garis bawah pada tabel */
    }

    .table th {
        background-color: #2E2E2E; /* Header tabel lebih gelap */
        color: #BB86FC; /* Warna teks header ungu */
        font-weight: bold;
    }

    .table tr:nth-child(even) {
        background-color: #2E2E2E; /* Baris genap dengan latar lebih gelap */
    }

    .table tr:hover {
        background-color: #333; /* Latar belakang baris saat di-hover */
    }

    .btn {
        padding: 8px 16px;
        background-color: #BB86FC; /* Tombol berwarna ungu */
        border: none;
        border-radius: 5px;
        color: #121212; /* Teks gelap */
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #9b4fff; /* Warna ungu lebih gelap saat hover */
    }

    .btn-primary {
        background-color: #BB86FC; /* Warna khusus untuk tombol primary */
    }

    .btn-primary:hover {
        background-color: #9b4fff; /* Tombol primary saat di-hover */
    }

    @media (max-width: 600px) {
        .container {
            padding: 15px;
        }

        .table th,
        .table td {
            padding: 8px;
            font-size: 14px;
        }

        .btn {
            font-size: 12px;
            padding: 6px 12px;
        }
    }
</style>

<div class="container">
    <h2>Daftar Pengguna</h2>
    <table class="table">
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->nama_kelas }}</td>
                <td>
                    <div class="action-buttons">
                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-warning btn-sm">View</a>
                        <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection