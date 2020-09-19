-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table sohaib_store.carts
CREATE TABLE IF NOT EXISTS `carts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_session` varchar(191) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;

-- Dumping data for table sohaib_store.carts: ~17 rows (approximately)
DELETE FROM `carts`;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
INSERT INTO `carts` (`id`, `cart_session`, `product_id`, `qty`, `created_at`, `updated_at`) VALUES
	(3, '745516', 9, 1, '2019-05-15 18:35:25', '2019-05-15 18:35:25'),
	(4, '528401', 8, 2, '2019-05-16 00:46:07', '2019-05-16 00:46:53'),
	(5, '528401', 5, 2, '2019-05-16 00:46:22', '2019-05-16 00:58:09'),
	(6, '528401', 13, 1, '2019-05-16 00:46:29', '2019-05-16 00:46:29'),
	(7, '590860', 11, 1, '2019-05-18 23:36:23', '2019-05-18 23:36:23'),
	(8, '590860', 12, 1, '2019-05-18 23:36:39', '2019-05-18 23:36:39'),
	(9, '988307', 8, 1, '2019-05-19 23:26:31', '2019-05-19 23:26:31'),
	(10, '231465', 8, 1, '2019-05-23 22:13:59', '2019-05-23 22:13:59'),
	(11, '544855', 12, 1, '2019-06-02 15:41:31', '2019-06-02 15:41:31'),
	(12, NULL, 8, 1, '2019-06-02 15:44:53', '2019-06-02 15:44:53'),
	(13, '190887', 8, 1, '2019-06-02 15:45:58', '2019-06-02 15:45:58'),
	(14, '143713', 5, 1, '2019-06-02 15:51:08', '2019-06-02 15:51:08'),
	(15, '143713', 12, 1, '2019-06-02 15:51:20', '2019-06-02 15:51:20'),
	(16, '544855', 5, 1, '2019-06-02 18:15:10', '2019-06-02 18:15:10'),
	(22, '323291', 16, 1, '2019-06-13 18:42:55', '2019-06-13 18:42:55'),
	(48, '5', 5, 2, '2019-06-22 12:40:00', '2019-06-22 12:45:06'),
	(81, '7', 8, 1, '2019-06-23 02:39:02', '2019-06-23 02:39:02');
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;

-- Dumping structure for table sohaib_store.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(191) NOT NULL,
  `title_ar` varchar(191) DEFAULT NULL,
  `link` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table sohaib_store.categories: ~3 rows (approximately)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `title`, `title_ar`, `link`, `created_at`, `updated_at`) VALUES
	(2, 'Men', 'رجال', 'men', '2020-09-19 10:45:44', '2019-06-23 04:15:14'),
	(3, 'Women', 'نساء', 'women', '2020-09-19 10:45:54', '2019-06-23 04:15:36'),
	(4, 'Kids', 'أطفال', 'kids', '2020-09-19 10:46:16', '2019-04-25 14:29:56');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table sohaib_store.category_product
CREATE TABLE IF NOT EXISTS `category_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sohaib_store.category_product: ~29 rows (approximately)
DELETE FROM `category_product`;
/*!40000 ALTER TABLE `category_product` DISABLE KEYS */;
INSERT INTO `category_product` (`product_id`, `category_id`) VALUES
	(4, 3),
	(6, 4),
	(15, 3),
	(16, 4),
	(17, 4),
	(18, 4),
	(19, 4),
	(20, 3),
	(20, 4),
	(21, 3),
	(22, 3),
	(24, 2),
	(25, 2),
	(26, 3),
	(27, 2),
	(28, 3),
	(29, 3),
	(30, 2),
	(32, 3),
	(8, 2),
	(9, 3),
	(10, 3),
	(11, 2),
	(13, 2),
	(12, 3),
	(14, 2),
	(33, 2),
	(5, 3),
	(34, 3);
/*!40000 ALTER TABLE `category_product` ENABLE KEYS */;

-- Dumping structure for table sohaib_store.companies
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- Dumping data for table sohaib_store.companies: ~6 rows (approximately)
DELETE FROM `companies`;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
	(19, 'NIKE', '1561301347.jpg', '2019-05-26 13:40:51', '2019-06-23 17:49:07'),
	(21, 'GUCCL', '1561301380.png', '2019-05-26 13:42:28', '2019-06-23 17:49:40'),
	(28, 'ABCE', '1561301494.jpg', '2019-05-26 14:01:27', '2019-06-23 17:51:34'),
	(29, 'ADDIDAS', '1561301515.jpg', '2019-05-26 14:02:19', '2019-06-23 17:51:55'),
	(30, 'ARENA', '1561287656.jpg', '2019-05-26 14:03:12', '2019-06-23 14:00:56'),
	(32, 'NIKE', '1561302910.jpg', '2019-06-23 18:14:54', '2019-06-23 18:15:10');
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;

-- Dumping structure for table sohaib_store.logins
CREATE TABLE IF NOT EXISTS `logins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users` varchar(191) NOT NULL,
  `password` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sohaib_store.logins: ~0 rows (approximately)
DELETE FROM `logins`;
/*!40000 ALTER TABLE `logins` DISABLE KEYS */;
/*!40000 ALTER TABLE `logins` ENABLE KEYS */;

-- Dumping structure for table sohaib_store.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sohaib_store.migrations: ~0 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table sohaib_store.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `country` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `statuses` varchar(191) DEFAULT 'قيد التنفيذ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

-- Dumping data for table sohaib_store.orders: ~35 rows (approximately)
DELETE FROM `orders`;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `name`, `email`, `country`, `address`, `city`, `phone`, `statuses`, `created_at`, `updated_at`) VALUES
	(26, 'ree', 'ds@ffs.ssw', 're', 're', 're', '232323', '1', '2019-06-15 17:31:18', '2019-06-22 18:30:11'),
	(27, 'ree', 'ds@ffs.ssw', 're', 're', 're', '232323', '2', '2019-06-15 17:31:48', '2019-06-22 18:34:28'),
	(28, 'hgh', 'ds@ffs.ssw', 'ghgh', 'gh', 'hgh', '232323', NULL, '2019-06-15 17:32:29', '2019-06-15 17:32:29'),
	(29, 'vv', 'ds@ffs.ssw', 'vvv', 'vvv', 'vvvv', '232323', NULL, '2019-06-15 17:33:46', '2019-06-15 17:33:46'),
	(30, 'sabha', 'ds@ffs.ssw', 'ASDASD', 'alhayla', 'gaza', '232323', NULL, '2019-06-19 10:09:04', '2019-06-19 10:09:04'),
	(31, 'عيسى', 'ds@ffs.ssw', 'شراب', '2222', 'غزة', '232323', NULL, '2019-06-22 12:20:53', '2019-06-22 12:20:53'),
	(32, 'samer', 'samer@jm.a', 'samer', 'samer', 'samer', '12345', NULL, '2019-06-22 14:19:58', '2019-06-22 14:19:58'),
	(33, 'sef', 'samer@jm.a', 'efw', 'efs', 'esf', '12345', NULL, '2019-06-22 16:29:42', '2019-06-22 16:29:42'),
	(34, 'sef', 'samer@jm.a', 'efw', 'efs', 'esf', '12345', NULL, '2019-06-22 16:29:58', '2019-06-22 16:29:58'),
	(35, 'asdasd', 'www.aeesa.comm@gmail.com', 'asdasd', 'asdasd', 'asdasd', '345345345', NULL, '2019-06-22 16:49:40', '2019-06-22 16:49:40'),
	(40, 'dfefew', 'www.aeesa.comm@gmail.com', 'asdasd', 'alhayla', 'dds', '345345345', 'قيد التنفيذ', '2019-06-23 01:45:27', '2019-06-23 01:45:27'),
	(41, 'dfefew', 'www.aeesa.comm@gmail.com', 'asdasd', 'alhayla', 'dds', '345345345', 'قيد التنفيذ', '2019-06-23 01:50:23', '2019-06-23 01:50:23'),
	(42, 'deas', 'www.aeesa.comm@gmail.com', 'ed', 'ed', 'ed', '345345345', 'قيد التنفيذ', '2019-06-23 01:50:37', '2019-06-23 01:50:37'),
	(43, 'ew', 'www.aeesa.comm@gmail.com', 'ew', 'ew', 'ew', '345345345', 'قيد التنفيذ', '2019-06-23 01:51:38', '2019-06-23 01:51:38'),
	(44, 'esf', 'www.aeesa.comm@gmail.com', 'efssef', 'sefef', 'sefsefse', '345345345', 'قيد التنفيذ', '2019-06-23 01:54:41', '2019-06-23 01:54:41'),
	(45, 'efs', 'www.aeesa.comm@gmail.com', 'efs', 'efs', 'efs', '345345345', 'قيد التنفيذ', '2019-06-23 01:55:56', '2019-06-23 01:55:56'),
	(46, 'momo', 'www.aeesa.comm@gmail.com', 'momo', 'momo', 'momo', '345345345', 'قيد التنفيذ', '2019-06-23 01:56:37', '2019-06-23 01:56:37'),
	(47, 'wa', 'www.aeesa.comm@gmail.com', 'wa', 'aw', 'aw', '345345345', 'قيد التنفيذ', '2019-06-23 02:02:54', '2019-06-23 02:02:54'),
	(48, 'sss', 'www.aeesa.comm@gmail.com', 'sss', 'sss', 'sss', '345345345', 'قيد التنفيذ', '2019-06-23 02:07:10', '2019-06-23 02:07:10'),
	(49, 'pepsi', 'www.aeesa.comm@gmail.com', 'fsrfsrr', 'asdasdas', 'sdd', '345345345', 'قيد التنفيذ', '2019-06-23 02:08:02', '2019-06-23 02:08:02'),
	(51, 'ssssss', 'www.aeesa.comm@gmail.com', 'ssssss', 'ssssss', 'sssss', '345345345', 'قيد التنفيذ', '2019-06-23 02:08:51', '2019-06-23 02:08:51'),
	(53, 'wq', 'www.aeesa.comm@gmail.com', 'wq', 'wq', 'wq', '345345345', 'قيد التنفيذ', '2019-06-23 02:27:32', '2019-06-23 02:27:32'),
	(54, 'ssa', 'www.aeesa.comm@gmail.com', 'ssa', 'ssa', 'ssa', '345345345', 'قيد التنفيذ', '2019-06-23 02:28:15', '2019-06-23 02:28:15'),
	(55, 'sa', 'www.aeesa.comm@gmail.com', 'sa', 'sa', 'sa', '345345345', 'قيد التنفيذ', '2019-06-23 02:28:31', '2019-06-23 02:28:31'),
	(56, 'xx', 'www.aeesa.comm@gmail.com', 'xx', 'xx', 'xx', '345345345', 'قيد التنفيذ', '2019-06-23 02:29:21', '2019-06-23 02:29:21'),
	(57, 'xxx', 'www.aeesa.comm@gmail.com', 'xxx', 'xxx', 'xxx', '345345345', 'قيد التنفيذ', '2019-06-23 02:29:36', '2019-06-23 02:29:36'),
	(58, 'sa', 'ds@ffs.ssa', 'sas', 'sa', 'as', '1233333', '2', '2019-06-23 03:58:25', '2019-06-23 13:10:22'),
	(59, 'we', 'ds@ffs.ssa', 'we', 'we', 'we', '1233333', '3', '2019-06-23 04:36:18', '2019-06-23 13:10:56'),
	(60, 'MK', 'ds@ffs.ssa', 'MK', 'MK', 'MK', '1233333', '1', '2019-06-23 11:44:27', '2019-06-23 11:44:59'),
	(63, 'ششش', 'ds@ffs.ssa', 'شش', 'شش', 'شش', '1233333', '3', '2019-06-23 12:37:31', '2019-06-23 12:37:58'),
	(64, 'ss', 'ds@ffs.ssa', 'ss', 'ss', 'ss', '1233333', '2', '2019-06-23 13:05:55', '2019-06-23 13:07:05'),
	(68, 'JN', 'ds@ffs.ssaaa', 'BUJK', 'BHK', 'VJHK', '123123', 'قيد التنفيذ', '2019-06-23 20:20:33', '2019-06-23 20:20:33'),
	(69, 'ewew', 'ds@ffs.ssaaa', 'ewe', 'ewwe', 'ewew', '123123', '2', '2019-06-23 21:07:16', '2019-06-24 02:26:24'),
	(70, 'dsgsfd', 'www.aeesa.com@gmail.com', 'fsdf', 'sdfs', 'sdfsdf', '55554477', 'قيد التنفيذ', '2019-06-24 12:52:42', '2019-06-24 12:52:42'),
	(71, 'sasa', 'www.aeesa.com@gmail.com', 'as', 'asas', 'as', '55554477', 'قيد التنفيذ', '2019-06-24 12:53:03', '2019-06-24 12:53:03');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table sohaib_store.order_products
CREATE TABLE IF NOT EXISTS `order_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_name` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- Dumping data for table sohaib_store.order_products: ~65 rows (approximately)
DELETE FROM `order_products`;
/*!40000 ALTER TABLE `order_products` DISABLE KEYS */;
INSERT INTO `order_products` (`id`, `order_id`, `product_name`, `price`, `qty`, `total`, `created_at`, `updated_at`) VALUES
	(1, 21, 'Men\'s Blouse', '500.00000', 1, '750', '2019-06-13 17:11:17', '2019-06-13 17:11:17'),
	(2, 21, 'Jaket', '250.00000', 1, '250', '2019-06-13 17:11:17', '2019-06-13 17:11:17'),
	(3, 24, 'Men\'s Blouse', '500.00000', 1, '500', '2019-06-15 17:00:17', '2019-06-15 17:00:17'),
	(4, 25, 'E32', '235.00000', 1, '2100', '2019-06-15 17:27:43', '2019-06-15 17:27:43'),
	(5, 26, 'Men\'s Blouse', '500.00000', 4, '2600', '2019-06-15 17:31:18', '2019-06-15 17:31:18'),
	(6, 26, 'Women\'s Jeans', '600.00000', 1, '2600', '2019-06-15 17:31:18', '2019-06-15 17:31:18'),
	(7, 27, 'Men\'s Blouse', '500.00000', 4, '2600', '2019-06-15 17:31:48', '2019-06-15 17:31:48'),
	(8, 27, 'Women\'s Jeans', '600.00000', 1, '2600', '2019-06-15 17:31:48', '2019-06-15 17:31:48'),
	(9, 28, 'Women\'s Jeans', '600.00000', 1, '600', '2019-06-15 17:32:29', '2019-06-15 17:32:29'),
	(10, 29, 'Men\'s Jacket', '150.00000', 1, '1950', '2019-06-15 17:33:47', '2019-06-15 17:33:47'),
	(11, 29, 'Women\'s Caftan', '100.00000', 1, '1950', '2019-06-15 17:33:47', '2019-06-15 17:33:47'),
	(12, 29, 'Women\'s Holiday Suits', '700.00000', 1, '1950', '2019-06-15 17:33:47', '2019-06-15 17:33:47'),
	(13, 29, 'Men\'s Blouse', '500.00000', 2, '1950', '2019-06-15 17:33:47', '2019-06-15 17:33:47'),
	(14, 30, 'Men\'s Jacket', '150.00000', 2, '1500', '2019-06-19 10:09:04', '2019-06-19 10:09:04'),
	(15, 30, 'Women\'s Jeans', '600.00000', 1, '1500', '2019-06-19 10:09:04', '2019-06-19 10:09:04'),
	(16, 30, 'Men\'s Shirt', '600.00000', 1, '1500', '2019-06-19 10:09:04', '2019-06-19 10:09:04'),
	(17, 31, 'Men\'s Blouse', '500.00000', 2, '1400', '2019-06-22 12:20:53', '2019-06-22 12:20:53'),
	(18, 31, 'Women Long Sleeveless', '400.00000', 1, '1400', '2019-06-22 12:20:53', '2019-06-22 12:20:53'),
	(19, 32, 'Men\'s Blouse', '500.00000', 1, '1500', '2019-06-22 14:19:58', '2019-06-22 14:19:58'),
	(20, 32, 'Men\'s Jacket', '150.00000', 1, '1500', '2019-06-22 14:19:59', '2019-06-22 14:19:59'),
	(21, 32, 'Jaket', '250.00000', 1, '1500', '2019-06-22 14:19:59', '2019-06-22 14:19:59'),
	(22, 32, 'Men\'s Shirt', '600.00000', 1, '1500', '2019-06-22 14:19:59', '2019-06-22 14:19:59'),
	(23, 33, 'Women Long Sleeveless', '400.00000', 1, '500', '2019-06-22 16:29:42', '2019-06-22 16:29:42'),
	(24, 33, 'Women\'s Caftan', '100.00000', 1, '500', '2019-06-22 16:29:42', '2019-06-22 16:29:42'),
	(25, 35, 'Women\'s Holiday Suits', '700.00000', 1, '700', '2019-06-22 16:49:40', '2019-06-22 16:49:40'),
	(26, 36, 'Women\'s Holiday Suits', '700.00000', 2, '1575', '2019-06-22 16:55:16', '2019-06-22 16:55:16'),
	(27, 36, 'kids Dress', '25.00000', 1, '1575', '2019-06-22 16:55:16', '2019-06-22 16:55:16'),
	(28, 36, 'Men\'s Jacket', '150.00000', 1, '1575', '2019-06-22 16:55:16', '2019-06-22 16:55:16'),
	(29, 38, 'kids Dress', '521.00000', 1, '521', '2019-06-22 18:17:49', '2019-06-22 18:17:49'),
	(30, 39, 'Men\'s Blouse', '500.00000', 1, '500', '2019-06-22 18:20:06', '2019-06-22 18:20:06'),
	(31, 40, 'Women Long Sleeveless', '400.00000', 1, '400', '2019-06-23 01:45:27', '2019-06-23 01:45:27'),
	(32, 42, 'Women Long Sleeveless', '400.00000', 1, '400', '2019-06-23 01:50:37', '2019-06-23 01:50:37'),
	(33, 43, 'Women Long Sleeveless', '400.00000', 1, '400', '2019-06-23 01:51:38', '2019-06-23 01:51:38'),
	(34, 44, 'Men\'s Jacket', '150.00000', 1, '150', '2019-06-23 01:54:41', '2019-06-23 01:54:41'),
	(35, 45, 'Women Long Sleeveless', '400.00000', 1, '400', '2019-06-23 01:55:56', '2019-06-23 01:55:56'),
	(36, 46, 'Women\'s Holiday Suits', '700.00000', 1, '1375', '2019-06-23 01:56:37', '2019-06-23 01:56:37'),
	(37, 46, 'Men\'s Blouse', '500.00000', 1, '1375', '2019-06-23 01:56:37', '2019-06-23 01:56:37'),
	(38, 46, 'kids Dress', '25.00000', 1, '1375', '2019-06-23 01:56:37', '2019-06-23 01:56:37'),
	(39, 46, 'Men\'s Jacket', '150.00000', 1, '1375', '2019-06-23 01:56:37', '2019-06-23 01:56:37'),
	(40, 47, 'Men\'s Blouse', '500.00000', 1, '500', '2019-06-23 02:02:54', '2019-06-23 02:02:54'),
	(41, 48, 'Men\'s Jacket', '150.00000', 1, '150', '2019-06-23 02:07:10', '2019-06-23 02:07:10'),
	(42, 49, 'Women\'s Jeans', '600.00000', 3, '1800', '2019-06-23 02:08:02', '2019-06-23 02:08:02'),
	(43, 51, 'Women Long Sleeveless', '400.00000', 3, '1200', '2019-06-23 02:08:52', '2019-06-23 02:08:52'),
	(44, 53, 'Men\'s Blouse', '500.00000', 1, '500', '2019-06-23 02:27:32', '2019-06-23 02:27:32'),
	(45, 54, 'Women\'s Jeans', '600.00000', 1, '600', '2019-06-23 02:28:15', '2019-06-23 02:28:15'),
	(46, 55, 'Women Long Sleeveless', '400.00000', 1, '400', '2019-06-23 02:28:31', '2019-06-23 02:28:31'),
	(47, 56, 'Women Long Sleeveless', '400.00000', 1, '1000', '2019-06-23 02:29:21', '2019-06-23 02:29:21'),
	(48, 56, 'Women\'s Jeans', '600.00000', 1, '1000', '2019-06-23 02:29:21', '2019-06-23 02:29:21'),
	(49, 57, 'Women Long Sleeveless', '400.00000', 1, '400', '2019-06-23 02:29:36', '2019-06-23 02:29:36'),
	(50, 58, 'Women Long Sleeveless', '400.00000', 2, '1300', '2019-06-23 03:58:25', '2019-06-23 03:58:25'),
	(51, 58, 'Men\'s Blouse', '500.00000', 1, '1300', '2019-06-23 03:58:25', '2019-06-23 03:58:25'),
	(52, 59, 'kids Dress', '25.00000', 3, '1425', '2019-06-23 04:36:18', '2019-06-23 04:36:18'),
	(53, 59, 'kids Dress', '250.00000', 3, '1425', '2019-06-23 04:36:18', '2019-06-23 04:36:18'),
	(54, 59, 'Men\'s Shirt', '600.00000', 1, '1425', '2019-06-23 04:36:18', '2019-06-23 04:36:18'),
	(55, 60, 'Women\'s Jeans', '600.00000', 1, '600', '2019-06-23 11:44:28', '2019-06-23 11:44:28'),
	(56, 63, 'Women\'s Holiday Suits', '700.00000', 4, '3050', '2019-06-23 12:37:32', '2019-06-23 12:37:32'),
	(57, 63, 'kids Dress', '250.00000', 1, '3050', '2019-06-23 12:37:32', '2019-06-23 12:37:32'),
	(58, 64, 'kids Dress', '25.00000', 1, '25', '2019-06-23 13:05:55', '2019-06-23 13:05:55'),
	(59, 65, 'kids Dress', '25.00000', 1, '25', '2019-06-23 18:41:28', '2019-06-23 18:41:28'),
	(60, 66, 'Women\'s Holiday Suits', '700.00000', 1, '700', '2019-06-23 20:09:09', '2019-06-23 20:09:09'),
	(61, 67, 'Women\'s Jeans', '600.00000', 1, '600', '2019-06-23 20:10:12', '2019-06-23 20:10:12'),
	(62, 68, 'kids Dress', '250.00000', 1, '250', '2019-06-23 20:20:33', '2019-06-23 20:20:33'),
	(63, 69, 'kids Dress', '250.00000', 1, '250', '2019-06-23 21:07:16', '2019-06-23 21:07:16'),
	(64, 70, 'Men\'s Blouse', '500.00000', 1, '500', '2019-06-24 12:52:42', '2019-06-24 12:52:42'),
	(65, 71, 'Women\'s Caftan', '100.00000', 1, '100', '2019-06-24 12:53:03', '2019-06-24 12:53:03');
/*!40000 ALTER TABLE `order_products` ENABLE KEYS */;

-- Dumping structure for table sohaib_store.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(191) DEFAULT NULL,
  `title_ar` varchar(191) DEFAULT NULL,
  `link` varchar(191) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table sohaib_store.pages: ~2 rows (approximately)
DELETE FROM `pages`;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `title`, `title_ar`, `link`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'About Us', 'من نحن', 'about-us', '<div style="direction: ltr; ">Our mission is to deliver the most compelling shopping experience for our customers.</div><div style="direction: ltr;"><br></div><div style="direction: ltr;"><b>Discover</b></div><div style="direction: ltr;">SHOP.COM is a new kind of shopping comparison site that offers the most comprehensive shopping experience on the web. Our shopping experts have drawn on their industry experience and insider connections to bring you the best collection of the stores you can\'t live without, and the brands and products you love - all in one place.</div><div style="direction: ltr;"><br></div><div style="direction: ltr;"><b>Compare</b></div><div style="direction: ltr;">Search for the products you love from the best stores on the web and see them side by side. Decide which price, shipping method, and delivery schedule options work best for you.</div><div style="direction: ltr;"><br></div><div style="direction: ltr;"><b>Learn</b></div><div style="direction: ltr;">But we don\'t stop there. Unlike other shopping comparison sites, we offer you a variety of tools and expert advice to help you make informed buying decisions and to find the best product to suit your needs.</div><div style="direction: ltr;"><br></div><div style="direction: ltr;"><b>Share</b></div><div style="direction: ltr;">You don\'t have to take our word for it. Share your opinions through tools like product reviews and our Facebook page</div><div style="direction: ltr;"><br></div><div style="direction: ltr;"><b>Shop</b></div><div style="direction: ltr; ">And when you\'re ready to buy, we give you options. You can use your secure SHOP.COM account to make purchases across hundreds of OneCart® Trusted Merchant Stores, all backed by SHOP.COM\'s 100% satisfaction guarantee, or you can make your purchase directly from the web sites of one of hundreds of our Partner Stores.</div><div style="direction: ltr; "><br></div>', '2019-04-14 15:30:26', '2019-04-14 16:54:06'),
	(2, 'Contact Us', 'اتصل بنا', 'contact-us', '<p><b>Email : ishorrab@gmail.com</b></p><p><b><br></b></p><p><b>Email : mohamedsafya@gmail.com</b></p><p><b><br></b></p><p><b>Email : mahmoudjouda@gmail.com</b></p><p><br></p><p><b>Phone : +970592269027</b></p><p><b><br></b></p><p><b>Phone : +970599425978</b></p><p><b><br></b></p><p><b>Phone : +970592659598</b></p><p><b><br></b></p><p><b>Whatsapp: +970567455466</b></p><p><b><br></b></p><p><b>Whatsapp: +970566518848</b></p><p><b><br></b></p><p><b>Whatsapp: +970562515842</b></p><div><br></div>', '2019-04-14 16:36:39', '2019-06-23 04:54:23');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Dumping structure for table sohaib_store.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(191) DEFAULT NULL,
  `description` varchar(191) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `price` decimal(15,5) NOT NULL DEFAULT '0.00000',
  `featured` int(11) NOT NULL DEFAULT '0',
  `after_discount` decimal(15,5) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- Dumping data for table sohaib_store.products: ~12 rows (approximately)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `title`, `description`, `status`, `price`, `featured`, `after_discount`, `image`, `created_at`, `updated_at`) VALUES
	(5, 'Women Long Sleeveless', '<p><span style="color: rgb(51, 51, 51); font-family: "open sans", sans-serif;">For women long sleeveless dress sleeveless v-neck shape Vsnin weddings</span><br></p>', 1, 400.00000, 0, 300.00000, '1561280375.png', '2019-06-23 11:59:35', '2019-06-23 11:59:35'),
	(8, 'Men\'s Blouse', '<p><font color="#333333" face="open sans, sans-serif">1(Men\'s Blouse- Long-sleeved Collar with pockets, practical design (large size</font><br></p>', 1, 500.00000, 0, 200.00000, '1558263416.jpg', '2019-06-23 05:06:18', '2019-06-23 05:06:18'),
	(9, 'Women\'s Caftan', '<div class="short-desc" style="box-sizing: border-box; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: "open sans", sans-serif;"><p style="box-sizing: border-box; margin-r', 1, 100.00000, 0, 50.00000, '1558259912.png', '2019-06-23 04:16:39', '2019-06-23 04:16:39'),
	(10, 'Women\'s Holiday Suits', '<span style="color: rgb(51, 51, 51); font-family: "open sans", sans-serif;">Fast Fashion Women\'s Holiday Suits</span>', 1, 700.00000, 0, 150.00000, '1558264441.png', '2019-06-23 04:16:48', '2019-06-23 04:16:48'),
	(11, 'Men\'s Jacket', '<span style="color: rgb(51, 51, 51); font-family: "open sans", sans-serif;">(Men\'s Jacket - Long-sleeved Collar with pockets, practical design (large size</span>', 1, 150.00000, 1, 30.00000, '1558259554.png', '2019-06-23 04:42:46', '2019-06-23 04:42:46'),
	(12, 'Women\'s Jeans', '<span style="color: rgb(51, 51, 51); font-family: "open sans", sans-serif;">Women\'s jeans - with a high waist, decorated with holes, with a stylish practical design</span><br>', 1, 600.00000, 0, 200.00000, '1558264541.png', '2019-06-23 04:17:26', '2019-06-23 04:17:26'),
	(13, 'Jaket', '<p>Jaket2019 <span style="font-size: 1rem;">Jaket2019 </span><span style="font-size: 1rem;">Jaket2019</span><br></p>', 1, 250.00000, 0, 150.00000, '1558259162.png', '2019-05-19 12:46:03', '2019-05-19 12:46:03'),
	(14, 'Men\'s Shirt', '<p><font color="#333333" face="open sans, sans-serif">(Men\'s Shirt - Long-sleeved Collar with pockets, practical design (large size</font><br></p>', 1, 600.00000, 1, 200.00000, '1558263581.png', '2019-06-23 04:41:23', '2019-06-23 04:41:23'),
	(16, 'kids Dress', '<font color="#333333" face="open sans, sans-serif">kids Dress- Long-sleeved Collar with pockets, practical design </font><br>', 1, 250.00000, 0, 200.00000, '1558264936.jpg', '2019-06-23 04:42:04', '2019-06-23 04:42:04'),
	(17, 'kids Dress', '<p><span style="color: rgb(51, 51, 51); font-family: "open sans", sans-serif;">kids Dress</span><span style="color: rgb(51, 51, 51); font-family: "open sans", sans-serif;"', 1, 25.00000, 1, 21.00000, '1558264973.jfif', '2019-06-23 04:41:32', '2019-06-23 04:41:32'),
	(18, 'kids Dress', '<p><span style="color: rgb(51, 51, 51); font-family: &quot;open sans&quot;, sans-serif;">kids Dress</span><span style="color: rgb(51, 51, 51); font-family: &quot;open sans&quot;, sans-serif;"', 1, 521.00000, 0, 150.00000, '1558264959.jfif', '2019-05-19 14:22:39', '2019-05-19 14:22:39'),
	(19, 'kids Dress', '<p><span style="color: rgb(51, 51, 51); font-family: "open sans", sans-serif;">kids Dress</span><span style="color: rgb(51, 51, 51); font-family: "open sans", sans-serif;"', 1, 560.00000, 1, 500.00000, '1558264946.jpg', '2019-06-19 23:59:27', '2019-06-19 23:59:27');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table sohaib_store.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(191) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Comment` text,
  `Product_id` int(191) NOT NULL,
  `Rate` int(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table sohaib_store.reviews: ~2 rows (approximately)
DELETE FROM `reviews`;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` (`id`, `Name`, `Email`, `Comment`, `Product_id`, `Rate`) VALUES
	(1, 'mohamed ', 'asdfsd@sfsdf.sdf', 'asdfa sd asdas asd ', 4, 5),
	(2, 'ahmad', 'dfd@ghj.df', 'sdfs dfs dfs', 4, 3);
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;

-- Dumping structure for table sohaib_store.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `vsion` varchar(500) NOT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table sohaib_store.services: ~3 rows (approximately)
DELETE FROM `services`;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `name`, `vsion`, `icon`, `created_at`, `updated_at`) VALUES
	(2, 'SHOPPING', 'SHOPPING SHOPPING SHOPPING', 'icon-basket-loaded', '2019-05-18 14:59:06', '2019-05-26 14:07:31'),
	(3, 'ADDRESS', 'ADDRESS ADDRESS ADDRESS', 'fa fa-address-book-o', '2019-05-18 17:31:22', '2019-05-26 14:09:11'),
	(4, 'CAMERA', 'CAMERA CAMERA CAMERA CAMERA', 'fa fa-camera-retro fa-4x', '2019-05-20 00:28:53', '2019-05-26 14:06:57');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table sohaib_store.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(191) DEFAULT NULL,
  `facebook` varchar(191) NOT NULL,
  `twitter` varchar(191) NOT NULL,
  `instagram` varchar(191) NOT NULL,
  `linkedIn` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table sohaib_store.settings: ~0 rows (approximately)
DELETE FROM `settings`;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `title`, `facebook`, `twitter`, `instagram`, `linkedIn`, `created_at`, `updated_at`) VALUES
	(5, 'Shop World', 'https://www.facebook.com/profile.php?id=100006494829991', 'https://twitter.com/HmoodSafiya', 'https://www.instagram.com/hmood.safiya/', 'https://www.linkedin.com/in/mohammed-abu-safiya-31bb40176/', '2019-06-18 16:41:40', '2019-06-23 04:33:04');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Dumping structure for table sohaib_store.sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(191) NOT NULL,
  `description` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- Dumping data for table sohaib_store.sliders: ~3 rows (approximately)
DELETE FROM `sliders`;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
	(16, 'Free People What She Said Lace Tanga Thong', 'Free People What She Said Lace Tanga Thong Free People What She Said Lace Tanga Thong', '1556204212.jpg', '2019-04-25 17:51:59', '2019-04-25 17:59:36'),
	(17, 'For women long', 'For women long sleeveless dress sleeveless v-neck shape', '1556395708.jpg', '2019-04-27 22:59:27', '2019-04-27 23:08:28'),
	(18, 'Free People What She Said Lace Tanga Thong', 'Free People What She Said Lace Tanga ThongFree People What She Said Lace Tanga Thong', '1561287581.jpg', '2019-04-27 23:09:31', '2019-06-23 13:59:41');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Dumping structure for table sohaib_store.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sohaib_store.users: ~10 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `remember_token`, `is_admin`, `created_at`, `updated_at`) VALUES
	(1, 'mojamed jouda2', 'm.jouda1986@gmail.com', '123456', '$2y$10$cbU9RxalpmGmGtwRCXMqs.IfqXwDvWdPHCRSjWpItJLqnKgMPqJO2', NULL, 0, '2019-06-02 17:47:05', '2019-06-24 13:07:39'),
	(2, 'dds', 'ds@ffs.ssa', '1233333', '123456', 'ByNYsXrBemvQj0ZY4Gu41tzBJKMMRAgchyhmC800lMbDDQjKhrwAPBQ5RQGX', 0, '2019-06-10 21:21:17', '2019-06-23 13:21:58'),
	(3, 'sabha1', 'g56789@gmail.com22', '059942597911', '12345', 'nhfbUuUI76TDZTJ1CfWjbRVGALWhvY9hcu9RGuzbfBmiPHkpBferriF8MAf7', 0, '2019-06-15 11:38:07', '2019-06-15 15:28:54'),
	(4, 'MOHAMMED', 'mohammed0123@gmail.com', '0599425978', '$2y$10$Lq9kQKugUlqI2BmZLi2pMOr5VZSBWgOkx551/gUcZz8Q.O5Q4FnpO', 'rU5SKou54Ozo61BwAosOIBTQNSuRdT1pFaHhbwuhjIKaSt0RIc2vD3QeWwHf', 0, '2019-06-15 17:07:32', '2019-06-15 17:07:32'),
	(5, 'www', 'ds@ffs.ssw', '232323', '$2y$10$xaOREcIZtMgjay.ruuEk9.YqjZjSoGqTV4PCHiFJEUotosNuBJ9HC', 'hFa02py4W7ykGhpOefaVPJ0Vi1UCJQ8BkhZEkfdcjL0olzjlYH2pYYqy0lUA', 0, '2019-06-15 17:23:45', '2019-06-23 21:48:37'),
	(6, 'issa shsdd', 'www.aeesa.com@gmail.com', '55554477', '$2y$10$cxhvNK.K4cQYGM8aA266iuiruKsl4WEpcw1K0vkk/hcEOFe51XDTG', '7WbDvWTqhwfFRdG5ax6NBxiVqZKmOXghULivK9PYhbesA2NGqdkMr3u28q9p', 1, '2019-06-18 11:21:26', '2019-06-24 12:38:37'),
	(7, 'twertwerf', 'www.aeesa.comm@gmail.com', '345345345', '$2y$10$3b5IDsW1pmTTKc6H.vP9AehzjKo1r2GFbARHG02aYSLCY24XSace2', 'eyawaUTKDHEYrpKnBbbN9YPNH0QWVkFxKlznIbk2TU2jVy4SJwJ581ORNts5', 1, '2019-06-18 14:55:18', '2019-06-18 14:55:18'),
	(8, 'samer', 'samer@jm.a', '12345', '$2y$10$ryP9057xlkFIUXD1DeXSRevzdtLsEZoVZtN6aQcOVD8qwaK/RtPaq', 'NeTxKqKfR2BEyxHHqf3arfThtnkj0AV6ZOpKyRjQxwarUuruP1NjOMhViWHF', 0, '2019-06-22 12:57:41', '2019-06-22 12:57:41'),
	(9, 'mohammed', 'momo@mo.mo', '0599425978', '12345', 'tu4rFwC8x2J6tGAhFWwbIlnOQpRuyh0vLAsNKda4cAjFZ4S8Hf7XWcVzhqUH', 1, '2019-06-23 03:42:32', '2019-06-23 03:44:33'),
	(10, 'sabhaa', 'ds@ffs.ssaaa', '123123', '000000', 'sTNtbBLaJPa8jShEuW61q4OYIoCH9N68Oet6w0LTwKT5sog7sbtsjXYqKX80', 1, '2019-06-23 13:23:28', '2019-06-24 12:18:38');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
