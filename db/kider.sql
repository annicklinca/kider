-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 10:19 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kider`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `description`, `image`) VALUES
(1, 'Nutrition', 'TUTUBA Jean Paul (1).png', '* Breastfeeding and formula feeding\r\n                                    * Starting solids\r\n                                    * Healthy eating habits for toddlers\r\n                                    * Food allergies and intolerances\r\n                  '),
(2, 'Games and songs', 'TUTUBA Jean Paul (1).png', '* Starting games\r\n                                    * song habits for toddlers\r\n                                    * Food allergies and intolerances\r\n                                    * Recipes for nutritious meals and snacks'),
(3, 'Health care', 'WhatsApp Image 2023-11-22 at 20.52.31 (1).jpeg', '* Common illnesses and injuries in children under 4\r\n                                    * Vaccination schedules\r\n                                    * First aid tips\r\n                                    * Premature babies \r\n                              '),
(4, 'Positive Learning', '', '* Motor skills development\r\n                                    * Language development\r\n                                    * Social and emotional development\r\n                                    * Cognitive development\r\n                                  '),
(5, 'dddddd', 'WhatsApp Image 2023-11-22 at 20.52.31 (1).jpeg', 'cdffffff'),
(6, '', 'WhatsApp Image 2023-11-22 at 20.52.31 (1).jpeg', '                                                              jjjjjjjj      '),
(7, 'kkkk', 'WhatsApp Image 2023-11-22 at 20.52.31 (1).jpeg', '                                                              jjjjjjjj      ');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pemail` varchar(255) NOT NULL,
  `date_meet` varchar(255) NOT NULL,
  `time_prefer` varchar(255) NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `pname`, `pemail`, `date_meet`, `time_prefer`, `messages`) VALUES
(1, 'kkkkkk', 'ki@gmail.com', 'hhhh', 'kkkkk', 'kkkkkk');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `title`, `image`, `description`) VALUES
(1, 'Kids from 2-4 years old', 'WhatsApp Image 2023-11-22 at 20.52.31 (2).jpeg', 'nutrition and taking care'),
(2, 'kids from 5-10 yeards old', 'WhatsApp Image 2023-11-22 at 20.52.30 (2).jpeg', 'eresdksjsdsk'),
(3, 'chuld support', 'WhatsApp Image 2023-11-22 at 20.52.31.jpeg', 'welcome'),
(5, 'kkkk', 'WhatsApp Image 2023-11-22 at 20.52.31.jpeg', '                                                            kjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj        ');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(255) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_email` varchar(255) NOT NULL,
  `child_name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `guardian_name`, `guardian_email`, `child_name`, `age`, `message`) VALUES
(3, 'rughty', '', 'kkkk', 'kkkk', 'JJJKKLIUHIUUTDTFTF VGVH'),
(4, 'rughty', '', 'kkkk', 'kkkk', 'JJJKKLIUHIUUTDTFTF VGVH'),
(5, 'rughty', 'linc@gmailcom', 'kkkk', 'kkkk', 'JJJKKLIUHIUUTDTFTF VGVH');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `title`, `image`, `description`) VALUES
(1, 'kkkkk', '', 'kkkkkk'),
(2, 'annick Linca', 'WhatsApp Image 2023-11-22 at 20.52.31 (2).jpeg', 'good'),
(3, 'bbbbb', 'WhatsApp Image 2023-11-22 at 20.52.30 (2).jpeg', '                                                             kkkkk       '),
(4, 'bbbbb', 'WhatsApp Image 2023-11-22 at 20.52.30 (2).jpeg', '                                                             kkkkk       ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`, `role`) VALUES
(1, 'nice', 'kkkk', '0788345323', 'nice@gmail.com', '1212', 'parent'),
(2, 'linca', 'ok', '078324223', 'linca@gmail.com', '1313', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
