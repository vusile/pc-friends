-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2010 at 09:38 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `zxcvb`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `text` text NOT NULL,
  `pdfpath` varchar(500) NOT NULL,
  `callflag` tinyint(1) NOT NULL,
  `dos` datetime NOT NULL,
  `magazined` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `uid`, `title`, `text`, `pdfpath`, `callflag`, `dos`, `magazined`) VALUES
(8, 2, 'Hello World', 'asdf\r\n\r\nasdf\r\n\r\nasdf\r\n\r\nasdf\r\n', 'asdf', 1, '2010-02-21 14:58:04', 0),
(9, 2, 'World Hello', 'qwerty\r\nqwerty\r\nqwerty\r\nqwerty\r\nqwerty\r\nqwerty\r\n', 'asdf', 1, '2010-03-21 14:58:20', 0),
(10, 2, 'Ahem Ahem', 'qwerty', 'asdf', 1, '2009-12-21 15:15:31', 0),
(11, 5, 'shams article', 'asdf', 'asdf', 1, '2010-03-21 17:22:32', 0),
(12, 4, 'Terry test', 'asdf', 'asdf', 1, '2010-03-21 17:22:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `uid`, `sid`, `rating`) VALUES
(1, 4, 8, 3),
(2, 5, 8, 5),
(3, 2, 12, 5),
(4, 2, 8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `shouts`
--

CREATE TABLE IF NOT EXISTS `shouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `shout` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `shouts`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`) VALUES
(1, 'admin', 'd7386c6f61536ed2dad1bfd8fc721315cccd0a5b'),
(2, 'skun', 'd46f02ffdfdb349547689bc9dd10262c58304f4d'),
(3, 'alfy', 'f120f348a25ae4414394f413ab5da0ad1bdfa091'),
(4, 'tery', '40b2b6b5b7dec7e2428d06e8ab87f963d68835fe'),
(5, 'sham', '577a9588bee111ed7207664242fbf7f1aa173bc0'),
(6, 'andrew', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(7, 'vivek', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(8, 'minion', '35675e68f4b5af7b995d9205ad0fc43842f16450');
