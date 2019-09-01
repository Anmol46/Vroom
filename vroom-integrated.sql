-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 05:33 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_firstname` varchar(255) NOT NULL,
  `admin_lastname` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_firstname`, `admin_lastname`, `admin_email`, `admin_password`) VALUES
(1, 'Himanshu', 'Thakkar', 'himanshu@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `ad_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `ad_city` varchar(255) NOT NULL,
  `ad_state` varchar(255) NOT NULL,
  `ad_verified` varchar(255) NOT NULL,
  `ad_created` datetime NOT NULL,
  `ad_status` int(255) NOT NULL,
  `ad_sold` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ad_id`, `user_id`, `car_id`, `ad_city`, `ad_state`, `ad_verified`, `ad_created`, `ad_status`, `ad_sold`) VALUES
(1, 1, 1, 'Mumbai', 'Maharashtra', '1', '2018-10-16 04:13:18', 1, 0),
(2, 2, 2, 'Panjim', 'Goa', '1', '2018-10-24 01:00:00', 1, 0),
(3, 1, 3, 'Mumbai', 'Maharashta', '1', '0000-00-00 00:00:00', 1, 1),
(4, 3, 4, 'Saputara', 'Gujrat', '1', '0000-00-00 00:00:00', 0, 1),
(5, 4, 5, 'Chandigarh', 'Delhi', '0', '2018-10-31 00:00:00', 1, 0),
(6, 2, 12, 'Mumbai', 'Maharashtra', '1', '0000-00-00 00:00:00', 1, 0),
(7, 2, 13, 'Mumbai', 'Maharashtra', '1', '0000-00-00 00:00:00', 0, 0),
(8, 2, 14, 'Kalara', 'Delhi', '1', '0000-00-00 00:00:00', 0, 0),
(9, 2, 15, 'Kalara', 'Uttar Pradesh', '1', '0000-00-00 00:00:00', 0, 0),
(10, 2, 16, 'Kalara', 'Uttar Pradesh', '1', '0000-00-00 00:00:00', 0, 0),
(11, 2, 17, 'Kalara', 'Uttar Pradesh', '1', '0000-00-00 00:00:00', 0, 0),
(12, 2, 18, 'Kalara', 'Uttar Pradesh', '1', '0000-00-00 00:00:00', 1, 0),
(13, 2, 19, 'Kalara', 'Uttar Pradesh', '1', '0000-00-00 00:00:00', 0, 0),
(14, 2, 20, 'Kalara', 'Uttar Pradesh', '0', '0000-00-00 00:00:00', 0, 0),
(15, 2, 21, 'Kalara', 'Uttar Pradesh', '0', '0000-00-00 00:00:00', 0, 0),
(16, 2, 22, 'Kalara', 'Uttar Pradesh', '0', '0000-00-00 00:00:00', 0, 0),
(17, 2, 23, 'Kalara', 'Uttar Pradesh', '0', '0000-00-00 00:00:00', 0, 0),
(18, 2, 24, 'Mumbai', 'Mumbai', '0', '0000-00-00 00:00:00', 0, 0),
(19, 2, 25, 'Mumbai', 'Mumbai', '0', '0000-00-00 00:00:00', 0, 0),
(20, 2, 26, 'Maharashtra', 'Mumbai', '0', '0000-00-00 00:00:00', 0, 0),
(21, 2, 27, 'Maharashtra', 'Mumbai', '0', '0000-00-00 00:00:00', 0, 0),
(22, 2, 28, 'Maharashtra', 'Mumbai', '0', '0000-00-00 00:00:00', 0, 0),
(23, 2, 29, 'Maharashtra', 'Mumbai', '0', '0000-00-00 00:00:00', 0, 0),
(24, 2, 30, 'Maharashtra', 'Mumbai', '0', '0000-00-00 00:00:00', 0, 0),
(25, 2, 31, 'Maharashtra', 'Mumbai', '0', '0000-00-00 00:00:00', 0, 0),
(26, 2, 32, 'Maharashtra', 'Mumbai', '0', '0000-00-00 00:00:00', 0, 0),
(33, 2, 39, 'Srinagar', 'Kashmir', '0', '0000-00-00 00:00:00', 0, 0),
(34, 2, 40, 'Kalara', 'Karnataka', '0', '0000-00-00 00:00:00', 0, 0),
(35, 2, 41, 'Kalara', 'Karnataka', '0', '0000-00-00 00:00:00', 0, 0),
(38, 2, 44, 'Maharashtra', 'Uttar Pradesh', '0', '0000-00-00 00:00:00', 0, 0),
(43, 2, 49, 'Chennai', 'Uttar Pradesh', '0', '0000-00-00 00:00:00', 0, 0),
(44, 2, 50, 'Chennai', 'Uttar Pradesh', '0', '0000-00-00 00:00:00', 0, 0),
(45, 2, 51, 'Chennai', 'Uttar Pradesh', '0', '0000-00-00 00:00:00', 0, 0),
(46, 2, 52, 'Mumbai', 'Maharashtra', '0', '0000-00-00 00:00:00', 0, 0),
(47, 2, 53, 'Kalara', 'Uttar Pradesh', '0', '0000-00-00 00:00:00', 0, 0),
(48, 2, 54, 'Kalara', 'Uttar Pradesh', '0', '0000-00-00 00:00:00', 0, 0),
(49, 2, 55, 'Kalara', 'Uttar Pradesh', '0', '0000-00-00 00:00:00', 0, 0),
(50, 2, 56, 'Kalara', 'Uttar Pradesh', '0', '0000-00-00 00:00:00', 0, 0),
(51, 2, 57, 'Mumbai', 'Maharashtra', '0', '0000-00-00 00:00:00', 0, 0),
(52, 2, 58, '', '', '0', '0000-00-00 00:00:00', 0, 0),
(53, 2, 59, '', '', '0', '0000-00-00 00:00:00', 0, 0),
(54, 2, 60, '', '', '0', '0000-00-00 00:00:00', 0, 0),
(55, 2, 61, '', '', '0', '0000-00-00 00:00:00', 0, 0),
(56, 5, 62, 'Thane', 'Maharashtra', '1', '0000-00-00 00:00:00', 0, 0),
(57, 5, 63, '1212', '1212', '1', '0000-00-00 00:00:00', 0, 0),
(58, 5, 64, '1', '1212', '0', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ad_images`
--

CREATE TABLE `ad_images` (
  `img_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `main_img` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_images`
--

INSERT INTO `ad_images` (`img_id`, `car_id`, `img_name`, `main_img`) VALUES
(17, 1, '0d59ea17784151c144330ac0b9faf7db.jpg', 1),
(18, 2, '5276a5111954a189aa54a8438b3917cc.jpg', 1),
(19, 3, 'new-maruti-suzuki-s-cross.jpg', 1),
(20, 5, '18040300140.jpg', 1),
(21, 12, '2017-hyundai-i30-uk-price-set-from-16995-comes-with-10-t-gdi-as-standard-114664_1.jpg', 1),
(22, 18, '1200px-2018_Skoda_Octavia_(5E_MY18.5)_110TSI_station_wagon_(2018-08-27)_01.jpg', 1),
(23, 1, 'audi-a5-coupe-diesel-26f2cf03456f.jpg', 0),
(24, 1, 'maxresdefault.jpg', 0),
(25, 1, '16552659947x640.jpg', 0),
(26, 2, '1e000eae255ac5c8efbdd4e6638e25c2.jpg', 0),
(27, 2, 'merc benz.jpg', 0),
(28, 2, 'mercbenz2.jpg', 0),
(29, 3, 'nexa2.jpg', 0),
(30, 3, 'nexa.jpg', 0),
(31, 3, 'seat-leon-cupra-ii-restyling-2009-2014-hatchback-5-door-interior-1.jpg', 0),
(32, 5, '2013-red-ferrari-rachel-cohen.jpg', 0),
(33, 5, '2015-05-26-1432651890-5859908-1499374892_f543737409_z-thumb.jpg', 0),
(34, 5, 'img-1-600x263.jpg', 0),
(35, 12, '17HyuI30Sen5drBluFL1_800.jpg', 0),
(36, 12, 'hyundaii30.jpg', 0),
(37, 12, 'hyundaii30222.jpg', 0),
(38, 18, 'skoda-octavia-2015-diesel-white-hatchback-kildare-95763251.jpg', 0),
(39, 18, 'skoda_octavia_2005_diesel_skoda_octavia_rider_1_9_tdi_2005_5880056508949213385.jpg', 0),
(40, 18, 'White-Skoda-Octavia-vRS-fk49.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_brand` varchar(255) NOT NULL,
  `car_model` varchar(255) NOT NULL,
  `car_price` varchar(255) NOT NULL,
  `car_description` varchar(255) NOT NULL,
  `car_purchase_year` varchar(255) NOT NULL,
  `car_km_driven` int(255) NOT NULL,
  `car_insurance` varchar(255) NOT NULL,
  `car_fuel` varchar(255) NOT NULL,
  `car_cng` varchar(255) NOT NULL,
  `car_number` varchar(255) NOT NULL,
  `car_owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_brand`, `car_model`, `car_price`, `car_description`, `car_purchase_year`, `car_km_driven`, `car_insurance`, `car_fuel`, `car_cng`, `car_number`, `car_owner`) VALUES
(1, 'Audi', 'Q5', '4500000', 'Brand New', '2014', 10000, '1', 'petrol', '0', 'MH-05-2010-DA', '1'),
(2, 'Mercedes', 'E Class', '1500000', 'Brand New Nitrox Installed', '2017', 151500, '0', 'diesel', '0', 'DL-03-BA-1234', '2'),
(3, 'Maruti', 'Nexa', '95000', 'Smooth and Maitained', '2011', 250000, '1', 'petrol', '0', 'MH-05-11-AB', '3'),
(4, 'Hyundia', 'i10', '210000', 'New and Well Maintained', '2016', 150000, '1', 'petrol', '1', 'MH-05-BA-1234', '2'),
(5, 'Ferrari', 'SV', '35000000', 'Brand New', '2018', 15250, '1', 'petrol', '0', 'DL-AV12', '1'),
(6, 'BMW', 'i8', '15700000', 'Modifie Engine with high performance', '2017', 154000, '1', 'diesel', '0', 'BA-12-ZZ', '4'),
(7, 'HONDA', 'CITY', '175000', 'Changed Tyres', '2014', 25200, '1', 'petrol', '1', 'GJ-AB-1234', '2'),
(8, 'Tata', 'Indigo', '150000', 'Used Taxi', '2017', 85000, '1', 'diesel', '0', 'MH-05-DA-4561', '1'),
(9, 'Porshe', 'XV', '2250000', 'Modified Pickup, installed Nitrox', '2015', 14000, '1', 'petrol', '0', 'BA-12-MA-1234', '2'),
(10, 'Audi', 'Q7', '998000', 'NEW ', '2017', 1500, '1', 'petrol', '0', 'MH-05-2019', '3'),
(11, 'Hyundai', 'i30', '1450000', 'Imported From Dubai', '2018', 1200, '1', 'petrol', '0', 'AB-12-YX12', '3'),
(12, 'Hyundai', 'i30', '1450000', 'Imported From Dubai', '2018', 1200, '1', 'petrol', '0', 'AB-12-YX12', '2'),
(13, 'Hyundai', 'i30', '1450000', 'Imported From Dubai', '2018', 1200, '1', 'petrol', '0', 'AB-12-YX12', '1'),
(14, 'Ferrari', 'SV', '25000000', 'Brand New Nitrox Installed', '2018', 250000, '0', 'diesel', '1', 'DL-03-BA-1234', '2'),
(15, 'Audi', 'Q5', '998000', 'Brand New Lifted Up', '2014', 7500, '0', 'petrol', '0', 'AB-12-2101', '1'),
(16, 'Ferrari', 'SV', '4500000', 'Brand New Nitrox Installed', '2017', 15000, '0', 'petrol', '0', 'MH-02-AZ-8055', '1'),
(17, 'Skoda', 'Octiva', '375000', 'Used as a Taxi, Condition is good', '2018', 1500, '1', 'petrol', '0', 'MH-05-2017AB', ''),
(18, 'Skoda', 'Octiva', '375000', 'Used as a Taxi, Condition is good', '2018', 1500, '1', 'petrol', '0', 'MH-05-2017AB', ''),
(19, 'Skoda', 'Octiva', '375000', 'Used as a Taxi, Condition is good', '2018', 1500, '1', 'petrol', '0', 'MH-05-2017AB', ''),
(20, 'Skoda', 'Octiva', '375000', 'Used as a Taxi, Condition is good', '2018', 1500, '1', 'petrol', '0', 'MH-05-2017AB', ''),
(21, 'Skoda', 'Octiva', '375000', 'Used as a Taxi, Condition is good', '2018', 1500, '1', 'petrol', '0', 'MH-05-2017AB', ''),
(22, 'Skoda', 'Octiva', '375000', 'Used as a Taxi, Condition is good', '2018', 1500, '1', 'petrol', '0', 'MH-05-2017AB', ''),
(23, 'Skoda', 'Octiva', '375000', 'Used as a Taxi, Condition is good', '2018', 1500, '1', 'petrol', '0', 'MH-05-2017AB', ''),
(24, 'Mercedes', 'E Class', '35000000', 'Brand New', '2018', 7500, '1', 'petrol', '0', 'AB-12-2101', ''),
(25, 'Mercedes', 'E Class', '35000000', 'Brand New', '2018', 7500, '1', 'petrol', '0', 'AB-12-2101', ''),
(26, 'Mercedes', 'E Class', '998000', 'Brand New Lifted Up', '2016', 15000, '0', 'petrol', '1', 'AB-12-2140', ''),
(27, 'Mercedes', 'E Class', '998000', 'Brand New Lifted Up', '2016', 15000, '0', 'petrol', '1', 'AB-12-2140', ''),
(28, 'Mercedes', 'E Class', '998000', 'Brand New Lifted Up', '2016', 15000, '0', 'petrol', '1', 'AB-12-2140', ''),
(29, 'Mercedes', 'E Class', '998000', 'Brand New Lifted Up', '2016', 15000, '0', 'petrol', '1', 'AB-12-2140', ''),
(30, 'Mercedes', 'E Class', '998000', 'Brand New Lifted Up', '2016', 15000, '0', 'petrol', '1', 'AB-12-2140', ''),
(31, 'Mercedes', 'E Class', '998000', 'Brand New Lifted Up', '2016', 15000, '0', 'petrol', '1', 'AB-12-2140', ''),
(32, 'Mercedes', 'E Class', '998000', 'Brand New Lifted Up', '2016', 15000, '0', 'petrol', '1', 'AB-12-2140', ''),
(39, 'Audi', 'Q5', '4500000', 'New As Fuck', '2014', 10000, '1', 'petrol', '1', 'MH-05-2017', ''),
(40, 'Mercedes', 'QB', '998000', 'NEW ', '2018', 7500, '1', 'petrol', '0', 'DL-03-BA-1234', ''),
(41, 'Mercedes', 'QB', '998000', 'NEW ', '2018', 7500, '1', 'petrol', '0', 'DL-03-BA-1234', ''),
(44, 'Audi', 'Q5', '4500000', 'Used as a Taxi, Condition is good', '2017', 100, '1', 'petrol', '0', 'MH-05-2017', ''),
(49, 'Audi', 'Q5', '1500000', 'Brand New Nitrox Installed', '2017', 1500, '1', 'petrol', '1', 'MH-02-AZ-8055', ''),
(50, 'Audi', 'Q5', '1500000', 'Brand New Nitrox Installed', '2017', 1500, '1', 'petrol', '1', 'MH-02-AZ-8055', ''),
(51, 'Audi', 'Q5', '1500000', 'Brand New Nitrox Installed', '2017', 1500, '1', 'petrol', '1', 'MH-02-AZ-8055', ''),
(52, 'Ferrari', 'SV', '25000000', 'New As Fuck', '2017', 7500, '0', 'petrol', '0', 'MH-05-2017', ''),
(53, 'Audi', 'SV', '375000', 'Brand New Nitrox Installed', '2017', 1500, '1', 'petrol', '1', 'MH-05-2010-DA', ''),
(54, 'Audi', 'SV', '375000', 'Brand New Nitrox Installed', '2017', 1500, '1', 'petrol', '1', 'MH-05-2010-DA', ''),
(55, 'Audi', 'SV', '375000', 'Brand New Nitrox Installed', '2017', 1500, '1', 'petrol', '1', 'MH-05-2010-DA', ''),
(56, 'Audi', 'SV', '375000', 'Brand New Nitrox Installed', '2017', 1500, '1', 'petrol', '1', 'MH-05-2010-DA', ''),
(57, 'Audi', 'R8', '784000', 'Brand New Lifted Up', '2017', 4500, '0', 'diesel', '0', 'MH-05-2010-DA', ''),
(58, '', '', '', '', '', 0, '1', '', '1', '', ''),
(59, '', '', '', '', '', 0, '1', 'petrol', '1', '', ''),
(60, '', '', '', '', '', 0, '1', 'petrol', '1', '', ''),
(61, '', '', '', '', '', 0, '1', 'petrol', '1', '', ''),
(62, '1', '12', '1212121', '12', '1212', 12, '1', 'petrol', '1', '12', ''),
(63, 'anmol', '123', '1212121212', '121', '121', 1212, '1', 'diesel', '1', '121', ''),
(64, 'anmol', '1', '1', '1', '1', 1, '', '', '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `user_email_verified` varchar(255) NOT NULL,
  `deleted` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `user_dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `user_mobile`, `user_email_verified`, `deleted`, `created_at`, `user_dob`) VALUES
(1, 'Gaurav', 'Makhija', 'gauravmakhija@ves.ac.in', '12345', '9665887104', '0', '0', '0000-00-00 00:00:00', '2018-10-20'),
(2, 'Shyam ', 'Rochlani', 'shyam@gmail.com', '12345', '7744818656', '1', '0', '2018-10-24 02:16:00', '2018-10-10'),
(3, 'Juhi', 'Ahuja', 'juhi@gmail.com', '12345', '7474818654', '1', '0', '0000-00-00 00:00:00', '2018-08-10'),
(5, 'anmol', 'ranglani', 'anmol.ranglani98@gmail.com', 'anmol', '8888888888', '', '', '0000-00-00 00:00:00', '0007-12-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `ad_images`
--
ALTER TABLE `ad_images`
  ADD PRIMARY KEY (`img_id`),
  ADD UNIQUE KEY `img_id` (`img_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `ad_images`
--
ALTER TABLE `ad_images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
