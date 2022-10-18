-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 06:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a-id` varchar(20) NOT NULL,
  `a-name` varchar(20) NOT NULL,
  `a-location` varchar(30) NOT NULL,
  `a-moddate` date NOT NULL,
  `a-cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart-id` varchar(10) NOT NULL,
  `numberofproducts` varchar(10) NOT NULL,
  `cart-price` int(10) NOT NULL,
  `prodcuts` varchar(10) NOT NULL,
  `cart-moddate` date NOT NULL,
  `cart-cdate` date NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c-id` varchar(10) NOT NULL,
  `c-name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `dateofbirth` date NOT NULL,
  `c-date` date NOT NULL,
  `mod-date` date NOT NULL,
  `postcode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invioce`
--

CREATE TABLE `invioce` (
  `in-id` varchar(10) NOT NULL,
  `c-id` varchar(20) NOT NULL,
  `cart-id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `l-id` varchar(10) NOT NULL,
  `l-name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `id` varchar(5) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`id`, `firstname`, `lastname`) VALUES
('C001', 'Jatuporn', 'Srichomchuen');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p-id` varchar(10) NOT NULL,
  `p-name` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `cdate` date NOT NULL,
  `moddate` date NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a-id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart-id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c-id`);

--
-- Indexes for table `invioce`
--
ALTER TABLE `invioce`
  ADD PRIMARY KEY (`in-id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`l-id`);

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p-id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
