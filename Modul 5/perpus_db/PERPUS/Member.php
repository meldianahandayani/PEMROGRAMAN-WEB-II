<?php
require_once 'Model.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteMember($id);
    header('Location: Member.php');
    exit;
}
$members = getMembers();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Member</title>
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
    <h1>Data Member</h1>
    <div class="container">
        <a href="FormMember.php" class="button">Tambah Member</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Alamat</th>
                <th>Tanggal Mendaftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($members as $member): ?>
            <tr>
                <td><?= htmlspecialchars($member['id_member']) ?></td>
                <td><?= htmlspecialchars($member['nama_member']) ?></td>
                <td><?= htmlspecialchars($member['nomor_member']) ?></td>
                <td><?= htmlspecialchars($member['alamat']) ?></td>
                <td><?= htmlspecialchars($member['tgl_mendaftar']) ?></td>
                <td><?= htmlspecialchars($member['tgl_terakhir_bayar']) ?></td>
                <td>
                    <div class="action-buttons">
                        <a href="FormMember.php?id=<?= htmlspecialchars($member['id_member']) ?>">Edit</a>
                        <a href="Member.php?id=<?= htmlspecialchars($member['id_member']) ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
