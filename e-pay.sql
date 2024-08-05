-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2024 pada 10.12
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-pay`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminkeuangan`
--

CREATE TABLE `adminkeuangan` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `nama_user` text DEFAULT NULL,
  `adminkeuangan` varchar(100) NOT NULL,
  `pass_user` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `adminkeuangan`
--

INSERT INTO `adminkeuangan` (`user_id`, `nama_user`, `adminkeuangan`, `pass_user`, `created_at`, `update_at`) VALUES
(1, 'moch hilmy fawwaz', 'phawwas', 'd371c9f5b0b009b3c4d0a87479f55d3c', '2023-12-08 09:55:02', '2023-12-08 09:55:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminwemart`
--

CREATE TABLE `adminwemart` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `nama_user` text DEFAULT NULL,
  `adminwemart` varchar(100) NOT NULL,
  `pass_user` text DEFAULT NULL,
  `saldo` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `adminwemart`
--

INSERT INTO `adminwemart` (`user_id`, `nama_user`, `adminwemart`, `pass_user`, `saldo`, `created_at`, `update_at`) VALUES
(1, 'moch hilmy fawwazs', 'phawwas', '6d4effaf9a1cb6ed3062018cc666cbea', NULL, '2023-12-08 10:07:06', '2023-12-08 10:07:06'),
(5, 'ardhie', 'ardhie', '2f2be203e422cf65acc06ab7c236fcd1', NULL, '2023-12-20 22:24:00', '2023-12-20 22:24:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `historypembayaran`
--

CREATE TABLE `historypembayaran` (
  `pembayaran_id` int(11) UNSIGNED NOT NULL,
  `nama_siswa` text DEFAULT NULL,
  `nis_siswa` varchar(100) NOT NULL,
  `pin` text DEFAULT NULL,
  `saldo` text DEFAULT NULL,
  `created` date DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `historypembayaran`
--

INSERT INTO `historypembayaran` (`pembayaran_id`, `nama_siswa`, `nis_siswa`, `pin`, `saldo`, `created`, `created_at`, `update_at`) VALUES
(1, 'moch hilmy fawwaz', '1232213434', '19019946', '5000', '2023-12-29', '2023-12-29 14:51:00', '2023-12-29 14:51:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuanganmym`
--

CREATE TABLE `keuanganmym` (
  `pembayaran_id` int(11) UNSIGNED NOT NULL,
  `nama_siswa` text DEFAULT NULL,
  `nis_siswa` varchar(100) NOT NULL,
  `pin` text DEFAULT NULL,
  `saldo` text DEFAULT NULL,
  `created` date DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `keuanganmym`
--

INSERT INTO `keuanganmym` (`pembayaran_id`, `nama_siswa`, `nis_siswa`, `pin`, `saldo`, `created`, `created_at`, `update_at`) VALUES
(1, 'ardhie', '123321', '12321', '5000', '2023-12-31', '2023-12-31 22:48:29', '2023-12-31 22:48:29'),
(3, 'moch hilmy fawwaz', '1232213434', '19019946', '5000', '2024-01-01', '2024-01-01 12:17:32', '2024-01-01 12:17:32'),
(4, 'moch hilmy fawwaz', '1232213434', '19019946', '5000', '2024-01-01', '2024-01-01 12:22:36', '2024-01-01 12:22:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-12-07-033905', 'App\\Database\\Migrations\\Adminwemart', 'default', 'App', 1702001250, 1),
(2, '2023-12-07-033921', 'App\\Database\\Migrations\\Adminkeuangan', 'default', 'App', 1702001250, 1),
(3, '2023-12-07-063206', 'App\\Database\\Migrations\\Siswa', 'default', 'App', 1702001250, 1),
(4, '2023-12-12-020852', 'App\\Database\\Migrations\\Historipembelian', 'default', 'App', 1702347645, 2),
(5, '2023-12-14-074210', 'App\\Database\\Migrations\\Siswa', 'default', 'App', 1702539866, 3),
(6, '2023-12-14-074734', 'App\\Database\\Migrations\\Siswa', 'default', 'App', 1702540118, 4),
(7, '2023-12-22-082436', 'App\\Database\\Migrations\\Tanggal', 'default', 'App', 1703233591, 5),
(8, '2023-12-29-074319', 'App\\Database\\Migrations\\Siswa', 'default', 'App', 1703835841, 6),
(9, '2023-12-29-074745', 'App\\Database\\Migrations\\Datauang', 'default', 'App', 1703836219, 7),
(10, '2023-12-29-145742', 'App\\Database\\Migrations\\Percobaan', 'default', 'App', 1703862189, 8),
(11, '2023-12-31-145906', 'App\\Database\\Migrations\\Keuanganmym', 'default', 'App', 1704034967, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `percobaan`
--

CREATE TABLE `percobaan` (
  `pembayaran_id` int(11) UNSIGNED NOT NULL,
  `nama_siswa` text DEFAULT NULL,
  `nis_siswa` varchar(100) NOT NULL,
  `pin` text DEFAULT NULL,
  `saldo` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` int(11) UNSIGNED NOT NULL,
  `nama_siswa` text DEFAULT NULL,
  `nis_siswa` varchar(100) NOT NULL,
  `pass_siswa` text DEFAULT NULL,
  `pin` text DEFAULT NULL,
  `keterangan` enum('BLOKIR','ACTIVE') DEFAULT 'ACTIVE',
  `saldo` text DEFAULT NULL,
  `created` date DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`siswa_id`, `nama_siswa`, `nis_siswa`, `pass_siswa`, `pin`, `keterangan`, `saldo`, `created`, `created_at`, `update_at`) VALUES
(1, 'moch hilmy fawwaz', '1232213434', '97c7392c89b4e79fd8f247ac8acd5758', '19019946', 'ACTIVE', '85000', '2023-12-29', '2023-12-29 14:44:49', '2023-12-29 14:44:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggal`
--

CREATE TABLE `tanggal` (
  `tanggal_id` int(11) UNSIGNED NOT NULL,
  `tanggal` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tanggal`
--

INSERT INTO `tanggal` (`tanggal_id`, `tanggal`, `created_at`, `update_at`) VALUES
(3, 'DESEMBER', '2023-12-30 14:18:31', '2023-12-30 14:18:31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adminkeuangan`
--
ALTER TABLE `adminkeuangan`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `adminwemart`
--
ALTER TABLE `adminwemart`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `historypembayaran`
--
ALTER TABLE `historypembayaran`
  ADD PRIMARY KEY (`pembayaran_id`);

--
-- Indeks untuk tabel `keuanganmym`
--
ALTER TABLE `keuanganmym`
  ADD PRIMARY KEY (`pembayaran_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `percobaan`
--
ALTER TABLE `percobaan`
  ADD PRIMARY KEY (`pembayaran_id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indeks untuk tabel `tanggal`
--
ALTER TABLE `tanggal`
  ADD PRIMARY KEY (`tanggal_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adminkeuangan`
--
ALTER TABLE `adminkeuangan`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `adminwemart`
--
ALTER TABLE `adminwemart`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `historypembayaran`
--
ALTER TABLE `historypembayaran`
  MODIFY `pembayaran_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `keuanganmym`
--
ALTER TABLE `keuanganmym`
  MODIFY `pembayaran_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `percobaan`
--
ALTER TABLE `percobaan`
  MODIFY `pembayaran_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `siswa_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tanggal`
--
ALTER TABLE `tanggal`
  MODIFY `tanggal_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
