-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 12:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `image` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `description`) VALUES
(4, '2022-Mar-Thu-08-14-19_wallpaperflare.com_wallpaper (1).jpg', 'lorem ipsum ', 'rerer tterrrer'),
(5, '2022-Mar-Thu-07-21-54_351300.jpg', 'hello project', 'kdfjk dkdfkj'),
(6, '2022-Mar-Thu-07-30-12_wallpaperflare.com_wallpaper (2).jpg', 'php blog', 'php blog'),
(7, '2022-Mar-Thu-08-42-57_jakpost.travel-spring-wallpaper-150667 (1).jpg', 'php opp', 'hello php opp'),
(10, '2022-Mar-Thu-10-22-06_3-nature-photography-cherry-tree.jpg', 'New Category', 'dfdfdf fdfdf'),
(11, '2022-Mar-Thu-12-24-48_wallpaperflare.com_wallpaper.jpg', 'php opp', 'php opp done'),
(12, '2022-Mar-Thu-12-25-16_ComputerDesktopWallpapersCollection656_074.JPG', 'php desing', 'php design pattern'),
(13, '2022-Mar-Thu-12-25-56_351257.jpg', 'design pattern', 'php design pattern');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Nazmul', 'nazmul.ns7989@gmail.com', '123456'),
(2, 'Customer', 'customer@gmail.com', '123456'),
(3, 'abc', 'abc@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
