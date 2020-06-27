-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 02:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hadith`
--

-- --------------------------------------------------------

--
-- Table structure for table `hadith_1`
--

CREATE TABLE `hadith_1` (
  `id` int(2) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Hadith` varchar(50) NOT NULL,
  `Reference` varchar(50) NOT NULL,
  `Translation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hadith_1`
--

INSERT INTO `hadith_1` (`id`, `Title`, `Hadith`, `Reference`, `Translation`) VALUES
(1, 'أهمية العلمِ الديني', 'طلبُ العلمِ فَريضةٌ على كلِ مُسلم', ' رواه البيهقي', 'ইলমে দ্বীন শিক্ষা করা প্রত্যেক মুসলমানের জন্য ফরজ ।');

-- --------------------------------------------------------

--
-- Table structure for table `hadith_2`
--

CREATE TABLE `hadith_2` (
  `id` int(2) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Hadith` varchar(50) NOT NULL,
  `Reference` varchar(100) NOT NULL,
  `Translation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hadith_2`
--

INSERT INTO `hadith_2` (`id`, `Title`, `Hadith`, `Reference`, `Translation`) VALUES
(2, 'أفضل رجل', 'خَيْرُكُمْ مَنْ تَعَلَّمَ الْقُرْآنَ وَعَلَّمَهُ', 'صحيح البخاري', 'তোমাদের মধ্যে সর্বোত্তম হ\'ল যারা কুরআন শিখেছে এবং অন্যকে শিক্ষা দেয় ।');

-- --------------------------------------------------------

--
-- Table structure for table `hadith_3`
--

CREATE TABLE `hadith_3` (
  `id` int(2) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Hadith` varchar(200) NOT NULL,
  `Reference` varchar(50) NOT NULL,
  `Translation` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hadith_3`
--

INSERT INTO `hadith_3` (`id`, `Title`, `Hadith`, `Reference`, `Translation`) VALUES
(1, 'الاىمان', 'قال رسول الله صلى الله عليه وسلم :  الطهور شطر الإيمان ، والحمد لله تملأ الميزان ، وسبحان الله والحمد لله تملآن - تملأ - ما بين السماوات والأرض ، والصلاة نور ، والصدقة برهان ، والصبر ضياء ، والقرآن حج', 'رواه مسلم', 'রাসুল্লাহ সাল্লালাহু আলাইহওয়াসাল্লাম  ইরশাদ  করেন যে , পবিত্রতা ইমানের অংশ ,আলহামদুলিল্লাহ মিজানকে  পরিপূর্ণ  করে এবং সুবহানাল্লাহ ও আলহামদুলিল্লাহ আসমান ও জমিনকে কানায় কানায় পরিপূর্ণ করে এবং নামাজ নূর এবং সাদাকাহ বুরহান এবং ধৈর্য হল আলোর মিছিল এবং কুরআন তোমার পক্ষে অথবা বিপক্ষের দলিল ,প্রত্যেক ব্যক্তিই চায় তাকে বিকিয়ে দিতে অ্তঃপর কেউ তা দমিয়ে ফেলে অথবা ইচ্ছার অনুগামি হয়।');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hadith_1`
--
ALTER TABLE `hadith_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hadith_2`
--
ALTER TABLE `hadith_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hadith_3`
--
ALTER TABLE `hadith_3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hadith_1`
--
ALTER TABLE `hadith_1`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hadith_2`
--
ALTER TABLE `hadith_2`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hadith_3`
--
ALTER TABLE `hadith_3`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
