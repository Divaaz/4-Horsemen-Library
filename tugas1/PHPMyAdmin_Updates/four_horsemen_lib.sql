-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2023 pada 09.46
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `four_horsemen_lib`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(150) DEFAULT NULL,
  `pengarang` varchar(100) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `kelas_ddc` varchar(10) DEFAULT NULL,
  `isbn` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `pengarang`, `penerbit`, `tahun`, `kelas_ddc`, `isbn`) VALUES
(1, 'AKUNTANSI PENGANTAR 1', 'Supardi', 'Gava Media', 2009, NULL, '978-979-107-882-5'),
(2, 'Aplikasi Klinis Induk Ovulasi dan Stimulasi Ovariu ', 'Samsulhadi', 'Sagung Seto', 2013, NULL, '978-979-328-876-5'),
(3, 'Aplikasi Praktis Asuhan Keperawatan Keluarga', 'Komang Ayu Heni', 'Sagung Seto', 2012, NULL, '978-602-867-404-1'),
(4, 'A-Z Psikologi: Berbagai Kumpulan Topik Psikologi', 'Zainul Anwar', 'Andi Offset', 2012, NULL, '978-979-293-215-7'),
(5, 'Bangsa Gagal: Mencari Identitas kebangsaan', 'Nasruddin Anshoriy', 'LKiS ', 2008, NULL, '979-979-128-365-6'),
(6, 'Biografi Gus Dur: The Authorized Biography of Kh. Abdurrahman Wahid (Soft Cover)', 'Greg Barton', 'LKiS', 2011, NULL, '978-979-338-125-1'),
(7, 'Buku Ajar Tumbuh Kembang Remaja dan Permasalahannya', 'Soedjiningsih', 'Sagung Seto', 2004, NULL, '979-328-808-6'),
(8, 'Cendera Kepala', 'M.Z. Arifin', 'Sagung Seto', 2013, NULL, '978-602-867-497-3'),
(9, 'Dasar Dasar Uroginekologi', 'Pribagti B', 'Sagung Seto', 2011, NULL, '978-602-867-451-5'),
(10, 'Etnografi Pengobatan: Praktik Budaya Peramuan dan Sugesti Komunitas Adat Tau Taa Vana', 'Alie Humaedi ', 'LKiS', 2016, NULL, '978-602-728-136-3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_anggota`
--

CREATE TABLE `daftar_anggota` (
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar_anggota`
--

INSERT INTO `daftar_anggota` (`firstName`, `lastName`, `email`, `gender`) VALUES
('fitri', 'yulin', 'yulin@yulin.com', 'perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(11) NOT NULL,
  `id_mahasiswa` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `tgl_pinjam` datetime DEFAULT NULL,
  `tgl_kembali` datetime DEFAULT NULL,
  `denda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
