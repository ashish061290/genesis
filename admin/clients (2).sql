-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2016 at 02:50 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `genesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `clients_id` int(100) NOT NULL AUTO_INCREMENT,
  `certificate_no` varchar(100) NOT NULL,
  `reg_date` varchar(100) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `certificate_type` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`clients_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clients_id`, `certificate_no`, `reg_date`, `client_name`, `certificate_type`, `contact_person`, `city`, `status`) VALUES
(89, 'hjj', '2016-06-06', 'kjjk', 'kj', 'kjkj', 'jkjk', 'jkjk'),
(4, 'ACS/Q/14/11/200', '2014-11-04', 'Malik Nursingh Home', 'QMS, APQO', 'Mangement Representative', 'Chhindwara(M.P.)', 'Active'),
(5, 'ACS/Q/16/11/201', '2014-11-05', 'Box Corrugators', 'QMS,JAZ-ANZ', 'Management Representative', 'Bhopal', 'Active'),
(6, 'ACS/Q/14/11/230', '2014-11-18', 'Aman Motors ', 'QMS, APQO', 'Management Representative', 'Budni (M.P.)', 'Active'),
(7, 'ACS/Q/14/11/299', '2014-11-27', 'Janpad Panchayat Chhindwara', 'QMS, APQO', 'Management Representative', 'Chhindwara (M.P.)', 'Active'),
(8, 'ACS/Q/14/12/243', '2014-11-27', 'Janpat Panchayat Bichhua', 'QMS, APQO', 'Management Representative', 'Bichhua', 'Active'),
(9, 'ACS/F/14/12/249', '2014-12-09', 'Prem Agency', 'FSMS, APQO', 'Management Representative', 'Bhopal (M.P.)', 'Active'),
(10, 'ACS/F/14/12/250', '2014-12-22', 'Starr Food and Allied Services', 'FSMS, APQO', 'Management Representative', 'Bhopal (M.P)', 'Active'),
(11, 'ACS/Q/14/12/251', '2014-12-10', 'Dastarkhwan', 'QMS, APQO', 'Management Representative', 'Bhopal (M.P)', 'Active'),
(12, 'ACS/Q/14/12/255', '2014-12-22', 'Arihant Caters', 'QMS, APQO', 'Management Representative', 'Itarsi (M.P)', 'Active'),
(13, 'ACS/Q/14/12/256', '2014-12-22', 'Vardhman Medical Store', 'QMS, APQO', 'Management Representative', 'Itarsi (M.P)', 'Active'),
(15, 'ACS/Q/14/12/258', '2014-12-22', 'Dream Real Food Export Import Pvt Ltd', 'QMS, APQO', 'Management Representative', 'Bhopal (M.P)', 'Active'),
(16, 'ACS/F/14/12/259', '2014-12-22', 'Dream Real Food Export Import Pvt Ltd', 'FSMS, APQO', 'Management Representative', 'Bhopal (M.P)', 'Active'),
(17, 'ACS/Q/15/01/262', '2015-01-01', 'Anand Medical Store', 'QMS, APQO', 'Management Representative', 'Itarsi (M.P)', 'Active'),
(18, 'ACS/Q/15/01/261', '2015-01-01', 'Anant Jewellers', 'QMS, APQO', 'Management Representative', 'Hoshangabad (M.P)', 'Active'),
(19, 'ACS/Q/15/01/263', '2015-01-01', 'Tarun Optical', 'QMS, APQO', 'Management Representative', 'Sehore (M.P.)', 'Active'),
(20, 'ACS/Q/15/01/264', '2015-01-01', 'MassInfomedia', 'QMS, APQO', 'Management Representative', 'Bhopal (M.P.)', 'Active'),
(21, 'ACS/Q/15/01/269', '2015-01-07', 'Hindustan Agro Enterprises', 'QMS, APQO', 'Management Representative', 'Bhopal (M.P.)', 'Active'),
(22, 'ACS/Q/15/01/273', '2015-01-08', 'Mahindra Travels and Services', 'QMS, APQO', 'Management Representative', 'Korba (C.G.)', 'Active'),
(23, 'ACS/Q/15/01/276', '2015-01-15', 'Mishra Traders', 'QMS, APQO', 'Management Representative', 'Korba (C.G.)', 'Active'),
(24, 'ACS/Q/15/01/279', '2015-01-20', 'Mukesh Medicose', 'QMS, APQO', 'Management Representative', 'Hoshangabad (M.P.)', 'Active'),
(25, 'ACS/Q/15/01/280', '2015-01-20', 'S.S.G Dental Lab', 'QMS, APQO', 'Management Representative', 'Bhilai (C.G)', 'Active'),
(26, 'ACS/Q/15/01/281', '2015-01-21', 'MKS Infro Services', 'QMS, APQO', 'Management Representative', 'Hoshangabad (M.P.)', 'Active'),
(27, 'ACS/Q/15/01/283', '2015-01-24', 'Chhabariya Dental Clinic', 'QMS, APQO', 'Management Representative', 'Hoshangabad (M.P.)', 'Active'),
(28, 'ACS/Q/15/01/284', '2015-01-24', 'Atharva Data Resources', 'QMS, APQO', 'Management Representative', 'Chhindwara (M.P.)', 'Active'),
(29, 'ACS/Q/15/02/292', '2015-02-03', 'Amble Tours & Packages', 'QMS, APQO', 'Management Representative', 'Bhopal (M.P.)', 'Deactivate'),
(30, 'ACS/Q/15/02/293', '2015-02-03', 'Archana Convent School', 'QMS, APQO', 'Management Representative', 'Chhindwara (M.P.)', 'Active'),
(31, 'ACS/Q/15/02/294', '2015-02-03', 'Aradhna Convent', 'QMS, APQO', 'Management Representative', 'Chhindwara (M.P.)', 'Active'),
(32, 'ACS/Q/15/02/297', '2015-02-11', 'Shah Jawaharlal Jethalal Jewellers Pvt Ltd', 'QMS, APQO', 'Management Representative', 'Bilaspur (C.G.)', 'Active'),
(33, 'ACS/Q/15/02/300', '2015-02-14', 'Khetrapal Multispeciality Dental Clinic', 'QMS, APQO', 'Management Representative', 'Bilaspur (C.G.)', 'Active'),
(34, 'ACS/Q/15/02/301', '2015-02-14', 'E-Technion', 'QMS, APQO', 'Management Representative', 'Bilaspur (C.G.)', 'Active'),
(35, 'ACS/Q/15/02/303', '2015-02-14', 'Super Shopping Mall', 'QMS, APQO', 'Management Representative', 'Chhindwara (M.P.)', 'Active'),
(36, 'ACSQ/15/02/302', '2015-02-14', 'Garima Properties', 'QMS, APQO', 'Management Representative', 'Bilaspur (C.G.)', 'Active'),
(37, 'ACS/Q/15/02/306', '2015-02-23', 'Vardhman College', 'QMS, APQO', 'Management Representative', 'Itarsi (M.P.)', 'Active'),
(38, 'ACS/Q/15/02/308', '2015-02-24', 'Pratiksha Enterprises Narukas Multi Cuisine', 'QMS, APQO', 'Management Representative', 'Bhopal (M.P.)', 'Active'),
(39, 'ACS/Q/15/02/313', '2015-02-28', 'Gayatri Medical House', 'QMS, APQO', 'Management Representative', 'Raisen (M.P.)', 'Active'),
(40, 'ACS/Q/15/02/314', '2015-02-28', 'Jan Mangal Sansthan', 'QMS, APQO', 'Management Representative', 'Chhindwara (M.P.)', 'Active'),
(41, 'ACS/Q/15/02/315', '2015-02-28', 'Hotel Green Paradise Pure Vegetarian Restaurant', 'QMS, APQO', 'Management Representative', 'Chhindwara (M.P.)', 'Active'),
(42, 'ACS/F/15/02/315', '2015-02-28', 'Hotel Green Paradise Pure Vegetarian Restaurant', 'FSMS, APQO', 'Management Representative', 'Chhindwara (M.P.)', 'Active'),
(43, 'ACS/Q/15/03/322', '2015-03-12', 'Govt. Pench Valley P. G. Mahavidyalaya', 'QMS, APQO', 'Management Representative', 'Chhindwara (M.P.)', 'Active'),
(44, 'ACS/Q/15/03/325', '2015-03-17', 'American Opticals', 'QMS, APQO', 'Management Representative', 'Bhopal (M.P.)', 'Active'),
(45, 'ACS/Q/15/03/326', '2015-03-17', 'Relief Clinic', 'QMS, APQO', 'Management Representative', 'Jabalpur (M.P.)', 'Active'),
(46, 'ACS/Q/15/03/327', '2015-03-17', 'Bright Career High School', 'QMS, APQO', 'Management Representative', 'Amarwada (M.P.)', 'Active'),
(47, 'ACS/Q/15/03/331', '2015-03-25', 'OSR Business and Technology', 'QMS, APQO', 'Management Representative', 'Bilaspur (C.G.)', 'Active'),
(48, 'ACS/Q/15/04/342', '2015-04-08', 'GD Sea Ship Management', 'QMS, APQO', 'Management Representative', 'Gwalior (M.P.)', 'Active'),
(49, 'ACS/Q/15/04/344', '2015-04-08', 'Maa Vijya Son Shakti Pvt ITI', 'QMS, APQO', 'Management Representative', 'Narsullahganj (M.P.)', 'Active'),
(50, 'ACS/Q/15/04/343', '2015-04-08', 'Regional Panchayat Rural Development Training Center', 'QMS, APQO', 'Management Representative', 'Bilaspur (C.G.)', 'Active'),
(51, 'ACS/Q/15/04/348', '2015-04-20', 'Gurukul the Education Planet Career Coaching Institute Harda', 'QMS, APQO', 'Management Representative', 'Harda (M.P.)', 'Active'),
(52, 'ACS/Q/15/04/360', '2015-04-24', 'Variety Elevators', 'QMS, APQO', 'Management Representative', 'Bhopal (M.P.)', 'Active'),
(53, 'ACS/Q/15/04/361', '2015-04-24', 'J.T. Group of Institution', 'QMS, APQO', 'Management Representative', 'Chhindwara (M.P.)', 'Active'),
(54, 'ACS/Q/15/05/365', '2015-05-05', 'A. S. Marketing', 'QMS, APQO', 'Management Representative', 'Chhindwara (M.P.)', 'Active'),
(55, 'ACS/Q/15/05/366', '2015-05-05', 'Shree Ram Hospital', 'QMS, APQO', 'Management Representative', 'Rajnandgaon C.G', 'Active'),
(56, 'ACS/Q/15/05/371', '2015-05-09', 'District Sainik Welfare Office & Sainik Rest House Chhindwara', 'QMS, APQO', 'Management Representative', 'Chhindwara (M.P.)', 'Active'),
(57, 'ACS/Q/15/05/375', '2015-05-15', 'Sunrise High School Chhindwara', 'QMS, APQO', 'Management Representative', 'Chhindwara (M.P.)', 'Active'),
(58, 'ACS/Q/15/05/376', '2015-05-15', 'Aastha Colonizer & Developers', 'QMS, APQO', 'Management Representative', 'Vidisha (M.P.)', 'Active'),
(59, 'ACS/Q/15/05/388', '2015-05-25', 'Vikram H. S. School Dattotar', 'QMS, APQO', 'Management Representative', 'Dewas (M.P.)', 'Active'),
(60, 'ACS/Q/15/05/389', '2015-05-25', 'Miracle Dental Care and Implant Centre', 'QMS, APQO', 'Management Representative', 'Vidisha (M.P.)', 'Active'),
(61, 'ACS/Q/15/05/392', '2015-05-28', 'Bharat H. S. School', 'QMS, APQO', 'Management Representative', 'Dewas (M.P.)', 'Active'),
(62, 'ACS/QC/V/15/103533', '2015-05-27', 'Topgrade Manpower and Security Services India Pvt. Ltd.', 'QMS, JAZ-ANZ', 'Management Representative', 'Bhopal (M.P.)', 'Active'),
(63, 'ACS/Q/15/05/393', '2015-05-29', 'Samrat Ashok Co-Ed Higher Secondary School', 'QMS, APQO', 'Management Representative', 'Ganjbasoda (M.P.)', 'Active'),
(64, 'ACS/Q/15/06/396', '2015-06-02', 'Hemu Halwai and Caterers', 'QMS, APQO', 'Management Representative', 'Ganjbasoda (M.P.)', 'Active'),
(65, 'ACS/Q/15/06/397', '2015-06-02', 'Future Ahead Computer Institute', 'QMS, APQO', 'Management Representative', 'Rajnandgaon C.G', 'Active'),
(66, 'ACS/Q/15/06/398', '2015-06-02', 'Bilaspur Corrugated Industries', 'QMS, APQO', 'Management Representative', 'Bilaspur (C.G.)', 'Active'),
(67, 'ACS/Q/15/06/405', '2015-06-09', 'Arunima Samiti', 'QMS, APQO', 'Management Representative', 'Chhindwara (M.P.)', 'Active'),
(68, 'ACS/10QYAB1363P', '2015-06-08', 'ARYMAN SCINDIA P. SCHOOL\r\n', 'QMS, JAS-ANZ', 'Management Representative', 'Ashoknagar , (M.P)', 'Certified'),
(71, ' ACS/10QYAB1363P', '2015-06-10', 'SINHA ADVERTISING', 'QMS, JAS-ANZ', 'AJAY SINHA', 'chhasisgarh', 'Certified'),
(70, 'ACS/ 10QZA07077', '2015-06-08', 'PEARL DENTAL CLINIC', 'QMS, APQO', 'Management Representative', 'Bilaspur, chhatisgarh', 'Certified'),
(72, ' ACS/GCS/QMS/792', '2015-06-16', 'GOODWILL ACCOUNT ', 'QMS, JAS-ANZ', 'RAJNISH KUMAR YADAV', 'CHHINDWARA', 'Certified'),
(73, ' ACS/Q/16/06/406', '2015-06-07', 'JANNAT RESTURENT', 'QMS, JAS-ANZ', 'MOHA MADAN', 'RAIPUR, CHHATISGARH', 'Certified'),
(74, ' ACS/', '2015-06-10', 'SINHA ADVERTISING', 'QMS, JAS-ANZ', 'AJAY SINHA', 'RAIPUR, CHHATISGARH', 'NOT CERTIFIED'),
(80, 'ACS/10QZZA572K', '2015-06-22', 'BANDANA DENTAL  CLINIC', 'QMS, JAS-ANZ', 'AMIT KUMAR SINGH', 'CHHINDWARA', 'Certified'),
(76, ' ACS/10QDVW1628P', '2015-06-10', 'SUN SHINE SCHOOL', 'QMS, JAS-ANZ', 'SURYAKANT', 'RAIPUR, CHHATISGARH', ' CERTIFIED'),
(77, ' ACS/GCS/QMS/791', '2015-06-12', 'MAA GAYTRI HOSTEL', 'QMS, JAS-ANZ', 'JEEVAN SINGH', 'UJJAIN', ' CERTIFIED'),
(78, ' ACS/ 10QMMN1455X', '2015-06-15', 'VISHWA VEDANTA SCHOOL', 'QMS, APQO', 'ABHINAV', 'RAIPUR', ' CERTIFIED'),
(79, ' ACS/  ', '2015-06-16', 'CENTRAL INDIA EDUCATION', 'QMS, APQO', 'VIPIN MORYA', 'CHHINDWARA', ' NOT CERTIFIED'),
(81, 'ACS/10QYAB1571K', '2015-06-23', 'B.R.C PUBLIC SCHOOLL', 'QMS, JAS-ANZ', 'MR. BHUPENDR', 'KUNDA', 'Certified'),
(82, 'ACS/10QZA07077', '2015-07-04', 'P. R. JEWELLERS', 'QMS, APQO', 'Management Representative', 'RAIPUR', 'Certified'),
(84, 'ACS/10QWD07074', '2015-07-04', 'SHREE SAI INSTITUTE', 'QMS, APQO', 'Management Representative', 'RAJNANDGAON, CHHATISGARH', 'Certified'),
(85, 'ACS/10QYB07076', '2015-07-04', 'BHARGU JYOTISH KARALYA', 'QMS, APQO', 'Management Representative', 'DURG', 'Certified');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
