<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak Web</title>
    <style>
        /* Body Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #121212; /* Dark background */
            color: #E0E0E0; /* Light grey text */
        }

        /* Form Styles */
        form {
            background-color: #1E1E1E; /* Dark form background */
            border-radius: 15px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.6);
            padding: 20px;
            width: 350px;
            display: flex;
            flex-direction: column;
        }

        /* Input Styles */
        form input[type="text"], form select {
            background-color: #333333; /* Dark input background */
            border: 1px solid #BB86FC; /* Purple border */
            border-radius: 8px;
            color: #E0E0E0; /* Light grey text */
            padding: 10px;
            margin-bottom: 20px;
            font-size: 16px;
        }

        /* Submit Button Styles */
        form input[type="submit"] {
            background-color: #BB86FC; /* Purple background */
            border: none;
            border-radius: 8px;
            color: #121212; /* Dark text color for contrast */
            padding: 12px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form input[type="submit"]:hover {
            background-color: #9b4fff; /* Darker purple when hovering */
        }

        /* Error Message Styles */
        .text-danger {
            color: #FF1744; /* Red color for error messages */
            font-size: 14px;
            margin: 0;
            margin-bottom: 10px;
        }

        /* Label Styles */
        label {
            font-size: 16px;
            color: #E0E0E0;
            margin-bottom: 5px;
        }

        /* Styling for the table within the form */
        table {
            width: 100%;
            margin-bottom: 20px;
        }

        table td {
            padding: 10px;
            font-size: 16px;
            color: #E0E0E0;
        }

    </style>
</head>
<body>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        @foreach($errors->get('nama') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach

        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm">
        @foreach($errors->get('npm') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach

        <label for="kelas">Kelas:</label>
        <select name="kelas_id" id="kelas_id">
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
