 

--
-- Database: `dheerajcontractors`
--

-- --------------------------------------------------------

--
-- Table structure for table `bedroom`
--

CREATE TABLE IF NOT EXISTS `bedroom` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `pic` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `bedroom`
--

INSERT INTO `bedroom` (`id`, `name`, `pic`) VALUES
(1, 'royal bedroom', 'b1.jpg'),
(2, 'royal bedroom', 'b2.jpg'),
(3, 'royal bedroom', 'b3.jpg'),
(4, 'royal bedroom', 'b4.jpg'),
(5, 'royal bedroom', 'b5.jpg'),
(6, 'royal bedroom', 'b6.jpg'),
(7, 'royal bedroom', 'b7.jpg'),
(8, 'royal bedroom', 'b8.jpg'),
(9, 'royal bedroom', 'b9.jpg'),
(10, 'royal bedroom', 'b10.jpg'),
(11, 'royal bedroom', 'b11.jpg'),
(12, 'royal bedroom', 'b12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen`
--

CREATE TABLE IF NOT EXISTS `kitchen` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `pic` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `kitchen`
--


-- --------------------------------------------------------

--
-- Table structure for table `living_room`
--

CREATE TABLE IF NOT EXISTS `living_room` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `pic` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `living_room`
--

INSERT INTO `living_room` (`id`, `name`, `pic`) VALUES
(2, 'royal orange-cream theme living room', 'l1.jpg'),
(3, 'royal wooden traditional style living room', 'l2.jpg'),
(4, 'royal golden-white theme living room', 'l3.jpg'),
(5, 'modern wooden-tiled theme living room', 'l4.jpg'),
(6, 'modern yellow-green theme living room', 'l5.jpg'),
(7, 'modern brown theme living room', 'l6.jpg'),
(8, 'royal golden-brown theme living room', 'l7.jpg'),
(9, 'modern purple-white theme living room', 'l8.jpg'),
(10, 'modern glass lighting theme living room', 'l9.jpg'),
(11, 'modern orange-grey theme living room', 'l10.jpg'),
(12, 'modern white-brown theme living room', 'l11.jpg'),
(13, 'modern grey-green theme living room', 'l12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(30) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `full_name`, `email_id`, `password`, `role`) VALUES
(1, 'Sandip Sahani', '', 'sandipsahani', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE IF NOT EXISTS `office` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `pic` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `office`
--


-- --------------------------------------------------------

--
-- Table structure for table `popular`
--

CREATE TABLE IF NOT EXISTS `popular` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `review` varchar(100) NOT NULL,
  `photo` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `popular`
--

INSERT INTO `popular` (`id`, `title`, `review`, `photo`) VALUES
(1, 'popular 1', 'Here he comes Here comes Speed Racer. He''s a demon on wheels. Wouldn''t you like to get away? Sometim', 'pop1.jpg'),
(2, 'popular 2', 'Here he comes Here comes Speed Racer. He''s a demon on wheels. Wouldn''t you like to get away? Sometim', 'pop2.jpg'),
(3, 'popular 3', 'Here he comes Here comes Speed Racer. He''s a demon on wheels. Wouldn''t you like to get away? Sometim', 'pop3.jpg'),
(4, 'popular 4', 'What might be right for you may not be right for some. And we know Flipper lives in a world full of ', 'pop4.jpg'),
(5, 'popular5', 'What might be right for you may not be right for some. And we know Flipper lives in a world full of ', 'pop5.jpg'),
(6, 'popular', '', 'pop6.jpg'),
(7, 'popular', '', 'pop7.jpg'),
(8, 'popular', '', 'pop8.jpg'),
(9, 'popular', '', 'pop9.jpg'),
(10, 'popular', '', 'pop10.jpg'),
(11, 'popular', '', 'pop11.jpg'),
(12, 'popular', '', 'pop12.jpg'),
(13, 'popular', '', 'pop13.jpg'),
(14, 'popular', '', 'pop14.jpg'),
(15, 'popular', '', 'pop15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `study_room`
--

CREATE TABLE IF NOT EXISTS `study_room` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `pic` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `study_room`
--


