-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2021 at 01:24 AM
-- Server version: 8.0.23
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `remote_tailor`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `message_id` int UNSIGNED NOT NULL,
  `message_customer_id` int UNSIGNED NOT NULL,
  `message_tailor_id` int UNSIGNED NOT NULL,
  `message_body` varchar(255) NOT NULL,
  `message_sent_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `message_sent_by` set('Customer','Tailor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`message_id`, `message_customer_id`, `message_tailor_id`, `message_body`, `message_sent_date`, `message_sent_by`) VALUES
(10, 1, 21, 'Hello Paras, \r\n\r\nDo you think you can make a maxi skirt before wednesday?', '2021-04-05 02:08:51', 'Customer'),
(11, 1, 21, 'Hello Paras, \r\n\r\nDo you think you can make a maxi skirt before wednesday?', '2021-04-05 02:11:04', 'Customer'),
(12, 1, 21, 'Can you give me a description of what you want?', '2021-04-08 00:49:13', 'Tailor'),
(13, 1, 21, 'Can you give me a description of what you want?', '2021-04-08 00:50:33', 'Tailor'),
(14, 1, 21, 'Hey, still waiting for your response', '2021-04-08 00:51:24', 'Tailor');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int UNSIGNED NOT NULL,
  `customer_fname` varchar(128) NOT NULL,
  `customer_lname` varchar(128) NOT NULL,
  `customer_email` varchar(64) NOT NULL,
  `customer_gender` set('Male','Female','Undefined') DEFAULT NULL,
  `customer_phone` varchar(16) DEFAULT NULL,
  `customer_address` varchar(128) DEFAULT NULL,
  `customer_city` varchar(64) DEFAULT NULL,
  `customer_username` varchar(32) NOT NULL,
  `customer_password` varchar(16) NOT NULL,
  `customer_reg_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `customer_modify_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_fname`, `customer_lname`, `customer_email`, `customer_gender`, `customer_phone`, `customer_address`, `customer_city`, `customer_username`, `customer_password`, `customer_reg_date`, `customer_modify_date`) VALUES
(1, 'William', 'Donald', 'william@gmail.com', 'Female', '+44 1632 960456', '', 'Liverpool', 'William', 'William45', '2021-03-12 02:21:15', NULL),
(2, 'David', 'Gary', 'david@gmail.com', 'Female', '+44 1632 960689', '', 'Edinburgh', 'David', 'Davidrjr', '2021-03-12 02:21:15', NULL),
(3, 'Charles', 'George', 'charles@gmail.com', 'Female', '+44 1632 960091', '', 'Glasgow', 'Charles', 'Charles', '2021-03-12 02:21:15', NULL),
(4, 'Thomas', 'Kenneth', 'thomas@gmail.com', 'Female', '+44 1632 960501', '', 'GLuton', 'Thomas', 'Thomas', '2021-03-12 02:21:15', NULL),
(5, 'Michael', 'Paul', 'michael@gmail.com', 'Female', '+44 1632 960788', '', 'Bristol', 'Michael', 'Michael', '2021-03-12 02:21:15', NULL),
(6, 'Ronald', 'Edward', 'ronald@gmail.com', 'Female', '+44 1632 960456', '', 'Brighton', 'Ronald', 'Ronald', '2021-03-12 02:21:15', NULL),
(7, 'Larry', 'Jerry', 'larry@gmail.com', 'Female', '+44 1632 960584', '', 'Portsmouth', 'Larry', 'Larry', '2021-03-12 02:21:15', NULL),
(8, 'Donald', 'Dennis', 'donald@gmail.com', 'Female', '+44 1632 960689', '', 'Exeter', 'Donald', 'Donald', '2021-03-12 02:21:15', NULL),
(9, 'Joseph', 'Frank', 'joseph@gmail.com', 'Female', '+44 1632 960091', '', 'Canterbury', 'Joseph', 'Joseph', '2021-03-12 02:21:15', NULL),
(10, 'George', 'Kenneth', 'george@gmail.com', 'Female', '+44 1632 960788', '', 'Blackpool', 'George', 'George', '2021-03-12 02:21:15', NULL),
(11, 'Kenneth', 'Paul', 'kenneth@gmail.com', 'Female', '+44 1632 960456', '', 'Reading', 'Kenneth', 'Kenneth', '2021-03-12 02:21:16', NULL),
(12, 'Daniel', 'Raymond', 'daniel@gmail.com', 'Female', '+44 1632 960456', '', 'Durham', 'Daniel', 'Daniel', '2021-03-12 02:21:16', NULL),
(13, 'Raymond', 'Roger', 'raymond@gmail.com', 'Female', '+44 1632 960584', '', 'Lincoln', 'Raymond', 'Raymond', '2021-03-12 02:21:16', NULL),
(14, 'Roger', 'Stephen', 'roger@gmail.com', 'Female', '+44 1632 960689', '', 'stoke', 'Roger', 'Roger', '2021-03-12 02:21:16', NULL),
(15, 'Gerald', 'Walter', 'gerald@gmail.com', 'Female', '+44 1632 960501', '', 'Winchester', 'Gerald', 'Gerald', '2021-03-12 02:21:16', NULL),
(16, 'Walter', 'James', 'walter@gmail.com', 'Female', '+44 1632 960788', '', 'Address', 'Walter', 'Walter', '2021-03-12 02:21:16', NULL),
(17, 'Terry', 'David', 'terry@gmail.com', 'Female', '+44 1632 960501', '', 'Edinburgh', 'Terry', 'Terry', '2021-03-12 02:21:16', NULL),
(18, 'Wayne', 'Charles', 'wayne@gmail.com', 'Female', '+44 1632 960788', '', 'Glasgow', 'Wayne', 'Wayne', '2021-03-12 02:21:16', NULL),
(19, 'Jack', 'Michael', 'jack@gmail.com', 'Female', '+44 1632 960584', '', 'Bristol', 'Jack', 'Jack', '2021-03-12 02:21:16', NULL),
(20, 'Carl', 'Ronald', 'carl@gmail.com', 'Female', '+44 1632 960689', '', 'Brighton', 'Carl', 'Carl', '2021-03-12 02:21:16', NULL),
(21, 'Henry', 'Larry', 'henry@gmail.com', 'Female', '+44 1632 960091', '', 'Portsmouth', 'Henry', 'Henry56', '2021-03-12 02:21:16', NULL),
(22, 'Willie', 'Donald', 'willie@gmail.com', 'Female', '+44 1632 960501', '', 'Exeter', 'Willie', 'Willie', '2021-03-12 02:21:16', NULL),
(23, 'Bruce', 'Joseph', 'bruce@gmail.com', 'Female', '+44 1632 960788', '', 'Canterbury', 'Bruce', 'Bruce', '2021-03-12 02:21:16', NULL),
(24, 'Joe', 'Dennis', 'joe@gmail.com', 'Female', '+44 1632 960456', '', 'Sheffield', 'Joe', 'Joe', '2021-03-12 02:21:16', NULL),
(25, 'Peter', 'Frank', 'peter@gmail.com', 'Female', '+44 1632 960584', '', 'Blackpool', 'Peter', 'Peter', '2021-03-12 02:21:16', NULL),
(26, 'Anthony', 'Stephen', 'anthony@gmail.com', 'Female', '+44 1632 960788', '', 'Leeds', 'Anthony', 'Anthony', '2021-03-12 02:21:16', NULL),
(27, 'James', 'Michael', 'james@gmail.com', 'Male', '+44 1632 960091', '', 'Edinburgh', 'James', 'James1', '2021-03-12 02:21:17', NULL),
(28, 'Robert', 'Ronald', 'robert@gmail.com', 'Male', '+44 1632 960501', '', 'Aberdeen', 'Robert', 'Robert34', '2021-03-12 02:21:17', NULL),
(29, 'John', 'Larry', 'john@gmail.com', 'Male', '+44 1632 960788', '', 'Manchester', 'John', 'John', '2021-03-12 02:21:17', NULL),
(30, 'Richard', 'Joseph', 'richard@gmail.com', 'Male', '+44 1632 960584', '', 'London', 'Richard', 'Richard', '2021-03-12 02:21:17', NULL),
(31, 'Gary', 'George', 'gary@gmail.com', 'Male', '+44 1632 960501', '', 'Sheffield', 'Gary', 'Gary', '2021-03-12 02:21:17', NULL),
(32, 'Paul', 'Edward', 'paul@gmail.com', 'Male', '+44 1632 960584', '', 'Leicester', 'Paul', 'Paul', '2021-03-12 02:21:17', NULL),
(33, 'Edward', 'Jerry', 'edward@gmail.com', 'Male', '+44 1632 960689', '', 'Chester', 'Edward', 'Edward', '2021-03-12 02:21:17', NULL),
(34, 'Jerry', 'Dennis', 'jerry@gmail.com', 'Male', '+44 1632 960091', '', 'Leeds', 'Jerry', 'Jerry', '2021-03-12 02:21:17', NULL),
(35, 'Dennis', 'Frank', 'dennis@gmail.com', 'Male', '+44 1632 960501', '', 'Warwick', 'Dennis', 'Dennis', '2021-03-12 02:21:17', NULL),
(36, 'Frank', 'Daniel', 'frank@gmail.com', 'Male', '+44 1632 960788', '', 'Coventry', 'Frank', 'Frank', '2021-03-12 02:21:17', NULL),
(37, 'Stephen', 'Gerald', 'stephen@gmail.com', 'Male', '+44 1632 960091', '', 'Hereford', 'Stephen', 'Stephen', '2021-03-12 02:21:17', NULL),
(38, 'Harold', 'Robert', 'harold@gmail.com', 'Male', '+44 1632 960456', '', 'Aberdeen', 'Harold', 'Harold', '2021-03-12 02:21:17', NULL),
(39, 'Steven', 'John', 'steven@gmail.com', 'Male', '+44 1632 960584', '', 'Manchester', 'Steven', 'Steven', '2021-03-12 02:21:17', NULL),
(40, 'Douglas', 'William', 'douglas@gmail.com', 'Male', '+44 1632 960689', '', 'Liverpool', 'Douglas', 'Douglas', '2021-03-12 02:21:17', NULL),
(41, 'Lawrence', 'Richard', 'lawrence@gmail.com', 'Male', '+44 1632 960091', '', 'London', 'Lawrence', 'Lawrence', '2021-03-12 02:21:17', NULL),
(42, 'Arthur', 'Thomas', 'arthur@gmail.com', 'Male', '+44 1632 960456', '', 'GLuton', 'Arthur', 'Arthur', '2021-03-12 02:21:17', NULL),
(43, 'Billy', 'Daniel', 'billy@gmail.com', 'Male', '+44 1632 960689', '', 'Reading', 'Billy', 'Billy78', '2021-03-12 02:21:17', NULL),
(44, 'Roy', 'Raymond', 'roy@gmail.com', 'Male', '+44 1632 960091', '', 'Leicester', 'Roy', 'Roy', '2021-03-12 02:21:17', NULL),
(45, 'Ralph', 'Roger', 'ralph@gmail.com', 'Male', '+44 1632 960501', '', 'Chester', 'Ralph', 'Ralph', '2021-03-12 02:21:17', NULL),
(46, 'Ifunanya', 'Anwunah', 'ifunanya@wildfusions.com', 'Female', '07035127544', '33Epinpejo Street Obanikoro, lagos', 'Lagos', 'iffy', 'iffydaniels', '2021-03-12 02:24:48', '2021-03-12 02:25:22'),
(47, 'Ify', 'Christian', 'ify.anwu@gmail.com', 'Male', '07653426783', '56 Gold street', 'Porthlethen', 'iffyDesilva', 'kennykyu6479', '2021-03-14 17:27:52', '2021-03-14 17:28:54'),
(48, 'Ken', 'Judge', 'ken67@gmail.com', 'Male', '096357290398', '13, Kingsways', 'Aberdeen', 'kenny3', 'kennykyu6479', '2021-03-15 13:44:03', '2021-03-15 13:44:44'),
(49, 'Stella', 'George', 'stella@gmail.com', 'Male', '00836283354', '14, Pragmat street', 'Abbotswell', 'stelliar', 'kennykyu6479', '2021-03-15 14:00:23', '2021-03-15 14:01:09'),
(50, 'Judith', 'Kings', 'judy@hotmail.com', 'Male', '', '134 Kingsways street', 'Porthlethen', 'juddy', 'kennykyu6479', '2021-03-15 14:35:26', '2021-03-15 14:35:59'),
(51, 'Jones', 'Steel', 'jones@gmail.com', 'Female', '079845613267', '12 bradford keep', 'Aberdeen', 'jones', 'kennykyu6479', '2021-03-16 12:32:56', '2021-03-16 12:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `profile_photo`
--

CREATE TABLE `profile_photo` (
  `photo_id` int UNSIGNED NOT NULL,
  `photo_user_type` set('Tailor','Customer') DEFAULT NULL,
  `photo_user_id` int DEFAULT NULL,
  `photo_name` varchar(128) NOT NULL,
  `photo_upload_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `proof_of_work`
--

CREATE TABLE `proof_of_work` (
  `photo_id` int UNSIGNED NOT NULL,
  `photo_tailor_id` int UNSIGNED DEFAULT NULL,
  `photo_customer_id` int UNSIGNED DEFAULT NULL,
  `photo_name` varchar(128) NOT NULL,
  `photo_upload_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tailors`
--

CREATE TABLE `tailors` (
  `tailor_id` int UNSIGNED NOT NULL,
  `tailor_fname` varchar(128) NOT NULL,
  `tailor_lname` varchar(128) NOT NULL,
  `tailor_email` varchar(64) NOT NULL,
  `tailor_gender` set('Male','Female','Undefined') DEFAULT NULL,
  `tailor_style` set('Causal','Native','English') DEFAULT NULL,
  `tailor_phone` varchar(16) DEFAULT NULL,
  `tailor_address` varchar(128) DEFAULT NULL,
  `tailor_city` varchar(64) DEFAULT NULL,
  `tailor_pref` set('Male','Female') DEFAULT NULL,
  `tailor_username` varchar(32) NOT NULL,
  `tailor_password` varchar(16) NOT NULL,
  `tailor_reg_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `tailor_modify_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tailors`
--

INSERT INTO `tailors` (`tailor_id`, `tailor_fname`, `tailor_lname`, `tailor_email`, `tailor_gender`, `tailor_style`, `tailor_phone`, `tailor_address`, `tailor_city`, `tailor_pref`, `tailor_username`, `tailor_password`, `tailor_reg_date`, `tailor_modify_date`) VALUES
(1, 'Ken', 'Wood', 'ken@gmail.com', 'Male', 'Native', '869754326', 'Kingsway Palace', 'Belfast', 'Male', 'kennywood', 'kennykyu6479', '2021-03-12 02:21:13', '2021-03-13 16:33:38'),
(2, 'Dennis', 'Woody', 'deny@gmail.com', 'Male', 'English', '869754326', 'Kingsway Palace', 'Belfast', 'Male,Female', 'deenness', 'dennel6479', '2021-03-12 02:21:13', NULL),
(3, 'Judith', 'Tom', 'Tom@gmail.com', 'Male', 'English', '2234567891', 'Armagh', 'Armagh', 'Female', 'Tom3', 'Tom3', '2021-03-12 02:21:13', NULL),
(4, 'Juliet', 'Joy', 'Joy@gmail.com', 'Male', 'English', '2657894321', 'Cambridge', 'Cambridge', 'Female', 'Joy8', 'Joy8', '2021-03-12 02:21:13', NULL),
(5, 'Scarlette', 'Juliana', 'Juliana@gmail.com', 'Female', 'English', '4023456789', 'Armagh', 'Armagh', 'Male', 'Juliana12', 'Juliana12', '2021-03-12 02:21:14', NULL),
(6, 'Skye', 'Julieta', 'Julieta@gmail.com', 'Female', 'English', '2789654321', 'Bradford', 'Bradford', 'Male', 'Julieta16', 'Julieta16', '2021-03-12 02:21:14', NULL),
(7, 'Samira', 'June', 'June@gmail.com', 'Female', 'English', '2908765432', 'Aberdeen', 'Aberdeen', 'Male', 'June', 'June', '2021-03-12 02:21:14', NULL),
(8, 'Saoirse', 'Salma', 'Salma@gmail.com', 'Female', 'English', '2890765432', 'Bath', 'Bath', 'Male', 'Salma22', 'Salma22', '2021-03-12 02:21:14', NULL),
(9, 'Jan', 'Samara', 'Samara@gmail.com', 'Female', 'English', '2973467893', 'Birmingham', 'Birmingham', 'Male', 'Samara24', 'Samara24', '2021-03-12 02:21:14', NULL),
(10, 'Ludo', 'Saniyah', 'Saniyah@gmail.com', 'Male', 'English', '2255566432', 'Canterbury', 'Canterbury', 'Male', 'Saniyah27', 'Saniyah27', '2021-03-12 02:21:14', NULL),
(11, 'Joy', 'Sarah', 'Sarah@gmail.com', 'Male', 'English', '2254763432', 'Armagh', 'Armagh', 'Male,Female', 'Sarah30', 'Sarah30', '2021-03-12 02:21:14', NULL),
(12, 'Juliana', 'Sasha', 'Sasha@gmail.com', 'Female', 'English', '2211889955', 'Bradford', 'Bradford', 'Male', 'Sasha34', 'Sasha34', '2021-03-12 02:21:14', NULL),
(13, 'Julieta', 'Saylor', 'Saylor@gmail.com', 'Female', 'English', '2211223443', 'Bangor', 'Bangor', 'Female', 'Saylor38', 'Saylor38', '2021-03-12 02:21:14', NULL),
(14, 'June', 'Scarlette', 'Scarlette@gmail.com', 'Male', 'English', '2243235456', 'Belfast', 'Belfast', 'Male', 'Scarlette41', 'Scarlette41', '2021-03-12 02:21:14', NULL),
(15, 'Jan', 'Sky', 'Sky@gmail.com', 'Female', 'English', '2267564534', 'Cambridge', 'Cambridge', 'Male', 'Sky44', 'Sky44', '2021-03-12 02:21:14', NULL),
(16, 'Joyce', 'Jan', 'Jan@gmail.com', 'Male', 'Native', '2987654321', 'Bangor', 'Bangor', 'Male', 'Jan', 'Jan', '2021-03-12 02:21:14', NULL),
(17, 'Juliana', 'Ludo', 'Ludo@gmail.com', 'Female', 'Native', '2768543219', 'Belfast', 'Belfast', 'Female', 'Ludo5', 'Ludo5', '2021-03-12 02:21:14', NULL),
(18, 'Sunny', 'Ram', 'Ram@gmail.com', 'Male', 'Native', '2967845321', 'Bradford', 'Bradford', 'Male', 'Ram7', 'Ram7', '2021-03-12 02:21:14', NULL),
(19, 'Selah', 'Sunny', 'Sunny@gmail.com', 'Male', 'Native', '2754321897', 'Belfast', 'Belfast', 'Male', 'Sunny14', 'Sunny14', '2021-03-12 02:21:14', NULL),
(20, 'Sandra', 'Juniper', 'Juniper@gmail.com', 'Male', 'Native', '2809765432', 'Bangor', 'Bangor', 'Female', 'Juniper20', 'Juniper20', '2021-03-12 02:21:14', NULL),
(21, 'Paras', 'Saman', 'Saman@gmail.com', 'Male', 'Native', '2998877662', 'Belfast', 'Belfast', 'Female', 'Saman23', 'Saman23', '2021-03-12 02:21:15', NULL),
(22, 'Jerry', 'Sandra', 'Sandra@gmail.com', 'Male', 'Native', '2298788798', 'Cambridge', 'Cambridge', 'Male', 'Sandra26', 'Sandra26', '2021-03-12 02:21:15', NULL),
(23, 'Jatin', 'Saoirse', 'Saoirse@gmail.com', 'Female', 'Native', '2233445565', 'Aberdeen', 'Aberdeen', 'Female', 'Saoirse28', 'Saoirse28', '2021-03-12 02:21:15', NULL),
(24, 'Judith', 'Sariah', 'Sariah@gmail.com', 'Male', 'Native', '2256778899', 'Belfast', 'Belfast', 'Male,Female', 'Sariah32', 'Sariah32', '2021-03-12 02:21:15', NULL),
(25, 'Sunny', 'Savannah', 'Savannah@gmail.com', 'Male', 'Native', '2223455465', 'Canterbury', 'Canterbury', 'Male', 'Savannah36', 'Savannah36', '2021-03-12 02:21:15', NULL),
(26, 'Juliette', 'Scarlet', 'Scarlet@gmail.com', 'Male', 'Native', '22768899774', 'Armagh', 'Armagh', 'Male', 'Scarlet39', 'Scarlet39', '2021-03-12 02:21:15', NULL),
(29, 'Stella', 'Kings', 'stella@hotmail.com', 'Male', 'Native', '07935282936', '34, Abotswell Drive', 'Porthlethen', 'Male', 'stell', 'kennykyu6479', '2021-03-15 13:45:22', '2021-03-15 13:45:57'),
(30, 'Kelvin', 'Phil', 'kelly@gmail.com', 'Female', 'Native', '', '134 Apartment, Caister Hall', 'Edin', 'Female', 'kelly', 'kennykyu6479', '2021-03-15 14:02:10', '2021-03-15 14:02:59'),
(31, 'Stella', 'George', 'george@gmail.com', 'Male', 'English', '', '14 kingsways', 'Aberdeen', 'Male', 'george', 'kennykyu6479', '2021-03-15 14:33:37', '2021-03-15 14:34:17'),
(32, 'Kelly', 'Jones', 'kely@gmail.com', 'Female', 'Native', '07985945625', '123, kingsway', 'Porthlethen', 'Male', 'kellz', 'kennykyu6479', '2021-03-16 12:31:21', '2021-03-16 12:32:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `fk_cust_id` (`message_customer_id`),
  ADD KEY `fk_tail_id` (`message_tailor_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`),
  ADD UNIQUE KEY `customer_username` (`customer_username`);

--
-- Indexes for table `profile_photo`
--
ALTER TABLE `profile_photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `proof_of_work`
--
ALTER TABLE `proof_of_work`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `fk_tailor_id` (`photo_tailor_id`),
  ADD KEY `fk_customer_id` (`photo_customer_id`);

--
-- Indexes for table `tailors`
--
ALTER TABLE `tailors`
  ADD PRIMARY KEY (`tailor_id`),
  ADD UNIQUE KEY `tailor_email` (`tailor_email`),
  ADD UNIQUE KEY `tailor_username` (`tailor_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `message_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `profile_photo`
--
ALTER TABLE `profile_photo`
  MODIFY `photo_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proof_of_work`
--
ALTER TABLE `proof_of_work`
  MODIFY `photo_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tailors`
--
ALTER TABLE `tailors`
  MODIFY `tailor_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD CONSTRAINT `fk_cust_id` FOREIGN KEY (`message_customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_tail_id` FOREIGN KEY (`message_tailor_id`) REFERENCES `tailors` (`tailor_id`) ON DELETE CASCADE;

--
-- Constraints for table `proof_of_work`
--
ALTER TABLE `proof_of_work`
  ADD CONSTRAINT `fk_customer_id` FOREIGN KEY (`photo_customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_tailor_id` FOREIGN KEY (`photo_tailor_id`) REFERENCES `tailors` (`tailor_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
