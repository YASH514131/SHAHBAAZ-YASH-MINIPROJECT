-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 08:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `ani_name` varchar(100) NOT NULL,
  `phylum` varchar(100) NOT NULL,
  `body_symmetry` varchar(100) NOT NULL,
  `orgainzation` varchar(100) NOT NULL,
  `feature` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`ani_name`, `phylum`, `body_symmetry`, `orgainzation`, `feature`, `picture`) VALUES
('Sycon', 'porifera', 'asymmetrical', 'cellular grade', 'good ability of regeneration', 'sycon.png'),
('Jelly Fish', 'cnidaria', 'radical', 'tissue grade', 'tentacles are present', 'jelly_fish.png'),
('Tape Worm', 'Platyhelminthes', 'bilateral', 'Organ System', 'Hermaphrodite(both male and female reproductive organ are present on same animal body)', 'Tape_Worm.png'),
('Intestinal Worm', 'Aschelminthes', 'bilateral', 'Organ System', 'Endoparasite', 'Intestinal_Worm.png'),
('Earth Worm', 'Annelida', 'Bilateral', 'Organ System', 'Setae or parapodia or Suckers for Locomotion', 'Earth_Worm.png'),
('Centipede', 'Arthropoda', 'Bilateral', 'Organ System', 'Joint Appendages', 'Centipede.png'),
('Octopus', 'Mollusca', 'Bilateral', 'Organ System', 'Second Largest Phylum', 'Octopus.png'),
('Sea Urchin', 'Echinodermata', 'Radial ', 'Organ System', 'Calcareous Spine', 'Sea_Urchin.png'),
('Balanoglossus', 'Hemichordata', 'Bilateral', 'Organ System', 'Notochord is present ', 'Balanoglossus.png');

-- --------------------------------------------------------

--
-- Table structure for table `chordate`
--

CREATE TABLE `chordate` (
  `ani_name` varchar(100) NOT NULL,
  `phylum` varchar(100) NOT NULL,
  `sub_phylum` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `feature` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chordate`
--

INSERT INTO `chordate` (`ani_name`, `phylum`, `sub_phylum`, `class`, `feature`, `picture`) VALUES
('Herdmania', 'Chordata', 'Urochordata', 'None', 'Hermaphrodite', 'Herdmania.png'),
('Amphioxus', 'Chordata', 'Cephalochordata', 'None', 'Notochord is present throughout Body Length', 'Amphioxus.png'),
('Myxine', 'Chordata', 'Vertebrata', 'Cyclostomata', 'Ectoparasite', 'Myxine.png'),
('Rohu', 'Chordata', 'Vertebrata', 'Pisces', 'Paired Fins For Swimming', 'Rohu.png'),
('Frog', 'Chordata', 'Vertebrata', 'Amphibia', 'Live in Water As Well As On Land', 'Frog.png'),
('Tortoise', 'Chordata', 'Vertebrata', 'Reptilia', 'External Ear Is Absent', 'Tortoise.png'),
('Peacock', 'Chordata', 'Vertebrata', 'Aves', 'Forelimb Modified into wings', 'Peacock.png'),
('Human', 'Chordate', 'Vertebrata', 'Mammalia', 'Warm Blooded Animal', 'Human.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
