-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 06, 2024 at 06:19 AM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calligraphy`
--

-- --------------------------------------------------------

--
-- Table structure for table `calligraphers`
--

CREATE TABLE `calligraphers` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Img_url` varchar(255) DEFAULT NULL,
  `style_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calligraphers`
--

INSERT INTO `calligraphers` (`ID`, `Title`, `Img_url`, `style_id`) VALUES
(1, 'Calligraphy', 'bookCalligraphy.jpg', 4),
(2, 'Foundations Of Calligraphy', 'book-Foundations Of Calligraphy', 4),
(3, 'Mastering Copperplate Calligraphy\r\n', 'book-Mastering_Copperplate_Calligraphy.jpg\r\n', 4),
(4, 'Medieval Calligraphy Its History and Technique', 'book-Medieval_Calligraphy_Its_History_and_Technique.jpg', 4),
(5, 'Modern Calligraphy\r\n', 'book-Modern_Calligraphy.jpg\r\n', 4),
(6, 'The Art of Calligraphy', 'book-The_Art_Of_Calligraphy.jpg', 4),
(7, 'The Bible of Illuminated Letters\r\n', 'book-The_Bible_of_Illuminated_Letters.jpg\r\n', 4),
(8, 'The Calligrapher’s Bible\r\n', 'book-The_Calligrapher’s_Bible.jpg\r\n', 4),
(9, 'The Speedball Textbook (multiple editions)\r\n', 'book-The_Speedball_Textbook_(multiple editions).jpg\r\n', 4),
(10, 'Writing & Illuminating & Lettering.jpg\r\n', 'book-Writing_&_Illuminating_&_Lettering.jpg\r\n', 4),
(11, 'Blackletter calligraphy\r\n', 'fb-Blackletter_calligraphy.jpg\r\n', 5),
(12, 'Copperplate Calligraphy', 'fb-Copperplate_calligraphy.jpg', 5),
(13, 'Foundational Hand\r\n', 'fb-Foundational_Hand.jpg\r\n', 5),
(14, 'Gothicized Italic', 'fb-Gothicized_Italic.jpg\r\n', 5),
(15, 'Italic Calligraphy', 'fb-Italic_calligraphy.jpg\r\n', 5),
(16, 'Modern Calligraphy', 'fb-Modern_Calligraphy.jpg', 5),
(17, 'Neuland Calligraphy', 'fb-Neuland_Calligraphy.jpg', 5),
(18, 'Roman Capitals', 'fb-Roman_Capitals.jpg', 5),
(19, 'Spencerian Calligraphy', 'fb-Spencerian_Calligraphy.jpg', 5),
(20, 'Uncial Calligraphy\r\n', 'fb-Uncial_Calligraphy.jpg', 5),
(21, 'Art', 'we-art.jpg', 1),
(22, 'Assortment', 'we-assortment.jpg', 1),
(23, 'background Travel', 'we-background_travel.jpg', 1),
(24, 'Bar', 'we-bar.jpg', 1),
(25, 'Cab', 'we-cab.jpg', 1),
(26, 'Christmas\r\n', 'we-christmas.jpg\r\n', 1),
(27, 'christmas decoration\r\n', 'we-christmas_decoration.jpg\r\n', 1),
(28, 'cleaning logo\r\n', 'we-cleaning_logo.jpg\r\n', 1),
(29, 'collection', 'we-collection.jpg\r\n', 1),
(30, 'creative text', 'we-creative_text.jpg', 1),
(31, 'creative_text2', 'we-creative_text2.jpg', 1),
(32, 'goodbye', 'we-goodbye.jpg\r\n', 1),
(33, 'handwritten', 'AB-handwritten.jpg', 2),
(34, 'happines\r\n', 'AB-happines.jpg\r\n', 2),
(35, 'happy new year', 'AB-happy_new_year.jpg', 1),
(36, 'illustrations', 'AB-illustrations.jpg', 2),
(37, 'inspirational quotes', 'AB-inspirational_quotes.jpg', 2),
(38, 'inspirational Quotes2\r\n', 'AB-inspirational_uotes.jpg\r\n', 2),
(39, 'lettering\r\n', 'AB-lettering.jpg\r\n', 2),
(40, 'lettering 1', 'AB-lettering.jpg\r\n', 2),
(41, 'life quotes', 'AB-life_quotes.jpg', 2),
(42, 'luggage tag', 'AB-luggage_tag.jpg\r\n', 2),
(43, 'motivational quotes', 'AB-motivational_quotes.jpg', 2),
(44, 'motivational quotes 1', 'AB-motivational_quotes.jpg', 2),
(45, 'motivational quotes 2', 'AB-motivational_quotes2.jpg\r\n', 2),
(46, 'pandemic', 'OT-pandemic.jpg\r\n', 3),
(47, 'positive', 'OT-positive.jpg', 3),
(48, 'positive quote', 'OT-positive_quote.jpg\r\n', 3),
(49, 'positivity', 'OT-positivity.jpg\r\n', 3),
(50, 'quote', 'OT-quote.jpg\r\n', 3),
(51, 'simple', 'OT-simple.jpg\r\n', 3),
(52, 'sticker', 'OT-sticker.jpg\r\n', 3),
(53, 'Thanks you', 'OT-thanks_you.jpg\r\n', 3),
(54, 'tulip', 'OT-tulip.jpg', 3),
(55, 'typography', 'OT-typography.jpg\r\n', 3),
(56, 'velor', 'OT-velor.jpg\r\n', 3),
(57, 'word', 'OT-word.jpg\r\n', 3),
(58, 'word 1', 'OT-word.jpg\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `style`
--

CREATE TABLE `style` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `style`
--

INSERT INTO `style` (`ID`, `name`) VALUES
(1, 'Western'),
(2, 'Arabic'),
(3, 'Oriental'),
(4, 'book'),
(5, 'feedback');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calligraphers`
--
ALTER TABLE `calligraphers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `style_id` (`style_id`);

--
-- Indexes for table `style`
--
ALTER TABLE `style`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calligraphers`
--
ALTER TABLE `calligraphers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `style`
--
ALTER TABLE `style`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calligraphers`
--
ALTER TABLE `calligraphers`
  ADD CONSTRAINT `calligraphers_ibfk_1` FOREIGN KEY (`style_id`) REFERENCES `style` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
