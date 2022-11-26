-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2022 at 08:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `MobileNumber` int(10) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Permission` varchar(30) NOT NULL,
  `Password` varchar(80) NOT NULL,
  `ConfirmPassword` varchar(80) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `FirstName`, `LastName`, `Username`, `Email`, `MobileNumber`, `Gender`, `Permission`, `Password`, `ConfirmPassword`, `CreationDate`) VALUES
(1, 'janhvi', 'kalariya', 'janvi', 'janhvikalariya@gmail.com', 885888848, 'Female', 'Admin', '86ae96b2ed12c6ed01423bee78a76190', '86ae96b2ed12c6ed01423bee78a76190', '2022-09-10 07:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Id` int(100) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` bigint(12) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Service` varchar(50) NOT NULL,
  `AptDate` varchar(120) NOT NULL,
  `AptTime` varchar(120) NOT NULL,
  `Message` varchar(300) NOT NULL,
  `ApplyDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Id`, `FirstName`, `LastName`, `Email`, `PhoneNumber`, `Category`, `Service`, `AptDate`, `AptTime`, `Message`, `ApplyDate`) VALUES
(1, 'Jullie', 'Doe', 'hello@gmail.com', 1234567899, 'hair', 'Bob Cut', '20.09.2022', '16:00', 'test', '2022-09-14 15:18:27'),
(2, 'abc', 'xyz', 'new@gmail.com', 7016020897, 'hair', 'Trimming', '20.09.2022', '11:05', 'simple trimming and setting', '2022-09-14 15:20:00'),
(3, 'neha', 'sharma', 'demo@gmail.com', 4563729293, 'skin', 'Facial', '21.09.2022', '09:15', 'demo', '2022-09-14 15:22:50'),
(4, 'dimple', 'joshi', 'dimpi@gmail.com', 1234567899, 'makeup', 'Simple Makeup', '21.09.2022', '17:10', 'simple attractive makeup', '2022-09-14 15:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `tblhairservices`
--

CREATE TABLE `tblhairservices` (
  `Id` int(10) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `ServiceName` varchar(50) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Cost` int(30) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblhairservices`
--

INSERT INTO `tblhairservices` (`Id`, `Category`, `ServiceName`, `Description`, `Cost`, `Image`, `CreationDate`) VALUES
(1, 'Hair Cutting', 'Step Cut', 'Includes the customised number of steps', 300, 'stepcut.jpg', '2022-09-07 18:58:41'),
(2, 'Hair Cutting', 'Layers Cut', 'Includes layer cut and step with layers', 400, 'layerscut.jpg', '2022-09-07 19:00:45'),
(3, 'Hair Cutting', 'U-shape Cut', 'Includes deep U shape cut', 400, 'Ushape.jpg', '2022-09-07 19:02:26'),
(4, 'Hair Cutting', 'V-shape Cut', 'Includes pointed and normal V-shape cut', 400, 'Vshape.jpg', '2022-09-07 19:03:46'),
(5, 'Hair Cutting', 'Bob Cut', 'Includes regular and customised length bob cut', 300, 'bobcut.jpg', '2022-09-07 19:05:23'),
(6, 'Hair Cutting', 'Trimming', 'Includes trimming in any style haircut', 250, 'trimming.jpg', '2022-09-07 19:06:56'),
(7, 'Hair Colouring', 'Full Length Colouring', 'Includes full hair length colouring with customised colours', 2000, 'full_haircolor.jpg', '2022-09-07 19:14:06'),
(8, 'Hair Colouring', 'Half Length Colouring', 'Includes half hair length colouring with customised colours', 1200, 'half_haircolor.jpg', '2022-09-07 19:15:31'),
(9, 'Hair Colouring', 'Rainbow Colouring', 'Includes 7 different colours hair colouring', 1500, 'rainbow.jpg', '2022-09-07 19:35:16'),
(10, 'Hair Colouring', 'Highlights', 'Includes light highlights in any hair colour.', 1000, 'highlight2.jpeg', '2022-09-07 19:36:47'),
(11, 'Hair Styling', 'Straightening', 'Includes any length of hair straightening', 400, 'straightning.jpg', '2022-09-07 19:59:28'),
(12, 'Hair Styling', 'Curls', 'Includes any length of hair curls', 400, 'curls.jpg', '2022-09-07 20:00:18'),
(13, 'Hair Styling', 'Wavy Hair', 'Includes light and moderate wavy hair styling', 300, 'wavy.jpg', '2022-09-07 20:01:34'),
(14, 'Hair Styling', 'Pack Hair Style', 'Includes customised pack hair style of choices', 1300, 'pack_hairstyle.jpeg', '2022-09-07 20:05:42'),
(15, 'Hair Styling', 'Half Hair Style', 'Includes customised half hair style of choices', 900, 'half_hairstyle.jpeg', '2022-09-07 20:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `tblmakeupservices`
--

CREATE TABLE `tblmakeupservices` (
  `Id` int(10) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `ServiceName` varchar(50) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Cost` int(30) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmakeupservices`
--

INSERT INTO `tblmakeupservices` (`Id`, `Category`, `ServiceName`, `Description`, `Cost`, `Image`, `CreationDate`) VALUES
(1, 'Regular Makeup', 'Simple Makeup', 'Includes simple regular makeup for any small event', 500, 'mkp_simple.jpeg', '2022-09-08 17:12:34'),
(2, 'Regular Makeup', 'Nude Makeup', 'Includes best nude makeup with unique nude shades', 500, 'mkp_nude.jpeg', '2022-09-09 06:00:57'),
(3, 'Regular Makeup', 'Smoky Eyes ', 'Includes different styles smoky eyes with colour options shades ', 600, 'mkp_smokyeyes.jpeg', '2022-09-09 06:05:03'),
(4, 'Regular Makeup', 'High Shine Makeup', 'Includes bright makeup with shiny tone and base', 600, 'mkp_highshine.jpeg', '2022-09-09 06:08:57'),
(5, 'Regular Makeup', 'Dewy Base', 'Includes unique and simple dewy base makeup ', 500, 'mkp_dweybase.jpeg', '2022-09-09 06:15:10'),
(6, 'Bridal Makeup', 'Matte Makeup', 'Includes classy matte makeup for simple yet classy bridal look', 12000, 'mkp_matte.jpeg', '2022-09-09 06:21:40'),
(7, 'Bridal Makeup', 'Mineral Makeup', 'Includes exclusive mineral makeup with best products', 12000, 'mkp_mineral.jpeg', '2022-09-09 06:22:34'),
(8, 'Bridal Makeup', 'HD Makeup', 'Includes ultimate HD makeup look for any marriage function ', 14000, 'mkp_HD.jpeg', '2022-09-09 06:24:22'),
(9, 'Bridal Makeup', 'Airbrush Makeup', 'Includes all-new unmatched air brush makeup with premium brush tool', 15000, 'mkp_airbrush.jpeg', '2022-09-09 06:25:31'),
(10, 'Bridal Makeup', 'Night Look Makeup', 'Includes best and attractive night look makeup for night marriage party', 10000, 'mkp_nightlook.png', '2022-09-09 06:27:38'),
(11, 'Bridal Makeup', 'Premium Bridal Makeup', 'Includes most extraordinary premium bridal makeup for your big day', 18000, 'mkp_premiumbridal.jpeg', '2022-09-09 06:29:10'),
(12, 'Regular Makeup', 'Natural Makeup ', 'Includes natural yet attractive makeup look for any event', 2000, 'mkp_natural.jpeg', '2022-09-09 06:30:16'),
(13, 'Quirky Makeup', 'Pride Month Makeup', 'Includes colourful pride month makeup in customised way', 1500, 'mkp_pride.jpeg', '2022-09-09 06:32:12'),
(14, 'Quirky Makeup', 'Clouds Makeup', 'Includes different styles of clouds makeup in customised way', 1200, 'mkp_clouds.png', '2022-09-09 06:33:10'),
(15, 'Quirky Makeup', 'Butterfly Makeup', 'Includes different styles of butterfly makeup in customised way ', 1700, 'mkp_butterfly1.jpeg', '2022-09-09 06:34:34'),
(16, 'Quirky Makeup', 'Halloween Makeup ', 'Includes customised style of Halloween makeup for night party ', 2200, 'mkp_hallowen.jpeg', '2022-09-09 06:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `tblskinservices`
--

CREATE TABLE `tblskinservices` (
  `Id` int(10) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `ServiceName` varchar(50) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Cost` int(30) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblskinservices`
--

INSERT INTO `tblskinservices` (`Id`, `Category`, `ServiceName`, `Description`, `Cost`, `Image`, `CreationDate`) VALUES
(1, 'Body Care', 'Body Spa', 'Includes full body spa with premium oils', 800, 'bodyspa.jpg', '2022-09-08 16:44:26'),
(2, 'Body Care', 'Waxing', 'Includes hands and leg waxing and also customised waxing', 400, 'waxing.jpg', '2022-09-08 16:47:10'),
(3, 'Body Care', 'Manicure', 'Includes best manicure service', 400, 'manicure.jpg', '2022-09-08 16:49:21'),
(4, 'Body Care', 'Pedicure', 'Includes best pedicure service', 500, 'pedicure1.jpg', '2022-09-08 16:50:24'),
(5, 'Face Care', 'Facial', 'Includes facial with premium products', 350, 'facial.jpeg', '2022-09-08 16:52:16'),
(6, 'Face Care', 'Scrub', 'Includes cleansing scrub with best scrubs', 280, 'scrub.jpg', '2022-09-08 16:53:51'),
(7, 'Face Care', 'Bleach', 'Includes regular bleach with best creams ', 340, 'bleach.jpeg', '2022-09-08 16:55:14'),
(9, 'Face Care', 'Shiner', 'Includes regular shiner with moderate shinning products', 300, 'shinner.png', '2022-09-08 16:58:29'),
(10, 'Face Care', 'Eyebrow', 'Includes regular and pointed eyebrow and shaping', 60, 'eyebrow.jpg', '2022-09-08 17:00:06'),
(11, 'Skin Treatments', 'Face Cleansing', 'Includes total face cleansing with natural creams and packs', 700, 'facecleansing.jpeg', '2022-09-08 17:01:53'),
(12, 'Skin Treatments', 'Face lightning', 'Includes best face lightning and brightening with natural products ', 700, 'facelightning.jpeg', '2022-09-08 17:03:38'),
(13, 'Skin Treatments', 'Face Spa', 'Includes best face spa with premium face masks and packs', 600, 'facespa.jpeg', '2022-09-08 17:05:50'),
(14, 'Skin Treatments', 'Exfoliation', 'Includes perfect dead cells removal exfoliation with advance tools', 800, 'exfoliation.jpeg', '2022-09-08 17:07:36'),
(15, 'Skin Treatments', 'Black Heads Removal', 'Includes perfect black heads removal and face cleansing', 500, 'blackheads.jpeg', '2022-09-08 17:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(80) NOT NULL,
  `cpassword` varchar(80) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `cpassword`, `CreationDate`) VALUES
(2, 'demo1', 'demo@gmail.com', 'fe01ce2a7fbac8fafaed7c982a04e229', 'fe01ce2a7fbac8fafaed7c982a04e229', '2022-08-23 12:19:10'),
(3, 'demo2', 'hello@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', '2022-09-01 03:36:24'),
(4, 'demo3', 'demo3@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', '2022-09-01 03:39:28'),
(6, 'nandu', 'janhvikalariya@gmail.com', '364680801c264375129015052b846faa', '364680801c264375129015052b846faa', '2022-09-09 10:18:31'),
(7, 'harekrishna', 'uzma@gmail.com', 'a288e6779da68f768431f9975e780da3', 'a288e6779da68f768431f9975e780da3', '2022-09-09 13:50:18'),
(8, 'user', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'ee11cbb19052e40b07aac0ca060c23ee', '2022-09-09 21:53:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblhairservices`
--
ALTER TABLE `tblhairservices`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblmakeupservices`
--
ALTER TABLE `tblmakeupservices`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblskinservices`
--
ALTER TABLE `tblskinservices`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblhairservices`
--
ALTER TABLE `tblhairservices`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblmakeupservices`
--
ALTER TABLE `tblmakeupservices`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblskinservices`
--
ALTER TABLE `tblskinservices`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
