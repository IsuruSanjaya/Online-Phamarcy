-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 04:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediserve`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `comment`) VALUES
('isuru', 'isuru980@gmail.com', 'well delievered'),
('yasith', 'yasith123@gmail.com', 'Well delivered');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `adress` varchar(50) NOT NULL,
  `way` varchar(50) NOT NULL,
  `cardname` varchar(35) NOT NULL,
  `cardno` varchar(40) NOT NULL,
  `exp` varchar(15) NOT NULL,
  `cvc` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`adress`, `way`, `cardname`, `cardno`, `exp`, `cvc`) VALUES
('24 makola south , makola', 'Leave at door', 'sunil santha', '4565 1245 6545', '12/12/2022', '201'),
('12 colombo road, kandy', 'Meet at Door', 'kavishka', '7898 1565 4565', '15/09/2022', '546'),
('34 nawala road, nugegoda', 'Leave at door', 'sumanapla', '0648 1234 8978', '12/05/2026', '081');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `number` varchar(10) NOT NULL,
  `info` varchar(200) DEFAULT NULL,
  `file_name` varchar(100) NOT NULL,
  `uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `name`, `age`, `number`, `info`, `file_name`, `uploaded_on`) VALUES
(1, 'yasith', 20, '0740843132', 'issue medicines only for 2 weeks', '20181130_061938GNANODAYA.jpg', '2021-10-09 10:50:29'),
(7, 'senitha', 13, '0773790512', 'I dont need first and the last medicines', '20201211_085741(1)-1.jpg', '2021-10-09 11:47:00'),
(9, 'dinushika', 23, '0703414598', 'heavy sick', 'man-profile.jpg', '2021-10-10 18:59:39'),
(10, 'wuwani', 20, '0112963937', 'Heart attact with sugar and cholestrol', 'WhatsApp Image 2021-05-02 at 09.12.31.jpeg', '2021-10-10 19:45:01'),
(11, 'yasith', 21, '0748400131', 'cough', 'istockphoto-1138395421-612x612.jpg', '2021-10-10 19:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `img` varchar(200) NOT NULL,
  `qty` varchar(5) NOT NULL,
  `price` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `qty`, `price`) VALUES
(1, 'Allergy', 'images/allergy.jpg', '1', '250'),
(2, 'biobalance', 'images/biobalance.png', '1', '1000'),
(3, 'counterpain', 'images/counterpain.jpg', '1', '550'),
(4, 'cream', 'images/cream.jpg', '1', '225'),
(5, 'lacto', 'images/lacto.jpg', '1', '350'),
(6, 'pandol', 'images/pandol.png', '1', '250'),
(7, 'prediapro', 'images/predia.jpg', '1', '450'),
(8, 'rossmax', 'images/rossmax.jpg', '1', '1250'),
(9, 'Acenic aid', 'images/p3.jpg', '1', '120'),
(10, 'Babyscale', 'images/babyscale.jpg', '1', '5320'),
(11, 'Thermomter', 'images/thermomter.jpg', '1', '2500'),
(12, 'Sugarmeter', 'images/p4.jpg', '1', '6500');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `number` varchar(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `gender`, `number`, `mail`, `address`, `dob`, `password`) VALUES
(1, 'padma', 'kumara', 1, '0775294375', 'padma@gmail.com', 'No 80,amarathunga road,mirigama', '2021-10-07', 'Kumara1234'),
(2, 'senitha', 'bipul', 1, '0332274045', 'senitharuwanpathirana@gmail.com', 'No 80,amarathunga road,mirigama', '2021-10-15', 'Senitha123'),
(3, 'yasith', 'pathirana', 1, '0773790512', 'yasithbagya@gmail.com', 'Amarathunga Mawatha', '2021-10-28', 'Yasith1234'),
(4, 'kalindu', 'nissanka', 1, '0112730837', 'kalindu@gmail.com', '60, malabe road, colombo', '2017-06-14', 'Kalindu123'),
(5, 'ashan', 'kavishka', 1, '0112273093', 'ashan@gmail.com', '12 makola road , makola', '2021-10-27', 'Ashan1234@'),
(6, 'namali', 'sandya', 0, '0773790512', 'nimalisandya1968@gmail.com', 'Amarathunga Mawatha', '2021-10-27', 'Nimali1234'),
(7, 'Dinushika', 'kaushalya', 0, '0703414598', 'dinu1234@gmail.com', '65 katudeniya matale', '1998-04-29', 'Dinu1234'),
(8, 'sunil', 'santha', 1, '0112963912', 'sunil1234@gmail.com', '12 colombo road ,kandy', '1971-10-12', 'Sunil1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
