-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 02:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `username`, `password`, `image`) VALUES
(1, 'Muhammad Saleem', 'saleem@gmail.com', 'admin', 'admin123', 'admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(255) NOT NULL,
  `purchase_price` int(255) NOT NULL,
  `Sale_price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `name`, `category`, `purchase_price`, `Sale_price`, `quantity`, `description`, `image`) VALUES
(6, 'Panadol', '11 ', 200, 300, 50, 'lorem ipsum It is a long established fact that a reader will be distracted by the readable content of a page', '1676609700-download.jpg'),
(7, 'Naproxen', '4 ', 150, 300, 50, 'lorem ipsum It is a long established fact that a reader will be distracted by the readable content of a page', '1676613359-Naproxen.jpg'),
(8, 'Disprine', '5 ', 100, 150, 50, 'lorem ipsum It is a long established fact that a reader will be distracted by the readable content of a page', '1676613565-dis.jpg'),
(9, 'Ansaid', '11 ', 150, 200, 50, 'lorem ipsum It is a long established fact that a reader will be distracted by the readable content of a page', '1676613791-Ansaid.jpg'),
(10, 'Cremaffin', '4 ', 400, 700, 50, 'lorem ipsum It is a long established fact that a reader will be distracted by the readable content of a page', '1676635308-cremaffin-304x304.jpeg'),
(15, 'chloroquine', '9 ', 200, 300, 50, 'lorem ipsum It is a long established fact that a reader will be distracted by the readable content of a page', '1676685644-medicin.jpg'),
(19, 'Arinac', '9', 130, 250, 60, 'lorem ipusom', '1676915467-arinac.jpg'),
(20, 'Corex D', '5', 70, 150, 45, 'lorem ipsum', '1676915616-corex-d.jpg'),
(21, 'Loprin', '4', 150, 300, 50, 'Lorem ipsum', '1676963756-loprin.jpg'),
(22, 'Sambro', '11 ', 350, 500, 40, 'Lorem ipsum', '1676963966-Sambro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_category`
--

CREATE TABLE `medicine_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine_category`
--

INSERT INTO `medicine_category` (`category_id`, `name`, `description`) VALUES
(4, 'Tablet', 'The active ingredient is combined with another substance and pressed into a round or oval solid shape'),
(5, 'Liquid', 'The active part of the medicine is combined with a liquid to make it easier to take or better absorbed'),
(7, 'Eye Drops', 'This category is related to eye drops category'),
(8, 'Capsules', 'The active ingredient is combined with another substance and pressed into a round or oval solid shape'),
(9, 'Syrups', 'The active ingredient is combined with another substance and pressed into a round or oval solid shape\n'),
(10, 'Cold medicine', 'The active ingredient is combined with another substance and pressed into a round or oval solid shape\n'),
(11, 'Cannabis', 'Maecenas dapibus dignissim nunc, vitae hendrerit metus blandit vel.'),
(12, 'Antimalarials', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(13, 'Antiviral Agents', '	Maecenas dapibus dignissim nunc, vitae hendrerit metus blandit vel.'),
(14, 'Antimetabolites', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplier_name`, `phone`, `email`, `address`, `image`) VALUES
(1, 'Muhammad Saleem', '03122345679', 'saleem@gmail.com', 'Okara cant ', '1677926468_sss.jpg'),
(2, 'Babar Azam', '03087867654', 'babar@gmail.com', 'Lahore modal Town', '1677926969_sa.jpg'),
(3, 'Shadab Khan', '03234567875', 'shadab@gmail.com', 'Faislabad', '1677927135_admin.jpg'),
(4, 'Muhammad Rizwan', '03456787656', 'rizwan@gmail.com', 'multan', '1677927389_haf.jpg'),
(5, 'Asif Ali', '03175836297', 'asif@gmail.com', 'Islamabad ', '1677927935_midas-hofstra-a6PMA5JEmWE-unsplash.jpg'),
(6, 'Shaheen Khan', '03146784567', 'shaheen@gmail.com', 'Lahore', '1677931876_admin (2).jpg'),
(7, 'Aftab ', '03467898675', 'aftab@gmail.com', 'Sahiwal', '1677931999_sss.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `medicine_category`
--
ALTER TABLE `medicine_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `medicine_category`
--
ALTER TABLE `medicine_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
