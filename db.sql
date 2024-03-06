-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Mar 04, 2024 at 11:05 PM
-- Server version: 8.0.33-0ubuntu0.20.04.2
-- PHP Version: 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ducks`
--

CREATE TABLE `ducks` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `favorite_foods` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bio` text COLLATE utf8mb4_general_ci NOT NULL,
  `img_src` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'https://i.etsystatic.com/34711428/r/il/9c16cb/4756246624/il_fullxfull.4756246624_88x2.jpg',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ducks`
--

INSERT INTO `ducks` (`id`, `name`, `favorite_foods`, `bio`, `img_src`, `created_at`) VALUES
(1, 'Jude', 'crepes with whipped cream, tomatoes, lemons', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.shutterstock.com/image-vector/vector-cute-duck-cartoon-illustration-600nw-1937171563.jpg', '2024-02-05 22:33:17'),
(2, 'Ludwig', 'doritos, grass, peanutbutter', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://culverduck.com/wp-content/uploads/2020/11/duck-animate-1-500x500.png', '2024-02-05 22:33:17'),
(3, 'George', 'Grapes, Peanuts', 'grgwgrwgw', 'https://i.etsystatic.com/34711428/r/il/9c16cb/4756246624/il_fullxfull.4756246624_88x2.jpg', '2024-02-12 22:55:30'),
(4, 'Better George', 'pizzaaaa', 'I love pizza and talking to people.', 'https://i.etsystatic.com/34711428/r/il/9c16cb/4756246624/il_fullxfull.4756246624_88x2.jpg', '2024-02-12 22:56:18'),
(5, 'Ashley Grant', 'Grapes, Peanuts', 'cnksdlcnldskcnsdklcndsk', 'https://i.etsystatic.com/34711428/r/il/9c16cb/4756246624/il_fullxfull.4756246624_88x2.jpg', '2024-02-12 22:58:33'),
(6, 'James', 'food, food, and food', 'I am a ducky and love things', 'https://i.etsystatic.com/34711428/r/il/9c16cb/4756246624/il_fullxfull.4756246624_88x2.jpg', '2024-02-12 23:01:35'),
(7, 'Greg', 'frosting', 'sdmcnjkldsnvskld', 'https://i.etsystatic.com/34711428/r/il/9c16cb/4756246624/il_fullxfull.4756246624_88x2.jpg', '2024-02-12 23:20:28'),
(8, 'Lamo', 'tough stuff', 'nmrefkvnmeoskvmnerokv', 'https://i.etsystatic.com/34711428/r/il/9c16cb/4756246624/il_fullxfull.4756246624_88x2.jpg', '2024-02-12 23:33:54'),
(9, 'Terry', 'lasagna', 'crazy crazy crazy', 'https://i.etsystatic.com/34711428/r/il/9c16cb/4756246624/il_fullxfull.4756246624_88x2.jpg', '2024-02-21 22:01:20'),
(10, 'Ashley Grant', 'Grapes, Peanuts', 'crayyyyyyyyz', 'https://i.etsystatic.com/34711428/r/il/9c16cb/4756246624/il_fullxfull.4756246624_88x2.jpg', '2024-02-21 22:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE `example` (
  `id` int NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`id`, `first_name`, `created_at`) VALUES
(1, 'Brian', '2024-01-29 22:12:53'),
(2, 'duolingo', '2024-01-29 22:22:41'),
(3, 'Peach', '2024-01-29 22:22:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ducks`
--
ALTER TABLE `ducks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ducks`
--
ALTER TABLE `ducks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `example`
--
ALTER TABLE `example`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
