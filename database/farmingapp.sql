-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 08:11 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `farmingapps`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE IF NOT EXISTS `administrators` (
  `admin_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`admin_id`, `name`, `surname`, `username`, `password`) VALUES
(1, 'Trevor', 'Mukuru', 'admin', 'e64b78fc3bc91bcbc7dc232ba8ec59e0'),
(3, 'Mathias', 'Chekanyanza', 'lotusp', '9a40e7f81ca81a6d67bcac4f1063f05b');

-- --------------------------------------------------------

--
-- Table structure for table `agronomists`
--

CREATE TABLE IF NOT EXISTS `agronomists` (
  `agronomist_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `image_upload` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agronomists`
--

INSERT INTO `agronomists` (`agronomist_id`, `name`, `surname`, `username`, `email`, `phone`, `password`, `gender`, `image_upload`, `date_created`, `time_created`) VALUES
(1, 'Leeroy', 'Jinja', 'leeroy', 'leeroyjinja@gmail.com', 778153411, 'a618b46decac6032a442076a49341e41', 'male', 'user-thumb.jpg', '2019-04-23', '19:20:18'),
(2, 'Thabani', 'Ncube', 'thabz', 'thabani@gmail.com', 775456345, 'f4270724b1ebc335190c7e21298ca284', 'male', 'c7.jpg', '2019-05-06', '13:32:34'),
(3, 'Ian', 'Denga', 'mutsotso', 'ian@gmail.com', 775456376, '', 'male', '1.jpeg', '2019-05-06', '13:50:33');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `appointment_id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(80) NOT NULL,
  `farmer_username` varchar(30) NOT NULL,
  `agronomist_username` varchar(30) NOT NULL,
  `date_of_appointment` date NOT NULL,
  `time_of_appointment` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `subject`, `message`, `farmer_username`, `agronomist_username`, `date_of_appointment`, `time_of_appointment`, `status`) VALUES
(1, '1st Appointment', 'This is the first appointment', 'kaydizzy', 'leeroy', '2019-05-13', '05:24:14', 2),
(2, 'About Dissertation', 'Can i come to see u', 'kaydizzy', 'leeroy', '2019-05-13', '08:51:06', 1),
(3, 'Farming', 'Let''s talk', 'kaydizzy', 'leeroy', '2019-05-14', '21:26:59', 1),
(4, '2nd Meeting', 'This is a second meeting', 'kaydizzy', 'leeroy', '2019-05-14', '21:31:52', 2);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE IF NOT EXISTS `chats` (
  `chat_id` int(11) NOT NULL,
  `sender_username` varchar(50) NOT NULL,
  `receiver_username` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_posted` date NOT NULL,
  `time_posted` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chat_id`, `sender_username`, `receiver_username`, `message`, `date_posted`, `time_posted`) VALUES
(11, 'thabz', 'kaydizzy', 'hec goda', '2019-05-07', '15:43:13'),
(36, 'kaydizzy', 'thabz', 'ucey wangu', '2019-05-07', '16:14:08'),
(42, 'thabz', 'kaydizzy', 'Haaa yabuda', '2019-05-07', '16:21:36'),
(56, 'kaydizzy', 'thabz', 'Ndikuda kutaura naSkii nhasi\r\n', '2019-05-07', '17:10:04'),
(58, 'kaydizzy', 'thabz', 'kkjk', '2019-05-07', '17:10:45'),
(59, 'kaydizzy', 'thabz', 'Perfect Now', '2019-05-07', '17:16:20'),
(60, 'leeroy', 'kaydizzy', 'This is my first chat with Kaydizzy\r\n', '2019-05-13', '09:33:53'),
(61, 'kaydizzy', 'leeroy', 'Thank you so much, let''s chat', '2019-05-13', '09:34:48'),
(62, 'thabz', 'kaydizzy', 'zvakazoita hant?', '2019-05-13', '09:39:35'),
(63, 'kaydizzy', 'leeroy', 'Ndasenda message uzoiwona', '2019-05-14', '21:33:33'),
(64, 'leeroy', 'kaydizzy', 'Bho ndaiona', '2019-05-14', '21:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `chemicals`
--

CREATE TABLE IF NOT EXISTS `chemicals` (
  `chemical_id` int(11) NOT NULL,
  `chemical_names` varchar(30) NOT NULL,
  `disease_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE IF NOT EXISTS `diseases` (
  `disease_id` int(11) NOT NULL,
  `disease_name` varchar(100) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `cause` varchar(255) NOT NULL,
  `solution` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`disease_id`, `disease_name`, `symptoms`, `cause`, `solution`) VALUES
(1, 'Bacterial Spot', 'small, dark, raised spots', 'warm, wet environments', 'Destroy infected plants and apply fungicide'),
(2, 'Bacterial Blight', 'Large yellow spots on leaves that evelntually turn brown', 'Remove infected plants and ensure proper spacing between new plants', 'Cool, wet weather'),
(3, 'Ralstonia solanacearum (Bacterial Wilt)', 'Wilted leaves on plants during the day time, eventually turning yellow and remaining wilted', 'Contaminated soil or weeds', 'Discard infected plant and replant new plants in pathogen-free potting soil'),
(4, 'Thielaviopsis (Black Root Rot)', 'Stunted foliage and root systems with blackened areas ', 'Damp soil with temperatures 55 -65 degrees (F)', 'Use fungicide for preventative treatment'),
(5, 'Aphids', 'small green or yellow bugs on leaves and stems', 'Warm environments and high nitrogen in early growth stages', 'Wipe plants with soapy water or rubbing alcohol'),
(6, 'Cucumber Mosaic Virus', 'Yellow spotting or streaking on leaves', 'Aphids', 'Discard Virus Infected plant and maintain strict aphid control'),
(7, 'Borytis (Gray Mold)', 'Dark to light brown rot forming around wounded plant tissue', 'Dying or wounded parts of plants like leaves or petals', 'Remove and dispose of infected part of plant and apply fungicide'),
(9, 'Downey Mildew', 'White Mildew typically on underside of leaves.', 'Prolonged wetness', 'Remove infected plants and keep spacing between plants to maintain proper air circulation'),
(10, 'Cylindrocladium', 'Varies, typically dark brown spotted leaves', 'Humidity and overheat irrigation', 'Remove Infected plants and pot in sterile soil mixture'),
(11, 'Andular Leaf spot', 'Holes in leaves', 'Seed and plant debris', 'Plant resistant varieties and grow in arid climates'),
(12, 'Rhizoctonia', 'Stem rot at the soil line with brown to red lesions', 'Warm overly moist soil', 'Remove infected plants and apply fungicide');

-- --------------------------------------------------------

--
-- Table structure for table `email_notification`
--

CREATE TABLE IF NOT EXISTS `email_notification` (
  `email_notification_id` int(11) NOT NULL,
  `sender_admin` varchar(30) NOT NULL,
  `receiver_farmer` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(400) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_notification`
--

INSERT INTO `email_notification` (`email_notification_id`, `sender_admin`, `receiver_farmer`, `subject`, `message`, `date_created`, `time_created`, `status`) VALUES
(1, 'admin', 'kaydizzy', 'Aphids Attack in your region', 'Make sure you take all the precautions necessary to defend yourself against Aphids', '2019-05-14', '08:25:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE IF NOT EXISTS `farmers` (
  `farmers_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `region_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `image_upload` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`farmers_id`, `name`, `username`, `region_name`, `email`, `phone`, `password`, `gender`, `image_upload`, `date_created`, `time_created`) VALUES
(1, 'Kudakwashe Mundangepfupfu', 'kaydizzy', 'natural region 2', 'kudamundange@gmail.com', 784607691, '18e51f3549a3cf43e6ff312100be492f', 'male', 'male.jpg', '2019-04-23', '19:18:16'),
(5, 'Tatenda Tsimpu', 'tats', 'natural region 4', 'tatenda@gmail.com', 775456345, '27f0ded4a955b9a1c49045f3bc6498f1', 'male', '1.jpg', '2019-04-27', '15:57:09'),
(6, 'Blessing Sikipa', 'skii', 'natural region 3', 'blessingsikipa@gmail.com', 775456345, '0de9b37b193b55ba8836e19ef5facc12', 'male', '2.jpg', '2019-04-30', '22:46:54'),
(7, 'Trevor Tinotenda Mutasa', 'trevor', 'natural region 2', 'dfgfghgf@gmail.com', 775456345, '35993bbc190301084e48bb74b7543fe6', 'male', '4.jpg', '2019-05-01', '17:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `hectares`
--

CREATE TABLE IF NOT EXISTS `hectares` (
  `hectare_id` int(11) NOT NULL,
  `number_of_hectares` int(50) NOT NULL,
  `amount` varchar(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date_inserted` date NOT NULL,
  `time_inserted` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hectares`
--

INSERT INTO `hectares` (`hectare_id`, `number_of_hectares`, `amount`, `username`, `date_inserted`, `time_inserted`) VALUES
(4, 14000, '15400', 'skii', '2019-05-01', '03:09:34'),
(5, 14000, '15400', 'skii', '2019-05-01', '03:30:25'),
(6, 14000, '15400', 'skii', '2019-05-01', '03:33:14'),
(7, 14000, '15400', 'skii', '2019-05-01', '03:34:53'),
(8, 12000, '13200', 'skii', '2019-05-01', '04:03:17'),
(9, 20000, '22000', 'trevor', '2019-05-01', '17:05:42'),
(10, 3000, '3300', 'kaydizzy', '2019-05-03', '13:33:20'),
(11, 2000, '2200', 'kaydizzy', '2019-05-13', '02:11:42'),
(12, 5000, '5500', 'kaydizzy', '2019-05-14', '14:22:45'),
(13, 8000, '8800', 'kaydizzy', '2019-05-14', '21:25:53'),
(14, 1000, '5500', 'kaydizzy', '2019-05-22', '05:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `input_budget`
--

CREATE TABLE IF NOT EXISTS `input_budget` (
  `input_budget_id` int(11) NOT NULL,
  `farmer_username` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `input_type`
--

CREATE TABLE IF NOT EXISTS `input_type` (
  `input_type_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `land_price`
--

CREATE TABLE IF NOT EXISTS `land_price` (
  `land_price_id` int(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `updated_by` varchar(30) NOT NULL,
  `date_updated` date NOT NULL,
  `time_updated` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `land_price`
--

INSERT INTO `land_price` (`land_price_id`, `price`, `updated_by`, `date_updated`, `time_updated`) VALUES
(1, '5.50', 'admin', '2019-05-01', '05:06:16');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(30) NOT NULL,
  `average_temperature` varchar(254) NOT NULL,
  `soil_type` varchar(30) NOT NULL,
  `annual_rainfall` varchar(255) NOT NULL,
  `soil_ph` varchar(255) NOT NULL,
  `suggested_crops` text NULL,
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`region_id`, `region_name`, `average_temperature`, `soil_type`, `annual_rainfall`, `soil_ph`, `suggested_crops`) 
VALUES (1, 'Meru', '20.1 degrees Celsius', 'deep, well drained soils', 'average of 550 mm rainfall per year', '4.2-6.6 pH', 'Bananas, Avocado, Sorghum, Tea, Coffee'), 
(2, 'Nakuru', '16.8 degrees Celsius', 'well-drained, red, volcanic soils', 'average of 1244 mm of rainfall per year', '6.3 PH', 'Maize, Beans, Wheat'), 
(3, 'Embu', '19.2 degrees Celcius', 'Moderately fertile, well drained soils', 'average of 1499 mm of rainfall per year', '6.9-7.3 pH', 'Avocado, Bananas, Mangoes, Maize, Beans'), 
(4, 'Muranga', '19.7 degrees Celcius', 'light, friable loam with porosity', 'average of 996mm rainfall per year', '5.45 pH', 'Maize, Beans, Tea, Coffee, Arrow roots'), 
(5, 'Vihiga', '21.2 degrees Celcius', 'Fertile, well drained, well aerated soils', 'average of 1966 mm rainfall per year', '4.9-6.2 pH', 'Maize, Beans, Bananas, Sweet potatoes');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `agronomists`
--
ALTER TABLE `agronomists`
  ADD PRIMARY KEY (`agronomist_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `chemicals`
--
ALTER TABLE `chemicals`
  ADD PRIMARY KEY (`chemical_id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `email_notification`
--
ALTER TABLE `email_notification`
  ADD PRIMARY KEY (`email_notification_id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`farmers_id`);

--
-- Indexes for table `hectares`
--
ALTER TABLE `hectares`
  ADD PRIMARY KEY (`hectare_id`);

--
-- Indexes for table `input_budget`
--
ALTER TABLE `input_budget`
  ADD PRIMARY KEY (`input_budget_id`);

--
-- Indexes for table `input_type`
--
ALTER TABLE `input_type`
  ADD PRIMARY KEY (`input_type_id`);

--
-- Indexes for table `land_price`
--
ALTER TABLE `land_price`
  ADD PRIMARY KEY (`land_price_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`region_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `agronomists`
--
ALTER TABLE `agronomists`
  MODIFY `agronomist_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `chemicals`
--
ALTER TABLE `chemicals`
  MODIFY `chemical_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `disease_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `email_notification`
--
ALTER TABLE `email_notification`
  MODIFY `email_notification_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `farmers_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hectares`
--
ALTER TABLE `hectares`
  MODIFY `hectare_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `input_budget`
--
ALTER TABLE `input_budget`
  MODIFY `input_budget_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `input_type`
--
ALTER TABLE `input_type`
  MODIFY `input_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `land_price`
--
ALTER TABLE `land_price`
  MODIFY `land_price_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
