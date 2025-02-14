-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 07:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bds`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `Registration_details` (
  `alumni_id` int(11) NOT NULL,
  `` float NOT NULL,
  `` float NOT NULL,
  `` varchar(64) NOT NULL,
  `` varchar(64) NOT NULL,
  `` varchar(64) NOT NULL,
  `` varchar(64) NOT NULL,
  `` varchar(64) NOT NULL,
  `` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `bmiub`, `bmilb`, `breakfast`, `midmeal`, `lunch`, `evening`, `Dinner`, `type`) VALUES
(1, 18.5, 0, '2 egg brown bread sandwich, green chutney, 1 cup milk, 3 cashews', '1 cup banana shake', '1 cup arhar dal, 1 cup potato curry, 3 chapatti, 1/2 cup rice, 1', '1 cup strawberry smoothie, 1 cup vegetable poha', '1.5 cup chicken curry, 3 chapatti, salad', 'Underweight'),
(2, 24.9, 23, '3 egg whites, 1 toasted brown bread, 1/2 cup low fat milk (no su', '1 cup papaya', '1 cup arhar dal, 1 chapatti, 1/2 cup low fat curd, salad', '1 cup vegetable soup', '1 cup pumpkin, 1 chapatti, salad', 'Overweight'),
(3, 100, 25, '2 besan cheela, 1/2 cup low fat curd', '1 apple', '1 cup masoor dal, 1 chapatti, 1/2 up low fat curd, salad', '1 cup tomato soup', '1 cup carrot peas vegetable, 1 chapatti, salad', 'Obese'),
(4, 22.9, 18.5, '2 egg brown bread sandwich, green chutney, 1 cup milk, 3 cashews', '1 cup banana shake', '1 cup arhar dal, 1 cup potato curry, 3 chapatti, 1/2 cup rice, 1', '1 cup strawberry smoothie, 1 cup vegetable poha', '1.5 cup chicken curry, 3 chapatti, salad', 'Healthy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `weight` int(11) NOT NULL,
  `bmi` float NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `weight`, `bmi`, `age`) VALUES
(1, 'user', 'user@gmail.com', 'user', 0, 16.6, 0),
(2, 'user1', 'user1@gmail.com', 'user1', 0, 16.9029, 0),
(3, 'test', 'test@gmail.com', 'test', 0, 16.9029, 18),
(4, 'jasonwaspro', 'lol@gmail.com', 'lolhaha', 69, 70.259, 24);

-- --------------------------------------------------------

--
-- Table structure for table `weight`
--

CREATE TABLE `weight` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `Breakfast` varchar(64) NOT NULL,
  `Midmeal` varchar(64) NOT NULL,
  `lunch` varchar(64) NOT NULL,
  `evening` varchar(64) NOT NULL,
  `dinner` varchar(64) NOT NULL,
  `weightlb` float NOT NULL,
  `weightub` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weight`
--

INSERT INTO `weight` (`id`, `type`, `Breakfast`, `Midmeal`, `lunch`, `evening`, `dinner`, `weightlb`, `weightub`) VALUES
(1, 'gain', '2 egg brown bread sandwich, green chutney, 1 cup milk, 3 cashews', '1 cup banana shake', '1 cup arhar dal, 1 cup potato curry, 3 chapatti, 1/2 cup rice, 1', '1 cup strawberry smoothie, 1 cup vegetable poha', '1.5 cup chicken curry, 3 chapatti, salad', 30, 40),
(2, 'gain', '3 onion stuffed parantha, 1 cup curd, 3 cashews, 4 almonds, 2 wa', '1 cup mango shake', '1 cup moong dal/ chicken curry, 1 cup potato and caulifllower ve', '1 cup pomegranate juice, 2 butter toasted bread', '1 cup beans potato vegetable, 3 chapatti, salad', 40, 50),
(3, 'gain', '3 paneer stuffed besan cheela, green chutney, 1 cup curd, 3 cash', '1 apple smoothie with maple syrup', '1 cup masoor dal, 1 cup calocasia, 3 chapatti, 1/2 cup rice, 1 c', '1 cup tomato soup with bread crumbs, 1 cup aloo chaat', '1 cup carrot peas vegetable, 3 chapatti, salad', 50, 60),
(4, 'gain', '2 cucmber potato sandwich, 1 tsp green chutney, 1 orange juice, ', '1 cup buttermilk, 1 cup sweet potato chaat', '1 cup white chana/ fish curry, 3 chapatti, 1/2 cup rice, salad', '1 cup almond milk, banana', '1 cup cauliflower potato vegetabl, 3 chapatti, salad', 60, 200),
(5, 'loss', '3 egg whites, 1 toasted brown bread, 1/2 cup low fat milk (no su', '1 cup papaya', '1 cup arhar dal, 1 chapatti, 1/2 cup low fat curd, salad', '1 cup vegetable soup', '1 cup pumpkin, 1 chapatti, salad', 90, 100),
(6, 'loss', '1 onion stuffed chapatti, 1/2 cup low fat curd', '1 cup coconut water', '1 cup moong dal/ chicken curry, 1 chapatti, salad', '1 cup pomegranate', '1 cup beans, 1 chapatti, salad', 80, 90),
(7, 'loss', '2 besan cheela, 1/2 cup low fat curd', '1 apple', '1 cup masoor dal, 1 chapatti, 1/2 up low fat curd, salad', '1 cup tomato soup', '1 cup carrot peas vegetable, 1 chapatti, salad', 70, 80),
(8, 'loss', '1 cup vegetable brown bread upma, 1/2 cup low fat milk (no sugar', '1 cup musk melon', '1 cup rajma curry, 1 chapatti, salad', '1 cup vegetable soup', '1 cup parwal vegetable, 1 chapatti, salad', 50, 70);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `weight`
--
ALTER TABLE `weight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
