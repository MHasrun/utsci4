<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Petugas</title>
    <style>
        body {
            background-color: #f0f0f0; /* Background color */
            color: #333; /* Text color */
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table {
            width: 80%; /* Adjusted table width */
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #999; /* Table border color */
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #4CAF50; /* Header background color */
            color: #fff; /* Header text color */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; /* Even row background color */
        }

        a {
            text-decoration: none;
            color: #007bff; /* Link color */
            margin-right: 10px;
        }

        .btn {
            background-color: #007bff; /* Button background color */
            color: #fff; /* Button text color */
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 10px;
            display: inline-block;
        }

        .btn:hover {
            background-color: #0056b3; /* Button hover background color */
        }
        
        .btnhome {
            background-color: #ffc107; /* Home button background color */
            color: #333; /* Home button text color */
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }
        
        .btnhome:hover {
            background-color: #e6ac00; /* Home button hover background color */
        }
    </style>
</head>
<body>
    <h1>List Petugas</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th> <!-- Changed to uppercase -->
                <th>Tugas</th> <!-- Changed to uppercase -->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($petugas as $item): ?>
            <tr>
                <td><?= $item['nama'] ?></td>
                <td><?= $item['jabatan'] ?></td>
                <td><?= $item['tugas'] ?></td>
                <td>
                    <a href="<?= base_url('petugas/edit/'.$item['id']) ?>">Edit</a>
                    <a href="<?= base_url('petugas/delete/'.$item['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="btn-container">
        <a href="<?= base_url('petugas/create') ?>" class="btn">Tambah Petugas</a><br>
        <!-- Button to go to Home page -->
        <a href="<?= base_url() ?>" class="btnhome">Home</a>
    </div>
</body>
</html>
