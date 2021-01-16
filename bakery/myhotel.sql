-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 29, 2020 at 11:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(4) NOT NULL,
  `food_item` varchar(100) NOT NULL,
  `food_image` mediumtext DEFAULT NULL,
  `food_price` int(6) NOT NULL,
  `food_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_item`, `food_image`, `food_price`, `food_type`) VALUES
(1, 'Pizza Buritto', 'images/food2.jpg', 1500, 'Snack'),
(2, 'lobster', 'images/splash16.jpg', 500, 'Snack'),
(3, 'Spaghetti Huevo', 'images/food1.jpg', 1000, 'Meal'),
(4, 'Chips ', 'images/splash16.jpg', 100, 'Snack'),
(5, 'Large Hot Yorghut', 'images/drink2.jpg', 100, 'Drinks'),
(6, 'Ginfer', 'images/drink1.jpg', 200, 'Snack'),
(7, 'Chicken Burger', 'images/splash8.jpg', 300, 'Snack'),
(8, 'Hamburger', 'images/splash10.jpg', 450, 'Snack'),
(9, 'Orange Juice', 'images/orangejuice.jpg', 70, 'Drinks'),
(10, 'Mango Juice', 'images/mangojuice.jpg', 70, 'Drinks'),
(11, 'Pineapple Juice', 'images/pineapplejuice.jpg', 70, 'Drinks'),
(12, 'food1', 'images/hotel2.jpg', 30, 'Snack'),
(13, 'food2', 'images/drink1.jpg', 40, 'Snack'),
(14, 'food3', 'images/food3.jpg', 50, 'Snack');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(20) NOT NULL,
  `food_id` int(4) NOT NULL,
  `user_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `food_id`, `user_id`) VALUES
(243156700, 7, 18),
(243156701, 8, 15),
(243156703, 4, 16),
(243156704, 9, 2),
(243156705, 5, 15),
(243156706, 12, 19),
(243156707, 13, 19),
(243156710, 13, 21);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `second_name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `choice` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `second_name`, `email`, `username`, `password`, `choice`) VALUES
(1, 'Sydney', 'Abuya', 'sidneybradleyabuya@gmail.com', 'smoothville', 'when', 'Admin'),
(2, 'Allan', 'Kirui', 'allankirui@gmail.com', 'allan', 'allan', 'Client'),
(3, 'Mustafa', 'Hun', 'mustafahun@gmail.com', 'mustafa', 'coast', 'Chef'),
(4, 'Bruno', 'Pernandez', 'brunopernandez@gmail.com', 'pernandez', 'pen', 'Waiter'),
(5, 'Neul', 'Maupay', 'neulmaupay@gmail.com', 'maupay', 'neul', 'Cashier'),
(6, 'Gerrard', 'pique', 'gerrardpique@gmail.com', 'pique', 'pique', 'Client'),
(7, 'Brenda', 'Hola', 'brendahola@gmail.com', 'b.hola', 'hey', 'Waiter'),
(8, 'Peter', 'Parker', 'peterparker@gmail.com', 'PeterP', 'parker', 'Waiter'),
(11, 'Stacy', 'Cherop', 'stacycherop@gmail.com', 'Stacy', 'senorita', 'Admin'),
(14, 'Paul', 'Ongombe', 'paulongombe@gmail.com', 'ongombe', 'ongombe', 'Admin'),
(15, 'James', 'Gallagher', 'jamesgallagher@gmail.com', 'James', 'gallagher', 'Client'),
(16, 'Cayol', 'Puyol', 'cayolpuyol@gmail.com', 'Puyol', 'puyol', 'Client'),
(17, 'John', 'Pombe', 'johnpombe@gmail.com', 'JohnPombe', 'Magufuli', 'Admin'),
(18, 'Njesko', 'Scott', 'njeskoscott@gmail.com', 'Njesko', 'scott', 'Client'),
(19, 'client', 'jane', 'client1@gmail.com', 'client1', 'client1', 'Client'),
(20, 'simon', 'unai', 'simonunai@gmail.com', 'admin1', 'admin1', 'Admin'),
(21, 'Fiona', 'Hada', 'client2@gmail.com', 'client2', 'client2', 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `food_id` (`food_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243156711;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
