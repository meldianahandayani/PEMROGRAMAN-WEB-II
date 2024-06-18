<?php
require 'Model.php';
$borrow = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $borrows = getBorrows();
    foreach ($borrows as $b) {
        if ($b['id_peminjaman'] == $id) {
            $borrow = $b;
            break;
        }
    }
}
$books = getBooks();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman</title>
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
    <h1><?= $borrow ? 'Edit' : 'Tambah' ?> Peminjaman</h1>
    <form action="saveBorrow.php" method="post">
        <input type="hidden" name="id" value="<?= $borrow && isset($borrow['id_peminjaman']) ? htmlspecialchars($borrow['id_peminjaman']) : '' ?>">
        <label>ID Member:
            <input type="text" name="id_member" value="<?= $borrow && isset($borrow['id_member']) ? htmlspecialchars($borrow['id_member']) : '' ?>" required>
        </label>
        <label>ID Buku:
            <input type="text" name="id_buku" value="<?= $borrow && isset($borrow['id_buku']) ? htmlspecialchars($borrow['id_buku']) : '' ?>" required>
        </label>
        <label>Tanggal Pinjam:
            <input type="date" name="tgl_pinjam" value="<?= $borrow && isset($borrow['tgl_pinjam']) ? htmlspecialchars($borrow['tgl_pinjam']) : '' ?>" required>
        </label>
        <label>Tanggal Kembali:
            <input type="date" name="tgl_kembali" value="<?= $borrow && isset($borrow['tgl_kembali']) ? htmlspecialchars($borrow['tgl_kembali']) : '' ?>" required>
        </label>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
