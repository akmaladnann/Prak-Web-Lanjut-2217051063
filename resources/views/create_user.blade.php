<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak2</title>
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

        /* Card Styles */
        .card {
            background-color: #1E1E1E; /* Dark card background */
            border-radius: 15px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.6); /* Soft shadow */
            padding: 30px;
            text-align: center;
            width: 350px;
            border: 2px solid #BB86FC; /* Purple border for elegance */
        }

        /* Avatar Image Styles */
        .card img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            margin-bottom: 20px;
            border: 4px solid #BB86FC; /* Purple border around avatar */
        }

        /* Info Box Styles */
        .info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333333; /* Darker background for info boxes */
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .info p {
            margin: 0;
            font-size: 18px;
        }

        /* Label Styles */
        .label {
            color: #BB86FC; /* Purple color for labels */
            font-weight: bold;
            flex: 1;
        }

        /* Value Styles */
        .value {
            flex: 2;
            text-align: left;
            color: #E0E0E0; /* Light grey color for values */
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

        form input[type="text"] {
            background-color: #333333; /* Dark input background */
            border: 1px solid #BB86FC; /* Purple border around input */
            border-radius: 8px;
            color: #E0E0E0; /* Light text color */
            padding: 10px;
            margin-bottom: 20px;
            font-size: 16px;
        }

        form input[type="submit"] {
            background-color: #BB86FC; /* Purple background for submit button */
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
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NPM:</td>
                <td><input type="text" name="npm"></td>
            </tr>
            <tr>
                <td>Kelas:</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

</body>
</html>
