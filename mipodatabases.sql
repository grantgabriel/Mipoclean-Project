-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2023 pada 07.07
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mipodatabases`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`id`, `username`, `email`, `password`, `level`, `status`) VALUES
(1, 'Admin Web', 'adminmipo@gmail.com', '0623f8411ae2e1f67c641b4a697493a4', 3, ''),
(2, 'Cleaner', 'cleanermipo@gmail.com', 'a8f4404383593bc7186d1df4e7978934', 2, ''),
(3, 'Ironer', 'ironer@gmail.com', 'a8f4404383593bc7186d1df4e7978934', 2, ''),
(4, 'Doorsmeer', 'doorsmeer@gmail.com', 'a8f4404383593bc7186d1df4e7978934', 2, ''),
(5, 'Detailer', 'detailer@gmail.com', 'a8f4404383593bc7186d1df4e7978934', 2, ''),
(6, 'Window cleaner', 'windowcleaner@gmail.com', 'a8f4404383593bc7186d1df4e7978934', 2, ''),
(7, 'Launderer', 'laundrymipo@gmail.com', 'a8f4404383593bc7186d1df4e7978934', 2, ''),
(8, 'Bed Maker', 'bedmaker@gmail.com', 'a8f4404383593bc7186d1df4e7978934', 2, 'Banned!'),
(9, 'Gardener', 'gardener@gmail.com', 'a8f4404383593bc7186d1df4e7978934', 2, 'Banned!'),
(10, 'Dishwasher', 'dishwasher@gmail.com', 'a8f4404383593bc7186d1df4e7978934', 2, 'Banned!'),
(11, 'Mopper', 'moppermipo@gmail.com', 'a8f4404383593bc7186d1df4e7978934', 2, ''),
(24245, 'mamak', 'mamak@gmail.com', '1f058025e56e17a244362283b58a48fb', 1, 'Banned!'),
(24247, 'tasyaamelia', 'tasyaamelia@gmail.com', '1280e1a1c897c4e33b24f244121d415c', 1, 'Banned!'),
(24248, 'christyy', 'christyy@gmail.com', '925783e581f4ab1a8a45b9951120466b', 1, ''),
(24249, 'oswald', 'oswald@gmail.com', '30d901e9aea791e635c984a6291b70d5', 1, ''),
(24250, 'zetta', 'zetta@gmail.com', '7ac8712eccdcef3818d661bd287038e8', 1, ''),
(24251, 'zorro', 'zorro@gmail.com', '37a70993bae2f555da461ba7ea614eb2', 1, 'Banned!'),
(24252, 'moonlight', 'moonlight@gmail.com', '55f55cb70c1c9e9f841992337c0a2a16', 1, ''),
(24253, 'thoriq', 'thoriqganteng@gmail.com', 'ac43724f16e9241d990427ab7c8f4228', 1, ''),
(24254, 'nayaka', 'nayaka@gmail.com', '381d8af2b0857b6b7b87f6af2c1fa088', 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `phonenumber` text NOT NULL,
  `message` text NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phonenumber`, `message`, `status`) VALUES
(7, 'Grant tambunan', 'grantgabriel30@gmail.com', '1345', '123231', 'Finished'),
(9, 'Grant tambunan', 'grantgabriel30@gmail.com', '98765432', '9876543', 'Finished'),
(11, 'Grant tambunan', 'grantgabriel30@gmail.com', '98765432', '9876543', 'Finished'),
(15, 'Raden Khairu Wahyutama', 'radenkhairu@gmail.com', '08121212121212', 'wEBNYA KEREN BANGET UWU', 'Finished'),
(29, 'Patricia indry ely', 'patchi@gmail.com', '08909090909', 'Kereennn banget web nya uwau', 'Finished'),
(57, 'Grant tambunan', 'grantgabriel30@gmail.com', '020202020202', 'MINUMMMMMMMM', 'Finished'),
(62, 'Grant tambunan', 'grantgabriel30@gmail.com', '1234567890', 'BISMILLAH NILAI A', 'Finished'),
(63, 'Muhammad Thoriq Alasyjari', 'thoriqganteng@gmail.com', '081245789423', 'Keren banget webbbnya, servicenya pun mantap!!!', 'Finished'),
(64, 'Christysimar', 'emily@gmail.com', '0987654456', 'WEBBBB SANGAT KEREN OMG', ''),
(65, 'Alexander', 'ALDDFFDSF@GMAIL.COM', '09876544567', '123ERTYUJKLK', 'Finished'),
(66, 'Alek', 'ALDDFFDSF@GMAIL.COM', '08121212121212', 'ADA BUG DI PAGE ADMIN WOI KONTOL', 'Finished'),
(67, 'Alexander Brema Pindonta Sitep', 'alex@gmail.com', '081216831212', 'Awok', ''),
(68, 'Grant Gabriel Tambunan', 'grantgabriel30@gmail.com', '0823456789', 'Webbb nya keren banget omg pasti yg buat handsome', ''),
(69, 'Tasya Amelia', 'tasyaamelia@gmail.com', '08345678987', 'Kerennn, bismillah nilai A', ''),
(70, 'Christy simarmata', 'christyy@gmail.com', '9876543456', 'Mipoclean adalah website cleaning service terkeren di era reformasi!!!', ''),
(71, 'Sadtria Yudhoyono Prasetyo', 'sadtriayp@gmail.com', '09876543121', 'Stray kids keren bgttt stray kids pake mipo clean sejak 1945', ''),
(72, 'Muhammad Nayaka Putra', 'nayaka@gmail.com', '0987654345678', 'Kerennn banget CS nya mau main naruto sama saya\r\n', ''),
(73, 'Muhammad Thoriq Alasyjari', 'thoriqganteng@gmail.com', '0987456789', 'saya approve ini web, keren bgt, NILAI A', ''),
(74, 'Kak Rere', 'kakrere@gmail.com', '08xxxxxxxxxx', 'Keren banget webnya, pelayanannya pun ramah OMG', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `services` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `services`, `username`, `email`, `phonenumber`, `address`, `status`) VALUES
(1, 'Basic', 'Grant', 'grent@gmail.com', '081260588705', 'Jalan dwikora baru', 'Finished'),
(2, 'Standard', 'maureen', 'maureen@gmail.com', '08126549223', 'Jalan S Parman Depan stosa', 'Finished'),
(3, 'Premium', 'granteaaa', 'grantea@gmail.com', '08345678921', 'Jalan dr mansyur depan usu belok dikit', 'Finished'),
(4, 'Standard', 'reteff', 'reteff@gmail.com', '09567876544', 'Jalan bundaran HI, sedikit kotak', 'Processing'),
(5, 'Basic', 'sandhika galih', 'wpu@gmail.com', '0845678654', 'Jalan unpas tapi terbalik dikit, kode pos 696969', 'Finished'),
(6, 'Basic', 'FTSL ITB', 'itb@ac.id', '1200300400', 'Jalan bandung tapi kelaut dikit, belok kanan, depan rumah pa', 'Finished'),
(7, 'Premium', 'himatif', 'himatif@gmail.com', '074712882', 'Jalan gedung C lantai 2 dekat pendopo lurus dikit lompat bal', 'Finished'),
(8, 'Basic', 'itlgsquad', 'itlg@gmail.com', '0865445678', 'Jalan usu dekat FKG lapangan Fasilkom TI', 'Processing'),
(9, 'Premium', 'hengkeranonymus', 'hecker@gmail,com', '08XXXXXXXX', 'Jalan XXXXXXXX (HACKED OMG)', 'Processing'),
(11, 'Premium', 'cintakupadanya', 'lopelope@gmail.com', '08070707070', 'Jalan cintaku padanya tak akan pernah pudar UwU', 'Finished'),
(12, 'Basic', 'grantganteng', 'grantganteng@gmail.com', '0812571235', 'Jalan Grant Ganteng Bgt Kya >///<', 'Processing'),
(13, 'Basic', 'Christysimar', 'christyy@gmail.com', '09876543', 'Jalan teladan jauh lagi', 'Processing'),
(15, 'Premium', 'Patricia indry ely', 'patchi@gmail.com', '09876544567', 'Jalan s parman dekat stosa tapi jauh dari stoda', 'Processing'),
(16, 'Premium', 'Alexander', 'beecrosslynx@gmail.com', '', 'Jalan kaban jahe gulanya dikit aja', 'Processing'),
(17, 'Standard', 'Rere', 'kakrere@gmail.com', '', 'Jalan gedung c lantai dua lurus dikit jangan lupa lepas sepatu', 'Finished'),
(18, 'Basic', 'Patricia indry ely', 'grantgabriel30@gmail.com', '', 'Jalan dwikora baru no 19', 'Processing'),
(19, 'Premium', 'Grant Gabriel Tambunan', 'grantgabriel30@gmail.com', '', 'Jalan dwikora baru no 19', 'Processing'),
(20, 'Basic', 'Grant Gabriel Tambunan', 'grantgabriel30@gmail.com', '', 'Jalan dwikora baru no 19', 'Processing'),
(21, 'Basic', 'Grant tambunan', 'grantgabriel30@gmail.com', '', 'Jalan dwikora baru no 19', 'Processing'),
(22, 'Premium', 'Alexander Brema', 'beecrosslynx@gmail.com', '08123454312', 'Jalan kabanjahe pokoknya depan rumah alek lah', 'Processing'),
(23, 'Basic', 'Oswald ', 'oswald@gmail.com', '', 'Jalan rumah oswald', 'Finished'),
(24, 'Standard', 'Username', 'username@gmail.com', '08909090909', 'Jalan jalan ke kota madura', 'Processing'),
(27, 'Basic', 'Grant tambunan', 'grantgabriel30@gmail.com', '', 'Jalan dwikora baru no 19', 'Processing');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24255;

--
-- AUTO_INCREMENT untuk tabel `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
