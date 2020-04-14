-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 05:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `news_info`
--

CREATE TABLE `news_info` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_excerpt` text NOT NULL,
  `news_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_info`
--

INSERT INTO `news_info` (`news_id`, `news_title`, `news_excerpt`, `news_content`) VALUES
(8, 'Roque returns, replaces Panelo as Duterte spokesman', 'He\'s Back.', 'MANILA, Philippines — He’s back.\r\n\r\n<br><br>\r\nLawyer Harry Roque is returning as President Duterte’s spokesman, as Malacañang seeks a “new tack on messaging” amid the coronavirus pandemic.\r\n<br><br>\r\nHe will replace Salvador Panelo, who took over before Roque decided to run for senator.\r\n<br><br>\r\nRoque, however, withdrew his senatorial bid days before the start of the campaign because of a heart condition.\r\n<br><br>\r\nPanelo recently received flak for suggesting that eating bananas and gargling with salt water might work to fend off the coronavirus disease 2019 or COVID 19. Health experts belied this.'),
(10, 'COVID mass testing begins in Metro Manila today', 'The long-planned mass testing is finally taking off as the number of COVID-19 cases in the country reached 4,932, with the death toll now at more than 300, according to data released by the Department of Health (DOH) yesterday. Recoveries totaled 242.', 'MANILA, Philippines — Mass testing for coronavirus disease 2019 (COVID-19) infection begins today as scheduled, a day after Manila and Quezon City kicked off their own localized testing.\r\n<br><br>\r\nThe long-planned mass testing is finally taking off as the number of COVID-19 cases in the country reached 4,932, with the death toll now at more than 300, according to data released by the Department of Health (DOH) yesterday. Recoveries totaled 242.\r\n<br><br>\r\nHealth Undersecretary Maria Rosario Vergeire also announced that 1,429 people have completed the online biosafety course organized by the University of the Philippines-Manila.'),
(11, 'IATF wants health workers’ deployment ban lifted', 'The government policymaking body on the coronavirus disease 2019 (COVID-19) has recommended the lifting of the deployment ban on health workers abroad after some sectors claimed that the policy would violate rights guaranteed by the Constitution.', 'MANILA, Philippines — The government policymaking body on the coronavirus disease 2019 (COVID-19) has recommended the lifting of the deployment ban on health workers abroad after some sectors claimed that the policy would violate rights guaranteed by the Constitution.\r\n<br><br>\r\nChief Presidential Legal Counsel Salvador Panelo said the Inter-Agency Task Force (IATF) on Emerging Infectious Diseases issued a resolution reconsidering the deployment ban in its meeting yesterday. \r\n<br><br>\r\n“(The IATF) reconsidered the policy on the travel ban on health workers. Those with existing perfected employment contracts will be able to leave,” Panelo said in a text message.  ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news_info`
--
ALTER TABLE `news_info`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news_info`
--
ALTER TABLE `news_info`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
