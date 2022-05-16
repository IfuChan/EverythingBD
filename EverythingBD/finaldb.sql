-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 06:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `everythingbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(4) NOT NULL,
  `Full_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `Phone_num` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Full_name`, `email`, `password`, `Phone_num`) VALUES
(1, 'Kamran Ahmed', 'kamran@everythingbd.com', 'hellohello', 124578),
(2, 'Hasib', 'hasib@everythingbd.com', 'hellohihellohi', 1881653218);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_id` int(5) NOT NULL,
  `Full_name` varchar(30) NOT NULL,
  `Phone_num` bigint(11) NOT NULL,
  `Address` varchar(80) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_id`, `Full_name`, `Phone_num`, `Address`, `City`, `Email`, `password`) VALUES
(1, 'Ifad Zaman', 19424566652, 'Road 3, Dhanmondi', 'Dhaka', 'ifadzmn@gmail.com', 'hello12345'),
(15, 'Kamran Ahmed', 15495575426, 'Road 27, Dhanmondi', 'Dhaka', 'k@nsu.com', 'hellohello'),
(23, 'Someone Lastname', 96583245452, 'Parliament Road', 'Montreal', 'newuser@gmail.com', 'newuser2020'),
(24, 'Michael Scott', 12457896355, 'Road 8, Scranton', 'Pennsylvania', 'newuser2@gmail.com', 'newuser911'),
(25, 'Pial', 1881653218, 'Dhaka, Bangladesh', 'Dhaka', 'pial@everythingbd.com', 'hihellohihello');

--
-- Triggers `customer`
--
DELIMITER $$
CREATE TRIGGER `saveuser` BEFORE DELETE ON `customer` FOR EACH ROW BEGIN
    	INSERT INTO deletedusers(Name,PhoneNumber,Address,City,Email)
        VALUES(OLD.Full_name,OLD.Phone_num,OLD.Address,OLD.City,OLD.Email);
	END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `deletedusers`
--

CREATE TABLE `deletedusers` (
  `Name` varchar(30) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Address` varchar(80) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deletedusers`
--

INSERT INTO `deletedusers` (`Name`, `PhoneNumber`, `Address`, `City`, `Email`) VALUES
('Someone', 123, 'nsu', 'dhaka', 'someone@someone.com'),
('Saqib', 1243687, 'Mdpur', 'Dhaka', 'saqib@aol.com'),
('4785', 147, '147', '147', 'abcd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `DateOfOrder` date NOT NULL,
  `feedbackSI` int(11) NOT NULL,
  `CustomerEmail` text NOT NULL,
  `Feedback` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`DateOfOrder`, `feedbackSI`, `CustomerEmail`, `Feedback`) VALUES
('2021-01-14', 1, 'ifadzmn@gmail.com', 'dfghj\r\n        '),
('2021-01-14', 2, 'ifadzmn@gmail.com', 'quick delivery\r\n        '),
('2021-01-13', 4, 'k@nsu.com', 'give discount pls            \r\n        '),
('2021-01-07', 6, 'k@nsu.com', 'this is a test feedback\r\n        ');

-- --------------------------------------------------------

--
-- Table structure for table `ordernum`
--

CREATE TABLE `ordernum` (
  `order_num` int(3) NOT NULL,
  `Customer_id` int(3) DEFAULT NULL,
  `product_id` int(3) DEFAULT NULL,
  `Customer_name` varchar(45) DEFAULT NULL,
  `Product_name` varchar(45) DEFAULT NULL,
  `Order_Date` date NOT NULL DEFAULT current_timestamp(),
  `Order_Ammount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordernum`
--

INSERT INTO `ordernum` (`order_num`, `Customer_id`, `product_id`, `Customer_name`, `Product_name`, `Order_Date`, `Order_Ammount`) VALUES
(1, 1, 2, 'Ifad Zaman', 'iPhone 12 Mini', '2021-01-18', 95000),
(2, 25, 6, 'Pial', 'Edifier Airpulse A300 Pro', '2021-01-18', 420000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_id` int(6) NOT NULL,
  `Product_name` varchar(25) NOT NULL,
  `Price` decimal(8,2) NOT NULL,
  `Stock` int(3) DEFAULT NULL,
  `Category` varchar(25) NOT NULL,
  `Disc_price` decimal(8,2) DEFAULT NULL,
  `Rating` int(1) DEFAULT NULL,
  `Review` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `Product_name`, `Price`, `Stock`, `Category`, `Disc_price`, `Rating`, `Review`) VALUES
(1, 'Galaxy Note 20 Ultra', '110000.00', 5, 'Smart Phones', '105000.00', 5, 'Very Good'),
(2, 'iPhone 12 Mini', '95000.00', 5, 'Smart Phones', '90000.00', 4, 'Good'),
(3, 'Oneplus 8 Pro', '65000.00', 5, 'Smart Phones', '60000.00', 4, 'Bad Bad BAD'),
(4, 'Sony Xperia 5 II', '80000.00', 5, 'Smart Phones', '75000.00', 3, 'Sony Best'),
(5, 'Asus Rog Phone 3', '50000.00', 5, 'Smart Phones', '45000.00', 1, 'Worst'),
(6, 'Edifier Airpulse A300 Pro', '140000.00', 5, 'Sound System', '135000.00', 5, 'Too Good'),
(7, 'Conion Microwave Oven', '18000.00', 5, 'Home Appliances', '15000.00', 5, 'Good Oven'),
(8, 'ROG Zephyrus G14', '180000.00', 5, 'Laptops', '175000.00', 5, 'Excellent'),
(9, 'Sony KD-X8000G 75', '225000.00', 5, 'TV', '220000.00', 5, 'Nice');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_id`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackSI`);

--
-- Indexes for table `ordernum`
--
ALTER TABLE `ordernum`
  ADD PRIMARY KEY (`order_num`),
  ADD KEY `Customer_id` (`Customer_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `Order_Date` (`Order_Date`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackSI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ordernum`
--
ALTER TABLE `ordernum`
  MODIFY `order_num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ordernum`
--
ALTER TABLE `ordernum`
  ADD CONSTRAINT `ordernum_ibfk_1` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Customer_id`),
  ADD CONSTRAINT `ordernum_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`Product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
