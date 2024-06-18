-- Membuat database perpustakaan
CREATE DATABASE perpustakaan;

-- Menggunakan database perpustakaan
USE perpustakaan;

-- Membuat tabel Member
CREATE TABLE MEMBER (
    id_member INT AUTO_INCREMENT PRIMARY KEY,
    nama_member VARCHAR(250),
    nomor_member VARCHAR(15),
    alamat TEXT,
    tgl_mendaftar DATE,
    tgl_terakhir_bayar DATE
);

-- Membuat tabel Buku
CREATE TABLE buku (
    id_buku INT AUTO_INCREMENT PRIMARY KEY,
    judul_buku VARCHAR(500),
    penulis VARCHAR(500),
    penerbit VARCHAR(250),
    tahun_terbit INT
);

-- Membuat tabel Peminjaman
CREATE TABLE peminjaman (
    id_peminjaman INT AUTO_INCREMENT PRIMARY KEY,
    tgl_pinjam DATE,
    tgl_kembali DATE
);
