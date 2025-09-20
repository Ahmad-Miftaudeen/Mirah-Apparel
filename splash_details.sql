-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2025 at 10:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mirahadmindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `splash_details`
--

CREATE TABLE `splash_details` (
  `pageno` int(3) NOT NULL,
  `title` varchar(25) NOT NULL,
  `paragraph` varchar(540) NOT NULL,
  `imglink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `splash_details`
--

INSERT INTO `splash_details` (`pageno`, `title`, `paragraph`, `imglink`) VALUES
(1, 'Discover Your Style', 'Step into our virtual store and explore our latest collection of trendy and timeless clothing! From statement pieces to everyday essentials, or curated selection has something for everyone. Whether you\'re looking to upgrade your wardrobe or find the perfect gift, our website offers a seamless shopping experience that\'s both fun and convenient. Thanks for visiting! We\'re committed to delivering exceptional quality and style. Our team is dedicated to ensuring your shopping experience is nothing short of amazing. Happy browsing!', 'Navy_blue_1.jpg'),
(2, 'Elevate Your Wardrobe', 'Indulge in the art of fashion with our exquisite range of clothing! Our website features a handpicked selection of stylish and comfortable pieces, carefully crafted to make you look and feel your best. Browse through our collection today and discover your new favorite outfit!', 'orange_peach_1.jpg'),
(3, 'Shop Smart, Look Great', 'Get ready to revamp your wardrobe with our fantastic range of clothing! Our website offers a diverse selection of stylish and affordable pieces, perfect for any occasion. With easy navigation and secure payment options, shopping with us is a breeze. Explore our collection now and find your perfect fit! Best wishes. We\'re constantly updating our collection to the latest fashion trends.', 'Emerald_2.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
