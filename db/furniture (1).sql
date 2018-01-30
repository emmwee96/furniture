-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2018 at 05:13 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `image`) VALUES
(1, 'wardrobes', '/images/category/wardrobe2.jpg'),
(2, 'kitchen cabinets', '/images/category/kitchen-cabinet.jpg'),
(3, 'living room cabinets', '/images/category/living_room.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `custom_product`
--

CREATE TABLE `custom_product` (
  `custom_product_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `category_id` int(11) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `banner` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `custom_product`
--

INSERT INTO `custom_product` (`custom_product_id`, `name`, `category_id`, `thumbnail`, `banner`) VALUES
(1, 'open-wardrobe', 1, '', '/images/product/custom/open.jpg'),
(2, 'swing-door-wardrobe', 1, '', '/images/product/custom/swing_door_wardrobe.jpg'),
(3, 'sliding-wardrobe', 1, '', '/images/product/custom/sliding.jpg'),
(4, 'top-cabinet', 2, '/images/products/custom/ceiling.jpg', '/images/product/custom/ceiling.jpg'),
(5, 'bottom-cabinet', 2, '/images/products/custom/floor.jpg', '/images/product/custom/floor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `custom_product_add_ons`
--

CREATE TABLE `custom_product_add_ons` (
  `custom_product_add_ons_id` int(11) NOT NULL,
  `label` varchar(128) NOT NULL,
  `label_id` varchar(32) NOT NULL,
  `custom_product_id` int(11) NOT NULL,
  `value` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `custom_product_add_ons`
--

INSERT INTO `custom_product_add_ons` (`custom_product_add_ons_id`, `label`, `label_id`, `custom_product_id`, `value`) VALUES
(1, 'drawers', 'c_drawers', 1, '500.00'),
(2, 'shelving', 'c_shelving', 1, '50.00'),
(3, 'drawers', 'c_drawers', 2, '500.00'),
(4, 'shelving', 'c_shelving', 2, '50.00'),
(5, 'drawers', 'c_drawers', 3, '500.00'),
(6, 'shelving', 'c_shelving', 3, '50.00'),
(7, '3 layer drawer', '3_layer_drawer', 5, '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `custom_product_fields`
--

CREATE TABLE `custom_product_fields` (
  `custom_product_field_id` int(11) NOT NULL,
  `label` varchar(64) NOT NULL,
  `custom_product_id` int(11) NOT NULL,
  `label_id` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `custom_product_fields`
--

INSERT INTO `custom_product_fields` (`custom_product_field_id`, `label`, `custom_product_id`, `label_id`) VALUES
(1, 'Type', 1, 'c_type'),
(2, 'Internal Frame Material', 1, 'c_internal_frame_material'),
(3, 'External Frame Material', 1, 'c_external_frame_material'),
(4, 'Type', 2, 'c_type'),
(5, 'Internal Frame Material', 2, 'c_internal_frame_material'),
(6, 'External Frame Material', 2, 'c_external_frame_material'),
(7, 'Door Materials', 2, 'c_door_material'),
(8, 'Type', 3, 'c_type'),
(9, 'Internal Frame Material', 3, 'c_internal_frame_material'),
(10, 'External Frame Material', 3, 'c_external_frame_material'),
(11, 'Door Material', 3, 'c_door_material'),
(13, 'Type', 4, 'c_type'),
(14, 'Internal Frame Material', 4, 'c_internal_frame_material'),
(15, 'External Frame Material', 4, 'c_external_frame_material'),
(16, 'Door Material', 4, 'c_door_material'),
(17, 'Counter top material', 4, 'c_counter_top_material'),
(18, 'Internal Frame Material', 5, 'c_internal_frame_material'),
(19, 'External Frame Material', 5, 'c_external_frame_material'),
(20, 'Door Material', 5, 'c_door_material'),
(21, 'Counter Top Material', 5, 'c_counter_top_material');

-- --------------------------------------------------------

--
-- Table structure for table `custom_product_image`
--

CREATE TABLE `custom_product_image` (
  `custom_product_image_id` int(11) NOT NULL,
  `custom_product_id` int(11) NOT NULL,
  `url` varchar(256) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom_product_image`
--

INSERT INTO `custom_product_image` (`custom_product_image_id`, `custom_product_id`, `url`) VALUES
(8, 1, '/images/product/custom/open1.JPG'),
(9, 1, '/images/product/custom/open2.JPG'),
(10, 1, '/images/product/custom/open3.JPG'),
(11, 3, '/images/product/custom/slide3.jpg'),
(12, 3, '/images/product/custom/slide4.jpg'),
(13, 2, '/images/product/custom/swing5.jpg'),
(14, 5, '/images/product/custom/bottom_1.jpg'),
(15, 5, '/images/product/custom/bottom_2.jpg'),
(16, 5, '/images/product/custom/bottom_3.jpg'),
(17, 5, '/images/product/custom/bottom_4.jpg'),
(18, 4, '/images/product/custom/top_1.jpg'),
(19, 4, '/images/product/custom/top_2.jpg'),
(20, 4, '/images/product/custom/top_3.jpg'),
(21, 4, '/images/product/custom/top_4.jpg'),
(22, 4, '/images/product/custom/top_5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `custom_product_options`
--

CREATE TABLE `custom_product_options` (
  `custom_product_options_id` int(11) NOT NULL,
  `label` varchar(64) NOT NULL,
  `custom_product_fields_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `standard_white_pvc` decimal(10,2) NOT NULL,
  `standard_color_pvc` decimal(10,2) NOT NULL,
  `full_white_pvc` decimal(10,2) NOT NULL,
  `full_color_pvc` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `custom_product_options`
--

INSERT INTO `custom_product_options` (`custom_product_options_id`, `label`, `custom_product_fields_id`, `value`, `standard_white_pvc`, `standard_color_pvc`, `full_white_pvc`, `full_color_pvc`) VALUES
(1, 'Standard Height', 1, 100, '0.00', '0.00', '0.00', '0.00'),
(2, 'Full Height', 1, 100, '0.00', '0.00', '0.00', '0.00'),
(3, 'White PVC', 2, 100, '0.00', '0.00', '0.00', '0.00'),
(4, 'Color PVC', 2, 100, '0.00', '0.00', '0.00', '0.00'),
(5, 'Laminate', 3, 100, '340.00', '380.00', '360.00', '400.00'),
(6, 'Veener', 3, 100, '380.00', '430.00', '400.00', '440.00'),
(7, 'Standard Height', 4, 0, '0.00', '0.00', '0.00', '0.00'),
(8, 'Full Height', 4, 0, '0.00', '0.00', '0.00', '0.00'),
(9, 'White PVC', 5, 0, '0.00', '0.00', '0.00', '0.00'),
(10, 'Color PVC', 5, 0, '0.00', '0.00', '0.00', '0.00'),
(11, 'Laminate', 6, 0, '450.00', '500.00', '495.00', '550.00'),
(12, 'Veener', 6, 0, '500.00', '550.00', '550.00', '605.00'),
(13, 'Laminate Alum', 6, 0, '495.00', '550.00', '540.00', '600.00'),
(14, 'Veener Alum', 6, 0, '550.00', '605.00', '600.00', '660.00'),
(15, 'Standard Height', 8, 0, '0.00', '0.00', '0.00', '0.00'),
(16, 'Full Height', 8, 0, '0.00', '0.00', '0.00', '0.00'),
(17, 'White PVC', 9, 0, '0.00', '0.00', '0.00', '0.00'),
(18, 'Color PVC', 9, 0, '0.00', '0.00', '0.00', '0.00'),
(19, 'laminate', 10, 0, '450.00', '500.00', '495.00', '550.00'),
(20, 'Veener', 10, 0, '500.00', '550.00', '550.00', '605.00'),
(21, 'Laminate Alum', 10, 0, '495.00', '550.00', '540.00', '600.00'),
(22, 'Veener Alum', 10, 0, '550.00', '605.00', '600.00', '660.00'),
(23, 'Laminate', 11, 0, '0.00', '0.00', '0.00', '0.00'),
(24, 'Laminate', 7, 0, '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `custom_product_type`
--

CREATE TABLE `custom_product_type` (
  `custom_product_type_id` int(11) NOT NULL,
  `label` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address1` varchar(128) NOT NULL,
  `address2` varchar(128) NOT NULL,
  `postcode` varchar(32) NOT NULL,
  `state` varchar(32) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_id` int(11) NOT NULL DEFAULT '1',
  `city` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `address1`, `address2`, `postcode`, `state`, `total`, `timestamp`, `status_id`, `city`) VALUES
(13, 5, '2, Lorong 3,', 'Jalan Sri Pelangi 1, Taman Pelangi', '80400', 'Johor', '0.00', '2018-01-24 04:42:01', 1, 'Johor Bahru'),
(14, 6, '2, Lorong 3,', 'Jalan Sri Pelangi 1, Taman Pelangi', '80400', 'Johor', '0.00', '2018-01-24 04:42:57', 1, 'Johor Bahru');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `order_product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `options` longtext NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`order_product_id`, `order_id`, `total`, `options`, `product_id`, `name`) VALUES
(14, 13, '1290.00', '{\"c_type\":{\"label\":\"Full Height\",\"type\":\"option\",\"row\":{\"custom_product_options_id\":\"2\",\"label\":\"Full Height\",\"custom_product_fields_id\":\"1\",\"value\":\"100\",\"standard_white_pvc\":\"0.00\",\"standard_color_pvc\":\"0.00\",\"full_white_pvc\":\"0.00\",\"full_color_pvc\":\"0.00\"}},\"c_internal_frame_material\":{\"label\":\"White PVC\",\"type\":\"option\",\"row\":{\"custom_product_options_id\":\"3\",\"label\":\"White PVC\",\"custom_product_fields_id\":\"2\",\"value\":\"100\",\"standard_white_pvc\":\"0.00\",\"standard_color_pvc\":\"0.00\",\"full_white_pvc\":\"0.00\",\"full_color_pvc\":\"0.00\"}},\"c_external_frame_material\":{\"label\":\"Laminate\",\"type\":\"option\",\"row\":{\"custom_product_options_id\":\"5\",\"label\":\"Laminate\",\"custom_product_fields_id\":\"3\",\"value\":\"100\",\"standard_white_pvc\":\"340.00\",\"standard_color_pvc\":\"380.00\",\"full_white_pvc\":\"360.00\",\"full_color_pvc\":\"400.00\"}},\"c_drawers\":{\"label\":\"drawers\",\"type\":\"checkbox\",\"row\":{\"label\":\"drawers\",\"value\":\"500\"}}}', 1, 'open-wardrobe'),
(15, 14, '1260.00', '{\"c_type\":{\"label\":\"Standard Height\",\"type\":\"option\",\"row\":{\"custom_product_options_id\":\"1\",\"label\":\"Standard Height\",\"custom_product_fields_id\":\"1\",\"value\":\"100\",\"standard_white_pvc\":\"0.00\",\"standard_color_pvc\":\"0.00\",\"full_white_pvc\":\"0.00\",\"full_color_pvc\":\"0.00\"}},\"c_internal_frame_material\":{\"label\":\"White PVC\",\"type\":\"option\",\"row\":{\"custom_product_options_id\":\"3\",\"label\":\"White PVC\",\"custom_product_fields_id\":\"2\",\"value\":\"100\",\"standard_white_pvc\":\"0.00\",\"standard_color_pvc\":\"0.00\",\"full_white_pvc\":\"0.00\",\"full_color_pvc\":\"0.00\"}},\"c_external_frame_material\":{\"label\":\"Laminate\",\"type\":\"option\",\"row\":{\"custom_product_options_id\":\"5\",\"label\":\"Laminate\",\"custom_product_fields_id\":\"3\",\"value\":\"100\",\"standard_white_pvc\":\"340.00\",\"standard_color_pvc\":\"380.00\",\"full_white_pvc\":\"360.00\",\"full_color_pvc\":\"400.00\"}},\"c_drawers\":{\"label\":\"drawers\",\"type\":\"checkbox\",\"row\":{\"label\":\"drawers\",\"value\":\"500\"}}}', 1, 'open-wardrobe');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `order_status_id` int(11) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`order_status_id`, `status`) VALUES
(1, 'Pending'),
(2, 'In progress'),
(3, 'Completed'),
(4, 'Canceled');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `contact` varchar(32) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `contact`, `name`) VALUES
(5, '0', '167780275', 'Chong Yew Yang'),
(6, 'yewyang.chong@hotmail.com', '167780275', 'Robert Kwok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `custom_product`
--
ALTER TABLE `custom_product`
  ADD PRIMARY KEY (`custom_product_id`);

--
-- Indexes for table `custom_product_add_ons`
--
ALTER TABLE `custom_product_add_ons`
  ADD PRIMARY KEY (`custom_product_add_ons_id`);

--
-- Indexes for table `custom_product_fields`
--
ALTER TABLE `custom_product_fields`
  ADD PRIMARY KEY (`custom_product_field_id`);

--
-- Indexes for table `custom_product_image`
--
ALTER TABLE `custom_product_image`
  ADD PRIMARY KEY (`custom_product_image_id`);

--
-- Indexes for table `custom_product_options`
--
ALTER TABLE `custom_product_options`
  ADD PRIMARY KEY (`custom_product_options_id`);

--
-- Indexes for table `custom_product_type`
--
ALTER TABLE `custom_product_type`
  ADD PRIMARY KEY (`custom_product_type_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `status` (`status_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`order_product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`order_status_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `custom_product`
--
ALTER TABLE `custom_product`
  MODIFY `custom_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `custom_product_add_ons`
--
ALTER TABLE `custom_product_add_ons`
  MODIFY `custom_product_add_ons_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `custom_product_fields`
--
ALTER TABLE `custom_product_fields`
  MODIFY `custom_product_field_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `custom_product_image`
--
ALTER TABLE `custom_product_image`
  MODIFY `custom_product_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `custom_product_options`
--
ALTER TABLE `custom_product_options`
  MODIFY `custom_product_options_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `custom_product_type`
--
ALTER TABLE `custom_product_type`
  MODIFY `custom_product_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `order_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `order_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `order_status` (`order_status_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
