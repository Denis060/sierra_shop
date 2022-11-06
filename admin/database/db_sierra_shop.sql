-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 10:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sierra_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_user`
--

CREATE TABLE `cart_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `number` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_user`
--

INSERT INTO `cart_user` (`id`, `user_id`, `product_id`, `number`) VALUES
(25, 2, 8, 6),
(8, 3, 7, 3),
(10, 3, 4, 2),
(23, 3, 28, 1),
(49, 1044, 33, 1),
(48, 1044, 28, 1),
(47, 1044, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supply_id` int(11) DEFAULT NULL,
  `category_position` int(4) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `supply_id`, `category_position`, `slug`) VALUES
(1, 'Electronics', 1, 1, 'electronics'),
(2, 'Beautify', 1, 2, 'take care of my beauty'),
(3, 'Cosmetic', 1, 3, 'my-pham');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'author-comment.png',
  `editTime` datetime DEFAULT NULL,
  `product_id` int(11) DEFAULT 0,
  `post_id` int(11) DEFAULT 0,
  `page_id` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `parent_comment_id`, `user_id`, `content`, `createDate`, `author`, `email`, `status`, `link_image`, `editTime`, `product_id`, `post_id`, `page_id`) VALUES
(1, 0, 0, 'Milk tea is so good', '2020-03-27 00:00:00', 'Tân', 'tan12357@gmail.com', 0, 'author-comment.png', NULL, 4, 0, 0),
(4, 0, 0, 'Tr&agrave; the milk is delicious, dd&acirc;y l&agrave; location &agrave; mk th&iacute;ch most lu&ocirc;n. I hope next time I still have a lot of jelly in the glass. Thank you owner qu&aacute;n nh&eacute;!!', '2020-03-27 02:18:17', 'Trung AV', 'trungtin@gmail.com', 0, 'author-comment.png', '2020-04-10 15:55:11', 2, 0, 0),
(7, 0, 2, 'regret', '2020-04-01 13:12:20', 'Tân Hồng IT', 'phuongtan12357nguyen@gmail.com ?> ', 2, 'avatar-user1011-tanhongit.jpg', NULL, 2, 0, 0),
(8, 0, 2, 'regret', '2020-04-01 13:15:09', 'Tân Hồng IT', 'phuongtan12357nguyen@gmail.com', 3, 'avatar-user1011-tanhongit.jpg', NULL, 2, 0, 0),
(9, 0, 2, 'Thank you so much store', '2020-04-10 19:27:57', 'Tân Hồng ', 'phuongtan12357nguyen@gmail.com', 2, 'avatar-user1011-tanhongit.jpg', NULL, 22, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `link_Logo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_Contact` varchar(550) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_Facebook` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_Twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zalo` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_footer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `link_Logo`, `contact_name`, `address`, `country`, `phone`, `phone_2`, `email`, `link_Contact`, `link_Facebook`, `link_Twitter`, `link_linkedin`, `zalo`, `link_about`, `about_footer`, `favicon`) VALUES
(1, 'logo-chikoiquan-dis-tech.jpeg', 'DIS TECH', '10 Circular Road, Freetown', 'Sierra Leone', '23276349995', '23276238654', 'sierrashop@gmail.com', 'javascript:void(0);', 'https://www.facebook.com/tanhongit', 'https://twitter.com/tanhongit', 'http://www.linkedin.com/in/tanhongit', '0363220339', 'page/1-about', 'The website sells Electronics and Wears as well as some handy cosmetics. Powered by DisTech Consultant Company', 'favicon-chikoiquan-dis-tech.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `phone` int(20) DEFAULT NULL,
  `subject` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `createTime` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `order_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `editTime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `phone`, `subject`, `createTime`, `user_id`, `order_id`, `product_id`, `status`, `editTime`) VALUES
(1, 'Tân Hồng ', 'phuongtan12357nguyen@gmail.com', 363220339, 'abc', '2020-04-05 16:58:23', 2, 0, 2, 1, NULL),
(2, 'Tân Hồng ', 'phuongtan12357nguyen@gmail.com', 363220339, 'abc dè', '2020-04-05 16:59:35', 2, 0, 2, 0, NULL),
(3, 'Tân Hồng ', 'phuongtan12357nguyen@gmail.com', 363220339, 'abc dè', '2020-04-05 17:01:52', 2, 0, 2, 1, NULL),
(4, 'Nguyen Tan', 'test@gmail.com', 1663220339, 'srdxtfcghjooi', '2020-04-05 17:06:46', 1, 0, 28, 1, '2020-04-09 16:48:56'),
(5, 'Nguyen Tan', 'test@gmail.com', 1663220339, 'Ahihi nớp diu', '2020-04-05 17:07:36', 1, 0, 0, 1, NULL),
(6, 'Alibaba', 'alibaba@gmail.com', 1234567890, 'aladin', '2020-04-05 17:12:32', 0, 0, 0, 1, '2020-04-10 23:26:58'),
(7, 'aladin', 'aladin@gmail', 363220339, 'reywsrewyre', '2020-04-05 17:13:23', 0, 0, 8, 0, '2020-04-10 23:26:49'),
(8, 'y54wy54wy', 'ewt43wt54w@gmail.com', 432542543, 'regresg', '2020-04-05 17:23:09', 0, 4, 0, 0, NULL),
(9, 'Tân Hồng ', 'phuongtan12357nguyen@gmail.com', 12345678, 'Toi hong mún mua đơn hàng này nữa , bạn nàm giề được tôi', '2020-04-06 14:48:32', 2, 3, 0, 1, '2020-04-11 19:08:07'),
(11, 'url', '', 339908569, 'ỷdyr', '2020-04-09 00:00:00', 0, 0, 0, 1, NULL),
(12, 'Tân Hồng ', 'phuongtan12357nguyen@gmail.com', 363220339, 'drtrdurdytuyt', '2020-04-11 05:45:38', 2, 0, 0, 0, NULL),
(13, 'Tân Hồng IT', 'phuongtan12357@gmail.com', 363220339, 'dyrdturdtrdytdrtr ', '2020-04-11 05:46:01', 0, 0, 0, 0, NULL),
(14, 'Solomon S Ngatto', 'admin@gmail.com', 2147483647, '', '2022-10-26 21:12:36', 1040, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `introduce`
--

CREATE TABLE `introduce` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_footer` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `media_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createDate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `media_name`, `slug`, `createDate`) VALUES
(9, 'Logo Tan Hong IT', 'logo-tan-hong-it.jpg', '2020-03-24 21:18:30'),
(8, 'Khoá học lập trình php căn bản (Gốc)', 'lap-trinh-php-can-ban.png', '2020-03-24 21:14:02'),
(10, 'logo old youtube', 'logo-old-youtube.png', '2020-03-24 23:19:14'),
(11, 'mùa corona virut ', 'mua-corona-virut.jpg', '2020-03-29 08:38:01'),
(13, 'vị cha đẻ của máy vi tính', 'cha-de-cua-may-vi-tinh.jpg', '2020-04-02 01:48:11'),
(14, 'logo chikoi quan', 'logo-chikoi-quan.png', '2020-04-04 20:53:10'),
(15, 'favicon chi koi quan', 'favicon-chi-koi-quan.png', '2020-04-04 20:53:41'),
(16, 'loại trừ thời gian truy cập ip', 'loai-tru-thoi-gian-truy-cap-ip.jpg', '2020-04-11 17:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `menu_footers`
--

CREATE TABLE `menu_footers` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_footers`
--

INSERT INTO `menu_footers` (`id`, `menu_name`, `menu_url`, `menu_description`, `parent`) VALUES
(1, 'Not available', 'javascript:void(0);', '', 0),
(2, 'Not available', 'javascript:void(0);', '', 0),
(3, 'Not available', 'javascript:void(0);', '', 0),
(4, 'Not available', 'javascript:void(0);', '', 0),
(5, 'Not available', 'javascript:void(0);', '', 0),
(6, 'Not available', 'javascript:void(0);', '', 0),
(7, 'Not available', 'javascript:void(0);', '', 0),
(8, 'Not available', 'javascript:void(0);', '', 0),
(9, 'Not available', 'javascript:void(0);', '', 0),
(10, 'Featured products', 'type/1-san-pham-hot', 'Featured products', 0),
(11, 'New product', 'type/2-san-pham-moi', 'New product', 0),
(12, 'Products on sale', 'type/3-san-pham-dang-giam-gia', 'Products on sale', 0),
(18, 'Text Link', 'javascript:void(0);', '', 1),
(19, 'Social', 'javascript:void(0);', 'Social Networking Site Links', 1),
(20, 'Blog', 'javascript:void(0);', '', 1),
(21, 'Product Type', 'javascript:void(0);', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `option_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_total` double NOT NULL,
  `createtime` datetime NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `editTime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer`, `province`, `address`, `phone`, `cart_total`, `createtime`, `message`, `status`, `user_id`, `editTime`) VALUES
(1, 'Nguyen Phuong Tan', 'Dong Nai', 'khu 2, thi tran gia ray, xuan loc, dong nai, vn', '0363220339', 165000, '2020-03-21 10:19:59', '', 1, 0, NULL),
(10, 'Tân Hồng IT', 'Đồng Nai', 'xuan lộc, đồng nai, việt nam', '0363220339', 1050000, '2020-04-17 10:38:09', 'hé nô át', 0, 0, NULL),
(4, 'Nguyen Phuong Tan', 'Dong Nai', 'khu 2, thi tran gia ray, xuan loc, dong nai, vn', '0363220339', 105000, '2020-03-25 13:29:57', '', 3, 2, '2020-04-10 22:07:25'),
(5, 'drt', '-', 'xuan lộc, đồng nai, việt nam', '0363220339', 80, '2020-03-25 16:21:38', '', 0, 1, NULL),
(6, 'Nguyen Phuong Tan', 'Dong Nai', 'khu 2, thi tran gia ray, xuan loc, dong nai, vn', '0363220339', 10000, '2020-03-29 20:24:33', 'fgh', 0, 1, NULL),
(7, 'Nguyen Phuong Tan', 'Dong Nai', 'khu 2, thi tran gia ray, xuan loc, dong nai, vn', '0363220339', 10000, '2020-03-29 20:25:46', 'fgh', 1, 0, NULL),
(8, 'Tân Hồng IT', 'Đồng Nai', 'xuân lộc, đồng nai, việt nam', '363220339', 155000, '2020-04-02 10:44:06', 'ghtrsehts htr yht whtwsht eshtesh té tesh ts hres hsh t', 0, 1, NULL),
(9, 'Tân Hồng ', 'yth', 'xuân lộc, đồng nai, việt nam', '363220339', 10000, '2020-04-10 22:06:29', '', 0, 2, '2020-04-10 22:08:28'),
(11, 'Nguyen Phuong Tan', 'Dong Nai', 'khu 2, thi tran gia ray, xuan loc, dong nai, vn', '0363220339', 340000, '2020-04-18 12:56:31', '', 0, 2, NULL),
(12, 'ỳdtdy', 'eteedte', '3128  Doctors Drive', '4089941576', 45000, '2022-10-26 04:11:07', '', 2, 1041, NULL),
(13, 'Adventure', 'eteedte', 'hhjjjjjj', '6765566666', 30000, '2022-10-27 07:19:05', 'hhjhjjjj', 1, 1044, NULL),
(14, 'jjuuu', 'hjjjj', 'uyyy77', '90889999ji88', 10000, '2022-10-30 19:52:13', '', 0, 1044, NULL),
(15, '', '', '', '', 0, '2022-10-30 21:47:21', '', 0, 0, NULL),
(16, '', '', '', '', 0, '2022-10-30 22:04:25', '', 0, 0, NULL),
(17, '', '', '', '', 0, '2022-10-30 22:07:43', '', 0, 0, NULL),
(18, '', '', '', '', 0, '2022-10-30 22:15:54', '', 0, 0, NULL),
(19, '', '', '', '', 0, '2022-10-31 02:38:41', '', 0, 0, NULL),
(20, '', '', '', '', 0, '2022-10-31 02:39:58', '', 0, 0, NULL),
(21, '', '', '', '', 0, '2022-10-31 02:48:30', '', 0, 0, NULL),
(22, '', '', '', '', 0, '2022-10-31 02:50:32', '', 0, 0, NULL),
(23, '', '', '', '', 0, '2022-11-01 18:41:01', '', 0, 0, NULL),
(24, '', '', '', '', 0, '2022-11-01 18:53:08', '', 0, 0, NULL),
(25, '', '', '', '', 0, '2022-11-01 18:58:48', '', 0, 0, NULL),
(26, '', '', '', '', 0, '2022-11-01 19:02:38', '', 0, 0, NULL),
(27, '', '', '', '', 0, '2022-11-01 19:06:36', '', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(1, 1, 4, 1, 15000),
(2, 1, 12, 10, 15000),
(3, 2, 14, 1, 10000),
(4, 3, 4, 1, 15000),
(5, 3, 12, 1, 15000),
(6, 4, 6, 1, 15000),
(7, 4, 2, 4, 15000),
(8, 4, 4, 2, 15000),
(9, 5, 14, 1, 100),
(10, 6, 28, 1, 10000),
(11, 8, 4, 1, 15000),
(12, 8, 28, 5, 10000),
(13, 7, 5, 6, 15000),
(14, 9, 8, 1, 10000),
(15, 10, 28, 8, 10000),
(16, 10, 4, 5, 15000),
(17, 10, 2, 11, 15000),
(18, 10, 1, 64, 10000),
(19, 10, 8, 9, 10000),
(20, 11, 28, 1, 10000),
(21, 11, 4, 11, 15000),
(22, 11, 5, 9, 15000),
(23, 11, 9, 2, 15000),
(24, 12, 4, 3, 15000),
(25, 13, 4, 2, 15000),
(26, 14, 28, 1, 10000),
(27, 15, 4, 1, 15000),
(28, 16, 28, 1, 10000),
(29, 17, 28, 1, 10000),
(30, 18, 4, 1, 15000),
(31, 19, 4, 1, 15000),
(32, 20, 28, 1, 10000),
(33, 21, 33, 5, 2000),
(34, 22, 11, 1, 20000),
(35, 23, 28, 1, 10000),
(36, 24, 4, 1, 15000),
(37, 25, 4, 2, 15000),
(38, 26, 28, 1, 10000),
(39, 27, 4, 1, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_author` int(11) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Draft',
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_type` int(11) NOT NULL DEFAULT 1,
  `post_modified_user` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalView` int(11) NOT NULL DEFAULT 0,
  `post_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_avatar` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_author`, `post_date`, `post_content`, `post_title`, `post_status`, `post_modified`, `post_type`, `post_modified_user`, `totalView`, `post_slug`, `post_avatar`) VALUES
(1, 2, '2020-04-08 05:57:42', '', 'About', 'Publiced', '2020-04-08 06:31:51', 2, 'Tân Hồng ', 65, 'about', 'about-1page.png'),
(9, 3, '2020-04-12 13:20:20', '', 'Web developmwnt', 'Publiced', '0000-00-00 00:00:00', 2, '', 0, 'fewrfewrew', ''),
(8, 2, '2020-04-08 23:13:53', '', 'Điều khoản sử dụng', 'Publiced', '0000-00-00 00:00:00', 2, '', 1, 'terms-of-use-page', ''),
(6, 2, '2020-04-08 11:47:48', '', 'Dmca Luật bản quyền', 'Trash', '2020-04-08 10:25:58', 1, 'Tân Hồng ', 5, 'dmca-luat-ban', ''),
(5, 2, '2020-04-09 14:03:15', 'Phim việt chất lượng cao<br />\n\n<img alt=\"\" src=\"/php-mvc-shop/public/upload/ckeditorimages/about-1page.png\" style=\"height:271px; width:482px\" />', 'Phim việt', 'Publiced', '2020-04-08 10:13:10', 1, 'Tân Hồng ', 4, 'phim-viet', 'phim-viet-5post.png'),
(4, 2, '2020-04-12 12:54:02', 'ouhiuh<br />\n\naad<br />\n\n<img alt=\"\" src=\"/php-mvc-shop/public/upload/ckeditorimages/tenor.gif\" style=\"height:498px; width:498px\" /><br />\n\n<br />\n\nfhgtfrdhtrd<br />\n\nỵytrj', 'Privacy Policy', 'Draft', '2020-04-08 06:05:46', 2, 'Tân Hồng ', 7, 'privacy-policy', 'privacy-policy-4page.jpg'),
(3, 2, '2020-04-08 06:17:37', 'Luật bản quyền dựa tr&ecirc;n luật to&agrave;n cầu<br />\n\n<img alt=\"\" src=\"/php-mvc-shop/public/upload/ckeditorimages/dmca-luat-ban-quyen-2page.jpg\" style=\"height:304px; width:650px\" />', 'Dmca Luật bản quyền', 'Publiced', '2020-04-07 23:52:43', 2, '', 1, 'dmca-luat-ban-quyen', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_typeid` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `supply_id` int(11) DEFAULT NULL,
  `product_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` int(11) NOT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_material` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_detail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createBy` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createDate` date DEFAULT NULL,
  `editBy` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editDate` datetime DEFAULT NULL,
  `totalView` int(11) DEFAULT 0,
  `saleoff` tinyint(11) DEFAULT 0,
  `percentoff` int(11) DEFAULT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_typeid`, `category_id`, `sub_category_id`, `supply_id`, `product_description`, `product_price`, `product_color`, `product_material`, `product_size`, `product_detail`, `createBy`, `createDate`, `editBy`, `editDate`, `totalView`, `saleoff`, `percentoff`, `img1`, `img2`, `img3`, `img4`, `slug`) VALUES
(1, 'Cheap Quality Sunflower Seeds Ripe Delicious', 2, 1, 4, 1, 'Sunflower seeds have large seeds, good quality, no bad smell, no flat seeds, damaged seeds. Promotes heart health', 10000, 'Black', 'Sunflower seed', 'To 100g', 'Sunflower seeds have large seeds, good quality, no bad smell, no flat seeds, damaged seeds.<br />\r\n<br />\r\nSunflower seeds are a gift from sunflowers, also known as sun flowers, wherever they grow, the flowers always face the sun. Therefore, sunflower seeds absorb and accumulate special minerals from sunlight, which is very good for human health. Mother Nature gave humanity a very valuable seed.<br />\r\n<br />\r\nSunflower seeds have a gray or black, teardrop-shaped shell. Peeled will have a nutty flavor and soft texture. According to a study report published in &quot;Food Chemistry&quot;, sunflower seeds are very high in oils, healthy fats, and are an excellent source of vitamin E and are rich in copper, manganese, selenium, phosphorus, magnesium, vitamin B1, vitamin B6, folate and niacin.<br />\r\n<br />\r\nInstructions for use: Instant food<br />\r\n<br />\r\nStorage: Avoid direct sunlight<br />\r\n<br />\r\nUses:<br />\r\n- Promotes heart health.<br />\r\nProvides Selenium, a powerful antioxidant that promotes thyroid health.<br />\r\n- Support depression, improve mood.<br />\r\n<br />\r\nCommitment to Food Hygiene and Safety.', '', '2020-03-18', 'Solomon S Ngatto', '2022-11-02 20:15:22', 103, 0, 0, 'hat-huong-duong-chat-luong-gia-re-1img1.jpg', 'hat-huong-duong-chat-luong-gia-re-1img2.jpg', '', '', 'hat-huong-duong-chat-luong-gia-re-chin-ngon'),
(2, 'Thai Green Milk Tea (Zhen Chau, Pudding) 15k, 20k', 2, 1, 3, 1, 'Thai Milk Tea (Thai Green Tea) is a familiar drink that is not only considered an anti-aging panacea...', 15000, 'Green', 'Thai green tea, fat milk, jelly, pudding, foot Chau,...', 'Medium - 15k, Large - 20k', 'Tr&agrave; Milk Th&aacute;i (Tr&agrave; green Th&aacute;i Lan) l&agrave; a familiar drink that can only be viewed as l&agrave; the antidote to l&atilde;o h&oacute;a, with the wonderfully beautiful l&agrave;m, tr&agrave; green c&ograve;n gi&uacute;p you solve the problem&aacute;t, province t&aacute;o in the ng&agrave;y h&egrave; n&oacute;ng tired. Tr&agrave; Green Th&aacute;i Lan with a volume of 200g is produced in Th&aacute;i Lan according to the standard c&ecirc;u high-tech ti&ecirc;n, produced from the b&acute;p tr&agrave; green, dangerous&ecirc;n substance through carefully selected kh&acirc;u.<br />\n\n<br />\n\nTr&agrave; th&aacute;i milk flavor tr&agrave;, leopard milk flavor b&acute;o..k&egrave;m jelly gi&ograve; gi&ograve;\n\n<br />\n\nOrder h&agrave;ng now qu&aacute;n m&igrave;nh support free shipping within b&aacute;n k&iacute;nh 5km v&agrave; support t&igrave;nh as well as c&oacute; many favors for c&aacute;c th&aacute;ch h&agrave;ng th&acirc;n th&acirc;n t th.<br />\n\n<br />\n\nC&aacute;c you remember to create 1 t&agrave;i account v&agrave; put h&agrave;ng to save a lot of h&agrave;ng menu, qu&aacute;n m&igrave;nh will c&oacute; many favors & atilde;i for k&aacute;ch h&agrave;ng th&acirc;n th&acute;n th&acute;! Thank you c&aacute;c you.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng now<br />\n\n<br />\n\n<strong>Preservation</strong>: Tr&aacute;nh &aacute;in direct sunlight<br />\n\n<br />\n\nCommitted to Food Hygiene&agrave;n Food.<br />\n\n<br />\n\nQu&yacute; k&aacute;ch c&oacute; can t&ugrave;y select multiple jelly or multiple ch&acirc;n ch&acirc;u( When ordering h&agrave;ng qu&yacute; kh&aacute;ch remember to write back a message nh&eacute; <img alt=\"heart\" src=\"http://localhost/new -mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" />)', '', '2020-03-18', 'Tân Hồng ', '2020-04-18 17:49:59', 115, 0, 0, 'tra-sua-thai-xanh-chan-chau-pudding-15k-20k-2img1.jpg', 'tra-sua-thai-xanh-chan-chau-pudding-15k-20k-2img2.jpg', 'tra-sua-thai-xanh-chan-chau-pudding-15k-20k-2img3.jpg', 'tra-sua-thai-xanh-chan-chau-pudding-15k-20k-2img4.jpg', 'tra-sua-thai-xanh-chan-chau-pudding-15k-20k'),
(3, 'Traditional Milk Tea (Zhen Chau, Pudding) 15k, 20k', 2, 1, 3, 1, 'Traditional boat milk tea has the taste of tea, the taste of fatty leopard milk..with crispy jelly, pudding, chewy and chewy feet.', 15000, 'Gray brown', 'Tea, full-fat milk, jelly, pudding, foot Chau', 'Medium - 15k, Large - 20k', 'Tr&agrave; sữa l&agrave; thức uống giải kh&aacute;t đ&atilde; được Việt Nam du nhập khoảng 10 năm về trước, từ b&eacute; ch&uacute;ng ta đ&atilde; quen với một ly tr&agrave; sữa thạch tr&aacute;i c&acirc;y với đủ loại m&agrave;u sắc hoặc l&agrave; đủ m&ugrave;i vị.&nbsp;<br />\n\n<br />\n\nTr&agrave; sữa thuyền thống thơm vị tr&agrave;, vị sữa beo b&eacute;o..k&egrave;m thạch gi&ograve;n gi&ograve;n, pudding, ch&acirc;n ch&acirc;u nhai mềm dai hấp dẫn.<br />\n\n<br />\n\nĐặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng ngay<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn nhiều thạch hoặc nhiều ch&acirc;n ch&acirc;u( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/php-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" title=\"heart\" />)', '', '2020-03-18', 'Tân Hồng ', '2020-04-11 12:35:05', 35, 0, 0, 'tra-sua-truyen-thong-chan-chau-pudding-15k-20k-3img1.jpg', 'tra-sua-truyen-thong-chan-chau-pudding-15k-20k-3img2.jpg', '', '', 'tra-sua-truyen-thong-chan-chau-pudding-15k-20k'),
(4, 'Strawberry Milk Tea (Zhen Chau, Pudding) 15k, 20k', 2, 1, 3, 1, 'Strawberry Milk Tea (Zhen Chau, Pudding) is a familiar and delicious drink...', 15000, 'Pink', 'Strawberry, full-fat milk, jelly, pudding, pearl...', 'Medium - 15k, Large - 20k', 'Với sự ngọt ng&agrave;o được chiết xuất từ những tr&aacute;i&nbsp;<strong>d&acirc;u t&acirc;y</strong>&nbsp;thơm ngon đ&atilde; cho ra đời một loại<strong>&nbsp;tr&agrave; sữa</strong>&nbsp;hấp dẫn với trẻ nhỏ bởi m&agrave;u sắc được h&ograve;a quyện một c&aacute;ch dễ chịu. M&agrave;u hồng v&agrave; vị ngọt lu&ocirc;n l&agrave; những điểm ưu ti&ecirc;n h&agrave;ng đầu m&agrave; mọi người th&iacute;ch nhất, cộng v&agrave;o đ&oacute; l&agrave; hương thơm của loại quả kỳ diệu n&agrave;y đ&atilde; l&agrave;m m&ecirc; mẩn kh&ocirc;ng chỉ ri&ecirc;ng với c&aacute;c em nhỏ m&agrave; ngay đối với người lớn cũng bị ảnh hưởng theo.<br />\n\n<br />\n\nTr&agrave; sữa vị d&acirc;u thơm vị tr&agrave;, vị sữa beo b&eacute;o..k&egrave;m thạch gi&ograve;n gi&ograve;n, pudding, ch&acirc;n ch&acirc;u nhai mềm dai hấp dẫn.<br />\n\n<br />\n\nĐặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng ngay<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn nhiều thạch hoặc nhiều ch&acirc;n ch&acirc;u( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/php-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" title=\"heart\" />)', '', '2020-03-19', 'Tân Hồng ', '2020-04-11 12:34:00', 244, 0, 0, 'tra-sua-vi-dau-1.jpg', 'tra-sua-vi-dau-chan-chau-pudding-15k-20k-4img2.jpg', 'tra-sua-vi-dau-chan-chau-pudding-15k-20k-4img3.jpg', '', 'tra-sua-vi-dau-chan-chau-pudding-15k-20k'),
(5, 'Chocolate Flavored Milk Tea (Zhen Chau, Pudding) 15k, 20k', 2, 1, 3, 1, 'With a ready-to-drink formula that creates a new flavor for tea...', 15000, 'Brown', 'Chocolate, full-fat milk, jelly, pudding, pearl...', 'Vừa - 15k, Lớn - 20k', 'TR&Agrave; SỮA CHOCOLATE . Cũng như tr&agrave; xanh matcha hay hồng tr&agrave; sữa.<br />\n\n<br />\n\nVới c&ocirc;ng thức pha sẵn tạo n&ecirc;n hương vị mới cho tr&agrave; sữa chocolate Tr&agrave; sữa ch&acirc;n ch&acirc;u Socola thơm vị tr&agrave;, vị socola , vị sữa beo b&eacute;o..k&egrave;m thạch gi&ograve;n gi&ograve;n, pudding, ch&acirc;n ch&acirc;u nhai mềm dai hấp dẫn.<br />\n\n<br />\n\nĐặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng ngay<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn nhiều thạch hoặc nhiều ch&acirc;n ch&acirc;u( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/php-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" title=\"heart\" />)', '', '2020-03-19', 'Tân Hồng ', '2020-04-11 15:03:52', 124, 0, 0, 'tra-sua-vi-socola-chan-chau-pudding-15k-20k-5img1.jpg', '', '', '', 'tra-sua-vi-socola-chan-chau-pudding-15k-20k'),
(6, 'Trà Sữa Vị Đào (Chân Châu, Pudding) 15k, 20k', 2, 1, 3, 1, 'Trà sữa vị đào thơm vị trà đào, vị sữa beo béo..kèm thạch giòn giòn, pudding, chân châu nhai mềm dai hấp dẫn.', 15000, 'Hồng nâu', 'Vị đào, sữa béo, thạch ,pudding, chân châu...', 'Vừa - 15k, Lớn - 20k', '<em>Với hương vị thơm ngon, dễ uống tr&agrave; sữa vẫn lu&ocirc;n l&agrave; một thức uống chưa bao giờ &ldquo;hạ nhiệt&rdquo; nhất l&agrave; đối với giới trẻ. Một đặc điểm nữa khiến tr&agrave; sữa lu&ocirc;n được y&ecirc;u th&iacute;ch đến vậy ch&iacute;nh l&agrave; n&oacute; c&oacute; thể kết hợp với nhiều tr&aacute;i c&acirc;y, nhiều loại thạch để tạo n&ecirc;n những hương vị hấp dẫn, đặc trưng v&agrave; đ&aacute;p ứng được sở th&iacute;ch của nhiều người.&nbsp;</em><br />\n\n<br />\n\nTr&agrave; sữa vị đ&agrave;o thơm vị tr&agrave; đ&agrave;o, vị sữa beo b&eacute;o..k&egrave;m thạch gi&ograve;n gi&ograve;n, pudding, ch&acirc;n ch&acirc;u nhai mềm dai hấp dẫn.<br />\n\n<br />\n\nĐặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng ngay.<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn nhiều thạch hoặc nhiều ch&acirc;n ch&acirc;u( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/php-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" title=\"heart\" />)', '', '2020-03-19', 'Tân Hồng ', '2020-04-11 12:37:50', 49, 0, 0, 'tra-sua-vi-dao-chan-chau-pudding-15k-20k-6img1.jpg', 'tra-sua-vi-dao-chan-chau-pudding-15k-20k-6img2.jpg', '', '', 'tra-sua-vi-dao-chan-chau-pudding-15k-20k'),
(7, 'Trà bí đao - Giải khát, thanh lọc cơ thể', 2, 1, 5, 1, 'Trà bí đao là loại trà được nấu từ quả bí đao cùng với đường phèn khả năng giải nhiệt rất tốt...', 10000, 'Nâu đen', 'Quả bí đao, đường phèn', 'Ly vừa, có thể Setup ly to hơn', 'Tr&agrave; b&iacute; đao l&agrave; loại tr&agrave; được nấu từ quả b&iacute; đao c&ugrave;ng với đường ph&egrave;n. Đ&acirc;y l&agrave; thức uống rất được ưa chuộng ở nhiều nước. Đặc biệt l&agrave; Trung Quốc, Đ&agrave;i Loan v&agrave; Việt Nam. Tr&agrave; b&iacute; đao được tin l&agrave; thức uống c&oacute; khả năng giải nhiệt rất tốt. V&agrave; loại tr&agrave; n&agrave;y c&ograve;n được cho l&agrave; c&oacute; khả năng giảm c&acirc;n nữa.<br />\n\n&nbsp;\n\n<h3><strong>T&aacute;c dụng của tr&agrave; b&iacute; đao</strong></h3>\n\n\n\n<p style=\"margin-left:40px\">1. Tr&agrave; b&iacute; đao gi&uacute;p giảm c&acirc;n</p>\n\n\n\n<p style=\"margin-left:40px\">2. Tr&agrave; b&iacute; đao gi&uacute;p đẹp da</p>\n\n\n\n<p style=\"margin-left:40px\">3. Tr&agrave; b&iacute; đao gi&uacute;p thải độc detox</p>\n\n\n\n<p style=\"margin-left:40px\">4. Tr&agrave; b&iacute; đao gi&uacute;p giải nhiệt</p>\n\n\n\n<p style=\"margin-left:40px\">5. Tr&agrave; b&iacute; đao tốt cho hệ ti&ecirc;u ho&aacute;</p>\n\nĐặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng ngay<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn k&iacute;ch cỡ v&agrave; gi&aacute; kh&aacute;c nhau khi đặt h&agrave;ng n&egrave;.( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/php-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" title=\"heart\" />)', '', '2020-03-19', 'Tân Hồng ', '2020-04-11 14:10:55', 53, 0, 0, 'tra-bi-dao-giai-khat-thanh-loc-co-the-7img1.jpg', 'tra-bi-dao-giai-khat-thanh-loc-co-the-7img2.jpg', 'tra-bi-dao-giai-khat-thanh-loc-co-the-7img3.jpg', '', 'tra-bi-dao-giai-khat-thanh-loc-co-the'),
(8, 'Sương Sáo nhà tự làm ngon bổ dưỡng', 2, 1, 5, 1, 'Sương sáo nhà mình tự làm an toàn về sinh, mọi người nãy đặt hàng và mua về ăn vào thời tiết nóng...', 10000, 'Đen', 'lá cây suong sáo', 'Tùy chọn', '<p><strong>Sương s&aacute;o nh&agrave; m&igrave;nh tự l&agrave;m an to&agrave;n vệ&nbsp;sinh, mọi người n&atilde;y đặt h&agrave;ng v&agrave; mua về ăn v&agrave;o thời tiết n&oacute;ng như thế n&agrave;y cho m&aacute;t gan m&aacute;t ruột nh&eacute;! Kết hợp th&ecirc;m một ly tr&agrave; sữa tự chọn nữa l&agrave; qu&aacute; tuyệt vời.</strong></p>\n\n\n\n<h4><br />\n\n<strong>SƯƠNG SÁO T&Ocirc;́T RA SAO</strong></h4>\n\n<strong>Sương s&aacute;o</strong>&nbsp;<em>(phương ngữ miền Nam)</em>&nbsp;được l&ograve;ng rất nhiều người v&agrave;o m&ugrave;a nắng n&oacute;ng v&agrave; lại tốt cho sức khỏe&nbsp;nhất l&agrave; với phụ nữ v&agrave; c&aacute;c em nhỏ. Ngo&agrave;i ra, sương s&aacute;o gi&uacute;p giảm huyết &aacute;p, hỗ trợ trong điều trị đ&aacute;i th&aacute;o đường, m&aacute;t gan, trị cảm mạo do nắng n&oacute;ng, đau cơ, vi&ecirc;m khớp&hellip;\n\n\n\n<p>Sương s&aacute;o kh&ocirc;ng chỉ l&agrave; thứ giải kh&aacute;t th&ocirc;ng thường m&agrave; c&ograve;n l&agrave; một t&acirc;n dược.<strong><em>&nbsp;</em></strong>Theo Đ&ocirc;ng y, l&aacute; sương s&aacute;o c&oacute; vị ngọt, t&iacute;nh m&aacute;t, c&oacute; t&aacute;c dụng giải nhiệt, gi&uacute;p c&aacute;c qu&aacute; tr&igrave;nh chuyển h&oacute;a trong cơ thể diễn ra dễ d&agrave;ng&hellip; n&ecirc;n thường được sử dụng để nấu v&agrave; chế biến th&agrave;nh m&oacute;n thạch sương s&aacute;o giải nhiệt trong những ng&agrave;y h&egrave; oi bức, n&oacute;ng nực.&nbsp;Hiện nay, ở nhiều nước ch&acirc;u &Aacute;&nbsp;người ta cho rằng, bột th&acirc;n l&aacute; c&acirc;y sương s&aacute;o c&oacute; t&aacute;c dụng lợi tiểu.</p>\n\n\n\n<hr />\n\n<p>Đặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng ngay<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn nhiều phần gi&aacute; kh&aacute;c nhau( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/php-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" title=\"heart\" />)</p>\n\n', '', '2020-03-19', 'Tân Hồng ', '2020-04-11 14:38:56', 36, 0, 0, 'suong-sao-nha-tu-lam-ngon-bo-duong-8img1.jpg', '', '', '', 'suong-sao-nha-tu-lam-ngon-bo-duong'),
(9, 'Cá viên chiên (có thể đặt theo phần tùy chọn giá)', 2, 1, 2, 1, 'Cá viên chiên giòn ngon cùng với dưa leo và kết hợp cùng ly trà sữa tuyệt vời.', 20000, 'Nâu vàng', 'Cá viên, dưa leo, tương ớt,...', 'Vừa - 15k, Lớn - 20k, Setup tùy chọn giá', 'C&aacute; vi&ecirc;n chi&ecirc;n gi&ograve;n ngon c&ugrave;ng với dưa leo v&agrave; kết hợp c&ugrave;ng ly tr&agrave; sữa tuyệt vời.<br />\n\n<br />\n\nC&aacute;c bạn c&oacute; thể đặt setup t&ugrave;y theo phần gi&aacute; m&agrave; c&aacute;c bạn muốn.<br />\n\n<br />\n\nĐặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng ngay<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn nhiều phần gi&aacute; kh&aacute;c nhau( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/new-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" />)', '', '2020-03-19', 'Tân Hồng ', '2020-04-19 12:31:23', 31, 0, 0, 'ca-vien-chien-9img1.jpg', 'ca-vien-chien-co-the-dat-theo-phan-tuy-chon-gia-9img2.jpg', '', '', 'ca-vien-chien-co-the-dat-theo-phan-tuy-chon-gia'),
(10, 'Tôm viên (có thể đặt theo phần tùy chọn giá)', 2, 1, 2, 1, 'ok', 20000, 'Vàng nâu', 'Tôm viên, tương ớt, dưa leo', 'Vừa - 15k, Lớn - 20k', '<p>T&ocirc;m vi&ecirc;n chi&ecirc;n gi&ograve;n gi&ograve;n dai dai v&agrave; đậm đ&agrave;, m&igrave;nh hay l&agrave;m cho b&eacute; nh&agrave; m&igrave;nh ăn chơi v&agrave; cả nh&agrave; ăn với cơm rất thơm ngon!</p>\n\n<br />\n\nĐặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng ngay<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn nhiều thạch hoặc nhiều ch&acirc;n ch&acirc;u( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/new-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" />)', '', '2020-03-19', 'Tân Hồng ', '2020-04-19 12:31:42', 25, 0, 0, 'tom-vien-co-the-dat-theo-phan-tuy-chon-gia-10img1.jpg', '', '', '', 'tom-vien-co-the-dat-theo-phan-tuy-chon-gia'),
(11, 'Bò viên chiên (có thể đặt theo phần tùy chọn giá)', 2, 1, 2, 1, 'Đặt hàng ngay quán mình hỗ trợ free ship trong bán kính 5km và hỗ trợ tận tình cũng như có nhiều ưu đãi cho các khách hàng thân thiết ạ.', 20000, 'Vàng nâu', 'Bò viên, tương ớt, dưa leo', 'Vừa - 15k, Lớn - 20k, Setup theo phần tùy giá', 'Miếng thịt b&ograve; v&agrave;ng ươm, n&oacute;ng hổi, thơm phức kết hợp với hương vị đậm đ&agrave; của nước chấm, thơm ngon kh&oacute; cưỡng, bất cứ ai cũng phải ph&aacute;t th&egrave;m. Đ&oacute; ch&iacute;nh l&agrave; b&ograve; vi&ecirc;n chi&ecirc;n.<br />\n\n<br />\n\nThịt b&ograve; vi&ecirc;n l&agrave;m bằng thịt b&ograve; m&agrave; đ&atilde; được nghiền th&agrave;nh bột mịn v&agrave; dễ d&agrave;ng ph&acirc;n biệt với thịt heo vi&ecirc;n hay c&aacute; vi&ecirc;n v&igrave; thịt b&ograve; vi&ecirc;n c&oacute; m&agrave;u đậm hơn, được ưa chuộng nhất l&agrave; loại b&ograve; vi&ecirc;n g&acirc;n, v&igrave; dai.<br />\n\n<br />\n\nĐặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng ngay<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn k&iacute;ch cỡ, số lượng v&agrave; gi&aacute; kh&aacute;c nhau khi đặt h&agrave;ng n&egrave;( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/new-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" />)', '', '2020-03-19', 'Tân Hồng ', '2020-04-19 12:30:55', 32, 0, 0, 'bo-vien-co-the-dat-theo-phan-tuy-chon-gia-11img1.jpg', '', '', '', 'bo-vien-co-the-dat-theo-phan-tuy-chon-gia'),
(24, 'Bánh xèo chảo - To, giòn ngon, kèm rau tươi hấp dẫn (Loại ăn mặn)', 1, 1, 1, 0, 'Bánh xèo (Loại ăn mặn) to giòn có ăn kèm rau tươi và nước mắm ngọt nhà tự làm an toàn vệ sinh...', 20000, 'Vàng', 'Bột năng, tôm, giá, thịt heo, nấm, rau tươi,...', 'To', '<h4>Giới thiệu:</h4>\n\n\n\n<p><em>C&aacute;i t&ecirc;n &ldquo;b&aacute;nh x&egrave;o&rdquo; xuất ph&aacute;t từ tiếng đổ bột v&agrave;o chảo ph&aacute;t ra tiếng &ldquo;x&egrave;o x&egrave;o&rdquo;. B&aacute;nh c&oacute; hương vị thơm ngon mang những đặc trưng của văn h&oacute;a ẩm thực d&acirc;n gian Nam Bộ.</em></p>\n\n\n\n<p><strong>B&aacute;nh x&egrave;o</strong>&nbsp;l&agrave; m&oacute;n ăn y&ecirc;u th&iacute;ch của người d&acirc;n Việt nam khắp 3 miền. T&ugrave;y theo ẩm thực của từng v&ugrave;ng miền m&agrave; nh&acirc;n b&aacute;nh c&oacute; thể l&agrave; gi&aacute;, đu đủ hoặc b&ocirc;ng đi&ecirc;n điển, thịt ba rọi, t&eacute;p, thịt g&agrave;, hoặc thịt vịt bằm nhuyễn&hellip;</p>\n\n\n\n<p>B&aacute;nh được chi&ecirc;n bằng dầu nhưng ăn kh&ocirc;ng bị ng&aacute;n do được ăn k&egrave;m với nhiều loại rau như x&agrave; l&aacute;ch, diếp c&aacute;, rau thơm, c&oacute; người c&ograve;n th&iacute;ch ăn với cải bẹ xanh, xo&agrave;i non th&aacute;i chỉ, dứa, c&agrave; rốt&hellip;</p>\n\n\n\n<hr />Đặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng ngay<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn ăn gi&aacute; hoặc kh&ocirc;ng ăn gi&aacute; hoặc bỏ c&aacute;c nguy&ecirc;n liệu m&agrave; bạn kh&ocirc;ng th&iacute;ch khi đặt h&agrave;ng( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/php-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" title=\"heart\" />)', '', '2020-03-27', 'Tân Hồng ', '2020-04-11 15:20:26', 87, 0, 0, 'banh-xeo-chao-to-gion-ngon-kem-rau-rung-hap-dan-loai-an-man-24img1.jpg', 'banh-xeo-chao-to-gion-ngon-kem-rau-rung-hap-dan-loai-an-man-24img2.jpg', 'banh-xeo-chao-to-gion-ngon-kem-rau-rung-hap-dan-loai-an-man-24img3.jpg', 'banh-xeo-chao-to-gion-ngon-kem-rau-rung-hap-dan-loai-an-man-24img4.jpg', 'banh-xeo-chao-to-gion-ngon-kem-rau-rung-hap-dan-loai-an-man'),
(22, 'Bánh Plan (có thể đặt theo phần tùy chọn giá)', 3, 1, 2, 0, 'Bánh Flan còn có tên gọi khác là Caramen. Đây là Một loại bánh vừa thơm ngon; mềm xốp; lại hấp dẫn được rất nhiều người từ nhiều lứa tuổi.', 7000, 'Vàng', 'sữa tươi, trứng, Đường làm caramel,....', 'Dạng hộp tròn', '<h4>Giới thiệu:</h4>\n\nB&aacute;nh flan l&agrave; một sản phẩm tr&aacute;ng miệng ngon v&agrave; bổ dưỡng, n&oacute; được chế biến lần đầu ti&ecirc;n tại Ph&aacute;p v&agrave; trở n&ecirc;n phổ biến ở hầu hết c&aacute;c nước tr&ecirc;n thế giới.<br />\n\n<br />\n\n<strong>B&aacute;nh Flan c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave; Caramen. Đ&acirc;y l&agrave; Một loại b&aacute;nh vừa thơm ngon; mềm xốp; lại hấp dẫn được rất nhiều người từ nhiều lứa tuổi. B&aacute;nh được hấp ch&iacute;n từ c&aacute;c nguy&ecirc;n liệu ch&iacute;nh l&agrave; trứng v&agrave; sữa; nước caramen. Đ&acirc;y l&agrave; một loại b&aacute;nh c&oacute; lẽ xuất xứ từ nền ẩm thực ch&acirc;u &Acirc;u; tuy hiện nay đ&atilde; phổ biến tại nhiều nơi tr&ecirc;n thế giới.</strong><br />\n\n&nbsp;\n\n<hr /><br />\n\nĐặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng ngay<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn số lượng, k&iacute;ch cỡ, v&agrave; setup gi&aacute; tiền kh&aacute;c nhau khi đặt h&agrave;ng( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/php-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" title=\"heart\" />)', '', '2020-03-25', 'Tân Hồng ', '2020-04-11 17:41:36', 108, 1, 28, 'banh-plan-co-the-dat-theo-phan-tuy-chon-gia-22img1.jpg', 'banh-plan-22img2.jpg', 'banh-plan-co-the-dat-theo-phan-tuy-chon-gia-22img3.jpg', 'banh-plan-22img4.jpg', 'banh-plan-co-the-dat-theo-phan-tuy-chon-gia'),
(25, 'Bánh xèo chảo - To, giòn ngon, kèm rau tươi hấp dẫn (Loại ăn chay)', 1, 1, 1, 0, 'Bánh xèo (Loại ăn chay) to giòn có ăn kèm rau tươi và nước mắm ngọt nhà tự làm an toàn vệ sinh...', 15000, 'Vàng', 'Bột năng, đậu hũ, giá, nấm,....', 'To', '<h4>Giới thiệu:</h4>\n\n\n\n<p><em>C&aacute;i t&ecirc;n &ldquo;b&aacute;nh x&egrave;o&rdquo; xuất ph&aacute;t từ tiếng đổ bột v&agrave;o chảo ph&aacute;t ra tiếng &ldquo;x&egrave;o x&egrave;o&rdquo;. B&aacute;nh c&oacute; hương vị thơm ngon mang những đặc trưng của văn h&oacute;a ẩm thực d&acirc;n gian Nam Bộ.</em></p>\n\n\n\n<p><strong>B&aacute;nh x&egrave;o</strong>&nbsp;l&agrave; m&oacute;n ăn y&ecirc;u th&iacute;ch của người d&acirc;n Việt nam khắp 3 miền. T&ugrave;y theo ẩm thực của từng v&ugrave;ng miền m&agrave; nh&acirc;n b&aacute;nh c&oacute; thể l&agrave; gi&aacute;, đu đủ hoặc b&ocirc;ng đi&ecirc;n điển, thịt ba rọi, t&eacute;p, thịt g&agrave;, hoặc thịt vịt bằm nhuyễn&hellip;</p>\n\n\n\n<p>B&aacute;nh được chi&ecirc;n bằng dầu nhưng ăn kh&ocirc;ng bị ng&aacute;n do được ăn k&egrave;m với nhiều loại rau như x&agrave; l&aacute;ch, diếp c&aacute;, rau thơm, c&oacute; người c&ograve;n th&iacute;ch ăn với cải bẹ xanh, xo&agrave;i non th&aacute;i chỉ, dứa, c&agrave; rốt&hellip;</p>\n\n\n\n<hr />Đặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng ngay<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn ăn gi&aacute; hoặc kh&ocirc;ng ăn gi&aacute; hoặc bỏ c&aacute;c nguy&ecirc;n liệu m&agrave; bạn kh&ocirc;ng th&iacute;ch khi đặt h&agrave;ng( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/php-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" title=\"heart\" />)', '', '2020-03-27', 'Tân Hồng ', '2020-04-11 21:33:43', 59, 0, 0, 'banh-xeo-chao-to-gion-ngon-kem-rau-rung-hap-dan-loai-an-chay-25img1.jpg', '', '', '', 'banh-xeo-chao-to-gion-ngon-kem-rau-rung-hap-dan-loai-an-chay'),
(26, 'Ly bánh plan 5 cái kết hợp sữa tươi và cafe', 1, 1, 2, 0, 'Bánh Flan còn có tên gọi khác là Caramen. Đây là Một loại bánh vừa thơm ngon; mềm xốp; lại hấp dẫn được rất nhiều người từ nhiều lứa tuổi.', 25000, 'Vàng', 'cafe, sữa tươi, trứng, Đường làm caramel,....', 'To', '<h4>Giới thiệu:</h4>\n\nB&aacute;nh flan l&agrave; một sản phẩm tr&aacute;ng miệng ngon v&agrave; bổ dưỡng, n&oacute; được chế biến lần đầu ti&ecirc;n tại Ph&aacute;p v&agrave; trở n&ecirc;n phổ biến ở hầu hết c&aacute;c nước tr&ecirc;n thế giới.<br />\n\n<br />\n\n<strong>B&aacute;nh Flan c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave; Caramen. Đ&acirc;y l&agrave; Một loại b&aacute;nh vừa thơm ngon; mềm xốp; lại hấp dẫn được rất nhiều người từ nhiều lứa tuổi. B&aacute;nh được hấp ch&iacute;n từ c&aacute;c nguy&ecirc;n liệu ch&iacute;nh l&agrave; trứng v&agrave; sữa; nước caramen. Đ&acirc;y l&agrave; một loại b&aacute;nh c&oacute; lẽ xuất xứ từ nền ẩm thực ch&acirc;u &Acirc;u; tuy hiện nay đ&atilde; phổ biến tại nhiều nơi tr&ecirc;n thế giới.</strong><br />\n\n&nbsp;\n\n<hr /><br />\n\nĐặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng ngay<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn số lượng, k&iacute;ch cỡ, v&agrave; setup gi&aacute; tiền kh&aacute;c nhau khi đặt h&agrave;ng( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/php-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" title=\"heart\" />)', '', '2020-04-10', 'Tân Hồng ', '2020-04-11 17:40:19', 58, 0, 0, 'ly-banh-plan-5-cai-ket-hop-sua-tuoi-va-cafe-26img1.jpg', 'ly-banh-plan-5-cai-ket-hop-sua-tuoi-va-cafe-26img2.jpg', 'ly-banh-plan-5-cai-ket-hop-sua-tuoi-va-cafe-26img3.jpg', '', 'ly-banh-plan-5-cai-ket-hop-sua-tuoi-va-cafe'),
(27, 'Pudding thạch nhiều loại khác nhau ngon mát', 2, 1, 2, 0, 'Pudding uống với trà sữa là 1 món tráng miệng cực kì ngon và rất hấp dẫn, được rất nhiều người ưa thích đặc biết nhất là giới trẻ.', 4000, 'Nhiều màu lựa chọn', 'Nước, đường, Gelatine, Siro,....', 'Hũ đựng', '<u><strong>Th&ocirc;ng tin</strong></u>:<br />\n\nPudding l&agrave; một loại b&aacute;nh tr&aacute;ng miệng c&oacute; nguồn gốc từ nước Ph&aacute;p. Đ<em>ược du nhập v&agrave;o Việt Nam c&aacute;ch đ&acirc;y kh&ocirc;ng l&acirc;u.</em><br />\n\n<br />\n\nNg&agrave;y nay, m&oacute;n b&aacute;nh pudding được biến tấu với nhiều c&ocirc;ng thức, nguy&ecirc;n liệu kh&aacute;c nhau gi&uacute;p ch&uacute;ng ta c&oacute; th&ecirc;m nhiều lựa chọn cho m&oacute;n tr&aacute;ng miệng hấp dẫn n&agrave;y. T&ugrave;y v&agrave;o nguy&ecirc;n liệu sử dụng m&agrave; b&aacute;nh pudding c&oacute; những m&agrave;u sắc kh&aacute;c nhau. M&agrave;u xanh từ tr&agrave; xanh, m&agrave;u v&agrave;ng từ trứng hoặc xo&agrave;i ch&iacute;n, m&agrave;u n&acirc;u từ s&ocirc; c&ocirc; la,&hellip;<br />\n\n<br />\n\nB&ecirc;n cạnh việc sử dụng như một m&oacute;n tr&aacute;ng miệng, b&aacute;nh pudding c&ograve;n được sử dụng l&agrave;m topping cho một số m&oacute;n. Phổ biến nhất l&agrave; cho v&agrave;o tr&agrave; sữa, d&ugrave;ng c&ugrave;ng c&aacute;c loại thạch hoặc ăn k&egrave;m với tr&aacute;i c&acirc;y,&hellip;<br />\n\n<br />\n\nĐặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<u><strong>HDSD</strong></u>: D&ugrave;ng ngay<br />\n\n<br />\n\n<u><strong>Bảo quản</strong></u>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn nhiều thạch, k&iacute;ch cỡ v&agrave; gi&aacute; kh&aacute;c nhau khi đặt h&agrave;ng n&egrave;( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/php-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" title=\"heart\" />)', '', '2020-03-27', 'Tân Hồng ', '2020-04-11 21:35:34', 57, 0, 0, 'pudding-thach-nhieu-loai-khac-nhau-ngon-mat-27img1.jpg', 'pudding-thach-nhieu-loai-khac-nhau-ngon-mat-27img2.jpg', 'pudding-thach-nhieu-loai-khac-nhau-ngon-mat-27img3.jpg', 'pudding-thach-nhieu-loai-khac-nhau-ngon-mat-27img4.jpg', 'pudding-thach-nhieu-loai-khac-nhau-ngon-mat'),
(28, 'Mặt nạ ngủ Bioaqua viên thuốc', 2, 2, 8, 0, 'ưertyuio', 10000, 'Xanh lá', 'lô hội', 'Dạng viên', 'Mặt nạ ngủ h&igrave;nh vi&ecirc;n thuốc của bioaqua l&agrave; sản phẩm được rất nhiều người trung quốc tin d&ugrave;ng. n&oacute; c&oacute; gi&aacute; th&agrave;nh rẻ nhưng hiệu quả dưỡng da rất tốt ph&ugrave; hợp với nhu cầu của c&aacute;c bạn học sinh sinh vi&ecirc;n chưa c&oacute; điều kiện trải nghiệm c&aacute;c sản phẩm, cao cấp của Nhật H&agrave;n\n\n<div style=\"margin-left: 40px;\">- mặt nạ ngủ bioaqua jelly mask chứa dưỡng chất dồi d&agrave;o mang đến l&agrave;n da căng mịn hồng h&agrave;o chỉ sau v&agrave;i lần đắp đầu ti&ecirc;n.<br />\n\n- mặt nạ ngủ c&oacute; chất gel đặc v&agrave; m&ugrave;i hương rất dễ chịu. đc điều chế từ h&ograve;a quả tự nhi&ecirc;n n&ecirc;n cực kỳ l&agrave;nh t&iacute;nh<br />\n\n- chất lượng giấc ngủ đc cải thiện sẽ gi&uacute;p tăng cường khả năng t&aacute;i sinh phục hồi l&agrave;n da 1 c&aacute;ch hiệu quả<br />\n\n- gi&uacute;p nu&ocirc;i dưỡng tăng cường độ ẩm l&agrave;n da mềm mại mịn m&agrave;ng<br />\n\n- dưỡng da trắng dần đều m&agrave;u rạng rỡ<br />\n\n- chăm s&oacute;c da nu&ocirc;i dưỡng nhẹ nh&agrave;ng cho mọi l&agrave;n da<br />\n\n- gi&uacute;p se lỗ ch&acirc;n l&ocirc;ng, ngăn ngừa mụn bọc v&agrave; điều trị c&aacute;c vấn đề vi&ecirc;m nhiễm ở da dưỡng da trị mụn hiệu quả, điều trị mụn c&aacute;m<br />\n\n- dưỡng da mềm mịn, tăng t&iacute;nh đ&agrave;n hồi cho da</div>\n\n<br />\n\n<u><strong>C&ocirc;ng dụng:</strong></u>\n\n\n\n<ul>\n\n	<li>L&ocirc; Hội: Chiết xuất từ l&ocirc; hội c&oacute; t&aacute;c dụng l&agrave;m s&aacute;ng da, dưỡng ẩm, sạch b&atilde; nhờn, đặc biệt c&oacute; khả năng kiềm dầu cao</li>\n\n	<li>Hoa Anh Đ&agrave;o: C&oacute; t&aacute;c dụng dưỡng ẩm, l&agrave;m mịn da, gi&uacute;p da săn chắc tăng độ đ&agrave;n hồi cho da</li>\n\n	<li>Việt Quất: C&oacute; t&aacute;c dụng l&agrave;m trắng, dưỡng ẩm s&acirc;u cho da lu&ocirc;n căng mịn v&agrave; tr&agrave;n đầy sức sống</li>\n\n</ul>\n\nĐặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng ngay<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\n( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch c&oacute; thể ghi lời nhắn lưu &yacute; của c&aacute;c bạn cho qu&aacute;n m&igrave;nh nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/php-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" title=\"heart\" />)', '', '2020-03-27', 'Tân Hồng ', '2020-04-11 21:31:17', 146, 0, 0, 'mat-na-ngu-bioaqua-vien-thuoc-28img1.jpg', 'mat-na-ngu-bioaqua-vien-thuoc-28img2.jpg', 'mat-na-ngu-bioaqua-vien-thuoc-28img3.jpg', '', 'mat-na-ngu-bioaqua-vien-thuoc'),
(31, 'Trà tắc - Giải khát, thanh lọc cơ thể, không béo', 1, 1, 5, 0, 'Bình thường thì không sao nhưng vào mùa nắng nóng thì lại “hot” hơn bao giờ hết vì nhu cầu giải khát tăng cao đặc biệt khả năng giải khát của nó...', 10000, 'Cam vàng', 'Trà xanh, quả tắc', ' ', 'Tr&agrave; tắc l&agrave; một loại thức uống m&aacute;t l&agrave;nh quen thuộc dĩ nhi&ecirc;n th&agrave;nh phần ch&iacute;nh của n&oacute; l&agrave; tr&agrave;, quả tắc v&agrave; đường. Ngo&agrave;i ra c&ograve;n c&oacute; th&ecirc;m chanh d&acirc;y, cam, mật ong tuỳ v&agrave;o y&ecirc;u cầu của kh&aacute;ch h&agrave;ng.<br />\n\n<br />\n\nB&igrave;nh thường th&igrave; kh&ocirc;ng sao nhưng v&agrave;o m&ugrave;a nắng n&oacute;ng th&igrave; lại &ldquo;hot&rdquo; hơn bao giờ hết v&igrave; nhu cầu giải kh&aacute;t tăng cao đặc biệt khả năng giải kh&aacute;t của n&oacute; phải n&oacute;i rằng thuộc dạng định với m&ugrave;i vị chua ngọt m&aacute;t lạnh v&agrave; gi&aacute; rẻ.&nbsp;<br />\n\n<br />\n\nĐặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng ngay<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn k&iacute;ch cỡ v&agrave; gi&aacute; kh&aacute;c nhau khi đặt h&agrave;ng n&egrave;.( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/php-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" title=\"heart\" />', '', '2020-04-11', 'Tân Hồng ', '2020-04-11 23:32:32', 11, 0, 0, 'tra-tac---giai-khat--thanh-loc-co-the--khong-beo-31img1.jpg', 'tra-tac---giai-khat--thanh-loc-co-the--khong-beo-31img2.jpg', '', '', 'tra-tac---giai-khat--thanh-loc-co-the--khong-beo'),
(32, 'Sữa tươi thạch ,chân châu (Giá tùy chọn 15k, 20k, 25k)', 1, 1, 5, 0, 'Chán trà sữa rồi thì sữa tươi là lựa chọn thích hợp và không béo như trà sữa mà lại tốt cho sức khỏe nè.', 15000, 'Trắng', 'Sữa tươi, chân châu, plan, pudding,...', 'Ly', 'Ch&aacute;n tr&agrave; sữa rồi th&igrave; sữa tươi l&agrave; lựa chọn th&iacute;ch hợp v&agrave; kh&ocirc;ng b&eacute;o như tr&agrave; sữa m&agrave; lại tốt cho sức khỏe n&egrave;.<br />\n\n<br />\n\nSữa tươi tr&acirc;n ch&acirc;u H&agrave;n Quốc, hiện đang l&agrave; loại thức uống rất hot trong giới trẻ hiện nay, bởi ch&iacute;nh vị thơm b&eacute;o của sữa tươi, vị dai dai dẻo dẻo của tr&acirc;n ch&acirc;u, vị ngọt thanh của đường đen H&agrave;n Quốc.\n\n<hr />Đặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>HDSD</strong>: D&ugrave;ng ngay.<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn nhiều thạch hoặc nhiều ch&acirc;n ch&acirc;u( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/php-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" title=\"heart\" />)', '', '2020-04-13', 'Tân Hồng ', '2020-04-13 16:50:16', 22, 0, 0, 'sua-tuoi-thach--chan-chau-32img1.jpg', '', '', '', 'sua-tuoi-thach--chan-chau'),
(33, 'HP Computer', 1, 1, 3, 0, 'HP is a great brand of computers that is highly in line with the global trending of new technology', 2000, 'Trắng nâu', 'Sữa tươi, chân châu, plan, pudding milo,...', 'Ly', 'Sữa tươi milo - Cacao dầm thơm ngon 20000đ<br />\r\n<br />\r\nCh&aacute;n tr&agrave; sữa rồi th&igrave; sữa tươi dầm milo c&ugrave;ng cacao l&agrave; lựa chọn th&iacute;ch hợp v&agrave; kh&ocirc;ng b&eacute;o như tr&agrave; sữa m&agrave; lại tốt cho sức khỏe n&egrave;.\r\n<hr />Đặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\r\n<br />\r\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\r\n<br />\r\n<strong>HDSD</strong>: D&ugrave;ng ngay.<br />\r\n<br />\r\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\r\n<br />\r\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\r\n<br />\r\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn nhiều thạch hoặc nhiều ch&acirc;n ch&acirc;u( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/new-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" />)', 'Tân Hồng', '2022-10-29', '', '2022-10-29 17:54:29', 41, 0, 0, 'sua-tuoi-milo-cacao-dam-33img1.png', 'sua-tuoi-milo-cacao-dam-33img2.png', 'sua-tuoi-milo-cacao-dam-33img3.png', 'sua-tuoi-milo-cacao-dam-33img4.jpg', 'sua-tuoi-milo-cacao-dam'),
(34, 'Chân gà xả tắc kèm nước xốt chấm thơm ngon', 1, 1, 2, 0, 'Giao hành nhanh,chân gà thấm,ăn giòn giòn,chấm với xốt nhà tự làm cay cay rất ngon.', 50000, ' ', 'Chân gà, xả, tắc, ớt( tùy người dùng), nước xốt', 'Hũ to', 'Giao h&agrave;nh nhanh,ch&acirc;n g&agrave; thấm,ăn gi&ograve;n gi&ograve;n,chấm với xốt nh&agrave; tự l&agrave;m cay cay rất ngon.<br />\n\n<br />\n\nVị mặn mặn chua &iacute;t hơi the cay, m&igrave;nh th&iacute;ch ăn chua nhiều n&ecirc;n vắt th&ecirc;m tắc c&oacute; sẵn trong t&uacute;i g&agrave;. Nước chấm chua chua ngọt ngọt cay cay.<br />\n\n<br />\n\nH&igrave;nh thức: c&oacute; xanh xanh đỏ đỏ của tắc ớt sả, hũ chắc chắn.\n\n<hr />Đặt h&agrave;ng ngay qu&aacute;n m&igrave;nh hỗ trợ free ship trong b&aacute;n k&iacute;nh 5km v&agrave; hỗ trợ tận t&igrave;nh cũng như c&oacute; nhiều ưu đ&atilde;i cho c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết ạ.<br />\n\n<br />\n\nC&aacute;c bạn nhớ tạo 1 t&agrave;i khoản v&agrave; đặt h&agrave;ng để lưu đơn h&agrave;ng thật nhiều, qu&aacute;n m&igrave;nh sẽ c&oacute; nhiều ưu đ&atilde;i cho kh&aacute;ch h&agrave;ng th&acirc;n thiết nh&eacute;! Cảm ơn c&aacute;c bạn.<br />\n\n<br />\n\n<strong>Bảo quản</strong>: Tr&aacute;nh &aacute;nh nắng trực tiếp<br />\n\n<br />\n\nCam Kết Vệ Sinh An To&agrave;n Thực Phẩm.<br />\n\n<br />\n\nQu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y chọn k&iacute;ch cỡ lớn hơn hoặc setup theo gi&aacute; ( Khi đặt h&agrave;ng qu&yacute; kh&aacute;ch nhớ ghi lời nhắn lại nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://localhost/php-mvc-shop/admin/themes/plugins/ckeditor/plugins/smiley/images/heart.png\" title=\"heart\" />)', 'Tân Hồng ', '2020-04-16', 'Tân Hồng ', '2020-04-16 10:59:49', 23, 0, 0, 'chan-ga-xa-tac-kem-nuoc-xot-cham-thom-ngon-34img1.jpg', 'chan-ga-xa-tac-kem-nuoc-xot-cham-thom-ngon-34img2.jpg', '', '', 'chan-ga-xa-tac-kem-nuoc-xot-cham-thom-ngon');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_desc` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `role_desc`) VALUES
(1, 'Admin', 'Website system administrator'),
(2, 'Moderator', 'Assistant manager');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `slide_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_text1` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_text2` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_text3` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_img4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_text4` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_img5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_text5` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slide_name`, `slide_img1`, `slide_text1`, `slide_img2`, `slide_text2`, `slide_img3`, `slide_text3`, `slide_img4`, `slide_text4`, `slide_img5`, `slide_text5`, `status`) VALUES
(1, 'HomePage 1', 'image1-1-homepage-1.png', 'Just place an order, Sister Koi restaurant will immediately fry, deliver and invite to enjoy immediately.', 'image2-1-homepage-1.png', 'Many types of milk tea for you to choose from', 'image3-1-homepage-1.png', 'Many different snacks for you to enjoy', 'image4-1-homepage-1.png', '', 'image5-1-homepage-1.png', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supply_id` int(11) DEFAULT 1,
  `category_id` int(11) DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `subcategory_name`, `supply_id`, `category_id`, `slug`) VALUES
(1, 'Smart Phone', 1, 1, 'smart-phone'),
(2, 'Smart TV', 1, 1, 'smart-tv'),
(3, 'Computers', 1, 1, 'computers'),
(4, 'Printers', 1, 1, 'printers'),
(5, 'Accessories', 1, 1, 'accessories'),
(8, 'Nourishing mask', 1, 1, 'nourishing-mask');

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `id` int(11) NOT NULL,
  `supply_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`id`, `supply_name`, `logo`) VALUES
(1, 'Việt Nam', '');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type_name`, `type_description`, `slug`) VALUES
(1, 'HOT PRODUCTS (HOT)', '', 'san-pham-noi-bat'),
(2, 'NEW PRODUCT', '', 'san-pham-moi'),
(3, 'DISCOUNT PRODUCTS', '', 'san-pham-giam-gia');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 0 COMMENT '1=admin,\r\n2=moderator',
  `user_avatar` varchar(550) COLLATE utf8mb4_unicode_ci DEFAULT 'author-auto.png',
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  `verified` int(11) NOT NULL DEFAULT 0,
  `verificationCode` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editTime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_username`, `user_password`, `user_name`, `role_id`, `user_avatar`, `user_email`, `user_phone`, `user_address`, `createDate`, `verified`, `verificationCode`, `editTime`) VALUES
(1038, 'shtshrffgd', 'e807f1fcf82d132f9bb018ca6738a19f', 't4greg', 0, 'author-auto.png', 'phuong12357tan@gmail.com', '+8489941576', '3128  Doctors Drive', '2020-04-02 01:35:31', 0, '3cb8761195802abf0656e670f73b277c', '2020-04-11 01:40:43'),
(1039, 'thtreht', 'e807f1fcf82d132f9bb018ca6738a19f', 'dtrdhtrjy', 2, 'author-auto.png', 'trehytrh@gmail.com', '4089941576', '3128  Doctors Drive', '2020-04-11 02:41:21', 0, '9b20629c075697db8c9c5d3b94a86f8b', '0000-00-00 00:00:00'),
(1040, 'admin', 'e807f1fcf82d132f9bb018ca6738a19f', 'Át min', 1, 'author-auto.png', 'admin@gmail.com', '4089941576', '3128  Doctors Drive', '2020-04-11 02:43:23', 0, 'aca75e03278fa33d61ce42889ea19ed3', '0000-00-00 00:00:00'),
(4, 'tanhongitii', '25f9e794323b453885f5181f1b624d0b', 'Tân Hồng IT', 0, 'avatar-user1018-tanhongitii.jpg', 'meowwww@gmail.com.com', '363220339', 'xuan lộc, đồng nai, việt nam', '2020-04-11 00:00:00', 0, '', '0000-00-00 00:00:00'),
(3, 'eyteyt', '25d55ad283aa400af464c76d713c07ad', 'Tân Hồng IT', 2, 'author-auto.png', 'moderator@gmail.com', '363220339', 'xuan lộc, đồng nai, việt nammmmmmmm', '2020-04-07 00:00:00', 1, '47986eab669c010f869a7c7f288873e2', '2020-04-11 03:18:25'),
(2, 'tanhongit', '847265df1ad7102fe1b5d97884e51801', 'Tân Hồng ', 1, 'avatar-user1011-tanhongit.jpg', 'phuongtan12357nguyen@gmail.com', '363220339', 'xuân lộc, đồng nai, việt namm', '2020-03-24 00:00:00', 1, 'dd5bfe95860b785a82126bd40a7fc093', '2020-04-13 11:46:18'),
(1014, 'Tân', '202cb962ac59075b964b07152d234b70', 'Nguyen Tan', 2, 'avatar-user1014-tan.jpg', 'ph12357tan@gmail.com', '89941576', '3128  Doctors Drive', '2020-03-24 00:00:00', 1, '793f470cada3b6223637ca20dc0cb9d3', '0000-00-00 00:00:00'),
(1, 'testna', '25f9e794323b453885f5181f1b624d0b', 'Nguyen Tan', 0, 'avatar-user1-test.png', 'test@gmail.com', '01663220339', 'Xuan Lu1ed9cccthis copy of windows is genurehh', '2020-03-22 00:00:00', 0, '0c2bae3b44c3c49553714688df3dbd05', '2020-04-12 04:57:09'),
(1043, 'nsolomon', '161ebd7d45089b3446ee4e0d86dbcf92', 'Solomon S Ngatto', 0, 'avatar-user1043-nsolomon.jpg', 'nsolomon18c@njala.edu.sl', '23276238654', 'Njala Campus', '2022-10-27 06:59:17', 1, '384e6f75fdb481251daa518b0c817c31', '2022-10-27 23:14:31'),
(1044, 'ssngatto', '161ebd7d45089b3446ee4e0d86dbcf92', 'Solomon S Ngatto', 1, 'avatar-user1044-ssngatto.png', 'ssngatto@gmail.com', '0023276238654', 'Njala Campus', '2022-10-27 07:05:00', 1, '5c60e509093957e1b531408c8c8443ec', '2022-11-03 04:48:18'),
(1041, 'ưer', 'eba0fd768067afc24806607a4de3f852', 'ỳdtdy', 0, 'author-auto.png', 'ph12rgesgresg@gmail.com', '4089941576', '3128  Doctors Drive', '2020-04-11 02:45:37', 0, '8d9bce9a1dec443a338a00c3e79576f8', '2020-04-11 03:20:35');

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `session` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `time` int(11) NOT NULL DEFAULT 0,
  `ip` varchar(34) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser` varchar(550) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateonline` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`session`, `time`, `ip`, `browser`, `dateonline`) VALUES
('imug14ki0q2voomg1vec6bpu3p', 1586580224, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-11 11:43:44'),
('msj692bj83nad5ddvb6cjt79gg', 1586593321, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-11 15:22:01'),
('tkck1ninob4qj4b1m6hg2odkj1', 1586602762, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-11 17:59:22'),
('1l835nbt5ge32riiu32u0tnoft', 1586601715, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-11 17:41:55'),
('cu5calrh294f4e1skmk3epsbdh', 1586624144, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-11 23:55:44'),
('ipr1h8bpsm81sio33kidr09875', 1586626277, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-12 00:31:17'),
('qrg3jbpj8gbnk7jkqfv14jp4db', 1586684941, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-12 16:49:01'),
('dch2468m3nkh54pg7eqrimnch3', 1586667589, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-12 11:59:49'),
('2fhq7n9nkvdptlktjvpeuian83', 1586745634, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-13 09:40:34'),
('d83k1hq46e2bnbphk4qog0duka', 1586769577, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-13 16:19:37'),
('ct2ha9tsdmukk92cnb6aivgi32', 1586758860, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-13 13:21:00'),
('q6uhu0g4qt794me6dl4tolt69q', 1586799218, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-14 00:33:38'),
('gokih8mthn12kftet0ofnlv9ke', 1586884245, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-15 00:10:45'),
('g4nbe3cgookc4l9dd8b5nn5bra', 1586934776, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-15 14:12:56'),
('ip13q3g2qd2kttsot6onpa6bh1', 1587063041, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-17 01:50:41'),
('70g1j4g341vtk69o01hrhd1mpo', 1587133220, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-17 21:20:20'),
('toh12m5lrfcgtl3edkknlc14fq', 1587134595, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-17 21:43:15'),
('jf2s4n36q8cdfub5qs60vsuoic', 1587200885, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-18 16:08:05'),
('7sjnm4igkiue8ir2et5i5m4ric', 1587207351, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-18 17:55:51'),
('giqe6d6bil5g8efmmovlnr6dss', 1587226980, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-18 23:23:00'),
('go2mug9fde7cphdknjrc39rupb', 1587263351, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-19 09:29:11'),
('ndssrnrd7p4itagsjq4pqdc49t', 1587278220, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-19 13:37:00'),
('j3bbppvqs3usa9hkd0iao2hsf5', 1666692939, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '2022-10-25 17:15:39'),
('ie4rv2tr9uqhgfl6d6grfk6pnf', 1666732599, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '2022-10-26 04:16:39'),
('5mam8184pnbd9j9i2of1qebuop', 1667310943, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2022-11-01 20:55:43'),
('3k0srjfdfku6prh1pmbhqr2dgd', 1667315328, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36', '2022-11-01 22:08:48'),
('8jin1q0i7ts9m2f8o7fjst7ur2', 1667334787, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2022-11-02 03:33:07'),
('v9otgt1sv4ra8ausjtsi0d9mpn', 1667335065, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36', '2022-11-02 03:37:45'),
('l0u2cs5n0ig8br6qgit9vj3p6i', 1667336582, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2022-11-02 04:03:02'),
('up378kt06oen3ss2a1tdbjd50e', 1667336757, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2022-11-02 04:05:57'),
('th7oikeqgodlr0polerr0rd9f1', 1667428379, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2022-11-03 05:32:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_user`
--
ALTER TABLE `cart_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_user` (`user_id`),
  ADD KEY `fk_id_product` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_supply_id` (`supply_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_product` (`product_id`),
  ADD KEY `fk_id_user` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_product_id` (`product_id`),
  ADD KEY `fk_order_id` (`order_id`);

--
-- Indexes for table `introduce`
--
ALTER TABLE `introduce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_footers`
--
ALTER TABLE `menu_footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_user` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_id` (`order_id`),
  ADD KEY `fk_id_product` (`product_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_author` (`post_author`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_id` (`category_id`),
  ADD KEY `fk_supply_id` (`supply_id`),
  ADD KEY `fk_type_id` (`product_typeid`),
  ADD KEY `fk_id_sub_category` (`sub_category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_id` (`category_id`),
  ADD KEY `fk_supply_id` (`supply_id`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_role` (`role_id`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`session`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_user`
--
ALTER TABLE `cart_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=557;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `introduce`
--
ALTER TABLE `introduce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menu_footers`
--
ALTER TABLE `menu_footers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1045;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
