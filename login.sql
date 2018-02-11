-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2018 at 11:52 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
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
(30, 'Da li vas je impresionirao sajt?', 0),
(31, 'Pozz', 1),
(32, 'Pozz', 0),
(33, 'a', 0),
(34, 'a', 0),
(35, 'a', 0),
(36, 'a', 0),
(37, 'a', 0),
(38, 'a', 0),
(39, 'a', 0),
(40, 'a', 0),
(41, 'a', 0),
(42, 'a', 0),
(43, 'a', 0),
(44, 'a', 0),
(45, 'a', 0),
(46, 'a', 0),
(47, 'a', 0),
(48, 'a', 0),
(49, 'a', 0),
(50, 'a', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact_location` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_phone` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contact_location`, `contact_phone`, `contact_email`) VALUES
(1, 'Milosa Obilica 14, Nova Pazova', '+381 69 563 64 15', 'isidora.nikolic.167.15@ict.edu.rs');

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
(79, 33, 'onako'),
(80, 31, 'jeste'),
(81, 31, 'jeste'),
(82, 33, 'a'),
(83, 33, 'a'),
(84, 33, 'a'),
(85, 33, 'a'),
(86, 33, 'a'),
(87, 33, 'a'),
(88, 33, 'a'),
(89, 33, 'a'),
(90, 33, 'a'),
(91, 33, 'a'),
(92, 33, 'a'),
(93, 33, 'a'),
(94, 33, 'a'),
(95, 33, 'a'),
(96, 33, 'a'),
(97, 33, 'a'),
(98, 33, 'a'),
(99, 33, 'a');

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
(36, 33, 60, 0),
(37, 31, 80, 1),
(38, 31, 80, 1),
(39, 33, 82, 0),
(40, 33, 82, 0),
(41, 33, 82, 0),
(42, 33, 82, 0),
(43, 33, 82, 0),
(44, 33, 82, 0),
(45, 33, 82, 0),
(46, 33, 82, 0),
(47, 33, 82, 0),
(48, 33, 82, 0),
(49, 33, 82, 0),
(50, 33, 82, 0),
(51, 33, 82, 0),
(52, 33, 82, 0),
(53, 33, 82, 0),
(54, 33, 82, 0),
(55, 33, 82, 0),
(56, 33, 82, 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_text`
--

CREATE TABLE `site_text` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_text`
--

INSERT INTO `site_text` (`id`, `text`) VALUES
(1, 'Hi, My Name Is Isidora And I Am Future Freelance Front-End Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_image` text COLLATE utf8_unicode_ci NOT NULL,
  `skill_heading` text COLLATE utf8_unicode_ci NOT NULL,
  `skill_text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_image`, `skill_heading`, `skill_text`) VALUES
(1, 'img/design.svg', 'web design', 'From simple wireframes through to creating a modern fresh website design reflecting your brand, I can help.'),
(2, 'img/development.svg', 'web development', 'From basic scratch through to creating a mock up high-level prototyping. I can bring your design to life!'),
(3, 'img/photography.svg', 'photography', 'From eye to frame. Every photo that needs to be on website is not a problem. I convert 3D world to 2D picture in a snap.');

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
(4, 'prva', 'img/gal1.jpg'),
(5, 'druga', 'img/gal2.jpg'),
(6, 'treca', 'img/gal3.jpg'),
(7, 'cetvrta', 'img/gal4.jpg');

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
(33, 'administrator', 'administrator', '', '', '', 'admin'),
(35, 'beki', 'beki', 'Aleksandar', 'Beronja', 'bexaca@gmail.com', 'korisnici');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ankete`
--
ALTER TABLE `ankete`
  ADD PRIMARY KEY (`id_ankete`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `site_text`
--
ALTER TABLE `site_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_ankete` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `odgovori`
--
ALTER TABLE `odgovori`
  MODIFY `id_odgovori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `rezultat`
--
ALTER TABLE `rezultat`
  MODIFY `id_rezultat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `site_text`
--
ALTER TABLE `site_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slika`
--
ALTER TABLE `slika`
  MODIFY `slika_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
