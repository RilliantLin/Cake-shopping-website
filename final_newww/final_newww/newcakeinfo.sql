-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2018-10-29 02:23:53
-- 服务器版本： 10.1.36-MariaDB
-- PHP 版本： 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `info`
--

-- --------------------------------------------------------

--
-- 表的结构 `cakes`
--

CREATE TABLE `cakes` (
  `name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `cakes`
--

INSERT INTO `cakes` (`name`, `price`, `description`) VALUES
('Carrot cake', 110, 'sweet and good'),
('Cheesecake', 120, 'full of cheese'),
('Chocolate Cake', 100, 'full of Chocolate'),
('Coffee Cake', 115, 'smells like a cup of coffee'),
('IceCream Cake', 180, 'cool'),
('Strawberry Cake', 90, 'strawberry!'),
('Tiramisu', 130, 'yummy');

-- --------------------------------------------------------

--
-- 表的结构 `customers`
--

CREATE TABLE `customers` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telephone Number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `customers`
--

INSERT INTO `customers` (`Username`, `Password`, `Name`, `Email`, `Telephone Number`) VALUES
('fz', 'A123456', 'feizhai', '123we@gmail.com', 123456);

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `orderid` int(20) NOT NULL,
  `cake` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `customername` varchar(30) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转储表的索引
--

--
-- 表的索引 `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
