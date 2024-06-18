<?php
require_once 'Koneksi.php';

// Member functions
function insertMember($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
    $conn = getConnection();
    if ($conn) {
        $sql = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar]);
    }
}

function updateMember($id, $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
    $conn = getConnection();
    if ($conn) {
        $sql = "UPDATE member SET nama_member = ?, nomor_member = ?, alamat = ?, tgl_mendaftar = ?, tgl_terakhir_bayar = ? WHERE id_member = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar, $id]);
    }
}

function deleteMember($id) {
    $conn = getConnection();
    if ($conn) {
        $sql = "DELETE FROM member WHERE id_member = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
    }
}

function getMembers() {
    $conn = getConnection();
    if ($conn) {
        $sql = "SELECT * FROM member";
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return [];
}

// Book functions
function insertBook($judul, $penulis, $penerbit, $tahun_terbit) {
    $conn = getConnection();
    if ($conn) {
        $sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$judul, $penulis, $penerbit, $tahun_terbit]);
    }
}

function updateBook($id, $judul, $penulis, $penerbit, $tahun_terbit) {
    $conn = getConnection();
    if ($conn) {
        $sql = "UPDATE buku SET judul_buku = ?, penulis = ?, penerbit = ?, tahun_terbit = ? WHERE id_buku = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$judul, $penulis, $penerbit, $tahun_terbit, $id]);
    }
}

function deleteBook($id) {
    $conn = getConnection();
    if ($conn) {
        $sql = "DELETE FROM buku WHERE id_buku = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
    }
}

function getBooks() {
    $conn = getConnection();
    if ($conn) {
        $sql = "SELECT * FROM buku";
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return [];
}

// Borrow functions
function insertBorrow($id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $conn = getConnection();
    if ($conn) {
        $sql = "INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$id_member, $id_buku, $tgl_pinjam, $tgl_kembali]);
    }
    return false;
}

function updateBorrow($id, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $conn = getConnection();
    if ($conn) {
        $sql = "UPDATE peminjaman SET id_member = ?, id_buku = ?, tgl_pinjam = ?, tgl_kembali = ? WHERE id_peminjaman = ?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$id_member, $id_buku, $tgl_pinjam, $tgl_kembali, $id]);
    }
    return false;
}

function deleteBorrow($id) {
    $conn = getConnection();
    if ($conn) {
        $sql = "DELETE FROM peminjaman WHERE id_peminjaman = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
    }
}
function getBorrows() {
    $conn = getConnection();
    if ($conn) {
        $sql = "SELECT p.id_peminjaman, m.nama_member, b.judul_buku, p.tgl_pinjam, p.tgl_kembali
                FROM peminjaman p
                JOIN member m ON p.id_member = m.id_member
                JOIN buku b ON p.id_buku = b.id_buku";
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return [];
}
?>