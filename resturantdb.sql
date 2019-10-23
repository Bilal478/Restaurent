-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 06:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resturantdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `com_id` int(11) NOT NULL,
  `com_text` varchar(500) NOT NULL,
  `com_date` varchar(20) NOT NULL,
  `com_update_date` varchar(20) NOT NULL,
  `dis_id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_id`, `com_text`, `com_date`, `com_update_date`, `dis_id`, `res_id`, `usr_id`) VALUES
(3, 'Great Nice', '1-9-2019', '1-9-2019', 16, 37, 81),
(10, 'What', '2-9-2019', '2-9-2019', 16, 37, 81),
(11, 'Love this', '2-9-2019', '2-9-2019', 18, 38, 81),
(12, 'Great flavor', '2-9-2019', '2-9-2019', 15, 37, 81),
(13, 'Love this ', '2-9-2019', '2-9-2019', 17, 37, 81),
(14, 'Lovely', '2-9-2019', '2-9-2019', 16, 37, 81),
(15, 'Lovely', '2-9-2019', '2-9-2019', 16, 37, 81),
(16, 'testy\r\n', '2-9-2019', '2-9-2019', 19, 37, 81),
(17, 'Mosteli disoppinted', '2-9-2019', '2-9-2019', 20, 39, 81),
(18, 'Lovely', '2-9-2019', '2-9-2019', 21, 39, 81),
(19, 'Great', '2-9-2019', '2-9-2019', 18, 38, 81),
(20, 'preety', '2-9-2019', '2-9-2019', 18, 38, 81),
(21, 'Nice', '2-9-2019', '2-9-2019', 15, 37, 0),
(22, 'love this', '5-9-2019', '5-9-2019', 19, 37, 127),
(23, 'sss', '5-9-2019', '5-9-2019', 17, 37, 127),
(24, 'Not good', '19-9-2019', '19-9-2019', 16, 37, 127),
(25, 'Spicy', '30-9-2019', '30-9-2019', 16, 37, 145),
(26, 'bad taste dont test', '30-9-2019', '30-9-2019', 32, 37, 127),
(27, 'Test', '12-10-2019', '12-10-2019', 16, 37, 127),
(28, 'like', '12-10-2019', '12-10-2019', 19, 37, 127),
(29, 'great', '12-10-2019', '12-10-2019', 19, 37, 127),
(30, 'gg', '12-10-2019', '12-10-2019', 19, 37, 127),
(31, 'best', '12-10-2019', '12-10-2019', 19, 0, 127),
(32, 'grr', '12-10-2019', '12-10-2019', 19, 37, 127),
(33, '', '21-10-2019', '21-10-2019', 17, 37, 127);

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `dis_id` int(10) NOT NULL,
  `dis_name` varchar(20) NOT NULL,
  `dis_price` int(10) NOT NULL,
  `dis_image` varchar(300) NOT NULL,
  `dis_adding_date` varchar(20) NOT NULL,
  `dis_update_date` varchar(20) NOT NULL,
  `usr_id` int(10) NOT NULL,
  `res_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dis_id`, `dis_name`, `dis_price`, `dis_image`, `dis_adding_date`, `dis_update_date`, `usr_id`, `res_id`) VALUES
(15, 'Spicy Burger', 450, 'burger.jpg', '31-8-2019', '31-8-2019', 81, 37),
(16, 'Combo Burger', 540, 'camobo.jpg', '31-8-2019', '31-8-2019', 81, 37),
(17, 'Grill Burger', 580, 'grill.jpg', '31-8-2019', '31-8-2019', 81, 37),
(18, 'Grill Burger', 680, 'grill.jpg', '31-8-2019', '31-8-2019', 81, 38),
(19, 'Salad', 350, 'salad.jpg', '31-8-2019', '31-8-2019', 81, 37),
(20, 'Combo Burger', 540, 'camobo.jpg', '31-8-2019', '31-8-2019', 81, 39),
(21, 'Salad', 400, 'salad.jpg', '31-8-2019', '31-8-2019', 81, 39),
(22, 'Test Dish', 342, '', '3-9-2019', '3-9-2019', 75, 37),
(24, 'Zinger Shawarma', 200, '', '6-9-2019', '6-9-2019', 130, 37),
(26, 'Spicy Burger', 500, '4.png', '6-9-2019', '6-9-2019', 130, 37),
(27, 'Spicy Burger', 500, '', '6-9-2019', '6-9-2019', 130, 37),
(28, 'Spicy Burger', 780, '', '6-9-2019', '6-9-2019', 130, 37),
(29, 'Spicy Burger', 150, '', '6-9-2019', '6-9-2019', 130, 37),
(30, 'Sonfy', 250, '', '6-9-2019', '6-9-2019', 130, 37),
(32, 'Fajita', 250, '', '6-9-2019', '6-9-2019', 127, 37),
(33, 'Fries', 150, '', '6-9-2019', '6-9-2019', 127, 37),
(34, 'aa', 450, '', '6-9-2019', '6-9-2019', 127, 37);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `res_id` int(10) NOT NULL,
  `res_name` varchar(20) NOT NULL,
  `res_address` varchar(20) NOT NULL,
  `res_register_date` varchar(20) NOT NULL,
  `res_update_date` varchar(20) NOT NULL,
  `res_image` varchar(200) NOT NULL,
  `usr_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`res_id`, `res_name`, `res_address`, `res_register_date`, `res_update_date`, `res_image`, `usr_id`) VALUES
(37, 'Epic', 'Johar Town', '31-8-2019', '31-8-2019', 'epic.jpg', 81),
(38, 'Macdonald ', 'Wapda town', '31-8-2019', '31-8-2019', 'macdo.jpg', 81),
(39, 'KFC', 'DHA', '31-8-2019', '31-8-2019', 'kfc.jpg', 81),
(40, 'EpicBite', 'Airline Society', '3-9-2019', '3-9-2019', '', 75),
(41, 'Macdonald JT', 'Johar Town', '30-9-2019', '30-9-2019', 'clg.jpg', 127);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `usr_id` int(10) NOT NULL,
  `usr_first_name` varchar(20) NOT NULL,
  `usr_last_name` varchar(20) NOT NULL,
  `usr_email` varchar(30) NOT NULL,
  `usr_pasword` varchar(266) NOT NULL,
  `usr_address` varchar(100) NOT NULL,
  `usr_register_date` varchar(30) NOT NULL,
  `usr_update_date` varchar(30) NOT NULL,
  `usr_role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usr_id`, `usr_first_name`, `usr_last_name`, `usr_email`, `usr_pasword`, `usr_address`, `usr_register_date`, `usr_update_date`, `usr_role`) VALUES
(81, 'Bilal', 'Rasool', '478bilal@gmail.com', '7878', 'Lahore', '21-8-2019', '30-9-2019', 'admin'),
(127, 'Mubashar', 'Rasool', '478bilal@1gmail.com', '$2y$10$FFLWBIfwWH8avkGJ.dYXfuI3vdBFjSEKvTmxpR/AhYkUSMx9RO3YO', 'Lahore', '5-9-2019', '5-9-2019', 'admin'),
(129, 'Usman', 'Ali', '478bilal@2gmail.com', '$2y$10$XSDXABsuktVJMgnsU6Yxb.BBP3RxSaWFP283AWf6cPnGPdtzCxbzm', 'Lahore', '5-9-2019', '5-9-2019', 'user'),
(130, 'Raza', 'Rasool', '478bilal@3gmail.com', '$2y$10$fFuKjQD0EhOYGzfyTebL6.QHImerMG3B2RZQazRL7QI5g6CVZUxx2', 'Lahore', '5-9-2019', '5-9-2019', 'admin'),
(131, 'aaaa', 'bb', '478bilal@5gmail.com', '$2y$10$DIU3mAMPa1tO3a8m476sjeYC9O3J43/4KrAOO/Cfgrid.vN9HDS9W', 'FSD', '24-9-2019', '30-9-2019', 'user'),
(133, 'aaa', 'bbb', '478bilal@7gmail.com', '$2y$10$J0b/13jkdrvqEUv0D7ukteBPklLh30xCw0XQTbb1z3QyCYLR/0yty', 'Toba', '24-9-2019', '24-9-2019', 'user'),
(134, 'Alii', 'Bba', '478bilal@9gmail.com', '$2y$10$DGGMdRwMcl4hruv6Wdr6yuMx3xqq8L3X1JJ8rdAkxu7MaABpqCBG6', 'Lahore', '24-9-2019', '30-9-2019', 'user'),
(135, 'Azeem', 'Ahmad', '478bilal9@gmail.com', '$2y$10$ZQVnGOJSdqiRDPY.8zOg5exFQbZrHfAx3VsCHvKsvk9hK/IphpH.O', 'Lahore', '24-9-2019', '30-9-2019', 'user'),
(136, 'm', 'm', '478bilal0@gmail.com', '$2y$10$uIzTs4PPx4Xpuvx4bUXd..OvTtsgoitcauNdBuDJKV7KaHpw2y.ia', 'Lahore', '24-9-2019', '24-9-2019', 'user'),
(137, 'ww', 'ww', '478bilalw@gmail.com', '$2y$10$vd4pRdbPctdLee9d4CVYMe85Jln2caA0hMo8GxGfmpJaoDwmAaVjC', 'Lahore', '25-9-2019', '25-9-2019', 'user'),
(138, 'aa', 'aa', '478bilala@gmail.com', '$2y$10$9sZFfKrso3N8ON9Jy6zIn.oFJy5GOmfZWhULtKzoTlTFxaxh0NLgy', 'RYK', '25-9-2019', '25-9-2019', 'user'),
(139, 'zz', 'zz', '478bilalz@gmail.com', '$2y$10$dcjt8QVTn1Jd5DgCWdinCuNVsbZm.wONvsm1080iUrY2PMAY2hVOC', 'FSD', '25-9-2019', '25-9-2019', 'user'),
(140, 'M', 'Ali', '478bilal@22gmail.com', '$2y$10$bnbEItJOMi4wlU7tWjoDJOuDk.y0AwfXIULY.VXU6YU3/Lhi7cNEi', 'Lahore', '30-9-2019', '30-9-2019', 'user'),
(141, 'a', 'a', '478bilal33@gmail.com', '$2y$10$rKAqI1NqIGC1N77gHebpsesOlaX.4KTpbf/tgvw2VEMaGA.j3osRm', 'RYK', '30-9-2019', '30-9-2019', 'user'),
(142, 'c', 'c', '478bilal@44gmail.com', '$2y$10$y1I.wagXqyPUbqv62URdEezlSJg8Zr33eWuB/L3QxRATFut2phWi.', 'FSD', '30-9-2019', '30-9-2019', 'user'),
(143, 'd', 'd', '478bilal@55gmail.com', '$2y$10$GYj1uuqtkespgo0nMm.oTeK6ezlQltEmaeLkBaBevP41lh8.oN2/m', 'Lahore', '30-9-2019', '30-9-2019', 'user'),
(144, 'a', 'a', '478bilal@66gmail.com', '$2y$10$ji0bDzpS1a1w.t8LYcMUkuXFBgEIlfWHcUeWr1xoSaRTcKAhd7enq', 'LHR', '30-9-2019', '30-9-2019', 'user'),
(145, 'aa', 'a', '478bilal@77gmail.com', '$2y$10$mS/LfX6MR11qP4QLVsCUdes8Hr.wZUm8BxfCpz2mcNp/SnEdfzCTW', 'Lahore', '30-9-2019', '30-9-2019', 'user'),
(146, 'q', 'q', '478bilal@88gmail.com', '$2y$10$6swTKEgTDdm0Brwmahj0oeaW/YDBuev1BZZMgpHCPSE0vX/MH/CCO', 'Lahore', '30-9-2019', '30-9-2019', 'admin'),
(147, 'a', 'a', '478bilal@99gmail.com', '$2y$10$0ssuKmk5PTq22iAwzyjNTeP0yOuXmLC9n5fgNyjAgEz1hv3xxwmgS', 'LHR', '30-9-2019', '30-9-2019', 'user'),
(148, 'z', 'z', '478bilal@13gmail.com', '$2y$10$t9oMu.0eKOoRWilwVUA6BeOwjcMFDf5YpB4Zs22tqBEEgzkQ.dlP2', 'RYK', '30-9-2019', '30-9-2019', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `dis_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `res_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
