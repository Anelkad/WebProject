CREATE DATABASE IF NOT EXISTS `kaspi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kaspi`;
-- Table structure for table `catalogue`
--

CREATE TABLE `catalogue` (
  `catalogue_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `shop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `img_url`) VALUES
(1, 'Fast Food', 'fast-food.png'),
(2, 'Groceries', 'grocery.png'),
(3, 'Pharmacy', 'drugstore.png');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(250) NOT NULL,
  `catalogue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `img_url` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_id`, `name`, `img_url`, `category_id`) VALUES
(1, 'McDonald\'s', 'mcd.jpg', 1),
(2, 'KFC', 'kfc.png', 1),
(3, 'Bahandi', 'bhd.jpg', 1),
(4, 'Magnum', 'mgm.jpg', 2),
(5, 'Green', 'grn.jpg', 2),
(6, 'Ramstore', 'rms.jpg', 2),
(7, 'Sadykhan', 'sdh.jpg', 3),
(8, 'Biosphera', 'bsr.jpg', 3),
(9, 'Europharma', 'erp.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `login` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `login`, `password`) VALUES
(1, 'test', 'test@test.com', 'testtest'),
(2, 'test1', 'test1@test.com', 'testtest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`catalogue_id`),
  ADD KEY `catalogue_ibfk_1` (`shop_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_ibfk_1` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_ibfk_1` (`catalogue_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalogue`
--
ALTER TABLE `catalogue`
  MODIFY `catalogue_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD CONSTRAINT `catalogue_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`shop_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`catalogue_id`) REFERENCES `catalogue` (`catalogue_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `shop_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
