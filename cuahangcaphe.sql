-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8081
-- Generation Time: Nov 14, 2023 at 11:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuahangcaphe`
--
CREATE DATABASE IF NOT EXISTS `cuahangcaphe` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cuahangcaphe`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `permission` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `name`, `email`, `permission`) VALUES
(2, 'admin', 'abcd1234', 'admin', 'admin@gmail.com', 1),
(3, 'tuhoang', 'abcd1234', 'Hoàng Anh Tú', 'tuhoang2564@gmail.com', 0),
(4, 'thanhhuyen', 'abcd1234', 'Trịnh Thị Thanh Huyền', 'thanhhuyen@gmail.com', 0),
(5, 'khachuy', 'abcd1234', 'Nguyễn Khắc Huy', 'khachuy@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE IF NOT EXISTS `client_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`id`, `name`, `email`, `phone_number`) VALUES
(1, 'Nguyễn Chí Hướng', 'nguyenhuong@gmail.com', '0323821222'),
(2, 'Nguyễn Chí Hướng', 'nguyenhuong@gmail.com', '0323821222'),
(3, 'Trịnh Thị Thanh Huyền', 'huyencutephomaique@gmail.com', '0239237423');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `sale_price` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `price`, `sale_price`, `category_name`, `image`, `description`, `status`) VALUES
(1, 'logo', '10', '0', 'logo', 'logo.jpg', 'logo', 1),
(2, 'video', '0', '0', 'video', 'mixkit-latte-art-810-medium.mp4', 'video', 1),
(3, 'caphe', '10', '0', 'caphe', '2bacc17dbeecf8f04c10a87260c09bdb.jpg', 'caphe', 0),
(4, 'Cà phê 1', '100000', '90000', 'Caphe1', 'c1.jpg', 'Cà phê ngon', 0),
(5, 'Cà phê 2 ', '120000 ', '100000 ', 'Caphe1 ', 'special11.jpg', 'Ngon! ', 1),
(6, 'Capuchino ', '99999 ', '89999 ', 'Caphe1  ', 'about2.jpg', 'Cà phê Capuchino ', 1),
(7, 'Cà phê 4', '89000', '79000', 'Caphe1', '2bdaabcd3a719141eeb5818142e87079_preview_rev_1.jpeg', 'Verry Important Persion', 1),
(8, 'Cà phê 5', '123000', '110000', 'Caphe1', '016a3372283916a4e84a41a7dd80f1f5.jpg', 'caphe', 1),
(9, 'Cà phê 6', '99000', '90000', 'Caphe1', '492ad92421c88f656b46c96a0f60e5f9.jpg', 'vuông', 1),
(10, 'Cà phê 7', '79999', '69999', 'Caphe1', '492ad92421c88f656b46c96a0f60e5f9_preview_rev_1.jpeg', 'caphe', 1),
(11, 'Cà phê 8', '200000', '179999', 'Caphe1', '5831323c9b7e900ec672aa72fbd3c4a9.jpg', 'caphe', 1),
(12, 'Cà phê 9 ', '180000 ', '160000 ', 'Caphe1 ', 'special9.jpg', 'Hương thơm đậm đà cùng vị ngọt thanh, sản phẩm cà phê của chúng tôi mang đến cho bạn trải nghiệm tuyệt vời và sự thư giãn sau một ngày làm việc căng thẳng. Hãy thưởng thức những giọt cà phê đặc biệt này để bắt đầu một ngày mới tràn đầy năng lượng.', 1),
(13, 'Cà phê 9', '120000', '100000', 'Caphe1', 'Artistic-barista-from-korea-who-draws-art-on-coffee-5912bf1ad0fc7__700.jpg', 'Với hậu vị đắng nhẹ và mùi hương thơm ngọt của cà phê, sản phẩm của chúng tôi được chế biến từ những hạt cà phê chất lượng cao. Chúng tôi tự hào mang đến cho bạn một cốc cà phê đậm đà và đáng nhớ, giúp bạn tận hưởng những khoảnh khắc thư giãn.', 1),
(14, 'Slide 1', '0', '0', 'slide', 'Slide1.png', 'This is slide', 1),
(15, 'Slide 2', '0', '0', 'slide', 'Slide2.png', 'This is slide', 1),
(16, 'Slide 3', '0', '0', 'slide', 'Slide3.png', 'This is slide', 1),
(17, 'Slide 4 ', '0', '0', 'slide', 'slide4.jpg', 'This is slide', 1),
(18, 'Cà phê 10', '320000', '159999', 'Caphe1', 'special2.jpg', 'caphe', 1),
(19, 'Cà phê 11', '123982', '213231', 'Caphe1', 'special12.jpg', 'caphe', 1),
(20, 'Cà phê 12', '123212', '123211', 'Caphe1', 'special13.jpg', 'caphe', 1),
(21, 'Cà phê 13', '82902', '23231', 'Caphe1', 'special14.jpg', 'caphe', 1),
(22, 'Cà phê 13 ', '17232 ', '12321 ', 'Caphe1 ', 'special7.jpg', 'caphe', 1),
(23, 'Cà phê 14', '79000', '69000', 'Caphe1', 'special4.jpg', 'Cà phê ở đây rất ngon', 1),
(24, 'Cà phê 15    ', '92383    ', '23241    ', 'Caphe1    ', 'special14.jpg', 'Cà phê ngon lắm !   ', 1),
(25, 'Cà phê 16', '90000', '70000', 'Caphe1', 'special8.jpg', 'Cà phê nghệ thuật cực đẹp và ngon !', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
