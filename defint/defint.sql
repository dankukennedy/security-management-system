-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2024 at 01:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `defint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `otherName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nia` varchar(50) NOT NULL,
  `regimentalNo` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `region` varchar(50) NOT NULL,
  `subDivision` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `profile_img` varchar(64) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `about` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fName`, `lName`, `otherName`, `email`, `nia`, `regimentalNo`, `number`, `password`, `gender`, `region`, `subDivision`, `rank`, `profile_img`, `created_at`, `about`) VALUES
(1, 'Kennedy', 'Danku', 'Edem', 'dankukennedy@gmail.com', 'GHA-714021260-3', '123456', '0203760941', '$2a$12$XP8bLlVjxYl5gAnmxiTYVu3LP8INU9.oO0tVovtj1HMSG/68IOoS2', 'Male', 'Volta', '', 'Private', 'office.jpeg-2024.07.04-04.48.14am.jpeg', '2024-07-04 02:57:03', 'My name is Danku Kennedy Edem . All that you need to know about me is i am a software Developer and i play integral role in developing this system no doubt about that.\r\nConnect with me on LinkedIn :https://www.linkedin.com/in/kennedy-edem-danku-839108137'),
(2, 'Mustapha', 'Awal', 'Mohammed', 'mohammedawalmustapha@gmail.com', 'GHA-12345678-7', 'gh-23456677-1', '0246915189', '$2a$12$XP8bLlVjxYl5gAnmxiTYVu3LP8INU9.oO0tVovtj1HMSG/68IOoS2', 'Male', 'Savannah', 'Bole', 'General ', 'admin.jpeg-2024.07.03-11.51.23pm.jpeg', '2024-07-05 10:59:52', 'My Name is Mustapha Awal Mohammed. Talking about this system i am the brain behind this system development that is Security Management Portal System for Security services narrow down to Ghana Arm Forces Intelligence. smart system');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `latitude`, `longitude`, `name`, `email`, `time`) VALUES
(2, 5.63609600, -0.19660800, 'Kennedy Danku ', 'dankukennedy@gmail.com', '2024-07-05 01:38:12'),
(3, 5.63609600, -0.19660800, 'Mustapha Awal ', 'mohammedawalmustapha@gmail.com', '2024-07-05 01:38:30'),
(4, 5.63609600, -0.19660800, 'Mustapha Awal ', 'mohammedawalmustapha@gmail.com', '2024-07-05 01:38:34'),
(5, 5.54860000, -0.20120000, 'Kennedy Danku ', 'dankukennedy@gmail.com', '2024-07-05 01:39:14'),
(23, 5.63609600, -0.19660800, 'Adeywod Kaku ', 'mohammedawalmustapha4@gmail.com', '2024-07-05 09:49:11'),
(24, 5.63609600, -0.19660800, 'Anita Dakpare ', 'mohammedawalmustapha5@gmail.com', '2024-07-05 09:50:02'),
(25, 5.63609600, -0.17694720, 'Issah Abdul ', 'mohammedawalmustapha6@gmail.com', '2024-07-05 10:06:15'),
(26, 5.63609600, -0.17694720, 'Mustapha Awal ', 'mohammedawalmustapha@gmail.com', '2024-07-05 10:25:02'),
(27, 5.63609600, -0.17694720, 'Kennedy Danku ', 'dankukennedy@gmail.com', '2024-07-05 10:27:39'),
(29, 5.76778500, -0.13732200, 'Rhuza Sim ', 'mohammedawalmustapha1@gmail.com', '2024-07-05 10:43:12'),
(33, 5.76778500, -0.13732200, 'Solomon Sedor ', 'mohammedawalmustapha3@gmail.com', '2024-07-05 11:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `content` varchar(250) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `subject`, `content`, `created_at`) VALUES
(3, '\r\n\r\n        \"SEE SOMETHING SAY SOMETHING\"\r\n', ' Enter Messages\r\n\r\n         ................................\r\nI have been informed that a man from Burkina Faso recently put up this building (photo above) near the farmsted of one of my elders. Just after harvest of crops and with no one frequenting', '2023-01-27'),
(4, 'COLLECTION PLAN FOR RESEARCH DUTIES\r\n\r\n', ' Enter Messages\r\n\r\n         1.	Identify respective Fulani groups residing within AOR.\r\n\r\n2.	Identify uniqueness of respective Fulani communities withing AOR.\r\n\r\n3.	Identify location of various Fulani communities within AOR. (Locations to be marked wi', '2023-01-27'),
(6, 'New Criminal case at East Legon', ' Enter Messages\r\n\r\n         Young Man run into someone shop to rubbe a market woman with the last money in the shop quite dishearting', '2024-06-20'),
(7, 'Intelligent Alert', 'You guys have to be on your toes\r\n         ', '2024-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `proof`
--

CREATE TABLE `proof` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `file_url` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proof`
--

INSERT INTO `proof` (`id`, `title`, `post`, `file_url`, `description`, `comment`, `email`, `created_at`) VALUES
(5, 'Crime Home - Crime Archived Crime News News Genera', 'Accra Metro', '667416b2d7d1f4.23358970.jpg', 'This concerning trend is endangering public safety and spreading fear in our communities.\r\n\r\nAddressing armed robbery requires a comprehensive approach that includes social, economic, and law enforcement measures to address the underlying causes and ', 'During the attack, the robbers targeted the van\'s contents but were fortunately intercepted by the police. Lance Corporal Amoah was fatally shot amidst the confrontation.\r\n\r\nVideos circulating on social media show the incident show some members of th', 'mohammedawalmustapha1@gmail.com', '2024-06-20'),
(6, 'Hamele Meetings.', 'Hamele.', '6685d6e5c7f5e9.09767180.jpeg', '      International cooperation to manage the afairs of hamele.                                     \r\n                                                                                \r\n                                                                  ', '      Very very successfully meeting with the community\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                         ', 'mohammedawalmustapha@gmail.com', '2024-07-03'),
(8, 'new case.', 'Accra', '6686001f912ba6.59648519.jpeg', '      Write The Description Here.\r\n                                   \r\n                                                                                \r\n                                        ', '     Comment Here.\r\n\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                  ', 'mohammedawalmustapha@gmail.com', '2024-07-04'),
(12, 'street Fighting', 'Dodowa', '6687cc2e1a3346.74065716.jpg', '   The Youth are angry with the Government\r\n                                                                                \r\n                                                                                \r\n                                          ', '   It is political Agenda now\r\n\r\n                                        \r\n                                        \r\n                                        \r\n                                        ', 'mohammedawalmustapha3@gmail.com', '2024-07-05'),
(13, 'ECG Power shortage', 'Ho', '6687d4bc4eec09.87921730.jpg', '\r\nToo much shortage of power\r\n                                        ', 'ECG have to work on power issues\r\n\r\n                                        ', 'mohammedawalmustapha3@gmail.com', '2024-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `occurance` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `title`, `post`, `occurance`, `description`, `comment`, `email`, `created_at`) VALUES
(9, '    ALLEGED EXTREMISTS MOVEMENT', 'hamile town', '    EXTREMISTS MOVEMENT', '  \r\nBetween 2300 and 0100 hours on 4 Dec 22, there was an alleged extremist movement within some communities in Burkina Faso 13 Kilometers away from Fielmou a border community in Ghana. Burkinabes (women and children) numbering 700 in Boura and its sur   ', '  COMMENTS \r\n\r\nIt\'s suggested that heavy security is deploy at the Fielmon unapproved route to control the situation since GRA NABCO personnel deployed there are not armed. \r\n\r\nRespectfully submitted sir                        \r\n\r\n                   ', 'mohammedawalmustapha@gmail.com', '2023-01-27'),
(10, ' ALLEGED EXTREMISTS MOVEMENT', 'UWR', ' EXTREMISTS ', '\r\nBetween 2300 and 0100 hours on 4 Dec 22, there was an alleged extremist movement within some communities in Burkina Faso 13 Kilometers away from Fielmou a border community in Ghana. Burkinabes (women and children) numbering 700 in Boura and its surround', 'Comment HereCOMMENTS \r\n\r\nIt\'s suggested that heavy security is deploy at the Fielmon unapproved route to control the situation since GRA NABCO personnel deployed there are not armed. \r\n\r\nRespectfully submitted sir     \r\n\r\n                            ', 'mohammedawalmustapha@gmail.com', '2023-01-27'),
(11, 'Terrorist', 'Ho', 'Market Area', 'London. Michaelmas term lately over, and the Lord Chancellor sitting in Lincoln\'s Inn Hall. Implacable November weather', 'As much mud in the streets as if the waters had but newly retired from the face of the earth, and it would not be wonderful to meet a Megalosaurus, forty feet long or so, waddling like an elephantine lizard up Holborn Hill.', 'mohammedawalmustapha@gmail.com', '2024-05-21'),
(12, 'Zongo Junction Robery', 'Madina', 'Zongo Junction Robery', ' Zongo Junction Robery\r\n                                                                                \r\n                                        ', ' Zongo Junction Robery very quick and the the victim cannot escape \r\n\r\n                                        \r\n                                        ', 'mohammedawalmustapha1@gmail.com', '2024-07-03'),
(13, 'Power Outage', 'Kumasi', 'Adum', ' Because there is not light Robbers Attack people this early morning                                        \r\n                                        ', ' Effect of No Power in ghana\r\n                                        \r\n                                        ', 'mohammedawalmustapha3@gmail.com', '2024-07-05'),
(14, 'Robbery  case', 'Sunyani', 'Sunyani Hospital', 'Gun men shot dead after running away with 2000 ghana cedis\r\n                                        ', 'Robbers are dead\r\n                                        ', 'mohammedawalmustapha3@gmail.com', '2024-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `content` varchar(250) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `email`, `content`, `created_at`) VALUES
(9, 'mohammedawalmustapha1@gmail.com', ' Assign Task\r\n\r\n        Go to Temale and try settle the disputed around the reginal Police Station thank you ', '2024-06-20'),
(6, 'mohammedawalmustapha2@gmail.com', '\"SEE SOMETHING SAY SOMETHING\"\r\n................................\r\nI have been informed that a man from Burkina Faso recently put up this building (photo above) near the farmsted of one of my elders. Just after harvest of crops and with no one frequent', '2023-01-27'),
(10, 'mohammedawalmustapha3@gmail.com', 'Go to Accra and check for intelligence', '2024-07-05'),
(11, 'mohammedawalmustapha3@gmail.com', 'Go to Kumasi and work on Intelligence \r\n        ', '2024-07-05'),
(7, 'mohammedawalmustapha6@gmail.com', '\r\nCOLLECTION PLAN FOR RESEARCH DUTIES\r\n\r\n1.	Identify respective Fulani groups residing within AOR.\r\n\r\n2.	Identify uniqueness of respective Fulani communities withing AOR.\r\n\r\n3.	Identify location of various Fulani communities within AOR. (Locations to', '2023-01-27'),
(8, 'mohammedawalmustapha@gmail.com', ' Assign Task\r\nAccra Patrol', '2024-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `otherName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nia` varchar(50) NOT NULL,
  `regimentalNo` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `region` varchar(50) NOT NULL,
  `subDivision` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `profile_img` varchar(64) NOT NULL,
  `created_at` datetime NOT NULL,
  `about` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fName`, `lName`, `otherName`, `email`, `nia`, `regimentalNo`, `number`, `password`, `gender`, `region`, `subDivision`, `rank`, `profile_img`, `created_at`, `about`) VALUES
(8, 'Awal', 'Mohammed Mustapha', 'Mustapha', 'mohammedawalmustapha@gmail.com', 'GHA-12345678-0', '123456', '0244123456', '$2a$12$3ECm8PNDnvoG5gEoh1vLU.3dUEh.2D8gWUDNR6QzAs2fuUzVl2Pt6', 'Male', 'Ahafo', 'Asunafo North Municipal', 'Private', 'admin.jpeg-2024.07.03-11.52.37pm.jpeg', '2024-05-21 00:00:00', 'About You ..... all is well'),
(9, 'Rhuza', 'Sim', 'Adams', 'mohammedawalmustapha1@gmail.com', 'GHA-12345678-1', '000000', '0241234567', '$2a$12$3ECm8PNDnvoG5gEoh1vLU.3dUEh.2D8gWUDNR6QzAs2fuUzVl2Pt6', 'Femal', 'Central', 'Abura Asebu Kwamankese', 'Staff Sergeant /Sergeant major ', '', '2024-05-21 00:00:00', ''),
(10, 'Solomon', 'Sedor', 'Kofi', 'mohammedawalmustapha3@gmail.com', 'gha-12346655-2', '234517', '0245233565', '$2a$12$3ECm8PNDnvoG5gEoh1vLU.3dUEh.2D8gWUDNR6QzAs2fuUzVl2Pt6', 'Male', 'Ashanti', 'Adansi Asokwa', 'Major General ', 'edem.jpeg-2024.07.05-01.03.28pm.jpeg', '2024-05-21 00:00:00', '  '),
(11, 'Adeywod', 'Kaku', 'Yaw', 'mohammedawalmustapha4@gmail.com', 'GHA-000000000-9', '232228', '0246123456', '$2a$12$3ECm8PNDnvoG5gEoh1vLU.3dUEh.2D8gWUDNR6QzAs2fuUzVl2Pt6', 'Male', 'Greater_Accra', 'Ablekuma Central Municipal', 'Major  ', '', '2024-05-21 00:00:00', ''),
(12, 'Anita', 'Dakpare', 'Esi', 'mohammedawalmustapha5@gmail.com', 'gha-111113111-1', '230675', '0241234561', '$2a$12$3ECm8PNDnvoG5gEoh1vLU.3dUEh.2D8gWUDNR6QzAs2fuUzVl2Pt6', 'Male', 'Savannah', 'Bole', 'Lieutenant  ', '', '2024-05-21 00:00:00', ''),
(13, 'Issah', 'Abdul', 'Rahman', 'mohammedawalmustapha6@gmail.com', 'gha-111313111-1', '008000', '0242341234', '$2a$12$3ECm8PNDnvoG5gEoh1vLU.3dUEh.2D8gWUDNR6QzAs2fuUzVl2Pt6', 'Male', 'Western', 'Ahanta West Municipal', 'Warrant Officer class I  ', '', '2024-05-21 00:00:00', ''),
(14, 'Solomon', 'Sedor', 'Kaku', 'mohammedawalmustapha7@gmail.com', 'gha-111211111-1', '646666', '0245432176', '$2a$12$3ECm8PNDnvoG5gEoh1vLU.3dUEh.2D8gWUDNR6QzAs2fuUzVl2Pt6', 'Male', 'Northern', 'Gushegu Municipal', 'Sergeant  ', '', '2024-05-21 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fName` (`fName`,`lName`,`otherName`,`email`,`nia`,`regimentalNo`,`number`,`gender`,`region`,`subDivision`,`rank`),
  ADD KEY `created_at` (`created_at`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject`,`created_at`);

--
-- Indexes for table `proof`
--
ALTER TABLE `proof`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`,`email`,`created_at`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`,`occurance`,`email`,`created_at`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`,`content`,`created_at`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `email_2` (`email`),
  ADD KEY `region` (`region`),
  ADD KEY `subDivision` (`subDivision`),
  ADD KEY `created_at` (`created_at`),
  ADD KEY `gender` (`gender`),
  ADD KEY `number` (`number`),
  ADD KEY `regimentalNo` (`regimentalNo`),
  ADD KEY `nia` (`nia`),
  ADD KEY `fName` (`fName`),
  ADD KEY `lName` (`lName`),
  ADD KEY `rank` (`rank`),
  ADD KEY `otherName` (`otherName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `proof`
--
ALTER TABLE `proof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
