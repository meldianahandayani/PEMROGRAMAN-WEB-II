<?php
require_once 'Koneksi.php';
require_once 'Model.php';
$id = isset($_POST['id']) ? $_POST['id'] : null;
$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$alamat = $_POST['alamat'];
$tgl_mendaftar = $_POST['tgl_mendaftar'];
$tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
if ($id) {
    updateMember($id, $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
} else {
    insertMember($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
}
header('Location: Member.php');
exit;
?>
