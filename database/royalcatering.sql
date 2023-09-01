-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 01:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royalcatering`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_table`
--

CREATE TABLE `book_table` (
  `tbl_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Date_Time` varchar(255) NOT NULL,
  `Person` int(11) NOT NULL,
  `Request` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_table`
--

INSERT INTO `book_table` (`tbl_id`, `Name`, `Email`, `Date_Time`, `Person`, `Request`) VALUES
(1, 'jigna patel', 'jigna@gmail.com', '08/09/2023 12:30 PM', 2, 'Special Event');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addcategory`
--

CREATE TABLE `tbl_addcategory` (
  `category_id` int(11) NOT NULL,
  `Category_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_addcategory`
--

INSERT INTO `tbl_addcategory` (`category_id`, `Category_Name`) VALUES
(1, 'BreakFast'),
(2, 'Lunch'),
(3, 'Dinner');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `Password`) VALUES
(1, 'royaladmin@gmail.com', 'royal123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `added_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `pro_id`, `c_id`, `subtotal`, `added_date`, `status`) VALUES
(1, 1, 0, 110, '10/08/2023 03:28:48 pm', 'pending'),
(2, 1, 0, 110, '10/08/2023 03:32:12 pm', 'pending'),
(3, 5, 0, 50, '10/08/2023 03:32:28 pm', 'pending'),
(4, 5, 0, 50, '10/08/2023 03:37:15 pm', 'pending'),
(5, 1, 0, 110, '10/08/2023 04:03:20 pm', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `CityName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `state_id`, `CityName`) VALUES
(1, 1, 'Ahemdabad'),
(2, 1, 'Surat'),
(3, 1, 'Rajkot'),
(4, 1, 'Vadodara'),
(5, 3, 'Mumbai'),
(6, 3, 'Nagpur'),
(7, 2, 'Jaipur'),
(8, 2, 'Udaipur'),
(9, 4, 'Varansi'),
(10, 4, 'Lakhnow');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `Name`, `Email`, `Phone`, `Message`) VALUES
(1, 'jigna', 'jigna@gmail.com', 9856622266, 'thnks for contact with us');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `c_id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `Registerd_date_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`c_id`, `FirstName`, `LastName`, `Email`, `Password`, `Photo`, `Gender`, `Phone`, `state_id`, `city_id`, `Registerd_date_time`) VALUES
(1, 'jigna', 'patel', 'jigna434@gmail.com', 'amlnbmFwYXRlbA==', 'upload/image/face6.jpg', 'female', 9856321477, 1, 1, '05/08/2023 12:50:47 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pro_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Product_Photo` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Add_Date` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `subcat_id`, `Product_Name`, `Product_Photo`, `Price`, `Add_Date`, `Description`, `category_id`) VALUES
(1, 1, 'Aloo Paratha', 'upload/product_image/aloo paratha.jpg', 110, '2023-06-28', 'Good Food', 1),
(2, 2, 'Masala Sandwich', 'upload/product_image/veg sendwitch.jpg', 80, '2023-06-28', 'Good Food', 1),
(3, 3, 'Full Gujarati Dish', 'upload/product_image/traditional dish.jpg', 160, '2023-06-28', 'Full Gujarat dish (2 type of subji , roti , dal rice, salad, papad)', 2),
(4, 5, 'Chhole Bhature', 'upload/product_image/chhole bhature.jpg', 110, '2023-06-28', 'Testy Punjabi Food', 3),
(5, 1, 'lachha parathe', 'upload/product_image/paratha.jpg', 50, '2023-07-11', 'sdzff', 1),
(6, 6, 'Cold Coffee', 'upload/product_image/coffee.jpg', 210, '2023-08-04', 'Cold coffee', 1),
(7, 7, 'Tradistional Dish', 'upload/product_image/traditional dish.jpg', 350, '2023-08-04', 'Best Tradiatioanl dish', 2),
(8, 10, 'Guj.Dal-rice', 'upload/product_image/dal rice.jpg', 100, '2023-08-04', 'Special Guj Dal-rice', 2),
(9, 8, 'Veg. Manchurian', 'upload/product_image/veg manchurian.jpg', 180, '2023-08-04', 'Vegitable Manchurian', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(11) NOT NULL,
  `StateName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `StateName`) VALUES
(1, 'Gujarat'),
(2, 'Rajsthan'),
(3, 'Maharastra'),
(4, 'Uttar Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcat_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `SubCategory_Name` varchar(255) NOT NULL,
  `Added_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcat_id`, `category_id`, `SubCategory_Name`, `Added_date`) VALUES
(1, 1, 'Paratha', '28/06/2023'),
(2, 1, 'Sandwich', '2023-06-28'),
(3, 2, 'Gujarati Dish', '2023-06-28'),
(4, 2, 'Panjabi Dish', '2023-06-28'),
(5, 3, 'Punjabi Dish', '2023-06-28'),
(6, 1, 'Coffee', '2023-08-04'),
(7, 2, 'Special Gujarati Dish', '2023-08-04'),
(8, 3, 'Chinese Food', '2023-08-04'),
(9, 3, 'Chhole Kulcha', '2023-08-04'),
(10, 2, 'Paratha', '2023-08-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_table`
--
ALTER TABLE `book_table`
  ADD PRIMARY KEY (`tbl_id`);

--
-- Indexes for table `tbl_addcategory`
--
ALTER TABLE `tbl_addcategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `subcat_id` (`subcat_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_table`
--
ALTER TABLE `book_table`
  MODIFY `tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_addcategory`
--
ALTER TABLE `tbl_addcategory`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD CONSTRAINT `state_id` FOREIGN KEY (`state_id`) REFERENCES `tbl_state` (`state_id`);

--
-- Constraints for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD CONSTRAINT `city_id` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_id`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `subcat_id` FOREIGN KEY (`subcat_id`) REFERENCES `tbl_subcategory` (`subcat_id`);

--
-- Constraints for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `tbl_addcategory` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
