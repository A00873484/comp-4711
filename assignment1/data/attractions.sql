-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2014 at 06:53 AM
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
-- Table structure for table `attractions`
--

CREATE TABLE IF NOT EXISTS `attractions` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `image2` varchar(1000) NOT NULL,
  `image3` varchar(1000) NOT NULL,
  `where` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`id`, `name`, `image`, `image2`, `image3`, `where`, `description`, `category`) VALUES
(1, 'Hiking', 'mount-fuji-sunset2.jpg', 'MountainTop.jpg', 'PondnMountain.jpg', '/select/select/1', '    Hike the world famous mountain displayed in famous paintings and characterizes the very image of Japan, Mount Fuji. When you hike this mountain you will not have a trophy to add to your life accomplishments.<br/> Mount Fuji gives a great view from its top and the Hike up is gorgeous. Close to this landmark is another nice hike that leads you to an part of japan that has colors you would find in a canvas of a extravagant painting except better. <br/> There are tails of a treasure hidden in a valley near Mount Fuji, one hidden in a cave whose entrance has been shut by a large stone. The story''s don''t consistently specify the treasure is but most have speculated that it would be gold, some say that that it holds ancient scrolls, either way no one has found it, that we know of. but whos to stop you from looking.\r\n', 'play'),
(2, 'Culture', 'Culture.jpg', 'OldBuilding.jpg', 'RedStripeBuilding.jpg', '/select/select/2', 'Experience the Japanese festivals in full, find the hidden treasures buried in hundreds of years of ancient culture, experience the mix between the old and new brought about in the culture of today!', 'play'),
(3, 'City Life', 'SeaShore.jpg', 'NightStreet.jpg', 'BoatsnFlowers.jpg', '/select/select/3', 'Get a glimpse of a futuristic city here in the modern city of Tokyo. There is always something going on when you are here and you will always find something to do while you are here. Walking down the street you can just look around and be entertained. ', 'play'),
(4, 'Hotel Hoshimi', 'CitySkyline.jpg', 'Birds.jpg', 'NightBridge1.jpg', '/select/select/4', 'If you want the most comfortable night you can possibly have in Japan then you have to stay here for your nights. With a incredible view of the city and the most comfortable bed, for the small price of $70 a day for a one bed and bathroom.', 'sleep'),
(5, 'Dosodashi', 'Sushi1.jpg', 'Sushi2.jpg', 'Sushi3.jpg', '/select/select/5', 'The best sushi place ever! You can not miss it. Dosadashi has the most incredible traditional sushi, every piece is a masterpiece made to be remembered for the rest of your life. When you look back at your trip to Japan Dosadashi will probably be one of the highlights of your trip.  ', 'eat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
