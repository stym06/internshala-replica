-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2017 at 08:49 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `id` int(50) NOT NULL,
  `employer` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `stipend` int(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `employer`, `title`, `description`, `stipend`, `start_date`, `end_date`) VALUES
(15, 'dell', 'Technicion', 'Repairs mostly', 1000, '2017-05-06', '2017-06-06'),
(16, 'maq', 'Systems Engineer', 'something something you know', 6000, '2017-05-06', '2017-06-06'),
(17, 'amazon', 'Java Developer', 'Make Java applications', 40000, '2017-05-06', '2017-06-07'),
(18, 'amazon', 'Front-end Developer', 'Build the core functionality of the website', 0, '2017-03-06', '2017-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `email`, `password`, `type`) VALUES
(1, 'Hewlett Packard', 'HP', 'careers@hp.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(2, 'John Doe', 'John', 'johndoe@sql.com', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(3, 'Amazon Web Services', 'amazon', 'careers@aws.com', '2d0d4809e6bdb6f4db3e547f27b1873c', 1),
(5, 'Satyam', 'stym06', 'satyammast@gmail.com', '0f2cdafc6b1adf94892b17f355bd9110', 0),
(6, 'Maq', 'maq', 'careers@maq.com', 'b71a16a73d79968d2c5c2375995709bb', 1),
(7, 'Dell', 'dell', 'careers@dell.com', '51a32d722dd3b81772a68c7449d5e62d', 1),
(8, 'Microsoft', 'ms', 'careers@ms.com', '5f532a3fc4f1ea403f37070f59a7a53a', 1),
(9, 'Kraken', 'rage_warrior', 'kraken@underworld.com', '80cd46c824f8e86438816e6e562e969f', 0),
(10, 'Ashish', 'ashish', 'ashish@gmail.com', '7b69ad8a8999d4ca7c42b8a729fb0ffd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_applications`
--

CREATE TABLE `student_applications` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `employer` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_applications`
--

INSERT INTO `student_applications` (`id`, `name`, `email`, `employer`, `job_title`) VALUES
(1, 'John', 'john@mic.com', 'HP', 'HP Officer'),
(6, 'John', 'john@applu.cmo', 'amazon', 'C++ developer'),
(7, 'Satyam Raj', 'satyammast@gmail.com', 'dell', 'Technicion'),
(8, 'John', 'john@applu.cmo', 'maq', 'Systems Engineer'),
(12, 'satyam', 'satyammast@gmail.com', 'HP', 'HP Officer'),
(13, 'John', 'john@mic.com', 'dell', 'Technicion'),
(14, 'Kraken', 'kraken@underworld.com', 'HP', 'HP Officer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_applications`
--
ALTER TABLE `student_applications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student_applications`
--
ALTER TABLE `student_applications`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
