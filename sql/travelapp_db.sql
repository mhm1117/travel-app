-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 12:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelapp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `est_cost` float(4,2) DEFAULT NULL,
  `created_by` varchar(30) NOT NULL,
  `users_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `timeline` varchar(30) DEFAULT NULL,
  `locations` varchar(255) DEFAULT NULL,
  `people` varchar(255) DEFAULT NULL,
  `est_budget` int(11) DEFAULT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `name`, `description`, `timeline`, `locations`, `people`, `est_budget`, `img`) VALUES
(1, 'PNW Train Trip', 'We go on Amtrak train rides from the Bay Area through Oregon and Washington, all the way to Seattle. Then we either fly or take a train to Vancouver! Then we fly home from there!', 'Summer 2025', 'Oregon, Washington, Vancouver', 'Mattie, Angie', 0, 'https://hips.hearstapps.com/hmg-prod/images/mountain-reflection-in-bench-lake-mt-rainier-royalty-free-image-1587577282.jpg?crop=1xw:0.84415xh;center,top&resize=1200:*'),
(7, 'SD Road Trip', 'Mom and I drive down to SD to visit Grandma and fam but stop for a night in the CA mountains!', 'Sept 2024', 'CA Mountains, San Diego', 'Mattie, Sandy', 0, 'https://www.trolleytours.com/wp-content/uploads/2018/10/old-town-trolley-tours-san-diego-beach-tour-view.jpg'),
(13, 'This a Test Trip', 'We\'re going somewhere really really really really really cool!', '07/29/24 to 07/29/24', 'Somewhere', 'Mattie', 11, 'https://as1.ftcdn.net/v2/jpg/02/20/29/02/1000_F_220290248_3m89GmDUXPmpq6LrbkMwLLFArQ51Y1IR.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trip_users`
--

CREATE TABLE `trip_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `trip_name` varchar(30) NOT NULL,
  `trip_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trip_users`
--

INSERT INTO `trip_users` (`id`, `user_name`, `user_id`, `trip_name`, `trip_id`) VALUES
(1, 'Mattie', 4, 'PNW Train Trip', 1),
(2, 'Mattie', 4, 'San Diego Road Trip', NULL),
(3, 'Angie', 7, 'PNW Train Trip', 1),
(4, 'Mattie', 4, 'SD Road Trip', 7),
(5, 'Sandy', 8, 'SD Road Trip', 7),
(6, 'Angie', 7, 'Stern Grove Concert', NULL),
(7, 'Mattie', 4, 'Stern Grove Concert', NULL),
(8, 'Mattie', 4, 'test trip', NULL),
(9, 'Mattie', 4, 'test trip', NULL),
(10, 'Mattie', 4, 'test trip 2', NULL),
(11, 'Mattie', 4, 'Test Trip 3', NULL),
(12, 'Mattie', 4, 'test trip 4 lol', 13),
(13, 'Mattie', 4, 'another test', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pin` varchar(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pin`, `created_at`) VALUES
(4, 'Mattie', '1285', '2024-07-22 18:03:03'),
(7, 'Angie', '3263', '2024-07-22 18:07:03'),
(8, 'Sandy', '0102', '2024-07-22 18:11:03'),
(15, 'Olivia', '0804', '2024-07-23 21:55:54'),
(16, 'lissie', '1231', '2024-07-24 22:45:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip_users`
--
ALTER TABLE `trip_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `trip_id` (`trip_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `trip_users`
--
ALTER TABLE `trip_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trip_users`
--
ALTER TABLE `trip_users`
  ADD CONSTRAINT `trip_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `trip_users_ibfk_2` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
