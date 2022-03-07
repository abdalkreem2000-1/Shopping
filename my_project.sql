-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2022 at 01:15 PM
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
-- Database: `my_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `src` text NOT NULL,
  `name` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`src`, `name`, `price`) VALUES
('images/not-8.jpg', 'Xiaomi Redmi Note 8', 170),
('images/acer.jpg', 'Acer Aspire A315-51', 470);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `lname` varchar(70) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Messge` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `subject`, `Messge`) VALUES
(5, 'ءئرير', 'يسشليسر', 'شيسبشب', 'يئريئءر');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `price` int(11) NOT NULL,
  `src` varchar(100) NOT NULL,
  `explained` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `name`, `price`, `src`, `explained`) VALUES
(1, 'Apple MacBook Pro', 2300, 'images/mac.jpg', ''),
(2, 'HP Pavilion x360', 1120, 'images/hp.jpg', ''),
(3, 'Acer Aspire A315-51', 470, 'images/acer.jpg', ''),
(4, 'Asus VivoBook Flip 14', 640, 'images/asus.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `src` varchar(255) NOT NULL,
  `explained` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `Name`, `price`, `src`, `explained`) VALUES
(2, 'Samsung Galaxy Note20', 920, 'images/note20-1.jpg', ''),
(3, 'Xiaomi Redmi Note 8', 170, 'images/not-8.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` int(11) NOT NULL,
  `explained` text NOT NULL,
  `src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `explained`, `src`) VALUES
(1, 'Xiaomi Redmi Note 8', 170, 'Xiaomi Redmi Note 8 comes from Xiaomi with a 6.3-inch screen with a resolution of 1080 x 2340 pixels, and a price of about $ 170, and Xiaomi has equipped its Xiaomi Redmi Note 8 with an eight-core processor and (the largest). 6 GB RAM and (the largest) storage capacity. ) Is 128 GB\r\n\r\nXiaomi has adopted Android 9.0 Pie for its Xiaomi Redmi Note 8 | MIUI 11, 48MP Main Camera, 13MP Selfie Camera.', 'images/not-8.jpg'),
(2, 'Samsung Galaxy Note20', 1330, 'The Samsung Galaxy Note20 Ultra comes from Samsung measuring 6.9 inches, with a resolution of 1440 x 3088, and a price of about $ 1320, with an octa-core processor, 8 GB RAM (largest) and 512 GB (largest) storage capacity.\r\n\r\nSamsung adopted the Android 10 operating system in its Samsung Galaxy Note20 Ultra One UI 2.5, 108MP Main Camera and 10MP Selfie Camera.', 'images/note20-1.jpg'),
(3, 'Xiaomi Mi A3', 240, 'The Xiaomi Mi A3 comes from Xiaomi measuring 6.09 inches, with a resolution of 720 x 1560 pixels, and a price of about $ 230.\r\n\r\nXiaomi has adopted Android 9.0 Pie in its Xiaomi Mi A3 | Upgradeable to Android 10 | Android One, 48MP main camera and 32MP selfie camera.', 'images/AMMAR1.jpg'),
(4, 'Apple MacBook Pro', 2300, 'The Apple MacBook Pro (Retina + Touch Bar) laptop comes from the (Apple) MacBook Pro series, with a 16-inch screen, macOS Catalina, the device\'s storage capacity of 1 TB SSD and 16 GB RAM, and the processor is an Intel repair Core i9, AMD Radeon Pro 5500M (4 GB), at an approximate price of $ 3200', 'images/mac.jpg'),
(5, 'HP Pavilion x360', 1120, 'The HP Pavilion x360 14-dh1012nx laptop comes from the HP Pavilion x360 series, with a 14-inch screen, Windows 10 basic operating system, 128 GB M.2 SSD / 1 TB HDD and 8 GB storage capacity. RAM, the processor is an Intel Core i5-10210U (10th Gen), and a NVIDIA GeForce MX130 (2 GB) graphics card, at an approximate price of $ 950.', 'images/hp.jpg'),
(6, 'Acer Aspire A315-51', 470, 'The Acer Aspire A315-51 laptop comes from the (Acer) Aspire series, with a 15.6-inch screen, the basic operating system Windows 10, the device storage capacity of 128 GB SSD and 4 GB RAM, and the processor is an Intel Core i3-1005G1 (10th Gen), Intel UHD Graphics 620, at an approximate price of $ 460.', 'images/acer.jpg'),
(7, 'Asus VivoBook Flip 14', 640, 'The Asus VivoBook Flip 14 TP401MA laptop comes with a 14-inch screen, a basic Windows 10 operating system, 64 GB of storage capacity of the device (eMMC) and 4 GB of RAM, and the processor is an Intel Celeron N4000, Intel HD Graphics 600, at an approximate price of $ 360.', 'images/asus.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
