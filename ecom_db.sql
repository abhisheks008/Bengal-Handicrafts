-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 11:02 PM
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
-- Database: `ecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brandID` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `brandImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brandID`, `brandName`, `brandImage`) VALUES
(1, 'Tempur', 'https://www.dialabed.co.za/media/wysiwyg/Dial-a-bed/Brands/Tempur_Logo.png'),
(2, 'King Koil', 'https://www.dialabed.co.za/media/wysiwyg/Dial-a-bed/Brands/KING-KOIL-LOGO.png'),
(3, 'SEALY', 'https://www.dialabed.co.za/media/wysiwyg/Dial-a-bed/Brands/SEALY_LOGO.png'),
(4, 'Slumberking', 'https://www.dialabed.co.za/media/wysiwyg/Dial-a-bed/Brands/SLUMBERKING-LOGO_1.png'),
(5, 'Simmons', 'https://www.dialabed.co.za/media/wysiwyg/Dial-a-bed/Brands/SIMMONS-LOGO.png'),
(6, 'Forty Winks', 'https://www.dialabed.co.za/media/wysiwyg/Forty_Winks_Logo_homepage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catID` int(11) NOT NULL,
  `catTitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catID`, `catTitle`) VALUES
(1, 'Mattresses'),
(2, 'Bed Sets'),
(3, 'Mattress Protectors'),
(4, 'Pillows');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `clientID` int(11) NOT NULL,
  `clientName` varchar(255) NOT NULL,
  `clientJob` varchar(255) NOT NULL,
  `clientMessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clientID`, `clientName`, `clientJob`, `clientMessage`) VALUES
(1, 'Chiko Mutandwa', 'CEO of Havenly Beds', 'We try to give our customers the best service at a reasonable prices. When the customer is happy we at Havenly Beds are happy too.'),
(2, 'Ndai Sturrman', '', 'I am in love with Havenly Beds mattresses and their pillows. Beutiful and stunning!'),
(3, 'Elina Mutale', '', 'Havenly Beds products are for any modern home. Its good quality and eye catching'),
(4, 'Daliso Kabwe', '', 'Quality, durability and very stylish! The Bed Set, Pillows and Mattress Protectors still look BRAND NEW!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `orderAmount` decimal(8,2) NOT NULL,
  `orderTransaction` varchar(255) NOT NULL,
  `orderStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productTitle` varchar(255) NOT NULL,
  `productCategoryID` int(11) NOT NULL,
  `brandID` int(11) NOT NULL,
  `productPrice` decimal(8,2) NOT NULL,
  `productPriceDiscount` decimal(8,2) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `productDescription` text NOT NULL,
  `productShortDescription` text NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `productSection` varchar(255) NOT NULL,
  `productAvailability` varchar(255) NOT NULL,
  `productDelivery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productTitle`, `productCategoryID`, `brandID`, `productPrice`, `productPriceDiscount`, `productImage`, `productDescription`, `productShortDescription`, `productQuantity`, `productSection`, `productAvailability`, `productDelivery`) VALUES
(1, 'Lalapansi Mattress (10cm) - 76cm', 1, 6, '409.00', '300.00', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/s/y/synergy_mattress_only_1_s_2_3.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est nibh, gravida tempus elementum et, congue at nunc. Aliquam convallis metus nec tortor mollis, at auctor nisi pretium. Aenean gravida, felis sagittis pretium efficitur, felis libero imperdiet velit, at tempus nisi ex ac sem. Maecenas turpis neque, porta ut purus nec, ornare dignissim lacus. Nullam laoreet tristique ipsum, quis malesuada enim varius id. Donec tortor odio, semper in mollis ac, interdum dapibus augue. Etiam dignissim arcu mi, id convallis magna porttitor vitae. Etiam sit amet sem id dolor lobortis lobortis eget a nulla.\r\n\r\nSed elit ligula, dapibus vitae metus quis, condimentum cursus purus. Mauris consectetur maximus tincidunt. Nunc fermentum aliquet sapien gravida lacinia. Nunc eget justo dictum, eleifend metus et, vestibulum lorem. Fusce ultricies lorem ipsum. Pellentesque nec neque non nisi pulvinar pulvinar ut ut nunc. Phasellus nibh ex, consectetur ut dapibus ut, pretium non felis. Nulla facilisi. Duis fermentum odio ac porta semper.', 'Morbi scelerisque, ipsum sed molestie mattis, dolor lacus aliquet enim, at pellentesque erat eros id nisi. Quisque ut libero commodo justo venenatis maximus. Morbi efficitur sem eu enim dapibus pulvinar. Duis sed elit ex. Fusce ac ante id justo eleifend vestibulum. Phasellus semper tincidunt tortor, egestas aliquam urna commodo ut. Nunc egestas auctor mauris, eget ullamcorper metus tincidunt eu. Pellentesque dapibus vel risus id tempus.', 6, 'featured3', 'in Stock', '3-4 days'),
(2, 'Basel 500 Thread Count Pillow', 4, 4, '209.00', '150.00', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/p/i/pillow_beautyrest_01_med.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est nibh, gravida tempus elementum et, congue at nunc. Aliquam convallis metus nec tortor mollis, at auctor nisi pretium. Aenean gravida, felis sagittis pretium efficitur, felis libero imperdiet velit, at tempus nisi ex ac sem. Maecenas turpis neque, porta ut purus nec, ornare dignissim lacus. Nullam laoreet tristique ipsum, quis malesuada enim varius id. Donec tortor odio, semper in mollis ac, interdum dapibus augue. Etiam dignissim arcu mi, id convallis magna porttitor vitae. Etiam sit amet sem id dolor lobortis lobortis eget a nulla.\r\n\r\nSed elit ligula, dapibus vitae metus quis, condimentum cursus purus. Mauris consectetur maximus tincidunt. Nunc fermentum aliquet sapien gravida lacinia. Nunc eget justo dictum, eleifend metus et, vestibulum lorem. Fusce ultricies lorem ipsum. Pellentesque nec neque non nisi pulvinar pulvinar ut ut nunc. Phasellus nibh ex, consectetur ut dapibus ut, pretium non felis. Nulla facilisi. Duis fermentum odio ac porta semper.', 'Morbi scelerisque, ipsum sed molestie mattis, dolor lacus aliquet enim, at pellentesque erat eros id nisi. Quisque ut libero commodo justo venenatis maximus. Morbi efficitur sem eu enim dapibus pulvinar. Duis sed elit ex. Fusce ac ante id justo eleifend vestibulum. Phasellus semper tincidunt tortor, egestas aliquam urna commodo ut. Nunc egestas auctor mauris, eget ullamcorper metus tincidunt eu. Pellentesque dapibus vel risus id tempus.', 14, '', 'in Stock', '4-5 days'),
(3, 'Waterproof Mattress Protector - Single/Single', 3, 6, '219.66', '124.52', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/p/r/protect_a_bed_matt_protector_5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est nibh, gravida tempus elementum et, congue at nunc. Aliquam convallis metus nec tortor mollis, at auctor nisi pretium. Aenean gravida, felis sagittis pretium efficitur, felis libero imperdiet velit, at tempus nisi ex ac sem. Maecenas turpis neque, porta ut purus nec, ornare dignissim lacus. Nullam laoreet tristique ipsum, quis malesuada enim varius id. Donec tortor odio, semper in mollis ac, interdum dapibus augue. Etiam dignissim arcu mi, id convallis magna porttitor vitae. Etiam sit amet sem id dolor lobortis lobortis eget a nulla.\r\n\r\nSed elit ligula, dapibus vitae metus quis, condimentum cursus purus. Mauris consectetur maximus tincidunt. Nunc fermentum aliquet sapien gravida lacinia. Nunc eget justo dictum, eleifend metus et, vestibulum lorem. Fusce ultricies lorem ipsum. Pellentesque nec neque non nisi pulvinar pulvinar ut ut nunc. Phasellus nibh ex, consectetur ut dapibus ut, pretium non felis. Nulla facilisi. Duis fermentum odio ac porta semper.', 'Morbi scelerisque, ipsum sed molestie mattis, dolor lacus aliquet enim, at pellentesque erat eros id nisi. Quisque ut libero commodo justo venenatis maximus. Morbi efficitur sem eu enim dapibus pulvinar. Duis sed elit ex. Fusce ac ante id justo eleifend vestibulum. Phasellus semper tincidunt tortor, egestas aliquam urna commodo ut. Nunc egestas auctor mauris, eget ullamcorper metus tincidunt eu. Pellentesque dapibus vel risus id tempus.', 13, 'featured', 'in Stock', '3-4 days'),
(4, 'Simmons Winchester Medium King Bed Set', 2, 5, '34999.52', '33599.00', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/s/o/sova_medium_6.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est nibh, gravida tempus elementum et, congue at nunc. Aliquam convallis metus nec tortor mollis, at auctor nisi pretium. Aenean gravida, felis sagittis pretium efficitur, felis libero imperdiet velit, at tempus nisi ex ac sem. Maecenas turpis neque, porta ut purus nec, ornare dignissim lacus. Nullam laoreet tristique ipsum, quis malesuada enim varius id. Donec tortor odio, semper in mollis ac, interdum dapibus augue. Etiam dignissim arcu mi, id convallis magna porttitor vitae. Etiam sit amet sem id dolor lobortis lobortis eget a nulla.\r\n\r\nSed elit ligula, dapibus vitae metus quis, condimentum cursus purus. Mauris consectetur maximus tincidunt. Nunc fermentum aliquet sapien gravida lacinia. Nunc eget justo dictum, eleifend metus et, vestibulum lorem. Fusce ultricies lorem ipsum. Pellentesque nec neque non nisi pulvinar pulvinar ut ut nunc. Phasellus nibh ex, consectetur ut dapibus ut, pretium non felis. Nulla facilisi. Duis fermentum odio ac porta semper.', 'Morbi scelerisque, ipsum sed molestie mattis, dolor lacus aliquet enim, at pellentesque erat eros id nisi. Quisque ut libero commodo justo venenatis maximus. Morbi efficitur sem eu enim dapibus pulvinar. Duis sed elit ex. Fusce ac ante id justo eleifend vestibulum. Phasellus semper tincidunt tortor, egestas aliquam urna commodo ut. Nunc egestas auctor mauris, eget ullamcorper metus tincidunt eu. Pellentesque dapibus vel risus id tempus.', 2, 'bestseller', 'in Stock', '5-6 days'),
(5, 'Cotton 250 Thread Count Cotton Pillow', 4, 1, '149.96', '100.00', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/d/r/dreamzone_02_s.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est nibh, gravida tempus elementum et, congue at nunc. Aliquam convallis metus nec tortor mollis, at auctor nisi pretium. Aenean gravida, felis sagittis pretium efficitur, felis libero imperdiet velit, at tempus nisi ex ac sem. Maecenas turpis neque, porta ut purus nec, ornare dignissim lacus. Nullam laoreet tristique ipsum, quis malesuada enim varius id. Donec tortor odio, semper in mollis ac, interdum dapibus augue. Etiam dignissim arcu mi, id convallis magna porttitor vitae. Etiam sit amet sem id dolor lobortis lobortis eget a nulla.\r\n\r\nSed elit ligula, dapibus vitae metus quis, condimentum cursus purus. Mauris consectetur maximus tincidunt. Nunc fermentum aliquet sapien gravida lacinia. Nunc eget justo dictum, eleifend metus et, vestibulum lorem. Fusce ultricies lorem ipsum. Pellentesque nec neque non nisi pulvinar pulvinar ut ut nunc. Phasellus nibh ex, consectetur ut dapibus ut, pretium non felis. Nulla facilisi. Duis fermentum odio ac porta semper.', 'Morbi scelerisque, ipsum sed molestie mattis, dolor lacus aliquet enim, at pellentesque erat eros id nisi. Quisque ut libero commodo justo venenatis maximus. Morbi efficitur sem eu enim dapibus pulvinar. Duis sed elit ex. Fusce ac ante id justo eleifend vestibulum. Phasellus semper tincidunt tortor, egestas aliquam urna commodo ut. Nunc egestas auctor mauris, eget ullamcorper metus tincidunt eu. Pellentesque dapibus vel risus id tempus.', 10, 'featured3', 'in Stock', '3-4 days'),
(6, 'Sealy Luffiness Plush King Bed Set', 2, 3, '22999.00', '20300.99', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/l/u/luffness_grey_fluted_base_1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est nibh, gravida tempus elementum et, congue at nunc. Aliquam convallis metus nec tortor mollis, at auctor nisi pretium. Aenean gravida, felis sagittis pretium efficitur, felis libero imperdiet velit, at tempus nisi ex ac sem. Maecenas turpis neque, porta ut purus nec, ornare dignissim lacus. Nullam laoreet tristique ipsum, quis malesuada enim varius id. Donec tortor odio, semper in mollis ac, interdum dapibus augue. Etiam dignissim arcu mi, id convallis magna porttitor vitae. Etiam sit amet sem id dolor lobortis lobortis eget a nulla.\r\n\r\nSed elit ligula, dapibus vitae metus quis, condimentum cursus purus. Mauris consectetur maximus tincidunt. Nunc fermentum aliquet sapien gravida lacinia. Nunc eget justo dictum, eleifend metus et, vestibulum lorem. Fusce ultricies lorem ipsum. Pellentesque nec neque non nisi pulvinar pulvinar ut ut nunc. Phasellus nibh ex, consectetur ut dapibus ut, pretium non felis. Nulla facilisi. Duis fermentum odio ac porta semper.', 'Morbi scelerisque, ipsum sed molestie mattis, dolor lacus aliquet enim, at pellentesque erat eros id nisi. Quisque ut libero commodo justo venenatis maximus. Morbi efficitur sem eu enim dapibus pulvinar. Duis sed elit ex. Fusce ac ante id justo eleifend vestibulum. Phasellus semper tincidunt tortor, egestas aliquam urna commodo ut. Nunc egestas auctor mauris, eget ullamcorper metus tincidunt eu. Pellentesque dapibus vel risus id tempus.', 3, 'new', 'in Stock', '5-6 days'),
(7, 'Waterproof Mattress Protector - King/King', 3, 3, '419.42', '299.99', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/s/e/sealy_soft_touch_bamboo_mattress_protector_-pack_5.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est nibh, gravida tempus elementum et, congue at nunc. Aliquam convallis metus nec tortor mollis, at auctor nisi pretium. Aenean gravida, felis sagittis pretium efficitur, felis libero imperdiet velit, at tempus nisi ex ac sem. Maecenas turpis neque, porta ut purus nec, ornare dignissim lacus. Nullam laoreet tristique ipsum, quis malesuada enim varius id. Donec tortor odio, semper in mollis ac, interdum dapibus augue. Etiam dignissim arcu mi, id convallis magna porttitor vitae. Etiam sit amet sem id dolor lobortis lobortis eget a nulla.\r\n\r\nSed elit ligula, dapibus vitae metus quis, condimentum cursus purus. Mauris consectetur maximus tincidunt. Nunc fermentum aliquet sapien gravida lacinia. Nunc eget justo dictum, eleifend metus et, vestibulum lorem. Fusce ultricies lorem ipsum. Pellentesque nec neque non nisi pulvinar pulvinar ut ut nunc. Phasellus nibh ex, consectetur ut dapibus ut, pretium non felis. Nulla facilisi. Duis fermentum odio ac porta semper.', 'Morbi scelerisque, ipsum sed molestie mattis, dolor lacus aliquet enim, at pellentesque erat eros id nisi. Quisque ut libero commodo justo venenatis maximus. Morbi efficitur sem eu enim dapibus pulvinar. Duis sed elit ex. Fusce ac ante id justo eleifend vestibulum. Phasellus semper tincidunt tortor, egestas aliquam urna commodo ut. Nunc egestas auctor mauris, eget ullamcorper metus tincidunt eu. Pellentesque dapibus vel risus id tempus.', 8, 'featured3', 'in Stock', '3-4 days'),
(8, 'Sleeptite Mattress Single', 1, 4, '309.53', '249.99', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/s/i/simmons_elite_firm_king_mattress_extra_length.1.gif', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est nibh, gravida tempus elementum et, congue at nunc. Aliquam convallis metus nec tortor mollis, at auctor nisi pretium. Aenean gravida, felis sagittis pretium efficitur, felis libero imperdiet velit, at tempus nisi ex ac sem. Maecenas turpis neque, porta ut purus nec, ornare dignissim lacus. Nullam laoreet tristique ipsum, quis malesuada enim varius id. Donec tortor odio, semper in mollis ac, interdum dapibus augue. Etiam dignissim arcu mi, id convallis magna porttitor vitae. Etiam sit amet sem id dolor lobortis lobortis eget a nulla.\r\n\r\nSed elit ligula, dapibus vitae metus quis, condimentum cursus purus. Mauris consectetur maximus tincidunt. Nunc fermentum aliquet sapien gravida lacinia. Nunc eget justo dictum, eleifend metus et, vestibulum lorem. Fusce ultricies lorem ipsum. Pellentesque nec neque non nisi pulvinar pulvinar ut ut nunc. Phasellus nibh ex, consectetur ut dapibus ut, pretium non felis. Nulla facilisi. Duis fermentum odio ac porta semper.', 'Morbi scelerisque, ipsum sed molestie mattis, dolor lacus aliquet enim, at pellentesque erat eros id nisi. Quisque ut libero commodo justo venenatis maximus. Morbi efficitur sem eu enim dapibus pulvinar. Duis sed elit ex. Fusce ac ante id justo eleifend vestibulum. Phasellus semper tincidunt tortor, egestas aliquam urna commodo ut. Nunc egestas auctor mauris, eget ullamcorper metus tincidunt eu. Pellentesque dapibus vel risus id tempus.', 4, 'featured', 'in Stock', '3-4 days'),
(9, 'Plush King Mattress', 1, 4, '29799.54', '24399.99', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/w/i/winchester_firm_mattress_only_0__17.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est nibh, gravida tempus elementum et, congue at nunc. Aliquam convallis metus nec tortor mollis, at auctor nisi pretium. Aenean gravida, felis sagittis pretium efficitur, felis libero imperdiet velit, at tempus nisi ex ac sem. Maecenas turpis neque, porta ut purus nec, ornare dignissim lacus. Nullam laoreet tristique ipsum, quis malesuada enim varius id. Donec tortor odio, semper in mollis ac, interdum dapibus augue. Etiam dignissim arcu mi, id convallis magna porttitor vitae. Etiam sit amet sem id dolor lobortis lobortis eget a nulla.\r\n\r\nSed elit ligula, dapibus vitae metus quis, condimentum cursus purus. Mauris consectetur maximus tincidunt. Nunc fermentum aliquet sapien gravida lacinia. Nunc eget justo dictum, eleifend metus et, vestibulum lorem. Fusce ultricies lorem ipsum. Pellentesque nec neque non nisi pulvinar pulvinar ut ut nunc. Phasellus nibh ex, consectetur ut dapibus ut, pretium non felis. Nulla facilisi. Duis fermentum odio ac porta semper.', 'Morbi scelerisque, ipsum sed molestie mattis, dolor lacus aliquet enim, at pellentesque erat eros id nisi. Quisque ut libero commodo justo venenatis maximus. Morbi efficitur sem eu enim dapibus pulvinar. Duis sed elit ex. Fusce ac ante id justo eleifend vestibulum. Phasellus semper tincidunt tortor, egestas aliquam urna commodo ut. Nunc egestas auctor mauris, eget ullamcorper metus tincidunt eu. Pellentesque dapibus vel risus id tempus.', 2, 'featured', 'in Stock', '3-4 days'),
(10, 'Waterproof Mattress Protector - Queen /Queen', 3, 1, '329.03', '190.99', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/p/r/protect_a_bed_matt_protector_5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est nibh, gravida tempus elementum et, congue at nunc. Aliquam convallis metus nec tortor mollis, at auctor nisi pretium. Aenean gravida, felis sagittis pretium efficitur, felis libero imperdiet velit, at tempus nisi ex ac sem. Maecenas turpis neque, porta ut purus nec, ornare dignissim lacus. Nullam laoreet tristique ipsum, quis malesuada enim varius id. Donec tortor odio, semper in mollis ac, interdum dapibus augue. Etiam dignissim arcu mi, id convallis magna porttitor vitae. Etiam sit amet sem id dolor lobortis lobortis eget a nulla.\r\n\r\nSed elit ligula, dapibus vitae metus quis, condimentum cursus purus. Mauris consectetur maximus tincidunt. Nunc fermentum aliquet sapien gravida lacinia. Nunc eget justo dictum, eleifend metus et, vestibulum lorem. Fusce ultricies lorem ipsum. Pellentesque nec neque non nisi pulvinar pulvinar ut ut nunc. Phasellus nibh ex, consectetur ut dapibus ut, pretium non felis. Nulla facilisi. Duis fermentum odio ac porta semper.', 'Morbi scelerisque, ipsum sed molestie mattis, dolor lacus aliquet enim, at pellentesque erat eros id nisi. Quisque ut libero commodo justo venenatis maximus. Morbi efficitur sem eu enim dapibus pulvinar. Duis sed elit ex. Fusce ac ante id justo eleifend vestibulum. Phasellus semper tincidunt tortor, egestas aliquam urna commodo ut. Nunc egestas auctor mauris, eget ullamcorper metus tincidunt eu. Pellentesque dapibus vel risus id tempus.', 5, 'new', 'in Stock', '2-3 days'),
(11, 'Waterproof Pillow Protector', 4, 1, '139.33', '99.99', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/p/r/protect_a_bed_pillow_protector_1_1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est nibh, gravida tempus elementum et, congue at nunc. Aliquam convallis metus nec tortor mollis, at auctor nisi pretium. Aenean gravida, felis sagittis pretium efficitur, felis libero imperdiet velit, at tempus nisi ex ac sem. Maecenas turpis neque, porta ut purus nec, ornare dignissim lacus. Nullam laoreet tristique ipsum, quis malesuada enim varius id. Donec tortor odio, semper in mollis ac, interdum dapibus augue. Etiam dignissim arcu mi, id convallis magna porttitor vitae. Etiam sit amet sem id dolor lobortis lobortis eget a nulla.\r\n\r\nSed elit ligula, dapibus vitae metus quis, condimentum cursus purus. Mauris consectetur maximus tincidunt. Nunc fermentum aliquet sapien gravida lacinia. Nunc eget justo dictum, eleifend metus et, vestibulum lorem. Fusce ultricies lorem ipsum. Pellentesque nec neque non nisi pulvinar pulvinar ut ut nunc. Phasellus nibh ex, consectetur ut dapibus ut, pretium non felis. Nulla facilisi. Duis fermentum odio ac porta semper.', 'Morbi scelerisque, ipsum sed molestie mattis, dolor lacus aliquet enim, at pellentesque erat eros id nisi. Quisque ut libero commodo justo venenatis maximus. Morbi efficitur sem eu enim dapibus pulvinar. Duis sed elit ex. Fusce ac ante id justo eleifend vestibulum. Phasellus semper tincidunt tortor, egestas aliquam urna commodo ut. Nunc egestas auctor mauris, eget ullamcorper metus tincidunt eu. Pellentesque dapibus vel risus id tempus.', 11, 'featured', 'in Stock', '2-3 days'),
(12, 'Medium Queen Mattress', 1, 3, '23599.99', '20000.00', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/d/u/dunning_1_10.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est nibh, gravida tempus elementum et, congue at nunc. Aliquam convallis metus nec tortor mollis, at auctor nisi pretium. Aenean gravida, felis sagittis pretium efficitur, felis libero imperdiet velit, at tempus nisi ex ac sem. Maecenas turpis neque, porta ut purus nec, ornare dignissim lacus. Nullam laoreet tristique ipsum, quis malesuada enim varius id. Donec tortor odio, semper in mollis ac, interdum dapibus augue. Etiam dignissim arcu mi, id convallis magna porttitor vitae. Etiam sit amet sem id dolor lobortis lobortis eget a nulla.\r\n\r\nSed elit ligula, dapibus vitae metus quis, condimentum cursus purus. Mauris consectetur maximus tincidunt. Nunc fermentum aliquet sapien gravida lacinia. Nunc eget justo dictum, eleifend metus et, vestibulum lorem. Fusce ultricies lorem ipsum. Pellentesque nec neque non nisi pulvinar pulvinar ut ut nunc. Phasellus nibh ex, consectetur ut dapibus ut, pretium non felis. Nulla facilisi. Duis fermentum odio ac porta semper.', 'Morbi scelerisque, ipsum sed molestie mattis, dolor lacus aliquet enim, at pellentesque erat eros id nisi. Quisque ut libero commodo justo venenatis maximus. Morbi efficitur sem eu enim dapibus pulvinar. Duis sed elit ex. Fusce ac ante id justo eleifend vestibulum. Phasellus semper tincidunt tortor, egestas aliquam urna commodo ut. Nunc egestas auctor mauris, eget ullamcorper metus tincidunt eu. Pellentesque dapibus vel risus id tempus.', 5, 'featured', 'in Stock', '3-4 days'),
(13, 'King Koil Arman Plush Queen Bed Set', 2, 2, '15999.10', '12600.00', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/a/r/arman_m_front_9.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est nibh, gravida tempus elementum et, congue at nunc. Aliquam convallis metus nec tortor mollis, at auctor nisi pretium. Aenean gravida, felis sagittis pretium efficitur, felis libero imperdiet velit, at tempus nisi ex ac sem. Maecenas turpis neque, porta ut purus nec, ornare dignissim lacus. Nullam laoreet tristique ipsum, quis malesuada enim varius id. Donec tortor odio, semper in mollis ac, interdum dapibus augue. Etiam dignissim arcu mi, id convallis magna porttitor vitae. Etiam sit amet sem id dolor lobortis lobortis eget a nulla.\r\n\r\nSed elit ligula, dapibus vitae metus quis, condimentum cursus purus. Mauris consectetur maximus tincidunt. Nunc fermentum aliquet sapien gravida lacinia. Nunc eget justo dictum, eleifend metus et, vestibulum lorem. Fusce ultricies lorem ipsum. Pellentesque nec neque non nisi pulvinar pulvinar ut ut nunc. Phasellus nibh ex, consectetur ut dapibus ut, pretium non felis. Nulla facilisi. Duis fermentum odio ac porta semper.', 'Morbi scelerisque, ipsum sed molestie mattis, dolor lacus aliquet enim, at pellentesque erat eros id nisi. Quisque ut libero commodo justo venenatis maximus. Morbi efficitur sem eu enim dapibus pulvinar. Duis sed elit ex. Fusce ac ante id justo eleifend vestibulum. Phasellus semper tincidunt tortor, egestas aliquam urna commodo ut. Nunc egestas auctor mauris, eget ullamcorper metus tincidunt eu. Pellentesque dapibus vel risus id tempus.', 4, 'featured', 'in Stock', '5-6 days'),
(14, 'Medium King Mattress', 1, 5, '23099.00', '21399.99', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/w/i/winchester_firm_mattress_only_0__13.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est nibh, gravida tempus elementum et, congue at nunc. Aliquam convallis metus nec tortor mollis, at auctor nisi pretium. Aenean gravida, felis sagittis pretium efficitur, felis libero imperdiet velit, at tempus nisi ex ac sem. Maecenas turpis neque, porta ut purus nec, ornare dignissim lacus. Nullam laoreet tristique ipsum, quis malesuada enim varius id. Donec tortor odio, semper in mollis ac, interdum dapibus augue. Etiam dignissim arcu mi, id convallis magna porttitor vitae. Etiam sit amet sem id dolor lobortis lobortis eget a nulla.\r\n\r\nSed elit ligula, dapibus vitae metus quis, condimentum cursus purus. Mauris consectetur maximus tincidunt. Nunc fermentum aliquet sapien gravida lacinia. Nunc eget justo dictum, eleifend metus et, vestibulum lorem. Fusce ultricies lorem ipsum. Pellentesque nec neque non nisi pulvinar pulvinar ut ut nunc. Phasellus nibh ex, consectetur ut dapibus ut, pretium non felis. Nulla facilisi. Duis fermentum odio ac porta semper.', 'Morbi scelerisque, ipsum sed molestie mattis, dolor lacus aliquet enim, at pellentesque erat eros id nisi. Quisque ut libero commodo justo venenatis maximus. Morbi efficitur sem eu enim dapibus pulvinar. Duis sed elit ex. Fusce ac ante id justo eleifend vestibulum. Phasellus semper tincidunt tortor, egestas aliquam urna commodo ut. Nunc egestas auctor mauris, eget ullamcorper metus tincidunt eu. Pellentesque dapibus vel risus id tempus.', 4, 'new', 'in Stock', '3-4 days'),
(15, 'Plush Queen Mattress', 1, 6, '21699.12', '18500.00', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/d/u/dunning_1_10.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est nibh, gravida tempus elementum et, congue at nunc. Aliquam convallis metus nec tortor mollis, at auctor nisi pretium. Aenean gravida, felis sagittis pretium efficitur, felis libero imperdiet velit, at tempus nisi ex ac sem. Maecenas turpis neque, porta ut purus nec, ornare dignissim lacus. Nullam laoreet tristique ipsum, quis malesuada enim varius id. Donec tortor odio, semper in mollis ac, interdum dapibus augue. Etiam dignissim arcu mi, id convallis magna porttitor vitae. Etiam sit amet sem id dolor lobortis lobortis eget a nulla.\r\n\r\nSed elit ligula, dapibus vitae metus quis, condimentum cursus purus. Mauris consectetur maximus tincidunt. Nunc fermentum aliquet sapien gravida lacinia. Nunc eget justo dictum, eleifend metus et, vestibulum lorem. Fusce ultricies lorem ipsum. Pellentesque nec neque non nisi pulvinar pulvinar ut ut nunc. Phasellus nibh ex, consectetur ut dapibus ut, pretium non felis. Nulla facilisi. Duis fermentum odio ac porta semper.', 'Morbi scelerisque, ipsum sed molestie mattis, dolor lacus aliquet enim, at pellentesque erat eros id nisi. Quisque ut libero commodo justo venenatis maximus. Morbi efficitur sem eu enim dapibus pulvinar. Duis sed elit ex. Fusce ac ante id justo eleifend vestibulum. Phasellus semper tincidunt tortor, egestas aliquam urna commodo ut. Nunc egestas auctor mauris, eget ullamcorper metus tincidunt eu. Pellentesque dapibus vel risus id tempus.', 3, 'bestseller', 'in Stock', '3-4 days'),
(16, 'Sealy Luffiness Plush Double Bed Set', 2, 3, '18599.84', '0.00', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/l/u/luffness_3.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est nibh, gravida tempus elementum et, congue at nunc. Aliquam convallis metus nec tortor mollis, at auctor nisi pretium. Aenean gravida, felis sagittis pretium efficitur, felis libero imperdiet velit, at tempus nisi ex ac sem. Maecenas turpis neque, porta ut purus nec, ornare dignissim lacus. Nullam laoreet tristique ipsum, quis malesuada enim varius id. Donec tortor odio, semper in mollis ac, interdum dapibus augue. Etiam dignissim arcu mi, id convallis magna porttitor vitae. Etiam sit amet sem id dolor lobortis lobortis eget a nulla.\r\n\r\nSed elit ligula, dapibus vitae metus quis, condimentum cursus purus. Mauris consectetur maximus tincidunt. Nunc fermentum aliquet sapien gravida lacinia. Nunc eget justo dictum, eleifend metus et, vestibulum lorem. Fusce ultricies lorem ipsum. Pellentesque nec neque non nisi pulvinar pulvinar ut ut nunc. Phasellus nibh ex, consectetur ut dapibus ut, pretium non felis. Nulla facilisi. Duis fermentum odio ac porta semper.', 'Morbi scelerisque, ipsum sed molestie mattis, dolor lacus aliquet enim, at pellentesque erat eros id nisi. Quisque ut libero commodo justo venenatis maximus. Morbi efficitur sem eu enim dapibus pulvinar. Duis sed elit ex. Fusce ac ante id justo eleifend vestibulum. Phasellus semper tincidunt tortor, egestas aliquam urna commodo ut. Nunc egestas auctor mauris, eget ullamcorper metus tincidunt eu. Pellentesque dapibus vel risus id tempus.', 2, 'featured', 'in Stock', '4-5 days'),
(17, 'Simmons Winchester Double Bed Set Standard', 2, 5, '26999.00', '22999.00', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/w/i/winchester_firm_charcoal_base_0__15.jpg', 'lknvdsoifn sdoinosdi sdlknsvoinvs svdoinsvodiknsd sdlnisdoisd svdoinsv sodhosdfn oihsn soh8so so son sonsf sohsbhbs sobsofms ossk nv vobv s vjs sobs soubs lknvdsoifn sdoinosdi sdlknsvoinvs svdoinsvodiknsd sdlnisdoisd svdoinsv sodhosdfn oihsn soh8so so son sonsf sohsbhbs sobsofms ossk nv vobv s vjs sobs soubs ', 'lknvdsoifn sdoinosdi sdlknsvoinvs svdoinsvodiknsd sdlnisdoisd svdoinsv sodhosdfn oihsn soh8so so son sonsf sohsbhbs sobsofms ossk nv vobv s vjs sobs soubs ', 5, 'featured', 'in Stock', '4-5 days'),
(18, 'King Koil Shasta Plush', 2, 2, '9049.00', '7499.00', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/s/h/shasta_front_1_2.jpg', 'oubwgrsoiLNkzskljszvs sv zbdlnboniox xhtonrhorhmiptpinthze t toxhtnhtoinizg zthozhetnohetinthenthe onigawoinre hetopehtnhto tehpohrt rporth tsh sthohts thrs htolthnhtnmht h.', 'pihersnihetslknhtea eh;hte;khtneshlkths ehtspo\'hteonhnhtrs thnpehrsoinhteskeh ethsotehsnthlkhtsnrht rhtsolhtsnes', 4, 'bestseller', 'in Stock', '5-6 days'),
(19, 'Simmons Elite Firm King Bed Set', 2, 5, '65000.00', '52499.00', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/s/i/simmons_elite_firm_king_bed_set_extra_length.1.gif', 'pihersnihetslknhtea eh;hte;khtneshlkths ehtspo\'hteonhnhtrs thnpehrsoinhteskeh ethsotehsnthlkhtsnrht rhtsolhtsnes pihersnihetslknhtea eh;hte;khtneshlkths ehtspo\'hteonhnhtrs thnpehrsoinhteskeh ethsotehsnthlkhtsnrht rhtsolhtsnes', 'pihersnihetslknhtea eh;hte;khtneshlkths ehtspo\'hteonhnhtrs thnpehrsoinhteskeh ethsotehsnthlkhtsnrht rhtsolhtsnes', 0, 'featured', 'Not in Stock', '4-5 days'),
(20, 'King Koil Arman Plush', 2, 2, '11299.00', '8799.00', 'https://www.dialabed.co.za/media/catalog/product/cache/small_image/310x310/beff4985b56e3afdbeabfc89641a4582/a/r/arman_front_10.jpg', 'pihersnihetslknhtea eh;hte;khtneshlkths ehtspo\'hteonhnhtrs thnpehrsoinhteskeh ethsotehsnthlkhtsnrht rhtsolhtsnespihersnihetslknhtea eh;hte;khtneshlkths ehtspo\'hteonhnhtrs thnpehrsoinhteskeh ethsotehsnthlkhtsnrht rhtsolhtsnespihersnihetslknhtea eh;hte;khtneshlkths ehtspo\'hteonhnhtrs thnpehrsoinhteskeh ethsotehsnthlkhtsnrht rhtsolhtsnes', 'pihersnihetslknhtea eh;hte;khtneshlkths ehtspo\'hteonhnhtrs thnpehrsoinhteskeh ethsotehsnthlkhtsnrht rhtsolhtsnes', 0, 'featured', 'Not in Stock', '5-6 days');

-- --------------------------------------------------------

--
-- Table structure for table `sliderone`
--

CREATE TABLE `sliderone` (
  `sliderone` int(11) NOT NULL,
  `slidername` varchar(255) NOT NULL,
  `sliderurl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliderone`
--

INSERT INTO `sliderone` (`sliderone`, `slidername`, `sliderurl`) VALUES
(4, 'sale', 'https://www.dialabed.co.za/media/magestore/bannerslider/images/s/a/sale-scroller-rev.jpg'),
(5, 'boost', 'https://www.dialabed.co.za/media/magestore/bannerslider/images/t/o/top-slider-boost-immune.jpg'),
(6, 'comfort', 'https://www.dialabed.co.za/media/magestore/bannerslider/images/s/l/slider-2-comfort.jpg'),
(7, 'salenow', 'https://www.dialabed.co.za/media/magestore/bannerslider/images/h/o/homepage-banner-1240x310-final-days_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `contact` int(10) NOT NULL,
  `accountType` varchar(255) NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `contact`, `accountType`, `email`, `password`) VALUES
(1, 'chiko', 973660540, 'admin', 'chiko@hotmail.com', 'P@$$word1'),
(2, 'shamila', 966251439, 'user', 'shamila@gmail.com', 'P@$$word2'),
(3, 'sam', 285645393, 'user', 'sam@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brandID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`clientID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `sliderone`
--
ALTER TABLE `sliderone`
  ADD PRIMARY KEY (`sliderone`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `clientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `sliderone`
--
ALTER TABLE `sliderone`
  MODIFY `sliderone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
