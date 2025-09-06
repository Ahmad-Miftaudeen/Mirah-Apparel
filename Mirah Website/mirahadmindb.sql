-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2025 at 10:15 PM
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
-- Table structure for table `admin`
--
CREATE DATABASE mirahadmindb;
CREATE TABLE `admin` (
  `Admin_name` varchar(255) DEFAULT NULL,
  `Password_1` varchar(255) DEFAULT NULL,
  `Password_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_name`, `Password_1`, `Password_2`) VALUES
('Halimah Miftaudeen-Rauf', 'mirahdeen123', 'mirahdeen456'),
('Hafsoh Miftaudeen-Rauf', 'mirahdeen123', 'mirahdeen456'),
('Habibah Miftaudeen-Rauf', 'mirahdeen123', 'mirahdeen456');

-- --------------------------------------------------------

--
-- Table structure for table `admin_post`
--

CREATE TABLE `admin_post` (
  `Product ID` int(255) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `Img_link` varchar(200) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Created at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_post`
--

INSERT INTO `admin_post` (`Product ID`, `Description`, `Img_link`, `Category`, `Created at`) VALUES
(83, 'Zippered Navy Blue Embroidered Gown ₺2500 - $61<br>V-Shape Long Navy Blue Scarf-like Hijab ₺600 - $15', 'Navy_blue_1.jpg', 'navyblueid', '2025-09-02 16:55:08'),
(84, 'Yellow Gold A-Shape Gown ₺1500 - $37<br>Round-Shape Medium Yellow Gold Hijab ₺450 - $11', 'Yellow_1.jpg', 'yellowid', '2025-09-02 16:55:42'),
(85, 'Emerald Green Nidha Fabric A-Shape Gown ₺1500 - $37<br>Round-Shape Medium Size Emerald Green Hijab ₺450 - $11', 'Emerald_2.jpg', 'greenid', '2025-09-02 16:56:14'),
(86, 'Navy Blue Stone Embroidered Gown ₺2500 - $61<br>Round-Shape Medium Size White Hijab ₺450 - $11', 'Navy_blue_stone_2.jpg', 'navyblueid', '2025-09-02 16:56:44'),
(87, 'Black Silver Embroidered Gown ₺2500 - $61<br>U-Shape Shoulder Cinched Medium Size White Hijab ₺600 - $15', 'Black_silver_1.jpg', 'blackid', '2025-09-02 16:57:18'),
(88, 'White Golden Embroidered Gown ₺2500 - $61<br>U-Shape Short White Embroidered Hijab ₺400 - $10', 'White_golden_1.jpg', 'whiteid', '2025-09-02 16:58:34'),
(89, 'Black Golden Embroidered Gown ₺2500 - $61<br>U-Shape Long Pink Hijab ₺600 - $15<br>Golden Fashion Brooch ₺200 - $5', 'Pink.jpg', 'blackid', '2025-09-02 16:59:47'),
(90, 'Navy Blue Stone Embroidered Gown ₺2500 - $61<br>Square-Shape Medium Size Navy Blue Hijab ₺500 - $12.21', 'Navy_blue_2.jpg', 'navyblueid', '2025-09-02 17:00:52'),
(91, 'Black Silver Embroidered Gown ₺2500 - $61<br>V-Shape Medium size Black Hijab ₺450 - $11', 'Black_1.jpg', 'blackid', '2025-09-02 17:01:38'),
(92, 'Navy Blue Stone Embroidered Gown ₺2500 - $61<br>V-Shape Long Pink Scarf-like Hijab ₺600 - $15', 'Navy_pink_1.jpg', 'navyblueid', '2025-09-02 17:02:52'),
(93, 'Zippered Brown Pink Gown ₺2500 - $61<br>Zippered U-Shape Short White Embroidered Hijab ₺400 - $10', 'orange_peach_1.jpg', 'orangepeachid', '2025-09-02 17:03:58'),
(94, 'Emerald Green Nidha Fabric A-Shape Gown ₺1500 - $37<br>Two Layers Long White Hijab with frontal tie ₺700 - $17', 'Green_frontal_tie_1.jpg', 'greenid', '2025-09-02 17:04:43'),
(95, 'Navy Blue Stone Embroidered Gown ₺2500 - $61<br>Square-Shape Medium Size Pink Hijab ₺500 - $12.21', 'Navy_pink_2.jpg', 'navyblueid', '2025-09-02 17:05:13'),
(97, 'Black Golden Embroidered Gown ₺2500 - $61<br>Zippered U-Shape Short Black Hijab ₺400 - $10', 'Black_Golden_1.jpg', 'blackid', '2025-09-02 17:07:35'),
(98, 'White Stone Embroidered Gown ₺2500 - $61<br>Two Layers Short White Hijab ₺400 - $10', 'White_stoned_1.jpg', 'whiteid', '2025-09-02 17:08:01'),
(101, 'Navy Blue Stone Embroidered Gown ₺2500 - $61<br>Zippered U-Shape Short Pink Hijab ₺400 - $10<br>Silver Fashion Brooch ₺200 - $5', 'Navy_pink_3.jpg', 'navyblueid', '2025-09-02 19:44:16');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_post`
--
ALTER TABLE `admin_post`
  ADD PRIMARY KEY (`Product ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_post`
--
ALTER TABLE `admin_post`
  MODIFY `Product ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
