-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2023 pada 00.56
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seafood_lombok`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('ahmadsatriadimm93@gmail.com', '$2y$10$lyiArcl9kPpYi.qAv/4eFu8jo5nYo0uRHw51kac0yGDVISyNUTEJ2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kepiting`
--

CREATE TABLE `data_kepiting` (
  `id` int(10) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `x1` int(10) NOT NULL,
  `x2` int(10) NOT NULL,
  `y` int(10) NOT NULL,
  `x1_2` int(10) NOT NULL,
  `x2_2` int(10) NOT NULL,
  `y_2` int(10) NOT NULL,
  `x1y` int(10) NOT NULL,
  `x2y` int(10) NOT NULL,
  `x1x2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_kepiting`
--

INSERT INTO `data_kepiting` (`id`, `bulan`, `x1`, `x2`, `y`, `x1_2`, `x2_2`, `y_2`, `x1y`, `x2y`, `x1x2`) VALUES
(27, 'Januari', 1, 1, 470, 1, 1, 220900, 470, 470, 1),
(28, 'Februari', 2, 2, 480, 4, 4, 230400, 960, 960, 4),
(29, 'Maret', 3, 1, 430, 9, 1, 184900, 1290, 430, 3),
(30, 'April', 4, 1, 460, 16, 1, 211600, 1840, 460, 4),
(31, 'Mei', 5, 1, 510, 25, 1, 260100, 2550, 510, 5),
(32, 'Juni', 6, 1, 490, 36, 1, 240100, 2940, 490, 6),
(33, 'Juli', 7, 1, 490, 49, 1, 240100, 3430, 490, 7),
(34, 'Agustus', 8, 2, 530, 64, 4, 280900, 4240, 1060, 16),
(35, 'September', 9, 1, 520, 81, 1, 270400, 4680, 520, 9),
(36, 'Oktober', 10, 1, 490, 100, 1, 240100, 4900, 490, 10),
(37, 'November', 11, 1, 440, 121, 1, 193600, 4840, 440, 11),
(38, 'Desember', 12, 1, 440, 144, 1, 193600, 5280, 440, 12),
(39, 'Januari', 13, 1, 440, 169, 1, 193600, 5720, 440, 13),
(40, 'Februari', 14, 1, 440, 196, 1, 193600, 6160, 440, 14),
(41, 'Maret', 15, 1, 430, 225, 1, 184900, 6450, 430, 15),
(42, 'April', 16, 1, 450, 256, 1, 202500, 7200, 450, 16),
(43, 'Mei', 17, 1, 460, 289, 1, 211600, 7820, 460, 17),
(44, 'Juni', 18, 1, 430, 324, 1, 184900, 7740, 430, 18),
(45, 'Juli', 19, 1, 550, 361, 1, 302500, 10450, 550, 19),
(46, 'Agustus', 20, 2, 570, 400, 4, 324900, 11400, 1140, 40),
(47, 'September', 21, 1, 500, 441, 1, 250000, 10500, 500, 21),
(48, 'Oktober', 22, 1, 500, 484, 1, 250000, 11000, 500, 22),
(49, 'November', 23, 1, 480, 529, 1, 230400, 11040, 480, 23),
(50, 'Desember', 24, 1, 490, 576, 1, 240100, 11760, 490, 24),
(51, 'Januari', 25, 1, 560, 625, 1, 313600, 14000, 560, 25),
(52, 'Februari', 26, 2, 650, 676, 4, 422500, 16900, 1300, 52),
(53, 'Maret', 27, 1, 450, 729, 1, 202500, 12150, 450, 27),
(54, 'April', 28, 1, 470, 784, 1, 220900, 13160, 470, 28),
(55, 'Mei', 29, 1, 460, 841, 1, 211600, 13340, 460, 29),
(56, 'Juni', 30, 1, 450, 900, 1, 202500, 13500, 450, 30),
(57, 'Juli', 31, 1, 470, 961, 1, 220900, 14570, 470, 31),
(58, 'Agustus', 32, 2, 690, 1024, 4, 476100, 22080, 1380, 64),
(59, 'September', 33, 1, 600, 1089, 1, 360000, 19800, 600, 33),
(60, 'Oktober', 34, 1, 600, 1156, 1, 360000, 20400, 600, 34),
(61, 'November', 35, 1, 620, 1225, 1, 384400, 21700, 620, 35),
(62, 'Desember', 36, 2, 690, 1296, 4, 476100, 24840, 1380, 72),
(63, 'Januari', 37, 2, 650, 1369, 4, 422500, 24050, 1300, 74),
(64, 'Februari', 38, 1, 510, 1444, 1, 260100, 19380, 510, 38),
(65, 'Maret', 39, 1, 510, 1521, 1, 260100, 19890, 510, 39),
(66, 'April', 40, 1, 520, 1600, 1, 270400, 20800, 520, 40),
(67, 'Mei', 41, 1, 510, 1681, 1, 260100, 20910, 510, 41),
(68, 'Juni', 42, 1, 530, 1764, 1, 280900, 22260, 530, 42),
(69, 'Juli', 43, 1, 570, 1849, 1, 324900, 24510, 570, 43),
(70, 'Agustus', 44, 2, 650, 1936, 4, 422500, 28600, 1300, 88),
(71, 'September', 45, 1, 560, 2025, 1, 313600, 25200, 560, 45),
(72, 'Oktober', 46, 1, 570, 2116, 1, 324900, 26220, 570, 46),
(73, 'November', 47, 1, 600, 2209, 1, 360000, 28200, 600, 47),
(74, 'Desember', 48, 2, 670, 2304, 4, 448900, 32160, 1340, 96),
(75, 'Januari', 49, 2, 600, 2401, 4, 360000, 29400, 1200, 98),
(76, 'Februari', 50, 1, 520, 2500, 1, 270400, 26000, 520, 50),
(77, 'Maret', 51, 1, 570, 2601, 1, 324900, 29070, 570, 51),
(78, 'April', 52, 1, 570, 2704, 1, 324900, 29640, 570, 52),
(79, 'Mei', 53, 1, 560, 2809, 1, 313600, 29680, 560, 53),
(80, 'Juni', 54, 1, 600, 2916, 1, 360000, 32400, 600, 54),
(81, 'Juli', 55, 1, 610, 3025, 1, 372100, 33550, 610, 55),
(82, 'Agustus', 56, 2, 700, 3136, 4, 490000, 39200, 1400, 112),
(83, 'September', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 'Oktober', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 'November', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 'Desember', 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Trigger `data_kepiting`
--
DELIMITER $$
CREATE TRIGGER `calculate_kepiting` BEFORE INSERT ON `data_kepiting` FOR EACH ROW BEGIN
    SET NEW.x1_2 = NEW.x1 * NEW.x1;
    SET NEW.x2_2 = NEW.x2 * NEW.x2;
    SET NEW.y_2 = NEW.y * NEW.y;
    SET NEW.x1y = NEW.x1 * NEW.y;
    SET NEW.x2y = NEW.x2 * NEW.y;
    SET NEW.x1x2 = NEW.x1 * NEW.x2;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `calculate_update_kepiting` BEFORE UPDATE ON `data_kepiting` FOR EACH ROW BEGIN
    SET NEW.x1_2 = NEW.x1 * NEW.x1;
    SET NEW.x2_2 = NEW.x2 * NEW.x2;
    SET NEW.y_2 = NEW.y * NEW.y;
    SET NEW.x1y = NEW.x1 * NEW.y;
    SET NEW.x2y = NEW.x2 * NEW.y;
    SET NEW.x1x2 = NEW.x1 * NEW.x2;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_lobster`
--

CREATE TABLE `data_lobster` (
  `id` int(10) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `x1` int(10) NOT NULL,
  `x2` int(10) NOT NULL,
  `y` int(10) NOT NULL,
  `x1_2` int(10) NOT NULL,
  `x2_2` int(10) NOT NULL,
  `y_2` int(10) NOT NULL,
  `x1y` int(10) NOT NULL,
  `x2y` int(10) NOT NULL,
  `x1x2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_lobster`
--

INSERT INTO `data_lobster` (`id`, `bulan`, `x1`, `x2`, `y`, `x1_2`, `x2_2`, `y_2`, `x1y`, `x2y`, `x1x2`) VALUES
(23, 'mei', 2, 2, 454, 4, 4, 206116, 908, 908, 4),
(25, 'mei', 2, 2, 600, 4, 4, 360000, 1200, 1200, 4),
(26, 'mei', 4, 2, 660, 16, 4, 435600, 2640, 1320, 8);

--
-- Trigger `data_lobster`
--
DELIMITER $$
CREATE TRIGGER `calculate_lobster` BEFORE INSERT ON `data_lobster` FOR EACH ROW BEGIN
    SET NEW.x1_2 = NEW.x1 * NEW.x1;
    SET NEW.x2_2 = NEW.x2 * NEW.x2;
    SET NEW.y_2 = NEW.y * NEW.y;
    SET NEW.x1y = NEW.x1 * NEW.y;
    SET NEW.x2y = NEW.x2 * NEW.y;
    SET NEW.x1x2 = NEW.x1 * NEW.x2;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `calculate_update_lobster` BEFORE UPDATE ON `data_lobster` FOR EACH ROW BEGIN
    SET NEW.x1_2 = NEW.x1 * NEW.x1;
    SET NEW.x2_2 = NEW.x2 * NEW.x2;
    SET NEW.y_2 = NEW.y * NEW.y;
    SET NEW.x1y = NEW.x1 * NEW.y;
    SET NEW.x2y = NEW.x2 * NEW.y;
    SET NEW.x1x2 = NEW.x1 * NEW.x2;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_rumput_laut`
--

CREATE TABLE `data_rumput_laut` (
  `id` int(10) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `x1` int(10) NOT NULL,
  `x2` int(10) NOT NULL,
  `y` int(10) NOT NULL,
  `x1_2` int(10) NOT NULL,
  `x2_2` int(10) NOT NULL,
  `y_2` int(10) NOT NULL,
  `x1y` int(10) NOT NULL,
  `x2y` int(10) NOT NULL,
  `x1x2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_rumput_laut`
--

INSERT INTO `data_rumput_laut` (`id`, `bulan`, `x1`, `x2`, `y`, `x1_2`, `x2_2`, `y_2`, `x1y`, `x2y`, `x1x2`) VALUES
(51, 'mei', 3, 1, 455, 9, 1, 207025, 1365, 455, 3);

--
-- Trigger `data_rumput_laut`
--
DELIMITER $$
CREATE TRIGGER `calculate_rumput_laut` BEFORE INSERT ON `data_rumput_laut` FOR EACH ROW BEGIN
    SET NEW.x1_2 = NEW.x1 * NEW.x1;
    SET NEW.x2_2 = NEW.x2 * NEW.x2;
    SET NEW.y_2 = NEW.y * NEW.y;
    SET NEW.x1y = NEW.x1 * NEW.y;
    SET NEW.x2y = NEW.x2 * NEW.y;
    SET NEW.x1x2 = NEW.x1 * NEW.x2;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `calculate_update_rumput_laut` BEFORE INSERT ON `data_rumput_laut` FOR EACH ROW BEGIN
    SET NEW.x1_2 = NEW.x1 * NEW.x1;
    SET NEW.x2_2 = NEW.x2 * NEW.x2;
    SET NEW.y_2 = NEW.y * NEW.y;
    SET NEW.x1y = NEW.x1 * NEW.y;
    SET NEW.x2y = NEW.x2 * NEW.y;
    SET NEW.x1x2 = NEW.x1 * NEW.x2;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `excerpt` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `img`, `title`, `excerpt`, `description`) VALUES
(10, '../Assets/img/news_lobster.png', '171 countries accept fishery products, export expected to rise', 'The global aquaculture industry is booming, driven by some of the world’s largest seafood producin', 'The global aquaculture industry is booming, driven by some of the world’s largest seafood producing countries, largest seafood exporters and importers. Today, the global aquaculture consists of variety of seafood farming, including fish, aquatic plants, algae, crustaceans, molluscs, and other organisms. The rising awareness about the nutrition content of aquaculture products around the world is of the key factors fuelling the market’s growth over the recent years. Scientific research shows that the consumption of aquaculture products that are rich in nutrients prevent as well as alleviate a plethora of diseases while playing a key role in brain development and reproduction. Such advantage is expected to thrive the demand for aquaculture products such as shrimps and salmon, as a result, driving the global aquaculture market growth and also increase the aquaculture market revenue.'),
(12, '../Assets/img/beritanews_crab.png', 'Indonesian Fishery Products In Asean And Canadian Markets', 'The global aquaculture industry is booming, driven by some of the world’s largest seafood producin', 'The global aquaculture industry is booming, driven by some of the world’s largest seafood producing countries, largest seafood exporters and importers. Today, the global aquaculture consists of variety of seafood farming, including fish, aquatic plants, algae, crustaceans, molluscs, and other organisms. The rising awareness about the nutrition content of aquaculture products around the world is of the key factors fuelling the market’s growth over the recent years. Scientific research shows that the consumption of aquaculture products that are rich in nutrients prevent as well as alleviate a plethora of diseases while playing a key role in brain development and reproduction. Such advantage is expected to thrive the demand for aquaculture products such as shrimps and salmon, as a result, driving the global aquaculture market growth and also increase the aquaculture market revenue'),
(13, '../Assets/img/beritanews1_fish.png', 'The three most popular Indonesian fish in the world', 'The global aquaculture industry is booming, driven by some of the world’s largest seafood producin', 'The global aquaculture industry is booming, driven by some of the world’s largest seafood producing countries, largest seafood exporters and importers. Today, the global aquaculture consists of variety of seafood farming, including fish, aquatic plants, algae, crustaceans, molluscs, and other organisms. The rising awareness about the nutrition content of aquaculture products around the world is of the key factors fuelling the market’s growth over the recent years. Scientific research shows that the consumption of aquaculture products that are rich in nutrients prevent as well as alleviate a plethora of diseases while playing a key role in brain development and reproduction. Such advantage is expected to thrive the demand for aquaculture products such as shrimps and salmon, as a result, driving the global aquaculture market growth and also increase the aquaculture market revenue.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perhitungan`
--

CREATE TABLE `perhitungan` (
  `id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `a_lobster` double(10,10) NOT NULL,
  `b1_lobster` int(11) NOT NULL,
  `b2_lobster` double(10,10) NOT NULL,
  `x1_lobster` int(5) NOT NULL,
  `x2_lobster` int(5) NOT NULL,
  `hasil_lobster` double(8,4) NOT NULL,
  `a_kepiting` double(10,10) NOT NULL,
  `b1_kepiting` int(11) NOT NULL,
  `b2_kepiting` double(10,10) NOT NULL,
  `x1_kepiting` int(5) NOT NULL,
  `x2_kepiting` int(5) NOT NULL,
  `hasil_kepiting` decimal(8,4) NOT NULL,
  `a_rumput_laut` double(10,10) NOT NULL,
  `b1_rumput_laut` int(11) NOT NULL,
  `b2_rumput_laut` double(10,10) NOT NULL,
  `x1_rumput_laut` int(5) NOT NULL,
  `x2_rumput_laut` int(5) NOT NULL,
  `hasil_rumput_laut` double(8,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `perhitungan`
--

INSERT INTO `perhitungan` (`id`, `status`, `a_lobster`, `b1_lobster`, `b2_lobster`, `x1_lobster`, `x2_lobster`, `hasil_lobster`, `a_kepiting`, `b1_kepiting`, `b2_kepiting`, `x1_kepiting`, `x2_kepiting`, `hasil_kepiting`, `a_rumput_laut`, `b1_rumput_laut`, `b2_rumput_laut`, `x1_rumput_laut`, `x2_rumput_laut`, `hasil_rumput_laut`) VALUES
(1, 'custom', -0.9999999999, 1479, -0.9999999999, 5, 1, 4440.0000, 0.0000000000, 0, 0.0000000000, 2, 1, 441.0595, -0.9999999999, 268, -0.9999999999, 36, 5, 9226.0000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `section` varchar(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `calories` varchar(10) NOT NULL,
  `total_fat` varchar(10) NOT NULL,
  `sodium` varchar(10) NOT NULL,
  `protein` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `prediksi_harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`section`, `img`, `title`, `description`, `calories`, `total_fat`, `sodium`, `protein`, `price`, `prediksi_harga`) VALUES
('kepiting', '../Assets/img/postproduct1.png', 'Crab Meat', 'indonesia blue swimming crab (Portunus pelagicus) is one of the country’s most important marine resources, supporting an estimated 90,000 fishermen and contributing to the welfare of an estimated 185,000 women nationwide. International consumer demand for sustainable seafood from Indonesia, especially crab meat, is supporting conservation efforts and providing livelihood opportunities for local communities.', '   55 ', '0.4g', '5.3mg', '0.3g', '$55/Kg', '$55/Kg'),
('lobster', '../Assets/img/postproduct1.png', 'judul lobster', 'Indonesian blue swimming crab (Portunus pelagicus) is one of the country’s most important marine resources, supporting an estimated 90,000 fishermen and contributing to the welfare of an estimated 185,000 women nationwide. International consumer demand for sustainable seafood from Indonesia, especially crab meat, is supporting conservation efforts and providing livelihood opportunities for local communities.', '55', '0.4g', '5.3mg', '0.3g', '$55/Kg', '$55/Kg'),
('rumput laut', '../Assets/img/postproduct1.png', 'judul rumput laut', 'indonesian blue swimming crab (Portunus pelagicus) is one of the country’s most important marine resources, supporting an estimated 90,000 fishermen and contributing to the welfare of an estimated 185,000 women nationwide. International consumer demand for sustainable seafood from Indonesia, especially crab meat, is supporting conservation efforts and providing livelihood opportunities for local communities.', '55', '0.4g', '5.3mg', '0.3g', '$55/Kg', '$55/Kg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `data_kepiting`
--
ALTER TABLE `data_kepiting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_lobster`
--
ALTER TABLE `data_lobster`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_rumput_laut`
--
ALTER TABLE `data_rumput_laut`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`section`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kepiting`
--
ALTER TABLE `data_kepiting`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `data_lobster`
--
ALTER TABLE `data_lobster`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `data_rumput_laut`
--
ALTER TABLE `data_rumput_laut`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `perhitungan`
--
ALTER TABLE `perhitungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
