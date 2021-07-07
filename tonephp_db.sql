-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: tonephp-mysql-app:3306
-- Generation Time: Jul 07, 2021 at 12:43 PM
-- Server version: 5.7.34
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tonephp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `base` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`id`, `alias`, `code`, `title`, `base`) VALUES
(3, 'ru', 'ru', 'Ru', '0'),
(4, 'en', 'en', 'En', '0'),
(5, 'ua', 'ua', 'Ua', '1');

-- --------------------------------------------------------

--
-- Table structure for table `menuitems`
--

CREATE TABLE `menuitems` (
  `id` int(11) NOT NULL,
  `link` varchar(256) NOT NULL,
  `parent` int(11) NOT NULL,
  `alias` varchar(256) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menuitems`
--

INSERT INTO `menuitems` (`id`, `link`, `parent`, `alias`, `position`) VALUES
(2, '/docs', 0, 'docs', 1),
(3, '/contacts', 0, 'contacts', 4),
(4, '/tutorials', 0, 'tutorials', 2),
(5, '/shop', 0, 'shop', 3);

-- --------------------------------------------------------

--
-- Table structure for table `menuitems_translate`
--

CREATE TABLE `menuitems_translate` (
  `id` int(11) NOT NULL,
  `menuitem_alias` varchar(255) NOT NULL,
  `lang_alias` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menuitems_translate`
--

INSERT INTO `menuitems_translate` (`id`, `menuitem_alias`, `lang_alias`, `value`) VALUES
(1, 'home', 'ru', 'Главная'),
(2, 'docs', 'ru', 'Документация'),
(3, 'contacts', 'ru', 'Контакты'),
(4, 'home', 'en', 'Main'),
(5, 'contacts', 'en', 'Contacts'),
(6, 'docs', 'en', 'Docs'),
(7, 'home', 'ua', 'Головна'),
(8, 'docs', 'ua', 'Документація'),
(9, 'contacts', 'ua', 'Контакти'),
(10, 'tutorials', 'en', 'Tutorials'),
(11, 'shop', 'en', 'Shop');

-- --------------------------------------------------------

--
-- Table structure for table `translate`
--

CREATE TABLE `translate` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `lang_alias` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `translate`
--

INSERT INTO `translate` (`id`, `alias`, `lang_alias`, `value`) VALUES
(1, 'hero_description', 'en', 'Web-framework with good documentation!'),
(2, 'hero_description', 'ru', 'Веб-фреймворк с хорошей документацией'),
(3, 'hero_description', 'ua', 'Веб-фреймворк з гарною документаціею'),
(4, 'read_docs', 'en', 'Read docs'),
(5, 'read_docs', 'ua', 'Читати документацію'),
(6, 'read_docs', 'ru', 'Читать документацию');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`, `name`, `role`) VALUES
(3, 'admin', '$2y$10$hCua9/1FkRPW5A1VMCx7b.gbCaLsQjLgwLNlTt1i2T/9/2vh3hjq2', 'admin@admin.com', 'admin', 'user'),
(4, 'user', '$2y$10$QQSaK7cIBkdN2VUMJNfbLOSr2HI5j0ZgCnXM.i6s27B07D.s4XTA2', 'user@user.com', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuitems`
--
ALTER TABLE `menuitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuitems_translate`
--
ALTER TABLE `menuitems_translate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translate`
--
ALTER TABLE `translate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menuitems`
--
ALTER TABLE `menuitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menuitems_translate`
--
ALTER TABLE `menuitems_translate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `translate`
--
ALTER TABLE `translate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
