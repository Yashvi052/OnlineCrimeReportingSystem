-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 02:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `c_id` int(11) NOT NULL,
  `a_no` bigint(12) NOT NULL,
  `location` varchar(50) NOT NULL,
  `type_crime` varchar(50) NOT NULL,
  `d_o_c` date NOT NULL,
  `description` varchar(7000) NOT NULL,
  `inc_status` varchar(50) DEFAULT 'Unassigned',
  `pol_status` varchar(50) DEFAULT 'null',
  `p_id` varchar(50) DEFAULT 'Null'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`c_id`, `a_no`, `location`, `type_crime`, `d_o_c`, `description`, `inc_status`, `pol_status`, `p_id`) VALUES
(1, 874585215697, 'Rajkot', 'Pick Pocket', '2021-02-10', 'My wallet was Stolen near Railway Station', 'Assigned', 'In Process', 'a101'),
(2, 987458748569, 'Goa', 'Theft', '2021-02-10', 'Someone broke into my house ', 'Assigned', 'ChargeSheet Filed', 'j1'),
(3, 987458748569, 'Ahmedabad', 'Pick Pocket', '2021-02-01', 'Near Navrangpura BRTS Station', 'Assigned', 'In Process', 'j1'),
(8, 987458748569, 'Ahmedabad', 'Theft', '2021-02-09', 'help', 'Assigned', 'ChargeSheet Filed', 'p1'),
(9, 987458748569, 'Ahmedabad', 'Pick Pocket', '2021-02-10', 'BRTS', 'Unassigned', 'null', 'Null'),
(10, 987458748569, 'Ahmedabad', 'Molestation', '2021-02-10', 'helpp\r\n', 'Assigned', 'In Process', 'p1'),
(32, 859674851223, 'Ahmedabad', 'Theft', '2021-02-11', 'help', 'Unassigned', 'null', 'Null'),
(33, 859674851223, 'Ahmedabad', 'Theft', '2021-02-11', 'help', 'Unassigned', 'null', 'Null'),
(34, 987458748569, 'Ahmedabad', 'Theft', '2021-02-11', 'help', 'Unassigned', 'null', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE `head` (
  `h_id` varchar(50) NOT NULL,
  `h_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`h_id`, `h_pass`) VALUES
('head@delhi', 'head');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `p_name` varchar(50) NOT NULL,
  `p_id` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `p_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`p_name`, `p_id`, `spec`, `location`, `p_pass`) VALUES
('Manish Singh', 'a101', 'All', 'Rajkot', 'manish'),
('Jay Singh', 'a102', 'All', 'Isanpur', 'jay'),
('dharam', 'd1', 'Narcotics', 'Goa', 'dharam'),
('harsh', 'h1', 'molestation', 'Goa', 'harsh'),
('jay', 'j1', 'molestation', 'Ahmedabad', 'jay'),
('Monica', 'm1', 'All', 'Delhi', 'monica'),
('piyush', 'p1', 'all', 'Ahmedabad', 'piyush'),
('saurav', 's1', 'Rape', 'Rajkot', 'saurav'),
('Suvendu Doshi', 't101', 'Robbery', 'Delhi', 'suvendu');

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE `police_station` (
  `i_id` varchar(50) NOT NULL,
  `i_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `i_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`i_id`, `i_name`, `location`, `i_pass`) VALUES
('d1', 'Dhruvi', 'Rajkot', 'dhruvi'),
('r11', 'Raj', 'Ahmedabad', 'raj'),
('rachel@gmail.com', 'Rachel', 'Delhi', 'rachel'),
('s1', 'Singham', 'Isanpur', 'singham'),
('shivam@goa', 'Shivam', 'Goa', 'shivam');

-- --------------------------------------------------------

--
-- Table structure for table `update_case`
--

CREATE TABLE `update_case` (
  `c_id` int(11) NOT NULL,
  `d_o_u` timestamp NOT NULL DEFAULT current_timestamp(),
  `case_update` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_case`
--

INSERT INTO `update_case` (`c_id`, `d_o_u`, `case_update`) VALUES
(1, '2021-02-11 07:41:40', 'Criminal Verified'),
(3, '2021-02-11 07:48:22', 'Criminal Verified'),
(3, '2021-02-11 07:48:30', 'Criminal Caught'),
(2, '2021-02-11 08:52:23', 'Criminal Verified'),
(2, '2021-02-11 08:52:30', 'Criminal Charged'),
(2, '2021-02-11 08:52:33', 'Close'),
(8, '2021-02-11 17:11:42', 'Criminal Verified'),
(8, '2021-02-11 17:11:50', 'Criminal Caught'),
(8, '2021-02-11 17:12:35', 'Closed'),
(10, '2021-02-12 08:46:37', 'Criminal Verified');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_name` varchar(50) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `u_pass` varchar(50) NOT NULL,
  `u_addr` varchar(100) NOT NULL,
  `a_no` bigint(12) NOT NULL,
  `gen` varchar(15) NOT NULL,
  `mob` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_name`, `u_id`, `u_pass`, `u_addr`, `a_no`, `gen`, `mob`) VALUES
('Irish', 'irishajaybharti11@gmail.com', 'irish123', 'bopal', 789845651245, 'Male', 7898784560),
('Ravechi', 'rajaybharti23@gmail.com', 'ravechi23', 'Rajkot', 859674851223, 'Female', 8795465870),
('Nisarg', 'nisarg@hotmail.com', 'nisarg', 'rajkot', 874585215697, 'Male', 6785412589),
('Joey', 'Joey@gmail.com', 'joey123', 'NewYork', 878954782110, 'Male', 9875478120),
('Yashvi', 'yashvi@yahoo.com', 'yashvi123', 'navrangpura', 987458748569, 'Male', 8569745874);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `police_station`
--
ALTER TABLE `police_station`
  ADD PRIMARY KEY (`i_id`),
  ADD UNIQUE KEY `location` (`location`);

--
-- Indexes for table `update_case`
--
ALTER TABLE `update_case`
  ADD UNIQUE KEY `d_o_u` (`d_o_u`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`a_no`),
  ADD UNIQUE KEY `u_id` (`u_id`),
  ADD UNIQUE KEY `mob` (`mob`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
