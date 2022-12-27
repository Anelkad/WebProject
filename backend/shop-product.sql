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
(3, 3, 'Скейтборд ScooTer PB22GMTR4PP сиреневый 22', 7990, 'тип: пенниборд для детей: Да', 'https://resources.cdn-kaspi.kz/shop/medias/sys_master/images/images/h64/h0c/33736436219934/scooter-pb22gmtr4pp-sirenevyj-22-101234149-1.jpg'),
(4, 2, 'Самокат Urban Scooter 200 черный', 32970, 'тип: городской максимальная нагрузка: 100 кг', 'https://resources.cdn-kaspi.kz/shop/medias/sys_master/images/images/h5b/h54/51403844321310/urban-scooter-200-cernyj-100148228-1-Container.jpg'),
(5, 2, 'Самокат Decathlon SC MID 9 2765005 красный', 24900, 'тип: детский максимальная нагрузка: 100 кг', 'https://resources.cdn-kaspi.kz/shop/medias/sys_master/images/images/hcd/hb6/33916898705438/decathlon-sc-mid-9-2765005-krasnyj-101151378-1.jpg'),
(6, 1, 'Велосипед Polato 26 2021 17 черный-белый', 59968, 'тип: горный модельный год: 2021', 'https://resources.cdn-kaspi.kz/shop/medias/sys_master/images/images/h66/h1b/34282110320670/polato-26-2021-17-cernyj-belyj-101458550-1.jpg'),
(7, 1, 'Велосипед STELS Урал 28 2022 21 зеленый', 52701, 'тип: городской модельный год: 2022', 'https://resources.cdn-kaspi.kz/shop/medias/sys_master/images/images/h5e/h3c/50605588316190/stels-ural-28-2022-21-zelenyj-104775525-1.jpg'),
(8, 1, 'Велосипед Принцесса pink princess 20 2022 13 дюймо', 33239, 'тип: городской модельный год: 2022', 'https://resources.cdn-kaspi.kz/shop/medias/sys_master/images/images/hca/h8c/49181477732382/princessa-pink-princess-20-2022-13-dujmov-fioletovyj-103995898-1.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
