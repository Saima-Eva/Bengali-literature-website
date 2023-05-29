-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 11:34 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sosp`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content_id` int(10) NOT NULL,
  `user_id` int(20) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content_id`, `user_id`, `comments`, `time`) VALUES
(1, 4, 1, 'Good', '2023-03-25 20:51:13'),
(2, 6, 0, 'hmm', '2023-03-25 20:51:13'),
(3, 6, 0, 'hmm vai', '2023-03-25 20:51:13'),
(4, 10, 0, 'ok', '2023-03-25 21:38:03'),
(5, 10, 0, 'okk', '2023-03-25 21:39:40'),
(6, 10, 0, 'okk', '2023-03-25 21:46:35'),
(7, 10, 1, 'Hmm', '2023-03-25 21:49:28'),
(8, 13, 4, 'wow', '2023-03-26 09:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `user` int(20) NOT NULL,
  `categories` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `approved` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `user`, `categories`, `content`, `file`, `approved`) VALUES
(4, 0, 'কবিতা', '<p>hmmmm</p>\r\n', 'Capture.PNG', 1),
(5, 0, 'কবিতা', '<p>vhjgh</p>\r\n', '', 1),
(6, 1, 'উপন্যাস', '<p>okkkk</p>\r\n', '', 1),
(7, 0, 'গান', '<p>Bangla <strong>GAAN</strong></p>\r\n', '', 1),
(8, 0, 'গান', '<p>gaaaaaaaaaaaaaaaan</p>\r\n', 'Download Free Rain Sound Effects.mp3', 1),
(10, 0, 'গান', '<p>Video Gaan</p>\r\n', 'Love Mashup (ACV Mashup) - Arijit Singh, Atif Aslam, Alia Bhatt - Bollywood Love Mashup 2022.mp4', 1),
(11, 1, 'গান', '<p>Hindiii</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span class=\"marker\"><strong>song</strong></span></p>\r\n', 'Prithibir Joto Sukh - পৃথিবীর যত সুখ [Slowed + Reverb] Habib Wahid - Nancy.mp4', 1),
(12, 1, 'কবিতা', '<h1>এক জন্ম &ndash; তারাপদ রায়</h1>\r\n\r\n<p>অনেকদিন দেখা হবে না<br />\r\nতারপর একদিন দেখা হবে।<br />\r\nদুজনেই দুজনকে বলবো,<br />\r\n&lsquo;অনেকদিন দেখা হয় নি&rsquo;।<br />\r\nএইভাবে যাবে দিনের পর দিন<br />\r\nবত্সরের পর বত্সর।<br />\r\nতারপর একদিন হয়ত জানা যাবে<br />\r\nবা হয়ত জানা যাবে না,<br />\r\nযে তোমার সঙ্গে আমার<br />\r\nঅথবা আমার সঙ্গে তোমার<br />\r\nআর দেখা হবে না।</p>\r\n', '', 1),
(13, 1, 'কবিতা', '<h1>তোমাকে পাওয়ার জন্যে, হে স্বাধীনতা &ndash; কবি শামসুর রাহমান</h1>\r\n\r\n<p>তোমাকে পাওয়ার জন্যে, হে স্বাধীনতা,<br />\r\nতোমাকে পাওয়ার জন্যে<br />\r\nআর কতবার ভাসতে হবে রক্তগঙ্গায় ?<br />\r\nআর কতবার দেখতে হবে খাণ্ডবদাহন ?</p>\r\n\r\n<p>তুমি আসবে ব&rsquo;লে, হে স্বাধীনতা,</p>\r\n\r\n<p>সাকিনা বিবির কপাল ভাঙলো,<br />\r\nসিঁথির সিঁদুর গেল হরিদাসীর।<br />\r\nতুমি আসবে ব&rsquo;লে, হে স্বাধীনতা,<br />\r\nশহরের বুকে জলপাইয়ের রঙের ট্যাঙ্ক এলো<br />\r\nদানবের মত চিত্কার করতে করতে<br />\r\nতুমি আসবে ব&rsquo;লে, হে স্বাধীনতা,<br />\r\nছাত্রাবাস বস্তি উজাড় হলো। রিকয়েললেস রাইফেল<br />\r\nআর মেশিনগান খই ফোটালো যত্রতত্র।<br />\r\nতুমি আসবে ব&rsquo;লে, ছাই হলো গ্রামের পর গ্রাম।<br />\r\nতুমি আসবে ব&rsquo;লে, বিধ্বস্ত পাড়ায় প্রভূর বাস্তুভিটার<br />\r\nভগ্নস্তূপে দাঁড়িয়ে একটানা আর্তনাদ করলো একটা কুকুর।<br />\r\nতুমি আসবে ব&rsquo;লে, হে স্বাধীনতা,<br />\r\nঅবুঝ শিশু হামাগুড়ি দিলো পিতামাতার লাশের উপর।</p>\r\n\r\n<p>তোমাকে পাওয়ার জন্যে, হে স্বাধীনতা, তোমাকে পাওয়ার জন্যে<br />\r\nআর কতবার ভাসতে হবে রক্তগঙ্গায় ?<br />\r\nআর কতবার দেখতে হবে খাণ্ডবদাহন ?<br />\r\nস্বাধীনতা, তোমার জন্যে এক থুত্থুরে বুড়ো<br />\r\nউদাস দাওয়ায় ব&rsquo;সে আছেন &ndash; তাঁর চোখের নিচে অপরাহ্ণের<br />\r\nদুর্বল আলোর ঝিলিক, বাতাসে নড়ছে চুল।<br />\r\nস্বাধীনতা, তোমার জন্যে<br />\r\nমোল্লাবাড়ির এক বিধবা দাঁড়িয়ে আছে<br />\r\nনড়বড়ে খুঁটি ধ&rsquo;রে দগ্ধ ঘরের।</p>\r\n\r\n<p>স্বাধীনতা, তোমার জন্যে<br />\r\nহাড্ডিসার এক অনাথ কিশোরী শূন্য থালা হাতে<br />\r\nবসে আছে পথের ধারে।<br />\r\nতোমার জন্যে,<br />\r\nসগীর আলী, শাহবাজপুরের সেই জোয়ান কৃষক,<br />\r\n<strong>কেষ্ট দাস, জেলেপাড়ার সবচেয়ে সাহসী লোকটা,<br />\r\nমতলব মিয়া, মেঘনা নদীর দক্ষ মাঝি,<br />\r\nগাজী গাজী ব&rsquo;লে নৌকা চালায় উদ্দান ঝড়ে<br />\r\nরুস্তম শেখ, ঢাকার রিকশাওয়ালা, যার ফুসফুস<br />\r\nএখন পোকার দখলে</strong><br />\r\nআর রাইফেল কাঁধে বনে জঙ্গলে ঘুড়ে বেড়ানো<br />\r\nসেই তেজী তরুণ যার পদভারে<br />\r\nএকটি নতুন পৃথিবীর জন্ম হ&rsquo;তে চলেছে &mdash;<br />\r\nসবাই অধীর প্রতীক্ষা করছে তোমার জন্যে, হে স্বাধীনতা।</p>\r\n', '', 1),
(14, 4, 'কবিতা', '<p>okkkk</p>\r\n', '', 1),
(15, 4, 'উপন্যাস', '<p>hmm</p>\r\n', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `content_id` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `content_id`, `timestamp`) VALUES
(1, 1, 6, '0000-00-00 00:00:00'),
(2, 1, 5, '2023-03-24 22:50:51'),
(3, 1, 5, '2023-03-25 08:56:04'),
(4, 0, 7, '2023-03-25 20:25:02'),
(5, 0, 8, '2023-03-25 21:14:12'),
(6, 0, 9, '2023-03-25 21:20:10'),
(7, 0, 10, '2023-03-25 21:22:50'),
(8, 1, 11, '2023-03-26 01:09:27'),
(9, 1, 13, '2023-03-26 07:08:43'),
(10, 1, 12, '2023-03-26 09:11:36'),
(11, 4, 14, '2023-03-26 09:22:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `aa` tinyint(4) NOT NULL DEFAULT 0,
  `notification` tinyint(10) NOT NULL DEFAULT 0,
  `bio` varchar(500) DEFAULT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(50) DEFAULT NULL,
  `occupation` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `aa`, `notification`, `bio`, `gender`, `email`, `phone`, `occupation`, `nationality`, `password`, `photo`) VALUES
(0, 'sakit mia', 0, 11, NULL, 'male', 'sh.sakirs@gmail.com', 1776047787, 'Kobi', 'Bang', 'dfgdffgd', NULL),
(1, 'Rakib Khan', 1, 2, 'Not enough to explain.', 'male', 'sh.shakirs@gmail.com', 343534345, 'Student', 'Bangladesh', '112233', '170762897_127651259332833_9070324877501596176_n.jpg'),
(4, 'Nokiba', 0, 0, 'Ki bolbo vai', 'female', 'nokiba@gmail.com', 177692332, 'Student', 'BD', '112233', 'Opshora.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
