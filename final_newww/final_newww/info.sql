-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2018-10-28 03:06:01
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
  `type` varchar(50) NOT NULL,
  `noofcake` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `cakes`
--

INSERT INTO `cakes` (`type`,`noofcake`,`name`, `price`, `description`) VALUES
('cakebox',1,'Totoro boxcake', 50, 'chestnut puree'),
('cakebox',2,'Charlie boxcake', 50, 'chocolate and cookie'),
('cakebox',3,'Minions boxcake', 50, 'banana puree'),
('cakebox',4,'Doraemon boxcake', 50, 'blueberry and blueberry sauce'),
('cakeroll',5,'Cherry cakeroll', 70, 'cherry and cream'),
('cakeroll',6,'Strawberry cakeroll', 70, 'strawberry and cream'),
('cakeroll',7,'Grape cakeroll', 70, 'Grape gels and cream'),
('cakeroll',8,'Rainbow cakeroll', 80, 'original cream'),
('cakeroll',9,'Blueberry cakeroll', 70, 'blueberry and cream'),
('cakeroll',10,'Matcha cakeroll', 70, 'matcha and cream'),
('cakeroll',11,'Orange cakeroll', 70, 'orange and cream'),
('cakeroll',12,'Gudetama cakeroll', 70, 'chocolate and salted egg yolk cream'),
('cakeroll',13,'Mushroom cakeroll', 70, 'matcha cake and chocolate cream'),
('cakeroll',14,'Chocolate cakeroll', 70, 'chocolate cake and cream with orange'),
('cakeroll',15,'Honeydew melon cakeroll', 70, 'honeydew melon cake and cream'),
('cakeroll',16,'Fruit cakeroll', 90, 'fruits and cream'),
('cakeroll',17,'Strawberry cakeroll', 90, 'strawberry and cream'),
('cakeroll',18,'Fig cakeroll', 90, 'Fig and cream'),
('cartoon',19,'Sloth cake', 115, 'coffee without cream'),
('cartoon',20,'Winnie cake', 115, 'honey without cream'),
('cartoon',21,'Eeyore cake', 115, 'purple potato without cream'),
('cartoon',22,'Animal cake', 115, 'milk without cream'),
('cartoon',23,'Totoro cake', 115, 'milk without cream'),
('cartoon',24,'Mickey cake', 115, 'red velvet without cream'),
('cartoon',25,'Rabbit cake', 115, 'original cake without cream'),
('cartoon',26,'moster cake', 115, 'chocolate without cream'),
('cartoon',27,'rainbow cake', 130, 'original cake'),
('cartoon',28,'Winnie cake', 130, 'banana and honey cake'),
('cartoon',29,'Unicorn cake', 130, 'rose sauce cake'),
('cartoon',30,'Miko cat cake', 130, 'blueberry sauce cake'),
('cartoon',31,'Student cat cake', 130, 'blueberry and strawberry sauce cake'),
('cartoon',32,'Fox cake', 130, 'orange sauce cake'),
('cartoon',33,'Pink cat cake', 130, 'strawberry sauce cake'),
('creamcake',34,'Colorful cream cake', 180, 'colorful cream'),
('creamcake',35,'Mango cream cake', 180, 'mango cream'),
('creamcake',36,'Watermelon cream cake', 180, 'watermelon cream'),
('creamcake',37,'Sea Salt cream cake', 180, 'Sea Salt cream'),
('creamcake',38,'Red velvet cream cake', 180, 'red velvet cream'),
('creamcake',39,'Melon cream cake', 180, 'watermelon and honeydew cream'),
('creamcake',40,'Colorful cream cake', 180, 'colorful cream'),
('creamcake',41,'Strawberry milk cream cake', 200, 'strawberry cream and strawberry with milk cake'),
('creamcake',42,'Strawberry matcha cream cake', 200, 'strawberry cream and strawberry with matcha cake'),
('creamcake',43,'Purple potato cream cake', 220, 'Purple potato cream'),
('creamcake',44,'Apple cream cake', 220, 'apple cream'),
('creamcake',45,'Sea Salt cream cake', 220, 'Sea Salt cream'),
('cupcake',46,'Blueberry cupcake', 240, '12 cupcakes with blueberry cream'),
('cupcake',47,'Orange cupcake', 240, '12 cupcakes with orange cream'),
('cupcake',48,'Purple potato cupcake', 240, '12 cupcakes with Purple potato cream'),
('cupcake',49,'Rose cupcake', 240, '12 cupcakes with Rose cream'),
('cupcake',50,'Sweet potato cupcake', 240, '12 cupcakes with sweet potato cake'),
('cupcake',51,'Chocolate cupcake', 240, '12 cupcakes with chocolate cream'),
('doughnut',52,'Chocolate and strawberry doughnut', 120, '6 doughnutS with chocolate and strawberry sirop'),
('doughnut',53,'Chocolate and Sea Salt doughnut', 120, '6 doughnutS with chocolate and Sea Salt sirop'),
('doughnut',54,'Orange and strawberry doughnut', 120, '6 doughnutS with orange and strawberry sirop'),
('flowercake',55,'flowercake', 280, 'blue and pink cream flowers'),
('flowercake',56,'flowercake', 280, 'white and pink cream flowers'),
('flowercake',57,'flowercake', 280, 'blue cream flowers'),
('flowercake',58,'flowercake', 280, 'red and green cream flowers'),
('flowercake',59,'flowercake', 280, 'purple,yellow and pink cream flowers'),
('flowercake',60,'flowercake', 280, 'purple,yellow and blue cream flowers'),
('flowercake',61,'flowercake', 280, 'blue,yellow and pink cream flowers'),
('flowercake',62,'flowercake', 280, 'colorful cream flowers'),
('flowercake',63,'flowercake', 280, 'red and white cream flowers'),
('fondantcake',64,'linebrown fondantcake', 350, 'blueberry cakes with Rocher chocolate'),
('fondantcake',65,'berry fondantcake', 350, 'strawberry cakes with strawberry and raspberry'),
('fondantcake',66,'princess fondantcake', 350, 'rose sauce cakes'),
('fondantcake',67,'chocolate fondantcake', 350, 'chocolate cakes with oreo and chocolate'),
('fondantcake',68,'Bamboo fondantcake', 350, 'Bamboo cakes');
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
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`orderid`, `cake`, `quantity`, `customername`, `price`) VALUES
(123456, 'Carrot cake', 2, 'fz', 120);

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
