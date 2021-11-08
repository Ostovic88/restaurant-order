-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2021 at 10:16 PM
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
-- Database: `restaurant-orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` int(5) UNSIGNED NOT NULL,
  `ipaddress` varchar(50) NOT NULL,
  `page` varchar(50) NOT NULL,
  `parameters` varchar(50) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `text` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `ipaddress`, `page`, `parameters`, `time`, `text`) VALUES
(1608, '::1', '/restaurant-order/admin/add-category.php', '', '2021-09-08 23:34:31', 'You added category successfuly.'),
(1609, '::1', '/restaurant-order/admin/add-category.php', '', '2021-09-08 23:48:44', 'You added category successfuly.'),
(1610, '::1', '/restaurant-order/admin/delete-category.php', 'id=85&image_name=', '2021-09-08 23:49:06', 'You deleted category successfuly.'),
(1611, '::1', '/restaurant-order/admin/add-food.php', '', '2021-09-08 23:50:12', 'Food added successfully.'),
(1612, '::1', '/restaurant-order/admin/delete-food.php', 'id=190&image_name=Food-Name-1793.jpg', '2021-09-08 23:50:47', 'Food deleted successfully.'),
(1613, '::1', '/restaurant-order/order.php', 'food_id=188', '2021-09-08 23:53:43', 'Food ordered successfully!'),
(1614, '::1', '/restaurant-order/admin/update-category.php', 'id=84', '2021-09-09 00:02:28', 'You updated category successfuly.Aleksandar Ostović'),
(1615, '::1', '/restaurant-order/admin/update-category.php', 'id=84', '2021-09-09 00:03:54', '0'),
(1616, '::1', '/restaurant-order/admin/update-category.php', 'id=84', '2021-09-09 00:04:35', '0'),
(1617, '::1', '/restaurant-order/admin/update-category.php', 'id=84', '2021-09-09 00:05:54', 'You updated category successfuly.0'),
(1618, '::1', '/restaurant-order/admin/update-category.php', 'id=84', '2021-09-09 00:06:32', 'You updated category successfuly.0'),
(1619, '::1', '/restaurant-order/admin/update-category.php', 'id=84', '2021-09-09 00:07:08', 'You updated category successfuly.0'),
(1620, '::1', '/restaurant-order/admin/update-category.php', 'id=84', '2021-09-09 00:07:27', 'You updated category successfuly.-Aleksandar Ostović'),
(1621, '::1', '/restaurant-order/admin/update-category.php', 'id=84', '2021-09-09 00:08:48', 'You updated category successfuly.-Aleksandar Ostović'),
(1622, '::1', '/restaurant-order/admin/update-category.php', 'id=84', '2021-09-09 00:09:03', 'You updated category successfuly.-Aleksandar Ostović'),
(1623, '::1', '/restaurant-order/admin/update-food.php', 'id=188', '2021-09-09 00:09:55', 'Food updated successfully.-Aleksandar Ostović'),
(1624, '::1', '/restaurant-order/admin/add-food.php', '', '2021-09-09 00:10:35', 'Food added successfully.'),
(1625, '::1', '/restaurant-order/admin/add-food.php', '', '2021-09-09 00:14:01', 'Food added successfully.'),
(1626, '::1', '/restaurant-order/admin/add-food.php', '', '2021-09-09 00:15:19', 'Food added successfully.'),
(1627, '::1', '/restaurant-order/admin/update-food.php', 'id=188', '2021-09-09 00:15:34', 'Food updated successfully.-Aleksandar Ostović'),
(1628, '::1', '/restaurant-order/admin/add-food.php', '', '2021-09-09 00:15:45', 'Food added successfully.'),
(1629, '::1', '/restaurant-order/admin/add-food.php', '', '2021-09-09 00:17:19', 'Food added successfully.'),
(1630, '::1', '/restaurant-order/admin/add-food.php', '', '2021-09-09 00:17:31', 'Food added successfully.'),
(1631, '::1', '/restaurant-order/admin/add-food.php', '', '2021-09-09 00:18:06', 'Food added successfully.'),
(1632, '::1', '/restaurant-order/admin/update-food.php', 'id=192', '2021-09-09 00:19:23', 'Food updated successfully.-Aleksandar Ostović'),
(1633, '::1', '/restaurant-order/admin/delete-food.php', 'id=192&image_name=', '2021-09-09 00:20:02', 'Food deleted successfully.'),
(1634, '::1', '/restaurant-order/admin/delete-food.php', 'id=193&image_name=', '2021-09-09 00:20:06', 'Food deleted successfully.'),
(1635, '::1', '/restaurant-order/admin/delete-food.php', 'id=194&image_name=', '2021-09-09 00:20:08', 'Food deleted successfully.'),
(1636, '::1', '/restaurant-order/admin/delete-food.php', 'id=191&image_name=', '2021-09-09 00:20:09', 'Food deleted successfully.'),
(1637, '::1', '/restaurant-order/admin/delete-food.php', 'id=196&image_name=', '2021-09-09 00:20:11', 'Food deleted successfully.'),
(1638, '::1', '/restaurant-order/admin/delete-food.php', 'id=195&image_name=', '2021-09-09 00:20:13', 'Food deleted successfully.'),
(1639, '::1', '/restaurant-order/admin/delete-food.php', 'id=197&image_name=', '2021-09-09 00:20:15', 'Food deleted successfully.'),
(1640, '::1', '/restaurant-order/admin/delete-category.php', 'id=84&image_name=Food_category_22510.jpg', '2021-09-09 12:18:55', 'You deleted category successfuly.'),
(1641, '::1', '/restaurant-order/order.php', 'food_id=158', '2021-09-11 16:03:38', 'Food ordered successfully!'),
(1642, '::1', '/restaurant-order/order.php', 'food_id=158', '2021-09-11 16:04:18', 'Food ordered successfully!'),
(1643, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 16:16:10', 'Food ordered successfully!'),
(1644, '::1', '/restaurant-order/order.php', 'food_id=158', '2021-09-11 16:32:46', 'Food ordered successfully!'),
(1645, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 16:42:33', 'Food ordered successfully!'),
(1646, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 16:43:53', 'Food ordered successfully!'),
(1647, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 16:44:15', 'Food ordered successfully!'),
(1648, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 16:44:42', 'Food ordered successfully!'),
(1649, '::1', '/restaurant-order/order.php', 'food_id=158', '2021-09-11 16:45:01', 'Food ordered successfully!'),
(1650, '::1', '/restaurant-order/order.php', 'food_id=158', '2021-09-11 17:02:57', 'Food ordered successfully!'),
(1651, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 17:03:59', 'Food ordered successfully!'),
(1652, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 17:05:04', 'Food ordered successfully!'),
(1653, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 17:20:16', 'Food ordered successfully!'),
(1654, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 17:20:38', 'Food ordered successfully!'),
(1655, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 17:21:39', 'Food ordered successfully!'),
(1656, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 17:33:16', 'Food ordered successfully!'),
(1657, '::1', '/restaurant-order/userregistration.php', '', '2021-09-11 19:37:56', 'User registred successfully.'),
(1658, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 19:42:26', 'Food ordered successfully!'),
(1659, '::1', '/restaurant-order/order.php', 'food_id=158', '2021-09-11 19:43:41', 'Food ordered successfully!'),
(1660, '::1', '/restaurant-order/userregistration.php', '', '2021-09-11 19:53:59', 'User registred successfully.'),
(1661, '::1', '/restaurant-order/order.php', 'food_id=161', '2021-09-11 19:54:33', 'Food ordered successfully!'),
(1662, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 19:55:50', 'Food ordered successfully!'),
(1663, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 20:02:16', 'Food ordered successfully!'),
(1664, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 20:02:18', 'Food ordered successfully!'),
(1665, '::1', '/restaurant-order/order.php', 'food_id=161', '2021-09-11 20:02:40', 'Food ordered successfully!'),
(1666, '::1', '/restaurant-order/order.php', 'food_id=158', '2021-09-11 20:03:18', 'Food ordered successfully!'),
(1667, '::1', '/restaurant-order/userregistration.php', '', '2021-09-11 20:03:40', 'User registred successfully.'),
(1668, '::1', '/restaurant-order/order.php', 'food_id=161', '2021-09-11 20:07:51', 'Food ordered successfully!'),
(1669, '::1', '/restaurant-order/userregistration.php', '', '2021-09-11 20:10:08', 'User registred successfully.'),
(1670, '::1', '/restaurant-order/order.php', 'food_id=161', '2021-09-11 20:10:41', 'Food ordered successfully!'),
(1671, '::1', '/restaurant-order/order.php', 'food_id=158', '2021-09-11 20:10:53', 'Food ordered successfully!'),
(1672, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 20:11:05', 'Food ordered successfully!'),
(1673, '::1', '/restaurant-order/order.php', 'food_id=157', '2021-09-11 20:11:18', 'Food ordered successfully!');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `email`, `password`) VALUES
(106, 'Aleksandar Ostović', 'ostovic@skola.com', '21232f297a57a5a743894a0e4a801fc3'),
(107, 'Dušanka Dokić', 'dokic@skola.com', 'b299d0082d7a9e8c4b185743e9789c00'),
(126, 'Janna Tyson', 'zujep@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(130, 'Damian Peters', 'poluqak@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(133, 'Cade Randall', 'gupure@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(146, 'Sasha Palmer', 'visoganab@mailinator.com', '7aae5be5784fa35c0d30131b1e90bce8'),
(150, 'Madeson Duran', 'jezijegoce@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(156, 'Gregory Pickett', 'wumubuvat@mailinator.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(157, 'Cadman Henson', 'fogagoces@mailinator.com', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(56, 'Pizza', 'Food_category_29259.jpg', 'Yes', 'Yes'),
(57, 'Burger', 'Food_category_81181.jpg', 'Yes', 'Yes'),
(58, 'Chicken', 'Food_category_20456.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(157, 'Large Burger', 'Not so bad!', '4.86', 'Food_name_4982.jpg', 57, 'Yes', 'Yes'),
(158, 'Small Pizza', 'Excelent!', '2.56', 'Food_name_6441.jpg', 56, 'Yes', 'Yes'),
(161, 'The best Chicken', 'Big Chicken', '7.25', 'Food_name_945.jpg', 58, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `id_user`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(44, 'Large Burger', '4.86', 1, '4.86', '2021-09-11 09:42:26', 'Ordered', 20, 'Milos', '5648486', 'milos@skola.com', 'fafasfas'),
(45, 'Small Pizza', '2.56', 1, '2.56', '2021-09-11 09:43:41', 'Ordered', 20, 'dasda', '2312312', 'milos@skola.com', 'dasdas'),
(48, 'Large Burger', '4.86', 1, '4.86', '2021-09-11 10:02:16', 'Ordered', 21, 'dasdas', '3423', 'aco@skola.com', 'fasfas'),
(49, 'Large Burger', '4.86', 1, '4.86', '2021-09-11 10:02:18', 'Ordered', 21, 'dasdas', '3423', 'aco@skola.com', 'fasfas'),
(50, 'The best Chicken', '7.25', 1, '7.25', '2021-09-11 10:02:40', 'Ordered', 21, 'dasdas', '3213', 'aco@skola.com', 'gfdasgdas'),
(53, 'The best Chicken', '7.25', 1, '7.25', '2021-09-11 10:10:41', 'Ordered', 23, 'dsadas', '21312', 'test@skola.com', 'dasdas'),
(54, 'Small Pizza', '2.56', 1, '2.56', '2021-09-11 10:10:53', 'Ordered', 23, 'fasfas', '231321', 'test@skola.com', 'fasfas'),
(55, 'Large Burger', '4.86', 1, '4.86', '2021-09-11 10:11:05', 'Ordered', 23, 'ffasf', '12312', 'test@skola.com', 'fasfasfa'),
(56, 'Large Burger', '4.86', 1, '4.86', '2021-09-11 10:11:18', 'Ordered', 23, 'fasfasf', '3232', 'test@skola.com', 'fasfasfasfa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `user_nam` varchar(150) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `user_nam`, `user_email`, `user_password`, `user_address`) VALUES
(20, 'Milos', 'milos@skola.com', 'e1eb43c86554bfe19ed8fc6816cc242b', 'fasfasa'),
(21, 'Aco', 'aco@skola.com', '3b320df82342204216b62f1da0a0671f', 'gfaffa'),
(23, 'Test', 'test@skola.com', 'e88a254ce4248cca0a7a84eb59727474', 'tasfasfas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1674;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD CONSTRAINT `tbl_food_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
