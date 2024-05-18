<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Dosen</title>
    <style>
        body {
            background-color: #F0FFFF;
            color: #000;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        h1 {
            margin-bottom: 30px;
            color: #1C1C1C; /* Dark text color */
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #000000;
            padding: 10px;
        }

        th {
            background-color: #FFD700; /* Bright yellow background */
            color: #1C1C1C; /* Dark text color */
        }

        tr:nth-child(even) {
            background-color: #FAFAD2; /* Light yellow background */
        }

        a {
            text-decoration: none;
            color: #000;
            margin-right: 10px;
        }

        .btn {
            background-color: #00FF7F; /* Bright green button */
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            color: #1C1C1C; /* Dark text color */
        }

        .btn:hover {
            background-color: #00FA9A; /* Light green button on hover */
        }

        .btnhome {
            background-color: #FF4500; /* Bright orange button */
            color: #1C1C1C; /* Dark text color */
        }

        .btnhome:hover {
            background-color: #FF6347; /* Light orange button on hover */
        }
    </style>
</head>
<body>
    <h1>List Dosen</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Bidang</th>
                <th>Tugas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dosen as $item): ?>
            <tr>
                <td><?= $item['nama'] ?></td>
                <td><?= $item['bidang'] ?></td>
                <td><?= $item['tugas'] ?></td>
                <td>
                    <a href="<?= base_url('dosen/edit/'.$item['id']) ?>">Edit</a>
                    <a href="<?= base_url('dosen/delete/'.$item['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= base_url('dosen/create') ?>" class="btn">Tambah Dosen</a><br>
    <a href="<?= base_url('index.php') ?>" class="btn btnhome">Home</a>
</body>
</html>
