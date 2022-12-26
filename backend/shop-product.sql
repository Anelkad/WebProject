-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 05:59 PM
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
-- Table structure for table `shop-product`
--

CREATE TABLE `shop-product` (
  `id` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `description` text NOT NULL,
  `imageURL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop-product`
--

INSERT INTO `shop-product` (`id`, `categoryId`, `name`, `price`, `description`, `imageURL`) VALUES
(1, 3, 'Скейтборд ATEMI ASB31D02 мультиколор 31', 16700, 'тип: скейтборд; для детей: Да', 'https://resources.cdn-kaspi.kz/shop/medias/sys_master/images/images/h61/hc6/34286655864862/atemi-asb31d02-multikolor-31-101402600-1.jpg'),
(2, 3, 'Скейтборд ScooTer PB22SK4DBL синий 22', 7493, 'тип: пенниборд для детей: Да', 'https://resources.cdn-kaspi.kz/shop/medias/sys_master/images/images/hf8/h48/33472940408862/scooter-pb22sk4dbl-sinij-22-100962354-1.jpg'),
(3, 3, 'Скейтборд ScooTer PB22GMTR4PP сиреневый 22', 7990, 'тип: пенниборд для детей: Да', 'https://resources.cdn-kaspi.kz/shop/medias/sys_master/images/images/h64/h0c/33736436219934/scooter-pb22gmtr4pp-sirenevyj-22-101234149-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop-product`
--
ALTER TABLE `shop-product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop-product`
--
ALTER TABLE `shop-product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
