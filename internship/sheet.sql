-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 08:18 AM
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
-- Database: `scholarship`
--

-- --------------------------------------------------------

--
-- Table structure for table `sheet`
--

CREATE TABLE `sheet` (
  `id` int(4) NOT NULL,
  `name` text DEFAULT NULL,
  `age` varchar(3) DEFAULT NULL,
  `class` varchar(25) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `religion` varchar(25) DEFAULT NULL,
  `caste` varchar(25) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `income` varchar(50) DEFAULT NULL,
  `pwd` varchar(25) DEFAULT NULL,
  `LINK` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sheet`
--

INSERT INTO `sheet` (`id`, `name`, `age`, `class`, `gender`, `religion`, `caste`, `state`, `income`, `pwd`, `LINK`) VALUES
(1, 'AAI Sports Scholarship Scheme in India', '14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.aai.aero/en/important-links/aai-sports-control-board'),
(2, 'Aakash National Talent Hunt Junior Exam (ANTHE)', NULL, '7-12', NULL, NULL, NULL, NULL, NULL, NULL, 'https://iacst.aakash.ac.in/'),
(3, 'Adobe India Women-in-Technology Scholarship', NULL, 'ug', 'f', NULL, NULL, NULL, NULL, NULL, 'https://www.adobe.com'),
(4, 'Adobe India Women-in-Technology Scholarship', NULL, 'pg', 'f', NULL, NULL, NULL, NULL, NULL, 'https://www.adobe.com'),
(5, 'AglaSem Talent Search Exam (ATSE)', NULL, '5-12', NULL, NULL, NULL, NULL, NULL, NULL, 'https://atse.aglasem.com'),
(6, 'AICTE pragati Saksham scholarship', NULL, NULL, NULL, NULL, NULL, NULL, '9', NULL, 'https://www.aicte-pragati-saksham-gov.in'),
(7, 'AICTE Pragati Scholarship for Girls', NULL, 'ug', 'f', NULL, NULL, NULL, NULL, NULL, 'https://www.aicte-india.org/'),
(8, 'AICTE Pragati Scholarship for Girls', NULL, 'pg', 'f', NULL, NULL, NULL, NULL, NULL, 'https://www.aicte-india.org/'),
(9, 'All India Scholarship Test Exam (AISTE)', NULL, '4-12', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.aiste.in/'),
(10, 'APJ ABDUL KALAM SCHOLARSHIP(KARNATAKA)', NULL, NULL, NULL, 'm', NULL, 'yes', '9', NULL, 'https://dom.karnataka.gov.in'),
(11, 'APJ ABDUL KALAM SCHOLARSHIP(KARNATAKA)', NULL, NULL, NULL, 's', NULL, 'yes', '9', NULL, 'https://dom.karnataka.gov.in'),
(12, 'APJ ABDUL KALAM SCHOLARSHIP(KARNATAKA)', NULL, NULL, NULL, 'c', NULL, 'yes', '9', NULL, 'https://dom.karnataka.gov.in'),
(13, 'APJ ABDUL KALAM SCHOLARSHIP(KARNATAKA)', NULL, NULL, NULL, 'b', NULL, 'yes', '9', NULL, 'https://dom.karnataka.gov.in'),
(14, 'APJ ABDUL KALAM SCHOLARSHIP(KARNATAKA)', NULL, NULL, NULL, 'j', NULL, 'yes', '9', NULL, 'https://dom.karnataka.gov.in'),
(15, 'APJ ABDUL KALAM SCHOLARSHIP(KARNATAKA)', NULL, NULL, NULL, 'p', NULL, 'yes', '9', NULL, 'https://dom.karnataka.gov.in'),
(16, 'BEGAM HAZRAT MAHAL NATIONAL SCHOLARSHIP', NULL, '9-12', 'f', 'm', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(17, 'BEGAM HAZRAT MAHAL NATIONAL SCHOLARSHIP', NULL, '9-12', 'f', 's', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(18, 'BEGAM HAZRAT MAHAL NATIONAL SCHOLARSHIP', NULL, '9-12', 'f', 'c', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(19, 'BEGAM HAZRAT MAHAL NATIONAL SCHOLARSHIP', NULL, '9-12', 'f', 'b', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(20, 'BEGAM HAZRAT MAHAL NATIONAL SCHOLARSHIP', NULL, '9-12', 'f', 'j', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(21, 'BEGAM HAZRAT MAHAL NATIONAL SCHOLARSHIP', NULL, '9-12', 'f', 'p', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(22, 'Bighelp For Education National Merit Scholarship', NULL, '11-12', NULL, NULL, NULL, NULL, '1', NULL, 'http://bighelp.org/bhp/site/scholarships'),
(23, 'CBSE Merit Scholarship Scheme for Single Girl Child 2021', NULL, '11-12', 'f', NULL, NULL, NULL, '2', NULL, 'https://www.cbse.gov.in/Scholarship/Webpages/Guidelines%20and%20AF.html'),
(24, 'CBSE Udaan Scholarship', NULL, '10-12', 'f', NULL, NULL, NULL, NULL, NULL, 'https://transformingindia.mygov.in/scheme/udaan-cbse-scholarship-program/'),
(25, 'CENTRAL SECTOR SCHEME FOR NATIONAL OVERSEAS', NULL, 'pg', NULL, 'h', 'sc', NULL, '5', NULL, 'https://india.gov.in'),
(26, 'CENTRAL SECTOR SCHEME FOR NATIONAL OVERSEAS', NULL, 'pg', NULL, 'h', 'st', NULL, '5', NULL, 'https://india.gov.in'),
(27, 'CENTRAL SECTOR SCHEME FOR NATIONAL OVERSEAS', NULL, 'pg', NULL, 'h', 'obc', NULL, '5', NULL, 'https://india.gov.in'),
(28, 'Central Sector Scheme of Scholarship for College and University Students', NULL, 'ug', NULL, NULL, NULL, NULL, '9', NULL, 'https://scholarships.gov.in/'),
(29, 'Central Sector Scheme of Scholarship for College and University Students', NULL, 'pg', NULL, NULL, NULL, NULL, '9', NULL, 'https://scholarships.gov.in/'),
(30, 'Clinic Plus Scholarship', NULL, NULL, 'f', NULL, NULL, 'yes', NULL, NULL, 'http://www.clinicplus.in/'),
(31, 'CSIR Innovation Award for School Children (CIASC)', '1-1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.csir.res.in/achievements/awards/csir-innovation-award-for-school-children'),
(32, 'Cultural Talent Search Scholarship Scheme', NULL, '1-10', NULL, NULL, NULL, NULL, '1', NULL, 'http://ccrtindia.gov.in/scholarship.php'),
(33, 'DEVARAJ ARASU SCHOLARSHIP(KARNATAKA)', NULL, '11-12', NULL, NULL, 'm', 'yes', '4', NULL, 'https://bcwd.karnataka.gov.in/'),
(34, 'DEVARAJ ARASU SCHOLARSHIP(KARNATAKA)', NULL, 'ug', NULL, NULL, 'm', 'yes', '4', NULL, 'https://bcwd.karnataka.gov.in/'),
(35, 'DEVARAJ ARASU SCHOLARSHIP(KARNATAKA)', NULL, 'pg', NULL, NULL, 'm', 'yes', '4', NULL, 'https://bcwd.karnataka.gov.in/'),
(36, 'Dhirubhai Ambani Scholarship Programme', NULL, 'ug', NULL, NULL, NULL, NULL, '6', NULL, 'https://das.reliancefoundation.org/'),
(37, 'Dr. Reddy’s Foundation Sashakt Scholarship', NULL, 'ug', 'f', NULL, NULL, NULL, NULL, NULL, 'https://www.sashaktscholarship.org'),
(38, 'Education Scholarship Scheme for Army Personnel (ESSA)', '13-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://scholarship.awesindia.com/'),
(39, 'Financial Assistance for Education of\nChildren/ Widows of ESM (Ex-Service Men)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.desw.gov.in/welfareschemes/rmewf							-financial-assistance-education-childrenwidows-esm'),
(40, 'Goonj Grassroots Fellowship', '21-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://goonj.org/rural-fellowship/'),
(41, 'HDFC Ltd’s Badhte Kadam Scholarship', NULL, '9-12', NULL, NULL, NULL, NULL, '8', NULL, 'https://www.buddy4study.com/page/hdfc-ltds-badhte-kadam-scholarship'),
(42, 'HP Udaan Scholarship Program', NULL, 'ug', NULL, NULL, NULL, NULL, '6', NULL, 'https://www.hpindiacsr.com'),
(43, 'Internshala Career Scholarship for Girls', '17-', NULL, 'f', NULL, NULL, NULL, NULL, NULL, 'https://blog.internshala.com/'),
(44, 'ISRO-Young Scientist Program (YUVIKA)', NULL, '9', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.isro.gov.in/capacity-building/yuvika-yuva-vigyani-karyakram-young-scientist-programme'),
(45, 'Jamia Hamdard University Admission Scholarship', NULL, 'ug', NULL, NULL, NULL, NULL, '6', NULL, 'http://jamiahamdard.edu/'),
(46, 'Jamia Hamdard University Admission Scholarship', NULL, 'pg', NULL, NULL, NULL, NULL, '6', NULL, 'http://jamiahamdard.edu/'),
(47, 'Keep India Smiling Foundational Grant for Individuals Helping Others 2021-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.colgate.com/en-in/smile-karo-aur-								shuru-ho-jao/foundation-scholarship'),
(48, 'Legrand Scholarship Program', NULL, 'ug', 'f', NULL, NULL, NULL, '7', NULL, 'http://www.legrandscholarship.co.in/'),
(49, 'LIC Golden Jubilee Scholarship', NULL, '11-12', NULL, NULL, NULL, NULL, '3', NULL, 'https://licindia.in/Bottom-Links/Golden-Jubilee-Foundation/Scholarship'),
(50, 'L\'Oréal India For Young Women In Science Scholarships', NULL, 'ug', 'f', NULL, NULL, NULL, '6', NULL, 'https://www.loreal.com/en/india/articles/commitments/the-india-for-young-women-in-science-scholarship-programme/'),
(51, 'MAULANA AZAD NATIONAL FELLOWSHIP FOR MINORITY', NULL, 'pg', NULL, 'm', NULL, NULL, '4', NULL, 'https://ugc.ac.in'),
(52, 'MAULANA AZAD NATIONAL FELLOWSHIP FOR MINORITY', NULL, 'pg', NULL, 's', NULL, NULL, '4', NULL, 'https://ugc.ac.in'),
(53, 'MAULANA AZAD NATIONAL FELLOWSHIP FOR MINORITY', NULL, 'pg', NULL, 'c', NULL, NULL, '4', NULL, 'https://ugc.ac.in'),
(54, 'MAULANA AZAD NATIONAL FELLOWSHIP FOR MINORITY', NULL, 'pg', NULL, 'b', NULL, NULL, '4', NULL, 'https://ugc.ac.in'),
(55, 'MAULANA AZAD NATIONAL FELLOWSHIP FOR MINORITY', NULL, 'pg', NULL, 'j', NULL, NULL, '4', NULL, 'https://ugc.ac.in'),
(56, 'MAULANA AZAD NATIONAL FELLOWSHIP FOR MINORITY', NULL, 'pg', NULL, 'p', NULL, NULL, '4', NULL, 'https://ugc.ac.in'),
(57, 'Merck India Charitable Trust (MICT) Scholarship Program', NULL, '11-12', NULL, NULL, NULL, NULL, '1', NULL, 'https://www.merckgroup.com/in-en/company/corporate-social-responsibility/education/mict.html'),
(58, 'MERIT CUM MEANS SCHOLARSHIP FOR TECHNICAL COURSES', NULL, 'pg', NULL, 'm', NULL, NULL, '4', NULL, 'https://www.minorityaffairs.gov.in'),
(59, 'MERIT CUM MEANS SCHOLARSHIP FOR TECHNICAL COURSES', NULL, 'pg', NULL, 's', NULL, NULL, '4', NULL, 'https://www.minorityaffairs.gov.in'),
(60, 'MERIT CUM MEANS SCHOLARSHIP FOR TECHNICAL COURSES', NULL, 'pg', NULL, 'c', NULL, NULL, '4', NULL, 'https://www.minorityaffairs.gov.in'),
(61, 'MERIT CUM MEANS SCHOLARSHIP FOR TECHNICAL COURSES', NULL, 'pg', NULL, 'b', NULL, NULL, '4', NULL, 'https://www.minorityaffairs.gov.in'),
(62, 'MERIT CUM MEANS SCHOLARSHIP FOR TECHNICAL COURSES', NULL, 'pg', NULL, 'j', NULL, NULL, '4', NULL, 'https://www.minorityaffairs.gov.in'),
(63, 'MERIT CUM MEANS SCHOLARSHIP FOR TECHNICAL COURSES', NULL, 'pg', NULL, 'z', NULL, NULL, '4', NULL, 'https://www.minorityaffairs.gov.in'),
(64, 'MoBitE Foundation Undergraduate Endowment\nScholarship', '17-', 'ug', NULL, NULL, NULL, NULL, '4', NULL, 'https://apply.scholarshipcouncil.com/?_ga=2.94595993.480329390.1649310283-500846931.1649310282'),
(65, 'MoBitE Foundation Undergraduate Endowment\nScholarship', NULL, 'pg', NULL, NULL, NULL, NULL, '4', NULL, 'https://apply.scholarshipcouncil.com/?_ga=2.94595993.480329390.1649310283-500846931.1649310282'),
(66, 'National Economics Olympiad', NULL, '11-12', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.nationaleconomicsolympiad.org/'),
(67, 'National Entrance Screening Test (NEST)', NULL, 'ug', NULL, 'h', 'sc', NULL, NULL, NULL, 'https://www.nestexam.in/'),
(68, 'National Entrance Screening Test (NEST)', NULL, 'ug', NULL, 'h', 'st', NULL, NULL, NULL, 'https://www.nestexam.in/'),
(69, 'NATIONAL FELLOWSHIP AND SCHOLARSHIP FOR HIGHER EDUCATION OF ST STUDENTS', NULL, NULL, NULL, 'h', 'st', NULL, NULL, NULL, 'https://scholarships.gov.in'),
(70, 'NATIONAL FELLOWSHIP AND SCHOLARSHIP FOR SC STUDENTS', NULL, 'pg', NULL, 'h', 'sc', NULL, NULL, NULL, 'https://ugc.ac.in'),
(71, 'NATIONAL FELLOWSHIP AND SCHOLARSHIP FOR SC STUDENTS', NULL, 'pg', NULL, 'h', 'st', NULL, NULL, NULL, 'https://ugc.ac.in'),
(72, 'NATIONAL FELLOWSHIP FOR OBC', NULL, NULL, NULL, 'h', 'obc', NULL, '8', NULL, 'https://nfobc.ugc.ac.in'),
(73, 'NATIONAL OVERSEAS FOR SC SCHOLARSHIP', NULL, NULL, NULL, 'h', 'sc', NULL, '9', NULL, 'https://nosmsje.gov.in'),
(74, 'NATIONAL OVERSEAS FOR ST SCHOLARSHIP', NULL, 'pg', NULL, 'h', 'st', NULL, '8', NULL, 'https://tribal.nic.in'),
(75, 'National Scholarship Scheme (SAKSHAM) HRDM', '16-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://medhavionline.org/'),
(76, 'National Scholarship Scheme (SAMADHAN) -II HRDM', '16-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://medhavionline.org/'),
(77, 'National Scholarship Scheme (SWAWLAMBAN) HRDM', '16-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://medhavionline.org/'),
(78, 'NSP Financial Assistance for Education of the Wards of Beedi/Cine/IOMC/LSDM Workers - Pre-Matric', NULL, '1-10', NULL, NULL, NULL, NULL, '1', NULL, 'https://scholarships.gov.in'),
(79, 'NTPC SCHOLARSHIP', NULL, 'ug', NULL, 'h', 'sc', NULL, NULL, NULL, 'https://www.ntpc.co.in'),
(80, 'NTPC SCHOLARSHIP', NULL, NULL, NULL, 'h', 'st', NULL, NULL, NULL, 'https://www.ntpc.co.in'),
(81, 'Nurture Merit cum Means Scholarship', NULL, 'ug', NULL, NULL, NULL, NULL, '3', NULL, 'https://scholarshipdunia.com/nurture-merit-cum-means-scholarship-scheme-2020/'),
(82, 'Nurturing Brilliance Cummins Scholarship Program', '18-', NULL, NULL, NULL, NULL, NULL, '5', NULL, 'https://www.cumminsindia.com/corporate-responsibility/projects/higher-education/scholarship-program'),
(83, 'OIL AND NATURAL GAS CORPORATION (ONGC) SCHOLARSHIP', NULL, 'ug', NULL, 'h', 'sc', NULL, NULL, NULL, 'https://www.ongcindia.com'),
(84, 'OIL AND NATURAL GAS CORPORATION (ONGC) SCHOLARSHIP', NULL, 'ug', NULL, 'h', 'st', NULL, '3', NULL, 'https://www.ongcindia.com'),
(85, 'OIL AND NATURAL GAS CORPORATION (ONGC) SCHOLARSHIP', NULL, 'ug', NULL, 'h', 'obc', NULL, '3', NULL, 'https://www.ongcindia.com'),
(86, 'OIL AND NATURAL GAS CORPORATION (ONGC) SCHOLARSHIP', NULL, 'ug', NULL, 'h', 'ge', NULL, '3', NULL, 'https://www.ongcindia.com'),
(87, 'OIL AND NATURAL GAS CORPORATION (ONGC) SCHOLARSHIP', NULL, 'pg', NULL, 'h', 'sc', NULL, '3', NULL, 'https://www.ongcindia.com'),
(88, 'OIL AND NATURAL GAS CORPORATION (ONGC) SCHOLARSHIP', NULL, 'pg', NULL, 'h', 'st', NULL, '3', NULL, 'https://www.ongcindia.com'),
(89, 'OIL AND NATURAL GAS CORPORATION (ONGC) SCHOLARSHIP', NULL, 'pg', NULL, 'h', 'obs', NULL, '3', NULL, 'https://www.ongcindia.com'),
(90, 'OIL AND NATURAL GAS CORPORATION (ONGC) SCHOLARSHIP', NULL, 'pg', NULL, 'h', 'ge', NULL, '3', NULL, 'https://www.ongcindia.com'),
(91, 'PG SCHOLARSHIP SCHEME FOR SC ST STUDENTS FOR PERSUING PROFESSIONAL COURSES', NULL, 'pg', NULL, 'h', 'sc', NULL, NULL, NULL, 'https://scholarships.gov.in'),
(92, 'PG SCHOLARSHIP SCHEME FOR SC ST STUDENTS FOR PERSUING PROFESSIONAL COURSES', NULL, 'pg', NULL, 'h', 'st', NULL, NULL, NULL, 'https://scholarships.gov.in'),
(93, 'POST MARTIC SCHOLARSHIP FOR SC STUDENTS', NULL, '11-12', NULL, 'h', 'sc', NULL, '1', NULL, 'https://scholarships.gov.in'),
(94, 'POST MARTIC SCHOLARSHIP FOR SC STUDENTS', NULL, 'ug', NULL, 'h', 'sc', NULL, '1', NULL, 'https://scholarships.gov.in'),
(95, 'POST MARTIC SCHOLARSHIP FOR SC STUDENTS', NULL, 'pg', NULL, 'h', 'sc', NULL, '1', NULL, 'https://scholarships.gov.in'),
(96, 'POST MATRIC OBC SCHOLARSHIP', NULL, '10-12', NULL, 'h', 'obc', NULL, '2', NULL, 'https://scholarships.gov.in'),
(97, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, '11-12', NULL, 'm', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(98, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, '11-12', NULL, 's', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(99, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, '11-12', NULL, 'c', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(100, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, '11-12', NULL, 'b', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(101, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, '11-12', NULL, 'j', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(102, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, '11-12', NULL, 'p', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(103, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, 'ug', NULL, 'm', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(104, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, 'ug', NULL, 's', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(105, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, 'ug', NULL, 'c', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(106, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, 'ug', NULL, 'b', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(107, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, 'ug', NULL, 'j', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(108, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, 'ug', NULL, 'p', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(109, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, 'pg', NULL, 'm', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(110, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, 'pg', NULL, 's', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(111, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, 'pg', NULL, 'c', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(112, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, 'pg', NULL, 'b', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(113, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, 'pg', NULL, 'j', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(114, 'POST MATRIC SCHOLARSHIP FOR MINORITIES', NULL, 'pg', NULL, 'p', NULL, NULL, '3', NULL, 'https://scholarships.gov.in'),
(115, 'POST MATRIC ST SCHOLARSHIP', NULL, '10-11', NULL, 'h', 'st', NULL, '3', NULL, 'https://scholarships.gov.in'),
(116, 'POST MATRIC ST SCHOLARSHIP', NULL, 'ug', NULL, 'h', 'st', NULL, '3', NULL, 'https://scholarships.gov.in'),
(117, 'POST MATRIC ST SCHOLARSHIP', NULL, 'pg', NULL, 'h', 'st', NULL, '3', NULL, 'https://scholarships.gov.in'),
(118, 'Post-Graduate Indira Gandhi Scholarship for Single Girl Child', '1-3', NULL, 'f', NULL, NULL, NULL, NULL, NULL, 'https://scholarships.gov.in'),
(119, 'Prabha Dutt Fellowship', '25-', NULL, 'f', NULL, NULL, NULL, NULL, NULL, 'http://www.sanskritifoundation.org/index.html'),
(120, 'PRE MATRIC SCHOLARSHIP FOR MINORITIES', NULL, '1-10', NULL, 'm', NULL, NULL, '1', NULL, 'https://scholarships.gov.in'),
(121, 'PRE MATRIC SCHOLARSHIP FOR MINORITIES', NULL, '1-10', NULL, 's', NULL, NULL, '1', NULL, 'https://scholarships.gov.in'),
(122, 'PRE MATRIC SCHOLARSHIP FOR MINORITIES', NULL, '1-10', NULL, 'c', NULL, NULL, '', NULL, 'https://scholarships.gov.in'),
(123, 'PRE MATRIC SCHOLARSHIP FOR MINORITIES', NULL, '1-10', NULL, 'b', NULL, NULL, '1', NULL, 'https://scholarships.gov.in'),
(124, 'PRE MATRIC SCHOLARSHIP FOR MINORITIES', NULL, '1-10', NULL, 'j', NULL, NULL, '1', NULL, 'https://scholarships.gov.in'),
(125, 'PRE MATRIC SCHOLARSHIP FOR MINORITIES', NULL, '1-10', NULL, 'p', NULL, NULL, '1', NULL, 'https://scholarships.gov.in'),
(126, 'PRE MATRIC SCHOLARSHIP FOR OBC', NULL, '1-10', NULL, 'h', 'obc', NULL, '4', NULL, 'https://www.socialjustice.nic.in'),
(127, 'PRE MATRIC SCHOLARSHIP FOR STUDENTS WITH DISABILITIES', NULL, '9-10', NULL, NULL, NULL, NULL, NULL, NULL, 'https://scholarships.gov.in'),
(128, 'PRE MATRIC ST SCHOLARSHIP', NULL, '9-10', NULL, 'h', 'st', NULL, '3', NULL, 'https://scholarships.gov.in'),
(129, 'PRERANA SCHOLARSHIP', NULL, '11-12', NULL, 'h', 'sc', NULL, NULL, NULL, 'https://www.aicte-india.org/user/login'),
(130, 'PRERANA SCHOLARSHIP', NULL, '11-12', NULL, 'h', 'st', NULL, NULL, NULL, 'https://www.aicte-india.org/user/login'),
(131, 'PRERANA SCHOLARSHIP', NULL, 'ug', NULL, 'h', 'sc', NULL, NULL, NULL, 'https://www.aicte-india.org/user/login'),
(132, 'PRERANA SCHOLARSHIP', NULL, 'ug', NULL, 'h', 'st', NULL, NULL, NULL, 'https://www.aicte-india.org/user/login'),
(133, 'PRERANA SCHOLARSHIP', NULL, 'pg', NULL, 'h', 'sc', NULL, NULL, NULL, 'https://www.aicte-india.org/user/login'),
(134, 'PRERANA SCHOLARSHIP', NULL, 'pg', NULL, 'h', 'st', NULL, NULL, NULL, 'https://www.aicte-india.org/user/login'),
(135, 'PRIZE MONEY SCHOLARSHIP(KARNATAKA)', NULL, '12', NULL, 'h', 'sc', 'yes', NULL, NULL, 'https://sw.kar.nic.in'),
(136, 'PRIZE MONEY SCHOLARSHIP(KARNATAKA)', NULL, '12', NULL, 'h', 'st', 'yes', NULL, NULL, 'https://sw.kar.nic.in'),
(137, 'PRIZE MONEY SCHOLARSHIP(KARNATAKA)', NULL, '12', NULL, 'h', 'obc', 'yes', NULL, NULL, 'https://sw.kar.nic.in'),
(138, 'PRIZE MONEY SCHOLARSHIP(KARNATAKA)', NULL, 'ug', NULL, 'h', 'sc', 'yes', NULL, NULL, 'https://sw.kar.nic.in'),
(139, 'PRIZE MONEY SCHOLARSHIP(KARNATAKA)', NULL, 'ug', NULL, 'h', 'st', 'yes', NULL, NULL, 'https://sw.kar.nic.in'),
(140, 'PRIZE MONEY SCHOLARSHIP(KARNATAKA)', NULL, 'ug', NULL, 'h', 'obc', 'yes', NULL, NULL, 'https://sw.kar.nic.in'),
(141, 'PRIZE MONEY SCHOLARSHIP(KARNATAKA)', NULL, 'pg', NULL, 'h', 'sc', 'yes', NULL, NULL, 'https://sw.kar.nic.in'),
(142, 'PRIZE MONEY SCHOLARSHIP(KARNATAKA)', NULL, 'pg', NULL, 'h', 'st', 'yes', NULL, NULL, 'https://sw.kar.nic.in'),
(143, 'PRIZE MONEY SCHOLARSHIP(KARNATAKA)', NULL, 'pg', NULL, 'h', 'obc', 'yes', NULL, NULL, 'https://sw.kar.nic.in'),
(144, 'RAJIV GANDHI NATIONAL FELLOWSHIP FOR SC', NULL, 'pg', NULL, 'h', 'sc', NULL, NULL, NULL, 'https://ugc.ac.in'),
(145, 'Rolls-Royce Unnati Scholarships for Women Engineering Students', NULL, 'ug', 'f', NULL, NULL, NULL, NULL, NULL, 'https://www.buddy4study.com/page/rolls-royce-unnati-scholarships-for-women-engineering-students'),
(146, 'Sanganeria Foundation Merit Cum Means Scholarship', NULL, 'ug', NULL, NULL, NULL, NULL, '8', NULL, 'https://sanganeriafoundation.org/Home/Application'),
(147, 'Sanganeria Foundation Merit Cum Means Scholarship', NULL, 'pg', NULL, NULL, NULL, NULL, '8', NULL, 'https://sanganeriafoundation.org/Home/Application'),
(148, 'Santoor Scholarship', NULL, '12', 'f', NULL, NULL, 'yes', NULL, NULL, 'https://www.santoorscholarship.com'),
(149, 'Sardar Patel Crisis Scholarship Programme:\r\nSardar Patel Crisis Scholarship Programme\r\nSardar Patel Crisis Scholarship Programme for Orphaned\r\nSardar Patel Crisis Scholarship for Students/Family in\r\nMedical Crisis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.buddy4study.com/page/sardar-patel-crisis-scholarship-programme'),
(150, 'SCHEME FOR FREE COACHING FOR SC/OBC', NULL, NULL, NULL, 'h', 'obc', NULL, '9', NULL, 'https://coaching.dosje.gov.in'),
(151, 'SCHEME FOR FREE COACHING FOR SC/OBC', NULL, NULL, NULL, 'h', 'sc', NULL, '9', NULL, 'https://coaching.dosje.gov.in'),
(152, 'Scholarships for Top Class Education for students with disabilities.', NULL, NULL, NULL, NULL, NULL, NULL, '8', NULL, 'https://scholarships.gov.in'),
(153, 'Shiksha ki Udaan Scholarship program for girls', NULL, '8-12', 'f', NULL, NULL, NULL, '5', NULL, 'https://iiflsamasta.com/'),
(154, 'Shiksha ki Udaan Scholarship program for girls', NULL, 'ug', 'f', NULL, NULL, NULL, '5', NULL, 'https://iiflsamasta.com/'),
(155, 'Shiksha ki Udaan Scholarship program for girls', NULL, 'pg', 'f', NULL, NULL, NULL, '5', NULL, 'https://iiflsamasta.com/'),
(156, 'Shriram Automall Education Scholarship Programme', NULL, '8-12', NULL, NULL, NULL, NULL, '1', NULL, 'https://www.samil.in/'),
(157, 'Siemens Scholarship Program', '1-2', NULL, NULL, NULL, NULL, NULL, '3', NULL, 'https://new.siemens.com/in/en/company/sustainability/corporate-citizenship/siemens-scholarship-program.html'),
(158, 'SOF Girl Child Sholarship Scheme(G.C.S.S)', NULL, '1-10', 'f', NULL, NULL, NULL, '1', NULL, 'https://sofworld.org/girl-child-scholarship-scheme-gcss'),
(159, 'SOF International English Olympiad (IEO)', '', '1-12', NULL, NULL, NULL, NULL, NULL, NULL, 'https://sofworld.org/ieo'),
(160, 'SOF- International General Knowledge Olympiad (IGKO)', NULL, '1-10', NULL, NULL, NULL, NULL, NULL, NULL, 'https://sofworld.org/igko'),
(161, 'SOF International Mathematics Olympiad (IMO)', NULL, '1-12', NULL, NULL, NULL, NULL, NULL, NULL, 'https://sofworld.org/imo'),
(162, 'SOF National Cyber Olympiad (NCO)', NULL, '1-10', NULL, NULL, NULL, NULL, NULL, NULL, 'https://sofworld.org/nso'),
(163, 'SOF National Science Olympiad (NSO)', NULL, '1-12', NULL, NULL, NULL, NULL, NULL, NULL, 'https://sofworld.org/nso'),
(164, 'SOF Scholarship of Excellence in English(S.E.E.)', NULL, '1-10', NULL, NULL, NULL, NULL, NULL, NULL, 'https://sofworld.org/scholarship-for-excellence-in-english-see'),
(165, 'SSP SCHOLARSHIP(KARNATAKA)', NULL, '11-12', NULL, 'h', 'sc', 'yes', '3', NULL, 'https://ssp.karnataka.gov.in'),
(166, 'SSP SCHOLARSHIP(KARNATAKA)', NULL, 'ug', NULL, 'h', 'sc', 'yes', '3', NULL, 'https://ssp.karnataka.gov.in'),
(167, 'SSP SCHOLARSHIP(KARNATAKA)', NULL, 'pg', NULL, 'h', 'sc', 'yes', '3', NULL, 'https://ssp.karnataka.gov.in'),
(168, 'SSP SCHOLARSHIP(KARNATAKA)', NULL, '11-12', NULL, 'h', 'st', 'yes', '3', NULL, 'https://ssp.karnataka.gov.in'),
(169, 'SSP SCHOLARSHIP(KARNATAKA)', NULL, 'ug', NULL, 'h', 'st', 'yes', '3', NULL, 'https://ssp.karnataka.gov.in'),
(170, 'SSP SCHOLARSHIP(KARNATAKA)', NULL, 'pg', NULL, 'h', 'st', 'yes', '3', NULL, 'https://ssp.karnataka.gov.in'),
(171, 'SSP SCHOLARSHIP(KARNATAKA)', NULL, '11-12', NULL, 'h', 'obc', 'yes', '3', NULL, 'https://ssp.karnataka.gov.in'),
(172, 'SSP SCHOLARSHIP(KARNATAKA)', NULL, 'ug', NULL, 'h', 'obc', 'yes', '3', NULL, 'https://ssp.karnataka.gov.in'),
(173, 'SSP SCHOLARSHIP(KARNATAKA)', NULL, 'pg', NULL, 'h', 'obc', 'yes', '3', NULL, 'https://ssp.karnataka.gov.in'),
(174, 'SSP SCHOLARSHIP(KARNATAKA)', NULL, '11-12', NULL, 'h', 'g', 'yes', '3', NULL, 'https://ssp.karnataka.gov.in'),
(175, 'SSP SCHOLARSHIP(KARNATAKA)', NULL, 'ug', NULL, 'h', 'g', 'yes', '3', NULL, 'https://ssp.karnataka.gov.in'),
(176, 'SSP SCHOLARSHIP(KARNATAKA)', NULL, 'pg', NULL, 'h', 'g', 'yes', '3', NULL, 'https://ssp.karnataka.gov.in'),
(177, 'SSP SCHOLARSHIP(KARNATAKA)', NULL, '11-12', NULL, 'h', 'm', 'yes', '3', NULL, 'https://ssp.karnataka.gov.in'),
(178, 'SSP SCHOLARSHIP(KARNATAKA)', NULL, 'ug', NULL, 'h', 'm', 'yes', '3', NULL, 'https://ssp.karnataka.gov.in'),
(179, 'SSP SCHOLARSHIP(KARNATAKA)', NULL, 'pg', NULL, 'h', 'm', 'yes', '3', NULL, 'https://ssp.karnataka.gov.in'),
(180, 'Tata Building India Online Essay Competition', NULL, '6-12', NULL, NULL, NULL, NULL, '3', NULL, 'https://iur.ls/TataBuildingIndia'),
(181, 'The Cadence Scholarship program', NULL, 'ug', NULL, NULL, NULL, 'yes', '3', NULL, 'https://www.cadence.com/en_US/home/company/cadence-academic-network/women-in-tech-scholarship.html'),
(182, 'The Cadence Scholarship program', NULL, 'pg', NULL, NULL, NULL, 'yes', '3', NULL, 'https://www.cadence.com/en_US/home/company/cadence-academic-network/women-in-tech-scholarship.html'),
(183, 'The Education Scholarship Scheme for Wards of Soldiers who Die in Harness', NULL, '1-12', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.indianarmyveterans.gov.in/'),
(184, 'The Tata Capital Pankh Scholarship Programme', NULL, '11-12', NULL, NULL, NULL, NULL, '6', NULL, 'https://www.buddy4study.com/page/the-tata-capital-pankh-scholarship-programme'),
(185, 'TOP CLASS EDUCATION SCHEME FOR SC STUDENTS', NULL, 'ug', NULL, 'h', 'sc', NULL, '3', NULL, 'https://scholarships.gov.in'),
(186, 'TOP CLASS EDUCATION SCHEME FOR SC STUDENTS', NULL, 'pg', NULL, 'h', 'sc', NULL, '3', NULL, 'https://scholarships.gov.in'),
(187, 'Vahani Scholarship', NULL, '12', NULL, NULL, NULL, NULL, '3', NULL, 'https://vahanischolarship.in/'),
(188, 'Vedavalli\'s ShikshaDaan Scholarship', NULL, 'ug', 'f', NULL, NULL, NULL, '3', NULL, 'https://www.shikshadaan.com/'),
(189, 'Vedavalli\'s ShikshaDaan Scholarship', NULL, 'pg', 'f', NULL, NULL, NULL, '3', NULL, 'https://www.shikshadaan.com/'),
(190, 'Vidyadhan Karnataka Class 11 and 12 Scholarship Program', NULL, '11-12', NULL, NULL, NULL, 'yes', '3', NULL, 'https://www.vidyadhan.org/apply'),
(191, 'Women Scientist Scheme-B (WOS-B)', '27-', NULL, 'f', NULL, NULL, NULL, NULL, NULL, 'http://online-wosa.gov.in/wosb/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sheet`
--
ALTER TABLE `sheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sheet`
--
ALTER TABLE `sheet`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
