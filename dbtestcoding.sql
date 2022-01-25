-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2022 pada 10.39
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtestcoding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `posisi` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_ktp` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `golongan_darah` varchar(2) NOT NULL,
  `status` varchar(128) NOT NULL,
  `alamat_ktp` varchar(128) NOT NULL,
  `alamat_tinggal` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_telp` varchar(128) NOT NULL,
  `orang_terdekat` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `skill` varchar(128) NOT NULL,
  `bersedia` tinyint(1) NOT NULL,
  `penghasilan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `posisi`, `nama`, `no_ktp`, `tempat_lahir`, `jenis_kelamin`, `agama`, `golongan_darah`, `status`, `alamat_ktp`, `alamat_tinggal`, `email`, `no_telp`, `orang_terdekat`, `tanggal_lahir`, `skill`, `bersedia`, `penghasilan`, `user_id`) VALUES
(0, 'asdasdawdawda', 'asdasd', '2342342342342342342', 'sdfsdfdf', 'Pilih Jenis Kelamin', 'Pilih Agama', 'Pi', 'asdasd', 'Jorong Baso, Tabek Panjang, Kecamatan Baso', 'Jorong Baso, Tabek Panjang, Kecamatan Baso', 'asd@gmail.com', '23423423423', 'sasdasd', '2022-01-16', 'asdasd', 0, 34000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `id_biodata` int(11) NOT NULL,
  `jenjang_pendidikan` varchar(128) NOT NULL,
  `nama_institusi` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `tahun_lulus` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `id_biodata`, `jenjang_pendidikan`, `nama_institusi`, `jurusan`, `tahun_lulus`) VALUES
(1, 0, 'S1', 'UPI', 'SI', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pekerjaan`
--

CREATE TABLE `riwayat_pekerjaan` (
  `id` int(11) NOT NULL,
  `id_biodata` int(11) NOT NULL,
  `nama_perusahaan` varchar(128) NOT NULL,
  `posisi_terakhir` varchar(128) NOT NULL,
  `pendapatan_terakhir` int(11) NOT NULL,
  `tahun` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_pekerjaan`
--

INSERT INTO `riwayat_pekerjaan` (`id`, `id_biodata`, `nama_perusahaan`, `posisi_terakhir`, `pendapatan_terakhir`, `tahun`) VALUES
(1, 0, 'awdaawdawd', 'awdaw', 245436, '2352'),
(2, 0, 'awdaawdawd', 'awdaw', 245436, '2352'),
(3, 0, 'awdaawdawd', 'awdaw', 245436, '2352'),
(4, 0, 'awdaawdawd', 'awdaw', 245436, '2352');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pelatihan`
--

CREATE TABLE `riwayat_pelatihan` (
  `id` int(11) NOT NULL,
  `id_biodata` int(11) NOT NULL,
  `nama_kursus` varchar(128) NOT NULL,
  `sertifikat` tinyint(1) NOT NULL,
  `tahun` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_pelatihan`
--

INSERT INTO `riwayat_pelatihan` (`id`, `id_biodata`, `nama_kursus`, `sertifikat`, `tahun`) VALUES
(0, 0, 'awdaw', 0, '1234'),
(0, 0, 'awdawdghfg', 0, '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `date_created`) VALUES
(1, 'Ilham', 'ilham@gmail.com', '$2y$10$GqJLFhVOMdoKuP35Vp3bhOSUIU0KrKIOSkXnXP80MlQbWSttOZzjO', 1, 1643095761),
(2, 'alhadi', 'alhadi@gmail.com', '$2y$10$zPcte70KL7/sLjfQ7FPbrOukm.dUjl9VYyK8ulM0BQZuFsrl3UsHi', 2, 1643096112);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
