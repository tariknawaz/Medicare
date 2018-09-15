-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 05:15 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `med`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `patientName` varchar(30) NOT NULL,
  `docName` varchar(30) NOT NULL,
  `centerName` varchar(30) NOT NULL,
  `centerLocation` varchar(30) NOT NULL,
  `centerPhone` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE `center` (
  `name` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `location` varchar(100) NOT NULL,
  `userName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`name`, `password`, `email`, `phone`, `location`, `userName`) VALUES
('Apollo', '12345678', 'info@apollo.com', '0182-3456781', 'Bashundhara', 'Apollo'),
('CMH', '12345678', 'info@cmh.com', '0172-3456782', 'Cantonment', 'CMH'),
('Labaid', 'zzzz', 'info@labaidgroup.com', '0171-8089597', 'Dhanmondi', 'Labaid'),
('Prescription Point', 'ssss', 'pres@point.com', '0181-8712451', 'Banani', 'Point'),
('Popular', '3456', 'popular@diagnostic.c', '0167-1698125', 'Dhanmondi', 'Popular'),
('Square', '12345678', 'info@square.com', '0187-2397073', 'Gulshan', 'Square');

-- --------------------------------------------------------

--
-- Table structure for table `consultant`
--

CREATE TABLE `consultant` (
  `consultID` int(20) NOT NULL,
  `centerName` varchar(200) NOT NULL,
  `centerLocation` varchar(200) NOT NULL,
  `centerPhone` varchar(200) NOT NULL,
  `docName` varchar(200) NOT NULL,
  `docSpecialty` varchar(200) NOT NULL,
  `docQualification` varchar(200) NOT NULL,
  `docArea` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultant`
--

INSERT INTO `consultant` (`consultID`, `centerName`, `centerLocation`, `centerPhone`, `docName`, `docSpecialty`, `docQualification`, `docArea`) VALUES
(1, 'Labaid', 'Dhanmondi', '0171-8089597', 'Dr.Afrooza Haque', 'ENT', 'MBBS, MS(ENT)', 'ENT Specialist and Surgeon'),
(2, 'Labaid', 'Dhanmondi', '0171-8089597', 'Dr.Abdul Momen', 'Cardiology', 'MBBS,FCPS(Medicine),MD(Cardiology)', 'Medicine and rheumatic fever specialist'),
(3, 'Labaid', 'Dhanmondi', '0171-8089597', 'Dr.Amin Rahman', 'Neurologist', 'MBBS, MD(Neurologist)', 'Consultant Neurologist'),
(4, 'Prescription Point', 'Banani', '0181-8712451', 'Dr.Anisur Rahman', 'Oncology', 'MBBS,DIH,DMRT', 'Cancer Specialist'),
(5, 'Prescription Point', 'Banani', '0181-8712451', 'Dr.Firoz Sheikh', 'Nephrology', 'MBBS,MD,PRCP,FISN', 'Kidney Diseases Specialist'),
(6, 'Prescription Point', 'Banani', '0181-8712451', 'Dr.Husne Ara', 'ENT', 'MBBS,FCPS', 'ENT Specialist and Surgeon'),
(7, 'Prescription Point', 'Banani', '0181-8712451', 'Dr.Iqram Hossain', 'Orthopedics', 'MBBS, d.ORTH,FAMS', 'Specialty in Orthopedics'),
(8, 'Popular', 'Dhanmondi', '0167-1698125', 'Dr.Mahmudul Kais', 'Gastroenterology', 'MBBS,BCS,MD', 'Specialized Medicine & Trainig in Internal Diabetes'),
(9, 'Popular', 'Dhanmondi', '0167-1698125', 'Dr.Mobin Saleh', 'Diabetology', 'MBBS,MCPS,CC', 'Medicine and Diabetologist'),
(10, 'Popular', 'Dhanmondi', '0167-1698125', 'Dr.Shamsul Kabir', 'Cardiology', 'MBBS,MCPS,FCPS(Medicine)', 'Classified Medicine Specialist & Cardiologist');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `specialty` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `hour` varchar(10) NOT NULL,
  `area` varchar(200) NOT NULL,
  `userName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`specialty`, `qualification`, `hour`, `area`, `userName`) VALUES
('ENT', 'MBBS, MS (ENT)', '3-5', 'ENT Specialist and Surgeon', 'Abdul'),
('ENT', 'MBBS, MS (ENT)', '3-5', 'ENT Specialist and Surgeon', 'Afrooza'),
('Neurologist', 'MBBS, MD (Neurology)', '3-5', 'Consultant Neurologist', 'Amin'),
('Oncology', 'MBBS, DIH, DMRT', '7.30-9', 'Cancer Specialist', 'Anis'),
('Nephrology', 'MBBS, MD (Nephrology), FRCP (Edinburgh), FISN (Japan)', '6-8', 'Kidney Diseases Specialist', 'Firoz'),
('ENT', 'MBBS, FCPS (ENT)', '12-2', 'ENT Specialist and Surgeon', 'Husne'),
('Orthopedics', 'MBBS (DAC), D.ORTH, FAMS', '5-8', 'Specialty in Orthopedics', 'Iqram'),
('Gastroenterology', 'MBBS (DU), BCS ( Health) ,MD (Gastroenterology)', '6.30-7.30', 'Specialized Medicine & Training in Internal Diabetes', 'Mahmud'),
('Diabetology', 'MBBS, MCPS (Med),CC (Diabetology)', '11-1', 'Medicine & Diabetologist', 'Mobin'),
('Cardiology', 'MBBS(DHAKA), MCPS (Medicine), FCPS (Medicine), FCPS (Cardiology)', '5-7', 'Classified Medicine Specialist & Cardiologist', 'Shamsul');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `userName` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `medicalHistory` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`userName`, `age`, `gender`, `medicalHistory`) VALUES
('tariknz9', '22', 'Male', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `userName`, `password`, `type`) VALUES
('Dr. Abdul Momen', 'abdul11@gmail.com', 'Abdull', '111', 'doctor'),
('Dr.Afrooza Haque', 'afrooza@yahoo.com', 'Afrooza', '121', 'doctor'),
('Dr.Amin Rahman', 'amin@gmail.com', 'Amin', '444', 'doctor'),
('Dr.Anisur Rahim', 'anis@yahoo.com', 'Anis', '555', 'doctor'),
('Bushra', 'bushra@gmail.com', 'Bushra', 'qwerty', 'patient'),
('Dr.Firoz Sheikh', 'firoz@yahoo.com', 'Firoz', '666', 'doctor'),
('Dr.Husne Ara', 'husne@bing.com', 'Husne', '777', 'doctor'),
('Dr.Iqram Hossain', 'iqram@bing.com', 'Iqram', '888', 'doctor'),
('Dr.Mahmudul Kais', 'mahmud@bing.com', 'Mahmud', '999', 'doctor'),
('Dr.Mobin Saleh', 'mob@yahoo.com', 'Mobin', '000', 'doctor'),
('Rehnuma', 'rehnuma@gmail.com', 'Rehnuma', '1234', 'patient'),
('Dr.Shamsul Kabir', 'shamsul@gmail.com', 'Shamsul', '1122', 'doctor'),
('tarik', 'tariknz17@gmail.com', 'tariknz9', '12345678', 'patient'),
('Tarik', 'tarik@gmail.com', 'tr', '111', 'patient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`userName`);

--
-- Indexes for table `consultant`
--
ALTER TABLE `consultant`
  ADD PRIMARY KEY (`consultID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`userName`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`userName`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
