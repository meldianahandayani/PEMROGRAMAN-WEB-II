<?php
require_once 'Model.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteBook($id);
    header('Location: Buku.php');
    exit;
}
$books = getBooks();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
            font-size: 2.5em;
            margin-top: 20px;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .button {
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            padding: 10px 20px;
            margin: 20px 0;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .action-buttons a {
            padding: 5px 10px;
            border: 1px solid #4CAF50;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .action-buttons a:hover {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Data Buku</h1>
    <div class="container">
        <a href="FormBuku.php" class="button">Tambah Buku</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($books as $book): ?>
            <tr>
                <td><?= htmlspecialchars($book['id_buku']) ?></td>
                <td><?= htmlspecialchars($book['judul_buku']) ?></td>
                <td><?= htmlspecialchars($book['penulis']) ?></td>
                <td><?= htmlspecialchars($book['penerbit']) ?></td>
                <td><?= htmlspecialchars($book['tahun_terbit']) ?></td>
                <td>
                    <div class="action-buttons">
                        <a href="FormBuku.php?id=<?= htmlspecialchars($book['id_buku']) ?>">Edit</a>
                        <a href="Buku.php?id=<?= htmlspecialchars($book['id_buku']) ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>