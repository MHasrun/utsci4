<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            background-color: #ffffff;
            font-family: 'Merriweather', serif;
            text-align: center;
            padding-top: 50px;
            margin: 0 auto;
            color: #333;
            width: 60%; /* Menentukan lebar konten agar tidak terlalu lebar */
        }

        h1 {
            color: #2c3e50;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .btn {
            background-color: #2c3e50; 
            border: 2px solid #2c3e50;
            color: #ffffff;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #34495e;
            border-color: #34495e;
        }

        .btn-dosen {
            background-color: #2980b9;
            border-color: #2980b9;
        }

        .btn-dosen:hover {
            background-color: #3498db;
            border-color: #3498db;
        }

        .btn-petugas {
            background-color: #27ae60;
            border-color: #27ae60;
        }

        .btn-petugas:hover {
            background-color: #2ecc71;
            border-color: #2ecc71;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Selamat Datang di universitas tigaraksa</h1>
    <div class="container">
        <a href="<?= base_url('dosen') ?>" class="btn btn-dosen"> Dosen</a>
        <a href="<?= base_url('petugas') ?>" class="btn btn-petugas">staff</a>
    </div>
</body>
</html>
