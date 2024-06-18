<?php
require 'Model.php';
if (
    isset($_POST['id_member']) &&
    isset($_POST['id_buku']) &&
    isset($_POST['tgl_pinjam']) &&
    isset($_POST['tgl_kembali'])
) {
    $idMember = $_POST['id_member'];
    $idBuku = $_POST['id_buku'];
    $tglPinjam = $_POST['tgl_pinjam'];
    $tglKembali = $_POST['tgl_kembali'];
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = $_POST['id'];
        $success = updateBorrow($id, $idMember, $idBuku, $tglPinjam, $tglKembali);
    } else {
        $success = insertBorrow($idMember, $idBuku, $tglPinjam, $tglKembali);
    }
    if ($success) {
        header('Location: Peminjaman.php');
        exit;
    } else {
        echo "Gagal menyimpan data peminjaman.";
    }
} else {
    echo "Data yang diterima tidak lengkap.";
}
?>
