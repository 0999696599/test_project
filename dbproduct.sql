-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 07:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproduct`
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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a-id`, `a-name`, `a-location`, `a-moddate`, `a-cdate`) VALUES
('a1001', 'Admin1', 'pathumthan', '2022-11-17', '2023-01-13'),
('a1002', 'Admin2', 'bangkook', '2022-11-18', '2023-04-21'),
('a1003', 'Admin3', 'singburi', '2022-11-11', '2023-02-09');

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
  `total` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart-id`, `numberofproducts`, `cart-price`, `prodcuts`, `cart-moddate`, `cart-cdate`, `total`) VALUES
('cc1001', '1', 220, 'champoo', '2022-09-10', '2022-09-09', NULL),
('cc1002', '1', 220, 'condition', '2022-09-11', '2022-09-10', NULL),
('cc1003', '1', 220, 'detergent', '2022-09-12', '2022-09-11', NULL);

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

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c-id`, `c-name`, `email`, `location`, `dateofbirth`, `c-date`, `mod-date`, `postcode`) VALUES
('c2001', 'user1', 'user101@gmail.com', 'pathumthani', '2022-09-01', '2022-11-02', '2023-01-12', '11111'),
('c2002', 'user2', 'user102@gmail.com', 'bangkook', '2022-09-02', '2022-10-03', '2022-11-23', '11112'),
('c2003', 'user3', 'user103@gmail.com', 'singburi', '2022-11-09', '2022-11-18', '2023-01-01', '11113');

-- --------------------------------------------------------

--
-- Table structure for table `invioce`
--

CREATE TABLE `invioce` (
  `in_id` varchar(10) NOT NULL,
  `c_id` varchar(20) NOT NULL,
  `cart_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invioce`
--

INSERT INTO `invioce` (`in_id`, `c_id`, `cart_id`) VALUES
('', '', ''),
('789', 'c2001', '5874'),
('gtrh', 'htrh696959', 'htr'),
('v1001', 'c2001', 'cc1001'),
('v1002', 'c2002', 'cc1002'),
('v1003', 'c2003', 'cc1003'),
('vsdv', 'vsdv', 'bfbbbbbb');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `l-id` varchar(10) NOT NULL,
  `l-name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`l-id`, `l-name`) VALUES
('l1001', 'pathumthan'),
('l1002', 'bangkok'),
('l1003', 'singburi');

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
  `p_id` varchar(10) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `cdate` date NOT NULL,
  `moddate` date NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `price`, `cdate`, `moddate`, `deleted`) VALUES
('9006', 'ppppp', 78, '0000-00-00', '0000-00-00', 0),
('csd', 'vds', 78, '0000-00-00', '0000-00-00', 0),
('dsffwefwe', 'iooo88', 78, '0000-00-00', '0000-00-00', 0),
('p00558', '', 0, '0000-00-00', '0000-00-00', 0),
('p1001', 'champoo', 220, '2022-12-08', '2023-06-16', 1),
('p1002', 'condition', 220, '2022-09-01', '2023-07-21', 1),
('p1003', 'detergen', 220, '2022-11-18', '2023-05-18', 1),
('กอ', 'หิด', 50, '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promo_id` varchar(20) NOT NULL,
  `promo_name` varchar(20) NOT NULL,
  `promo_moddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promo_id`, `promo_name`, `promo_moddate`) VALUES
('pr0001', 'โปรเดือนมกราคม', '2022-09-09'),
('pr0001', 'โปรเดือนกุมภาพันธ์', '2022-09-30'),
('452345', '้cddf', '0000-00-00'),
('sad', 'oooo', '2022-09-01'),
('vdsv', 'dsvsd', '2022-09-01');

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
  ADD PRIMARY KEY (`in_id`);

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
  ADD PRIMARY KEY (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
