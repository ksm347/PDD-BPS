-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2017 at 07:56 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`, `name`, `position`, `email`, `date`) VALUES
('adil', 'adil1234', 'Adil Bashir', 'Member', 'adil@example.com', '2014-12-22'),
('admin', 'kamran1234', 'Kamran Saleem', 'Head', 'ksm.347@gmail.com', '2014-06-22'),
('harry', 'harry1234', 'Harry', 'Supervisor', 'harry@example.com', '2017-08-19'),
('miya', 'miya1234', 'Miya Shuaib', 'Member', 'miya@example.com', '2014-12-22'),
('rizwan', 'rizwan1234', 'Qazi Rizwan', 'Member', 'rizwan@example.com', '2014-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `bill_history`
--

CREATE TABLE `bill_history` (
  `consumer_id` bigint(13) NOT NULL,
  `nov_2014` int(5) DEFAULT NULL,
  `oct_2014` int(5) DEFAULT NULL,
  `sep_2014` int(5) DEFAULT NULL,
  `aug_2014` int(5) DEFAULT NULL,
  `jul_2014` int(5) DEFAULT NULL,
  `jun_2014` int(5) DEFAULT NULL,
  `may_2014` int(5) DEFAULT NULL,
  `apr_2014` int(5) DEFAULT NULL,
  `mar_2014` int(5) DEFAULT NULL,
  `feb_2014` int(5) DEFAULT NULL,
  `jan_2014` int(5) DEFAULT NULL,
  `dec_2013` int(5) DEFAULT NULL,
  `nov_2013` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_history`
--

INSERT INTO `bill_history` (`consumer_id`, `nov_2014`, `oct_2014`, `sep_2014`, `aug_2014`, `jul_2014`, `jun_2014`, `may_2014`, `apr_2014`, `mar_2014`, `feb_2014`, `jan_2014`, `dec_2013`, `nov_2013`) VALUES
(1204050004566, 212, 665, 446, 2651, 2063, 112, 1686, 1621, 115, 2315, 1957, 1282, 940),
(1204050004567, 1132, 821, 411, 2651, 1969, 112, 93, 2651, 1615, 657, 654, 315, 940),
(1204050004568, 206, 139, 2276, 1919, 2819, 1147, 2350, 2268, 180, 3134, 2687, 2412, 1225),
(1204050004569, 1772, 805, 888, 1035, 579, 732, 1008, 976, 1209, 1298, 1335, 1255, 1006),
(1204050004570, 805, 423, 102, 253, 296, 474, 794, 757, 1027, 1130, 1173, 1080, 791),
(1204050004571, 740, 2068, 759, 3553, 615, 837, 1236, 1190, 1527, 1655, 1062, 639, 1232),
(1204050004572, 265, 1477, 411, 2651, 1969, 112, 93, 2651, 1615, 657, 654, 315, 940),
(1204050004573, 594, 438, 654, 253, 1957, 1282, 691, 470, 694, 1096, 660, 1282, 1344),
(1204050004574, 55, 39, 844, 1232, 790, 728, 763, 837, 1997, 467, 2326, 1516, 1822),
(1204050004575, 790, 1822, 791, 480, 747, 1008, 725, 785, 1092, 788, 735, 1329, 1046),
(1204050004576, 906, 23, 2276, 1919, 2687, 1845, 1108, 1496, 1112, 1613, 1069, 1492, 1225),
(1204050004577, 515, 67, 1093, 674, 2218, 1919, 2214, 2222, 2261, 1496, 1062, 1962, 1488),
(1204050004578, 541, 198, 1627, 1341, 2063, 722, 1686, 1621, 757, 2315, 1957, 1736, 809),
(1204050004579, 163, 727, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004580, 74, 365, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004581, 136, 162, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004582, 1234, 253, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004583, 249, 510, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004584, 1418, 2531, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004585, 93, 42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004586, 60, 97, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004590, 192, 173, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004591, 727, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004592, 2245, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004593, 210, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `ack_no` bigint(10) NOT NULL,
  `consumer_id` bigint(13) NOT NULL,
  `name` char(40) NOT NULL,
  `email` char(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `type` char(30) NOT NULL,
  `details` text NOT NULL,
  `date` date NOT NULL,
  `status` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`ack_no`, `consumer_id`, `name`, `email`, `mobile`, `type`, `details`, `date`, `status`) VALUES
(182318793, 1204050004569, 'Kashif Khan', 'kashif@example.com', 9898239482, 'Supply Complaints', 'I have been trying to get in contact with the local line man of our area but of no avail.\r\nKindly look into the matter as my house is without power from past week.', '2014-11-21', 'completed'),
(393690321, 1204050004566, 'Kamran Saleem', 'ksm.347@gmail.com', 9876545678, 'General Complaints', 'Too many people using illegal power in my colony, resulting in low voltage.', '2014-12-31', 'in queue'),
(499538845, 1204050004566, 'Kamran Saleem', 'ksm.347@gmail.com', 9879886716, 'General Complaints', 'Line man not attending to difficulties we are facing', '2014-12-04', 'under process'),
(514160156, 1204050004570, 'Yousuf Jameel', 'yousuf@example.com', 9469739761, 'Supply Complaints', 'My electricity connection is not connecting from past 3 weeks.\r\nThank you and oblige', '2014-11-28', 'under process'),
(940728081, 1204050004567, 'Adil', 'adil@example.com', 9879879766, 'Bill Complaints', 'Too much Electricity bill charged, even after I was not at home for most of the month', '2014-12-29', 'in queue');

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `consumer_id` bigint(13) NOT NULL,
  `name` char(40) NOT NULL,
  `father_husband_trustee` char(40) NOT NULL,
  `comm_address_line_1` text NOT NULL,
  `comm_address_line_2` text NOT NULL,
  `comm_city` char(15) NOT NULL,
  `comm_pin` int(6) NOT NULL,
  `phone` bigint(12) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address_line_1` text NOT NULL,
  `address_line_2` text NOT NULL,
  `city` char(15) NOT NULL,
  `pin` int(6) NOT NULL,
  `plot_size` int(15) NOT NULL,
  `coverage` int(15) NOT NULL,
  `category` char(25) NOT NULL,
  `purpose` char(17) NOT NULL,
  `kw` int(2) NOT NULL,
  `type` char(10) NOT NULL,
  `dedicated_line` char(3) NOT NULL,
  `own_meter` char(3) NOT NULL,
  `ack_no` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table contains data for all consumers';

--
-- Dumping data for table `consumer`
--

INSERT INTO `consumer` (`consumer_id`, `name`, `father_husband_trustee`, `comm_address_line_1`, `comm_address_line_2`, `comm_city`, `comm_pin`, `phone`, `mobile`, `email`, `address_line_1`, `address_line_2`, `city`, `pin`, `plot_size`, `coverage`, `category`, `purpose`, `kw`, `type`, `dedicated_line`, `own_meter`, `ack_no`) VALUES
(1204050004566, 'Kamran Saleem', 'Mohd Saleem', 'H No. 32, Mustafabad Colony', 'Zakura', 'Srinagar', 190006, 1942486767, 9419409091, 'ksm.347@gmail.com', 'H. No. 32, Mustafabad Colony', 'Zakura', 'Srinagar', 190006, 2500, 2000, 'Domestic', 'Residential', 5, 'Permanent', 'No', 'No', NULL),
(1204050004567, 'Adil Bashir', 'Bashir', 'H No. 58, Barzullah', 'Barzullah', 'Srinagar', 190001, 1942490967, 8415799878, 'adilbashir36@gmail.com', 'H. No. 58, Barzullah', 'Barzullah', 'Srinagar', 190001, 2500, 2000, 'Domestic', 'Residential', 5, 'Permanent', 'No', 'No', NULL),
(1204050004568, 'Imran Khan', 'Waseem Khan', 'H. No. 7 Al- Haider Colony', 'Hyderpora', 'Srinagar', 190003, 1942455566, 9419000000, 'imran@example.com', 'H. No. 7 Al- Haider Colony', 'Hyderpora', 'Srinagar', 190003, 3000, 2000, 'Non-Domestic', 'Non-Residential', 3, 'Temporary', 'No', 'No', 475595010),
(1204050004569, 'Kashif Khan', 'Sameer Khan', 'House No. 34, Iqbalabad', 'Bemina', 'Srinagar', 190003, 19424876876, 7687678647, 'ksm.347@gmail.com', 'House No. 34, Iqbalabad', 'Bemina', 'Srinagar', 190003, 2000, 1500, 'Domestic', 'Residential', 2, 'Permanent', 'Yes', 'No', 416585286),
(1204050004570, 'Yousuf Jameel', 'Hafizullah', 'H. No 97 Mustafabad Colony', 'Zakura', 'Srinagar', 190006, 1912290876, 0, 'yousuf@example.com', 'H. No 97 Mustafabad Colony', 'Zakura', 'Srinagar', 190006, 4000, 3000, 'Domestic', 'Residential', 5, 'Permanent', 'No', 'No', 475595018),
(1204050004571, 'Mukhtar Ahmed Badyari', 'Ghulam Ahmed Badyari', 'H. No.34 Bismillah Lane', 'Lal Bazar', 'Srinagar', 190004, 1942778998, 0, 'badyaribrothers@example.com', 'H. No.34 Bismillah Lane', 'Lal Bazar', 'Srinagar', 190004, 5000, 3000, 'Domestic', 'Residential', 8, 'Permanent', 'Yes', 'No', 475594666),
(1204050004572, 'Ab Wahid Khan', 'Shahid Khan', 'H. No. 93, Bismillah Colony', 'Jawahar Nagar', 'Srinagar', 190001, 1982678943, 0, 'wahid@example.com', 'H. No. 93, Bismillah Colony', 'Jawahar Nagar', 'Srinagar', 190001, 3400, 2000, 'Domestic', 'Residential', 6, 'Permanent', 'No', 'No', 475594996),
(1204050004573, 'Lateef Ahmed', 'Shareef Ahmed', 'Shah Villa Al Hijaz Lane', 'Qamarwari', 'Srinagar', 190002, 1948768767, 8765786546, 'ksm.347@gmail.com', 'Shah Villa Al Hijaz Lane', 'Qamarwari', 'Srinagar', 190002, 2000, 1700, 'Domestic', 'Residential', 2, 'Permanent', 'No', 'No', 464111328),
(1204050004574, 'Mohammad Habib', 'Habibullah', 'House No. 56 Peer Mohalla', 'Peer Bagh', 'Srinagar', 190005, 1942678765, 8714878979, 'habib@example.com', 'House No. 56 Peer Mohalla', 'Peer Bagh', 'Srinagar', 190005, 2000, 1000, 'LT Industrial Supply', 'Non-Residential', 3, 'Temporary', 'No', 'No', 404215494),
(1204050004575, 'Farooq Ahmed', 'Ghulam Ahmed', 'H. No. 79 Gole Market', 'Karan Nagar', 'Srinagar', 190001, 1942342349, 9096459012, 'ksm.347@gmail.com', 'H. No. 79 Gole Market', 'Karan Nagar', 'Srinagar', 190001, 4000, 2500, 'Domestic', 'Residential', 5, 'Permanent', 'No', 'No', 475595023),
(1204050004576, 'Firdous Yousuf Shah', 'Ghulam Nabi Shah', 'H. No. 12, Bilal Colony-A', 'Zakura', 'Srinagar', 190006, 1942425632, 0, 'firdous@example.com', 'H. No. 12, Bilal Colony-A', 'Zakura', 'Srinagar', 190006, 10000, 8000, 'Agriculture Supply', 'Non-Residential', 20, 'Temporary', 'No', 'Yes', 475595029),
(1204050004577, 'Mohd Shafi Magray', 'Mohd Rafiq Magray', 'House No. 34 Bait-ul-Magray Rose Lane', 'Rajbagh', 'Srinagar', 190003, 1949879879, 7899939829, 'magray@example.com', 'House No. 34 Bait-ul-Magray Rose Lane', 'Rajbagh', 'Srinagar', 190003, 3000, 2200, 'Domestic', 'Non-Residential', 2, 'Temporary', 'No', 'No', 739908854),
(1204050004578, 'Ismail Khan', 'Rafiq Khan', 'House No. 71 Shah Lane', 'Humhama', 'Srinagar', 190005, 1947698796, 9871297786, 'ismail@example.com', 'House No. 71 Shah Lane', 'Humhama', 'Srinagar', 190005, 2000, 1700, 'Agriculture Supply', 'Residential', 2, 'Permanent', 'Yes', 'Yes', 825792100),
(1204050004579, 'Ehtisham Rather', 'Maqbool Rather', 'House No. 121 Rather Mansion', 'Khanyar', 'Srinagar', 190004, 1949867687, 9813876987, 'rather@example.com', 'House No. 121 Rather Mansion', 'Khanyar', 'Srinagar', 190004, 3000, 1500, 'Domestic', 'Residential', 3, 'Permanent', 'No', 'No', 603515624),
(1204050004580, 'Mohd Rafiq', 'Mohd Lateef', 'House No. 212 Al-Farooq Colony', 'Jawahar Nagar', 'Srinagar', 190002, 1942878787, 8732878287, 'rafiq@example.com', 'House No. 212 Al-Farooq Colony', 'Jawahar Nagar', 'Srinagar', 190002, 2000, 1400, 'Agriculture Supply', 'Non-Residential', 2, 'Permanent', 'No', 'No', 336995442),
(1204050004581, 'Bashir Ahmed', 'Ghulam Ahmed', 'House No. 91 Raahat Lane', 'Hawal', 'Srinagar', 190008, 1942989082, 9811987989, 'bashir@example.com', 'House No. 91 Raahat Lane', 'Hawal', 'Srinagar', 190008, 1800, 1500, 'Agriculture Supply', 'Non-Residential', 2, 'Temporary', 'No', 'Yes', 160671657),
(1204050004582, 'Ghulam Nabi', 'Ghulam Mohd', 'House No. 33 Akber Lane', 'Hyderpora', 'Srinagar', 190016, 1942788897, 7813987685, 'nabi@example.com', 'House No. 33 Akber Lane', 'Hyderpora', 'Srinagar', 190016, 4000, 2000, 'LT Industrial Supply', 'Residential', 2, 'Temporary', 'No', 'No', 906331380),
(1204050004583, 'Ahsan ul Haq', 'Imran Rouf', 'House No. 22 Exchange Road', 'Rajbagh', 'Srinagar', 190003, 1945666256, 7761762872, 'ahsan@example.com', 'House No. 22 Exchange Road', 'Rajbagh', 'Srinagar', 190003, 2300, 1800, 'Agriculture Supply', 'Residential', 1, 'Permanent', 'No', 'No', 819363064),
(1204050004584, 'Ab Wahid Khan', 'Shahid Khan', 'H. No. 93, Bismillah Colony', 'Jawahar Nagar', 'Srinagar', 190001, 1982678943, 0, 'wahid@example.com', 'H. No. 93, Bismillah Colony', 'Jawahar Nagar', 'Srinagar', 190001, 3400, 2000, 'Domestic', 'Residential', 6, 'Permanent', 'No', 'No', 475594996),
(1204050004585, 'Ismail Akbar', 'Mohd Akbar', 'Houser No. 2 Rehmat Lane', 'Humhama', 'Srinagar', 190008, 1942288787, 9814986876, 'ksm.347@gmail.com', 'Houser No. 2 Rehmat Lane', 'Humhama', 'Srinagar', 190008, 1800, 1600, 'LT Industrial Supply', 'Residential', 1, 'Permanent', 'No', 'No', 563205295),
(1204050004586, 'Rashid Baqir Khan', 'Abdul Baqir Khan', 'Tent No. 35 Shaheed Bakri Lane', 'Beehama', 'Ganderbal', 190015, 1948767986, 7812686512, 'baqir@example.com', 'Tent No. 35 Shaheed Bakri Lane', 'Beehama', 'Ganderbal', 190015, 500, 300, 'Domestic', 'Residential', 1, 'Temporary', 'Yes', 'Yes', 706163194),
(1204050004590, 'Shakoor Amhad', 'Ghulam Ahmed', 'House No 34 Bismillah Lane', 'Islamabad', 'Islamabad', 190006, 1948768768, 9832728347, 'ksm.347@gmail.com', 'House No 34 Bismillah Lane', 'Islamabad', 'Islamabad', 190003, 3000, 2500, 'Domestic', 'Non-Residential', 1, 'Temporary', 'No', 'No', 247965494),
(1204050004591, 'Mohd Iftikhar', 'Haji Mushtaq', 'House No 3, Mohalla Abu Bakr', 'Khanyar', 'Srinagar', 190004, 1947654567, 4567890987, 'ksm.347@gmail.com', 'House No 3, Mohalla Abu Bakr', 'Khanyar', 'Srinagar', 190004, 1500, 1300, 'Domestic', 'Residential', 1, 'Permanent', 'No', 'No', 899902343),
(1204050004592, 'Mushtaq Ahmed', 'Fayaz Ahmed', 'House No 98 Shah Lane', 'Hyderpora', 'Srinagar', 190003, 1947654567, 4567898765, 'ksm.347@gmail.com', 'House No 98 Shah Lane', 'Hyderpora', 'Srinagar', 190003, 2000, 1700, 'Agriculture Supply', 'Non-Residential', 3, 'Temporary', 'No', 'No', 840386284),
(1204050004593, 'Mohd Ghani', 'Abdul Qadir', 'House No. 99 Mubarak Lane', 'Lal Mandi', 'Srinagar', 190002, 1948768097, 9876545899, 'ksm.347@gmail.com', 'House No. 99 Mubarak Lane', 'Lal Mandi', 'Srinagar', 190002, 3000, 2000, 'Domestic', 'Residential', 1, 'Temporary', 'No', 'No', 394802517);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `status` varchar(7) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `date`, `status`) VALUES
(17, 'Sheikh Insha', 'insha@example.com', 0, 'How to get a new connection?', '2014-09-09', 'pending'),
(18, 'Mubarak Anees', 'mubarak@example.com', 0, 'Where to get new connection form', '2014-11-12', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `new_connection`
--

CREATE TABLE `new_connection` (
  `ack_no` bigint(10) NOT NULL,
  `name` char(40) NOT NULL,
  `father_husband_trustee` char(40) NOT NULL,
  `comm_address_line_1` text NOT NULL,
  `comm_address_line_2` text NOT NULL,
  `comm_city` char(15) NOT NULL,
  `comm_pin` int(6) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address_line_1` text NOT NULL,
  `address_line_2` text NOT NULL,
  `city` char(15) NOT NULL,
  `pin` int(6) NOT NULL,
  `plot_size` int(15) NOT NULL,
  `coverage` int(15) NOT NULL,
  `category` char(25) NOT NULL,
  `purpose` char(17) NOT NULL,
  `kw` int(2) NOT NULL,
  `neighbour_id` bigint(13) NOT NULL,
  `type` char(10) NOT NULL,
  `dedicated_line` char(3) NOT NULL,
  `own_meter` char(3) NOT NULL,
  `due_connection` char(3) NOT NULL,
  `due_premises` char(3) NOT NULL,
  `due_others` char(3) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table contains data for new connection';

--
-- Dumping data for table `new_connection`
--

INSERT INTO `new_connection` (`ack_no`, `name`, `father_husband_trustee`, `comm_address_line_1`, `comm_address_line_2`, `comm_city`, `comm_pin`, `phone`, `mobile`, `email`, `address_line_1`, `address_line_2`, `city`, `pin`, `plot_size`, `coverage`, `category`, `purpose`, `kw`, `neighbour_id`, `type`, `dedicated_line`, `own_meter`, `due_connection`, `due_premises`, `due_others`, `date`) VALUES
(351182725, 'Ghulam Ahmed', 'Nazir Ahmed', 'House No.77 Mubarak Lane', 'Khanyar', 'Srinagar', 190004, 1946789293, 5678965689, 'ksm.347@gmail.com', 'House No.77 Mubarak Lane', 'Khanyar', 'Srinagar', 190004, 1600, 1200, 'Agriculture Supply', 'Residential', 1, 1204876787656, 'Permanent', 'No', 'No', 'No', 'No', 'No', '2015-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE `payment_history` (
  `payment_id` int(11) NOT NULL,
  `consumer_id` bigint(13) NOT NULL,
  `amount` int(5) NOT NULL,
  `method` char(12) NOT NULL,
  `source` char(40) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_history`
--

INSERT INTO `payment_history` (`payment_id`, `consumer_id`, `amount`, `method`, `source`, `date`) VALUES
(113769531, 1204050004568, 1147, 'Manual', 'Cash', '2014-07-10'),
(116780598, 1204050004575, 1046, 'Manual', 'Cash', '2013-12-18'),
(117865668, 1204050004578, 1686, 'Manual', 'Cash', '2014-06-18'),
(119628906, 1204050004569, 1335, 'Manual', 'Cash', '2014-02-06'),
(122531466, 1204050004567, 315, 'Debit Card', 'ICICI', '2014-01-23'),
(125678168, 1204050004576, 1492, 'Manual', 'Cash', '2014-01-17'),
(127766926, 1204050004577, 515, 'Manual', 'Cash', '2014-12-19'),
(138563367, 1204050004569, 579, 'Manual', 'Cash', '2014-08-07'),
(158935546, 1204050004574, 467, 'Manual', 'Cash', '2014-03-06'),
(159098307, 1204050004566, 2650, 'Credit Card', 'Diners Club International', '2014-09-03'),
(160129123, 1204050004566, 220, 'Credit Card', 'Diners Club International', '2014-12-18'),
(169921874, 1204050004576, 1845, 'Manual', 'Cash', '2014-07-11'),
(173204209, 1204050004568, 2687, 'Manual', 'Cash', '2014-02-20'),
(176757812, 1204050004574, 1822, 'Manual', 'Cash', '2013-12-11'),
(178331163, 1204050004573, 1096, 'Manual', 'Cash', '2014-03-12'),
(184027777, 1204050004570, 423, 'Manual', 'Cash', '2014-11-06'),
(186414930, 1204050004566, 1620, 'Credit Card', 'Diners Club International', '2014-05-15'),
(187011718, 1204050004572, 411, 'Manual', 'Cash', '2014-10-16'),
(212592230, 1204050004574, 1516, 'Manual', 'Cash', '2014-01-09'),
(219129774, 1204050004577, 2261, 'Manual', 'Cash', '2014-04-17'),
(227484808, 1204050004575, 785, 'Manual', 'Cash', '2014-05-22'),
(229248046, 1204050004567, 2650, 'Debit Card', 'ICICI', '2014-09-23'),
(241156683, 1204050004573, 1282, 'Manual', 'Cash', '2014-07-17'),
(241292317, 1204050004570, 1173, 'Manual', 'Cash', '2014-02-12'),
(243381076, 1204050004574, 790, 'Manual', 'Cash', '2014-08-07'),
(247802734, 1204050004577, 2222, 'Manual', 'Cash', '2014-05-15'),
(247829861, 1204050004573, 1282, 'Manual', 'Cash', '2014-01-15'),
(252577039, 1204050004571, 639, 'Manual', 'Cash', '2014-01-09'),
(253580729, 1204050004581, 162, 'Manual', 'Cash', '2014-11-14'),
(260823567, 1204050004584, 1430, 'Manual', 'Cash', '2014-11-12'),
(262749565, 1204050004571, 615, 'Manual', 'Cash', '2014-08-08'),
(264295789, 1204050004567, 650, 'Debit Card', 'ICICI', '2014-03-25'),
(268066406, 1204050004577, 2218, 'Manual', 'Cash', '2014-08-15'),
(274007161, 1204050004571, 1655, 'Manual', 'Cash', '2014-03-04'),
(274169921, 1204050004571, 1190, 'Manual', 'Cash', '2014-05-14'),
(276448567, 1204050004568, 1225, 'Manual', 'Cash', '2013-12-12'),
(286105685, 1204050004582, 250, 'Manual', 'Cash', '2014-11-19'),
(294514973, 1204050004583, 250, 'Manual', 'Cash', '2014-12-18'),
(294623480, 1204050004572, 2651, 'Manual', 'Cash', '2014-05-16'),
(303819444, 1204050004578, 1621, 'Manual', 'Cash', '2014-05-23'),
(304551866, 1204050004570, 794, 'Manual', 'Cash', '2014-06-05'),
(310899522, 1204050004575, 790, 'Manual', 'Cash', '2014-11-13'),
(318603515, 1204050004569, 976, 'Manual', 'Cash', '2014-05-08'),
(320773654, 1204050004566, 1680, 'Credit Card', 'Diners Club International', '2014-06-19'),
(322319878, 1204050004574, 844, 'Manual', 'Cash', '2014-10-08'),
(329372829, 1204050004566, 450, 'Credit Card', 'Diners Club International', '2014-10-09'),
(336968315, 1204050004573, 438, 'Manual', 'Cash', '2014-11-07'),
(342068142, 1204050004577, 1488, 'Manual', 'Cash', '2013-12-18'),
(350802951, 1204050004572, 1615, 'Manual', 'Cash', '2014-04-16'),
(353081597, 1204050004579, 727, 'Manual', 'Cash', '2014-11-12'),
(356852213, 1204050004569, 805, 'Manual', 'Cash', '2014-11-01'),
(357883029, 1204050004577, 1496, 'Manual', 'Cash', '2014-03-06'),
(364067925, 1204050004581, 136, 'Manual', 'Cash', '2014-12-10'),
(369330512, 1204050004575, 791, 'Manual', 'Cash', '2014-10-08'),
(373996310, 1204050004576, 1108, 'Manual', 'Cash', '2014-06-13'),
(376491970, 1204050004575, 735, 'Manual', 'Cash', '2014-02-06'),
(379394531, 1204050004572, 93, 'Manual', 'Cash', '2014-06-13'),
(379882812, 1204050004593, 210, 'Manual', 'Cash', '2014-12-24'),
(380777994, 1204050004576, 1496, 'Manual', 'Cash', '2014-05-08'),
(385606553, 1204050004592, 2245, 'Manual', 'Cash', '2014-12-24'),
(389567057, 1204050004570, 791, 'Manual', 'Cash', '2013-12-11'),
(393907334, 1204050004570, 805, 'Manual', 'Cash', '2014-12-18'),
(394314236, 1204050004573, 253, 'Manual', 'Cash', '2014-09-18'),
(399956597, 1204050004571, 1236, 'Manual', 'Cash', '2014-06-12'),
(403211805, 1204050004575, 1008, 'Manual', 'Cash', '2014-07-16'),
(404486762, 1204050004566, 940, 'Credit Card', 'Diners Club International', '2013-12-11'),
(412190755, 1204050004566, 2300, 'Credit Card', 'Diners Club International', '2014-03-13'),
(415093315, 1204050004591, 727, 'Manual', 'Cash', '2014-12-24'),
(422444661, 1204050004570, 1027, 'Manual', 'Cash', '2014-04-17'),
(423014322, 1204050004570, 757, 'Manual', 'Cash', '2014-05-14'),
(426784939, 1204050004567, 820, 'Debit Card', 'ICICI', '2014-11-18'),
(427978515, 1204050004590, 170, 'Manual', 'Cash', '2014-11-12'),
(428683810, 1204050004578, 540, 'Manual', 'Cash', '2014-12-05'),
(432264539, 1204050004574, 728, 'Manual', 'Cash', '2014-07-09'),
(438096788, 1204050004572, 654, 'Manual', 'Cash', '2014-02-12'),
(446804470, 1204050004571, 3553, 'Manual', 'Cash', '2014-09-19'),
(451660156, 1204050004567, 1130, 'Debit Card', 'ICICI', '2014-12-16'),
(456787109, 1204050004569, 732, 'Manual', 'Cash', '2014-07-09'),
(459445529, 1204050004573, 660, 'Manual', 'Cash', '2014-01-17'),
(463107638, 1204050004568, 1919, 'Manual', 'Cash', '2014-09-17'),
(464355468, 1204050004576, 1069, 'Manual', 'Cash', '2014-02-12'),
(470187716, 1204050004578, 1627, 'Manual', 'Cash', '2014-10-16'),
(471679687, 1204050004578, 1341, 'Manual', 'Cash', '2014-09-11'),
(473198784, 1204050004576, 23, 'Manual', 'Cash', '2014-11-20'),
(475206163, 1204050004566, 650, 'Credit Card', 'Diners Club International', '2014-11-19'),
(484239366, 1204050004566, 120, 'Credit Card', 'Diners Club International', '2014-04-18'),
(485704210, 1204050004571, 837, 'Manual', 'Cash', '2014-07-17'),
(485758463, 1204050004568, 2819, 'Manual', 'Cash', '2014-08-14'),
(493842230, 1204050004569, 1035, 'Manual', 'Cash', '2014-09-23'),
(494520399, 1204050004575, 1329, 'Manual', 'Cash', '2014-01-09'),
(497504340, 1204050004575, 788, 'Manual', 'Cash', '2014-03-06'),
(509602864, 1204050004571, 740, 'Manual', 'Cash', '2014-12-05'),
(516438802, 1204050004574, 763, 'Manual', 'Cash', '2014-06-20'),
(516465928, 1204050004567, 2650, 'Debit Card', 'ICICI', '2014-05-21'),
(519124348, 1204050004577, 67, 'Manual', 'Cash', '2014-11-07'),
(519856770, 1204050004573, 470, 'Manual', 'Cash', '2014-05-02'),
(523193359, 1204050004568, 180, 'Manual', 'Cash', '2014-04-17'),
(526340060, 1204050004577, 674, 'Manual', 'Cash', '2014-09-12'),
(542426215, 1204050004572, 260, 'Manual', 'Cash', '2014-12-23'),
(543809678, 1204050004568, 200, 'Manual', 'Cash', '2014-12-18'),
(549099392, 1204050004574, 2326, 'Manual', 'Cash', '2014-02-07'),
(553548177, 1204050004576, 1919, 'Manual', 'Cash', '2014-09-17'),
(556776258, 1204050004571, 2068, 'Manual', 'Cash', '2014-11-20'),
(560275607, 1204050004568, 140, 'Manual', 'Cash', '2014-11-14'),
(564697265, 1204050004570, 296, 'Manual', 'Cash', '2014-08-14'),
(569363064, 1204050004578, 1957, 'Manual', 'Cash', '2014-02-13'),
(577609591, 1204050004568, 2350, 'Manual', 'Cash', '2014-06-13'),
(580620659, 1204050004567, 940, 'Debit Card', 'ICICI', '2013-12-13'),
(588297525, 1204050004576, 2276, 'Manual', 'Cash', '2014-10-10'),
(600477430, 1204050004570, 474, 'Manual', 'Cash', '2014-07-10'),
(601535373, 1204050004578, 2063, 'Manual', 'Cash', '2014-08-15'),
(606011284, 1204050004571, 759, 'Manual', 'Cash', '2014-10-09'),
(610378689, 1204050004573, 691, 'Manual', 'Cash', '2014-06-11'),
(617187499, 1204050004574, 1997, 'Manual', 'Cash', '2014-04-10'),
(622585720, 1204050004578, 809, 'Manual', 'Cash', '2013-12-13'),
(627875433, 1204050004567, 1615, 'Debit Card', 'ICICI', '2014-04-16'),
(632025824, 1204050004570, 102, 'Manual', 'Cash', '2014-10-08'),
(657443576, 1204050004571, 1062, 'Manual', 'Cash', '2014-02-06'),
(668972439, 1204050004566, 1970, 'Credit Card', 'Diners Club International', '2014-02-12'),
(672526041, 1204050004572, 940, 'Manual', 'Cash', '2013-12-11'),
(674207899, 1204050004580, 70, 'Manual', 'Cash', '2014-12-12'),
(687771267, 1204050004571, 1527, 'Manual', 'Cash', '2014-04-09'),
(689643012, 1204050004573, 694, 'Manual', 'Cash', '2014-04-16'),
(694227430, 1204050004574, 50, 'Manual', 'Cash', '2014-12-18'),
(704291449, 1204050004573, 1957, 'Manual', 'Cash', '2014-08-15'),
(709662543, 1204050004579, 160, 'Manual', 'Cash', '2014-12-12'),
(716905381, 1204050004575, 1822, 'Manual', 'Cash', '2014-11-12'),
(725694444, 1204050004567, 95, 'Debit Card', 'ICICI', '2014-06-18'),
(729519314, 1204050004575, 1092, 'Manual', 'Cash', '2014-04-17'),
(730984157, 1204050004578, 757, 'Manual', 'Cash', '2014-04-18'),
(738118489, 1204050004578, 198, 'Manual', 'Cash', '2014-11-07'),
(745252821, 1204050004576, 2687, 'Manual', 'Cash', '2014-08-22'),
(746880425, 1204050004576, 900, 'Manual', 'Cash', '2014-12-19'),
(746934678, 1204050004572, 1477, 'Manual', 'Cash', '2014-11-12'),
(758870442, 1204050004573, 590, 'Manual', 'Cash', '2014-12-24'),
(760742187, 1204050004570, 1130, 'Manual', 'Cash', '2014-03-06'),
(768907335, 1204050004567, 110, 'Debit Card', 'ICICI', '2014-07-16'),
(770453558, 1204050004578, 2315, 'Manual', 'Cash', '2014-03-14'),
(771158854, 1204050004566, 1280, 'Credit Card', 'Diners Club International', '2014-01-08'),
(771375868, 1204050004566, 2060, 'Credit Card', 'Diners Club International', '2014-08-20'),
(780517578, 1204050004569, 1255, 'Manual', 'Cash', '2014-01-08'),
(783799913, 1204050004570, 1080, 'Manual', 'Cash', '2014-01-08'),
(791097005, 1204050004569, 1298, 'Manual', 'Cash', '2014-03-05'),
(798177083, 1204050004572, 1969, 'Manual', 'Cash', '2014-08-07'),
(798556857, 1204050004567, 1970, 'Debit Card', 'ICICI', '2014-08-20'),
(803710937, 1204050004577, 2214, 'Manual', 'Cash', '2014-06-18'),
(812445746, 1204050004571, 1232, 'Manual', 'Cash', '2013-12-11'),
(813612196, 1204050004568, 2276, 'Manual', 'Cash', '2014-10-08'),
(814995659, 1204050004569, 1006, 'Manual', 'Cash', '2013-12-18'),
(837456597, 1204050004568, 2412, 'Manual', 'Cash', '2014-01-16'),
(837727864, 1204050004582, 1200, 'Manual', 'Cash', '2014-12-10'),
(847059461, 1204050004586, 50, 'Manual', 'Cash', '2014-12-18'),
(851318359, 1204050004580, 365, 'Manual', 'Cash', '2015-01-14'),
(856770833, 1204050004569, 1770, 'Manual', 'Cash', '2014-12-17'),
(862440321, 1204050004572, 315, 'Manual', 'Cash', '2014-01-08'),
(866916232, 1204050004568, 3134, 'Manual', 'Cash', '2014-03-12'),
(867567274, 1204050004584, 1400, 'Manual', 'Cash', '2014-12-18'),
(870659722, 1204050004576, 1225, 'Manual', 'Cash', '2013-12-12'),
(877278645, 1204050004578, 1736, 'Manual', 'Cash', '2014-01-10'),
(878906249, 1204050004577, 1062, 'Manual', 'Cash', '2014-02-12'),
(880723741, 1204050004575, 725, 'Manual', 'Cash', '2014-06-05'),
(883816189, 1204050004577, 1919, 'Manual', 'Cash', '2014-07-11'),
(884412977, 1204050004574, 39, 'Manual', 'Cash', '2014-11-13'),
(889648437, 1204050004585, 40, 'Manual', 'Cash', '2014-11-12'),
(891737196, 1204050004572, 2651, 'Manual', 'Cash', '2014-09-10'),
(892985026, 1204050004572, 657, 'Manual', 'Cash', '2014-03-12'),
(902994791, 1204050004590, 190, 'Manual', 'Cash', '2014-12-10'),
(906873914, 1204050004567, 650, 'Debit Card', 'ICICI', '2014-02-18'),
(917670355, 1204050004585, 90, 'Manual', 'Cash', '2014-12-18'),
(918972439, 1204050004574, 1232, 'Manual', 'Cash', '2014-09-10'),
(923177083, 1204050004583, 510, 'Manual', 'Cash', '2014-11-19'),
(925862630, 1204050004577, 1962, 'Manual', 'Cash', '2014-01-09'),
(932400173, 1204050004568, 2268, 'Manual', 'Cash', '2014-05-15'),
(937662760, 1204050004569, 1008, 'Manual', 'Cash', '2014-06-12'),
(937879774, 1204050004575, 480, 'Manual', 'Cash', '2014-09-10'),
(941650390, 1204050004574, 837, 'Manual', 'Cash', '2014-05-08'),
(946126302, 1204050004578, 722, 'Manual', 'Cash', '2014-07-24'),
(951633029, 1204050004575, 747, 'Manual', 'Cash', '2014-08-14'),
(964925130, 1204050004573, 1344, 'Manual', 'Cash', '2013-12-12'),
(967230902, 1204050004569, 1209, 'Manual', 'Cash', '2014-04-30'),
(969373914, 1204050004566, 120, 'Credit Card', 'Diners Club International', '2014-07-17'),
(969916449, 1204050004586, 100, 'Manual', 'Cash', '2015-01-14'),
(976888020, 1204050004567, 410, 'Debit Card', 'ICICI', '2014-10-22'),
(977403428, 1204050004576, 1613, 'Manual', 'Cash', '2014-03-13'),
(981797960, 1204050004573, 654, 'Manual', 'Cash', '2014-10-18'),
(983127170, 1204050004569, 888, 'Manual', 'Cash', '2014-10-09'),
(994439019, 1204050004572, 112, 'Manual', 'Cash', '2014-07-17'),
(996853298, 1204050004576, 1112, 'Manual', 'Cash', '2014-04-17'),
(997612847, 1204050004577, 1093, 'Manual', 'Cash', '2014-10-16'),
(997884114, 1204050004570, 253, 'Manual', 'Cash', '2014-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `consumer_id` bigint(13) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='turn service on / off';

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`consumer_id`, `start_date`, `end_date`, `status`) VALUES
(1204050004567, '2015-01-15', '2015-02-10', 1),
(1204050004569, '2015-01-06', '2015-01-31', 1),
(1204050004580, '2015-02-23', '2015-03-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unpaid`
--

CREATE TABLE `unpaid` (
  `consumer_id` bigint(13) NOT NULL,
  `amount` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table stores unpaid amt i.e., current month bill + previous';

--
-- Dumping data for table `unpaid`
--

INSERT INTO `unpaid` (`consumer_id`, `amount`) VALUES
(1204050004566, 5),
(1204050004567, 4),
(1204050004568, 5),
(1204050004569, 2),
(1204050004570, 0),
(1204050004571, 0),
(1204050004572, 5),
(1204050004573, 4),
(1204050004574, 5),
(1204050004575, 0),
(1204050004576, 6),
(1204050004577, 0),
(1204050004578, 1),
(1204050004579, 3),
(1204050004580, 4),
(1204050004581, 0),
(1204050004582, 37),
(1204050004583, -1),
(1204050004584, 19),
(1204050004585, 5),
(1204050004586, 7),
(1204050004590, 5),
(1204050004591, 0),
(1204050004592, 0),
(1204050004593, 0);

-- --------------------------------------------------------

--
-- Table structure for table `usage_history`
--

CREATE TABLE `usage_history` (
  `consumer_id` bigint(13) NOT NULL,
  `nov_2014` int(5) DEFAULT NULL,
  `oct_2014` int(5) DEFAULT NULL,
  `sep_2014` int(5) DEFAULT NULL,
  `aug_2014` int(5) DEFAULT NULL,
  `jul_2014` int(5) DEFAULT NULL,
  `jun_2014` int(5) DEFAULT NULL,
  `may_2014` int(5) DEFAULT NULL,
  `apr_2014` int(5) DEFAULT NULL,
  `mar_2014` int(5) DEFAULT NULL,
  `feb_2014` int(5) DEFAULT NULL,
  `jan_2014` int(5) DEFAULT NULL,
  `dec_2013` int(5) DEFAULT NULL,
  `nov_2013` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usage_history`
--

INSERT INTO `usage_history` (`consumer_id`, `nov_2014`, `oct_2014`, `sep_2014`, `aug_2014`, `jul_2014`, `jun_2014`, `may_2014`, `apr_2014`, `mar_2014`, `feb_2014`, `jan_2014`, `dec_2013`, `nov_2013`) VALUES
(1204050004566, 130, 300, 278, 987, 798, 76, 677, 656, 78, 879, 764, 547, 437),
(1204050004567, 450, 350, 267, 987, 768, 76, 65, 987, 654, 346, 345, 236, 437),
(1204050004568, 789, 360, 658, 566, 798, 367, 677, 656, 78, 879, 764, 693, 387),
(1204050004569, 656, 345, 345, 400, 230, 287, 390, 378, 465, 498, 512, 482, 389),
(1204050004570, 345, 222, 70, 150, 230, 287, 390, 378, 465, 498, 512, 482, 389),
(1204050004571, 324, 751, 267, 987, 230, 287, 390, 378, 465, 498, 345, 236, 389),
(1204050004572, 156, 561, 267, 987, 768, 76, 65, 987, 654, 346, 345, 236, 437),
(1204050004573, 277, 227, 345, 150, 764, 547, 357, 286, 358, 487, 347, 547, 567),
(1204050004574, 124, 917, 289, 389, 275, 259, 268, 287, 586, 188, 671, 462, 0),
(1204050004575, 340, 672, 389, 289, 375, 459, 368, 387, 486, 388, 371, 562, 471),
(1204050004576, 305, 510, 658, 566, 764, 547, 357, 457, 358, 487, 347, 456, 387),
(1204050004577, 204, 729, 353, 245, 643, 566, 642, 644, 654, 457, 345, 577, 455),
(1204050004578, 260, 123, 658, 566, 798, 367, 677, 656, 378, 879, 764, 693, 395),
(1204050004579, 106, 320, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004580, 32, 150, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004581, 59, 70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004582, 483, 150, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004583, 148, 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004584, 542, 900, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004585, 65, 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004586, 45, 67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004590, 83, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004591, 320, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004592, 650, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1204050004593, 129, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `consumer_id` bigint(13) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`consumer_id`, `password`, `email`) VALUES
(1204050004566, 'kamran', 'kamran@example.com'),
(1204050004567, 'adil', 'adil@example.com'),
(1204050004569, '004569', 'ksm.347@gmail.com'),
(1204050004570, '004570', 'yousuf@example.com'),
(1204050004572, '004572', 'wahid@example.com'),
(1204050004573, '004573', 'lateef@example.com'),
(1204050004574, '004574', 'habib@example.com'),
(1204050004575, '004575', 'farooq@example.com'),
(1204050004580, '004580', 'ksm.347@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bill_history`
--
ALTER TABLE `bill_history`
  ADD PRIMARY KEY (`consumer_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`ack_no`);

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`consumer_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_connection`
--
ALTER TABLE `new_connection`
  ADD PRIMARY KEY (`ack_no`);

--
-- Indexes for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`consumer_id`);

--
-- Indexes for table `unpaid`
--
ALTER TABLE `unpaid`
  ADD PRIMARY KEY (`consumer_id`);

--
-- Indexes for table `usage_history`
--
ALTER TABLE `usage_history`
  ADD PRIMARY KEY (`consumer_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`consumer_id`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consumer`
--
ALTER TABLE `consumer`
  MODIFY `consumer_id` bigint(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
