-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 08:18 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` text NOT NULL,
  `Action` text NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `Action`, `register_date`) VALUES
(6, 'Men Clothes', 'All types of  men clothes', '', '', '2023-08-18 10:32:20'),
(7, 'Google Products', 'Manufactured by google', '', '', '2023-08-18 10:32:55'),
(8, 'Electronic Goods', 'Working Process', '', '', '2023-08-18 10:33:31'),
(9, 'Vehicles', 'Transportation purpose', '', '', '2023-08-18 10:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_name`, `name`, `description`, `price`, `quantity`, `image`, `date`, `action`) VALUES
(28, 'Men Clothes', 'Tshirts', 'All types of  men clothes', 500, 1, '', '2023-08-18 15:43:23', ''),
(29, 'Vehicles', 'Bike', 'Duke blue, 200cc', 35000, 1, '', '2023-08-18 15:46:03', ''),
(30, 'Vehicles', 'Car', '7 sitter, Blue Seltos', 70000, 1, '', '2023-08-18 15:57:24', ''),
(31, 'Vehicles', 'Van', '12 sitting, Yellow Van ', 300000, 1, '', '2023-08-18 15:58:56', ''),
(32, 'Men Clothes', 'Plain Shirt', 'Formal office wear Shirt', 1200, 1, '', '2023-08-18 15:59:49', ''),
(33, 'Men Clothes', 'Casual Shirts', 'Men Casual Shirts', 3600, 4, '', '2023-08-18 16:01:04', ''),
(34, 'Electronic Goods', 'AC', 'Low Budget Air Conditioner', 20000, 1, '', '2023-08-18 16:02:34', ''),
(35, 'Electronic Goods', 'Printer', 'Black smart Printer', 30000, 1, '', '2023-08-18 16:03:27', ''),
(36, 'Electronic Goods', 'Water Heater', 'Electronic Greaser', 15000, 1, '', '2023-08-18 16:05:03', ''),
(37, 'Google Products', ' Tab', 'Google Smart Tab', 50000, 1, '', '2023-08-18 16:06:55', ''),
(38, 'Google Products', 'Mobile', 'Google Smart Mobile', 100000, 1, '', '2023-08-18 16:07:48', ''),
(39, 'Google Products', 'Google pads', 'Accessories Manufactured by google', 909090, 1, '', '2023-08-18 16:09:49', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
