<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak Web</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #121212; /* Warna latar belakang gelap (hitam) */
            color: #E0E0E0; /* Teks abu-abu terang agar kontras dengan latar belakang gelap */
        }
        .card {
            background-color: #1E1E1E; /* Card dengan latar belakang gelap */
            border-radius: 15px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.6); /* Bayangan lebih tajam */
            padding: 30px;
            text-align: center;
            width: 350px;
            border: 2px solid #BB86FC; /* Border ungu yang elegan */
        }
        .card img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            margin-bottom: 20px;
            border: 4px solid #BB86FC; /* Border ungu di sekitar gambar */
        }
        .info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333333; /* Background info box lebih gelap */
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .info p {
            margin: 0;
            font-size: 18px;
        }
        .label {
            color: #BB86FC; /* Warna teks ungu untuk label */
            font-weight: bold;
            flex: 1;
        }
        .value {
            flex: 2;
            text-align: left;
            color: #E0E0E0; /* Warna teks nilai terang */
        }
    </style>
</head>
<body>

    <div class="card">
    <img  src="{{ asset($user->foto?? 'assets/img') }}" class="card-img-top" alt="">
    <h1>Profil User</h1>
        <div class="info">
            <p class="label">Nama :</p>
            <p class="value">{{$user->nama }}</p> <!-- Proper width for name field -->
        </div>
        <div class="info">
            <p class="label">NPM    :</p>
            <p class="value">{{ $user->npm }}</p> <!-- Proper width for NPM -->
        </div>
        <div class="info">
            <p class="label">Kelas :</p>
            <p class="value">{{ $user->nama_kelas ?? 'Kelas Tidak Ditemukan' }}</p> <!-- Proper width for class -->
        </div>
    </div>

</body>
</html>
