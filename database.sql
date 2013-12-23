-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2013 at 10:53 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `avenibiz_p4`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `unique_id` int(25) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) NOT NULL,
  `alt_title` varchar(55) NOT NULL,
  `series` varchar(255) NOT NULL,
  `collection` varchar(255) NOT NULL,
  `director_1` varchar(55) NOT NULL,
  `director_2` varchar(55) NOT NULL,
  `producer_1` varchar(55) NOT NULL,
  `producer_2` varchar(55) NOT NULL,
  `color` varchar(55) NOT NULL,
  `running_time_1` varchar(20) NOT NULL,
  `running_time_2` varchar(20) NOT NULL,
  `language_1` varchar(40) NOT NULL,
  `language_2` varchar(40) NOT NULL,
  `subtitle_lang_1` varchar(15) NOT NULL,
  `subtitle_lang_2` varchar(15) NOT NULL,
  `year_created` varchar(10) NOT NULL,
  `year_released` varchar(10) NOT NULL,
  `subject_1` varchar(25) NOT NULL,
  `subject_2` varchar(25) NOT NULL,
  `aspect_ratio` varchar(10) NOT NULL,
  `description` longtext NOT NULL,
  `inst_price` varchar(10) NOT NULL,
  `home_price` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  PRIMARY KEY (`unique_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`unique_id`, `title`, `alt_title`, `series`, `collection`, `director_1`, `director_2`, `producer_1`, `producer_2`, `color`, `running_time_1`, `running_time_2`, `language_1`, `language_2`, `subtitle_lang_1`, `subtitle_lang_2`, `year_created`, `year_released`, `subject_1`, `subject_2`, `aspect_ratio`, `description`, `inst_price`, `home_price`, `image`, `video_link`) VALUES
(2, 'Add & Mabel''s Punkin Center', '', '', '', 'Richard Kane', 'Dillon Bustin', '', '', 'color', '16', '', 'English', '', '', '', '', '1984', 'Americana', '', '4:3', 'Add & Mabel''s Punkin Center is about memories. It''s about the urge to collect things from the past to help make vivid those cherished times. But it''s also about today, about two old-timers whose tender and jovial banter reveals a contentment with the present derived only from knowing their past.  To experience Punkin Center in Southern Indiana is to experience the value of reminiscence. Today, we see a homespun folk museum filled with hundreds of thousands of antiques and curiosities Add and Mabel Gray have collected since the 1920s. Each item inspires stories about vaudeville acts and organ grinders, Kraft cheese parties and western swing, Depression days and Amish neighbors. Over the years, Punkin Center grew to become the hub - the true backbone of their Midwestern community, fulfilling a need for isolated rural folk to be in touch with each other and the rest of the world.', '165.00', '14.95', 'add-and-mabels-center.jpg', 'http://www.youtube.com/embed/alCgZe0BGe8'),
(4, 'Bitter Melons', '', '', '!Kung', 'John Marshall', '', '', '', 'color', '30', '', '', '', '', '', '', '1971', '1', '', '4:3', 'This film, shot in 1955, focuses on a small band of /Gwi San living in the arid landscape of the central Kalahari Desert in present-day Botswana. The hardships of their everyday survival are woven into the songs of a blind musician, Ukxone, who composes music on a hunting bow. His songs evoke the /Gwi landscape and its diverse wildlife; they depict the routine of their daily lives: gathering food, collecting water, hunting for animals, and sharing as a community. "Bitter Melons," his favorite song, is about a woman who learned from her Bantu neighbors to plant melon seeds despite the agriculturalists protesting that wild melons taste bitter. Song, dance, landscape, and life are not so separated for the /Gwi San; their margins are fluid.', '265.00', '29.95', 'bitter-melons.jpg', 'http://www.youtube.com/embed/P6i8Zs-RSIA'),
(5, 'Cochengo Miranda', '', '', '', 'Jorge Prelor‡n', '', '', '', 'color', '53', '', '', '', '', '', '', '1974', 'Native South Americans', '', '4:3', 'The extensive region of the Pampas in Central Argentina is one of the most fertile in the world. However, as the rains subside towards the West, the land becomes arid and dry. Here live a sparse population of rugged cattlemen whose nearest neighbor may be 10 miles away. The center of life is a well and a windmill to which the cattle come every day to drink, and then go off to find the scarce grasses in the vast plains where no fences are necessary. Cochengo Miranda has lived here for over 30 years, and raised his family after marrying at 45. He is descendant from early Spanish stock in the region, where many of its traditions are still kept alive even though transculturation is rapidly taking its toll. During a whole year Prelor‡n visited this family several times, filming a variety of occurances that took place as the months and seasons passed. In each occasion he would record extensive monologues of don Cochengo as the basis for the film''s structure. The result is a warm, intimate portrait of life in a little-known region of the world, as told to us by the settlers themselves.', '219.00', '19.95', 'cochengo-miranda.jpg', 'http://www.youtube.com/embed/DeBmN9maGw8'),
(6, 'Dead Birds', '', '', '', 'Robert Gardner', '', '', '', 'color', '83', '', '', '', '', '', '', '1964', 'Conflict and/or War', '', '4:3', 'ÒDead Birds is a film about the Dani, a people dwelling in the Grand Valley of the Baliem high in the mountains of West Irian. When I shot the film in 1961, the Dani had an almost classic Neolithic culture. They were exceptional in the way they focussed their energies and based their values on an elaborate system of intertribal warfare and revenge. When a warrior was killed in battle or died from a wound and even when a woman or a child lost their life in an enemy raid, the victors celebrated and the victims mourned. In making Dead Birds certain kinds of behavior were followed, never directed. It was an attempt to see people from within and to wonder, when the selected fragments of that life were assembled, if they might speak not only of the Dani but also of ourselves.Ó Ñ Robert Gardner', '285.00', '34.95', 'dead-birds.jpg', 'http://www.youtube.com/embed/CO58Si-u4sI'),
(7, 'Earl''s Canoe', 'A Traditional Ojibwe Craft', '', '', 'Thomas Vennum', 'Charles Weber', '', '', 'color', '58', '', '', '', '', '', '', '1999', 'Art', '', '4:3', 'We meet Earl Nyholm, a member of the Ojibwe Nation, as he walks through the woods on Madeleine Island, Wisconsin. He''s looking for just the right birch tree to select for the bark which will be used in the making of a traditional Ojibwe canoe. We watch the entire process from peeling the bark from the tree to shaping the form of the canoe with heavy rocks and then the elegant stitching together of the canoe''s parts. There is the sense of satisfaction knowing that the materials and the process are integrated with the natural environment and provide a spiritual link to the past.', '219.00', '19.95', 'earls-canoe.jpg', 'http://www.youtube.com/embed/FEVEXC5xQAA'),
(8, 'Forest of Bliss', '', '', '', 'Robert Gardner', 'çkos …stšr', '', '', 'color', '90', '', 'Indian', '', '', '', '', '1986', 'Death', '', '4:3', 'Forest of Bliss is an unsparing yet redemptive account of the inevitable griefs, religious passions and frequent happinesses that punctuate daily life in Benares, India''s most holy city. The film unfolds from one sunrise to the next without commentary, subtitles or dialogue. It is an attempt to give the viewer a wholly authentic, though greatly magnified and concentrated, sense of participation in the experiences examined by the film. In late 1984 and early 1985 I was back in Benares making Forest Of Bliss, a film about which I had pondered at length since my first unsettling visit ten years earlier. I have shaped the film so that it occupies the time between two sunrises. It stands as an exclusively visual statement resorting neither to voiced commentary nor subtitles. It is about people being and also dying. Ð Robert Gardner', '285.00', '34.95', 'forest-of-bliss.jpg', 'http://www.youtube.com/embed/xC7JZKprUTM'),
(10, 'Gods and Kings', '', '', '', 'Robin Blotnik', '', '', '', 'color', '87', '', '', '', '', '', '', '2012', '', '', '16:9', 'In the muddy market square of Momostenango, Guatemala, where shamans burn offerings in the shadow of the Catholic church, prehispanic gods dance beside horror movie monsters and dictators from the dark days of the Cold War. Unlike the folkloric performances long studied by anthropologists, this new dance won''t show up on any postcard. In some villages, it''s even been banned for frightening tourists. So how did these fiberglass masks of Xena: Warrior Princess come to be blessed in the smoke of Maya altars?  Presenting a striking case never before documented on film, Gods and Kings illuminates the way creations of mass-culture take on new meanings as they travel around the world. In a town where a Hollywood B-movie villain is a real evil spirit, stories can''t be taken lightly and it always matters who''s telling them.', '245.00', '', 'gods-and-kings.jpg', 'http://www.youtube.com/embed/vOy3eF6Azic'),
(11, 'The Hunters', '', '', '!Kung', 'John Marshall', '', '', '', 'color', '72', '', '', '', '', '', '', '1957', 'Hunting', '', '4:3', 'This re-release of an early classic in anthropological film follows the hunt of a giraffe by four men over a five-day period. The film was shot in 1952-53 on the third joint Smithsonian-Harvard Peabody sponsored Marshall family expedition to Africa to study Ju/''hoansi, one of the few surviving groups that lived by hunting - gathering. John Marshall was a young man when he made this, his first feature length film. He was a natural cameraman who found a subject that would dominate the rest of his life. He has since shot over 600,000 feet of film from which 24 films were edited. The value of the footage as an encyclopedia of !Kung life is unequaled by any other body of ethnographic film.', '285.00', '34.95', 'the-hunters.jpg', 'http://www.youtube.com/embed/qsaXQ0crny8'),
(14, 'Imaginero', 'The Image Man', '', '', 'Jorge Prelor‡n', '', '', '', 'color', '53', '', '', '', '', '', '', '1970', '', '', '4:3', 'Imaginero is an ethnobiography of Herm—genes Cayo, a self-taught woodcarver and painter who lives on the high Andean plateau of Argentina. The film portrays Herm—genes, his wife Aurelia Kilpe, and their children in their Andean lifestyle, as well as Hermogenes'' passion for painting, carving, building, and his devotion to the Virgin Mary. The film does not follow a traditional narrative structure, transitioning between themes and revisiting earlier themes later. The relationship between individual and culture, as well as cultural change, is artfully expressed by Prelor‡n.', '219.00', '19.95', 'imaginero.jpg', 'http://www.youtube.com/embed/VENn1N_Fkxg'),
(15, 'Joe Leahy''s Neighbors', '', 'Highlands Trilogy', '', 'Bob Connolly', 'Robin Anderson', '', '', 'color', '90', '', '', '', '', '', '', '1988', 'Modernization', '', '16:9', 'The second in the Highlands Trilogy, this film traces the fortunes of Joe Leahy, the mixed-race son of Australian explorer Michael Leahy, in his uneasy relationship with his tribal neighbors. Joe built his coffee plantation on land bought from the Ganiga in the mid 1970s. While Joe lives in Western grandeur, he is still surrounded by his subsistence level Ganiga "neighbors," who never let him forget the original source of his prosperity. Filmmakers Connolly and Anderson lived for eighteen continuous months on the edge of Joe''s plantation. Their lively, non-judgemental narrative eloquently captures the conflicting values of tribalism and capitalism. ', '265.00', '29.95', 'joe-leahys-neighbors.jpg', 'http://www.youtube.com/embed/gU94HvYwn7M');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'FK',
  `content` text NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `created`, `modified`, `user_id`, `content`) VALUES
(50, 1387488201, 1387488201, 96, 'Hello, World!'),
(74, 1387740602, 1387740602, 98, 'This is a great post about interesting things.'),
(75, 1387747460, 1387747460, 99, 'Cool post!'),
(76, 1387784673, 1387784673, 95, 'Hello, World!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `favorites` varchar(1000) NOT NULL,
  `access_level` int(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `created`, `modified`, `token`, `password`, `last_login`, `timezone`, `first_name`, `last_name`, `email`, `image`, `favorites`, `access_level`) VALUES
(95, 1387158955, 1387158955, '406ff7070983b5bd11d1a6838cf6d00c80d947f7', 'c871f70cd17869f806aa201ecd5e759c47c70a22', 0, '', 'Frank', 'Aveni', 'frankaveni@gmail.com', '/uploads/avatars/user-95.jpg', '', 3),
(96, 1387163008, 1387163008, '889a3cc6dadf8dbcec6a3e5dd0ce10b1fa17732d', 'c871f70cd17869f806aa201ecd5e759c47c70a22', 0, '', 'Elaine', 'Rombola Aveni', 'elaine@email.org', '', '', 0),
(98, 1387740543, 1387740543, '4c94e98f789a7ba22eb86b93bf8eb989fe613a08', 'ffef4de0909fd31763b3211ff0a8f11f0a2ebd96', 0, '', 'Jenean', 'Rombola', 'jrombola@gmail.com', '', '', 0),
(101, 1387774231, 1387774231, '0b831a9609849658e48d55fd289ee7897a35222a', '9c624886a90f4fb2b2763da04c337ad8c30de8a5', 0, '', 'Guy', 'Incognito', 'admin@website.com', '', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users_users`
--

CREATE TABLE `users_users` (
  `user_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_id_followed` int(11) NOT NULL,
  PRIMARY KEY (`user_user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=126 ;

--
-- Dumping data for table `users_users`
--

INSERT INTO `users_users` (`user_user_id`, `created`, `user_id`, `user_id_followed`) VALUES
(1, 1382761417, 11, 19),
(2, 1382761425, 11, 20),
(3, 1382761426, 11, 14),
(4, 1382820755, 19, 14),
(5, 1382820756, 19, 11),
(6, 1382820762, 19, 20),
(7, 1382820807, 14, 19),
(8, 1382820808, 14, 20),
(9, 1382820810, 14, 21),
(10, 1382844817, 21, 14),
(11, 1382844821, 21, 20),
(12, 1382931012, 11, 11),
(13, 1383268865, 14, 14),
(16, 1383344170, 20, 11),
(19, 1383347280, 19, 19),
(20, 1383347613, 14, 11),
(21, 1383349549, 48, 48),
(22, 1383359881, 56, 20),
(23, 1383359884, 56, 32),
(30, 1383617487, 20, 56),
(31, 1383617490, 20, 32),
(32, 1383617490, 20, 59),
(33, 1383618558, 20, 20),
(34, 1383692226, 61, 61),
(35, 1383693225, 61, 20),
(36, 1383693227, 61, 56),
(37, 1383693230, 61, 32),
(39, 1383693531, 72, 61),
(40, 1383693546, 72, 32),
(41, 1383693550, 72, 56),
(46, 1383699475, 77, 77),
(47, 1383704861, 32, 77),
(48, 1383704864, 32, 56),
(49, 1383704868, 32, 32),
(50, 1383704873, 32, 61),
(51, 1383704875, 32, 20),
(52, 1383706331, 78, 78),
(53, 1383706911, 78, 20),
(54, 1383706912, 78, 61),
(55, 1383706915, 78, 77),
(56, 1383707322, 59, 59),
(57, 1383707326, 59, 77),
(58, 1383707331, 59, 61),
(59, 1383707333, 59, 20),
(60, 1383709659, 56, 56),
(61, 1383768940, 79, 79),
(62, 1383769385, 72, 72),
(63, 1383772526, 72, 19),
(64, 1383772720, 72, 20),
(65, 1383773538, 80, 80),
(66, 1383773551, 80, 56),
(67, 1383782340, 81, 81),
(68, 1383791016, 82, 82),
(69, 1383791034, 82, 20),
(70, 1383791035, 82, 61),
(71, 1383791036, 82, 77),
(72, 1383794831, 72, 82),
(73, 1383794832, 72, 81),
(74, 1383794837, 72, 80),
(75, 1383891722, 83, 83),
(76, 1383891790, 83, 20),
(77, 1383891793, 83, 61),
(78, 1383891796, 83, 32),
(79, 1383945845, 84, 84),
(80, 1383945864, 85, 85),
(81, 1383945880, 86, 86),
(82, 1383946474, 72, 83),
(83, 1383971497, 87, 87),
(84, 1383971538, 88, 88),
(85, 1383971644, 20, 83),
(88, 1384115234, 72, 77),
(89, 1384115237, 72, 89),
(90, 1384115241, 72, 78),
(91, 1384115247, 72, 59),
(92, 1384194187, 90, 90),
(93, 1384194591, 90, 77),
(94, 1384194593, 90, 61),
(95, 1384194594, 90, 20),
(96, 1384194599, 90, 72),
(97, 1384194604, 90, 56),
(98, 1384194706, 72, 90),
(101, 1384278087, 89, 72),
(102, 1384278089, 89, 20),
(103, 1384278091, 89, 83),
(104, 1384278093, 89, 89),
(105, 1384481377, 91, 91),
(106, 1384481451, 91, 89),
(107, 1384802509, 72, 91),
(108, 1386896445, 93, 93),
(109, 1386896600, 94, 94),
(110, 1387158955, 95, 95),
(111, 1387163008, 96, 96),
(112, 1387170391, 97, 97),
(113, 1387488133, 95, 96),
(114, 1387488159, 96, 95),
(115, 1387559561, 96, 94),
(116, 1387740544, 98, 98),
(117, 1387740561, 98, 95),
(118, 1387745621, 99, 99),
(119, 1387747242, 99, 95),
(120, 1387747246, 99, 98),
(121, 1387747446, 99, 94),
(123, 1387748125, 99, 96),
(124, 1387773557, 100, 100),
(125, 1387774231, 101, 101);
