-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-11-08 11:43:21
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `daily money`
--

-- --------------------------------------------------------

--
-- 資料表結構 `daily money`
--

CREATE TABLE `daily money` (
  `id` int(11) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `item` varchar(11) COLLATE utf8_unicode_520_ci NOT NULL,
  `category` varchar(11) COLLATE utf8_unicode_520_ci NOT NULL,
  `money` int(11) NOT NULL,
  `payment method` varchar(11) COLLATE utf8_unicode_520_ci NOT NULL,
  `invoice number` varchar(11) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `place` varchar(11) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `balance` int(11) NOT NULL,
  `note` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `daily money`
--
ALTER TABLE `daily money`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `daily money`
--
ALTER TABLE `daily money`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
