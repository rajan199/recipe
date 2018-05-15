-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2018 at 06:50 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `racipe_database`
--
CREATE DATABASE IF NOT EXISTS `racipe_database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `racipe_database`;

-- --------------------------------------------------------

--
-- Table structure for table `comment_tbl`
--

CREATE TABLE IF NOT EXISTS `comment_tbl` (
  `comment_id` int(4) NOT NULL AUTO_INCREMENT,
  `comment` varchar(100) NOT NULL,
  `racipe_id` int(4) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `comment_tbl`
--

INSERT INTO `comment_tbl` (`comment_id`, `comment`, `racipe_id`, `email_id`) VALUES
(3, 'nice', 4, 'ranarajan49@gmail.com'),
(4, 'very nice', 4, 'ranarajan49@gmail.com'),
(5, 'done', 4, 'ranarajan49@gmail.com'),
(6, 'good taste', 2, 'ranarajan49@gmail.com'),
(7, 'jordar', 2, 'umang@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `favourite_tbl`
--

CREATE TABLE IF NOT EXISTS `favourite_tbl` (
  `favourite_id` int(4) NOT NULL AUTO_INCREMENT,
  `racipe_id` int(4) NOT NULL,
  `racipe_name` varchar(50) NOT NULL,
  `racipe_price` int(5) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  PRIMARY KEY (`favourite_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `favourite_tbl`
--

INSERT INTO `favourite_tbl` (`favourite_id`, `racipe_id`, `racipe_name`, `racipe_price`, `email_id`) VALUES
(2, 2, 'Sev puri', 30, 'ranarajan49@gmail.com'),
(3, 4, 'kkkk', 20, 'umang@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE IF NOT EXISTS `feedback_tbl` (
  `feedback_id` int(4) NOT NULL AUTO_INCREMENT,
  `feedback` varchar(300) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`feedback_id`, `feedback`, `email_id`) VALUES
(1, 'website is good for the recipes.', 'ranarajan49@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE IF NOT EXISTS `order_tbl` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `order_date` varchar(10) NOT NULL,
  `quantity` int(4) NOT NULL,
  `racipe_id` int(5) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `racipe_price` int(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  `total_price` int(4) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`order_id`, `order_date`, `quantity`, `racipe_id`, `email_id`, `racipe_price`, `status`, `total_price`) VALUES
(1, '27/02/18', 2, 2, 'ranarajan49@gmail.com', 30, 'buy', 60),
(5, '27/02/18', 1, 2, 'ranarajan49@gmail.com', 30, 'cart', 30),
(6, '28/02/18', 2, 4, 'umang@gmail.com', 20, 'buy', 40);

-- --------------------------------------------------------

--
-- Table structure for table `question_tbl`
--

CREATE TABLE IF NOT EXISTS `question_tbl` (
  `question_id` int(4) NOT NULL AUTO_INCREMENT,
  `question` varchar(300) NOT NULL,
  `question_status` varchar(20) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `question_tbl`
--

INSERT INTO `question_tbl` (`question_id`, `question`, `question_status`, `answer`, `email_id`) VALUES
(1, 'How do i get the dishes of given recipe?', 'accept', 'all type of dishes', 'ranarajan49@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `racipe_tbl`
--

CREATE TABLE IF NOT EXISTS `racipe_tbl` (
  `racipe_id` int(5) NOT NULL AUTO_INCREMENT,
  `racipe_name` varchar(20) NOT NULL,
  `racipe_img` varchar(300) NOT NULL,
  `racipe_ingredient` varchar(400) NOT NULL,
  `method` varchar(1000) NOT NULL,
  `racipe_price` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  PRIMARY KEY (`racipe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `racipe_tbl`
--

INSERT INTO `racipe_tbl` (`racipe_id`, `racipe_name`, `racipe_img`, `racipe_ingredient`, `method`, `racipe_price`, `status`, `email_id`) VALUES
(1, 'Bhaji pav', 'racipe.jpg', 'etc etc etc etc', '', '70', 'available', 'ranarajan49@gmail.com'),
(2, 'Sev puri', 'racipe.jpg', 'lsldklasdksladasldkasldasdaslsjdlasdasldas', '', '30', 'available', 'ranarajan49@gmail.com'),
(4, 'kkkk', '../images/wl (1).jpg', 'lllllll', 'ssdjk', '20', 'available', 'kkk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `email_id` varchar(50) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `area` varchar(30) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `ship_address` varchar(300) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`email_id`, `user_name`, `password`, `address`, `area`, `zipcode`, `mobile_no`, `gender`, `ship_address`, `type`) VALUES
('admin@gmail.com', 'admin', 'admin', 'ranip', 'Kankaria', 123456, 1234567890, 'M', 'kankaria', 'admin'),
('kkk@gmail.com', 'asd', 'qqqqq', 'qqqqq', 'wqqw', 12, 12, 'm', 'sad', 'admin'),
('raj@gmail.com', 'raj', '123456', 'sadsdas', 'Kankaria', 213123, 1231231231, 'M', 'NULL', 'admin'),
('ranarajan49@gmail.com', 'rajan', 'f6565efd42846497a538b4d08a84bca8', 'maninagar', 'Kankaria', 312929, 2147483647, 'M', 'lsldkas  ', 'user'),
('umang@gmail.com', 'umanag', '827ccb0eea8a706c4c34a16891f84e7b', 'jdkasjdaskj', 'Kankaria', 823494, 2147483647, 'M', 'jdkasjdaskj ', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
