-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 03:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `photo_id`, `author`, `body`) VALUES
(17, 12, 'Tarik Terzo', 'This car is so cool'),
(18, 34, 'Adolf', 'This car is very cool'),
(19, 34, 'Provjera komentara', 'Provjera komentara'),
(20, 13, 'Provjera komentara', 'Provjera komentara'),
(21, 21, 'Provjera komentara', 'Provjera komentara'),
(22, 22, 'Provjera komentara', 'Provjera komentara'),
(23, 23, 'Provjera komentara', 'Provjera komentara'),
(24, 27, 'Provjera komentara', 'Provjera komentara'),
(25, 28, 'Provjera komentara', 'Provjera komentara'),
(26, 29, 'Provjera komentara', 'Provjera komentara'),
(27, 31, 'Provjera komentara', 'Provjera komentara'),
(28, 32, 'Provjera komentara', 'Provjera komentara'),
(29, 33, 'Provjera komentara', 'Provjera komentara'),
(30, 39, 'Provjera komentara', 'Provjera komentara'),
(31, 28, 'Provjera komentara', 'Provjera komentara'),
(32, 52, 'Provjera komentara', 'Provjera komentara'),
(33, 50, 'Provjera komentara', 'Provjera komentara'),
(34, 53, 'Provjera komentara', 'Provjera komentara'),
(35, 23, 'Provjera komentara', 'Provjera komentara'),
(36, 48, 'Provjera komentara', 'Provjera komentara'),
(37, 42, 'Provjera komentara', 'Provjera komentara'),
(38, 38, 'Provjera komentara', 'Provjera komentara');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `alternate_text` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `caption`, `description`, `filename`, `alternate_text`, `type`, `size`) VALUES
(12, 'Car 2', '', '', 'images-9.jpg', '', 'image/jpeg', 21108),
(13, 'PRovjerai', 'provjerai', 'provjeraj', 'images-1.jpg', 'provejrai', 'image/jpeg', 28947),
(21, 'Car 3', '', '', 'images-12.jpg', '', 'image/jpeg', 18540),
(22, 'Car 4', '', '', 'images-15.jpg', '', 'image/jpeg', 28466),
(23, 'Car 5', '', '', 'images-39.jpg', '', 'image/jpeg', 24969),
(27, 'Car 6', '', '', 'images-33.jpg', '', 'image/jpeg', 16855),
(28, 'Car 7', '', '', 'images-29.jpg', '', 'image/jpeg', 25493),
(29, 'Car 8', '', '', 'images-26.jpg', '', 'image/jpeg', 21802),
(30, 'Car 9', '', '', 'images-44.jpg', '', 'image/jpeg', 29486),
(31, 'Car 10', '', '', 'images-25.jpg', '', 'image/jpeg', 19363),
(32, 'Car 11', '', '', 'images-50.jpg', '', 'image/jpeg', 21652),
(33, 'Car 12', '', '', 'images-35.jpg', '', 'image/jpeg', 23672),
(34, 'Car 13', '', '', '_large_image_1.jpg', '', 'image/jpeg', 479843),
(35, 'Car 14', '', '', 'images-28.jpg', '', 'image/jpeg', 17662),
(36, 'Car 15', '', '', 'images-40.jpg', '', 'image/jpeg', 24385),
(37, 'Car 16', '', '', 'images-12 copy.jpg', '', 'image/jpeg', 18540),
(38, 'Car 17', '', '', 'images-42.jpg', '', 'image/jpeg', 22401),
(39, 'Car 18', '', '', 'images-30 copy.jpg', '', 'image/jpeg', 20257),
(40, 'Car 19', '', '', 'images-38.jpg', '', 'image/jpeg', 21857),
(41, 'Car 21', '', '', 'images-1 copy.jpg', '', 'image/jpeg', 28947),
(42, 'Car 22', '', '', 'images-4 copy.jpg', '', 'image/jpeg', 23270),
(43, 'Car 23', '', '', 'image-1 copy.jpg', '', 'image/jpeg', 328747),
(44, 'Car 24', '', '', 'images-8 copy.jpg', '', 'image/jpeg', 20810),
(45, 'Car 25', '', '', 'images-26 copy.jpg', '', 'image/jpeg', 21802),
(46, 'Car 26', '', '', 'images-17 copy.jpg', '', 'image/jpeg', 22792),
(47, 'Car 27', '', '', 'images-24 copy.jpg', '', 'image/jpeg', 29850),
(48, 'Car 28', '', '', 'images-20 copy.jpg', '', 'image/jpeg', 22942),
(49, 'Car 29', '', '', 'images-32 copy.jpg', '', 'image/jpeg', 22772),
(50, 'Car 30', '', '', 'images-22.jpg', '', 'image/jpeg', 21133),
(51, 'Car 31', '', '', 'images-28 copy.jpg', '', 'image/jpeg', 17662),
(52, 'Car 32', '', '', '_large_image_3.jpg', '', 'image/jpeg', 165053),
(53, 'Car 33', '', '', '_large_image_2.jpg', '', 'image/jpeg', 309568);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `phone`, `password`, `first_name`, `last_name`, `user_image`) VALUES
(29, '', 'Tarik_00', '', '12345678', 'Tarik', 'Terzo', 'images-1.jpg'),
(30, '', 'John', '', '12345678', 'John', 'Cena', 'images-3.jpg'),
(31, '', 'Randy', '', '12345678', 'Randy ', 'Orton', 'images-2.jpg'),
(32, '', 'Undertaker', '', '12345678', 'Undertaker', 'Undertaker', 'images-4.jpg'),
(33, '', 'Christians', '', '12345678', 'Christians', 'Sycho', 'images-13.jpg'),
(34, '', 'AD0lF', '', '12345678', 'Adolf', 'Hitler', 'images-11.jpg'),
(35, '', 'J000SSSiF', '', '12345678', 'Josif', 'Staljin', 'images-19.jpg'),
(36, '', 'Al_MuKi', '', '12345678', 'Muammar', 'Al-Gaddafi', 'images-24.jpg'),
(37, '', 'BeNY', '', '12345678', 'Benito', 'Mussolini', 'images-16.jpg'),
(38, '', 'ÄŒhee', '', '12345678', 'Che', 'Guevara', 'images-6.jpg'),
(39, '', 'El0n', '', '12345678', 'Elon', 'Musk', 'images-21.jpg'),
(40, '', 'Ex Aye Eye', '', '12345678', 'Ex Aye Eye', 'Musk', 'images-10.jpg'),
(41, 'Tarikterzo@gmail.com', 'Tarik', '+38762411664', '123456789', '', '', ''),
(42, '', 'Tarik', '', '12345678', 'Terzo', 'Terzo', 'images-5 copy.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
