-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 10:25 AM
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
-- Database: `college management`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `phoneno` longtext NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(8) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `city`, `department`, `batch`, `phoneno`, `email`, `password`, `image`) VALUES
(1, 'Risha', 'Patna', 'BMC', '2023', '8899889988', 'risha@gmail.com', '1234', ''),
(3, 'Deepali', 'Patna', 'BCA', '2024', '9999900000', 'deepali11@gmail.com', '1122', ''),
(4, 'Ishika Rn', 'Patna', 'BA', '2021', '9090909090', 'ishika@gmail.com', '1111', ''),
(5, 'Rani S', 'Pune', 'BBA', '2024', '8888888800', 'rani11@gmail.com', '1010', ''),
(6, 'Rishika', 'Bangalore', 'BCA', '2024', '9999999999', 'rishika@gmail.com', '0000', ''),
(7, 'Sushmita', 'Pune', 'MCA', '2023', '9990009990', 'sush@gmail.com', '2222', ''),
(8, 'Ritika', 'Pune', 'BSc', '2024', '0000000000', 'ritika@gmail.com', '3333', ''),
(9, 'Shreya', 'Vanarasi', 'MCA', '2024', '7777777770', 'shreya@gmail.com', '3333', ''),
(10, 'Tina', 'Vanarasi', 'BBA', '2023', '7777777771', 'tina@gmail.com', '0000', ''),
(14, 'Test', 'Patna', 'BCA', '2021-24', '7777777770', 'risha2@gmail.com', '1111', ''),
(15, 'Isha', 'Patna', 'B.Sc.', '2024', '7777777770', 'i@gmail.com', '1111', 'uploads/6d13fc1df2fd76c559e3baca47f353b6.jpg'),
(16, 'Muskan', 'Dehradun', 'BMC', '2022', '7************', 'muskan@gmail.com', '111', 'uploads/desktop-wallpaper-238-about-faceless-ulzzang-girls-ulzzang-girls.jpg'),
(17, 'Khyati', 'Vanarasi', 'BBA', '2024', '7777777770', 'k@gmail.com', '111', 'uploads/6d13fc1df2fd76c559e3baca47f353b6.jpg'),
(19, 'Sonam Kumari', 'Patna', 'BCA', '2012', '9386848493', 'sonam.group4ever@gmail.com', '1234', 'uploads/00f79fd2c8063e252593342d58d5d725.jpg'),
(21, 'Rishika', 'Pune', 'BCA', '2024', '00000000', 'rishikarajshree77@gmail.com', '0000', 'uploads/WhatsApp Image 2024-01-15 at 22.49.19.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
