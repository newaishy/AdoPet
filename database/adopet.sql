-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 13, 2021 at 12:42 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adopet`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopt`
--

DROP TABLE IF EXISTS `adopt`;
CREATE TABLE IF NOT EXISTS `adopt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adopt`
--

INSERT INTO `adopt` (`id`, `category_id`, `name`, `description`, `photo`) VALUES
(1, 1, 'Coco', 'Bulldog', 'Bulldog-standing-in-the-grass.jpg'),
(2, 1, 'Lolo', 'Baladi 3Yrs', 'baladi.jpg'),
(3, 1, 'zozo', 'Egyption Husky 1Yrs', 'Egyption_Husky.jpg'),
(4, 1, 'Oscar', 'English Bulldog', 'English Bulldog.jpg'),
(5, 1, 'Max', 'French_bulldog', 'French_bulldog.jpg'),
(6, 1, 'Molly', 'German', 'German.png'),
(7, 1, 'Teddy', 'spikey-225x300', 'spikey-225x300.jpg'),
(8, 1, 'Ruby', 'Seibrian Husky ', 'Seibrian Husky .jpg'),
(9, 1, 'Bella', 'Great dane', 'Great dane.jpg'),
(10, 1, 'Bailey', 'Griffon', 'Griffon.jpg'),
(11, 1, 'Rosie', 'Fbaladi', 'Fbaladi.jpg'),
(12, 2, 'Lily', 'Lily', '554322.jpg'),
(13, 2, 'Kitty', 'Bsh Mix Kittens ', 'Bsh Mix Kittens .jpg'),
(14, 2, 'Luna', 'british shorthair ', 'british shorthair 2.png'),
(15, 2, 'Nala', 'Egyption short hair', 'Egyption short hair.jpg'),
(16, 2, 'Romeo', 'Scottiish Fold', 'Scottiish Fold.jpg'),
(17, 2, 'Cleo', 'Egytion Mau Kittens', 'Egytion Mau Kittens.jpg'),
(18, 2, 'Shadow', 'Persian 2', 'Persian 2.jpg'),
(20, 2, 'Hunter', 'British Shorthair', 'British Shorthair.jpg'),
(21, 2, 'Kitty', 'Persian 3', 'Persian 3.jpg'),
(22, 2, 'Kevin', 'Scottish fold ', 'Scottish fold 2.jpg'),
(23, 2, 'Teddy', 'Persian', 'Persian.jpg'),
(24, 4, 'Bubbles', 'Angelfish', 'Angelfish.jpg'),
(25, 4, 'Bubba', 'Gold Severum Cichlid', 'Gold Severum Cichlid.jpg'),
(27, 4, 'Jack', 'Blonde Delta Guppy', 'Blonde Delta Guppy.jpg'),
(28, 4, 'Jewel', 'Platinum Male Betta Fish', 'Platinum Male Betta Fish.jpg'),
(29, 4, 'Finley', 'blue mustard male', 'blue mustard male.jpg'),
(30, 4, 'Ace', 'Red Clawed Crab', 'Red Clawed Crab.jpg'),
(31, 4, 'Blue', 'Comet Goldfish', 'Comet Goldfish.jpg'),
(32, 4, 'Aqua', 'Ryukin Goldfish', 'Ryukin Goldfish.jpg'),
(33, 4, 'Moby', 'Convict Cichlid', 'Convict Cichlid.jpg'),
(34, 4, 'Diva', 'Starfire Red Longfin Barb', 'Starfire Red Longfin Barb.jpg'),
(35, 3, 'Ruby', 'blue and gold macaw parrots', 'blue and gold macaw parrots.jpg'),
(36, 3, 'Roo', 'Male & Female Strawberry ', 'Male & Female Strawberry .jpg'),
(37, 3, 'Azure', 'BLUE MACAW', 'BLUE MACAW.jpg'),
(38, 3, 'Oliver', 'Male Black Checked Crested Zebra Finch', 'Male Black Checked Crested Zebra Finch.jpg'),
(39, 3, 'Rainbow', 'Double Yellow Headed Amazon', 'Double Yellow Headed Amazon.jpg'),
(40, 3, 'Zazu ', 'Male Canary', 'Male Canary.jpg'),
(41, 3, 'canary', 'Female canary', 'Female canary.jpg'),
(42, 3, 'Iago ', 'rose violet', 'rose violet.jpg'),
(44, 3, 'Isis', 'Macaws and Talking African grey parrots', 'Macaws and Talking African grey parrots.jpg'),
(45, 3, 'Boobah', 'Talking Cockatoo', 'Talking Cockatoo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(2, 1, 1, 1),
(4, 9, 2, 1),
(6, 9, 6, 1),
(7, 9, 8, 1),
(9, 9, 28, 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(1, 'Dogs', 'dogs'),
(2, 'Cats', 'cats'),
(3, 'Birds', 'birds'),
(4, 'Fish', 'fish');

-- --------------------------------------------------------

--
-- Table structure for table `mating`
--

DROP TABLE IF EXISTS `mating`;
CREATE TABLE IF NOT EXISTS `mating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_view` date DEFAULT NULL,
  `counter` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `photo`, `date_view`, `counter`) VALUES
(2, 1, 'Collar   150cm ', 'Collar for large dogs. 150cm', 200, 'Collar   150cm _1610484354.png', '2021-01-12', 21),
(4, 1, 'NOBBY Stainless steel bowl, anti slip 0,45 l 19,0 cm', '<p>Safe and easy to clean</p>', 55, 'NOBBY Stainless steel bowl, anti slip 0,45 l 19,0 cmLE55.png', '2021-01-12', 1),
(5, 3, 'Automatic Bird Feeder', '<p>Dont worry about feeding your bird again.</p>\r\n\r\n<p>Fill it up only once a week</p>\r\n\r\n', 80, 'Automatic Bird FeederLE80.jpg', '2018-07-09', 3),
(6, 1, 'Royal Canin Mini Adult 2kg', '<p>Royal Canin food for small dogs.</p>\r\n', 320, 'Royal Canin Mini Adult 2kgLE320.png', '2021-01-12', 7),
(7, 3, 'Bird Feeding Dish', '<p>Dish for bird food. Easy to clean</p>\r\n\r\n', 40, 'Bird Feeding DishLE40.jpg', '0000-00-00', 0),
(8, 1, 'Royal Canin Mini Puppy 2kg', '<p>Royal Canin food for small puppies.</p>\r\n', 335, 'Royal Canin Mini Puppy 2kgLE335.png', '2021-01-12', 3),
(9, 2, 'collar7.5cm', '<p>Safety collar for cats.</p>', 95, 'collar7.5cmLE95.png', '2021-01-12', 3),
(10, 2, 'Feed and water bowl', '<p>Feed and water bowl for cats. Easy to clean.</p>\r\n', 120, 'Feed and water bowlLE120.png', '2021-01-12', 2),
(12, 2, 'Pets Republic Dry Shampoo Powder 500 g PinkSugar', '<p>Dry shampoo for cats.</p>\r\n', 100, 'Pets Republic Dry Shampoo Powder 500 g PinkSugar.png', '2018-05-12', 3),
(13, 2, 'Revolution for Cats (1 Dose)', '<p>Protect your cats from fleas and ticks.</p>\r\n', 150, 'Revolution for Cats (1 Dose)LE150.png', '2018-05-12', 1),
(14, 2, 'RoyalCaninBabycat400g_large', '<p> Royal Canin food for kittens </p>', 100, 'RoyalCaninBabycat400g_largeLE100.png', '2018-05-10', 13),
(15, 2, 'RoyalCaninFit2Kg_large', '<p>Royal Canin for large active cats.</p>\r\n', 365, 'RoyalCaninFit2Kg_largeLE365.png', '2018-07-09', 1),
(16, 2, 'slicker bruchLE', '<p>Slicker brush for cats.</p>\r\n', 80, 'slicker bruchLE80.png', '2018-05-10', 2),
(17, 3, 'Bird Perch(Keeps Naild trimmed)', '<p>Secure bird porch.</p>\r\n', 70, 'Bird Perch(Keeps Naild trimmed)LE70.jpg', '2018-05-12', 1),
(18, 3, 'Bird water dispenser', '<p>Automatic water dispenser for your bird.</p>\r\n', 34, 'Bird water dispenserLE34.jpg', '2018-05-12', 2),
(19, 3, 'Large bird cage', '<p>Cage for large birds.</p>\r\n', 135, 'Large bird cageLE135.jpg', '2018-05-10', 1),
(20, 3, 'TRILL BALKUM BIRD FOOD 600G ', '<p>Quality food for your pet.</p>\r\n', 28, 'TRILL BALKUM BIRD FOOD 600G LE28.jpg', '2018-05-12', 1),
(27, 1, 'Sergeant Spot On for 15-30 kg (1 Dose)', '<p>Protect your dog from fleas and ticks</p>', 140, 'Sergeant Spot On for 15-30 kg (1 Dose)LE140.png', '2021-01-12', 1),
(28, 4, '3 Gallon Aquarium', '<p>Large aquarium for your fish.</p>\r\n', 450, '3 Gallon AquariumLE450.jpg', '2021-01-12', 3),
(29, 4, 'Aquarium power filter', '<p>Filter for medium and large aquariums</p>\r\n\r\n', 345, 'Aquarium power filterLE345.jpg', '2021-01-12', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL DEFAULT '0',
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$0SHFfoWzz8WZpdu9Qw//E.tWamILbiNCX7bqhy3od0gvK5.kSJ8N2', 1, 'Ahmed', 'Ahmeden', '', '', 'thanos1.jpg', '2018-05-01'),
(9, 'user@user.com', '$2y$10$Oongyx.Rv0Y/vbHGOxywl.qf18bXFiZOcEaI4ZpRRLzFNGKAhObSC', 0, 'Mohamed', 'Mohamed', 'EL-Wahat Road, Giza, Egypt', '01002735719', 'male2.png', '2020-05-09'),
(12, 'hanan@gmail.com', '$2y$10$ozW4c8r313YiBsf7HD7m6egZwpvoE983IHfZsPRxrO1hWXfPRpxHO', 0, 'Hanan', 'Ahmed', 'Talbiya', '7542214500', 'female3.jpg', '2018-07-09'),
(13, 'mahmoud.hassanein360@gmail.com', '$2y$10$W6nHrrD7639fAQ2HkjuCTe6RoodjtuLLv/XAvuBN9ExrfvQIeS9Zu', 0, 'Mahmoud', 'Umran', '', '', '', '2021-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `vets`
--

DROP TABLE IF EXISTS `vets`;
CREATE TABLE IF NOT EXISTS `vets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vets`
--

INSERT INTO `vets` (`id`, `name`, `description`, `price`, `photo`) VALUES
(1, 'Dr. Dolittle', 'Can talk to animals', 10, 'dolittle.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
