-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 08, 2024 at 11:47 AM
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
  `style_id` int(11) DEFAULT NULL,
  `card_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calligraphers`
--

INSERT INTO `calligraphers` (`ID`, `Title`, `Img_url`, `style_id`, `card_id`) VALUES
(1, 'Calligraphy', 'bookCalligraphy.jpg', 4, NULL),
(2, 'Foundations Of Calligraphy', 'book-Foundations Of Calligraphy', 4, NULL),
(3, 'Mastering Copperplate Calligraphy\r\n', 'book-Mastering_Copperplate_Calligraphy.jpg\r\n', 4, NULL),
(4, 'Medieval Calligraphy Its History and Technique', 'book-Medieval_Calligraphy_Its_History_and_Technique.jpg', 4, NULL),
(5, 'Modern Calligraphy\r\n', 'book-Modern_Calligraphy.jpg\r\n', 4, NULL),
(6, 'The Art of Calligraphy', 'book-The_Art_Of_Calligraphy.jpg', 4, NULL),
(7, 'The Bible of Illuminated Letters\r\n', 'book-The_Bible_of_Illuminated_Letters.jpg\r\n', 4, NULL),
(8, 'The Calligrapher’s Bible\r\n', 'book-The_Calligrapher’s_Bible.jpg\r\n', 4, NULL),
(9, 'The Speedball Textbook (multiple editions)\r\n', 'book-The_Speedball_Textbook_(multiple editions).jpg\r\n', 4, NULL),
(10, 'Writing & Illuminating & Lettering.jpg\r\n', 'book-Writing_&_Illuminating_&_Lettering.jpg\r\n', 4, NULL),
(11, 'Blackletter calligraphy\r\n', 'fb-Blackletter_calligraphy.jpg\r\n', 5, NULL),
(12, 'Copperplate Calligraphy', 'fb-Copperplate_calligraphy.jpg', 5, NULL),
(13, 'Foundational Hand\r\n', 'fb-Foundational_Hand.jpg\r\n', 5, NULL),
(14, 'Gothicized Italic', 'fb-Gothicized_Italic.jpg\r\n', 5, NULL),
(15, 'Italic Calligraphy', 'fb-Italic_calligraphy.jpg\r\n', 5, NULL),
(16, 'Modern Calligraphy', 'fb-Modern_Calligraphy.jpg', 5, NULL),
(17, 'Neuland Calligraphy', 'fb-Neuland_Calligraphy.jpg', 5, NULL),
(18, 'Roman Capitals', 'fb-Roman_Capitals.jpg', 5, NULL),
(19, 'Spencerian Calligraphy', 'fb-Spencerian_Calligraphy.jpg', 5, NULL),
(20, 'Uncial Calligraphy\r\n', 'fb-Uncial_Calligraphy.jpg', 5, NULL),
(21, 'Art', 'we-art.jpg', 1, NULL),
(22, 'Assortment', 'we-assortment.jpg', 1, NULL),
(23, 'background Travel', 'we-background_travel.jpg', 1, NULL),
(24, 'Bar', 'we-bar.jpg', 1, NULL),
(25, 'Cab', 'we-cab.jpg', 1, NULL),
(26, 'Christmas\r\n', 'we-christmas.jpg\r\n', 1, NULL),
(27, 'christmas decoration\r\n', 'we-christmas_decoration.jpg\r\n', 1, NULL),
(28, 'cleaning logo\r\n', 'we-cleaning_logo.jpg\r\n', 1, NULL),
(29, 'collection', 'we-collection.jpg\r\n', 1, NULL),
(30, 'creative text', 'we-creative_text.jpg', 1, NULL),
(31, 'creative_text2', 'we-creative_text2.jpg', 1, NULL),
(32, 'goodbye', 'we-goodbye.jpg\r\n', 1, NULL),
(33, 'handwritten', 'AB-handwritten.jpg', 2, NULL),
(34, 'happines\r\n', 'AB-happines.jpg\r\n', 2, NULL),
(35, 'happy new year', 'AB-happy_new_year.jpg', 1, NULL),
(36, 'illustrations', 'AB-illustrations.jpg', 2, NULL),
(37, 'inspirational quotes', 'AB-inspirational_quotes.jpg', 2, NULL),
(38, 'inspirational Quotes2\r\n', 'AB-inspirational_uotes.jpg\r\n', 2, NULL),
(39, 'lettering\r\n', 'AB-lettering.jpg\r\n', 2, NULL),
(40, 'lettering 1', 'AB-lettering.jpg\r\n', 2, NULL),
(41, 'life quotes', 'AB-life_quotes.jpg', 2, NULL),
(42, 'luggage tag', 'AB-luggage_tag.jpg\r\n', 2, NULL),
(43, 'motivational quotes', 'AB-motivational_quotes.jpg', 2, NULL),
(44, 'motivational quotes 1', 'AB-motivational_quotes.jpg', 2, NULL),
(45, 'motivational quotes 2', 'AB-motivational_quotes2.jpg\r\n', 2, NULL),
(46, 'pandemic', 'OT-pandemic.jpg\r\n', 3, NULL),
(47, 'positive', 'OT-positive.jpg', 3, NULL),
(48, 'positive quote', 'OT-positive_quote.jpg\r\n', 3, NULL),
(49, 'positivity', 'OT-positivity.jpg\r\n', 3, NULL),
(50, 'quote', 'OT-quote.jpg\r\n', 3, NULL),
(51, 'simple', 'OT-simple.jpg\r\n', 3, NULL),
(52, 'sticker', 'OT-sticker.jpg\r\n', 3, NULL),
(53, 'Thanks you', 'OT-thanks_you.jpg\r\n', 3, NULL),
(54, 'tulip', 'OT-tulip.jpg', 3, NULL),
(55, 'typography', 'OT-typography.jpg\r\n', 3, NULL),
(56, 'velor', 'OT-velor.jpg\r\n', 3, NULL),
(57, 'word', 'OT-word.jpg\r\n', 3, NULL),
(58, 'word 1', 'OT-word.jpg\r\n', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `card_learn`
--

CREATE TABLE `card_learn` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `card_learn`
--

INSERT INTO `card_learn` (`id`, `name`, `thumbnail`, `description`) VALUES
(1, 'Calligraphy 101 – The ULTIMATE Guide For Beginners\r\n', 'Calligraphy101.png', 'If you want to learn how to start with calligraphy, you’ve come to the right place. On this page, you […]'),
(2, 'How To Practice Calligraphy Effectively\r\n', 'HowToPractice.jpg', 'In this article, I will show you how to practice calligraphy effectively.  If you’re struggling to see improvements in your'),
(3, '10 Calligraphy Styles For Beginners', '10CalligraphyStylesForBeginners.jpg', 'Do you want to start practicing calligraphy, but you’re not sure which calligraphy style to choose from? You’ve come to'),
(4, 'Type Anatomy – Understanding The Parts Of Letters (+FREE Poster)', 'TypeAnatomy.png', 'Have you ever wondered what the different parts of letters are called?  Each part has a specific name in type'),
(5, 'How To Make Handwritten Fonts on Your iPad', 'HowToMake.png', 'In this article, I will show you how to create custom hand-drawn and handwritten fonts using your iPad and the'),
(6, 'Calligraphy Paper – The Ultimate Guide For Beginners', 'CalligraphyPaper.jpg', 'In this article, I will teach you everything I know about calligraphy paper. Calligraphy paper is extremely important and can'),
(7, 'How To Improve Your Handwriting (+FREE Worksheets)', 'HowToImprove.jpg', 'When someone asks, “How can I improve my handwriting?” they usually look for a few things they can easily implement'),
(8, '6 Essential Calligraphy Tools For Beginners', '6EssentialCalligraphy.jpg', 'In this article, I will show you the essential calligraphy tools you need to get started with the art of'),
(9, 'Brush Calligraphy Alphabet – a to z (Lowercase Letters)', 'BrushCalligraphyAlphabet.jpg', 'In this tutorial, I will teach you how to write a whole (lowercase) calligraphy alphabet. I will create this calligraphy'),
(10, 'The Basic Calligraphy Strokes Guide (+FREE Worksheets)', 'TheBasicCalligraphyStrokesGuide.png', 'The basic calligraphy strokes are the best way to learn calligraphy as a beginner. In fact, the number one struggle');

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
  ADD KEY `style_id` (`style_id`),
  ADD KEY `fk_card_learn` (`card_id`);

--
-- Indexes for table `card_learn`
--
ALTER TABLE `card_learn`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `card_learn`
--
ALTER TABLE `card_learn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  ADD CONSTRAINT `calligraphers_ibfk_1` FOREIGN KEY (`style_id`) REFERENCES `style` (`ID`),
  ADD CONSTRAINT `fk_card_learn` FOREIGN KEY (`card_id`) REFERENCES `card_learn` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
