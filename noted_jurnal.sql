-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Jan 2024 pada 09.57
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noted_jurnal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `folder_referensi`
--

CREATE TABLE IF NOT EXISTS `folder_referensi` (
  `id_folder` int(11) NOT NULL,
  `nama_folder` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `folder_referensi`
--

INSERT INTO `folder_referensi` (`id_folder`, `nama_folder`) VALUES
(2, 'Wisata Bahari'),
(3, 'Referensi Daftar Pustaka'),
(4, 'Belajar Codeigniter 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `link_referensi`
--

CREATE TABLE IF NOT EXISTS `link_referensi` (
  `id_link` int(11) NOT NULL,
  `nama_artikel` varchar(255) NOT NULL,
  `link_artikel` varchar(500) NOT NULL,
  `kode_folder` varchar(120) NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `link_referensi`
--

INSERT INTO `link_referensi` (`id_link`, `nama_artikel`, `link_artikel`, `kode_folder`, `tgl_create`) VALUES
(1, 'Pengembangan Wisata Bahari Mangrove di Kota Surabaya Berdasarkan Tingkat Keberlanjutan', 'https://www.neliti.com/id/publications/510046/pengembangan-wisata-bahari-mangrove-di-kota-surabaya-berdasarkan-tingkat-keberla', '2', '2024-01-04'),
(2, 'Pengertian Pariwisata Menurut Para Ahli, Pahami Tujuan dan Manfaatnya', 'https://www.bola.com/ragam/read/5081289/pengertian-pariwisata-menurut-para-ahli-pahami-tujuan-dan-manfaatnya', '3', '2024-01-04'),
(3, 'Tutorial CRUD Sederhana Menggunakan Codeigniter 3', 'https://www.maribelajarcoding.com/2021/05/tutorial-crud-codeigniter-3-sederhana.html', 'Pilih Folder', '2024-01-04'),
(4, 'Scrollspy', 'https://getbootstrap.com/docs/5.0/components/scrollspy/', '4', '2024-01-04'),
(5, 'Pengertian Wisata Bahari', 'https://kumparan.com/jendela-dunia/pengertian-wisata-bahari-beserta-contohnya-di-indonesia-20EZ1lSfRO6', '2', '2024-01-06'),
(6, '', '', 'Pilih Folder', '2024-01-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek`
--

CREATE TABLE IF NOT EXISTS `proyek` (
  `id_proyek` int(11) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `deskripsi_proyek` text NOT NULL,
  `create_proyek` date NOT NULL,
  `deadline_proyek` varchar(100) NOT NULL,
  `target` int(11) NOT NULL,
  `status_proyek` varchar(25) NOT NULL,
  `tugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `target`
--

CREATE TABLE IF NOT EXISTS `target` (
  `id_target` int(11) NOT NULL,
  `nama_target` varchar(255) NOT NULL,
  `deskripsi_target` varchar(500) NOT NULL,
  `create_target` date NOT NULL,
  `pemilik` varchar(250) NOT NULL,
  `deadline_target` varchar(100) NOT NULL,
  `tugas` int(11) NOT NULL,
  `proyek` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `target`
--

INSERT INTO `target` (`id_target`, `nama_target`, `deskripsi_target`, `create_target`, `pemilik`, `deadline_target`, `tugas`, `proyek`) VALUES
(1, 'test target 1', '', '0000-00-00', 'chocobetter', '2024-01-31', 0, 0),
(2, 'Target test 2', '', '2024-01-09', 'chocomanis', '2024-01-13', 0, 0),
(3, 'Target test 3', '', '2024-01-09', 'testchoco', '2024-01-27', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE IF NOT EXISTS `tugas` (
  `id_tugas` int(11) NOT NULL,
  `nama_tugas` varchar(500) NOT NULL,
  `create_tugas` date NOT NULL,
  `deskripsi_tugas` text NOT NULL,
  `deadline_tugas` varchar(50) NOT NULL,
  `proyek` int(11) NOT NULL,
  `status_tugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk_user` varchar(1) NOT NULL,
  `level` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `image` varchar(128) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `email`, `jk_user`, `level`, `is_active`, `image`, `date_create`) VALUES
(1, 'administrasi', 'administrasi', 'P', 1, 0, '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_level`
--

CREATE TABLE IF NOT EXISTS `user_level` (
  `id` int(11) NOT NULL,
  `level` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_level`
--

INSERT INTO `user_level` (`id`, `level`) VALUES
(1, 'Administrasi'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `folder_referensi`
--
ALTER TABLE `folder_referensi`
  ADD PRIMARY KEY (`id_folder`);

--
-- Indexes for table `link_referensi`
--
ALTER TABLE `link_referensi`
  ADD PRIMARY KEY (`id_link`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indexes for table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`id_target`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `folder_referensi`
--
ALTER TABLE `folder_referensi`
  MODIFY `id_folder` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `link_referensi`
--
ALTER TABLE `link_referensi`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id_proyek` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `target`
--
ALTER TABLE `target`
  MODIFY `id_target` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
