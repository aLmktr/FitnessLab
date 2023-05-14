-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 01:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitnesslab`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_levels`
--

CREATE TABLE `activity_levels` (
  `id` int(11) NOT NULL,
  `level` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_levels`
--

INSERT INTO `activity_levels` (`id`, `level`, `description`) VALUES
(1, 'Sedentary', 'Little or no exercise with a desk job or mostly sitting throughout the day.'),
(2, 'Lightly active', 'Light exercise or sports 1-3 days a week, or an active job (e.g. walking, housework, or manual labor).'),
(3, 'Moderately active', 'Moderate exercise or sports 3-5 days a week (e.g. brisk walking, dancing, or gardening).'),
(4, 'Very active', 'Hard exercise or sports 6-7 days a week (e.g. running, swimming, or weightlifting).'),
(5, 'Super active', 'Hard daily exercise or sports and physical job or training twice a day.'),
(6, 'Extremely active', 'Athlete with an extremely intense training routine or very physically demanding job.'),
(7, 'Meticulously active', 'Athlete training for multiple hours every day, with a highly demanding physical job, or training for a specific event or competition.');

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sets` int(2) NOT NULL,
  `reps` int(2) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`id`, `name`, `sets`, `reps`, `category`) VALUES
(1, 'Squats', 4, 10, 'legs'),
(2, 'Deadlifts', 3, 8, 'back'),
(3, 'Bench press', 4, 10, 'chest'),
(4, 'Bicep curls', 3, 12, 'biceps'),
(5, 'Tricep extensions', 3, 12, 'triceps'),
(6, 'Shoulder press', 4, 10, 'shoulders'),
(7, 'Lunges', 3, 10, 'legs'),
(8, 'Lat pulldowns', 4, 12, 'back'),
(9, 'Incline bench press', 3, 12, 'chest'),
(10, 'Hammer curls', 3, 10, 'biceps'),
(11, 'Skull crushers', 3, 10, 'triceps'),
(12, 'Military press', 3, 8, 'shoulders'),
(13, 'Leg press', 4, 12, 'legs'),
(14, 'Barbell rows', 4, 8, 'back'),
(15, 'Dumbbell flys', 3, 12, 'chest'),
(16, 'Chin ups', 3, 10, 'biceps'),
(17, 'Dips', 3, 12, 'triceps'),
(18, 'Lateral raises', 3, 12, 'shoulders'),
(19, 'Calf raises', 4, 12, 'legs'),
(20, 'Seated cable rows', 4, 12, 'back'),
(21, 'Incline dumbbell press', 3, 10, 'chest'),
(22, 'Preacher curls', 3, 10, 'biceps'),
(23, 'Close grip bench press', 3, 12, 'triceps'),
(24, 'Rear delt flys', 3, 12, 'shoulders'),
(25, 'Hack squats', 3, 10, 'legs'),
(26, 'Pull ups', 3, 10, 'back'),
(27, 'Decline bench press', 3, 12, 'chest'),
(28, 'Concentration curls', 3, 10, 'biceps'),
(29, 'Overhead tricep extensions', 3, 12, 'triceps'),
(30, 'Front raises', 3, 12, 'shoulders'),
(31, 'Leg extensions', 4, 10, 'legs'),
(32, 'T-bar rows', 4, 10, 'back'),
(33, 'Pec deck flys', 3, 12, 'chest'),
(34, 'Hammer curls (reverse grip)', 3, 12, 'biceps'),
(35, 'Tricep pushdowns', 3, 12, 'triceps'),
(36, 'Upright rows', 3, 12, 'shoulders'),
(37, 'Leg curls', 4, 10, 'legs'),
(38, 'Seated rows', 4, 12, 'back'),
(39, 'Dumbbell press', 3, 12, 'chest'),
(40, 'Zottman curls', 3, 10, 'biceps'),
(41, 'Dumbbell kickbacks', 3, 10, 'triceps'),
(42, 'Shrugs', 4, 12, 'shoulders'),
(43, 'Step ups', 3, 10, 'legs'),
(44, 'Bent over rows', 4, 12, 'back'),
(45, 'Cable flys', 3, 12, 'chest'),
(46, 'Hammer curls (neutral grip)', 3, 12, 'biceps'),
(47, 'Diamond pushups', 3, 12, 'triceps'),
(48, 'Arnold press', 3, 10, 'shoulders'),
(71, 'Push ups', 10, 4, 'chest');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `calories` int(11) NOT NULL,
  `serving_size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `calories`, `serving_size`) VALUES
(1, 'Rice', 150, '1 cup'),
(2, 'Grilled Chicken Breast', 165, '3 oz'),
(3, 'Egg', 78, '1 large'),
(4, 'Broccoli', 55, '1 cup chopped'),
(5, 'Banana', 105, '1 medium'),
(6, 'Apple', 95, '1 medium'),
(7, 'Orange', 62, '1 medium'),
(8, 'Pepsi', 150, '12 oz can'),
(9, 'Mountain Dew', 170, '12 oz can'),
(10, 'Coca Cola', 140, '12 oz can'),
(11, 'Snickers', 215, '1 bar'),
(12, 'Kinder Chocolate', 122, '1 bar'),
(13, 'Raisins', 130, '1/4 cup'),
(14, 'Hummus', 166, '1/2 cup'),
(15, 'Tabbouleh Salad', 70, '1 cup'),
(16, 'Falafel', 57, '1 piece'),
(17, 'Baba Ghanoush', 96, '1/2 cup'),
(18, 'Chicken Shawarma', 620, '1 wrap'),
(19, 'Beef Shawarma', 760, '1 wrap'),
(20, 'Kebab', 210, '1 skewer'),
(21, 'Shish Tawook', 200, '1 skewer'),
(22, 'Ful Medames', 350, '1 cup'),
(23, 'Mansaf', 700, '1 serving'),
(24, 'Maqluba', 300, '1 serving'),
(25, 'Hamburger', 250, '1 burger'),
(26, 'Cheeseburger', 300, '1 burger'),
(27, 'French Fries', 365, '1 medium serving'),
(28, 'Onion Rings', 480, '1 medium serving'),
(29, 'Pizza (Cheese)', 285, '1 slice'),
(30, 'Pizza (Pepperoni)', 350, '1 slice'),
(31, 'Spaghetti (with Tomato Sauce)', 220, '1 cup'),
(32, 'Spaghetti and Meatballs', 300, '1 cup'),
(33, 'Lasagna', 380, '1 cup'),
(34, 'Chicken Alfredo', 375, '1 cup'),
(35, 'Caesar Salad', 360, '1 salad'),
(36, 'Greek Salad', 300, '1 salad'),
(37, 'Cobb Salad', 440, '1 salad'),
(38, 'Taco Salad', 400, '1 salad'),
(39, 'Burrito (Beef)', 430, '1 burrito'),
(40, 'Burrito (Chicken)', 400, '1 burrito'),
(41, 'Enchiladas (Cheese)', 280, '1 serving'),
(42, 'Enchiladas (Beef)', 325, '1 serving'),
(43, 'Sushi (California Roll)', 250, '6 pieces'),
(44, 'Sushi (Spicy Tuna Roll)', 290, '6 pieces'),
(45, 'Pad Thai (with Chicken)', 440, '1 serving'),
(46, 'Beef Stir Fry', 325, '1 cup'),
(47, 'Chicken Curry', 350, '1 cup'),
(48, 'Vegetable Curry', 200, '1 cup');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_levels`
--
ALTER TABLE `activity_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_levels`
--
ALTER TABLE `activity_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
