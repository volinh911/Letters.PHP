-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 11:45 AM
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
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `admin`, `username`, `email`, `password`, `date_created`) VALUES
(1, 1, '1959009', 'khangng2001@gmail.com', '$2y$10$3UIgo0rk9txSTsoKPmtcPOg.MiNL5PNqbSYlZVe3K/Sm//KqJzJaO', '2021-06-13 15:47:04'),
(2, 1, '1959043', '1959043@itec.hcmus.edu.vn', '$2y$10$0K/WoEHxM.yJCs/jPHqoA.s40zFmXgy/z/pOBOQzce1xhzGGyH19i', '2021-06-13 15:49:23'),
(3, 0, '1959001', '1959001@itec.hcmus.edu.vn', '$2y$10$By1ws0DULG26F5PuPZuGCOgHeypt.DUQ7gOPLvkgnfBkbel8Owgli', '2021-06-13 15:54:30'),
(5, 1, '1959013', '1959013@itec.hcmus.edu.vn', '$2y$10$1Kn.Lwq987FP.nY23L0p3utlUILxCK0cxZYQ14lmxwujVSiOupxq6', '2021-06-17 10:41:37'),
(6, 1, '1959029', '1959029@itec.hcmus.edu.vn', '$2y$10$Z14llsAhVbVQ1tu.baDzo.Nqj.E705x7HcDS7d8kP0GPTaeL.Sxb6', '2021-06-17 13:47:09'),
(7, 0, '1959018', '1959018@itec.hcmus.edu.vn', '$2y$10$qF3UKVrYwGJ2vlNl4HQx8OGCpJQDpsmidecPibEBsmph6ABYOkWNq', '2021-06-23 09:51:08'),
(8, 0, '1959039', '1959039@itec.hcmus.edu.vn', '$2y$10$PrOVxjGpo1ZaJMyh6XVK5.iDNokQin51h8bpkE0hVzMM95lDCmtFS', '2021-06-23 09:55:43'),
(9, 0, '1959004', '1959004@itec.hcmus.edu.vn', '$2y$10$w5BRlD8KTPvLafjdexSK5OxLxN7jHNTscvS8aNUCwA6M7IKSE/JBe', '2021-06-23 10:02:50'),
(10, 0, '1959003', '1959003@itec.hcmus.edu.vn', '$2y$10$ontsbT1IXcuHp09/bKzoreaCIlAKiAL1pVIuNC21oFEyCqs34HLVW', '2021-06-23 10:03:54'),
(11, 0, '1959005', '1959005@itec.hcmus.edu.vn', '$2y$10$lHNUvuK0YaYpejhJ7JH8teCmI6r6MVAK5YW.Zdse7SxLtgh9vWgoC', '2021-06-23 10:11:39');

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `word_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
