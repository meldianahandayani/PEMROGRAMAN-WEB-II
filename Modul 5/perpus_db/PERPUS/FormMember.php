<?php
require 'Model.php';
$member = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $members = getMembers();
    foreach ($members as $m) {
        if ($m['id_member'] == $id) {
            $member = $m;
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Member</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
            font-size: 2em;
            margin-top: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            margin: 20px auto;
        }
        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"], input[type="date"], textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
            height: 100px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            margin-top: 20px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1><?= $member ? 'Edit' : 'Tambah' ?> Member</h1>
    <form action="saveMember.php" method="post">
        <input type="hidden" name="id" value="<?= $member ? htmlspecialchars($member['id_member']) : '' ?>">
        <label>Nama:
            <input type="text" name="nama" value="<?= $member ? htmlspecialchars($member['nama_member']) : '' ?>" required>
        </label>
        <label>Nomor:
            <input type="text" name="nomor" value="<?= $member ? htmlspecialchars($member['nomor_member']) : '' ?>" required>
        </label>
        <label>Alamat:
            <textarea name="alamat" required><?= $member ? htmlspecialchars($member['alamat']) : '' ?></textarea>
        </label>
        <label>Tanggal Mendaftar:
            <input type="date" name="tgl_mendaftar" value="<?= $member ? htmlspecialchars($member['tgl_mendaftar']) : '' ?>" required>
        </label>
        <label>Tanggal Terakhir Bayar:
            <input type="date" name="tgl_terakhir_bayar" value="<?= $member ? htmlspecialchars($member['tgl_terakhir_bayar']) : '' ?>" required>
        </label>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
