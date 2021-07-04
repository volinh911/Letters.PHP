-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 02:51 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16991579_letters`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `imgurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `result_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_profile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `admin`, `username`, `email`, `password`, `image_profile`, `date_created`) VALUES
(1, 1, '1959009', 'khangng2001@gmail.com', '$2y$10$3UIgo0rk9txSTsoKPmtcPOg.MiNL5PNqbSYlZVe3K/Sm//KqJzJaO', '', '2021-06-13 15:47:04'),
(2, 1, '1959043', '1959043@itec.hcmus.edu.vn', '$2y$10$0K/WoEHxM.yJCs/jPHqoA.s40zFmXgy/z/pOBOQzce1xhzGGyH19i', '', '2021-06-13 15:49:23'),
(5, 1, '1959013', '1959013@itec.hcmus.edu.vn', '$2y$10$1Kn.Lwq987FP.nY23L0p3utlUILxCK0cxZYQ14lmxwujVSiOupxq6', '', '2021-06-17 10:41:37'),
(6, 1, '1959029', '1959029@itec.hcmus.edu.vn', '$2y$10$Z14llsAhVbVQ1tu.baDzo.Nqj.E705x7HcDS7d8kP0GPTaeL.Sxb6', '', '2021-06-17 13:47:09'),
(15, 0, '1959026', '1959026@itec.hcmus.edu.vn', '$2y$10$TVpyNsYbp61xvX9y3so38utSXqm4NHoYsJrIWkGe35Mmamq3iwXAm', '', '2021-06-26 11:54:45'),
(19, 0, '1959020', '1959020@itec.hcmus.edu.vn', '$2y$10$.A.0UFVCLYLsVa4kQBCnfe10aTdkXd5aQwZPKxY1YEAk3w219joha', '1625283417_zura.png', '2021-06-28 19:13:48'),
(20, 0, '1959014', '1959014@itec.hcmus.edu.vn', '$2y$10$iYStKWI3MGEQ1f9E4ecOZu5.pRjvcx/5aHvjb2zcUsl7UB4e9SWfW', '1625215640_zura.png', '2021-06-28 19:35:05'),
(21, 0, '1959002', '1959002@itec.hcmus.edu.vn', '$2y$10$/YKPIAsCoLf484uH.BxIhu1zb.YKIkMvQChz3dfZiBi48uqUE9FuO', '1625301015_Zurasanta.jpg', '2021-06-28 21:26:58'),
(22, 0, '1959024', '1959024@itec.hcmus.edu.vn', '$2y$10$vybycvYWRPn/6NmI3QcedOKxzsh31EEcpM5hG.IVg.2yLquzY/y9K', '', '2021-06-28 21:46:41'),
(23, 0, '1959033', '1959033@itec.hcmus.edu.vn', '$2y$10$5BN6GUClJiklppUveLHqMOHtzukeBabpR1gnaf2Uoxx0WWWywZrvK', '', '2021-06-28 21:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `word_id` int(11) NOT NULL,
  `word` text COLLATE utf8_unicode_ci NOT NULL,
  `diff` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`word_id`, `word`, `diff`) VALUES
(1, 'sea', '1'),
(2, 'cow', '1'),
(3, 'banana', '1'),
(4, 'ladder', '1'),
(5, 'book', '1'),
(6, 'temple', '1'),
(7, 'king', '1'),
(8, 'queen', '1'),
(9, 'bay', '1'),
(10, 'beach', '1'),
(11, 'lost', '1'),
(12, 'love', '1'),
(13, 'away', '1'),
(14, 'clear', '1'),
(15, 'time', '1'),
(16, 'space', '1'),
(17, 'barrel', '1'),
(18, 'lord', '1'),
(19, 'way', '1'),
(20, 'bone', '1'),
(21, 'apple', '1'),
(22, 'teeth', '1'),
(23, 'pear', '1'),
(24, 'pour', '1'),
(25, 'paint', '1'),
(26, 'pen', '1'),
(27, 'shirt', '1'),
(28, 'pants', '1'),
(29, 'score', '1'),
(30, 'point', '1'),
(31, 'sharp', '1'),
(32, 'thanks', '1'),
(33, 'sorry', '1'),
(34, 'sign', '1'),
(35, 'far', '1'),
(36, 'fan', '1'),
(37, 'memory', '1'),
(38, 'lonely', '1'),
(39, 'crown', '1'),
(40, 'car', '1'),
(41, 'star', '1'),
(42, 'light', '1'),
(43, 'dark', '1'),
(44, 'low', '1'),
(45, 'high', '1'),
(46, 'cold', '1'),
(47, 'hot', '1'),
(48, 'warm', '1'),
(49, 'heavy', '1'),
(50, 'hard', '1'),
(51, 'soft', '1'),
(52, 'coat', '1'),
(53, 'yellow', '1'),
(54, 'red', '1'),
(55, 'blue', '1'),
(56, 'orange', '1'),
(57, 'brown', '1'),
(58, 'black', '1'),
(59, 'white', '1'),
(60, 'magenta', '1'),
(61, 'pink', '1'),
(62, 'purple', '1'),
(63, 'gray', '1'),
(64, 'one', '1'),
(65, 'seven', '1'),
(66, 'eight', '1'),
(67, 'three', '1'),
(68, 'carpet', '1'),
(69, 'shadow', '1'),
(70, 'clown', '1'),
(71, 'shape', '1'),
(72, 'ghost', '1'),
(73, 'pineapple', '1'),
(74, 'hungry', '1'),
(75, 'thristy', '1'),
(76, 'you', '1'),
(77, 'bathtub', '1'),
(78, 'shower', '1'),
(79, 'right', '1'),
(80, 'left', '1'),
(81, 'sleep', '1'),
(82, 'awake', '1'),
(83, 'morning', '1'),
(84, 'dawn', '1'),
(85, 'dusk', '1'),
(86, 'baby', '1'),
(87, 'pretty', '1'),
(88, 'ugly', '1'),
(89, 'beautiful', '1'),
(90, 'video', '1'),
(91, 'game', '1'),
(92, 'age', '1'),
(93, 'kite', '1'),
(94, 'ride', '1'),
(95, 'while', '1'),
(96, 'limit', '1'),
(97, 'buddy', '1'),
(98, 'trophy', '1'),
(99, 'husband', '1'),
(100, 'wife', '1'),
(101, 'gang', '2'),
(102, 'sneeze', '2'),
(103, 'convenience', '2'),
(104, 'cough', '2'),
(105, 'freeze', '2'),
(106, 'template', '2'),
(107, 'course', '2'),
(108, 'magical', '2'),
(109, 'draw', '2'),
(110, 'softness', '2'),
(111, 'quickly', '2'),
(112, 'sloth', '2'),
(113, 'blown', '2'),
(114, 'taught', '2'),
(115, 'tender', '2'),
(116, 'summertime', '2'),
(117, 'masterpiece', '2'),
(118, 'memorize', '2'),
(119, 'torn', '2'),
(120, 'bumblebee', '2'),
(121, 'sporty', '2'),
(122, 'template', '2'),
(123, 'designer', '2'),
(124, 'architecture', '2'),
(125, 'thinker', '2'),
(126, 'paradise', '2'),
(127, 'terrain', '2'),
(128, 'epic', '2'),
(129, 'historical', '2'),
(130, 'counterpoint', '2'),
(131, 'savage', '2'),
(132, 'welcome', '2'),
(133, 'hiccup', '2'),
(134, 'reborn', '2'),
(135, 'diploma', '2'),
(136, 'suspense', '2'),
(137, 'readiness', '2'),
(138, 'swirl', '2'),
(139, 'clown', '2'),
(140, 'erasure', '2'),
(141, 'twinkle', '2'),
(142, 'pile', '2'),
(143, 'ebb', '2'),
(144, 'fantastical', '2'),
(145, 'failure', '2'),
(146, 'steep', '2'),
(147, 'birch', '2'),
(148, 'flight', '2'),
(149, 'hypnos', '2'),
(150, 'midnight', '2'),
(151, 'grand', '2'),
(152, 'cinematic', '2'),
(153, 'tempest', '2'),
(154, 'somber', '2'),
(155, 'effortless', '2'),
(156, 'cliff', '2'),
(157, 'millionaire', '2'),
(158, 'snowdrop', '2'),
(159, 'trace', '2'),
(160, 'scarlet', '2'),
(161, 'tough', '2'),
(162, 'tradition', '2'),
(163, 'familiar', '2'),
(164, 'skyscraper', '2'),
(165, 'cloud', '2'),
(166, 'helpless', '2'),
(167, 'bathroom', '2'),
(168, 'oak', '2'),
(169, 'button', '2'),
(170, 'sweep', '2'),
(171, 'favourite', '2'),
(172, 'tone', '2'),
(173, 'timber', '2'),
(174, 'colourful', '2'),
(175, 'ending', '2'),
(176, 'lasting', '2'),
(177, 'flight', '2'),
(178, 'daisy', '2'),
(179, 'lilly', '2'),
(180, 'sunflower', '2'),
(181, 'pin', '2'),
(182, 'deck', '2'),
(183, 'lightning', '2'),
(184, 'lighting', '2'),
(185, 'truthful', '2'),
(186, 'resist', '2'),
(187, 'punch', '2'),
(188, 'parental', '2'),
(189, 'advice', '2'),
(190, 'plum', '2'),
(191, 'potent', '2'),
(192, 'bearing', '2'),
(193, 'sadden', '2'),
(194, 'demand', '2'),
(195, 'cinnamon', '2'),
(196, 'mammal', '2'),
(197, 'reptile', '2'),
(198, 'venom', '2'),
(199, 'sweetness', '2'),
(200, 'alive', '2'),
(201, 'advanced', '3'),
(202, 'grapefruit', '3'),
(203, 'chemtrail', '3'),
(204, 'nostalgia', '3'),
(205, 'aurora', '3'),
(206, 'indie', '3'),
(207, 'development', '3'),
(208, 'curiousity', '3'),
(209, 'radio', '3'),
(210, 'swiftness', '3'),
(211, 'undertaker', '3'),
(212, 'limbo', '3'),
(213, 'obsurd', '3'),
(214, 'gleeful', '3'),
(215, 'spiral', '3'),
(216, 'despair', '3'),
(217, 'pocket', '3'),
(218, 'evolve', '3'),
(219, 'involvement', '3'),
(220, 'sorceress', '3'),
(221, 'afterhour', '3'),
(222, 'poisonous', '3'),
(223, 'downpour', '3'),
(224, 'benign', '3'),
(225, 'dolt', '3'),
(226, 'equilateral', '3'),
(227, 'isoceles', '3'),
(228, 'perversion', '3'),
(229, 'obviously', '3'),
(230, 'syringe', '3'),
(231, 'rhytmn', '3'),
(232, 'epitome', '3'),
(233, 'reminiscent', '3'),
(234, 'ergo', '3'),
(235, 'vanguard', '3'),
(236, 'shameless', '3'),
(237, 'whimiscal', '3'),
(238, 'erroneous', '3'),
(239, 'membrane', '3'),
(240, 'armament', '3'),
(241, 'cyclone', '3'),
(242, 'unbelievable', '3'),
(243, 'melancholic', '3'),
(244, 'cunning', '3'),
(245, 'spine', '3'),
(246, 'scratching', '3'),
(247, 'strength', '3'),
(248, 'successful', '3'),
(249, 'rational', '3'),
(250, 'elemental', '3'),
(251, 'rhinoceros', '3'),
(252, 'entendre', '3'),
(253, 'cobblestone', '3'),
(254, 'juxtaposition', '3'),
(255, 'breathless', '3'),
(256, 'eerieness', '3'),
(257, 'thalassophobia', '3'),
(258, 'dyeing', '3'),
(259, 'discern', '3'),
(260, 'ravenous', '3'),
(261, 'vividly', '3'),
(262, 'timid', '3'),
(263, 'drizzle', '3'),
(264, 'dazzle', '3'),
(265, 'semper', '3'),
(266, 'monotonous', '3'),
(267, 'liquorish', '3'),
(268, 'serpentine', '3'),
(269, 'clarity', '3'),
(270, 'technicolor', '3'),
(271, 'screw', '3'),
(272, 'paleness', '3'),
(273, 'chagrin', '3'),
(274, 'sunglasses', '3'),
(275, 'lipogram', '3'),
(276, 'telegraph', '3'),
(277, 'portmanteau', '3'),
(278, 'oxymoron', '3'),
(279, 'definition', '3'),
(280, 'disembowel', '3'),
(281, 'monochrome', '3'),
(282, 'hologram', '3'),
(283, 'pneumatics', '3'),
(284, 'summit', '3'),
(285, 'dwindle', '3'),
(286, 'ingenuity', '3'),
(287, 'forensics', '3'),
(288, 'structure', '3'),
(289, 'honeymoon', '3'),
(290, 'pitiful', '3'),
(291, 'cassette', '3'),
(292, 'bootstrap', '3'),
(293, 'duplicate', '3'),
(294, 'ultimatum', '3'),
(295, 'asinine', '3'),
(296, 'professionalism', '3'),
(297, 'capitalism', '3'),
(298, 'cacophonic', '3'),
(299, 'streamline', '3'),
(300, 'hiatus', '3'),
(301, 'pneumonoultramicroscopicsilicovolcanoconiosis', '4'),
(302, 'idyll', '4'),
(303, 'bucolic', '4'),
(304, 'picturesque', '4'),
(305, 'prose', '4'),
(306, 'oscillation', '4'),
(307, 'skullduggery', '4'),
(308, 'scrupulous', '4'),
(309, 'inane', '4'),
(310, 'risque', '4'),
(311, 'extrapolate', '4'),
(312, 'capitulate', '4'),
(313, 'impervious', '4'),
(314, 'rhetorical', '4'),
(315, 'emblazon', '4'),
(316, 'impromptu', '4'),
(317, 'clandestine', '4'),
(318, 'flamboyance', '4'),
(319, 'flummox', '4'),
(320, 'inveigle', '4'),
(321, 'euphemistic', '4'),
(322, 'infantilize', '4'),
(323, 'ostentatious', '4'),
(324, 'antecedent', '4'),
(325, 'triskaidekaphobia', '4'),
(326, 'antidisestablishmentarianism', '4'),
(327, 'voracious', '4'),
(328, 'penis', '4'),
(329, 'chutzpah', '4'),
(330, 'reverential', '4'),
(331, 'magnanimous', '4'),
(332, 'myoptic', '4'),
(333, 'lackadisical', '4'),
(334, 'obseqious', '4'),
(335, 'anecdote', '4'),
(336, 'infeffable', '4'),
(337, 'ixnay', '4'),
(338, 'dilapidate', '4'),
(339, 'commiserate', '4'),
(340, 'harangue', '4'),
(341, 'phantasmagorical', '4'),
(342, 'eponymous', '4'),
(343, 'cringe', '4'),
(344, 'main.html', '4'),
(345, 'haughty', '4'),
(346, 'denouement', '4'),
(347, 'niche', '4'),
(348, 'kitsch', '4'),
(349, 'taciturn', '4'),
(350, 'newt', '4'),
(351, 'hackneyed', '4'),
(352, 'curmudgeon', '4'),
(353, 'infinitestimal', '4'),
(354, 'desultory', '4'),
(355, 'assiduous', '4'),
(356, 'ebullient', '4'),
(357, 'pedagogue', '4'),
(358, 'pedantic', '4'),
(359, 'minutia', '4'),
(360, 'effervescent', '4'),
(361, 'exsanguinate', '4'),
(362, 'sanguimancy', '4'),
(363, 'longeval', '4'),
(364, 'terse', '4'),
(365, 'adage', '4'),
(366, 'interrobang', '4'),
(367, 'scintillate', '4'),
(368, 'kaleidoscope', '4'),
(369, 'impoverish', '4'),
(370, 'herbicide', '4'),
(371, 'discombobulate', '4'),
(372, 'trepidation', '4'),
(373, 'leeway', '4'),
(374, 'allegory', '4'),
(375, 'opine', '4'),
(376, 'impoverish', '4'),
(377, 'abberant', '4'),
(378, 'armageddon', '4'),
(379, 'famished', '4'),
(380, 'opulent', '4'),
(381, 'membranous', '4'),
(382, 'despondent', '4'),
(383, 'petrichor', '4'),
(384, 'explicit', '4'),
(385, 'contentious', '4'),
(386, 'Cajole', '4'),
(387, 'Humbug', '4'),
(388, 'blarney', '4'),
(389, 'flirtatious', '4'),
(390, 'aaaaaaaaaaaaaaaaaaaaaaaaa', '4'),
(391, 'capiche', '4'),
(392, 'ouroboros', '4'),
(393, 'wholesome', '4'),
(394, 'anal', '4'),
(395, 'visceral', '4'),
(396, 'promiment', '4'),
(397, 'promiscuous', '4'),
(398, 'esophagus', '4'),
(399, 'assessment', '4'),
(400, 'panhellenism', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`word_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `word_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
