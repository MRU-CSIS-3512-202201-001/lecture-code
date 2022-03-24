-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 02:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cheese_db`
--

DROP DATABASE IF EXISTS `cheese_db`;
CREATE DATABASE IF NOT EXISTS `cheese_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cheese_db`;

-- --------------------------------------------------------

--
-- Table structure for table `cheese`
--

DROP TABLE IF EXISTS `cheese`;
CREATE TABLE `cheese` (
  `id` int(11) NOT NULL,
  `classification_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cheese`
--

INSERT INTO `cheese` (`id`, `classification_id`, `name`) VALUES
(1, 1, 'cottage'),
(2, 1, 'ricotta'),
(3, 2, 'Munster'),
(4, 2, 'Stracchino'),
(5, 3, 'Jarlsberg'),
(6, 3, 'Parmesan'),
(7, 4, 'Stilton'),
(8, 4, 'Gorgonzola'),
(9, 5, 'Crottin de Chavignol');

-- --------------------------------------------------------

--
-- Table structure for table `classification`
--

DROP TABLE IF EXISTS `classification`;
CREATE TABLE `classification` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classification`
--

INSERT INTO `classification` (`id`, `name`, `code`) VALUES
(1, 'fresh', 'F'),
(2, 'soft', 'S'),
(3, 'firm', 'R'),
(4, 'blue', 'B'),
(5, 'goat', 'G');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

DROP TABLE IF EXISTS `description`;
CREATE TABLE `description` (
  `id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `cheese_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`id`, `description`, `cheese_id`) VALUES
(1, 'Cottage cheese is a simple fresh cheese curd product with a mild flavor and a creamy, non-homogenous, soupy texture. It is also known as curds and whey. It is made from cow\'s milk by draining the cheese, as opposed to pressing it to make cheese curd—retaining some of the whey and keeping the curds loose. An important step in the manufacturing process distinguishing cottage cheese from other fresh cheeses is the adding of a \"dressing\" to the curd grains, usually cream, which is largely responsible for the taste of the product. Cottage cheese is not aged.', 1),
(2, 'Ricotta is an Italian whey cheese made from sheep, cow, goat, or Italian water buffalo milk whey left over from the production of other cheeses. Like other whey cheeses, it is made by coagulating the proteins that remain after the casein has been used to make cheese, notably albumin and globulin.', 2),
(3, 'Munster is a strong-smelling soft cheese with a subtle taste, made mainly from milk first produced in the Vosges, between Alsace-Lorraine and Franche-Comte regions in France. The name \"Munster\" is derived from the Alsace town of Munster, where, among Vosgian abbeys and monasteries, the cheese was conserved and matured in monks\' cellars.', 3),
(4, 'Stracchino, also known as crescenza, is a type of Italian cow\'s-milk cheese, typical of Lombardy, Piedmont, Veneto, and Liguria. It is eaten very young, has no rind and a very soft, creamy texture and normally a mild and delicate flavour. It is normally square in shape.', 4),
(5, 'Jarlsberg is a mild cheese made from cow\'s-milk, with large, regular eyes, originating from Jarlsberg, Norway. It is produced in Norway, as well as in Ireland and the US state of Ohio, licensed from Norwegian dairy producers. It is classified as a Swiss-type cheese.', 5),
(6, 'Parmigiano Reggiano is an Italian hard, granular cheese produced from cow\'s milk and aged at least 12 months. It is named after the producing areas, the provinces of Reggio Emilia, Parma, the part of Bologna west of the Reno, and Modena (all in Emilia-Romagna); and the part of Mantua (Lombardy) on the right/south bank of the Po. Parmigiano is the Italian adjective for Parma and Reggiano that for Reggio Emilia.', 6),
(7, 'Stilton is an English cheese, produced in two varieties: Blue, which has Penicillium roqueforti added to generate a characteristic smell and taste, and White, which has not. Both have been granted the status of a protected designation of origin (PDO) by the European Commission, requiring that only such cheese produced in the three counties of Derbyshire, Leicestershire and Nottinghamshire may be called Stilton. The cheese takes its name from the village of Stilton, now in Cambridgeshire, where it has long been sold.', 7),
(8, 'Gorgonzola is a veined blue cheese, originally from Italy, made from unskimmed cow\'s milk. It can be buttery or firm, crumbly and quite salty, with a \"bite\" from its blue veining.', 8),
(9, 'Crottin de Chavignol is a goat cheese produced in the Loire Valley. This cheese is the claim to fame for the village of Chavignol, France, which has only two hundred inhabitants.', 9);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `id` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cheese_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `cheese_id`) VALUES
('001', 1),
('002', 2),
('003', 3),
('004', 4),
('005', 5),
('006', 6),
('007', 7),
('008', 8),
('009', 9);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `cheese_id` int(11) NOT NULL,
  `stock_level` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `store_id`, `cheese_id`, `stock_level`) VALUES
(1, 1, 1, 0),
(2, 1, 2, 3),
(3, 1, 3, 2),
(4, 1, 4, 5),
(5, 1, 5, 1),
(6, 1, 6, 5),
(7, 1, 7, 3),
(8, 1, 8, 8),
(9, 1, 9, 6),
(10, 2, 1, 6),
(11, 2, 2, 7),
(12, 2, 3, 5),
(13, 2, 4, 0),
(14, 2, 5, 1),
(15, 2, 6, 10),
(16, 2, 7, 7),
(17, 2, 8, 2),
(18, 2, 9, 4),
(19, 3, 1, 0),
(20, 3, 2, 0),
(21, 3, 3, 33),
(22, 3, 4, 7),
(23, 3, 5, 1),
(24, 3, 6, 0),
(25, 3, 7, 0),
(26, 3, 8, 8),
(27, 3, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `digest` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `digest`) VALUES
('', ''),
('jpratt', '$2y$10$05.mtXB6j6K6X/dgocxzqu3clLuIuGhx27mAswyYHLHjyvfHdp/Oq');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

DROP TABLE IF EXISTS `quote`;
CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `quote` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `quote`) VALUES
(1, 'You can’t make everyone happy. You’re not cheese.'),
(2, 'I just don’t see the point of not eating cheese. I mean, if God didn’t want us to eat cheese, would he have let man invent it?'),
(3, 'Give me a good sharp knife and a good sharp cheese and I’m a happy man.'),
(4, 'Life is great. Cheese makes it better.'),
(5, 'And I’m lactose intolerant but if you told me I couldn’t have cheese ever again, I would slap you in your face.');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

DROP TABLE IF EXISTS `store`;
CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`) VALUES
(1, 'Calgary'),
(2, 'Edmonton'),
(3, 'Banff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cheese`
--
ALTER TABLE `cheese`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classification`
--
ALTER TABLE `classification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cheese`
--
ALTER TABLE `cheese`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `classification`
--
ALTER TABLE `classification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
