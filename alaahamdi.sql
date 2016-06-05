-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 يونيو 2016 الساعة 08:32
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alaahamdi`
--

-- --------------------------------------------------------

--
-- بنية الجدول `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `gallery_owner` text COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gallery_img` text COLLATE utf8_unicode_ci NOT NULL,
  `gallery_desc` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- إرجاع أو استيراد بيانات الجدول `galleries`
--

INSERT INTO `galleries` (`gallery_owner`, `id`, `created_at`, `updated_at`, `gallery_img`, `gallery_desc`) VALUES
('', 1, NULL, NULL, '5.jpg', 'بوكية ورد مليان شيكولاتة '),
('', 2, NULL, NULL, '6.jpg', 'خطوبة ألاء ومصطفى '),
('', 3, NULL, NULL, '7.jpg', 'I Love Zizo'),
('', 4, NULL, NULL, '8.jpg', 'سبوع عمر'),
('', 5, NULL, NULL, '9.jpg', 'سبوع عمر '),
('', 6, NULL, NULL, '10.jpg', 'بوكية ورد'),
('', 7, NULL, NULL, '13.jpg\r\n', 'عيد ميلاد مها'),
('', 8, NULL, NULL, '12.jpg', 'عيد ميلاد مها'),
('', 9, NULL, NULL, '14.jpg', 'سبوع نوسه '),
('', 10, NULL, NULL, '15.jpg', 'السبوع'),
('', 26, NULL, NULL, '1.jpg', ':D ايه ده '),
('', 27, NULL, NULL, '2.jpg', 'Dado $ Rody'),
('', 28, NULL, NULL, '3.jpg', 'مصطفى ومنه '),
('', 29, NULL, NULL, '4.jpg', 'سبوع أنس'),
('', 30, NULL, NULL, '16.jpg', 'عيد ميلاد'),
('', 31, NULL, NULL, '17.jpg', 'سبوع لارين'),
('', 32, NULL, NULL, '18.jpg', 'فستان ورقى '),
('Maha Mahmoud', 33, NULL, NULL, 'sH0S0P_13327594_1729647200641008_8594772881573009574_n.jpg', 'خطوب مصطفى والاء');

-- --------------------------------------------------------

--
-- بنية الجدول `main_settings`
--

CREATE TABLE IF NOT EXISTS `main_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `setting_name` text COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- إرجاع أو استيراد بيانات الجدول `main_settings`
--

INSERT INTO `main_settings` (`id`, `created_at`, `updated_at`, `setting_name`, `value`, `slug`, `type`) VALUES
(1, NULL, NULL, 'site_name', 'Alaa Hamdi', 'اسم الموقع', 1),
(2, NULL, NULL, 'site_title', 'ALAA HAMDI', 'عنوان الموقع', 1),
(3, NULL, NULL, 'site_desc', 'وصف الموقع', 'وصف الموقع', 1),
(4, NULL, NULL, 'email', 'Alaahamdim1416@gmail.com\n', 'ايميل الموقع', 1),
(5, NULL, NULL, 'phone', '02011430464856+', 'تليفون الموقع', 0),
(6, NULL, NULL, 'address', 'صلاح -سالم - بنى سويف', 'العنوان', 1),
(7, NULL, NULL, 'facebook', 'https://www.facebook.com/profile.php?id=100005271491654', 'فيس بوك', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_16_163925_create_mainSetting_table', 2),
('2016_05_18_225554_create_gallery_table', 3),
('2016_05_30_174044_create_order_table', 4);

-- --------------------------------------------------------

--
-- بنية الجدول `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `client_phone` text COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `order_name` text COLLATE utf8_unicode_ci NOT NULL,
  `order_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `order_img` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- إرجاع أو استيراد بيانات الجدول `orders`
--

INSERT INTO `orders` (`client_phone`, `id`, `created_at`, `updated_at`, `order_name`, `order_desc`, `order_img`) VALUES
('', 1, NULL, NULL, 'Mostafa', 'مررررا', 'B2m2Py_a5.PNG'),
('', 2, NULL, NULL, 'Alaa', 'عاوز بوكية مليان شكولاته ', 'pSnlWy_a5.PNG'),
('01156304853', 3, NULL, NULL, 'Mostafa Mohamed Ahmed', 'عاوز فريم عباره عن لوحه وسطها قلب مكتوب عليها الاء و مصطفى ', 'UbX3nG_13327594_1729647200641008_8594772881573009574_n.jpg'),
('012445454454', 4, NULL, NULL, 'Hadeer', 'fnf f ', '7w2WUg_13327594_1729647200641008_8594772881573009574_n.jpg'),
('01156304853', 5, NULL, NULL, 'Alaa', 'lhjbb', 'mfJlAS_phpdeveloper.png'),
('01156304853', 6, NULL, NULL, 'Alaa', 'gyvfv', 'mmayaZ_alaa.PNG'),
('01156304853', 7, '2016-06-02 16:03:24', '2016-06-02 16:03:24', 'Mostafa', 'محتاج فريم لشبشب طفل ', 'hBxY7Z_11863289_1006918819340883_8868658722901301183_n.jpg');

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alaa Hamdi', 'alaa@gmail.com', '$2y$10$MvfbG00lqE0F7xZKuYhl4ex8lt1moHfuVeGOyIFXoPN07jzxNKlpK', '7z8bbnOFBLz5f1xsJubFu4yk83JwHBzt1cxmqBoqFEHVNGc1ROTYBxpzC6Qf', '2016-05-10 21:30:11', '2016-05-10 21:34:47'),
(2, 'admin', 'sasa_16_1_1994@yahoo.com', '$2y$10$9eYe54x4n2FjDu5nMFQ68./qhWQkszJWJKy4NXDWvksLAEKcVbvkO', 'mHO7yHedU4UuxldJZieC0WQFdoIHp1jzd9LdYOH27fPcjoLemNqt999iMmdp', '2016-05-10 21:33:37', '2016-06-02 22:18:43'),
(3, 'Hadeer', 'hadeer@gmail.com', '$2y$10$1dfw9kvTsE2Vx9gqPuxAveGH59pFsN/4fzSh57kLaSBWbGsCxWobe', NULL, '2016-06-02 22:17:49', '2016-06-02 22:17:49');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
