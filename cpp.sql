-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2025 at 11:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'sanika', 'sanika123'),
(10, 'tanvi', 'tanvi1409'),
(11, 'sakshi', 'sakshi0501'),
(12, 'shreya', 'shreya1409');

-- --------------------------------------------------------

--
-- Table structure for table `visitors_management`
--

CREATE TABLE `visitors_management` (
  `V_Id` int(11) NOT NULL,
  `V_Name` varchar(70) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Vehicle_no` varchar(10) NOT NULL,
  `Entry_type` varchar(5) NOT NULL,
  `Image` blob NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Arr_Time` varchar(10) NOT NULL,
  `Dept_Time` varchar(10) NOT NULL,
  `Flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors_management`
--

INSERT INTO `visitors_management` (`V_Id`, `V_Name`, `Gender`, `City`, `Category`, `Mobile`, `Vehicle_no`, `Entry_type`, `Image`, `Date`, `Arr_Time`, `Dept_Time`, `Flag`) VALUES
(29, 'xy', 'female', 'njka', 'Parents', '9096246862', 'no', 'Out', 0x53637265656e73686f742028313033292e706e67, '2024-03-', '01:17:51', '01:18:51', 0),
(30, 'sakshi', 'female', 'karad', 'Visiting_faculty', '9054235423', 'MH19D2312', 'Out', 0x6267312e6a7067, '2024-03-', '03:19:54', '19:41:43', 0),
(31, 'tanvi', 'female', 'satara', 'Parents', '4567234567', 'no', 'Out', 0x6c67322e6a7067, '2024-03-', '03:21:24', '19:41:59', 0),
(32, 'shreya', 'female', 'sangli', 'Visiting_faculty', '4567234567', 'no', 'Out', 0x6c67322e6a7067, '2024-03-', '03:22:15', '19:41:52', 0),
(33, 'shreya', 'female', 'sangli', 'Visiting_faculty', '4567234567', 'no', 'Out', 0x6c67322e6a7067, '2024-03-', '03:23:17', '19:42:09', 0),
(34, 'Adarsh', 'Male', 'sangli', 'Other', '3475172490', 'no', 'In', 0x6c67322e6a7067, '2024-03-', '03:24:18', '', 1),
(35, 'sanika', 'female', 'sangli', 'Visiting_faculty', '9096246862', 'no', 'In', 0x6267312e6a7067, '2024-03-', '08:54:50', '', 1),
(39, 'ram', 'other', 'sangli', 'Other', '9096246862', 'no', 'In', 0x6c67322e6a7067, '03-13-24242424', '10:36:03', '', 1),
(40, 'ram', 'Male', 'sangli', 'Visiting_faculty', '9096246862', 'no', 'In', 0x6c67322e6a7067, '13-03-24', '10:39:36', '', 1),
(41, 'ram', 'female', 'sangli', 'Parents', '9096246862', 'no', 'Out', 0x6267312e6a7067, 'MarMar-WedWed-2', '10:53:57', '18:31:54', 0),
(43, 'sanika', 'female', 'sangli', 'Parents', '9096246862', 'MH19D2312', 'In', 0x6c67322e6a7067, '01-01-1970', '11:04:13', '', 1),
(44, 'sanika', 'female', 'sangli', 'Parents', '9096246862', 'MH19D2312', 'In', 0x6c67322e6a7067, '01-01-1970', '11:05:13', '', 1),
(45, 'sadkj', 'dak', 'dyujsd', 'parents', '9096248662', 'no', 'in', '', '2024-03-10', '', '', 1),
(46, 'sanika', 'female', 'sangli', 'Parents', '9096246862', 'MH19D2312', 'In', 0x6c67322e6a7067, '24-03-13', '11:53:28', '', 1),
(47, 'ram', 'Male', 'sangli', 'Other', '9096246862', 'NO', 'In', 0x6c67322e6a7067, '2024-03-13', '11:55:42', '', 1),
(50, 'sanika', 'female', 'sangli', 'Parents', '9096246862', 'no', 'In', 0x6267312e6a7067, '2024-03-14', '17:19:49', '', 1),
(51, 'Adarsh', 'Male', 'sangli', 'Other', '3475172490', 'MH19D2312', 'Out', 0x6267312e6a7067, '2024-03-14', '17:21:19', '18:31:32', 0),
(52, 'sakshi', 'female', 'satara', 'Visiting_faculty', '9097452376', 'no', 'In', 0x6c67322e6a7067, '2024-03-14', '19:35:03', '', 1),
(53, 'sakshi', 'female', 'satara', 'Visiting_faculty', '9097452376', 'no', 'In', 0x6c67322e6a7067, '2024-03-14', '19:42:41', '', 1),
(54, 'sakshi', 'female', 'satara', 'Visiting_faculty', '9097452376', 'no', 'Out', 0x6c67322e6a7067, '2024-03-14', '07:47:11 P', '09:51:37', 0),
(55, 'shreya', 'female', 'miraj', 'Visiting_faculty', '9097452376', 'no', 'Out', 0x6267312e6a7067, '2024-03-15', '09:48:18 A', '09:52:31', 0),
(56, 'tanvi', 'female', 'koregaon', 'Parents', '9097452376', 'no', 'Out', 0x6c67322e6a7067, '2024-03-15', '09:48:50 A', '09:51:16', 0),
(63, 'diksha', 'female', 'karad', 'Visiting_faculty', '3445454545', 'MH19DE2312', 'In', 0x6267312e6a7067, '2024-03-15', '03:03:41 P', '', 1),
(68, 'shreya', 'female', 'miraj', 'Visiting_faculty', '9097452376', 'no', 'In', 0x6267312e6a7067, '2024-03-21', '09:31:37 P', '', 1),
(69, 'sanika', 'female', 'sangli', 'Parents', '9096246862', 'no', 'In', 0x6267312e6a7067, '2024-03-22', '07:23:55 A', '', 1),
(73, 'sanika', 'female', 'sangli', 'Parents', '9096246862', 'no', 'In', 0x706173732e706e67, '2024-03-31', '11:28:50 A', '', 1),
(75, 'diksha', 'female', 'karad', 'Parents', '3445454545', 'no', 'In', 0x6d61696c2e706e67, '2024-03-31', '11:40:51 A', '', 1),
(77, 'sanika', 'female', 'miraj', 'Parents', '9097452376', 'no', 'In', 0x706173732e706e67, '2024-03-31', '08:15:51 A', '', 1),
(79, 'sanika', '', 'sangli', 'Parents', '0909624686', 'kk', 'Out', 0x706173732e706e67, '2024-03-31', '11:58:21 A', '13:31:43', 0),
(82, 'shreya', 'female', 'miraj', 'Parents', '9097452376', 'No. Dummy ', 'In', 0x756e616d652e706e67, '2024-03-31', '07:10:01 P', '', 1),
(83, 'diksha', 'female', 'karad', 'Parents', '3445454545', 'no', 'In', 0x6d61696c2e706e67, '2024-03-31', '07:17:55 P', '', 1),
(84, 'sanika', 'female', 'satara', 'Parents', '4567234567', 'no', 'In', 0x706173732e706e67, '2024-04-01', '10:40:25 A', '', 1),
(85, 'Tulshidas Shinde', 'Male', 'Satara', 'Parents', '8975955488', 'no', 'Out', 0x47525750542e706e67, '2024-04-02', '09:08:45 A', '05:40:43', 0),
(86, 'tanvi', 'female', 'satara', 'Parents', '4567234567', 'no', 'In', 0x706173732e706e67, '2024-04-02', '09:24:51 A', '', 1),
(87, 'tanvi', 'female', 'satara', 'Parents', '4567234567', 'no', 'In', 0x706173732e706e67, '2024-04-02', '09:43:20 A', '', 1),
(88, 'tanvi', 'female', 'satara', 'Parents', '4567234567', 'no', 'In', 0x706173732e706e67, '2024-04-02', '09:48:37 A', '', 1),
(91, 'sanika', 'female', 'borgaon', 'Parents', '9096246862', 'MH19DH2312', 'In', 0x756e616d652e706e67, '2024-04-02', '10:10:01 A', '', 1),
(92, 'sanika', 'female', 'borgaon', 'Parents', '9096246862', 'MH19DH2312', 'In', 0x756e616d652e706e67, '2024-04-02', '10:11:30 A', '', 1),
(93, 'sanika', 'female', 'borgaon', 'Parents', '9096246862', 'MH19DH2312', 'Out', 0x756e616d652e706e67, '2024-04-02', '10:14:37 A', '07:33:39', 0),
(94, 'sanika', 'female', 'borgaon', 'Parents', '9096246862', 'MH19DH2312', 'Out', 0x756e616d652e706e67, '2024-04-02', '10:19:43 A', '07:33:47', 0),
(95, 'sanika', 'female', 'borgaon', 'Parents', '9096246862', 'MH19DH2312', 'In', 0x756e616d652e706e67, '2024-04-02', '10:22:38 A', '', 1),
(96, 'saisha', 'female', 'kolhapur', 'Visiting_faculty', '9096246862', 'MH19DH2312', 'Out', 0x706173732e706e67, '2024-04-02', '11:07:11 A', '07:37:27', 0),
(100, 'tanvi', 'female', 'Visitors.', 'Other', 'Hello.', 'It is unde', 'Out', 0x6d736274652e706e67, '2024-04-02', '12:18:46 P', '08:50:43', 0),
(101, 'diksha', 'female', 'karad', 'Visiting_faculty', '0344545454', 'MH19DH2312', 'In', 0x6d61696c2e706e67, '2024-04-06', '03:42:52 P', '', 1),
(102, 'tanvi', '', 'karad', 'Parents', '0344545454', 'MH19DH2312', 'Out', 0x6d61696c2e706e67, '2024-04-06', '03:43:46 P', '12:15:49', 0),
(103, 'Tulshidas Shinde', 'Male', 'Asangaon', 'Parents', '8975955488', 'MH19DH2312', 'In', 0x6267312e6a7067, '2024-04-18', '08:33:14 A', '', 1),
(104, 'Maruti Pawar', 'Male', 'Belawade Haveli', 'Parents', '9503402312', 'MH19DE9610', 'In', 0x6c67322e6a7067, '2024-04-18', '08:34:44 A', '', 1),
(105, 'Sonika Pawar', 'female', 'Chinchani', 'Visiting_faculty', '7856478923', 'By living.', 'In', 0x706173732e706e67, '2024-04-18', '08:36:00 A', '', 1),
(106, 'Shoaib Nadaf', 'Male', 'Tasgaon', 'Other', '9849734975', 'MH10CU5488', 'Out', 0x6d736274652e706e67, '2024-04-18', '08:37:19 A', '05:09:44', 0),
(107, 'Hanmant Gosavi', 'Male', 'Bhilvadi', 'Other', '9867945678', 'MH10CU8967', 'In', 0x6d61696c2e706e67, '2024-04-18', '08:39:04 A', '', 1),
(108, 'rtr', 'Male', 'Bhilvadi', 'Parents', '9867945678', 'MH10CU8967', 'Out', 0x706173732e706e67, '2024-04-18', '03:09:47 P', '11:40:14', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `visitors_management`
--
ALTER TABLE `visitors_management`
  ADD PRIMARY KEY (`V_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `visitors_management`
--
ALTER TABLE `visitors_management`
  MODIFY `V_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
