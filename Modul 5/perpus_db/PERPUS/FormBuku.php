<?php
require 'Model.php';
$book = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $books = getBooks();
    foreach ($books as $b) {
        if ($b['id_buku'] == $id) {
            $book = $b;
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Buku</title>
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
        input[type="text"], input[type="number"], textarea {
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
    <h1><?= $book ? 'Edit' : 'Tambah' ?> Buku</h1>
    <form action="saveBook.php" method="post">
        <input type="hidden" name="id" value="<?= $book ? htmlspecialchars($book['id_buku']) : '' ?>">
        <label>Judul:
            <input type="text" name="judul" value="<?= $book ? htmlspecialchars($book['judul_buku']) : '' ?>" required>
        </label>
        <label>Penulis:
            <input type="text" name="penulis" value="<?= $book ? htmlspecialchars($book['penulis']) : '' ?>" required>
        </label>
        <label>Penerbit:
            <input type="text" name="penerbit" value="<?= $book ? htmlspecialchars($book['penerbit']) : '' ?>" required>
        </label>
        <label>Tahun Terbit:
            <input type="number" name="tahun_terbit" value="<?= $book ? htmlspecialchars($book['tahun_terbit']) : '' ?>" required>
        </label>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
