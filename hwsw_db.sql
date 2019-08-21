-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 04:09 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hwsw_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drivers` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `link`, `drivers`) VALUES
(1, 'MK235', 'MK235 Wireless Keyboard and Mouse<br/>Full-size. Durable. Simple.', 'https://www.logitech.com/en-us/product/mk235-wireless-keyboard-mouse?crid=1759', 'https://support.logitech.com/en_us/product/mk235-wireless-keyboard-mouse/downloads#windowsPnlBar'),
(2, 'C310', 'C310 Simple video calling in HD 720p', 'https://www.logitech.com/en-us/product/hd-webcam-c310?crid=34', 'https://support.logitech.com/en_us/product/hd-webcam-c310/downloads'),
(3, 'AMD Ryzen 5 3600X', 'AMD Ryzen 5 Processors are available in two options: with powerful built-in RadeonVega graphics, or without built-in graphics for users who want to use a discrete graphics card.', 'https://www.amd.com/en/products/cpu/amd-ryzen-5-3600x', 'https://www.amd.com/en/support/cpu/amd-ryzen-processors/amd-ryzen-5-desktop-processors/amd-ryzen-5-2600'),
(4, 'Intel Core i5', 'Intel Core i5-9600T Processor (9M Cache, Up to 3.90 GHz)<br/>9 MB SmartCache Cache<br/>6 Cores<br/>6 Threads<br/>3.90 GHz Max Turbo Frequency<br/>T - Power-optimized lifestyle<br/>9th Generation', 'https://www.intel.com/content/www/us/en/support/products/134902/processors/intel-core-processors/9th-generation-intel-core-i5-processors.html', 'https://www.intel.com/content/dam/support/us/en/documents/processors/core/Intel_Core_i5_FCLGA2066_BasinFalls.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `name`, `passwd`) VALUES
(1, 'admin', 'admin@admin.com', 'administrador', '$2y$10$jwVBz5bqpPcqRskBo2YXi.w7NFxJ1JN4a8TQDY24QAb1MzfZ9wtj2'),
(2, 'jc', 'jvalencia@unam.mx', 'Juan Valencia', '$2y$10$9BK5kVmzD.GccjVYIL44sOcxYr/lWTSj9qcJjqhECr2usMWwzaNEq'),
(3, 'dany', 'jsustaita@hotmail.com', 'José Sustaita', '$2y$10$k2rfkcHpkmZ1GDp4omsOjuLtSGJlbPAzfwSLjGFIi6z7QxJb1SB8W'),
(4, 'tarea', 'tarea@gmail.com', 'tarea', '$2y$10$N7D2reRy1/thnMc0GAkVUOdMYPuJ.sx1naQ1K9YMxLjTFRhPrwgm2');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
