-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2014 at 08:24 AM
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
DROP TABLE IF EXISTS `attractions`;
CREATE TABLE IF NOT EXISTS `attractions` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `image2` varchar(1000) NOT NULL,
  `image3` varchar(1000) NOT NULL,
  `where` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `category` text NOT NULL,
  `timeChanged` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`id`, `name`, `image`, `image2`, `image3`, `where`, `description`, `category`, `timeChanged`) VALUES
(1, 'Hiking', 'mount-fuji-sunset2.jpg', 'MountainTop.jpg', 'PondnMountain.jpg', '/select/select/1', '    Hike the world famous mountain displayed in famous paintings and characterizes the very image of Japan, Mount Fuji. When you hike this mountain you will not have a trophy to add to your life accomplishments.<br/> Mount Fuji gives a great view from its top and the Hike up is gorgeous. Close to this landmark is another nice hike that leads you to an part of japan that has colors you would find in a canvas of a extravagant painting except better. <br/> There are tails of a treasure hidden in a valley near Mount Fuji, one hidden in a cave whose entrance has been shut by a large stone. The story''s don''t consistently specify the treasure is but most have speculated that it would be gold, some say that that it holds ancient scrolls, either way no one has found it, that we know of. but whos to stop you from looking.\r\n', 'play', 2147483647),
(2, 'Culture', 'Culture.jpg', 'OldBuilding.jpg', 'RedStripeBuilding.jpg', '/select/select/2', 'Experience the Japanese festivals in full, find the hidden treasures buried in hundreds of years of ancient culture, experience the mix between the old and new brought about in the culture of today!', 'play', 2147483647),
(3, 'City Life', 'SeaShore.jpg', 'NightStreet.jpg', 'BoatsnFlowers.jpg', '/select/select/3', 'Get a glimpse of a futuristic city here in the modern city of Tokyo. There is always something going on when you are here and you will always find something to do while you are here. Walking down the street you can just look around and be entertained. ', 'play', 2147483647),
(4, 'Hotel Hoshimi', 'CitySkyline.jpg', 'Birds.jpg', 'NightBridge1.jpg', '/select/select/4', 'If you want the most comfortable night you can possibly have in Japan then you have to stay here for your nights. With a incredible view of the city and the most comfortable bed, for the small price of $70 a day for a one bed and bathroom.', 'sleep', 2147483647),
(5, 'Dosodashi', 'Sushi1.jpg', 'Sushi2.jpg', 'Sushi3.jpg', '/select/select/5', 'The best sushi place ever! You can not miss it. Dosadashi has the most incredible traditional sushi, every piece is a masterpiece made to be remembered for the rest of your life. When you look back at your trip to Japan Dosadashi will probably be one of the highlights of your trip.  ', 'eat', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('c5ca1412d4433bc21950cd599a70b772', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414376938, ''),
('7d6769e5a62323fd65eb62589c19293c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414376939, ''),
('093d4da952a8bf780f300e7bfd79519e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414376963, ''),
('4c2c7a44c08ed75ce8288da978bdcb94', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414376964, ''),
('deb8617f6aacd25f583a35566d6b1a4c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414377058, ''),
('1226fe7af6d8572bc7658591f8b9280d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414377059, ''),
('73093d9465cc6fbb557d36b8d846366d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414377191, ''),
('99dcc68d213eb903e0ecddcf3e93a07b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414377312, ''),
('3d967dc13cf67ae4aa3f71c0c39ff586', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414377401, ''),
('bddcc37f951b9e70ab64e0cf20e74a14', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414377431, ''),
('476896e1f81a9a46136baa05fc83abcb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414378349, ''),
('69c8bbfa02e4e67004a90fdbd862e4ca', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414378354, ''),
('ea98cd4f45ad68e0e68c12916fb1ec40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414379016, ''),
('f19900826f2ebf90e8a325b1dfef972c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414379177, ''),
('72cb17bc41e042fb92ae83280bd06d29', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414379178, ''),
('a6a07e49e7ceaf7e68940db52f2987b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414379201, ''),
('0571c2b305e7ef8732f5e2d87796c70b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414379204, ''),
('a71591ead9d68867453876c3b12ec4f5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414379250, ''),
('94cb5af9c481c7fca1f902b5ad8dca44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414376936, ''),
('ba82a866f1450900fcbaff01c05b37a7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414375502, ''),
('2b899e8a53a1a7c74c5ac7aa81d3808f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414375822, ''),
('78cef4b612f648edee868e49d9a94272', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414375823, ''),
('89ac373e8ff8c67072328c8e0ecfc5fa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414375894, ''),
('4ad84f714f269ae8b24c4e57b894a5e0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414376635, ''),
('0ed2c8506e17c41c817484fea69bcc7e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414376673, ''),
('cdee246a63ce766069e536e49dda67e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414376720, ''),
('dafef80103c64bde5b80ad1e3403aa12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414376800, ''),
('364012bd6b3971e200eaf74c86c7f864', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414376874, ''),
('794ff92096b5575f046306c5979c0f8c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414376918, ''),
('7c2b3440b4ae63aaaf757a315b0f5fcf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414382729, ''),
('f5420859a3bc14055acfc1498b61c0cc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414382753, ''),
('b71b9b54c5c3a4adba359ece8c1a35c2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414382805, ''),
('648ac6f314d6f965fd90007add280a74', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414383007, ''),
('68cf0f9eb689424e968235bdcfbc23b3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414383070, ''),
('96091098ffc653f72e47d770c243bdb5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414383322, ''),
('8725f983e2236b4e5508808388d7f263', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414770030, ''),
('6f5dad8bb9911af981e0f314932175b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414770030, ''),
('a473eba1ed2ecf68ff70eb5285c5b3d0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414770033, ''),
('dda95b2731eeaa6db4d48681e8e3662b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414770036, ''),
('06790fc987807567dc35dbb7a6e7b0f3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414770052, ''),
('7afeaa64f90ef79a80fb351170a92181', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414888909, ''),
('02723d4e0dfc1ffdb59a66fd318416a4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414888912, ''),
('3bf476a51c9c4913d5892b6eb0e176d5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414888914, ''),
('6615911d35921a56b3179955fd94dd51', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414888916, ''),
('e42ac8b6a693ce4230731220d405f435', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381894, ''),
('0143d5e345eb5981603a500d04f3eeda', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381958, ''),
('048d620d1e07570c9efeaa5f8d2ba988', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381973, ''),
('aaf4912247631410049b67aee098274a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414382700, ''),
('3fda7aa8e3f8fb9c2ac7a524ca1e14fe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381869, ''),
('a5b40aa1ae4d5f190960655813e32674', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381497, ''),
('a1b8425c17daa9446bec4d36338b04a8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381584, ''),
('2680912e3aa4ad2c5c74dbbf264958c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381585, ''),
('1e6f97c2d1901c5d4886b548f80a1a64', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381585, ''),
('31ab6c2704104dbc39e48a3a857e46f8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381586, ''),
('fcc023034687ddd5b0e57b594d6142d7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381608, ''),
('174fa09a7ce2c90d8d39b6f313d60655', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381609, ''),
('2e76d8022c87e26a35a86e282cd18ff6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381660, ''),
('f831a1232656f133f6de2ae6f0bc1c79', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381661, ''),
('5a0114bde0540c300574d6d6d5019fa5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381767, ''),
('7fd4e93551453b532bdd957d6e0aadad', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381866, ''),
('01e46c2f73a175b5988695253247bc1c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381447, ''),
('246cf06658608f88a6895fafaf19bca5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381495, ''),
('dcc9043b3add645bdef4410d6785006d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381351, ''),
('48acee326ef0994a3bd864e0cce9afdb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414379515, ''),
('933889d9127da743e83e1058b29cf230', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414379542, ''),
('a9244c5506fc6856d94e403101ae90b0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414379582, ''),
('e4af9b5282d05cb086c9fb2a68b870fe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414379595, ''),
('0b0e7afd805b51dc564468403890ec8b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414379597, ''),
('5ee79da9e6178411ff05d4f7596df37f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414380203, ''),
('8b92e0c0c4ed4bac785b4c2e1eb547d4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381185, ''),
('10a6362ef3057558592a943499c48455', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381316, ''),
('47202743253b280bf032caba9dbbc26f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414381334, ''),
('347fcd546648c4473f8015f05998f6e1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414379425, ''),
('39206173262c84e244baf2583f2f1150', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414379364, ''),
('11b17f187482a9e5ba5ea3c989b10634', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1414379254, '');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` varchar(3) NOT NULL,
  `surname` varchar(80) DEFAULT NULL,
  `firstname` varchar(80) DEFAULT NULL,
  `phone` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `surname`, `firstname`, `phone`, `email`) VALUES
('MM', 'Mouse', 'Mickey', '555-1234', 'mickey@disney.com'),
('DD', 'Duck', 'Donald', '555-1444', 'donald@disney.com'),
('HRH', 'Highness', 'Her Royal', '604-555-9999', 'hrh@buckinghampalace.gov.uk');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--
DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `code` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `category` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`code`, `name`, `description`, `price`, `picture`, `category`) VALUES
(1, 'Cheese', '																																																																																																																																																								Leave this raw milk, beefy and sweet cheese out for an hour before serving and pair with pear jam.\r\n			 ', '5.00', '1.png', 's'),
(2, 'Turkey', 'Roasted, succulent, stuffed, lovingly sliced turkey breast', '5.95', '2.png', '0'),
(6, 'Donut', 'Disgustingly sweet, topped with artery clogging chocolate and then sprinkled with Pixie dust', '1.25', '6.png', 's'),
(10, 'Bubbly', '1964 Moet Charmon, made from grapes crushed by elves with clean feet, perfectly chilled.', '14.50', '10.png', 'd'),
(11, 'Ice Cream', 'Combination of decadent chocolate topped with luscious strawberry, churned by gifted virgins using only cream from the Tajima strain of wagyu cattle', '3.75', '11.png', 's'),
(8, 'Hot Dog', 'Pork trimmings mixed with powdered preservatives, flavourings, red colouring and drenched in water before being squeezed into plastic tubes. Topped with onions, bacon, chili or cheese - no extra charge.', '6.90', '8.png', 'm'),
(25, 'Burger', 'Half-pound of beef, topped with bacon and served with your choice of a slice of American cheese, red onion, sliced tomato, and Heart Attack Grill''s own unique special sauce.', '9.99', 'burger.png', 'm'),
(21, 'Coffee', 'A delicious cup of the nectar of life, saviour of students, morning kick-starter; made with freshly grounds that you don''t want to know where they came from!', '2.95', 'coffee.png', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--
DROP TABLE IF EXISTS `orderitems`;
CREATE TABLE IF NOT EXISTS `orderitems` (
  `order` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `num` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(1) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`num`, `date`, `status`, `total`) VALUES
(1, '2014-10-13 03:56:27', 'a', '0.00'),
(2, '2014-10-13 04:20:26', 'a', '0.00'),
(3, '2014-10-23 22:51:26', 'a', '0.00'),
(4, '2014-10-31 16:37:24', 'a', '0.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
 ADD PRIMARY KEY (`order`,`item`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`num`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
