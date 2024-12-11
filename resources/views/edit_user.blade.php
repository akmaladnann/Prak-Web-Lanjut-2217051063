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

    .card {
        background-color: #1E1E1E; /* Warna kartu gelap */
        border-radius: 15px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.6); /* Bayangan lebih tajam */
        padding: 30px;
        text-align: center;
        width: 100%;
        max-width: 400px; /* Responsif */
        border: 2px solid #BB86FC; /* Border ungu */
    }

    .card img {
        border-radius: 50%; /* Gambar berbentuk lingkaran */
        width: 120px;
        height: 120px;
        margin-bottom: 20px;
        border: 4px solid #BB86FC; /* Border ungu pada gambar */
    }

    .card label {
        color: #BB86FC; /* Warna label ungu */
        font-weight: bold;
        margin-bottom: 5px;
        text-align: left;
        display: block;
    }

    .card input[type="text"],
    .card select {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        font-size: 16px;
        border: 1px solid #333; /* Border abu */
        border-radius: 10px;
        background-color: #2E2E2E; /* Latar belakang input lebih gelap */
        color: #E0E0E0; /* Warna teks terang */
    }

    .card input[type="text"]:focus,
    .card select:focus {
        outline: none;
        border-color: #BB86FC; /* Border ungu saat fokus */
    }

    .card button {
        width: 100%;
        padding: 12px;
        background-color: #BB86FC; /* Tombol berwarna ungu */
        border: none;
        border-radius: 10px;
        color: #121212; /* Teks gelap */
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .card button:hover {
        background-color: #9b4fff; /* Warna ungu lebih gelap saat hover */
    }

    .text-danger {
        color: #FF4C4C; /* Warna merah untuk pesan error */
        font-size: 14px;
        text-align: left;
        margin-top: -10px;
        margin-bottom: 10px;
    }

    @media (max-width: 600px) {
        .card {
            padding: 20px;
        }
    }
</style>

</head>
<div class="card">
<form action="{{ route('user.update',$user['id']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value = "{{ old('nama', $user->nama) }}">
        @foreach($errors->get('nama') as $msg)
        <p class="text-danger">{{ $msg }}</p>
        @endforeach

        <label for="npm">NPM :</label>
        <input type="text" id="npm" name="npm" value = "{{ old('nama', $user->npm) }}">
        @foreach($errors->get('npm') as $msg)
        <p class="text-danger">{{ $msg }}</p>
        @endforeach

        <label for="kelas">Kelas :</label>
        <select name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}"
             {{ $kelasItem-> id == $user->kelas_id ? 'selected' : '' }}>
             {{ $kelasItem-> nama_kelas}}
            </option>
            @endforeach
        </select>

        <label for="foto">Foto : </label>
        <input type="file" id="foto" name="foto"><br><br>
        @if($user->foto)
        <img src="{{ asset( $user->foto) }}" class="card-img-top" alt="">
        @endif
        <br>
        <button type="submit">Submit</button><br>
    </form>
</div>
@endsection
