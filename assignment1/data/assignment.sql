-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2014 at 12:05 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `comp4711`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `attractions` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` VARCHAR NOT NULL,
  `image2` VARCHAR,
  `image3` VARCHAR,
  `where` VARCHAR NOT NULL,
  `description` mediumtext NOT NULL,
  `category` text NOT NULL,
  `lastDate` VARCHAR
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`id`, `name`, `image`, `image2`, `image3`, `where`, `description`, `category`) VALUES
(1, 'Hiking', 'mount-fuji-sunset2.jpg', 'MountainTop.jpg', 'PondnMountain.jpg', '/select/select/1', 'Hike the world famous mountain.', 'play'),
(2, 'Culture', 'Culture.jpg', 'OldBuilding.jpg', 'RedStripeBuilding.jpg', '/select/select/2', 'Experience the Japenese festivals in full, find the hidden treasures buried in hundreds of years of ancient culture, experience the mix between the old and new brought about in the culture of today!', 'play'),
(3, 'City Life', 'SeaShore.jpg', 'NightStreet.jpg', 'BoatsnFlowers.jpg', '/select/select/3', 'Get a glimpse of a futuristic city here in the modern city of tokyo', 'play'),
(4, 'Hotel Hoshimi', 'CitySkyline.jpg', 'Birds.jpg', 'NightBridge1.jpg', '/select/select/4', 'If you want to most comfortable night you can possibly have in Japan then you have to stay here for your nights. ', 'sleep'),
(5, 'Dosodashi', 'Sushi1.jpg', 'Sushi2.jpg', 'Sushi3.jpg', '/select/select/5', 'The best sushi place ever! You can not miss it, good prices and increbile traditional sushi', 'eat');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
