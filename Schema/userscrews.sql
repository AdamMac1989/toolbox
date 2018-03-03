

-- Delete statements for project additions

DELETE FROM `project_wood` WHERE pw_id = 'PW0010'
DELETE FROM `project_tools` WHERE prtool_id = 'PRT006'
DELETE FROM `project_screws` WHERE prsw_id = 'PRS006'
DELETE FROM `project_instructions` WHERE p_name = 'Lamp'


--
-- Table structure for table `user_wood`
--

CREATE TABLE `user_wood` (
  `wood_id` varchar(10) NOT NULL,
  `length` int(12) NOT NULL,
  `width` int(12) NOT NULL,
  `height` int(12) NOT NULL,
  `user_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_wood`
--

INSERT INTO `user_wood` (`wood_id`, `length`, `width`, `height`, `user_id`) VALUES
('WD001', 20, 20, 20, 'user01'),
('WD002', 50, 50, 5, 'user01'),
('WD003', 20, 20, 20, 'user01'),
('WD004', 100, 100, 100, 'user01'),
('WD005', 20, 20, 20, 'user22'),
('WD006', 50, 50, 5, 'user22'),
('WD007', 200, 200, 200, 'user22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2018 at 01:38 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toolbox`
--

-- --------------------------------------------------------

-- For user screws

--
-- Table structure for table `user_screw`
--

CREATE TABLE `user_screw` (
  `screw_id` varchar(10) NOT NULL,
  `length` int(12) NOT NULL,
  `number` int(12) NOT NULL,
  `user_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_screw`
--

INSERT INTO `user_screw` (`screw_id`, `length`, `number`, `user_id`) VALUES
('sc0001', 2, 10, 'user01'),
('sc0002', 4, 20, 'user01'),
('sc0003', 4, 20, 'user01'),
('sc0004', 2, 10, 'user01'),
('sc0005', 45, 45, 'user22'),
('sc0006', 2, 20, 'user22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2018 at 01:42 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toolbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_tools`
--

CREATE TABLE `user_tools` (
  `usertool_id` varchar(14) NOT NULL,
  `Tool` varchar(30) NOT NULL,
  `user_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tools`
--

  INSERT INTO `user_tools` (`usertool_id`, `Tool`, `user_id`) VALUES
  ('TL0001', 'hammer', 'user01'),
  ('TL0002', 'Hammer', 'user22'),
  ('TL0003', 'Power Drill', 'user22');
  COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2018 at 01:59 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toolbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `project_tools`
--

CREATE TABLE `project_tools` (
  `prtool_id` varchar(6) NOT NULL,
  `tool` varchar(60) NOT NULL,
  `p_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_tools`
--

INSERT INTO `project_tools` (`prtool_id`, `tool`, `p_name`) VALUES
('PRT001', 'hammer', 'Chair'),
('PRT002', 'Measuring Tape', 'Table'),
('PRT003', 'Hacksaw', 'Table'),
('PRT004', 'Hammer', 'Table'),
('PRT005', 'Cross Head Screw Driver', 'Chair');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2018 at 02:01 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toolbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `project_screws`
--

CREATE TABLE `project_screws` (
  `prsw_id` varchar(6) NOT NULL,
  `length` int(12) NOT NULL,
  `number` int(12) NOT NULL,
  `p_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_screws`
--

INSERT INTO `project_screws` (`prsw_id`, `length`, `number`, `p_name`) VALUES
('PRS001', 2, 10, 'Chair'),
('PRS002', 4, 20, 'Chair'),
('PRS003', 20, 20, 'Table'),
('PRS004', 20, 20, 'Table'),
('PRS005', 45, 45, 'Table');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2018 at 02:04 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toolbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `project_instructions`
--

CREATE TABLE `project_instructions` (
  `p_name` varchar(50) NOT NULL,
  `instructions` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_instructions`
--

INSERT INTO `project_instructions` (`p_name`, `instructions`) VALUES
('Chair', 'Screw four legs to a large piece of wood and attach a back'),
('Table', 'Screw four legs int a long bit of wood');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
