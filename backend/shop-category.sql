-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 27 2022 г., 08:41
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `final`
--

-- --------------------------------------------------------

--
-- Структура таблицы `shop-category`
--

CREATE TABLE `shop-category` (
  `id` int(11) NOT NULL,
  `catalogId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `shop-category`
--

INSERT INTO `shop-category` (`id`, `catalogId`, `name`) VALUES
(1, 1, 'Велосипеды'),
(2, 1, 'Самокаты'),
(3, 1, 'Скейтборды и лонгборды'),
(4, 2, 'Патчи'),
(5, 2, 'Кремы и сыворотки'),
(6, 2, 'Маски для лица'),
(7, 3, 'Автокомпрессоры'),
(8, 3, 'Обогреватели'),
(9, 3, 'Утеплители'),
(10, 4, 'Конструкторы'),
(11, 4, 'Развивающие игрушки'),
(12, 4, 'Наборы игрушек'),
(13, 5, 'Ноутбуки'),
(14, 5, 'Планшеты'),
(15, 5, 'Моноблоки');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `shop-category`
--
ALTER TABLE `shop-category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `shop-category`
--
ALTER TABLE `shop-category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
