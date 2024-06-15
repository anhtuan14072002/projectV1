-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 15, 2024 lúc 12:12 PM
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
  `card_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `calligraphers`
--

INSERT INTO `calligraphers` (`ID`, `Title`, `Img_url`, `style_id`, `card_id`) VALUES
(1, 'Calligraphy', 'bookCalligraphy.jpg', 4, NULL),
(2, 'Foundations Of Calligraphy', 'book-Foundations_Of_Calligraphy.jpg', 4, NULL),
(3, 'Mastering Copperplate Calligraphy\r\n', 'book-Mastering_Copperplate_Calligraphy.jpg\r\n', 4, NULL),
(4, 'Medieval Calligraphy Its History and Technique', 'book_Medieval_Calligraphy_Its_History_and_Technique.jpg', 4, NULL),
(5, 'Modern Calligraphy\r\n', 'book-Modern_Calligraphy.jpg\r\n', 4, NULL),
(6, 'The Art of Calligraphy', 'book-The_Art_Of_Calligraphy.jpg', 4, NULL),
(7, 'The Bible of Illuminated Letters\r\n', 'book_The_Bible of_Illuminated_Letters.jpg', 4, NULL),
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
(21, 'Art', 'fb_art.jpg', 5, NULL),
(22, 'Assortment', 'fb_assortment.jpg', 5, NULL),
(23, 'background Travel', 'fb_background_travel.jpg', 5, NULL),
(24, 'Bar', 'fb_bar.jpg', 5, NULL),
(25, 'Cab', 'fb_cab.jpg', 5, NULL),
(26, 'Christmas\r\n', 'fb_christmas.jpg\r\n', 5, NULL),
(27, 'christmas decoration\r\n', 'fb_christmas_decoration.jpg\r\n', 5, NULL),
(28, 'cleaning logo\r\n', 'fb_cleaning_logo.jpg\r\n', 5, NULL),
(29, 'collection', 'fb_collection.jpg\r\n', 5, NULL),
(30, 'creative text', 'fb_creative_text.jpg', 5, NULL),
(31, 'creative_text2', 'fb_creative_text2.jpg', 5, NULL),
(32, 'goodbye', 'fb_goodbye.jpg\r\n', 5, NULL),
(33, 'handwritten', 'fb_handwritten.jpg', 5, NULL),
(34, 'happines\r\n', 'fb_happines.jpg\r\n', 5, NULL),
(35, 'happy new year', 'fb_happy_new_year.jpg', 5, NULL),
(36, 'illustrations', 'fb_illustrations.jpg', 5, NULL),
(37, 'inspirational quotes', 'fb_inspirational_quotes.jpg', 5, NULL),
(38, 'inspirational Quotes2\r\n', 'fb_inspirational_uotes.jpg\r\n', 5, NULL),
(39, 'lettering\r\n', 'fb_lettering.jpg\r\n', 5, NULL),
(40, 'lettering 1', 'fb_lettering.jpg\r\n', 5, NULL),
(41, 'life quotes', 'fb_life_quotes.jpg', 5, NULL),
(42, 'luggage tag', 'fb_luggage_tag.jpg\r\n', 5, NULL),
(43, 'motivational quotes', 'fb_motivational_quotes.jpg', 5, NULL),
(44, 'motivational quotes 1', 'fb_motivational_quotes.jpg', 5, NULL),
(45, 'motivational quotes 2', 'fb_motivational_quotes2.jpg\r\n', 5, NULL),
(46, 'pandemic', 'fb_pandemic.jpg\r\n', 5, NULL),
(47, 'positive', 'fb_positive.jpg', 5, NULL),
(48, 'positive quote', 'fb_positive_quote.jpg\r\n', 5, NULL),
(49, 'positivity', 'fb_positivity.jpg\r\n', 5, NULL),
(50, 'quote', 'fb_quote.jpg\r\n', 5, NULL),
(51, 'simple', 'fb_simple.jpg\r\n', 5, NULL),
(52, 'sticker', 'fb_sticker.jpg\r\n', 5, NULL),
(53, 'Thanks you', 'fb_thanks_you.jpg\r\n', 5, NULL),
(54, 'tulip', 'fb_tulip.jpg', 5, NULL),
(55, 'typography', 'fb_typography.jpg\r\n', 5, NULL),
(56, 'velor', 'fb_velor.jpg\r\n', 5, NULL),
(57, 'word', 'fb_word.jpg\r\n', 5, NULL),
(58, 'word 1', 'fb_word.jpg\r\n', 5, NULL),
(59, 'Art', 'fb_art.jpg', 5, NULL),
(60, 'Bar', 'fb_bar.jpg', 5, NULL),
(61, 'Blackletter_calligraphy', 'top_10_styles_menu_Blackletter_calligraphy.jpg', 6, NULL),
(80, 'Copperplate_calligraphy', 'top_10_styles_menu_Copperplate_calligraphy.jpg', 6, NULL),
(81, 'Foundational_Hand', 'top_10_styles_menu_Foundational_Hand.jpg', 6, NULL),
(82, 'Gothicized_Italic', 'top_10_styles_menu_Gothicized_Italic.jpg', 6, NULL),
(83, 'Italic_calligraphy', 'top_10_styles_menu_Italic_calligraphy.jpg', 6, NULL),
(84, 'Modern_Calligraphy', 'top_10_styles_menu_Modern_Calligraphy.jpg', 6, NULL),
(85, 'Neuland_Calligraphy', 'top_10_styles_menu_Neuland_Calligraphy.jpg', 6, NULL),
(86, 'Roman_Capitals', 'top_10_styles_menu_Roman_Capitals.jpg', 6, NULL),
(87, 'Spencerian_Calligraphy', 'top_10_styles_menu_Spencerian_Calligraphy.jpg', 6, NULL),
(88, 'Uncial_Calligraphy', 'top_10_styles_menu_Uncial_Calligraphy.jpg', 6, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `calligraphers`
--
ALTER TABLE `calligraphers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `style_id` (`style_id`),
  ADD KEY `fk_card_learn` (`card_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `calligraphers`
--
ALTER TABLE `calligraphers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `calligraphers`
--
ALTER TABLE `calligraphers`
  ADD CONSTRAINT `calligraphers_ibfk_1` FOREIGN KEY (`style_id`) REFERENCES `style` (`ID`),
  ADD CONSTRAINT `fk_card_learn` FOREIGN KEY (`card_id`) REFERENCES `card_learn` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
