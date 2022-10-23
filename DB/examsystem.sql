
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `examsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `userName` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`userName`, `fname`, `lname`, `pass`) VALUES
(1000, 'Surya', 'Ashoke', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `indexNumber` int(11) NOT NULL,
  `report` varchar(200) NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`indexNumber`, `report`, `dates`) VALUES
(11111, 'test', '2022-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `indexNumber` int(11) NOT NULL,
  `nam` varchar(20) NOT NULL,
  `tamil` int(11) NOT NULL,
  `IT` int(11) NOT NULL,
  `history` int(11) NOT NULL,
  `science` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `maths` int(11) NOT NULL,
  `average` int(11) NOT NULL,
  `grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`indexNumber`, `nam`, `tamil`, `IT`, `history`, `science`, `english`, `maths`, `average`, `grade`) VALUES
(11111, 'Kumar', 88, 78, 67, 57, 99, 67, 76, 'A'),
(11939, 'Sundar', 81, 89, 66, 78, 79, 88, 80, 'A'),
(34323, 'Rockey', 89, 55, 67, 89, 56, 89, 74, 'B'),
(34564, 'Rajini', 67, 55, 56, 56, 78, 51, 61, 'C'),
(34958, 'Kavi', 56, 45, 34, 34, 89, 56, 52, 'S'),
(45647, 'Kamal', 89, 65, 77, 44, 56, 65, 66, 'B'),
(46757, 'Viajay', 58, 88, 67, 44, 54, 72, 64, 'C'),
(59945, 'Partheban', 56, 77, 58, 63, 60, 59, 62, 'C'),
(65866, 'Siva', 78, 90, 89, 89, 78, 90, 86, 'A'),
(85658, 'Praveen', 88, 70, 67, 77, 66, 67, 73, 'B'),
(89758, 'Sankarari', 56, 67, 53, 60, 67, 89, 65, 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`userName`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`indexNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `userName` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
COMMIT;