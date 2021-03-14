-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 04:12 PM
-- Server version: 10.4.17-MariaDB
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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(6) UNSIGNED NOT NULL,
  `customer_fname` varchar(128) NOT NULL,
  `customer_lname` varchar(128) NOT NULL,
  `customer_email` varchar(64) NOT NULL,
  `customer_gender` set('Male','Female','Undefined') DEFAULT NULL,
  `customer_phone` varchar(16) DEFAULT NULL,
  `customer_address` varchar(128) DEFAULT NULL,
  `customer_city` varchar(64) DEFAULT NULL,
  `customer_username` varchar(32) NOT NULL,
  `customer_password` varchar(16) NOT NULL,
  `customer_reg_date` datetime DEFAULT current_timestamp(),
  `customer_modify_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_fname`, `customer_lname`, `customer_email`, `customer_gender`, `customer_phone`, `customer_address`, `customer_city`, `customer_username`, `customer_password`, `customer_reg_date`, `customer_modify_date`) VALUES
(1, 'First Name', 'Last Name', 'Email', '', 'Phone Number', 'Address', 'City', 'Username', 'Password ', '2021-03-12 09:10:17', NULL),
(2, 'William', 'Donald', 'william@gmail.com', 'Female', '+44 1632 960456', '', 'Liverpool', 'William', 'William45', '2021-03-12 09:10:17', NULL),
(3, 'David', 'Gary', 'david@gmail.com', 'Female', '+44 1632 960689', '', 'Edinburgh', 'David', 'Davidrjr', '2021-03-12 09:10:17', NULL),
(4, 'Charles', 'George', 'charles@gmail.com', 'Female', '+44 1632 960091', '', 'Glasgow', 'Charles', 'Charles', '2021-03-12 09:10:17', NULL),
(5, 'Thomas', 'Kenneth', 'thomas@gmail.com', 'Female', '+44 1632 960501', '', 'GLuton', 'Thomas', 'Thomas', '2021-03-12 09:10:18', NULL),
(6, 'Michael', 'Paul', 'michael@gmail.com', 'Female', '+44 1632 960788', '', 'Bristol', 'Michael', 'Michael', '2021-03-12 09:10:18', NULL),
(7, 'Ronald', 'Edward', 'ronald@gmail.com', 'Female', '+44 1632 960456', '', 'Brighton', 'Ronald', 'Ronald', '2021-03-12 09:10:18', NULL),
(8, 'Larry', 'Jerry', 'larry@gmail.com', 'Female', '+44 1632 960584', '', 'Portsmouth', 'Larry', 'Larry', '2021-03-12 09:10:18', NULL),
(9, 'Donald', 'Dennis', 'donald@gmail.com', 'Female', '+44 1632 960689', '', 'Exeter', 'Donald', 'Donald', '2021-03-12 09:10:18', NULL),
(10, 'Joseph', 'Frank', 'joseph@gmail.com', 'Female', '+44 1632 960091', '', 'Canterbury', 'Joseph', 'Joseph', '2021-03-12 09:10:18', NULL),
(11, 'George', 'Kenneth', 'george@gmail.com', 'Female', '+44 1632 960788', '', 'Blackpool', 'George', 'George', '2021-03-12 09:10:18', NULL),
(12, 'Kenneth', 'Paul', 'kenneth@gmail.com', 'Female', '+44 1632 960456', '', 'Reading', 'Kenneth', 'Kenneth', '2021-03-12 09:10:18', NULL),
(13, 'Daniel', 'Raymond', 'daniel@gmail.com', 'Female', '+44 1632 960456', '', 'Durham', 'Daniel', 'Daniel', '2021-03-12 09:10:18', NULL),
(14, 'Raymond', 'Roger', 'raymond@gmail.com', 'Female', '+44 1632 960584', '', 'Lincoln', 'Raymond', 'Raymond', '2021-03-12 09:10:18', NULL),
(15, 'Roger', 'Stephen', 'roger@gmail.com', 'Female', '+44 1632 960689', '', 'stoke', 'Roger', 'Roger', '2021-03-12 09:10:18', NULL),
(16, 'Gerald', 'Walter', 'gerald@gmail.com', 'Female', '+44 1632 960501', '', 'Winchester', 'Gerald', 'Gerald', '2021-03-12 09:10:18', NULL),
(17, 'Walter', 'James', 'walter@gmail.com', 'Female', '+44 1632 960788', '', 'Address', 'Walter', 'Walter', '2021-03-12 09:10:18', NULL),
(18, 'Terry', 'David', 'terry@gmail.com', 'Female', '+44 1632 960501', '', 'Edinburgh', 'Terry', 'Terry', '2021-03-12 09:10:19', NULL),
(19, 'Wayne', 'Charles', 'wayne@gmail.com', 'Female', '+44 1632 960788', '', 'Glasgow', 'Wayne', 'Wayne', '2021-03-12 09:10:19', NULL),
(20, 'Jack', 'Michael', 'jack@gmail.com', 'Female', '+44 1632 960584', '', 'Bristol', 'Jack', 'Jack', '2021-03-12 09:10:19', NULL),
(21, 'Carl', 'Ronald', 'carl@gmail.com', 'Female', '+44 1632 960689', '', 'Brighton', 'Carl', 'Carl', '2021-03-12 09:10:19', NULL),
(22, 'Henry', 'Larry', 'henry@gmail.com', 'Female', '+44 1632 960091', '', 'Portsmouth', 'Henry', 'Henry56', '2021-03-12 09:10:19', NULL),
(23, 'Willie', 'Donald', 'willie@gmail.com', 'Female', '+44 1632 960501', '', 'Exeter', 'Willie', 'Willie', '2021-03-12 09:10:19', NULL),
(24, 'Bruce', 'Joseph', 'bruce@gmail.com', 'Female', '+44 1632 960788', '', 'Canterbury', 'Bruce', 'Bruce', '2021-03-12 09:10:19', NULL),
(25, 'Joe', 'Dennis', 'joe@gmail.com', 'Female', '+44 1632 960456', '', 'Sheffield', 'Joe', 'Joe', '2021-03-12 09:10:19', NULL),
(26, 'Peter', 'Frank', 'peter@gmail.com', 'Female', '+44 1632 960584', '', 'Blackpool', 'Peter', 'Peter', '2021-03-12 09:10:19', NULL),
(27, 'Anthony', 'Stephen', 'anthony@gmail.com', 'Female', '+44 1632 960788', '', 'Leeds', 'Anthony', 'Anthony', '2021-03-12 09:10:19', NULL),
(28, 'James', 'Michael', 'james@gmail.com', 'Male', '+44 1632 960091', '', 'Edinburgh', 'James', 'James1', '2021-03-12 09:10:19', NULL),
(29, 'Robert', 'Ronald', 'robert@gmail.com', 'Male', '+44 1632 960501', '', 'Aberdeen', 'Robert', 'Robert34', '2021-03-12 09:10:19', NULL),
(30, 'John', 'Larry', 'john@gmail.com', 'Male', '+44 1632 960788', '', 'Manchester', 'John', 'John', '2021-03-12 09:10:19', NULL),
(31, 'Richard', 'Joseph', 'richard@gmail.com', 'Male', '+44 1632 960584', '', 'London', 'Richard', 'Richard', '2021-03-12 09:10:19', NULL),
(32, 'Gary', 'George', 'gary@gmail.com', 'Male', '+44 1632 960501', '', 'Sheffield', 'Gary', 'Gary', '2021-03-12 09:10:19', NULL),
(33, 'Paul', 'Edward', 'paul@gmail.com', 'Male', '+44 1632 960584', '', 'Leicester', 'Paul', 'Paul', '2021-03-12 09:10:19', NULL),
(34, 'Edward', 'Jerry', 'edward@gmail.com', 'Male', '+44 1632 960689', '', 'Chester', 'Edward', 'Edward', '2021-03-12 09:10:19', NULL),
(35, 'Jerry', 'Dennis', 'jerry@gmail.com', 'Male', '+44 1632 960091', '', 'Leeds', 'Jerry', 'Jerry', '2021-03-12 09:10:19', NULL),
(36, 'Dennis', 'Frank', 'dennis@gmail.com', 'Male', '+44 1632 960501', '', 'Warwick', 'Dennis', 'Dennis', '2021-03-12 09:10:19', NULL),
(37, 'Frank', 'Daniel', 'frank@gmail.com', 'Male', '+44 1632 960788', '', 'Coventry', 'Frank', 'Frank', '2021-03-12 09:10:19', NULL),
(38, 'Stephen', 'Gerald', 'stephen@gmail.com', 'Male', '+44 1632 960091', '', 'Hereford', 'Stephen', 'Stephen', '2021-03-12 09:10:19', NULL),
(39, 'Harold', 'Robert', 'harold@gmail.com', 'Male', '+44 1632 960456', '', 'Aberdeen', 'Harold', 'Harold', '2021-03-12 09:10:20', NULL),
(40, 'Steven', 'John', 'steven@gmail.com', 'Male', '+44 1632 960584', '', 'Manchester', 'Steven', 'Steven', '2021-03-12 09:10:20', NULL),
(41, 'Douglas', 'William', 'douglas@gmail.com', 'Male', '+44 1632 960689', '', 'Liverpool', 'Douglas', 'Douglas', '2021-03-12 09:10:20', NULL),
(42, 'Lawrence', 'Richard', 'lawrence@gmail.com', 'Male', '+44 1632 960091', '', 'London', 'Lawrence', 'Lawrence', '2021-03-12 09:10:20', NULL),
(43, 'Arthur', 'Thomas', 'arthur@gmail.com', 'Male', '+44 1632 960456', '', 'GLuton', 'Arthur', 'Arthur', '2021-03-12 09:10:20', NULL),
(44, 'Billy', 'Daniel', 'billy@gmail.com', 'Male', '+44 1632 960689', '', 'Reading', 'Billy', 'Billy78', '2021-03-12 09:10:20', NULL),
(45, 'Roy', 'Raymond', 'roy@gmail.com', 'Male', '+44 1632 960091', '', 'Leicester', 'Roy', 'Roy', '2021-03-12 09:10:20', NULL),
(46, 'Ralph', 'Roger', 'ralph@gmail.com', 'Male', '+44 1632 960501', '', 'Chester', 'Ralph', 'Ralph', '2021-03-12 09:10:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tailors`
--

CREATE TABLE `tailors` (
  `tailor_id` int(6) UNSIGNED NOT NULL,
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
  `tailor_reg_date` datetime DEFAULT current_timestamp(),
  `tailor_modify_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tailors`
--

INSERT INTO `tailors` (`tailor_id`, `tailor_fname`, `tailor_lname`, `tailor_email`, `tailor_gender`, `tailor_style`, `tailor_phone`, `tailor_address`, `tailor_city`, `tailor_pref`, `tailor_username`, `tailor_password`, `tailor_reg_date`, `tailor_modify_date`) VALUES
(1, 'ken', 'Wood', 'ken@gmail.com', 'Male', 'English', '869754326', 'Kingsway Palace', 'Belfast', 'Male', 'kennywood', 'kennykyu6479', '2021-03-12 11:58:16', NULL),
(2, 'Dennis', 'Woody', 'deny@gmail.com', 'Male', 'English', '869754326', 'Kingsway Palace', 'Belfast', 'Male,Female', 'deenness', 'dennel6479', '2021-03-12 11:58:16', NULL),
(3, 'Joy', 'Paras', 'paras@gmail.com', 'Male', 'English', '2123456789', 'Aberdeen', 'Aberdeen', 'Male', 'Paras1', 'Paras1', '2021-03-12 12:10:19', '2021-03-12 12:14:33'),
(4, 'Julia', 'Jerry', 'Jerry@gmail.com', 'Male', '', '2564321789', 'Bath', 'Bath', 'Male', 'Jerry4', 'Jerry4', '2021-03-12 12:10:19', NULL),
(5, 'Juli', 'Jatin', 'Jatin@gmail.com', 'Male', '', '2896754321', 'Birmingham', 'Birmingham', 'Male,Female', 'Jatin6', 'Jatin6', '2021-03-12 12:10:19', NULL),
(6, 'Saylor', 'Joyce', 'Joyce@gmail.com', 'Female', '', '2546789321', 'Canterbury', 'Canterbury', 'Male', 'Joyce9', 'Joyce9', '2021-03-12 12:10:19', NULL),
(7, 'Scarlett', 'Julia', 'Julia@gmail.com', 'Female', '', '2213456789', 'Bangor', 'Bangor', 'Male', 'Julia11', 'Julia11', '2021-03-12 12:10:19', NULL),
(8, 'Scout', 'Juli', 'Juli@gmail.com', 'Female', '', '2587634923', 'Bath', 'Bath', 'Female', 'Juli13', 'Juli13', '2021-03-12 12:10:19', NULL),
(9, 'Sky', 'Juliet', 'Juliet@gmail.com', 'Male', '', '2564321879', 'Birmingham', 'Birmingham', 'Female', 'Juliet15', 'Juliet15', '2021-03-12 12:10:19', NULL),
(10, 'Samara', 'Julissa', 'Julissa@gmail.com', 'Female', '', '2654321789', 'Canterbury', 'Canterbury', 'Male,Female', 'Julissa18', 'Julissa18', '2021-03-12 12:10:19', NULL),
(11, 'Saniyah', 'Saige', 'Saige@gmail.com', 'Male', '', '2408935678', 'Armagh', 'Armagh', 'Male', 'Saige21', 'Saige21', '2021-03-12 12:10:19', NULL),
(12, 'Tom', 'Samira', 'Samira@gmail.com', 'Female', '', '2267543219', 'Bradford', 'Bradford', 'Male,Female', 'Samira25', 'Samira25', '2021-03-12 12:10:19', NULL),
(13, 'Ram', 'Sara', 'Sara@gmail.com', 'Female', '', '2277889955', 'Bangor', 'Bangor', 'Male', 'Sara29', 'Sara29', '2021-03-12 12:10:19', NULL),
(14, 'Joyce', 'Sarai', 'Sarai@gmail.com', 'Male', '', '2299786587', 'Bath', 'Bath', 'Male', 'Sarai31', 'Sarai31', '2021-03-12 12:10:20', NULL),
(15, 'Julia', 'Sariyah', 'Sariyah@gmail.com', 'Male', '', '2244332266', 'Birmingham', 'Birmingham', 'Female', 'Sariyah33', 'Sariyah33', '2021-03-12 12:10:20', NULL),
(16, 'Juli', 'Savanna', 'Savanna@gmail.com', 'Female', '', '2211668899', 'Cambridge', 'Cambridge', 'Female', 'Savanna35', 'Savanna35', '2021-03-12 12:10:20', NULL),
(17, 'Juliet', 'Sawyer', 'Sawyer@gmail.com', 'Female', '', '2288665645', 'Aberdeen', 'Aberdeen', 'Male', 'Sawyer37', 'Sawyer37', '2021-03-12 12:10:20', NULL),
(18, 'Julissa', 'Scarlett', 'Scarlett@gmail.com', 'Female', '', '2255667788', 'Bath', 'Bath', 'Female', 'Scarlett40', 'Scarlett40', '2021-03-12 12:10:20', NULL),
(19, 'Juniper', 'Scout', 'Scout@gmail.com', 'Male', '', '2299788767', 'Birmingham', 'Birmingham', 'Male,Female', 'Scout42', 'Scout42', '2021-03-12 12:10:20', NULL),
(20, 'Joyce', 'Skye', 'Skye@gmail.com', 'Female', '', '2211345466', 'Bath', 'Bath', 'Female', 'Skye45', 'Skye45', '2021-03-12 12:10:20', NULL),
(21, 'Judith', 'Tom', 'Tom@gmail.com', 'Male', 'English', '2234567891', 'Armagh', 'Armagh', 'Female', 'Tom3', 'Tom3', '2021-03-12 12:10:20', NULL),
(22, 'Juliet', 'Joy', 'Joy@gmail.com', 'Male', 'English', '2657894321', 'Cambridge', 'Cambridge', 'Female', 'Joy8', 'Joy8', '2021-03-12 12:10:20', NULL),
(23, 'Scarlette', 'Juliana', 'Juliana@gmail.com', 'Female', 'English', '4023456789', 'Armagh', 'Armagh', 'Male', 'Juliana12', 'Juliana12', '2021-03-12 12:10:20', NULL),
(24, 'Skye', 'Julieta', 'Julieta@gmail.com', 'Female', 'English', '2789654321', 'Bradford', 'Bradford', 'Male', 'Julieta16', 'Julieta16', '2021-03-12 12:10:20', NULL),
(25, 'Samira', 'June', 'June@gmail.com', 'Female', 'English', '2908765432', 'Aberdeen', 'Aberdeen', 'Male', 'June', 'June', '2021-03-12 12:10:20', NULL),
(26, 'Saoirse', 'Salma', 'Salma@gmail.com', 'Female', 'English', '2890765432', 'Bath', 'Bath', 'Male', 'Salma22', 'Salma22', '2021-03-12 12:10:20', NULL),
(27, 'Jan', 'Samara', 'Samara@gmail.com', 'Female', 'English', '2973467893', 'Birmingham', 'Birmingham', 'Male', 'Samara24', 'Samara24', '2021-03-12 12:10:20', NULL),
(28, 'Ludo', 'Saniyah', 'Saniyah@gmail.com', 'Male', 'English', '2255566432', 'Canterbury', 'Canterbury', 'Male', 'Saniyah27', 'Saniyah27', '2021-03-12 12:10:20', NULL),
(29, 'Joy', 'Sarah', 'Sarah@gmail.com', 'Male', 'English', '2254763432', 'Armagh', 'Armagh', 'Male,Female', 'Sarah30', 'Sarah30', '2021-03-12 12:10:20', NULL),
(30, 'Juliana', 'Sasha', 'Sasha@gmail.com', 'Female', 'English', '2211889955', 'Bradford', 'Bradford', 'Male', 'Sasha34', 'Sasha34', '2021-03-12 12:10:21', NULL),
(31, 'Julieta', 'Saylor', 'Saylor@gmail.com', 'Female', 'English', '2211223443', 'Bangor', 'Bangor', 'Female', 'Saylor38', 'Saylor38', '2021-03-12 12:10:21', NULL),
(32, 'June', 'Scarlette', 'Scarlette@gmail.com', 'Male', 'English', '2243235456', 'Belfast', 'Belfast', 'Male', 'Scarlette41', 'Scarlette41', '2021-03-12 12:10:21', NULL),
(33, 'Jan', 'Sky', 'Sky@gmail.com', 'Female', 'English', '2267564534', 'Cambridge', 'Cambridge', 'Male', 'Sky44', 'Sky44', '2021-03-12 12:10:21', NULL),
(34, 'Joyce', 'Jan', 'Jan@gmail.com', 'Male', 'Native', '2987654321', 'Bangor', 'Bangor', 'Male', 'Jan', 'Jan', '2021-03-12 12:10:21', NULL),
(35, 'Juliana', 'Ludo', 'Ludo@gmail.com', 'Female', 'Native', '2768543219', 'Belfast', 'Belfast', 'Female', 'Ludo5', 'Ludo5', '2021-03-12 12:10:21', NULL),
(36, 'Sunny', 'Ram', 'Ram@gmail.com', 'Male', 'Native', '2967845321', 'Bradford', 'Bradford', 'Male', 'Ram7', 'Ram7', '2021-03-12 12:10:21', NULL),
(37, 'Scarlet', 'Judith', 'Judith@gmail.com', 'Female', 'Native', '2321456789', 'Aberdeen', 'Aberdeen', '', 'Judith10', 'Judith10', '2021-03-12 12:10:21', NULL),
(38, 'Selah', 'Sunny', 'Sunny@gmail.com', 'Male', 'Native', '2754321897', 'Belfast', 'Belfast', 'Male', 'Sunny14', 'Sunny14', '2021-03-12 12:10:21', NULL),
(39, 'Saman', 'Juliette', 'Juliette@gmail.com', 'Female', 'Native', '2678954321', 'Cambridge', 'Cambridge', '', 'Juliette17', 'Juliette17', '2021-03-12 12:10:21', NULL),
(40, 'Sandra', 'Juniper', 'Juniper@gmail.com', 'Male', 'Native', '2809765432', 'Bangor', 'Bangor', 'Female', 'Juniper20', 'Juniper20', '2021-03-12 12:10:21', NULL),
(41, 'Paras', 'Saman', 'Saman@gmail.com', 'Male', 'Native', '2998877662', 'Belfast', 'Belfast', 'Female', 'Saman23', 'Saman23', '2021-03-12 12:10:21', NULL),
(42, 'Jerry', 'Sandra', 'Sandra@gmail.com', 'Male', 'Native', '2298788798', 'Cambridge', 'Cambridge', 'Male', 'Sandra26', 'Sandra26', '2021-03-12 12:10:21', NULL),
(43, 'Jatin', 'Saoirse', 'Saoirse@gmail.com', 'Female', 'Native', '2233445565', 'Aberdeen', 'Aberdeen', 'Female', 'Saoirse28', 'Saoirse28', '2021-03-12 12:10:21', NULL),
(44, 'Judith', 'Sariah', 'Sariah@gmail.com', 'Male', 'Native', '2256778899', 'Belfast', 'Belfast', 'Male,Female', 'Sariah32', 'Sariah32', '2021-03-12 12:10:21', NULL),
(45, 'Sunny', 'Savannah', 'Savannah@gmail.com', 'Male', 'Native', '2223455465', 'Canterbury', 'Canterbury', 'Male', 'Savannah36', 'Savannah36', '2021-03-12 12:10:21', NULL),
(46, 'Juliette', 'Scarlet', 'Scarlet@gmail.com', 'Male', 'Native', '2276889977', 'Armagh', 'Armagh', 'Male', 'Scarlet39', 'Scarlet39', '2021-03-12 12:10:21', NULL),
(47, 'Paras', 'Selah', 'Selah@gmail.com', 'Female', 'Native', '2209786756', 'Bradford', 'Bradford', '', 'Selah43', 'Selah43', '2021-03-12 12:10:21', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`),
  ADD UNIQUE KEY `customer_username` (`customer_username`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `tailors`
--
ALTER TABLE `tailors`
  MODIFY `tailor_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
