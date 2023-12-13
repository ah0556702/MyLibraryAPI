-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 09:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--
CREATE DATABASE IF NOT EXISTS `library` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `library`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Book_ID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Book_Desc` text NOT NULL,
  `Author_fName` varchar(30) NOT NULL,
  `Author_lName` varchar(15) NOT NULL,
  `Genre_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Book_ID`, `Title`, `Book_Desc`, `Author_fName`, `Author_lName`, `Genre_ID`) VALUES
(1, 'Written in my Own Hearts Blood', '1778: France declares war on Great Britain, the British army leaves Philadelphia, and George Washington’s troops leave Valley Forge in pursuit. At this moment, Jamie Fraser returns from a presumed watery grave to discover that his best friend has married his wife, his illegitimate son has discovered (to his horror) who his father really is, and his beloved nephew, Ian, wants to marry a Quaker. Meanwhile, Jamie’s wife, Claire Randall, and his sister, Jenny, are busy picking up the pieces.\r\n \r\nThe Frasers can only be thankful that their daughter Brianna and her family are safe in twentieth-century Scotland. Or not. In fact, Brianna is searching for her own son, who was kidnapped by a man determined to learn her family’s secrets. Her husband, Roger, has ventured into the past in search of the missing boy . . . never suspecting that the object of his quest has not left the present. Now, with Roger out of the way, the kidnapper can focus on his true target: Brianna herself.', 'Diana', 'Gabaldon', 0),
(2, 'Pride and Prejudice', 'Pride and Prejudice is an 1813 novel of manners by English author Jane Austen. The novel follows the character development of Elizabeth Bennet, the protagonist of the book, who learns about the repercussions of hasty judgments and comes to appreciate the difference between superficial goodness and actual goodness.', 'Jane', 'Austen', 0),
(3, 'Dracula', 'Dracula is a novel by Bram Stoker, published in 1897. An epistolary novel, the narrative is related through letters, diary entries, and newspaper articles. It has no single protagonist and opens with solicitor Jonathan Harker taking a business trip to stay at the castle of a Transylvanian nobleman, Count Dracula.', 'Bram', 'Stoker', 0),
(4, 'Lord of the Rings Set', 'The Lord of the Rings is the saga of a group of sometimes reluctant heroes who set forth to save their world from consummate evil. Its many worlds and creatures were drawn from Tolkien\'s extensive knowledge of philology and folklore.', 'J.R.R', 'Tolkein', 0),
(6, 'The Scottish Prisoner', 'Lord John Grey—aristocrat, soldier, and occasional spy—finds himself in possession of a packet of explosive documents that exposes a damning case of corruption against a British officer. But they also hint at a more insidious danger.', 'Diana', 'Gabaldon', 0),
(7, 'Interview With a Vampire', 'This is the story of Louis, as told in his own words, of his journey through mortal and immortal life. Louis recounts how he became a vampire at the hands of the radiant and sinister Lestat and how he became indoctrinated, unwillingly, into the vampire way of life.', 'Anne', 'Rice', 0),
(8, 'The Other Boleyn Girl', 'When Mary Boleyn comes to court as an innocent girl of fourteen, she catches the eye of the handsome and charming Henry VIII. Dazzled by the king, Mary falls in love with both her golden prince and her growing role as unofficial queen.', 'Philippa', 'Gregory', 0),
(9, 'Victoria', 'Drawing on Queen Victoria’s diaries, which she first started reading when she was a student at Cambridge University, Daisy Goodwin—creator and writer of the new PBS Masterpiece drama Victoria and author of the bestselling novels The American Heiress and The Fortune Hunter—brings the young nineteenth-century monarch, who would go on to reign for 63 years, richly to life in this magnificent novel.\r\n\r\nEarly one morning, less than a month after her eighteenth birthday, Alexandrina Victoria is roused from bed with the news that her uncle William IV has died and she is now Queen of England. The men who run the country have doubts about whether this sheltered young woman, who stands less than five feet tall, can rule the greatest nation in the world.\r\n\r\nDespite her age, however, the young queen is no puppet. She has very definite ideas about the kind of queen she wants to be, and the first thing is to choose her name.\r\n\r\n“I do not like the name Alexandrina,” she proclaims. “From now on I wish to be known only by my second name, Victoria.”\r\n\r\nNext, people say she must choose a husband. Everyone keeps telling her she’s destined to marry her first cousin, Prince Albert, but Victoria found him dull and priggish when they met three years ago. She is quite happy being queen with the help of her prime minister, Lord Melbourne, who may be old enough to be her father but is the first person to take her seriously.', 'Daisy', 'Goodwin', 0),
(10, 'Mary Queen of Scots', 'Mary Queen of Scots (1969) is a biography of Mary, Queen of Scots, by Antonia Fraser. A 40th-anniversary edition of the book was published in 2009. As she states in her \"Author\'s Note\", Fraser aims to test the truth or falsehood of the many legends on Mary and to set her in the context of the age in which she lived.', 'Stefan', 'Zsweig', 0),
(18, 'Fire & Blood', 'Fire & Blood is a fantasy book by American writer George R. R. Martin and illustrated by Doug Wheatley. It tells the history of House Targaryen, the dynasty that ruled the Seven Kingdoms of Westeros in the backstory of his series A Song of Ice and Fire.[2] Although originally planned for publication after the completion of the series,[3] Martin has revealed his intent to publish the history in two volumes as the material had grown too large. The first volume was released on November 20, 2018.[1]', 'George R. R.', 'Martin', 6);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `Genre_ID` int(11) NOT NULL,
  `Genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`Genre_ID`, `Genre`) VALUES
(1, 'Science Fiction'),
(2, 'Fantasy'),
(3, 'Romance'),
(4, 'Mystery'),
(5, 'Thriller'),
(6, 'Historical Fiction'),
(7, 'Autobiography'),
(8, 'Poetry'),
(9, 'Drama'),
(10, 'Teen'),
(11, 'Children'),
(12, 'Non-Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `First_Name` varchar(10) NOT NULL,
  `Last_Name` varchar(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `API_Key` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `First_Name`, `Last_Name`, `Username`, `Email`, `Password`, `API_Key`) VALUES
(6, 'Admin', 'Admin', 'Admin', 'Admin@admin.com', 'Admin', 'c11ce008463083c6978eb4712f8bd1b3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Book_ID`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`Genre_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `API_Key` (`API_Key`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Book_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `Genre_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
