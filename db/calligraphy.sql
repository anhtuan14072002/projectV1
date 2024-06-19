-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 19, 2024 lúc 01:05 PM
-- Phiên bản máy phục vụ: 5.7.24
-- Phiên bản PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `calligraphy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `calligraphers`
--

CREATE TABLE `calligraphers` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Img_url` varchar(255) DEFAULT NULL,
  `style_id` int(11) DEFAULT NULL,
  `card_id` int(11) DEFAULT NULL,
  `id_card_calligraphy` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `calligraphers`
--

INSERT INTO `calligraphers` (`ID`, `Title`, `Img_url`, `style_id`, `card_id`, `id_card_calligraphy`, `id_user`) VALUES
(1, 'Calligraphy', 'bookCalligraphy.jpg', 4, NULL, NULL, NULL),
(2, 'Foundations Of Calligraphy', 'book-Foundations_Of_Calligraphy.jpg', 4, NULL, NULL, NULL),
(3, 'Mastering Copperplate Calligraphy\r\n', 'book-Mastering_Copperplate_Calligraphy.jpg\r\n', 4, NULL, NULL, NULL),
(4, 'Medieval Calligraphy Its History and Technique', 'book_Medieval_Calligraphy_Its_History_and_Technique.jpg', 4, NULL, NULL, NULL),
(5, 'Modern Calligraphy\r\n', 'book-Modern_Calligraphy.jpg\r\n', 4, NULL, NULL, NULL),
(6, 'The Art of Calligraphy', 'book-The_Art_Of_Calligraphy.jpg', 4, NULL, NULL, NULL),
(7, 'The Bible of Illuminated Letters\r\n', 'book_The_Bible of_Illuminated_Letters.jpg', 4, NULL, NULL, NULL),
(8, 'The Calligrapher’s Bible\r\n', 'book-The_Calligrapher’s_Bible.jpg\r\n', 4, NULL, NULL, NULL),
(9, 'The Speedball Textbook (multiple editions)\r\n', 'book-The_Speedball_Textbook_(multiple editions).jpg\r\n', 4, NULL, NULL, NULL),
(10, 'Writing & Illuminating & Lettering.jpg\r\n', 'book-Writing_&_Illuminating_&_Lettering.jpg\r\n', 4, NULL, NULL, NULL),
(11, 'Blackletter calligraphy\r\n', 'fb-Blackletter_calligraphy.jpg\r\n', 5, NULL, NULL, NULL),
(12, 'Copperplate Calligraphy', 'fb-Copperplate_calligraphy.jpg', 5, NULL, NULL, NULL),
(13, 'Foundational Hand\r\n', 'fb-Foundational_Hand.jpg\r\n', 5, NULL, NULL, NULL),
(14, 'Gothicized Italic', 'fb-Gothicized_Italic.jpg\r\n', 5, NULL, NULL, NULL),
(15, 'Italic Calligraphy', 'fb-Italic_calligraphy.jpg\r\n', 5, NULL, NULL, NULL),
(16, 'Modern Calligraphy', 'fb-Modern_Calligraphy.jpg', 5, NULL, NULL, NULL),
(17, 'Neuland Calligraphy', 'fb-Neuland_Calligraphy.jpg', 5, NULL, NULL, NULL),
(18, 'Roman Capitals', 'fb-Roman_Capitals.jpg', 5, NULL, NULL, NULL),
(19, 'Spencerian Calligraphy', 'fb-Spencerian_Calligraphy.jpg', 5, NULL, NULL, NULL),
(20, 'Uncial Calligraphy\r\n', 'fb-Uncial_Calligraphy.jpg', 5, NULL, NULL, NULL),
(21, 'Art', 'fb_art.jpg', 5, NULL, NULL, NULL),
(22, 'Assortment', 'fb_assortment.jpg', 5, NULL, NULL, NULL),
(23, 'background Travel', 'fb_background_travel.jpg', 5, NULL, NULL, NULL),
(24, 'Bar', 'fb_bar.jpg', 5, NULL, NULL, NULL),
(25, 'Cab', 'fb_cab.jpg', 5, NULL, NULL, NULL),
(26, 'Christmas\r\n', 'fb_christmas.jpg\r\n', 5, NULL, NULL, NULL),
(27, 'christmas decoration\r\n', 'fb_christmas_decoration.jpg\r\n', 5, NULL, NULL, NULL),
(28, 'cleaning logo\r\n', 'fb_cleaning_logo.jpg\r\n', 5, NULL, NULL, NULL),
(29, 'collection', 'fb_collection.jpg\r\n', 5, NULL, NULL, NULL),
(30, 'creative text', 'fb_creative_text.jpg', 5, NULL, NULL, NULL),
(31, 'creative_text2', 'fb_creative_text2.jpg', 5, NULL, NULL, NULL),
(32, 'goodbye', 'fb_goodbye.jpg\r\n', 5, NULL, NULL, NULL),
(33, 'handwritten', 'fb_handwritten.jpg', 5, NULL, NULL, NULL),
(34, 'happines\r\n', 'fb_happines.jpg\r\n', 5, NULL, NULL, NULL),
(35, 'happy new year', 'fb_happy_new_year.jpg', 5, NULL, NULL, NULL),
(36, 'illustrations', 'fb_illustrations.jpg', 5, NULL, NULL, NULL),
(37, 'inspirational quotes', 'fb_inspirational_quotes.jpg', 5, NULL, NULL, NULL),
(38, 'inspirational Quotes2\r\n', 'fb_inspirational_uotes.jpg\r\n', 5, NULL, NULL, NULL),
(39, 'lettering\r\n', 'fb_lettering.jpg\r\n', 5, NULL, NULL, NULL),
(40, 'lettering 1', 'fb_lettering.jpg\r\n', 5, NULL, NULL, NULL),
(41, 'life quotes', 'fb_life_quotes.jpg', 5, NULL, NULL, NULL),
(42, 'luggage tag', 'fb_luggage_tag.jpg\r\n', 5, NULL, NULL, NULL),
(43, 'motivational quotes', 'fb_motivational_quotes.jpg', 5, NULL, NULL, NULL),
(44, 'motivational quotes 1', 'fb_motivational_quotes.jpg', 5, NULL, NULL, NULL),
(45, 'motivational quotes 2', 'fb_motivational_quotes2.jpg\r\n', 5, NULL, NULL, NULL),
(46, 'pandemic', 'fb_pandemic.jpg\r\n', 5, NULL, NULL, NULL),
(47, 'positive', 'fb_positive.jpg', 5, NULL, NULL, NULL),
(48, 'positive quote', 'fb_positive_quote.jpg\r\n', 5, NULL, NULL, NULL),
(49, 'positivity', 'fb_positivity.jpg\r\n', 5, NULL, NULL, NULL),
(50, 'quote', 'fb_quote.jpg\r\n', 5, NULL, NULL, NULL),
(51, 'simple', 'fb_simple.jpg\r\n', 5, NULL, NULL, NULL),
(52, 'sticker', 'fb_sticker.jpg\r\n', 5, NULL, NULL, NULL),
(53, 'Thanks you', 'fb_thanks_you.jpg\r\n', 5, NULL, NULL, NULL),
(54, 'tulip', 'fb_tulip.jpg', 5, NULL, NULL, NULL),
(55, 'typography', 'fb_typography.jpg\r\n', 5, NULL, NULL, NULL),
(56, 'velor', 'fb_velor.jpg\r\n', 5, NULL, NULL, NULL),
(57, 'word', 'fb_word.jpg\r\n', 5, NULL, NULL, NULL),
(58, 'word 1', 'fb_word.jpg\r\n', 5, NULL, NULL, NULL),
(59, 'Art', 'fb_art.jpg', 5, NULL, NULL, NULL),
(60, 'Bar', 'fb_bar.jpg', 5, NULL, NULL, NULL),
(61, 'Blackletter_calligraphy', 'top_10_styles_menu_Blackletter_calligraphy.jpg', 6, NULL, NULL, NULL),
(80, 'Copperplate_calligraphy', 'top_10_styles_menu_Copperplate_calligraphy.jpg', 6, NULL, NULL, NULL),
(81, 'Foundational_Hand', 'top_10_styles_menu_Foundational_Hand.jpg', 6, NULL, NULL, NULL),
(82, 'Gothicized_Italic', 'top_10_styles_menu_Gothicized_Italic.jpg', 6, NULL, NULL, NULL),
(83, 'Italic_calligraphy', 'top_10_styles_menu_Italic_calligraphy.jpg', 6, NULL, NULL, NULL),
(84, 'Modern_Calligraphy', 'top_10_styles_menu_Modern_Calligraphy.jpg', 6, NULL, NULL, NULL),
(85, 'Neuland_Calligraphy', 'top_10_styles_menu_Neuland_Calligraphy.jpg', 6, NULL, NULL, NULL),
(86, 'Roman_Capitals', 'top_10_styles_menu_Roman_Capitals.jpg', 6, NULL, NULL, NULL),
(87, 'Spencerian_Calligraphy', 'top_10_styles_Spencerian_Calligraphy.jpg', 6, NULL, NULL, NULL),
(88, 'Uncial_Calligraphy', 'top_10_styles_menu_Uncial_Calligraphy.jpg', 6, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `card_calligraphy`
--

CREATE TABLE `card_calligraphy` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `link_calligraphy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `card_calligraphy`
--

INSERT INTO `card_calligraphy` (`id`, `name`, `link_calligraphy`) VALUES
(1, 'Western', 'western_calligraphy.php'),
(2, 'Arabic', 'arabic_calligraphy.php'),
(3, 'Oriental', 'oriental_calligraphy.php');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `card_learn`
--

CREATE TABLE `card_learn` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `description` text,
  `link_card` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `card_learn`
--

INSERT INTO `card_learn` (`id`, `name`, `thumbnail`, `description`, `link_card`) VALUES
(1, 'Calligraphy 101 – The ULTIMATE Guide For Beginners\r\n', 'Calligraphy101.png', 'If you want to learn how to start with calligraphy, you’ve come to the right place. On this page, you […]', 'calligraphy_101.php'),
(2, 'How To Practice Calligraphy Effectively\r\n', 'HowToPractice.jpg', 'In this article, I will show you how to practice calligraphy effectively.  If you’re struggling to see improvements in your', 'ealligraphy_effectively.php'),
(3, '10 Calligraphy Styles For Beginners', '10CalligraphyStylesForBeginners.jpg', 'Do you want to start practicing calligraphy, but you’re not sure which calligraphy style to choose from? You’ve come to', '10_Calligraphy_styles.php'),
(4, 'Type Anatomy – Understanding The Parts Of Letters (+FREE Poster)', 'type-anatomy.jpg', 'Have you ever wondered what the different parts of letters are called?  Each part has a specific name in type', 'type_anatomy.php'),
(5, 'How To Make Handwritten Fonts on Your iPad', 'HowToMake.png', 'In this article, I will show you how to create custom hand-drawn and handwritten fonts using your iPad and the', 'Handwriting.php'),
(6, 'Calligraphy Paper – The Ultimate Guide For Beginners', 'CalligraphyPaper.jpg', 'In this article, I will teach you everything I know about calligraphy paper. Calligraphy paper is extremely important and can', 'calligraphy_Paper.php'),
(7, 'How To Improve Your Handwriting (+FREE Worksheets)', 'HowToImprove.jpg', 'When someone asks, “How can I improve my handwriting?” they usually look for a few things they can easily implement', 'how_to_improve_handwriting.php'),
(8, '6 Essential Calligraphy Tools For Beginners', '6EssentialCalligraphy.jpg', 'In this article, I will show you the essential calligraphy tools you need to get started with the art of', '6_Essential.php'),
(9, 'Brush Calligraphy Alphabet – a to z (Lowercase Letters)', 'BrushCalligraphyAlphabet.jpg', 'In this tutorial, I will teach you how to write a whole (lowercase) calligraphy alphabet. I will create this calligraphy', 'brushcalligraphy.php'),
(10, 'The Basic Calligraphy Strokes Guide (+FREE Worksheets)', 'TheBasicCalligraphyStrokesGuide.png', 'The basic calligraphy strokes are the best way to learn calligraphy as a beginner. In fact, the number one struggle', 'basiccalligraphy.php');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `style`
--

CREATE TABLE `style` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `style`
--

INSERT INTO `style` (`ID`, `name`) VALUES
(1, 'Western'),
(2, 'Arabic'),
(3, 'Oriental'),
(4, 'book'),
(5, 'feedback'),
(6, 'top_styles');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'tunapc', 'zed3132@gmail.com', '$2y$10$8XzEwIipXXAMCczk17IKYuPx6IfIEnQzUuzlUK1tigG6Sh9Wqi0CW');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `calligraphers`
--
ALTER TABLE `calligraphers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `style_id` (`style_id`),
  ADD KEY `fk_card_learn` (`card_id`),
  ADD KEY `id_card_calligraphy` (`id_card_calligraphy`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `card_calligraphy`
--
ALTER TABLE `card_calligraphy`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `card_learn`
--
ALTER TABLE `card_learn`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `style`
--
ALTER TABLE `style`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `calligraphers`
--
ALTER TABLE `calligraphers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `card_calligraphy`
--
ALTER TABLE `card_calligraphy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `card_learn`
--
ALTER TABLE `card_learn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `style`
--
ALTER TABLE `style`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `calligraphers`
--
ALTER TABLE `calligraphers`
  ADD CONSTRAINT `calligraphers_ibfk_1` FOREIGN KEY (`style_id`) REFERENCES `style` (`ID`),
  ADD CONSTRAINT `fk_card_learn` FOREIGN KEY (`card_id`) REFERENCES `card_learn` (`id`),
  ADD CONSTRAINT `id_card_calligraphy` FOREIGN KEY (`id_card_calligraphy`) REFERENCES `card_calligraphy` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
