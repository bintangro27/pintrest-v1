-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2024 at 02:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foto`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `nama`, `gambar`, `deskripsi`) VALUES
(56, 'pemandangan', '670aaa5d0d094.jpg', 'pelangi yang indah'),
(57, 'mobil', '670aaaa9dbeb4.jpg', 'honda prelude'),
(58, 'kota', '670aaac143dab.jpg', 'pemandagan kota pada malam hari'),
(59, 'pemandangan', '670aaad84249f.jpg', 'pantai yang indah'),
(60, 'mobil', '670aaaf0c72d4.jpg', 'mazda rx-7\r\n'),
(61, 'hewan', '670aab08ad9ab.jpg', 'kucing yang sangat lucu'),
(62, 'gunung', '670aab253f314.jpg', 'gunung tertinggi didunia'),
(63, 'pemandangan', '670aab458bbbc.jpg', 'balon udara '),
(64, 'mobil', '670aab6e3f3a0.jpg', 'nissan skyline r-34\r\n'),
(65, 'hewan', '670aabb9791f9.jpg', 'kelinci kecil'),
(66, 'gunung', '670aac024f676.jpg', 'gunung yang sangat indah'),
(67, 'mobil', '670ab0d7ea794.jpg', 'rx7'),
(69, 'mobil', '670ab170971e4.jpg', 'toyota supra \r\n\r\n'),
(74, 'mobil', '670ab82df2599.jpg', 'gtr'),
(75, 'hewan', '670f86962849f.jpg', 'kucingggg'),
(76, 'komputer', '6713ddbb3b84e.jpg', 'setup gaming');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
