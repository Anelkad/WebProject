-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 08:51 AM
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
-- Table structure for table `shop-feedback`
--

CREATE TABLE `shop-feedback` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `rating` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop-feedback`
--

INSERT INTO `shop-feedback` (`id`, `productId`, `userName`, `content`, `rating`) VALUES
(1, 1, 'Аружан', 'Классный скейтборд! Ребенок доволен!!!', 5),
(2, 8, 'Анна', 'Очень классный велосипед! Брали на возраст 6 лет. Подойдёт на рост 115+. Красивый и удобный.', 5),
(3, 6, 'Жанар', 'Привезли в собранном виде и колеса накачены. В комплекте почти все есть, сын доволен. Доставили быстрее чем ожидали.', 5),
(4, 7, 'Арман', 'Велосипед жақсы, тек құралдарын түгел салмайды.', 4),
(5, 5, 'Михаил', 'Отличный самокат на 120мм колёсах, алюминий под лаком произведение искусства, грипсы очень удобные, в комплекте пеги и осями.', 5),
(6, 4, 'Дарья', 'Мы купили этот самокат по рекомендации друзей и теперь сами можем рекомендовать другим. Отличный выбор! Мягкое катание, амортизаторы, ручной тормоз, в целом довольны. Катаются и дети и взрослые.', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop-feedback`
--
ALTER TABLE `shop-feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop-feedback`
--
ALTER TABLE `shop-feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
