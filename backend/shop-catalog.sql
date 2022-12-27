-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 09:30 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop-catalog`
--

CREATE TABLE `shop-catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `imageURL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop-catalog`
--

INSERT INTO `shop-catalog` (`id`, `name`, `imageURL`) VALUES
(1, 'Спорт,туризм', 'catalog-sport,turism.png'),
(2, 'Красота и здоровье', 'catalog-beauty,healthy.webp'),
(3, 'Автотовары', 'catalog-autotovary.png'),
(4, 'Детские товары', 'catalog-detckiye_tovary.png'),
(5, 'Компьютеры', 'catalog-computers.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop-catalog`
--
ALTER TABLE `shop-catalog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop-catalog`
--
ALTER TABLE `shop-catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
