-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb16.your-hosting.net
-- Generation Time: Feb 09, 2018 at 09:21 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2319775_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `ankete`
--

CREATE TABLE `ankete` (
  `id_ankete` int(10) NOT NULL,
  `pitanje` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `aktivna` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ankete`
--

INSERT INTO `ankete` (`id_ankete`, `pitanje`, `aktivna`) VALUES
(30, 'Da li vas je impresionirao sajt?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

CREATE TABLE `kontakt` (
  `id` int(5) NOT NULL,
  `ime_prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pitanje` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kontakt`
--

INSERT INTO `kontakt` (`id`, `ime_prezime`, `email`, `pitanje`) VALUES
(10, 'Isidora Nikolic', 'nikolic26.isidora@gmail.com', 'dadsadasd');

-- --------------------------------------------------------

--
-- Table structure for table `odgovori`
--

CREATE TABLE `odgovori` (
  `id_odgovori` int(10) NOT NULL,
  `id_ankete` int(10) NOT NULL,
  `odgovori` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `odgovori`
--

INSERT INTO `odgovori` (`id_odgovori`, `id_ankete`, `odgovori`) VALUES
(25, 30, 'da'),
(26, 30, 'ne'),
(50, 0, 'odg1'),
(51, 0, 'odg2'),
(53, 57, 'ne'),
(56, 57, 'ne'),
(57, 57, 'ne'),
(65, 31, 'da'),
(66, 31, 'ne'),
(67, 31, 'ne'),
(72, 57, 'ne'),
(73, 57, 'ne'),
(75, 33, 'naravno'),
(76, 57, 'onako'),
(77, 57, 'onako'),
(78, 33, 'onako'),
(79, 33, 'onako');

-- --------------------------------------------------------

--
-- Table structure for table `rezultat`
--

CREATE TABLE `rezultat` (
  `id_rezultat` int(10) NOT NULL,
  `id_ankete` int(10) NOT NULL,
  `id_odgovori` int(10) NOT NULL,
  `rezultat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rezultat`
--

INSERT INTO `rezultat` (`id_rezultat`, `id_ankete`, `id_odgovori`, `rezultat`) VALUES
(1, 31, 27, 1),
(2, 31, 28, 0),
(36, 33, 60, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slika`
--

CREATE TABLE `slika` (
  `slika_id` int(10) NOT NULL,
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `putanja` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slika`
--

INSERT INTO `slika` (`slika_id`, `ime`, `putanja`) VALUES
(4, 'prva', 'images/1.jpg'),
(5, 'druga', 'images/2.jpg'),
(6, 'treca', 'images/3.jpg'),
(7, 'cetvrta', 'images/4.jpg'),
(8, 'peta', 'images/5.jpg'),
(9, 'sesta', 'images/6.jpg'),
(10, 'sedma', 'images/7.jpg'),
(11, 'osma', 'images/8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `uloga` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `ime`, `prezime`, `email`, `uloga`) VALUES
(16, 'Isidoraaaaaa', 'hjvjhvjvj', 'Isidoraaaaaaaa', 'Isidoraaaaa', 'Isidora@gmaaaaaaail.com', 'korisnici'),
(33, 'administrator', 'administrator', '', '', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ankete`
--
ALTER TABLE `ankete`
  ADD PRIMARY KEY (`id_ankete`);

--
-- Indexes for table `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `odgovori`
--
ALTER TABLE `odgovori`
  ADD PRIMARY KEY (`id_odgovori`);

--
-- Indexes for table `rezultat`
--
ALTER TABLE `rezultat`
  ADD PRIMARY KEY (`id_rezultat`);

--
-- Indexes for table `slika`
--
ALTER TABLE `slika`
  ADD PRIMARY KEY (`slika_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ankete`
--
ALTER TABLE `ankete`
  MODIFY `id_ankete` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `odgovori`
--
ALTER TABLE `odgovori`
  MODIFY `id_odgovori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `rezultat`
--
ALTER TABLE `rezultat`
  MODIFY `id_rezultat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `slika`
--
ALTER TABLE `slika`
  MODIFY `slika_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
