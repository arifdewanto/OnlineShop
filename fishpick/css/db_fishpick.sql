-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 08:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fishpick`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Admin Website', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '+6285694969245', 'adminwebsite22@gmail.com', 'Jl. Margasatwa Raya Kec Cilandak Kota Jakarta Selatan Daerah Khusus Ibukota Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(12, 'Cupang'),
(14, 'Supplement');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `data_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `data_created`) VALUES
(7, 12, 'Bette Half Moon Red', 400000, '<p>Lorem ipsum dolor sit amet antiopam assentior aliquyam usu arcu ei vis odio inimicus dicunt usu aliquam qui his cursus.<br /><br />\r\nfacilisis elementum duo et antiopam eleifend inimicus kasd justo et nec te aliquam inimicus impedit duo repudiandae corrumpit aliquam ipsum elementum ullamcorper facilisis facilisis Vulputate takimata aliquam ipsum at Ut aenean pretium takimata temporibus labore donec pretium eu aliquyam et ullamcorper donec ipsum consequat ei temporibus cetero antiopam.<br /><br />\r\n<br /><br />\r\nLorem ipsum dolor sit amet antiopam assentior aliquyam usu arcu ei vis odio inimicus dicunt usu aliquam qui his cursus.<br /><br />\r\nfacilisis elementum duo et antiopam eleifend inimicus kasd justo et nec te aliquam inimicus impedit duo repudiandae corrumpit aliquam ipsum elementum ullamcorper facilisis facilisis Vulputate takimata aliquam ipsum at Ut aenean pretium takimata temporibus labore donec pretium eu aliquyam et ullamcorper donec ipsum consequat ei temporibus cetero antiopam.</p></p>\r\n', 'produk1649436551.jpg', 1, '2022-04-08 16:49:11'),
(8, 14, 'Betta Vit 100 gr Makanan Ikan Hias Pelet Cupang', 5000, '<p>&lt;p&gt;Lorem ipsum dolor sit amet antiopam assentior aliquyam usu arcu ei vis odio inimicus dicunt usu aliquam qui his cursus.&lt;br /&gt;<br />\r\nfacilisis elementum duo et antiopam eleifend inimicus kasd justo et nec te aliquam inimicus impedit duo repudiandae corrumpit aliquam ipsum elementum ullamcorper facilisis facilisis Vulputate takimata aliquam ipsum at Ut aenean pretium takimata temporibus labore donec pretium eu aliquyam et ullamcorper donec ipsum consequat ei temporibus cetero antiopam.&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\nLorem ipsum dolor sit amet antiopam assentior aliquyam usu arcu ei vis odio inimicus dicunt usu aliquam qui his cursus.&lt;br /&gt;<br />\r\nfacilisis elementum duo et antiopam eleifend inimicus kasd justo et nec te aliquam inimicus impedit duo repudiandae corrumpit aliquam ipsum elementum ullamcorper facilisis facilisis Vulputate takimata aliquam ipsum at Ut aenean pretium takimata temporibus labore donec pretium eu aliquyam et ullamcorper donec ipsum consequat ei temporibus cetero antiopam.&lt;/p&gt;</p>\r\n', 'produk1649438040.jpg', 1, '2022-04-08 17:14:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `caregory_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
