-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 07:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creative`
--

-- --------------------------------------------------------

--
-- Table structure for table `personalinfo`
--

CREATE TABLE `personalinfo` (
  `id` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `DateofBirth` varchar(150) NOT NULL,
  `FathersName` varchar(100) NOT NULL,
  `MartialStatus` varchar(100) NOT NULL,
  `MobileNumberLandLineNumber` varchar(50) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `CNICPASSPORT` varchar(50) NOT NULL,
  `HomeAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personalinfo`
--

INSERT INTO `personalinfo` (`id`, `NAME`, `DateofBirth`, `FathersName`, `MartialStatus`, `MobileNumberLandLineNumber`, `EmailAddress`, `CNICPASSPORT`, `HomeAddress`) VALUES
(6, 'Hassaan', '06-081994', 'Fazal shah', 'Single', '03139597339', 'eyesneverlies92@gmail.com', '1730162408909', 'kdsfdlskfdklsf'),
(29, 'hassaan', '2021-06-10', 'Imjad Khan', 'Mariied', '43568347589347957', 'hasaan123@gmail.com', '26809780953634', 'xyz'),
(30, 'arif khan', '2021-08-03', 'khan sahab', 'single', '098230809842739', 'bohut kamzorhoon@gmail.com', '17301-6240870-9', 'charganoun cjowk'),
(31, 'arif Ullah', '2021-06-30', 'khan', 'single', '30924023', 'dnskdksnd@gmail.com', '41326987423', 'djkfldfaldjksfkdsh'),
(32, 'Kamal Khan', '2021-06-29', 'Wali Khan', 'Married', '84903284-798320', 'dksdlsdg', 'jdjsbkjs', 'skajd'),
(33, 'Asif Raza', '2021-07-07', 'Raza ', 'Single', 'sdsd', 'sdsd', 'sdsd', 'sds'),
(34, 'Irfan Ullah', '2021-08-04', 'Imitiaz ullah', 'Married', 'sds', 'sds', 'sds', 'sds'),
(35, 'Riwan Ullah', '2021-08-04', 'Jawad Ullah', 'Single', 'sds', 'sds', 'sds', 'sds'),
(36, 'Jamshed Awan', '2021-08-05', 'Naveed Awan', 'sdsd', 'sdsd', 'sdsd', 'sddsd', 'sdsdsd'),
(37, 'Auwn Naqvi', '2021-07-27', 'ali naqvi', 'single', '398298047239', 'ckjdsahjklsdj', '894320147379', 'asdjcdsljhjds'),
(38, 'Sardar ali jan', '2021-07-28', 'Sardar nawab jan', 'dsfsdfds', 'dsfsdafasdf', 'dsfdsafds', 'dsfasdfds', 'dsfasdfsd'),
(39, 'ASFANDYAR aFRIDI', '2021-07-21', 'sHER Khan Afridi', 'Married', 'jkl', 'jkl', 'jlk', 'jl'),
(40, 'Ali Zeb', '2021-07-12', 'shah nawaz Zeb', 'Single', 'j', 'jj', 'k', 'j'),
(41, 'Jamal Khan', '2021-07-28', 'Ahmed Khan', 'Married', 'j', 'jj', 'j', 'j'),
(42, 'Syed Zain ul Abideen', '2021-08-04', 'SYed Ali Haider Rizvi', 'Single', 'sadsa', 'sadsa', 'sdsad', 'sadsa'),
(43, 'Syed Hussain Ali ', '2021-08-04', 'Ali Haider Naqvi', 'Single', 'asas', 'asas', 'asas', 'asa'),
(44, 'hassaan', '2021-07-06', 'syed Fazal Shah', 'Single', '03139597339', 'eyesneverlies92@gmail.com', '098-7089687956748', 'fgdghfkhgfkhfhf'),
(45, 'sdfsdfsf', '2021-06-30', 'dfs', 'dsfdf', 'dsfsdf', 'dsfdsf', 'dsfsdf', 'sdfsd'),
(46, 'dasdas', '2021-08-04', 'sdsad', 'sd', 'sad', 'sad', 'sasd', 'sdsd'),
(47, 'arif', '2021-08-04', 'khan', 'single', '03139597339', 'dlksajdksl;adjlsa', '03943284-20394823', 'eoriewrupewuroiewu '),
(48, 'Iqbal  Hassan', '2021-08-12', 'hassan imitiaz', 'single', '23412345676', 'abc@gmail.com', '34839284093240-0', 'cksdklfhadsfhdsfh'),
(49, 'ss', '2021-07-21', 's', 's', 's', 's', 's', 's'),
(50, 'Hassaan', '2021-07-15', 'Syed Fazal Shah', 'Single', '03139597339', 'eyesneverlies92@gmail.com', '17301-6240890-9', 'hayatabad phase 6'),
(51, 'Syed Hassaan Haider', '2021-07-07', 'Syed Fazal Shah', 'Single', '09834954-9358', 'fhdkjaslfdshlfhds', '3894032797329', 'kljfdhaksfhkld;shklf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personalinfo`
--
ALTER TABLE `personalinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personalinfo`
--
ALTER TABLE `personalinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
