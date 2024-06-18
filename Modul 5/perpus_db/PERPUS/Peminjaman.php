<?php
require_once 'Model.php';
$borrows = getBorrows();
$members = getMembers();
$books = getBooks(); 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteBorrow($id);
    header('Location: Peminjaman.php');
    exit;
}
$members = getMembers();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>
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
    <h1>Data Peminjaman</h1>
    <div class="container">
        <a href="FormPeminjaman.php" class="button">Tambah Peminjaman</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Member</th>
                <th>Nama Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($borrows as $borrow): ?>
                <tr>
                    <td><?= htmlspecialchars($borrow['id_peminjaman']) ?></td>
                    <td><?= htmlspecialchars($borrow['nama_member']) ?></td>
                    <td><?= htmlspecialchars($borrow['judul_buku']) ?></td>
                    <td><?= htmlspecialchars($borrow['tgl_pinjam']) ?></td>
                    <td><?= htmlspecialchars($borrow['tgl_kembali']) ?></td>
                    <td>
                        <div class="action-buttons">
                            <a href="FormPeminjaman.php?id=<?= htmlspecialchars($borrow['id_peminjaman']) ?>">Edit</a>
                            <a href="Peminjaman.php?id=<?= htmlspecialchars($borrow['id_peminjaman']) ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
