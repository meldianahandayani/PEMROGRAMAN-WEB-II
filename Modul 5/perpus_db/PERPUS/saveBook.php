<?php
require_once 'Model.php';
$id = isset($_POST['id']) ? $_POST['id'] : null;
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
if ($id) {
    updateBook($id, $judul, $penulis, $penerbit, $tahun_terbit);
} else {
    insertBook($judul, $penulis, $penerbit, $tahun_terbit);
}
header('Location: Buku.php');
exit;
?>
