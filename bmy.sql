-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2025 at 06:56 PM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u679963801_bmynew`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_subscribe`
--

CREATE TABLE `about_subscribe` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_form`
--

CREATE TABLE `enquiry_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `people` varchar(100) NOT NULL,
  `enquiry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry_form`
--

INSERT INTO `enquiry_form` (`id`, `name`, `email`, `phone`, `location`, `budget`, `people`, `enquiry`) VALUES
(2, 'anjali', 'anjali@gmail.com', '7845128956', 'pune', '140', '2', 'this form inquiry purpose'),
(3, 'AmandaNersmutt2', 'amandalogPoorp1@gmail.com', '85363697438', 'Cambodia', '121543', '4285', 'Hey darling, want to hang out? -  https://rb.gy/7rnhss?Folo'),
(4, 'Lottie', 'magicmat@bookmyyacht.us', '3795285357', 'Italy', 'Uldnttf Cvgnb', '3795285357', 'Get The Worlds Greatest Magic Sand Free Beach Mat!\r\n\r\nWatch sand, dirt & dust disappear right before your eyes! It\'s perfect for beach, picnic, camping or hiking.\r\n\r\nAct Now And Receive A Special Discount For Our Magic Mat!\r\n\r\nGet Yours Here:  https://mag'),
(5, 'AmandaNersmuttb', 'amandalogPoorp3@gmail.com', '89472541679', 'Cambodia', '133142', '3525', 'Hey darling, want to hang out? -  https://rb.gy/7rnhss?Folo'),
(6, 'AmandaNersmutta', 'amandalogPoorpb@gmail.com', '84471895653', 'Cambodia', '112322', '7188', 'Hey darling, want to hang out? -  http://surl.li/ulebc?neiguig'),
(7, 'Mike Birch\r\n', 'mikeTuckbacy@gmail.com', '88277337733', 'United States', '143522', '3420', 'Hello, \r\n \r\nHey, I\'m Mike from Monkey Digital. We offer a highly popular service that costs only 10$ per 5000 social ads visits. \r\n \r\nMore info:  \r\nhttps://www.monkeydigital.co/get-started/ \r\n \r\nTracking will be sent the same day, the advertisement goes l'),
(8, 'AmandaNersmutta', 'amandalogPoorp2@gmail.com', '89388943138', 'Cambodia', '155215', '3316', 'Hey darling, want to hang out? -  http://surl.li/ulebc?neiguig'),
(9, 'AmandaNersmutt2', 'amandalogPoorpa@gmail.com', '85464566335', 'Cambodia', '113552', '6257', 'Hey darling, want to hang out? -  http://surl.li/ulebc?neiguig'),
(10, 'Mike Farrell\r\n', 'mikeTuckbacy@gmail.com', '86773899825', 'Taiwan', '144144', '3475', 'Hi there, \r\n \r\nWhile checking your bookmyyacht.us for its ranks, I have noticed that there are some toxic links pointing towards it. \r\n \r\nGrab your free clean up and improve ranks in no time \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-'),
(11, 'AmandaNersmutt2', 'amandalogPoorp1@gmail.com', '88831632839', 'Cambodia', '152214', '457', 'Hey darling, want to hang out? -  http://surl.li/ulebc?neiguig'),
(12, 'Mike Wainwright\r\n', 'peterTuckbacy@gmail.com', '83192161183', 'United States', '123351', '406', 'Hello \r\n \r\nI have just took a look on your SEO for  bookmyyacht.us for the ranking keywords and saw that your website could use a push. \r\n \r\nWe will improve your ranks organically and safely, using only state of the art AI and whitehat methods, while prov'),
(13, '55', 'yacht@owner.com', '2015551248', 'Miami', '555555555555555555555555555555555555', '55555555555555555555555555555555555555555555555555', '566666666666666666666666'),
(14, 'AmandaNersmutt3', 'amandalogPoorp1@gmail.com', '89166741427', 'Cambodia', '143312', '3607', 'I’ve been naughty, want to help me with that?) -  https://goo.su/zARWg?neiguig'),
(15, 'RaymondQuise', 'no.reply.FredericWilliams@gmail.com', '84872619298', 'United Arab Emirates', '124415', '1734', 'Howdy-ho! bookmyyacht.us \r\n \r\nDid you know that it is possible to send proposal totally lawful and regular? \r\nWhen such letters are sent, no personal data is utilized, and messages are sent to securely-designed forms that are specifically meant to receive'),
(16, 'Pitroda Satyan G', 'agentofficial@shrooqconsultant.com', '86473668954', 'Sweden', '144114', '3916', 'Greetings, \r\n \r\nAm glad to connect with you, My name is Pitroda Satyan G, am an investment consultant with Shrooq AlQamar Project Management Services Co LLC, I have been mandated by the company to source for investment opportunities and companies seeking '),
(17, 'AmandaNersmuttc', 'amandalogPoorpa@gmail.com', '83172357155', 'Cambodia', '144432', '232', 'Can’t wait to show you a good time tonight. -  https://goo.su/zARWg?neiguig'),
(18, 'AmandaNersmutta', 'amandalogPoorpc@gmail.com', '82132125387', 'Cambodia', '123232', '5728', 'I’ve been naughty, want to help me with that?) -  https://rb.gy/7rnhss?Folo'),
(19, 'Mike Albertson\r\n', 'mikeadvado@gmail.com', '81528896218', 'Netherlands Antilles', '131511', '320', 'Hello \r\nThis is Mike Albertson\r\nfrom Strictly Digital \r\n \r\nLet me present to you our latest discovered from the SEO environment. \r\nWe have noticed that getting backlinks from websites that have high SEO metrics values doesn\'t always help, and in fact, wha'),
(20, 'AmandaNersmuttb', 'amandalogPoorp3@gmail.com', '82765984448', 'Cambodia', '153153', '2938', 'Can’t wait to show you a good time tonight. -  https://rb.gy/7rnhss?Folo'),
(21, 'AmandaNersmutt3', 'amandalogPoorp1@gmail.com', '82279284592', 'Cambodia', '124253', '7938', 'I’ve been naughty, want to help me with that?) -  https://rb.gy/7rnhss?Folo'),
(22, 'AmandaNersmutta', 'amandalogPoorp2@gmail.com', '82538726146', 'Cambodia', '114421', '5159', 'Can’t wait to show you a good time tonight. -  https://rb.gy/7rnhss?Folo'),
(23, 'DavidEmore', 'kapiton.dyakonov@yandex.ru', '88338151757', 'Kyrgyzstan', '125454', '3995', 'Get your iPhone 15 Pro вЂ” Participate!  - https://1l1.su/LPIx'),
(24, '<span style=\"color: #ff6600;\"><strong>Wealth is close by</strong></span> - https://hideuri.com/EMWVy', 'danapugg@gmail.com', '82731927812', 'Portugal', '134323', '6870', '<span style=\"color: #ff6600;\"><strong>Maximize your luck</strong></span> - https://hideuri.com/EMWVyp'),
(25, 'Mike Finch\r\n', 'mikeadvado@gmail.com', '89341754254', 'Netherlands Antilles', '121441', '6292', 'Hi there, \r\n \r\nMy name is Mike from Monkey Digital, \r\n \r\nAllow me to present to you a lifetime revenue opportunity of 35% \r\nThat\'s right, you can earn 35% of every order made by your affiliate for life. \r\n \r\nSimply register with us, generate your affiliat'),
(26, 'Mike Stanley\r\n', 'mikeTuckbacy@gmail.com', '82687626848', 'New Zealand', '112232', '7597', 'Hi there \r\nI just checked bookmyyacht.us ranks and am sorry to bring this up, but it lacks in many areas. \r\n \r\nUnfortunately, building a bunch of links won\'t solve the issue in this case, and a more comprehensive strategy is required. Google has undergone'),
(27, 'Natapak', 'woodthighgire1988@gmail.com', '85265785147', 'Cameroon', '115355', '4390', ' Hi! If you want to pull me on your stick, then message me where we can meet https://datingsmatches-meets.top/?u=41nkd08&o=8dhpkzk'),
(28, 'Find your perfect match easilyвЂ”sign up now - http://xurl.es/2l1lp', 'brelmathilde@web.de', '82648714848', 'Guam', '115311', '#file_links[\"C:\\Users\\Administrator\\Desktop\\Xrumer Money test\\title.txt\",1,N] - #file_links[\"C:\\User', 'Meet amazing women who are serious about dating - http://xurl.es/oddx5'),
(29, 'Mike Thornton\r\n', 'mikeTuckbacy@gmail.com', '84773484118', 'Kenya', '152125', '5068', 'Hello, \r\n \r\nHey, I\'m Mike from Monkey Digital. We offer a highly popular service that costs only 10$ per 5000 social ads visits. \r\n \r\nMore info:  \r\nhttps://www.country-targeted-traffic.com/get-started/ \r\n \r\nTracking will be sent the same day, the advertis'),
(30, 'Mike MacAlister\r\n', 'mikeTuckbacy@gmail.com', '87942524163', 'Taiwan', '154342', '6948', 'Hi there, \r\n \r\nWhile checking your bookmyyacht.us for its ranks, I have noticed that there are some toxic links pointing towards it. \r\n \r\nGrab your free clean up and improve ranks in no time \r\nhttps://www.freeseocleanups.com/get-started/ \r\n \r\nIt really wo'),
(31, 'AmandaNersmutt3', 'amandalogPoorpb@gmail.com', '87162573518', 'Cambodia', '131544', '5576', 'Can’t wait to show you a good time tonight. -  https://goo.su/zARWg?neiguig'),
(32, 'AmandaNersmuttc', 'amandalogPoorp2@gmail.com', '83471816419', 'Cambodia', '122213', '2193', 'I’ve been naughty, want to help me with that?) -  https://rb.gy/7rnhss?Folo'),
(33, 'AmandaNersmuttb', 'amandalogPoorp3@gmail.com', '84794198236', 'Cambodia', '141345', '8532', 'I’ve been naughty, want to help me with that?) -  https://goo.su/zARWg?neiguig'),
(34, 'AmandaNersmutt2', 'amandalogPoorp1@gmail.com', '81648815227', 'Cambodia', '115411', '9388', 'Can’t wait to show you a good time tonight. -  https://goo.su/zARWg?neiguig'),
(35, 'Mike Russel\r\n', 'peterTuckbacy@gmail.com', '81595533189', 'United States', '144532', '8170', 'Hi there \r\n \r\nI have just checked  bookmyyacht.us for its SEO metrics and saw that your website could use an upgrade. \r\n \r\nWe will enhance your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly repo'),
(36, 'AmandaNersmuttb', 'amandalogPoorpa@gmail.com', '85634948882', 'Cambodia', '132544', '4333', 'Can’t wait to show you a good time tonight. -  https://goo.su/zARWg?neiguig'),
(37, 'AmandaNersmuttc', 'amandalogPoorp2@gmail.com', '88624885476', 'Cambodia', '144533', '2935', 'I’ve been naughty, want to help me with that?) -  https://goo.su/zARWg?neiguig'),
(38, 'AmandaNersmutta', 'amandalogPoorp3@gmail.com', '87933734847', 'Cambodia', '152414', '4867', 'I’ve been naughty, want to help me with that?) -  https://goo.su/zARWg?neiguig'),
(39, 'Check out customer favorites - www.14lo.org', 'nedenolb@web.de', '88174231378', 'Cuba', '124431', '3213', 'Subscribe now - www.14lo.org'),
(40, 'AmandaNersmutt3', 'amandalogPoorp1@gmail.com', '86435863828', 'Cambodia', '124442', '4499', 'Can’t wait to show you a good time tonight. -  https://goo.su/zARWg?neiguig'),
(41, 'AmandaNersmutt2', 'amandalogPoorp1@gmail.com', '86789128173', 'Cambodia', '121454', '7433', 'Want to see more? Check my profile now. -  https://rb.gy/7rnhss?Folo'),
(42, 'AmandaNersmutt3', 'amandalogPoorp1@gmail.com', '82715775885', 'Cambodia', '115153', '565', 'Want to see more? Check my profile now. -  https://goo.su/zARWg?neiguig'),
(43, 'AmandaNersmutta', 'amandalogPoorpb@gmail.com', '85257394574', 'Cambodia', '133424', '4660', 'Explore my profile, let’s make it unforgettable. -  https://rb.gy/7rnhss?Folo'),
(44, 'AmandaNersmutt1', 'amandalogPoorp1@gmail.com', '82112328462', 'Cambodia', '114135', '2567', 'Want to see more? Check my profile now. -  https://goo.su/zARWg?neiguig'),
(45, 'Start enjoying benefits today - https://primer.de', 'damiseric235830@aol.com', '85327974275', 'Slovakia', '153343', '302', 'Try it today, no strings attached - https://primer.de'),
(46, 'AmandaNersmutt3', 'amandalogPoorpa@gmail.com', '81981185668', 'Cambodia', '144131', '5540', 'Explore my profile, let’s make it unforgettable. -  https://goo.su/zARWg?neiguig'),
(47, 'Del Krebs - https://sites.google.com/view/loss5544', 'ivkjasonlopez908@gmail.com', '89326515519', 'China', '143344', '3076', 'Chiquita Hammock - https://sites.google.com/view/loss5544'),
(48, 'Nicki Hyland - https://sites.google.com/view/loss5544', 'alexeyfinogenov1488229@gmail.com', '89469372934', 'China', '154533', '7325', 'Carisa Batson - https://sites.google.com/view/loss5544'),
(49, 'AmandaNersmutt1', 'amandalogPoorpc@gmail.com', '87642625364', 'Cambodia', '143451', '2401', 'Want to see more? Check my profile now. -  https://goo.su/zARWg?neiguig'),
(50, 'Mike Bawerman\r\n', 'mikeTuckbacy@gmail.com', '89782699834', 'New Zealand', '145155', '5741', 'Hi there \r\nI just checked bookmyyacht.us ranks and am sorry to bring this up, but it lacks in many areas. \r\n \r\nUnfortunately, building a bunch of links won\'t solve the issue in this case, and a more comprehensive strategy is required. Google has undergone'),
(51, 'AmandaNersmuttb', 'amandalogPoorpb@gmail.com', '81226998424', 'Cambodia', '121254', '8477', 'Want to see more? Check my profile now. -  https://rb.gy/7rnhss?Folo'),
(52, 'AmandaNersmutt2', 'amandalogPoorpa@gmail.com', '86196836154', 'Cambodia', '154154', '9746', 'Explore my profile, let’s make it unforgettable. -  https://rb.gy/7rnhss?Folo'),
(53, 'Mike Nevill\r\n', 'mikeadvado@gmail.com', '87511369233', 'Netherlands Antilles', '153442', '4415', 'Hi there, \r\n \r\nMy name is Mike from Monkey Digital, \r\n \r\nAllow me to present to you a lifetime revenue opportunity of 35% \r\nThat\'s right, you can earn 35% of every order made by your affiliate for life. \r\n \r\nSimply register with us, generate your affiliat'),
(54, 'AmandaNersmutt1', 'amandalogPoorp2@gmail.com', '84416659924', 'Cambodia', '145132', '7158', 'Want to see more? Check my profile now. -  https://goo.su/zARWg?neiguig'),
(55, 'AmandaNersmutt3', 'amandalogPoorpb@gmail.com', '87189482932', 'Cambodia', '125544', '4115', 'Explore my profile, let’s make it unforgettable. -  https://goo.su/zARWg?neiguig'),
(56, 'AmandaNersmutta', 'amandalogPoorp3@gmail.com', '87565746571', 'Cambodia', '123542', '9682', 'Want to see more? Check my profile now. -  https://rb.gy/7rnhss?Folo'),
(57, 'AmandaNersmutta', 'amandalogPoorp1@gmail.com', '84259141993', 'Cambodia', '154314', '8725', 'Explore my profile, let’s make it unforgettable. -  https://rb.gy/7rnhss?Folo'),
(58, 'Adam', 'fredrikalfredsson76@gmail.com', '87675358925', 'Iceland', '145335', '6820', 'Hello, \r\n \r\nAdam here from Deletify (https://deletify.com/) \r\n \r\nI\'m wondering if your business has a review on Google that you perceive as misleading, false, or perhaps even written by a competitor? If so, I can help you remove it, and you only pay if I '),
(59, 'Mike James\r\n', 'mikeTuckbacy@gmail.com', '85586812314', 'Kenya', '134225', '772', 'Hello, \r\n \r\nHey, I\'m Mike from Monkey Digital. We offer a highly popular service that costs only 10$ per 5000 social ads visits. \r\n \r\nMore info:  \r\nhttps://www.seomonkey.net/country-visits/ \r\n \r\nTracking will be sent the same day, the advertisement goes l'),
(60, 'Mike Reynolds\r\n', 'info@professionalseocleanup.com', '87367318591', 'Taiwan', '111251', '4162', 'Hi there, \r\n \r\nWhile checking your bookmyyacht.us for its ranks, I have noticed that there are some toxic links pointing towards it. \r\n \r\nGrab your free clean up and improve ranks in no time \r\nhttps://www.professionalseocleanup.com/ \r\n \r\nIt really works, '),
(61, 'AmandaNersmuttb', 'amandalogPoorpb@gmail.com', '82649316959', 'Cambodia', '135542', '7742', 'Explore my profile, let’s make it unforgettable. -  https://rb.gy/7rnhss?Folo'),
(62, 'AmandaNersmuttb', 'amandalogPoorpc@gmail.com', '87233257274', 'Cambodia', '114444', '3607', 'Want to see more? Check my profile now. -  https://rb.gy/7rnhss?Folo'),
(63, 'Husam Orabi', 'husamorabi447@gmail.com', '87635685211', 'United States', '123342', '2191', 'Hello, \r\n \r\nI am Husam Orabi, Qatari Investors Group\'s chief business development and delivery officer. We offer loans and credit facilities at a small interest rate for ten years and a moratorium of up to two years. \r\nWe also finance profit-oriented proj'),
(64, 'Alexandre Van Dijk\r\n', 'info@xdigital.top', '89265577668', 'United States', '132535', '7090', 'Good Day \r\n \r\nI have just analyzed  bookmyyacht.us for  the current search visibility and saw that your website could use a boost. \r\n \r\nWe will enhance your ranks organically and safely, using only state of the art AI and whitehat methods, while providing'),
(65, 'AmandaNersmuttc', 'amandalogPoorpa@gmail.com', '85968722622', 'Cambodia', '145421', '4352', 'Want to see more? Check my profile now. -  https://rb.gy/7rnhss?Folo'),
(66, 'AmandaNersmutt2', 'amandalogPoorpb@gmail.com', '85432193649', 'Cambodia', '113442', '3325', 'Explore my profile, let’s make it unforgettable. -  https://rb.gy/7rnhss?Folo'),
(67, 'AmandaNersmutt3', 'amandalogPoorpb@gmail.com', '84257452224', 'Cambodia', '145151', '4354', 'Want to see more? Check my profile now. -  https://rb.gy/7rnhss?Folo'),
(68, 'AmandaNersmutt3', 'amandalogPoorp2@gmail.com', '82771921617', 'Cambodia', '132411', '3975', 'Explore my profile, let’s make it unforgettable. -  https://rb.gy/7rnhss?Folo'),
(69, 'Nyjal Demirag', 'reejmblsauj@dont-reply.me', '+17306365605', 'In about it It s head The chopper pilots as yet napalm bombs', 'In about it It s head The chopper pilots as yet napalm bombs', 'In about it It s head The chopper pilots as yet napalm bombs', 'In about it It s head The chopper pilots as yet napalm bombs'),
(70, 'Nyjal Demirag', 'reejmblsauj@dont-reply.me', '+17306365605', 'In about it It s head The chopper pilots as yet napalm bombs', 'In about it It s head The chopper pilots as yet napalm bombs', 'In about it It s head The chopper pilots as yet napalm bombs', 'In about it It s head The chopper pilots as yet napalm bombs'),
(71, 'Nyjal Demirag', 'reejmblsauj@dont-reply.me', '+17306365605', 'In about it It s head The chopper pilots as yet napalm bombs', 'In about it It s head The chopper pilots as yet napalm bombs', 'In about it It s head The chopper pilots as yet napalm bombs', 'In about it It s head The chopper pilots as yet napalm bombs'),
(72, 'AmandaNersmuttc', 'amandalogPoorpa@gmail.com', '84454797783', 'Cambodia', '111241', '1428', 'Curious? Dive deeper and find me here now. -  http://girlsfunonline.online/?Folo'),
(73, 'AmandaNersmutt1', 'amandalogPoorp2@gmail.com', '81652754118', 'Cambodia', '125541', '2202', 'Come closer, find me waiting on my profile. -  https://rb.gy/ycu4is/?Folo'),
(74, 'AmandaNersmutt1', 'amandalogPoorpb@gmail.com', '85652395134', 'Cambodia', '114534', '7551', 'Come closer, find me waiting on my profile. -  https://bit.ly/3Y2npoM?Folo'),
(75, 'Jules Persson\r\n', 'no-replyxxx@gmail.com', '83159763115', 'Netherlands Antilles', '155341', '5478', 'Hi, \r\n \r\nAre you looking to monetize your website with a high-converting affiliate program? Look no further! We’re offering 35% commission on every sale generated through our affiliate program, and we’d love for you to be a part of it. \r\n \r\nHere’s why web'),
(76, 'AmandaNersmutta', 'amandalogPoorpb@gmail.com', '83918921413', 'Cambodia', '145331', '9131', 'Curious? Dive deeper and find me here now. -  https://rb.gy/ycu4is?Folo'),
(77, 'AmandaNersmutta', 'amandalogPoorpa@gmail.com', '82311148816', 'Cambodia', '155353', '2580', 'Come closer, find me waiting on my profile. -  https://rb.gy/ycu4is?Folo'),
(78, 'AmandaNersmuttb', 'amandalogPoorpc@gmail.com', '81949164752', 'Cambodia', '145215', '9907', 'Come closer, find me waiting on my profile. -  https://rb.gy/ycu4is?Folo'),
(79, 'AmandaNersmutt3', 'amandalogPoorpc@gmail.com', '81926765563', 'Cambodia', '144335', '4285', 'I want you tonight... just the two of us, no distractions -  https://rb.gy/ycu4is?Folo'),
(80, 'AmandaNersmutta', 'amandalogPoorpa@gmail.com', '87878497147', 'Cambodia', '155142', '5864', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Folo'),
(81, 'Kristian Johansson\r\n', 'hilkomwxxx@gmail.com', '84467138866', 'Taiwan', '151525', '584', 'Hi there, \r\n \r\nIs your website losing rankings due to harmful backlinks? Our Free Backlink Cleanup service will help you recover and boost your SEO performance by removing toxic links that hold you back. Let our experts clean up your link profile and get '),
(82, 'AmandaNersmutta', 'amandalogPoorpb@gmail.com', '85215311375', 'Cambodia', '124253', '3481', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Folo'),
(83, 'AmandaNersmutt2', 'amandalogPoorp1@gmail.com', '85377338816', 'Cambodia', '123133', '7593', 'I want you tonight... just the two of us, no distractions -  https://rb.gy/ycu4is?Folo'),
(84, 'Davidjer', 'melaniefell51@gmail.com', '83555728938', 'United Kingdom', '125321', '200', 'Hello!! \r\nMy name is Newton Poole, I work as the Research and Procurement Pharmacist in a pharmaceutical company. I am writing to extend a business request to you.  I am looking for a trustworthy entrepreneur/individual to represent my company in sourcing'),
(85, 'AmandaNersmutt2', 'amandalogPoorpc@gmail.com', '83682768293', 'Cambodia', '152233', '2797', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Folo'),
(86, 'Marc Mertens\r\n', 'no-replyTuckbacy@gmail.com', '83777234521', 'Kenya', '135341', '3646', 'Hi there, \r\n \r\nLooking for a way to earn passive income? Join our Affiliate Program and earn 35% commission on every sale you bring in—for life! Promote our products, and whenever your referral makes a purchase, you\'ll continue earning, even years later. '),
(87, 'AmandaNersmutt2', 'amandalogPoorp2@gmail.com', '84342665219', 'Cambodia', '123154', '4997', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Folo'),
(88, 'Donald Dupont\r\n', 'no-replyTuckbacy@gmail.com', '85862543736', 'United States', '134442', '9299', 'Hi there, \r\n \r\nLooking to improve your website\'s local rankings? We offer Country Targeted Backlinks to help you dominate your niche. With backlinks from high-quality, local domains, your website will see increased relevance, traffic, and authority in you'),
(89, 'Erica Maraghi', 'slzajilbzuj@dont-reply.me', '+15057889657', 'That means death is the smell And that time we were huge if they re here', 'That means death is the smell And that time we were huge if they re here', 'That means death is the smell And that time we were huge if they re here', 'That means death is the smell And that time we were huge if they re here'),
(90, 'Erica Maraghi', 'slzajilbzuj@dont-reply.me', '+15057889657', 'That means death is the smell And that time we were huge if they re here', 'That means death is the smell And that time we were huge if they re here', 'That means death is the smell And that time we were huge if they re here', 'That means death is the smell And that time we were huge if they re here'),
(91, 'Erica Maraghi', 'slzajilbzuj@dont-reply.me', '+15057889657', 'That means death is the smell And that time we were huge if they re here', 'That means death is the smell And that time we were huge if they re here', 'That means death is the smell And that time we were huge if they re here', 'That means death is the smell And that time we were huge if they re here'),
(92, 'AmandaNersmutt1', 'amandalogPoorp3@gmail.com', '88187177492', 'Cambodia', '121324', '2375', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Folo'),
(93, 'AmandaNersmutt1', 'amandalogPoorp1@gmail.com', '82954925477', 'Cambodia', '153442', '4249', 'I want you tonight... just the two of us, no distractions -  https://rb.gy/ycu4is?Folo'),
(94, 'AmandaNersmutt3', 'amandalogPoorp2@gmail.com', '84421939572', 'Cambodia', '143153', '5800', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Folo'),
(95, 'AmandaNersmuttb', 'amandalogPoorp3@gmail.com', '83998218352', 'Cambodia', '151511', '2402', 'I want you tonight... just the two of us, no distractions -  https://rb.gy/ycu4is?Folo'),
(96, 'AmandaNersmutt1', 'amandalogPoorpa@gmail.com', '85368751284', 'Cambodia', '133124', '5655', 'I want you tonight... just the two of us, no distractions -  https://rb.gy/ycu4is?Folo'),
(97, 'Mike Ayrton\r\n', 'mikexxxx@gmail.com', '84562491467', 'Netherlands Antilles', '115231', '6938', 'Hi there, \r\n \r\nWant to supercharge your website\'s growth? Our Semrush Backlinks come from domains ranking for 5,000+ keywords, ensuring you get high-quality, authoritative links that will improve your SEO and help grow your business online. This is a powe'),
(98, 'AmandaNersmutta', 'amandalogPoorpb@gmail.com', '87555216381', 'Cambodia', '115553', '358', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Folo'),
(99, 'AmandaNersmuttb', 'amandalogPoorpc@gmail.com', '89811816727', 'Cambodia', '115514', '9540', 'I want you tonight... just the two of us, no distractions -  https://rb.gy/ycu4is?Folo'),
(100, 'RoHoade', 'emilyjonesg89@gmail.com', '89863956218', 'United States', '142133', '4437', 'Struggling with weight loss? Theres something thats working fast for thousands of people, and its easier than you think. This quick and easy morning ritual is transforming lives, and it takes just minutes. No extreme diets, no exhausting routines. Just re'),
(101, 'James Cook', 'jamescook312@outlook.com', '86529742587', 'United Kingdom', '132223', '9349', 'Dear sir/ma \r\nWe are a finance and investment company offering loans at 3% interest rate. We will be happy to make a loan available to your organisation for your project. Our terms and conditions will apply. Our term sheet/loan agreement will be sent to y'),
(102, 'Mike Jacob Visser\r\n', 'mikexxxx@gmail.com', '83636134146', 'Netherlands Antilles', '115351', '2580', 'Hello, \r\n \r\nThis is Mike Thorndike\r\n from Monkey Digital, \r\nI am reaching out to you like webmaster to webmaster, towards a mutual opportunity. How would you like to put our banners on your site and link back via your affiliate link towards hot selling se'),
(103, 'AmandaNersmuttb', 'amandalogPoorpb@gmail.com', '86495983836', 'Cambodia', '122354', '1250', 'I want you tonight... just the two of us, no distractions -  https://rb.gy/ycu4is?Folo'),
(104, 'Mike Morrison\r\n', 'mikexxxx@gmail.com', '84412855691', 'New Zealand', '144322', '2722', 'Hi there, \r\n \r\nI recently reviewed the rankings for bookmyyacht.us, and I’m sorry to say that there are several areas where it\'s underperforming. \r\n \r\nUnfortunately, simply building more links won’t fix the problem. With Google’s major updates over the pa'),
(105, 'AmandaNersmuttc', 'amandalogPoorpa@gmail.com', '89396677952', 'Cambodia', '142443', '5758', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Folo'),
(106, 'Dang Licavoli', 'zajjbbesrbuj@dont-reply.me', '+13052831813', 'Oh yeah You can not impede you look of the others were liing and then Anyway I', 'Oh yeah You can not impede you look of the others were liing and then Anyway I', 'Oh yeah You can not impede you look of the others were liing and then Anyway I', 'Oh yeah You can not impede you look of the others were liing and then Anyway I'),
(107, 'Dang Licavoli', 'zajjbbesrbuj@dont-reply.me', '+13052831813', 'Oh yeah You can not impede you look of the others were liing and then Anyway I', 'Oh yeah You can not impede you look of the others were liing and then Anyway I', 'Oh yeah You can not impede you look of the others were liing and then Anyway I', 'Oh yeah You can not impede you look of the others were liing and then Anyway I'),
(108, 'Dang Licavoli', 'zajjbbesrbuj@dont-reply.me', '+13052831813', 'Oh yeah You can not impede you look of the others were liing and then Anyway I', 'Oh yeah You can not impede you look of the others were liing and then Anyway I', 'Oh yeah You can not impede you look of the others were liing and then Anyway I', 'Oh yeah You can not impede you look of the others were liing and then Anyway I'),
(109, 'AmandaNersmuttb', 'amandalogPoorp2@gmail.com', '89565792357', 'Cambodia', '154232', '4302', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Folo'),
(110, 'Liam Larsen\r\n', 'info@professionalseocleanup.com', '87343819435', 'Taiwan', '132514', '6865', 'Hi there, \r\n \r\nWhile checking your bookmyyacht.us for its ranks, I have noticed that there are some toxic links pointing towards it. \r\n \r\nGrab your free clean up and improve ranks in no time \r\nhttps://www.professionalseocleanup.com/ \r\n \r\nIt really works, '),
(111, 'A S', 'as@gmail.com', '01234567890', 'Florida', '2323', '32', 'asdfasdf asd as asdf asdf asdf'),
(112, 'AmandaNersmutt2', 'amandalogPoorpc@gmail.com', '86296556494', 'Cambodia', '124311', '6032', 'I want you tonight... just the two of us, no distractions -  https://rb.gy/ycu4is?Folo'),
(113, 'Mike Holiday\r\n', 'mikexxxx@gmail.com', '81844376934', 'Kenya', '132224', '9241', 'Hi there \r\nWe have a special connection with a reputable Network that gives us the possibility to offer Social Ads Country Targeted and niche traffic for just 10$ for 10000 Visits. \r\n \r\nDepending on the Country, we can send larger volumes of ads traffic. '),
(114, 'AmandaNersmutt1', 'amandalogPoorpc@gmail.com', '83269637576', 'Cambodia', '123543', '6565', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Folo'),
(115, 'AmandaNersmuttc', 'amandalogPoorp3@gmail.com', '89116832588', 'Cambodia', '122452', '1359', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Folo'),
(116, 'AmandaNersmutt3', 'amandalogPoorp3@gmail.com', '82542148428', 'Cambodia', '115132', '3100', 'Been waiting to get closer to you, just us. -  https://rb.gy/ycu4is?Folo'),
(117, 'SueannUsate', 'assi.gnmenthelpworld@gmail.com', '83317642348', 'Canada', '141252', '2228', 'Hello! Just wanted to share something that truly helped me out. My car stopped working recently, and I needed cash fast. I came across a loan service with instant approvals and no credit checks—they sent me the funds the same day! You can even use it for '),
(118, 'AmandaNersmuttb', 'amandalogPoorpb@gmail.com', '88132626912', 'Cambodia', '113243', '2420', 'Can’t resist the idea of us being together tonight. -  https://rb.gy/ycu4is?Folo'),
(119, 'AmandaNersmuttc', 'amandalogPoorpa@gmail.com', '88815445345', 'Cambodia', '133324', '4387', 'I want to explore every part of this moment with you. -  https://rb.gy/ycu4is?Folo'),
(120, 'Mike Fane\r\n', 'mikexxxx@gmail.com', '87731753922', 'United States', '141415', '1671', 'i there, \r\n \r\nLooking to improve your website\'s local rankings? We offer Country Targeted Backlinks to help you dominate your niche. With backlinks from high-quality, local domains, your website will see increased relevance, traffic, and authority in your'),
(121, 'AmandaNersmutt3', 'amandalogPoorp2@gmail.com', '82711941669', 'Cambodia', '133251', '5119', 'Let’s meet somewhere quiet where we can let the night take us where it will -  https://rb.gy/ycu4is?Folo'),
(122, 'AmandaNersmuttb', 'amandalogPoorp2@gmail.com', '84135471875', 'Cambodia', '111334', '5866', 'I’m in the mood for something unforgettable—care to make it happen? -  https://rb.gy/ycu4is?Folo'),
(123, 'AmandaNersmutt3', 'amandalogPoorp2@gmail.com', '83384152457', 'Cambodia', '152121', '7920', 'Let’s meet somewhere quiet where we can let the night take us where it will -  https://rb.gy/ycu4is?Folo'),
(124, 'AmandaNersmuttc', 'amandalogPoorp2@gmail.com', '83375538791', 'Cambodia', '114221', '4455', 'If you’re ready for something real, I’m waiting to make it happen -  https://rb.gy/ycu4is?Folo'),
(125, 'AmandaNersmutt2', 'amandalogPoorpc@gmail.com', '86881893911', 'Cambodia', '112152', '8439', 'I’m ready to meet someone who knows how to make the night unforgettable. -  https://rb.gy/ycu4is?Folo'),
(126, 'Mike Porter\r\n', 'mikexxxx@gmail.com', '85294518228', 'Netherlands Antilles', '113211', '30', 'Hi, \r\n \r\nWhat if you could unlock the secrets of your competitors’ backlinks and use them to boost bookmyyacht.us organic SEO? This Black Friday, we’re making it possible with our Competition SEO Plan. \r\n-	Gain insights into your competitors\' strategies \r'),
(127, 'AmandaNersmutt3', 'amandalogPoorp2@gmail.com', '82161657858', 'Cambodia', '152542', '4970', 'I’m looking for someone who wants the same spark I do -  https://rb.gy/es66fc?Folo'),
(128, 'Mike Porter\r\n', 'mikexxxx@gmail.com', '83717877663', 'New Zealand', '133123', '2000', 'Hi there, \r\n \r\nI recently reviewed the rankings for bookmyyacht.us, and I’m sorry to say that there are several areas where it\'s underperforming. \r\n \r\nUnfortunately, simply building more links won’t fix the problem. With Google’s major updates over the pa'),
(129, 'Mike Lucas Garcia\r\n', 'mikexxxx@gmail.com', '86467489475', 'Netherlands Antilles', '111323', '5034', 'Hello, \r\n \r\nThis is Mike Timmons\r\n from Monkey Digital, \r\nI am reaching out to you like webmaster to webmaster, towards a mutual opportunity. How would you like to put our banners on your site and link back via your affiliate link towards hot selling serv'),
(130, 'AmandaNersmuttc', 'amandalogPoorp3@gmail.com', '83256865759', 'Cambodia', '152422', '5500', 'Let’s turn the spark between us into something we can both feel. -  https://rb.gy/es66fc?Folo'),
(131, 'Rick', 'containerhouse1@163.com', '88563749953', 'Cyprus', '134545', '209', 'Rick here from China, we are the factory producing different container houses used as office, accommodation, hotel, school and hospital etc. Please check more information on our website: http://www.containerspeedyhouse.com/   Contact us by email: rick@con'),
(132, 'Mike Macduff\r\n', 'mikexxxx@gmail.com', '83356847948', 'United States', '152421', '3099', 'Hi there, \r\n \r\nLooking to improve your website\'s local rankings? We offer Country Targeted Backlinks to help you dominate your niche. With backlinks from high-quality, local domains, your website will see increased relevance, traffic, and authority in you'),
(133, 'AmandaNersmutt3', 'amandalogPoorp1@gmail.com', '86861796457', 'Cambodia', '131213', '5167', 'Let’s turn the fantasy into a reality we can both enjoy -  https://rb.gy/es66fc?Folo'),
(134, 'AmandaNersmutt2', 'amandalogPoorpa@gmail.com', '85447582534', 'Cambodia', '143121', '1923', 'Let’s turn the fantasy into a reality we can both enjoy -  https://rb.gy/es66fc?Folo'),
(135, 'AmandaNersmutt3', 'amandalogPoorpa@gmail.com', '87119788912', 'Cambodia', '155254', '3385', 'I can’t stop imagining the possibilities when we finally meet -  https://rb.gy/es66fc?Folo'),
(136, 'AmandaNersmutta', 'amandalogPoorpa@gmail.com', '87455814387', 'Cambodia', '114333', '7741', 'Let’s make tonight unforgettable… your place or mine?   -  https://rb.gy/es66fc?Folo'),
(137, 'Mike Gilson\r\n', 'mikexxxx@gmail.com', '83179213263', 'Kenya', '115154', '8287', 'Hi there \r\nWe have a special connection with a reputable Network that gives us the possibility to offer Social Ads Country Targeted and niche traffic for just 10$ for 10000 Visits. \r\n \r\nDepending on the Country, we can send larger volumes of ads traffic. '),
(138, 'Charles Girard\r\n', 'mikexxxx@gmail.com', '84798782668', 'Taiwan', '114253', '9499', 'Hi there, \r\n \r\nI recently took a look at bookmyyacht.us and spotted some areas where we could improve your SEO rankings and overall visibility. Small changes can make a big difference! \r\n \r\nCurious? Create your own free SEO report here: https://www.hilkom'),
(139, 'Mike Frank Janssens\r\n', 'mikexxxx@gmail.com', '85671876477', 'United States', '112234', '4242', 'Hi there, \r\n \r\nLooking to improve your website\'s local rankings? We offer Country Targeted Backlinks to help you dominate your niche. With backlinks from high-quality, local domains, your website will see increased relevance, traffic, and authority in you'),
(140, 'Your money>>> http://go.xuderuy.com/0nf6', 'raya.gritsenko.91@mail.ru', '82687236772', 'Philippines', '154223', 'Sign up and get a bonus>>> http://go.xuderuy.com/0nf6', 'The future of crypto awaits you. Join us today!  - http://go.xuderuy.com/0nf6'),
(141, 'Mike Louis Lefebvre\r\n', 'mikexxxx@gmail.com', '81966367675', 'Netherlands Antilles', '122434', '2619', 'Hi there \r\n \r\nHaving some bunch of links pointing to bookmyyacht.us could have 0 value or worse for your website, It really doesn`t matter how many backlinks you have, what matters is the amount of keywords those websites rank for. That is the most import'),
(142, 'Coffee Slimmer Pro', 'doorbin1122@gmail.com', '85173587877', 'Luxembourg', '122422', '2785', 'Coffee Slimmer Pro is marketed as a dietary supplement designed to help individuals lose weight by the natural benefits of coffee. Combining the stimulating effects of caffeine with other natural ingredients, this supplement aims to promote fat-burning, b'),
(143, 'AmandaNersmutt2', 'amandalogPoorpb@gmail.com', '85395252268', 'Cambodia', '141555', '5629', 'I’ve been waiting to feel your touch… ready? -  https://rb.gy/es66fc?Folo'),
(144, 'Mike Tiaqo Lambert\r\n', 'mikexxxx@gmail.com', '86859816262', 'Netherlands Antilles', '144244', '4339', 'Hello, \r\n \r\nThis is Mike Tracey\r\nfrom Monkey Digital, \r\nI am reaching out to you like webmaster to webmaster, towards a mutual opportunity. How would you like to put our banners on your site and link back via your affiliate link towards hot selling servic'),
(145, 'Mike Michael Johansson\r\n', 'mikexxxx@gmail.com', '82426581152', 'New Zealand', '111113', '8974', 'Hi, \r\n \r\nCurious about how your website is performing? Discover its strengths and weaknesses with our Free SEO Check Tool! In just 2 minutes, you’ll get a detailed analysis of your website’s SEO health and actionable insights to help improve your rankings'),
(146, 'AmandaNersmutt3', 'amandalogPoorpc@gmail.com', '82852133266', 'Cambodia', '141241', '2163', 'I’m in the mood for something sweet and spicy… you?  -  https://rb.gy/es66fc?Folo'),
(147, 'Mike Svein De Vries\r\n', 'mike@monkeydigital.co', '81581992467', 'Kenya', '115312', '7919', 'Hi there \r\nWe have a special connection with a reputable Network that gives us the possibility to offer Social Ads Country Targeted and niche traffic for just 10$ for 10000 Visits. \r\n \r\nDepending on the Country, we can send larger volumes of ads traffic. '),
(148, 'Antonia Forlonge', 'antonia.forlonge@yahoo.com', '4191137326', 'Fublh', 'Qsjajp', 'T rrqyti ojyzo', 'What if bookmyyacht.us could harness TikTok for genuine leads? Our AI-driven growth service targets the right users—based on hashtags they’re into and accounts they follow—to supercharge your reach and push traffic back to you. We’ve had businesses like b'),
(149, 'Estella Chauvin', 'estella.chauvin65@gmail.com', '460498218', 'Cl Hm Y J zj', 'Fbaosvg', 'Epxlmxw', 'Use AI to build a website by just entering a few lines of text for free. Our AI powered system will then build an entire website in just a few minutes. Try it free here: https://ow.ly/kNlP50VqFCI'),
(150, 'Mike Wolfgang Andre\r\n', 'info@digital-x-press.com', '84849544217', 'United States', '132425', '9576', 'Hi there, \r\n \r\nI realize that many struggle to grasp that SEO requires time and a methodical long-term commitment. \r\n \r\nUnfortunately, very few site owners have the willingness to observe the slow but steady yet business-changing trends that can completel'),
(151, 'Jonna Berrios', 'berrios.jonna@gmail.com', '3979143721', 'Yfldu Ztjyet', 'Bkvaukcu', 'Uauabl', 'Use AI to build a website by just entering a few lines of text for free. Our AI powered system will then build an entire website in just a few minutes. Try it free here: https://ow.ly/4tEJ50VqFEC');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(255) NOT NULL,
  `yacht_id` int(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `yacht_id`, `images`) VALUES
(536, 14, '14.jpg'),
(537, 14, '9.jpg'),
(538, 14, '10.jpg'),
(539, 14, '11.jpg'),
(540, 14, '12.jpg'),
(541, 14, '13.jpg'),
(542, 14, '4.jpg'),
(543, 14, '5.jpg'),
(544, 14, '6.jpg'),
(545, 14, '7.jpg'),
(546, 14, '8.jpg'),
(547, 14, '1.jpg'),
(548, 14, '3.jpg'),
(565, 14, '17.jpg'),
(566, 14, '18.jpg'),
(567, 14, '19.jpg'),
(568, 14, '20.jpg'),
(569, 14, '21.jpg'),
(570, 14, '16.jpg'),
(629, 804, '52ft Prestige 500 Fly _ Whiskey and Waves 1.jpg'),
(630, 804, '52ft Prestige 500 Fly _ Whiskey and Waves 5.jpg'),
(631, 804, '52ft Prestige 500 Fly _ Whiskey and Waves 8.jpg'),
(632, 804, '52ft Prestige 500 Fly _ Whiskey and Waves 9.jpg'),
(633, 804, '52ft Prestige 500 Fly _ Whiskey and Waves 11.jpg'),
(634, 804, '52ft Prestige 500 Fly _ Whiskey and Waves 15.jpg'),
(635, 804, '52ft Prestige 500 Fly _ Whiskey and Waves 21.jpg'),
(636, 804, '52ft Prestige 500 Fly _ Whiskey and Waves 44.jpg'),
(637, 804, '52ft Prestige 500 Fly _ Whiskey and Waves 53.jpg'),
(638, 804, '52ft Prestige 500 Fly _ Whiskey and Waves 54.jpg'),
(639, 804, '52ft Prestige 500 Fly _ Whiskey and Waves 93.jpg'),
(650, 806, '68ft Azimut _Le Grand Bleu_ 4.jpg'),
(651, 806, '68ft Azimut _Le Grand Bleu_ 8.jpg'),
(652, 806, '68ft Azimut _Le Grand Bleu_ 11.jpg'),
(653, 806, '68ft Azimut _Le Grand Bleu_ 16.jpg'),
(654, 806, '68ft Azimut _Le Grand Bleu_ 31.jpg'),
(655, 806, '68ft Azimut _Le Grand Bleu_ 33.jpg'),
(656, 806, '68ft Azimut _Le Grand Bleu_ 37.jpg'),
(657, 806, '68ft Azimut _Le Grand Bleu_ 42.jpg'),
(658, 806, '68ft Azimut _Le Grand Bleu_ 44.jpg'),
(659, 806, '68ft Azimut _Le Grand Bleu_ 45.jpg'),
(660, 806, '68ft Azimut _Le Grand Bleu_ 47.jpg'),
(693, 810, '88_ Princess _Praying For Overtime_ -_-2.jpg'),
(694, 810, '88_ Princess _Praying For Overtime_ -_-2-7.jpg'),
(695, 810, '88_ Princess _Praying For Overtime_ -_-2-9.jpg'),
(696, 810, '88_ Princess _Praying For Overtime_ -_-4-1.jpg'),
(697, 810, '88_ Princess _Praying For Overtime_ -_-4-2.jpg'),
(698, 810, '88_ Princess _Praying For Overtime_ -_-6.jpg'),
(699, 810, '88_ Princess _Praying For Overtime_ -_-13-1.jpg'),
(700, 810, '88_ Princess _Praying For Overtime_ -_-19.jpg'),
(701, 810, '88_ Princess _Praying For Overtime_ -_-21.jpg'),
(702, 810, '88_ Princess _Praying For Overtime_ -_-27.jpg'),
(716, 812, 'Leopard 27M - 1.jpg'),
(717, 812, 'Leopard 27M - 2.jpg'),
(718, 812, 'Leopard 27M - 3 Large.jpeg'),
(719, 812, 'Leopard 27M - 4 Large.jpeg'),
(720, 812, 'Leopard 27M - 5 Large.jpeg'),
(721, 812, 'Leopard 27M - 10 Large.jpeg'),
(722, 812, 'Leopard 27M - 12.jpg'),
(723, 812, 'Leopard 27M - 15.jpg'),
(724, 812, 'Leopard 27M - 24 Large.jpeg'),
(725, 812, 'Leopard 27M - 26.jpg'),
(726, 812, 'Leopard 27M - 27.jpg'),
(753, 817, 'IMG_3999.jpg'),
(754, 817, 'IMG_4002.jpg'),
(755, 817, 'IMG_4029.jpg'),
(756, 817, 'IMG_4251.jpg'),
(757, 817, 'IMG_4254.jpg'),
(758, 817, 'IMG_4255.jpg'),
(759, 817, 'IMG_4273.jpg'),
(760, 817, 'IMG_4278.jpg'),
(761, 818, '72_ Azimut _Mancusa_ - Drone -_-7.jpg'),
(762, 818, '72_ Azimut _Mancusa_ - Drone -_-10.jpg'),
(763, 818, '72_ Azimut _Mancusa_ - Drone -_-14.jpg'),
(764, 818, '72_ Azimut _Mancusa_ - Drone -_-23.jpg'),
(765, 818, '72_ Azimut _Mancusa_ - Exterior -_-5.jpg'),
(766, 818, '72_ Azimut _Mancusa_ - Interior -_-1.jpg'),
(767, 818, 'WhatsApp Image 2024-10-04 at 1.17.49 PM (3).jpg'),
(768, 819, '75_ Prestige _Oceana_ - Drone -_-2 copy.jpeg'),
(769, 819, '75_ Prestige _Oceana_ - Drone -_-11 copy.jpeg'),
(770, 819, '75_ Prestige _Oceana_ - Drone -_-40 copy.jpeg'),
(771, 819, 'EXTERIOR_14 copy.jpeg'),
(772, 819, 'MASTERCABIN_5 copy.jpeg'),
(773, 819, 'SALON_GALLEY_HELM_8 copy.jpeg'),
(774, 820, 'large_4066494.jpg'),
(775, 820, 'large_4066496.jpg'),
(776, 820, 'large_4066503.jpg'),
(777, 820, 'large_4066505.jpg'),
(778, 820, 'large_4066509.jpg'),
(779, 820, 'large_4066517.jpg'),
(780, 821, 'DJI_0020.jpg'),
(781, 821, 'DJI_0938.jpg'),
(782, 821, 'DJI_0998.jpg'),
(783, 821, 'DSC00470.jpg'),
(784, 821, 'DSC00480.jpg'),
(785, 821, 'DSC00614.jpg'),
(805, 825, '97_ Astonish - 1.jpg'),
(806, 825, '97_ Astonish - 19.jpg'),
(807, 825, '97_ Astonish - 34.jpg'),
(808, 825, '97_ Astonish - 42.jpg'),
(809, 825, '9804 W 34 court - Drone_-26.jpg'),
(810, 825, '9804 W 34 court - Drone_-34.jpg'),
(811, 825, '9804 W 34 court - Drone_-41.jpg'),
(812, 825, '9804 W 34 court - Drone_-43.jpg'),
(813, 825, '9804 W 34 court - Drone_-50.jpg'),
(823, 827, '116_ Azimut _Rylax_ - Drone -_-2.jpg'),
(824, 827, '116_ Azimut _Rylax_ - Drone -_-9.jpg'),
(825, 827, '116_ Azimut _Rylax_ - Drone -_-41.jpg'),
(826, 827, '116_ Azimut _Rylax_ - Drone -_-45.jpg'),
(827, 827, '116_ Azimut _Rylax_ -_-2.jpg'),
(828, 827, '116_ Azimut _Rylax_ -_-45.jpg'),
(829, 827, '116_ Azimut _Rylax_ -_-61.jpg'),
(830, 827, '116_ Azimut _Rylax_ -_-79.jpg'),
(843, 830, '62_ Azimut - Drone -2.jpg'),
(844, 830, '62_ Azimut - Drone -11.jpg'),
(845, 830, '62_ Azimut - Drone -15.jpg'),
(846, 830, '62_ Azimut -1.jpg'),
(847, 830, '62_ Azimut -34.jpg'),
(848, 830, 'IMG_0224.jpg'),
(849, 830, 'IMG_0225.jpg'),
(850, 831, '68_ Galeon -_-2-1.jpg'),
(851, 831, '68_ Galeon -_-3-3.jpg'),
(852, 831, '68_ Galeon -_-4.jpg'),
(853, 831, '68_ Galeon -_-6.jpg'),
(854, 831, '68_ Galeon -_-6-2.jpg'),
(855, 831, '68_ Galeon -_-13.jpg'),
(856, 831, '68_ Galeon -_-14-1.jpg'),
(857, 831, '68_ Galeon -_-20.jpg'),
(858, 831, '68_ Galeon -_-23.jpg'),
(859, 832, '68_ Galeon - Lets Toast - Drone -_.jpg'),
(860, 832, '68_ Galeon - Lets Toast - Drone -_-3.jpg'),
(861, 832, '68_ Galeon - Lets Toast - Drone -_-15.jpg'),
(862, 832, '68_ Galeon - Lets Toast - Drone -_-33.jpg'),
(863, 832, '68_ Galeon - Lets Toast -_-4.jpg'),
(864, 832, '68_ Galeon - Lets Toast -_-40.jpg'),
(865, 832, '68_ Galeon - Lets Toast -_-69.jpg'),
(866, 832, '68_ Galeon - Lets Toast -_-74.jpg'),
(867, 832, '68_ Galeon - Lets Toast -_-83.jpg'),
(873, 834, '38ft Axopar _ Riviere _ Photos 2.jpeg'),
(874, 834, '38ft Axopar _ Riviere _ Photos 3.jpeg'),
(875, 834, '38ft Axopar _ Riviere _ Photos 4.jpeg'),
(876, 834, '38ft Axopar _ Riviere _ Photos 5.jpeg'),
(877, 834, '38ft Axopar _ Riviere _ Photos 6.jpeg'),
(878, 834, '38ft Axopar _ Riviere _ Photos 7.jpeg'),
(879, 834, '38ft Axopar _ Riviere _ Photos 8.jpeg'),
(880, 834, '38ft Axopar _ Riviere _ Photos 9.jpeg'),
(881, 834, '38ft Axopar _ Riviere _ Photos 10.jpeg'),
(882, 834, 'Axopar 38 - thumbnail.jpg'),
(883, 835, '38ft Axopar _ Daniela _ Photo-1.png'),
(884, 835, '38ft Axopar _ Daniela _ Photo-3.png'),
(885, 835, '38ft Axopar _ Daniela _ Photo-4.png'),
(886, 835, '38ft Axopar _ Daniela _ Photo-7.png'),
(887, 835, '38ft Axopar _ Daniela _ Photo-8.png'),
(888, 835, '38ft Axopar _ Daniela _ Photo-11.png'),
(889, 835, '38ft Axopar _ Daniela _ Photo-13.png'),
(890, 835, '38ft Axopar _ Daniela _ Photo-16.png'),
(891, 835, '38ft Axopar _ Daniela _ Photo-18.png'),
(892, 835, '38ft Axopar _ Daniela _ Photo-19.png'),
(893, 836, '48ft Catamaran _ Bubble .png'),
(894, 836, '48ft Catamaran _ Bubble 0.png'),
(895, 836, '48ft Catamaran _ Bubble 72.png'),
(896, 836, 'image 1.jpeg'),
(897, 836, 'IMG_8195.JPG'),
(898, 836, 'IMG_8199.JPG'),
(899, 836, 'IMG_8203.JPG'),
(900, 837, '74ft Sunseeker _ Below Deck _ Photo 2.jpg'),
(901, 837, '74ft Sunseeker _ Below Deck _ Photo 5.jpg'),
(902, 837, '74ft Sunseeker _ Below Deck _ Photo 8.jpg'),
(903, 837, '74ft Sunseeker _ Below Deck _ Photo 9.jpg'),
(904, 837, '74ft Sunseeker _ Below Deck _ Photo 26.jpg'),
(905, 837, '74ft Sunseeker _ Below Deck _ Photo 38.jpg'),
(906, 837, '74ft Sunseeker _ Below Deck _ Photo 57.jpg'),
(907, 838, '84ft Mangusta _ Royal Rockstar _ Photo 1 Medium.jpeg'),
(908, 838, '84ft Mangusta _ Royal Rockstar _ Photo 2.jpg'),
(909, 838, '84ft Mangusta _ Royal Rockstar _ Photo 4.jpg'),
(910, 838, '84ft Mangusta _ Royal Rockstar _ Photo 22.jpg'),
(911, 838, '84ft Mangusta _ Royal Rockstar _ Photo 30.jpg'),
(912, 838, '84ft Mangusta _ Royal Rockstar _ Photo 37.jpg'),
(913, 838, '84ft Mangusta _ Royal Rockstar _ Photo 48 Medium.jpeg'),
(914, 838, '84ft Mangusta _ Royal Rockstar _ Photo 75.jpg'),
(915, 838, '84ft Mangusta _ Royal Rockstar _ Photo 105.jpg'),
(916, 839, '96ft Sirena _ Olympus _ Photo 15.JPG'),
(917, 839, '96ft Sirena _ Olympus _ Photo 16.JPG'),
(918, 839, '96ft Sirena _ Olympus _ Photo 17.JPG'),
(919, 839, '96ft Sirena _ Olympus _ Photo 18.JPG'),
(920, 839, 'Sirena 88 - Homepage ycnmiami.jpg'),
(921, 839, 'Sirena 88 2 - homepage Ycnmiami.jpg'),
(922, 839, '96ft Sirena _ Olympus _ Photo 2.JPG'),
(923, 839, '96ft Sirena _ Olympus _ Photo 5.JPG'),
(924, 839, '96ft Sirena _ Olympus _ Photo 8.JPG'),
(925, 839, '96ft Sirena _ Olympus _ Photo 12.JPG'),
(926, 839, '96ft Sirena _ Olympus _ Photo 14.JPG'),
(927, 840, '85ft Wally _ WHY 150 _ Photo 1.png'),
(928, 840, '85ft Wally _ WHY 150 _ Photo 3.png'),
(929, 840, '85ft Wally _ WHY 150 _ Photo 5.png'),
(930, 840, '85ft Wally _ WHY 150 _ Photo 11.png'),
(931, 840, '85ft Wally _ WHY 150 _ Photo 12.png'),
(932, 840, '85ft Wally _ WHY 150 _ Photo 14.png'),
(933, 840, '85ft Wally _ WHY 150 _ Photo 18.png'),
(934, 840, '85ft Wally _ WHY 150 _ Photo 19.png'),
(935, 841, '[28m-Yacht-NAVETTA-28]-9500-161.jpg'),
(936, 841, 'BONUSROUND-16-scaled.jpeg'),
(937, 841, 'BONUSROUND-30-scaled.jpeg'),
(938, 841, 'BONUSROUND-43-scaled.jpeg'),
(939, 841, 'large_3633271.jpg'),
(940, 841, 'large_3633272.jpg'),
(941, 841, 'large_3633428 (1).jpg'),
(942, 841, 'large_3633455.jpg'),
(943, 841, 'large_3633490.jpg'),
(944, 841, 'large_3633520.jpg'),
(945, 841, 'Untitled-design-2-scaled.jpeg'),
(946, 842, '72ft Azimut _ Water You Doing _ Photo 1.JPG'),
(947, 842, '72ft Azimut _ Water You Doing _ Photo 2.JPG'),
(948, 842, '72ft Azimut _ Water You Doing _ Photo 4.JPG'),
(949, 842, '72ft Azimut _ Water You Doing _ Photo 5.JPG'),
(950, 842, '72ft Azimut _ Water You Doing _ Photo 10.JPG'),
(951, 842, '72ft Azimut _ Water You Doing _ Photo 17.JPG'),
(952, 842, '72ft Azimut _ Water You Doing _ Photo 19.JPG'),
(953, 842, '72ft Azimut _ Water You Doing _ Photo 23.JPG'),
(954, 842, '72ft Azimut _ Water You Doing _ Photo 24.JPG'),
(955, 842, '72ft Azimut _ Water You Doing _ Photo 26.JPG'),
(956, 843, '64ft Azimut _ Third Wind _ Photo 2 - Copy.jpg'),
(957, 843, '64ft Azimut _ Third Wind _ Photo 3 - Copy.jpg'),
(958, 843, '64ft Azimut _ Third Wind _ Photo 18 - Copy.jpg'),
(959, 843, '64ft Azimut _ Third Wind _ Photo 21.jpg'),
(960, 843, '64ft Azimut _ Third Wind _ Photo 24.jpg'),
(961, 843, '64ft Azimut _ Third Wind _ Photo 29.jpg'),
(962, 843, '64ft Azimut _ Third Wind _ Photo 39.jpg'),
(963, 844, '94_ Azimut _BASH_ - Drone -_.jpg'),
(964, 844, '94_ Azimut _BASH_ - Drone -_-3.jpg'),
(965, 844, '94_ Azimut _BASH_ - Drone -_-6.jpg'),
(966, 844, '94_ Azimut _BASH_ - Drone -_-10.jpg'),
(967, 844, '94_ Azimut _BASH_ - Drone -_-25.jpg'),
(968, 844, '94_ Azimut _BASH_ - Drone -_-31.jpg'),
(969, 844, '94_ Azimut _BASH_ - Drone -_-41.jpg'),
(970, 845, '96ft Sunseeker _ RMM Job _ Photo 16.jpg'),
(971, 845, '96ft Sunseeker _ RMM Job _ Photo 22.jpg'),
(972, 845, '96ft Sunseeker _ RMM Job _ Photo 36.jpg'),
(973, 845, '96ft Sunseeker _ RMM Job _ Photo 41.jpg'),
(974, 845, '96ft Sunseeker _ RMM Job _ Photo 45.jpg'),
(975, 845, '96ft Sunseeker _ RMM Job _ Photo 47.jpg'),
(976, 845, '96ft Sunseeker _ RMM Job _ Photo 115.jpg'),
(977, 845, '96ft Sunseeker _ RMM Job _ Photo 128.jpg'),
(978, 845, '96ft Sunseeker _ RMM Job _ Photo 164.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(6) NOT NULL,
  `data_time` datetime NOT NULL,
  `IP` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `name`, `email`, `status`, `data_time`, `IP`, `browser`, `os`) VALUES
(212, 'ScottandTracyEvents', 'info@scottandtracyevents.com', 'regist', '2024-07-18 20:41:12', '65.141.115.242', 'Edge', 'Windows 10'),
(213, 'Tracy_McPhee', 'info@scottandtracyevents.com', 'login', '2024-07-18 20:47:53', '65.141.115.242', 'Edge', 'Windows 10'),
(214, 'yacht', 'yacht@owner.com', 'login', '2024-07-18 22:28:41', '2401:4900:1c02:566a:c462:6daf:2d88:ac83', 'Chrome', 'Windows 10'),
(215, 'yacht', 'yacht@owner.com', 'logout', '2024-07-18 22:30:16', '2401:4900:1c02:566a:c462:6daf:2d88:ac83', 'Chrome', 'Windows 10'),
(216, 'yacht', 'yacht@owner.com', 'login', '2024-07-18 22:30:43', '2401:4900:1c02:566a:c462:6daf:2d88:ac83', 'Chrome', 'Windows 10'),
(217, 'yacht', 'yacht@owner.com', 'login', '2024-07-18 23:06:40', '2401:4900:1c02:566a:c462:6daf:2d88:ac83', 'Chrome', 'Windows 10'),
(218, 'yacht', 'yacht@owner.com', 'login', '2024-07-18 23:14:22', '2401:4900:1c02:566a:c462:6daf:2d88:ac83', 'Chrome', 'Windows 10'),
(219, 'yacht', 'yacht@owner.com', 'logout', '2024-07-18 23:20:34', '2401:4900:1c02:566a:c462:6daf:2d88:ac83', 'Chrome', 'Windows 10'),
(220, 'yacht', 'yacht@owner.com', 'login', '2024-07-19 14:28:42', '2401:4900:1c02:566a:c462:6daf:2d88:ac83', 'Chrome', 'Windows 10'),
(221, 'raj', 'raj@gmail.com', 'login', '2024-07-19 15:10:03', '2401:4900:1c02:566a:c462:6daf:2d88:ac83', 'Chrome', 'Windows 10'),
(222, 'yacht', 'yacht@owner.com', 'login', '2024-07-19 15:10:31', '2401:4900:1c02:566a:c462:6daf:2d88:ac83', 'Chrome', 'Windows 10'),
(223, 'raj', 'raj@gmail.com', 'login', '2024-07-19 15:48:44', '2401:4900:1c02:566a:c462:6daf:2d88:ac83', 'Chrome', 'Windows 10'),
(224, 'yacht', 'yacht@owner.com', 'login', '2024-07-19 19:43:04', '2401:4900:1c02:566a:887d:15:4e54:9593', 'Edge', 'Windows 10'),
(225, 'raj', 'raj@gmail.com', 'login', '2024-07-20 13:55:06', '2401:4900:1c02:566a:ac32:fc4f:a50d:653', 'Chrome', 'Windows 10'),
(226, 'raj', 'raj@gmail.com', 'login', '2024-07-20 20:31:37', '2401:4900:1c02:566a:b04d:1355:54c0:b153', 'Chrome', 'Windows 10'),
(227, 'raj', 'raj@gmail.com', 'login', '2024-07-20 22:23:05', '2401:4900:1c8f:7d4:91fc:29f2:2b0:24d6', 'Chrome', 'Windows 10'),
(228, 'raj', 'raj@gmail.com', 'login', '2024-07-22 14:10:09', '2401:4900:1c02:566a:7d61:fb49:2440:e973', 'Chrome', 'Windows 10'),
(229, 'yacht', 'yacht@owner.com', 'login', '2024-07-22 14:43:22', '2401:4900:1c02:566a:7d61:fb49:2440:e973', 'Chrome', 'Windows 10'),
(230, 'raj', 'raj@gmail.com', 'login', '2024-07-22 15:57:28', '2401:4900:1c02:566a:7d61:fb49:2440:e973', 'Chrome', 'Windows 10'),
(231, 'raj', 'raj@gmail.com', 'logout', '2024-07-22 16:43:03', '2401:4900:1c02:566a:7d61:fb49:2440:e973', 'Chrome', 'Windows 10'),
(232, 'yacht', 'yacht@owner.com', 'login', '2024-07-22 17:39:49', '2401:4900:1c02:566a:7d61:fb49:2440:e973', 'Chrome', 'Windows 10'),
(233, 'raj', 'raj@gmail.com', 'login', '2024-07-24 15:25:17', '2401:4900:1c02:566a:8972:6734:9051:6dab', 'Chrome', 'Windows 10'),
(234, 'raj', 'raj@gmail.com', 'login', '2024-07-24 22:51:08', '2401:4900:1c02:566a:8972:6734:9051:6dab', 'Chrome', 'Windows 10'),
(235, 'raj', 'raj@gmail.com', 'login', '2024-07-25 14:13:25', '122.169.50.127', 'Chrome', 'Windows 10'),
(236, 'raj', 'raj@gmail.com', 'login', '2024-07-25 16:22:50', '2401:4900:1c02:566a:8496:f34:7179:bbdc', 'Chrome', 'Windows 10'),
(237, 'raj', 'raj@gmail.com', 'logout', '2024-07-25 18:31:55', '2401:4900:1c02:566a:8496:f34:7179:bbdc', 'Chrome', 'Windows 10'),
(238, 'raj', 'raj@gmail.com', 'login', '2024-07-26 13:54:06', '2401:4900:1c02:566a:2c61:65ad:c3a9:eb3c', 'Chrome', 'Windows 10'),
(239, 'raj', 'raj@gmail.com', 'login', '2024-07-26 22:37:01', '2401:4900:1c02:566a:2c61:65ad:c3a9:eb3c', 'Chrome', 'Windows 10'),
(240, 'raj', 'raj@gmail.com', 'login', '2024-07-27 15:00:58', '2401:4900:1c02:6c4e:50ad:c71d:6303:bbf9', 'Chrome', 'Windows 10'),
(241, 'raj', 'raj@gmail.com', 'login', '2024-07-27 19:21:04', '2401:4900:1c02:6c4e:50ad:c71d:6303:bbf9', 'Chrome', 'Windows 10'),
(242, 'raj', 'raj@gmail.com', 'logout', '2024-07-27 19:21:16', '2401:4900:1c02:6c4e:50ad:c71d:6303:bbf9', 'Chrome', 'Windows 10'),
(243, 'yacht', 'yacht@owner.com', 'login', '2024-07-27 19:21:25', '2401:4900:1c02:6c4e:50ad:c71d:6303:bbf9', 'Chrome', 'Windows 10'),
(244, 'yacht', 'yacht@owner.com', 'login', '2024-07-29 14:40:07', '2401:4900:1c02:6c4e:686d:7a8:c5fa:9da1', 'Chrome', 'Windows 10'),
(245, 'BMY', 'gatewayreplies@gmail.com', 'regist', '2024-07-29 15:20:40', '2401:4900:1c02:6c4e:686d:7a8:c5fa:9da1', 'Chrome', 'Windows 10'),
(246, 'BMY', 'gatewayreplies@gmail.com', 'login', '2024-07-29 15:23:02', '2401:4900:1c02:6c4e:686d:7a8:c5fa:9da1', 'Chrome', 'Windows 10'),
(247, 'BMY', 'gatewayreplies@gmail.com', 'logout', '2024-07-29 15:24:43', '2401:4900:1c02:6c4e:686d:7a8:c5fa:9da1', 'Chrome', 'Windows 10'),
(248, 'raj', 'raj@gmail.com', 'login', '2024-07-29 15:33:40', '2401:4900:1c02:6c4e:686d:7a8:c5fa:9da1', 'Chrome', 'Windows 10'),
(249, 'yacht', 'yacht@owner.com', 'login', '2024-07-29 17:35:09', '2401:4900:1c02:6c4e:686d:7a8:c5fa:9da1', 'Chrome', 'Windows 10'),
(250, 'raj', 'raj@gmail.com', 'login', '2024-07-29 23:07:04', '2401:4900:1c02:6c4e:686d:7a8:c5fa:9da1', 'Chrome', 'Windows 10'),
(251, 'raj', 'raj@gmail.com', 'login', '2024-07-30 16:43:39', '2401:4900:1c02:6c4e:98b8:7e22:8bcc:b4d7', 'Chrome', 'Windows 10'),
(252, 'raj', 'raj@gmail.com', 'login', '2024-08-01 14:21:13', '2401:4900:1c02:4d50:ed84:430a:2cf8:4a9d', 'Chrome', 'Windows 10'),
(253, 'raj', 'raj@gmail.com', 'login', '2024-08-02 14:32:59', '2401:4900:1c02:6573:8d77:4da1:5750:f79f', 'Chrome', 'Windows 10'),
(254, 'raj', 'raj@gmail.com', 'login', '2024-08-02 22:34:55', '2401:4900:1c02:6573:397e:1ac7:bf34:c7c7', 'Chrome', 'Windows 10'),
(255, 'pradeep', 'pradeep@gmail.com', 'login', '2024-08-08 14:57:55', '2401:4900:1c02:439b:84ba:f52a:a30b:8757', 'Chrome', 'Windows 10'),
(256, 'pradeep', 'pradeep@gmail.com', 'logout', '2024-08-08 15:40:14', '2401:4900:1c02:439b:84ba:f52a:a30b:8757', 'Chrome', 'Windows 10'),
(257, 'pradeep', 'pradeep@gmail.com', 'login', '2024-08-08 22:58:24', '2401:4900:1c02:439b:4c05:c540:9765:d25b', 'Chrome', 'Windows 10'),
(258, 'pradeep', 'pradeep@gmail.com', 'logout', '2024-08-08 23:00:06', '2401:4900:1c02:439b:4c05:c540:9765:d25b', 'Chrome', 'Windows 10'),
(259, 'pradeep', 'pradeep@gmail.com', 'login', '2024-08-08 23:00:45', '2401:4900:1c02:439b:4c05:c540:9765:d25b', 'Chrome', 'Windows 10'),
(260, 'pradeep', 'pradeep@gmail.com', 'logout', '2024-08-08 23:00:54', '2401:4900:1c02:439b:4c05:c540:9765:d25b', 'Chrome', 'Windows 10'),
(261, 'raj', 'raj@gmail.com', 'login', '2024-08-13 15:47:45', '2401:4900:1c02:702f:c96e:e407:d9cb:e481', 'Chrome', 'Windows 10'),
(262, 'raj', 'raj@gmail.com', 'logout', '2024-08-13 18:04:39', '2401:4900:1c02:702f:c96e:e407:d9cb:e481', 'Chrome', 'Windows 10'),
(263, 'raj', 'raj@gmail.com', 'login', '2024-08-14 18:20:50', '2401:4900:1c02:702f:9090:be0b:4ab3:a1fe', 'Chrome', 'Windows 10'),
(264, 'raj', 'raj@gmail.com', 'login', '2024-08-14 21:15:27', '2401:4900:1c02:702f:39cf:752:a42f:b40c', 'Chrome', 'Windows 10'),
(265, 'raj', 'raj@gmail.com', 'login', '2024-08-15 16:56:30', '2401:4900:1c02:702f:39cf:752:a42f:b40c', 'Chrome', 'Windows 10'),
(266, 'raj', 'raj@gmail.com', 'login', '2024-09-30 21:00:00', '2401:4900:1c02:7fb1:6569:dcde:d545:e8bf', 'Chrome', 'Windows 10'),
(267, 'raj', 'raj@gmail.com', 'login', '2025-01-03 16:18:22', '2401:4900:1c02:5412:88cb:50eb:971e:562b', 'Chrome', 'Windows 10'),
(268, 'raj', 'raj@gmail.com', 'login', '2025-01-03 17:15:32', '2401:4900:1c02:5412:88cb:50eb:971e:562b', 'Chrome', 'Windows 10'),
(269, 'raj', 'raj@gmail.com', 'login', '2025-01-03 22:33:47', '2401:4900:1c02:5412:88cb:50eb:971e:562b', 'Chrome', 'Windows 10'),
(270, 'laurent', 'laurent@ycn.miami', 'regist', '2025-01-03 22:35:08', '2401:4900:1c02:5412:88cb:50eb:971e:562b', 'Chrome', 'Windows 10'),
(271, 'raj', 'raj@gmail.com', 'login', '2025-01-03 22:35:46', '2401:4900:1c02:5412:88cb:50eb:971e:562b', 'Chrome', 'Windows 10'),
(272, 'raj', 'raj@gmail.com', 'login', '2025-01-03 22:50:40', '2401:4900:1c02:5412:88cb:50eb:971e:562b', 'Chrome', 'Windows 10'),
(273, 'raj', 'raj@gmail.com', 'logout', '2025-01-03 22:53:45', '2401:4900:1c02:5412:88cb:50eb:971e:562b', 'Chrome', 'Windows 10'),
(274, 'laurent', 'laurent@ycn.miami', 'login', '2025-01-03 22:54:04', '2401:4900:1c02:5412:88cb:50eb:971e:562b', 'Chrome', 'Windows 10'),
(275, 'raj', 'raj@gmail.com', 'login', '2025-01-06 14:11:01', '2401:4900:1c02:5a7c:2ce1:d138:f9f3:7b2a', 'Chrome', 'Windows 10'),
(276, 'raj', 'raj@gmail.com', 'login', '2025-01-06 16:33:10', '2401:4900:1c02:5a7c:2ce1:d138:f9f3:7b2a', 'Chrome', 'Windows 10'),
(277, 'raj', 'raj@gmail.com', 'login', '2025-01-06 21:31:37', '2401:4900:1c02:5a7c:2ce1:d138:f9f3:7b2a', 'Chrome', 'Windows 10'),
(278, 'laurent', 'laurent@ycn.miami', 'regist', '2025-01-06 21:52:49', '2401:4900:1c02:5a7c:2ce1:d138:f9f3:7b2a', 'Chrome', 'Windows 10'),
(279, 'raj', 'raj@gmail.com', 'login', '2025-01-06 21:54:21', '2401:4900:1c02:5a7c:2ce1:d138:f9f3:7b2a', 'Chrome', 'Windows 10'),
(280, 'raj', 'raj@gmail.com', 'logout', '2025-01-06 22:15:31', '2401:4900:1c02:5a7c:2ce1:d138:f9f3:7b2a', 'Chrome', 'Windows 10'),
(281, 'raj', 'raj@gmail.com', 'login', '2025-01-06 22:15:45', '2401:4900:1c02:5a7c:2ce1:d138:f9f3:7b2a', 'Chrome', 'Windows 10'),
(282, 'raj', 'raj@gmail.com', 'logout', '2025-01-06 22:17:57', '2401:4900:1c02:5a7c:2ce1:d138:f9f3:7b2a', 'Chrome', 'Windows 10'),
(283, 'raj', 'raj@gmail.com', 'login', '2025-01-07 16:24:30', '2401:4900:1c02:5a7c:c893:911c:7ba4:8d97', 'Chrome', 'Windows 10'),
(284, 'testtest', 'test@gmail.com', 'regist', '2025-01-07 16:24:59', '2401:4900:1c02:5a7c:c893:911c:7ba4:8d97', 'Chrome', 'Windows 10'),
(285, 'testtest', 'test@gmail.com', 'login', '2025-01-07 16:25:02', '2401:4900:1c02:5a7c:c893:911c:7ba4:8d97', 'Chrome', 'Windows 10'),
(286, 'testtest', 'test@gmail.com', 'logout', '2025-01-07 16:28:15', '2401:4900:1c02:5a7c:c893:911c:7ba4:8d97', 'Chrome', 'Windows 10'),
(287, 'raj', 'raj@gmail.com', 'login', '2025-01-07 16:28:26', '2401:4900:1c02:5a7c:c893:911c:7ba4:8d97', 'Chrome', 'Windows 10'),
(288, 'raj', 'raj@gmail.com', 'login', '2025-01-07 16:28:42', '2401:4900:1c02:5a7c:c893:911c:7ba4:8d97', 'Chrome', 'Windows 10'),
(289, 'laurent', 'laurent@ycn.miami', 'regist', '2025-01-07 17:09:03', '2401:4900:1c02:5a7c:c893:911c:7ba4:8d97', 'Chrome', 'Windows 10'),
(290, 'laurent', 'laurent@ycn.miami', 'login', '2025-01-07 17:09:17', '2401:4900:1c02:5a7c:c893:911c:7ba4:8d97', 'Chrome', 'Windows 10'),
(291, 'laurent', 'laurent@ycn.miami', 'login', '2025-01-07 17:11:54', '2401:4900:1c43:699e:b479:c0c1:63b3:1dfe', 'Chrome', 'Windows 10'),
(292, 'laurent', 'laurent@ycn.miami', 'login', '2025-01-07 17:22:06', '2401:4900:1c02:5a7c:d950:1fb8:ad8a:30c0', 'Chrome', 'Windows 10'),
(293, 'raj', 'raj@gmail.com', 'login', '2025-01-07 17:33:57', '2401:4900:1c02:5a7c:c893:911c:7ba4:8d97', 'Chrome', 'Windows 10'),
(294, 'laurent', 'laurent@ycn.miami', 'login', '2025-01-07 18:15:40', '2401:4900:1c43:699e:b479:c0c1:63b3:1dfe', 'Chrome', 'Windows 10'),
(295, 'laurent', 'laurent@ycn.miami', 'login', '2025-01-09 13:46:53', '2401:4900:1c02:5a7c:150b:76a8:e5b4:7b8c', 'Chrome', 'Windows 10'),
(296, 'raj', 'raj@gmail.com', 'login', '2025-01-09 16:32:21', '2401:4900:1c02:5a7c:150b:76a8:e5b4:7b8c', 'Chrome', 'Windows 10'),
(297, 'raj', 'raj@gmail.com', 'login', '2025-01-09 17:54:49', '2401:4900:1c02:5a7c:5f6:c378:f3ea:40bc', 'Chrome', 'Windows 10'),
(298, 'raj', 'raj@gmail.com', 'login', '2025-01-09 18:14:18', '2401:4900:1c02:5a7c:5f6:c378:f3ea:40bc', 'Chrome', 'Windows 10'),
(299, 'raj', 'raj@gmail.com', 'login', '2025-01-10 22:18:06', '::1', 'Chrome', 'Windows 10'),
(300, 'raj', 'raj@gmail.com', 'login', '2025-01-13 13:50:30', '::1', 'Chrome', 'Windows 10'),
(301, 'raj', 'raj@gmail.com', 'logout', '2025-01-13 15:17:28', '::1', 'Chrome', 'Windows 10'),
(302, 'laurent', 'laurent@ycn.miami', 'login', '2025-01-13 15:17:48', '::1', 'Chrome', 'Windows 10'),
(303, 'laurent', 'laurent@ycn.miami', 'logout', '2025-01-13 15:32:51', '::1', 'Chrome', 'Windows 10'),
(304, 'laurent', 'laurent@ycn.miami', 'login', '2025-01-13 15:33:57', '::1', 'Chrome', 'Windows 10'),
(305, 'raj', 'raj@gmail.com', 'login', '2025-01-13 18:24:59', '::1', 'Chrome', 'Windows 10'),
(306, 'raj', 'raj@gmail.com', 'logout', '2025-01-13 20:02:43', '::1', 'Chrome', 'Windows 10'),
(307, 'raj', 'raj@gmail.com', 'login', '2025-01-13 20:03:31', '::1', 'Chrome', 'Windows 10'),
(308, 'raj', 'raj@gmail.com', 'login', '2025-01-13 21:50:19', '::1', 'Chrome', 'Windows 10'),
(309, 'raj', 'raj@gmail.com', 'login', '2025-01-15 13:41:37', '::1', 'Chrome', 'Windows 10'),
(310, 'raj', 'raj@gmail.com', 'login', '2025-01-15 15:12:46', '::1', 'Chrome', 'Windows 10'),
(311, 'raj', 'raj@gmail.com', 'login', '2025-01-15 18:16:47', '::1', 'Chrome', 'Windows 10'),
(312, 'raj', 'raj@gmail.com', 'login', '2025-01-15 21:08:27', '::1', 'Chrome', 'Windows 10'),
(313, 'raj', 'raj@gmail.com', 'login', '2025-01-16 13:48:23', '::1', 'Chrome', 'Windows 10'),
(314, 'raj', 'raj@gmail.com', 'login', '2025-01-16 14:07:02', '::1', 'Chrome', 'Windows 10'),
(315, 'raj', 'raj@gmail.com', 'login', '2025-01-16 15:40:20', '::1', 'Chrome', 'Windows 10'),
(316, 'raj', 'raj@gmail.com', 'login', '2025-01-16 17:23:36', '::1', 'Chrome', 'Windows 10'),
(317, 'raj', 'raj@gmail.com', 'login', '2025-01-16 19:27:33', '::1', 'Chrome', 'Windows 10'),
(318, 'raj', 'raj@gmail.com', 'login', '2025-01-16 20:38:09', '::1', 'Chrome', 'Windows 10'),
(319, 'raj', 'raj@gmail.com', 'login', '2025-01-16 22:21:57', '::1', 'Chrome', 'Windows 10'),
(320, 'raj', 'raj@gmail.com', 'login', '2025-01-17 13:51:43', '::1', 'Chrome', 'Windows 10'),
(321, 'raj', 'raj@gmail.com', 'login', '2025-01-17 15:35:57', '::1', 'Chrome', 'Windows 10'),
(322, 'raj', 'raj@gmail.com', 'login', '2025-01-17 17:22:46', '::1', 'Chrome', 'Windows 10'),
(323, 'raj', 'raj@gmail.com', 'login', '2025-01-17 17:23:29', '::1', 'Edge', 'Windows 10'),
(324, 'raj', 'raj@gmail.com', 'logout', '2025-01-17 17:23:43', '::1', 'Edge', 'Windows 10'),
(325, 'raj', 'raj@gmail.com', 'login', '2025-01-17 18:35:05', '::1', 'Chrome', 'Windows 10'),
(326, 'pranali', 'pranali@gmail.com', 'login', '2025-01-17 18:35:53', '::1', 'Chrome', 'Windows 10'),
(327, 'pranali', 'pranali@gmail.com', 'logout', '2025-01-17 18:35:59', '::1', 'Chrome', 'Windows 10'),
(328, 'PradeepK', 'pradeep@gmail.com', 'regist', '2025-01-17 18:37:23', '::1', 'Chrome', 'Windows 10'),
(329, 'PradeepK', 'pradeep@gmail.com', 'login', '2025-01-17 18:37:34', '::1', 'Chrome', 'Windows 10'),
(330, 'PradeepK', 'pradeep@gmail.com', 'logout', '2025-01-17 18:37:42', '::1', 'Chrome', 'Windows 10'),
(331, 'PradeepK', 'pradeep@gmail.com', 'login', '2025-01-17 18:37:56', '::1', 'Chrome', 'Windows 10'),
(332, 'PradeepK', 'pradeep@gmail.com', 'logout', '2025-01-17 18:40:39', '::1', 'Chrome', 'Windows 10'),
(333, 'laurent', 'laurent@ycn.miami', 'login', '2025-01-17 18:40:50', '::1', 'Chrome', 'Windows 10'),
(334, 'laurent', 'laurent@ycn.miami', 'logout', '2025-01-17 18:46:12', '::1', 'Chrome', 'Windows 10'),
(335, 'raj', 'raj@gmail.com', 'login', '2025-01-17 18:46:21', '::1', 'Chrome', 'Windows 10'),
(336, 'laurent', 'laurent@ycn.miami', 'login', '2025-01-17 19:00:09', '::1', 'Chrome', 'Windows 10'),
(337, 'raj', 'raj@gmail.com', 'login', '2025-01-17 20:10:38', '::1', 'Chrome', 'Windows 10'),
(338, 'PradeepK', 'pradeep@gmail.com', 'login', '2025-01-17 21:59:18', '::1', 'Chrome', 'Windows 10'),
(339, 'raj', 'raj@gmail.com', 'login', '2025-01-17 22:05:11', '::1', 'Chrome', 'Windows 10'),
(340, 'raj', 'raj@gmail.com', 'login', '2025-01-17 23:04:12', '::1', 'Chrome', 'Windows 10'),
(341, 'PradeepK', 'pradeep@gmail.com', 'login', '2025-01-17 23:08:40', '::1', 'Edge', 'Windows 10'),
(342, 'PradeepK', 'pradeep@gmail.com', 'logout', '2025-01-17 23:09:18', '::1', 'Edge', 'Windows 10'),
(343, 'laurent', 'laurent@ycn.miami', 'login', '2025-01-17 23:21:36', '::1', 'Chrome', 'Windows 10'),
(344, 'raj', 'raj@gmail.com', 'login', '2025-01-18 13:52:22', '::1', 'Chrome', 'Windows 10'),
(345, 'laurent', 'laurent@ycn.miami', 'login', '2025-01-18 14:06:26', '::1', 'Chrome', 'Windows 10'),
(346, 'Manas', 'manas@gmail.com', 'regist', '2025-01-18 15:16:05', '::1', 'Chrome', 'Windows 10'),
(347, 'Manas', 'manas@gmail.com', 'login', '2025-01-18 15:16:16', '::1', 'Chrome', 'Windows 10'),
(348, 'Manas', 'manas@gmail.com', 'logout', '2025-01-18 15:16:20', '::1', 'Chrome', 'Windows 10'),
(349, 'raj', 'raj@gmail.com', 'login', '2025-01-18 15:16:33', '::1', 'Chrome', 'Windows 10'),
(350, 'laurent', 'laurent@ycn.miami', 'logout', '2025-01-18 15:35:09', '::1', 'Chrome', 'Windows 10'),
(351, 'raj', 'raj@gmail.com', 'logout', '2025-01-18 18:24:45', '::1', 'Chrome', 'Windows 10'),
(352, 'raj', 'raj@gmail.com', 'login', '2025-01-20 21:20:10', '::1', 'Chrome', 'Windows 10'),
(353, 'raj', 'raj@gmail.com', 'login', '2025-01-21 17:22:10', '::1', 'Chrome', 'Windows 10'),
(354, 'raj', 'raj@gmail.com', 'logout', '2025-01-21 17:22:17', '::1', 'Chrome', 'Windows 10'),
(355, 'raj', 'raj@gmail.com', 'login', '2025-01-25 20:14:22', '::1', 'Edge', 'Windows 10'),
(356, 'mansi', 'mansi@gmail.com', 'regist', '2025-02-03 22:56:01', '::1', 'Chrome', 'Windows 10'),
(357, 'mansi', 'mansi@gmail.com', 'login', '2025-02-03 22:56:09', '::1', 'Chrome', 'Windows 10'),
(358, 'raj', 'raj@gmail.com', 'login', '2025-02-10 16:14:31', '::1', 'Chrome', 'Windows 10'),
(359, 'Pradeep Koli', 'kolipradeep15@gmail.com', 'regist', '2025-02-10 16:15:03', '::1', 'Chrome', 'Windows 10'),
(360, 'raj', 'raj@gmail.com', 'login', '2025-03-22 15:25:04', '::1', 'Chrome', 'Windows 10'),
(361, 'raj', 'raj@gmail.com', 'login', '2025-03-24 21:10:15', '::1', 'Chrome', 'Windows 10'),
(362, 'raj', 'raj@gmail.com', 'login', '2025-03-24 22:07:08', '::1', 'Chrome', 'Windows 10'),
(363, 'raj', 'raj@gmail.com', 'login', '2025-03-25 21:57:52', '::1', 'Chrome', 'Windows 10'),
(364, 'raj', 'raj@gmail.com', 'login', '2025-03-26 14:52:18', '::1', 'Chrome', 'Windows 10'),
(365, 'raj', 'raj@gmail.com', 'login', '2025-03-26 20:33:34', '::1', 'Chrome', 'Windows 10'),
(366, 'raj', 'raj@gmail.com', 'login', '2025-03-26 22:35:37', '::1', 'Chrome', 'Windows 10'),
(367, 'raj', 'raj@gmail.com', 'login', '2025-03-28 18:48:44', '::1', 'Chrome', 'Windows 10'),
(368, 'raj', 'raj@gmail.com', 'login', '2025-03-29 19:07:59', '2401:4900:1c02:d2e:9114:fdf8:a57f:6907', 'Chrome', 'Windows 10'),
(369, 'raj', 'raj@gmail.com', 'login', '2025-03-29 19:10:21', '2401:4900:1c02:d2e:9114:fdf8:a57f:6907', 'Chrome', 'Windows 10'),
(370, 'raj', 'raj@gmail.com', 'login', '2025-03-29 19:12:06', '2401:4900:1c02:d2e:9114:fdf8:a57f:6907', 'Edge', 'Windows 10'),
(371, 'raj', 'raj@gmail.com', 'login', '2025-04-02 23:12:26', '2401:4900:1c02:3f8a:e478:1a81:e0b3:3708', 'Chrome', 'Windows 10'),
(372, 'raj', 'raj@gmail.com', 'login', '2025-04-03 13:50:21', '2401:4900:1c02:3f8a:9d35:d2f2:bb4e:4d11', 'Chrome', 'Windows 10'),
(373, 'raj', 'raj@gmail.com', 'login', '2025-04-03 14:21:11', '2401:4900:1c02:3f8a:9d35:d2f2:bb4e:4d11', 'Chrome', 'Windows 10'),
(374, 'raj', 'raj@gmail.com', 'login', '2025-04-04 21:52:15', '2401:4900:1c02:3f8a:f45a:b49e:2efd:97ea', 'Chrome', 'Windows 10'),
(375, 'raj', 'raj@gmail.com', 'login', '2025-04-07 16:44:46', '2401:4900:1c02:3f8a:d8ac:753a:3e5a:4162', 'Chrome', 'Windows 10'),
(376, 'raj', 'raj@gmail.com', 'login', '2025-04-08 20:21:06', '2401:4900:1c02:3f8a:d0bc:ef04:9f6a:fda5', 'Chrome', 'Windows 10'),
(377, 'raj', 'raj@gmail.com', 'login', '2025-04-08 20:25:26', '2401:4900:1c02:3f8a:e91c:6c9:4ef:d7fd', 'Chrome', 'Windows 10'),
(378, 'raj', 'raj@gmail.com', 'login', '2025-04-08 21:15:40', '2401:4900:1c02:3f8a:50b9:3d:13cb:87c7', 'Chrome', 'Windows 10'),
(379, 'raj', 'raj@gmail.com', 'login', '2025-04-08 22:49:16', '2401:4900:1c02:3f8a:50b9:3d:13cb:87c7', 'Chrome', 'Windows 10'),
(380, 'raj', 'raj@gmail.com', 'login', '2025-04-09 13:43:57', '2401:4900:1c02:3f8a:c5bb:d354:6f4f:5b84', 'Chrome', 'Windows 10'),
(381, 'raj', 'raj@gmail.com', 'login', '2025-04-09 15:12:23', '2401:4900:1c02:3f8a:5532:ca6a:247:df25', 'Chrome', 'Windows 10');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `bankName` varchar(255) NOT NULL,
  `bankAddress` varchar(255) NOT NULL,
  `ABA` varchar(255) NOT NULL,
  `swiftCode` varchar(255) NOT NULL,
  `IBAN` varchar(255) NOT NULL,
  `accountNumber` varchar(255) NOT NULL,
  `accountType` varchar(255) NOT NULL,
  `beneficiaryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `username`, `bankName`, `bankAddress`, `ABA`, `swiftCode`, `IBAN`, `accountNumber`, `accountType`, `beneficiaryName`) VALUES
(13, 'yacht', 'American Express', 'Miami', 'Enter ABA', '12346789', '123456789', '1234567890', 'Saving Account ', 'Your Name');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(255) NOT NULL,
  `yacht_id` int(255) NOT NULL,
  `day` varchar(250) NOT NULL,
  `packs` varchar(250) NOT NULL,
  `hours` varchar(255) NOT NULL,
  `rent` varchar(255) NOT NULL,
  `mrp_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `yacht_id`, `day`, `packs`, `hours`, `rent`, `mrp_price`) VALUES
(1, 83, '', '', '1', '500', 650),
(2, 83, '', '', '2', '600', 780),
(3, 83, '', '', '3', '700', 910),
(4, 83, '', '', '4', '800', 1040),
(5, 83, '', '', '5', '900', 1170),
(6, 71, '', '', '1', '500', 650),
(7, 71, '', '', '2', '900', 1170),
(8, 71, '', '', '4', '1500', 1950),
(9, 71, '', '', '8', '2800', 3640),
(10, 72, 'Weekdays', '1-6', '3', '2499', 3248),
(11, 72, 'Weekdays', '7-13', '3', '3499', 4548),
(12, 72, 'Weekends', '1-6', '4', '3299', 4288),
(13, 72, 'Weekends', '7-13', '4', '4599', 5978),
(14, 73, 'Weekdays', '1-6', '3', '2499', 3248),
(15, 73, 'Weekdays', '7-13', '3', '3499', 4548),
(16, 74, 'Weekdays', '1', '1', '1', 1),
(17, 75, '1', '2', '2', '3', 3),
(18, 75, '5', '5', '5', '5', 6),
(19, 76, 'Weekdays', '1-6', '3', '2499', 3248),
(20, 76, 'Weekdays', '7-13', '3', '3499', 4548),
(21, 76, 'Weekends', '1-6', '4', '3299', 4288),
(22, 76, 'Weekends', '7-13', '4', '4599', 5978),
(23, 77, 'Weekdays', '1-6', '3', '2499', 3248),
(24, 78, 'Weekdays', '1-6', '3', '2499', 3248),
(152, 828, 'Weekdays', '1-6', '4', '150', 195),
(153, 828, 'Weekdays', '1-6', '6', '200', 260),
(163, 829, 'Weekdays', '1-6', '4', '10120', 13156),
(164, 829, 'Weekdays', '1-6', '6', '100', 130),
(190, 824, 'Weekdays', '1-6', '4', '4485', 5830),
(191, 824, 'Weekdays', '1-6', '6', '5750', 7475),
(192, 824, 'Weekdays', '1-6', '8', '7130', 9269),
(196, 822, 'Weekdays', '1-6', '4', '4830', 6279),
(197, 822, 'Weekdays', '1-6', '6', '6440', 8372),
(198, 822, 'Weekdays', '1-6', '8', '7590', 9867),
(220, 816, 'Weekdays', '1-6', '4', '3680', 4784),
(221, 816, 'Weekdays', '1-6', '6', '4945', 6428),
(222, 816, 'Weekdays', '1-6', '8', '5750', 7475),
(229, 813, 'Weekdays', '1-6', '6', '12075', 15697),
(230, 813, 'Weekdays', '1-6', '8', '13800', 17940),
(234, 811, 'Weekdays', '1-6', '4', '5635', 7325),
(235, 811, 'Weekdays', '1-6', '6', '6785', 8820),
(236, 811, 'Weekdays', '1-6', '8', '7935', 10315),
(240, 809, 'Weekdays', '1-6', '4', '4427', 5755),
(241, 809, 'Weekdays', '1-6', '6', '5060', 6578),
(242, 809, 'Weekdays', '1-6', '8', '5635', 7325),
(246, 807, 'Weekdays', '1-6', '4', '4945', 6428),
(247, 807, 'Weekdays', '1-6', '6', '5635', 7325),
(248, 807, 'Weekdays', '1-6', '8', '6325', 8222),
(322, 802, 'Weekdays', '1-6', '4', '1725', 2242),
(323, 802, 'Weekdays', '1-6', '6', '2300', 2990),
(324, 802, 'Weekdays', '1-6', '8', '2875', 3737),
(325, 803, 'Weekdays', '1-6', '4', '2530', 3289),
(326, 803, 'Weekdays', '1-6', '6', '2990', 3887),
(327, 803, 'Weekdays', '1-6', '8', '3450', 4485),
(331, 814, 'Weekdays', '1-6', '4', '3450', 4485),
(332, 814, 'Weekdays', '1-6', '6', '4600', 5980),
(333, 814, 'Weekdays', '1-6', '8', '5750', 7475),
(350, 808, 'Weekdays', '1-6', '4', '2530', 3289),
(351, 808, 'Weekdays', '1-6', '6', '3105', 4036),
(352, 808, 'Weekdays', '1-6', '8', '3680', 4784),
(371, 823, 'Weekdays', '1-6', '4', '5635', 7325),
(372, 823, 'Weekdays', '1-6', '6', '6785', 8820),
(373, 823, 'Weekdays', '1-6', '8', '7935', 10315),
(380, 826, 'Weekdays', '1-6', '4', '12075', 15697),
(381, 826, 'Weekdays', '1-6', '6', '13800', 17940),
(382, 826, 'Weekdays', '1-6', '8', '14375', 18687),
(413, 833, '1', '2', '3', '4', 5),
(461, 835, 'Weekdays', '1-6', '4', '1380', 1794),
(462, 835, 'Weekdays', '1-6', '6', '1840', 2392),
(463, 835, 'Weekdays', '1-6', '8', '2300', 2990),
(524, 846, 'Weekdays', '1-6', '4', '5750', 7475),
(525, 846, 'Weekdays', '1-6', '6', '7188', 9344),
(526, 846, 'Weekdays', '1-6', '8', '8625', 11212),
(527, 847, 'Weekdays', '1-6', '4', '7044', 9157),
(528, 847, 'Weekdays', '1-6', '6', '8482', 11026),
(529, 847, 'Weekdays', '1-6', '8', '9919', 12894),
(530, 848, '3 days', '1-6', '8', '40250', 52325),
(531, 848, '1 week', '1-6', '8', '80500', 104650),
(542, 14, 'Weekdays', '1-6', '1', '849', 1103),
(543, 14, 'Weekdays', '7-13', '1', '1149', 1493),
(546, 834, 'Weekdays', '1-6', '4', '1350', 1755),
(547, 834, 'Weekdays', '1-6', '6', '1800', 2340),
(548, 834, 'Weekdays', '1-6', '8', '2300', 2990),
(552, 804, 'Weekdays', '1-6', '4', '2300', 2990),
(553, 804, 'Weekdays', '1-6', '6', '2900', 3770),
(554, 804, 'Weekdays', '1-6', '8', '3700', 4810),
(555, 830, 'Weekdays', '1-6', '4', '2250', 2925),
(556, 830, 'Weekdays', '1-6', '6', '2850', 3705),
(557, 830, 'Weekdays', '1-6', '8', '3650', 4745),
(561, 805, 'Weekdays', '1-6', '4', '2950', 3835),
(562, 805, 'Weekdays', '1-6', '6', '3500', 4550),
(563, 805, 'Weekdays', '1-6', '8', '4650', 6045),
(564, 815, 'Weekdays', '1-6', '4', '3300', 4290),
(565, 815, 'Weekdays', '1-6', '6', '3600', 4680),
(566, 815, 'Weekdays', '1-6', '8', '5300', 6890),
(567, 806, 'Weekdays', '1-6', '4', '3650', 4745),
(568, 806, 'Weekdays', '1-6', '6', '4950', 6435),
(569, 806, 'Weekdays', '1-6', '8', '5850', 7605),
(576, 832, 'Weekdays', '1-6', '4', '3950', 5135),
(577, 832, 'Weekdays', '1-6', '6', '5400', 7020),
(578, 832, 'Weekdays', '1-6', '8', '6900', 8970),
(579, 831, 'Weekdays', '1-6', '4', '4900', 6370),
(580, 831, 'Weekdays', '1-6', '6', '6200', 8060),
(581, 831, 'Weekdays', '1-6', '8', '7650', 9945),
(582, 842, 'Weekdays', '1-6', '4', '5000', 6500),
(583, 842, 'Weekdays', '1-6', '6', '6600', 8580),
(584, 842, 'Weekdays', '1-6', '8', '7600', 9880),
(585, 818, 'Weekdays', '1-6', '4', '3380', 4394),
(586, 818, 'Weekdays', '1-6', '6', '3950', 5135),
(587, 818, 'Weekdays', '1-6', '8', '4750', 6175),
(588, 819, 'Weekdays', '1-6', '4', '4750', 6175),
(589, 819, 'Weekdays', '1-6', '6', '5300', 6890),
(590, 819, 'Weekdays', '1-6', '8', '5900', 7670),
(591, 820, 'Weekdays', '1-6', '4', '5400', 7020),
(592, 820, 'Weekdays', '1-6', '6', '6650', 8645),
(593, 820, 'Weekdays', '1-6', '8', '7880', 10244),
(594, 838, 'Weekdays', '1-6', '4', '3050', 3965),
(595, 838, 'Weekdays', '1-6', '6', '3750', 4875),
(596, 838, 'Weekdays', '1-6', '8', '4400', 5720),
(597, 840, 'Weekdays', '1-6', '4', '7880', 10244),
(598, 840, 'Weekdays', '1-6', '6', '10350', 13455),
(599, 840, 'Weekdays', '1-6', '8', '12830', 16679),
(600, 810, 'Weekdays', '1-6', '4', '4750', 6175),
(601, 810, 'Weekdays', '1-6', '6', '6300', 8190),
(602, 810, 'Weekdays', '1-6', '8', '7450', 9685),
(603, 821, 'Weekdays', '1-6', '4', '9900', 12870),
(604, 821, 'Weekdays', '1-6', '6', '11820', 15366),
(605, 821, 'Weekdays', '1-6', '8', '14180', 18434),
(609, 844, 'Weekdays', '1-6', '4', '7880', 10244),
(610, 844, 'Weekdays', '1-6', '6', '10350', 13455),
(611, 844, 'Weekdays', '1-6', '8', '12830', 16679),
(612, 841, 'Weekdays', '1-6', '4', '7500', 9750),
(613, 841, 'Weekdays', '1-6', '6', '9000', 11700),
(614, 841, 'Weekdays', '1-6', '8', '11250', 14625),
(618, 839, 'Weekdays', '1-6', '4', '10700', 13910),
(619, 839, 'Weekdays', '1-6', '6', '12380', 16094),
(620, 839, 'Weekdays', '1-6', '8', '1470', 1911),
(621, 825, 'Weekdays', '1-6', '4', '7600', 9880),
(622, 825, 'Weekdays', '1-6', '6', '8900', 11570),
(623, 825, 'Weekdays', '1-6', '8', '11250', 14625),
(624, 827, 'Weekdays', '1-6', '4', '10700', 13910),
(625, 827, 'Weekdays', '1-6', '6', '12950', 16835),
(626, 827, 'Weekdays', '1-6', '8', '15200', 19760),
(627, 837, 'M-T', '1-6', '4', '3700', 4810),
(628, 837, 'F-S', '1-6', '4', '4200', 5460),
(629, 837, 'M-T', '1-6', '6', '5100', 6630),
(630, 837, 'F-S', '1-6', '6', '5600', 7280),
(631, 837, 'M-T', '1-6', '8', '6400', 8320),
(632, 837, 'F-S', '1-6', '8', '6900', 8970),
(633, 836, 'Weekdays', '1-6', '4', '2500', 3250),
(634, 836, 'Weekdays', '1-6', '6', '3100', 4030),
(635, 836, 'Weekdays', '1-6', '8', '3600', 4680),
(636, 812, 'Weekdays', '1-6', '4', '4200', 5460),
(637, 812, 'Weekdays', '1-6', '6', '5600', 7280),
(638, 812, 'Weekdays', '1-6', '8', '6800', 8840),
(639, 817, 'Weekdays', '1-6', '4', '3800', 4940),
(640, 817, 'Weekdays', '1-6', '6', '4800', 6240),
(641, 817, 'Weekdays', '1-6', '8', '5600', 7280),
(642, 843, 'Weekdays', '1-6', '4', '3500', 4550),
(643, 843, 'Weekdays', '1-6', '6', '4500', 5850),
(644, 843, 'Weekdays', '1-6', '8', '5300', 6890),
(645, 845, 'Weekdays', '1-6', '4', '9000', 11700),
(646, 845, 'Weekdays', '1-6', '6', '10700', 13910),
(647, 845, 'Weekdays', '1-6', '8', '12380', 16094);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(100) NOT NULL,
  `service_id` int(100) NOT NULL,
  `service_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_id`, `service_name`) VALUES
(175, 828, 'Cooler'),
(176, 828, 'Ice'),
(177, 828, 'Sodas'),
(178, 828, 'Water'),
(179, 828, 'Bluetooth Sound System'),
(180, 828, 'Large floating mat'),
(204, 829, 'one'),
(205, 829, 'Two'),
(206, 829, 'three'),
(211, 15, 'Entertainment System'),
(212, 15, 'Safety & Security Features'),
(213, 15, 'Modern Kitchen'),
(214, 15, 'Cleaning Services'),
(215, 16, 'Entertainment System'),
(216, 16, 'Safety & Security Features'),
(217, 16, 'Modern Kitchen'),
(218, 16, 'Cleaning Services'),
(219, 17, 'Entertainment System'),
(220, 17, 'Safety & Security Features'),
(221, 17, 'Modern Kitchen'),
(222, 17, 'Cleaning Services'),
(223, 19, 'Entertainment System'),
(224, 19, 'Safety & Security Features'),
(225, 19, 'Modern Kitchen'),
(226, 19, 'Cleaning Services'),
(227, 21, 'Entertainment System'),
(228, 21, 'Safety & Security Features'),
(229, 21, 'Modern Kitchen'),
(230, 21, 'Cleaning Services'),
(231, 23, 'Entertainment System'),
(232, 23, 'Safety & Security Features'),
(233, 23, 'Modern Kitchen'),
(234, 23, 'Cleaning Services'),
(235, 24, 'Entertainment System'),
(236, 24, 'Safety & Security Features'),
(237, 24, 'Modern Kitchen'),
(238, 24, 'Cleaning Services'),
(239, 26, 'Entertainment System'),
(240, 26, 'Safety & Security Features'),
(241, 26, 'Modern Kitchen'),
(242, 26, 'Cleaning Services'),
(243, 27, 'Entertainment System'),
(244, 27, 'Safety & Security Features'),
(245, 27, 'Modern Kitchen'),
(246, 27, 'Cleaning Services'),
(247, 28, 'Entertainment System'),
(248, 28, 'Safety & Security Features'),
(249, 28, 'Modern Kitchen'),
(250, 28, 'Cleaning Services'),
(285, 824, 'Cooler/Ice/Sodas'),
(286, 824, 'Water and Towels'),
(287, 824, 'Bluetooth Sound System'),
(288, 824, 'Jacuzzi'),
(296, 822, 'Cooler/Ice/Sodas'),
(297, 822, 'Water and Towels'),
(298, 822, 'Bluetooth Sound System'),
(299, 822, 'Jacuzzi'),
(300, 822, 'Float Mat'),
(301, 822, 'Paddle Boards'),
(302, 822, 'E Foil'),
(303, 822, 'Snorkel Gear'),
(345, 816, 'Cooler/Ice/Sodas'),
(346, 816, 'Water and Towels'),
(347, 816, 'Bluetooth Sound System'),
(348, 816, 'Large floating mat'),
(349, 816, 'Dinghy'),
(362, 813, 'Cooler/Ice/Sodas'),
(363, 813, 'Water and Towels'),
(364, 813, 'Bluetooth Sound System'),
(365, 813, 'Jacuzzi'),
(366, 813, 'Jetski'),
(367, 813, 'Wet bar'),
(368, 813, 'BBQ'),
(369, 813, 'Dinghy'),
(370, 813, 'Island'),
(371, 813, 'Water slide'),
(376, 811, 'Cooler'),
(377, 811, 'Ice'),
(378, 811, 'Sodas'),
(379, 811, 'Water and Towels'),
(380, 811, 'Bluetooth Sound System'),
(381, 811, '2 Jetskis'),
(382, 811, 'Wakeboard'),
(383, 811, 'Paddle boards'),
(384, 811, 'Snorkeling equipment'),
(395, 809, 'Cooler'),
(396, 809, 'Ice'),
(397, 809, 'Sodas'),
(398, 809, 'Water'),
(399, 809, 'Bluetooth Sound System'),
(400, 809, 'Jetski'),
(401, 809, 'Floating carpet'),
(402, 809, 'Floating seats'),
(403, 809, 'Inflatable Paddle Board'),
(408, 807, 'Cooler/Ice/Sodas'),
(409, 807, 'Water'),
(410, 807, 'Bluetooth Sound System'),
(437, 29, 'Entertainment System'),
(438, 29, 'Safety & Security Features'),
(439, 29, 'Modern Kitchen'),
(440, 29, 'Cleaning Services'),
(441, 33, 'Entertainment System'),
(442, 33, 'Safety & Security Features'),
(443, 33, 'Modern Kitchen'),
(444, 33, 'Cleaning Services'),
(445, 31, 'Entertainment System'),
(446, 31, 'Safety & Security Features'),
(447, 31, 'Modern Kitchen'),
(448, 31, 'Cleaning Services'),
(449, 30, 'Entertainment System'),
(450, 30, 'Safety & Security Features'),
(451, 30, 'Modern Kitchen'),
(452, 30, 'Cleaning Services'),
(453, 34, 'Entertainment System'),
(454, 34, 'Safety & Security Features'),
(455, 34, 'Modern Kitchen'),
(456, 34, 'Cleaning Services'),
(457, 35, 'Entertainment System'),
(458, 35, 'Safety & Security Features'),
(459, 35, 'Modern Kitchen'),
(460, 35, 'Cleaning Services'),
(461, 37, 'Entertainment System'),
(462, 37, 'Safety & Security Features'),
(463, 37, 'Modern Kitchen'),
(464, 37, 'Cleaning Services'),
(465, 38, 'Entertainment System'),
(466, 38, 'Safety & Security Features'),
(467, 38, 'Modern Kitchen'),
(468, 38, 'Cleaning Services'),
(469, 39, 'Entertainment System'),
(470, 39, 'Safety & Security Features'),
(471, 39, 'Modern Kitchen'),
(472, 39, 'Cleaning Services'),
(473, 40, 'Entertainment System'),
(474, 40, 'Safety & Security Features'),
(475, 40, 'Modern Kitchen'),
(476, 40, 'Cleaning Services'),
(477, 41, 'Entertainment System'),
(478, 41, 'Safety & Security Features'),
(479, 41, 'Modern Kitchen'),
(480, 41, 'Cleaning Services'),
(481, 42, 'Entertainment System'),
(482, 42, 'Safety & Security Features'),
(483, 42, 'Modern Kitchen'),
(484, 42, 'Cleaning Services'),
(485, 43, 'Entertainment System'),
(486, 43, 'Safety & Security Features'),
(487, 43, 'Modern Kitchen'),
(488, 43, 'Cleaning Services'),
(489, 44, 'Entertainment System'),
(490, 44, 'Safety & Security Features'),
(491, 44, 'Modern Kitchen'),
(492, 44, 'Cleaning Services'),
(493, 45, 'Entertainment System'),
(494, 45, 'Safety & Security Features'),
(495, 45, 'Modern Kitchen'),
(496, 45, 'Cleaning Services'),
(497, 46, 'Entertainment System'),
(498, 46, 'Safety & Security Features'),
(499, 46, 'Modern Kitchen'),
(500, 46, 'Cleaning Services'),
(501, 47, 'Entertainment System'),
(502, 47, 'Safety & Security Features'),
(503, 47, 'Modern Kitchen'),
(504, 47, 'Cleaning Services'),
(530, 48, 'Entertainment System'),
(531, 48, 'Safety & Security Features'),
(532, 48, 'Modern Kitchen'),
(533, 48, 'Cleaning Services'),
(534, 49, 'Entertainment System'),
(535, 49, 'Safety & Security Features'),
(536, 49, 'Modern Kitchen'),
(537, 49, 'Cleaning Services'),
(538, 51, 'Entertainment System'),
(539, 51, 'Safety & Security Features'),
(540, 51, 'Modern Kitchen'),
(541, 51, 'Cleaning Services'),
(542, 52, 'Entertainment System'),
(543, 52, 'Safety & Security Features'),
(544, 52, 'Modern Kitchen'),
(545, 52, 'Cleaning Services'),
(546, 53, 'Entertainment System'),
(547, 53, 'Safety & Security Features'),
(548, 53, 'Modern Kitchen'),
(549, 53, 'Cleaning Services'),
(550, 54, 'Entertainment System'),
(551, 54, 'Safety & Security Features'),
(552, 54, 'Modern Kitchen'),
(553, 54, 'Cleaning Services'),
(554, 55, 'Entertainment System'),
(555, 55, 'Safety & Security Features'),
(556, 55, 'Modern Kitchen'),
(557, 55, 'Cleaning Services'),
(558, 79, 'Entertainment System'),
(559, 79, 'Safety & Security Features'),
(560, 79, 'Modern Kitchen'),
(561, 79, 'Cleaning Services'),
(562, 800, 'Entertainment System'),
(563, 800, 'Safety & Security Features'),
(564, 800, 'Modern Kitchen'),
(565, 800, 'Cleaning Services'),
(566, 801, 'Entertainment System'),
(567, 801, 'Safety & Security Features'),
(568, 801, 'Modern Kitchen'),
(569, 801, 'Cleaning Services'),
(596, 802, 'Cooler/Ice/Sodas'),
(597, 802, 'Water'),
(598, 802, 'Bluetooth Sound System'),
(599, 802, 'Large floating mat'),
(600, 803, 'Cooler/Ice/Sodas'),
(601, 803, 'Water & Towels'),
(602, 803, 'Bluetooth Sound System & Party Lights'),
(603, 803, 'Large floating mat'),
(604, 803, 'Dinghy'),
(613, 814, 'Cooler/Ice/Sodas'),
(614, 814, 'Water and Towels'),
(615, 814, 'Bluetooth Sound System'),
(616, 814, 'Starlink'),
(617, 814, 'Led lights'),
(618, 814, 'Large floating mat'),
(619, 814, 'Dinghy'),
(620, 814, 'Floating pool'),
(649, 808, 'Cooler/Ice/Sodas'),
(650, 808, 'Water'),
(651, 808, 'Bluetooth Sound System'),
(652, 808, 'Large floating mat'),
(690, 823, 'Cooler/Ice/Sodas'),
(691, 823, 'Water and Towels'),
(692, 823, 'Bluetooth Sound System'),
(693, 823, '2 Jetskis'),
(694, 823, 'Wakeboard'),
(695, 823, 'Paddle boards'),
(696, 823, 'Snorkeling equipment'),
(706, 826, 'Cooler/Ice/Sodas'),
(707, 826, 'Water and Towels'),
(708, 826, 'Bluetooth Sound System'),
(709, 826, 'Jacuzzi'),
(710, 826, 'Jetski'),
(711, 826, 'Wet bar'),
(712, 826, 'BBQ'),
(713, 826, 'Dinghy'),
(714, 826, 'Island'),
(715, 826, 'Water slide'),
(765, 833, 'one'),
(766, 833, 'Tow'),
(767, 833, 'three'),
(807, 835, 'Cooler/Ice/Sodas/Water & Towels'),
(808, 835, 'Bluetooth Sound System & Party Lights'),
(809, 835, 'Large floating mat'),
(918, 846, 'Cooler/ Ice/ Sodas/ Water and Towels'),
(919, 846, 'Bluetooth Sound System/ Starlink/ Led lights'),
(920, 846, '2 Standup Paddle Boards/ Large floating mat/ Dinghy/ Floating pool/ Fishing gear'),
(921, 847, 'Cooler/ Ice/ Sodas/ Water and Towels'),
(922, 847, 'Bluetooth Sound System/ Starlink/ Led lights'),
(923, 847, '2 Sea bobs/ 2 Stand-up paddleboards/ Pull-behind tube/ Fishing gear/ Snorkel gear/ Floating mat/ Noo'),
(924, 848, 'Cooler/ Ice/ Sodas/ Water and Towels'),
(925, 848, 'Bluetooth Sound System/ Starlink/ Led lights'),
(926, 848, 'Jetski/ Floating carpet/ Floating seats/ Inflatable Paddle Board'),
(942, 14, 'Entertainment System'),
(943, 14, 'Safety & Security Features'),
(944, 14, 'Modern Kitchen'),
(945, 14, 'Cleaning Services'),
(952, 834, 'Cooler/Ice/Sodas/Water & Towels'),
(953, 834, 'Bluetooth Sound System & Party Lights'),
(954, 834, 'Large floating mat'),
(963, 804, 'Cooler/Ice/Sodas'),
(964, 804, 'Water and Towels'),
(965, 804, 'Bluetooth Sound System'),
(966, 804, 'Starlink'),
(967, 804, 'Led lights'),
(968, 804, 'Large floating mat'),
(969, 804, 'Dinghy'),
(970, 804, 'Floating pool'),
(971, 830, 'Cooler/Ice/Sodas'),
(972, 830, 'Water and Towels'),
(973, 830, 'Bluetooth Sound System'),
(974, 830, 'Large floating mat'),
(979, 805, 'Cooler/Ice/Sodas'),
(980, 805, 'Water and Towels'),
(981, 805, 'Bluetooth Sound System'),
(982, 805, 'Floating carpet and inflatable island'),
(983, 815, 'Cooler/Ice/Sodas'),
(984, 815, 'Water and Towels'),
(985, 815, 'Bluetooth Sound System'),
(986, 815, 'Large floating mat'),
(987, 806, 'Cooler/Ice/Sodas'),
(988, 806, 'Water and Towels'),
(989, 806, 'Bluetooth Sound System'),
(990, 806, 'Large floating mat'),
(991, 806, 'Dinghy'),
(999, 832, 'Cooler/Ice/Sodas'),
(1000, 832, 'Water'),
(1001, 832, 'Bluetooth Sound System'),
(1002, 831, 'Cooler/Ice/Sodas'),
(1003, 831, 'Water and Towels'),
(1004, 831, 'Bluetooth Sound System'),
(1005, 831, 'Floating carpet and inflatable island'),
(1006, 842, 'Cooler/ Ice/ Sodas/ Water'),
(1007, 842, 'Bluetooth Sound System'),
(1008, 842, '2x paddle-boards & floating mat (soon seabob included)'),
(1009, 818, 'Cooler/Ice/Sodas'),
(1010, 818, 'Water'),
(1011, 818, 'Bluetooth Sound System'),
(1012, 819, 'Cooler/Ice/Sodas'),
(1013, 819, 'Water'),
(1014, 819, 'Bluetooth Sound System'),
(1015, 819, 'Jetski'),
(1016, 819, 'Floating carpet'),
(1017, 819, 'Floating seats'),
(1018, 819, 'Inflatable Paddle Board'),
(1019, 820, 'Cooler/Ice/Sodas'),
(1020, 820, 'Water and Towels'),
(1021, 820, 'Bluetooth Sound System'),
(1022, 838, 'Cooler/ Ice/ Sodas/ Water & Towels'),
(1023, 838, 'Large floating mat/ Seabobs (additional fee)'),
(1024, 840, 'Cooler/ Ice/ Sodas/ Water and Towels'),
(1025, 840, 'Bluetooth Sound System'),
(1026, 810, 'Cooler'),
(1027, 810, 'Ice'),
(1028, 810, 'Sodas'),
(1029, 810, 'Water and Towels'),
(1030, 810, 'Bluetooth Sound System'),
(1031, 810, 'Jacuzzi'),
(1032, 810, 'Float Mat'),
(1033, 810, 'Paddle Boards'),
(1034, 810, 'E Foil'),
(1035, 810, 'Snorkel Gear'),
(1036, 821, 'Cooler/Ice/Sodas'),
(1037, 821, 'Water and Towels'),
(1038, 821, 'Bluetooth Sound System'),
(1039, 821, 'Jetski'),
(1040, 821, 'Seabob'),
(1041, 821, '2 paddle boards'),
(1042, 821, 'Snorkeling equipment'),
(1043, 821, 'Big Floating matt'),
(1046, 844, 'Cooler/ Ice/ Sodas/ Water and Towels'),
(1047, 844, 'Bluetooth Sound System'),
(1048, 841, 'Cooler/ Ice/ Sodas/ Water and Towels'),
(1049, 841, 'Bluetooth Sound System'),
(1050, 841, 'Jetskis (2)/ Floating Mat/ Tube/ Paddle Board/ Fishing Equipment'),
(1054, 839, 'Cooler/ Ice/ Sodas/ Water and Towels'),
(1055, 839, 'Bluetooth Sound System'),
(1056, 839, '2 Jetskis'),
(1057, 825, 'Cooler/Ice/Sodas'),
(1058, 825, 'Water and Towels'),
(1059, 825, 'Bluetooth Sound System'),
(1060, 825, '2 Jet Skis'),
(1061, 825, '2 floating Carpets'),
(1062, 827, 'Cooler/Ice/Sodas'),
(1063, 827, 'Water and Towels'),
(1064, 827, 'Bluetooth Sound System'),
(1065, 827, 'Jetski'),
(1066, 827, '16’ Tender'),
(1067, 827, 'Jacuzzi'),
(1068, 827, 'Water Slide (*8 hours or more only*)'),
(1069, 827, 'Fiesta Island'),
(1070, 827, 'Smart TV’s in every room'),
(1071, 827, 'Bluetooth sound system'),
(1072, 827, 'Snorkeling gear'),
(1073, 827, 'Paddle boards'),
(1074, 827, 'Direct TV'),
(1075, 827, 'Seabobs'),
(1076, 827, 'Wifi - Starlink'),
(1077, 837, 'Cooler/ Ice/ Sodas/ Water and Towels'),
(1078, 837, 'Floating mat'),
(1079, 836, 'Cooler/Ice/Sodas/Water & Towels'),
(1080, 836, 'Bluetooth Sound System & Party Lights'),
(1081, 836, 'Large floating mat/Dinghy'),
(1082, 812, 'Cooler/Ice/Sodas'),
(1083, 812, 'Water and Towels'),
(1084, 812, 'Bluetooth Sound System'),
(1085, 812, 'Jacuzzi'),
(1086, 817, 'Cooler/Ice/Sodas'),
(1087, 817, 'Water'),
(1088, 817, 'Bluetooth Sound System'),
(1089, 817, '2 Jetski ($400 each)'),
(1090, 817, 'Water Slide ($500)'),
(1091, 817, 'E-Hydrofoil ($450)'),
(1092, 843, 'Cooler/ Ice/ Sodas/ Water and Towels'),
(1093, 843, 'Bluetooth Sound System'),
(1094, 843, '2 Seabobs/ Floating carpet/ Snorkeling gear'),
(1095, 845, 'Cooler/ Ice/ Sodas/ Water and Towels'),
(1096, 845, 'Bluetooth Sound System'),
(1097, 845, '2 Sunchill pads/ Jet skis/ 2 floating Carpets');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservations`
--

CREATE TABLE `tbl_reservations` (
  `id` int(20) NOT NULL,
  `token` varchar(50) NOT NULL,
  `uid` int(10) NOT NULL,
  `ucount` int(10) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_reservations`
--

INSERT INTO `tbl_reservations` (`id`, `token`, `uid`, `ucount`, `rdate`, `status`, `comments`, `bdate`) VALUES
(1, 'token', 1, 2, '2024-07-03', 'status', 'message', '2024-07-01 23:14:46'),
(2, 'token', 2, 1, '2024-07-06', 'status', 'message', '2024-07-01 23:15:31'),
(3, 'token', 3, 2, '2024-07-07', 'status', 'message', '2024-07-01 23:17:02'),
(4, 'token', 4, 2, '2024-07-09', 'status', 'message', '2024-07-01 23:18:35'),
(5, 'token', 5, 2, '2024-07-17', 'status', 'message', '2024-07-01 23:31:47'),
(6, 'token', 6, 2, '2024-07-14', 'status', 'message', '2024-07-10 16:15:33'),
(7, 'token', 7, 10, '2024-07-16', 'status', 'message', '2024-07-15 14:15:39'),
(8, 'token', 8, 10, '2024-07-16', 'status', 'message', '2024-07-15 16:06:17'),
(9, 'token', 9, 2, '2024-07-17', 'status', 'message', '2024-07-15 16:07:34'),
(10, 'token', 10, 6, '2024-07-18', 'status', 'message', '2024-07-15 16:10:02'),
(11, 'token', 11, 10, '2024-07-24', 'status', 'message', '2024-07-15 20:11:13'),
(12, 'token', 12, 10, '2024-07-24', 'status', 'message', '2024-07-15 22:00:27'),
(13, 'token', 13, 10, '2024-07-22', 'status', 'message', '2024-07-15 22:10:27'),
(14, 'token', 14, 50, '2024-07-19', 'status', 'message', '2024-07-17 20:46:53'),
(15, 'token', 15, 51, '2024-07-19', 'status', 'message', '2024-07-17 22:59:17'),
(16, 'token', 16, 51, '2024-07-18', 'status', 'message', '2024-07-17 23:01:42'),
(17, 'token', 17, 10, '2024-07-23', 'status', 'message', '2024-07-18 22:29:42'),
(18, 'token', 18, 10, '2024-07-26', 'status', 'message', '2024-07-18 22:31:35'),
(19, 'token', 19, 10, '2024-07-29', 'status', 'message', '2024-07-18 22:32:32'),
(20, 'token', 20, 10, '2024-07-29', 'status', 'message', '2024-07-18 22:35:27'),
(21, 'token', 21, 654654, '6654', 'status', 'message', '2024-07-18 22:39:32'),
(22, 'token', 22, 5, '2024-07-23', 'status', 'message', '2024-07-18 22:45:50'),
(23, 'token', 23, 10, '2024-07-30', 'status', 'message', '2024-07-18 22:57:16'),
(24, 'token', 24, 10, '2024-07-28', 'status', 'message', '2024-07-18 22:57:49'),
(25, 'token', 25, 6, '2024-07-30', 'status', 'message', '2024-07-18 23:07:40'),
(26, 'token', 26, 6, '2024-07-28', 'status', 'message', '2024-07-18 23:15:08'),
(27, 'token', 27, 10, '2024-07-25', 'status', 'message', '2024-07-19 19:48:01'),
(28, 'token', 28, 23, '2024-07-30', 'status', 'message', '2024-07-22 16:31:55'),
(29, 'token', 29, 10, '2024-07-30', 'status', 'message', '2024-07-22 16:40:45'),
(30, 'token', 30, 13, '2024-07-29', 'status', 'message', '2024-07-22 17:39:09'),
(31, 'token', 31, 10, '2024-07-31', 'status', 'message', '2024-07-22 18:10:18'),
(32, 'token', 32, 10000, '', 'status', 'message', '2024-07-23 23:05:02'),
(33, 'token', 33, 50000, '2024-07-26', 'status', 'message', '2024-07-24 22:34:45'),
(34, 'token', 34, 50000, '2024-07-26', 'status', 'message', '2024-07-24 22:35:10'),
(35, 'token', 35, 50000, '2024-07-26', 'status', 'message', '2024-07-24 22:35:49'),
(36, 'token', 36, 50000, '2024-07-26', 'status', 'message', '2024-07-24 22:36:02'),
(37, 'token', 37, 500000, '2024-07-26', 'status', 'message', '2024-07-24 22:36:21'),
(38, 'token', 38, 500000, '2024-07-26', 'status', 'message', '2024-07-24 22:37:03'),
(39, 'token', 39, 500000, '2024-07-26', 'status', 'message', '2024-07-24 22:37:23'),
(40, 'token', 40, 500000, '2024-07-26', 'status', 'message', '2024-07-24 22:38:04'),
(41, 'token', 41, 123, '2024-07-28', 'status', 'message', '2024-07-24 23:06:37'),
(42, 'token', 42, 123, '2024-07-28', 'status', 'message', '2024-07-24 23:20:12'),
(43, 'token', 43, 123, '2024-07-28', 'status', 'message', '2024-07-24 23:22:54'),
(44, 'token', 44, 123, '2024-07-28', 'status', 'message', '2024-07-24 23:24:42'),
(45, 'token', 45, 123, '2024-07-28', 'status', 'message', '2024-07-24 23:25:09'),
(46, 'token', 46, 123, '2024-07-28', 'status', 'message', '2024-07-24 23:26:24'),
(47, 'token', 47, 13, '2024-07-28', 'status', 'message', '2024-07-25 14:33:00'),
(48, 'token', 48, 13, '2024-07-26', 'status', 'message', '2024-07-25 16:04:01'),
(49, 'token', 49, 10, '2024-07-30', 'status', 'message', '2024-07-25 18:38:10'),
(50, 'token', 50, 5, '2024-07-31', 'status', 'message', '2024-07-27 19:09:49'),
(51, 'token', 51, 5, '2024-06-29', 'status', 'message', '2024-12-06 23:17:17'),
(52, 'token', 52, 6, '2024/04/20', 'status', 'message', '2025-01-09 18:56:51'),
(53, 'token', 53, 2, '2025-01-14', 'status', 'message', '2025-01-13 19:01:41'),
(54, 'token', 54, 2, '2025-01-15', 'status', 'message', '2025-01-13 19:30:56'),
(55, 'token', 55, 2, '2025-01-17', 'status', 'message', '2025-01-16 19:13:40'),
(56, 'token', 56, 2, '2025-01-18', 'status', 'message', '2025-01-16 19:24:29'),
(57, 'token', 57, 3, '2025-01-19', 'status', 'message', '2025-01-16 19:28:56'),
(58, 'token', 58, 2, '2025-01-18', 'status', 'message', '2025-01-16 19:52:41'),
(59, 'token', 59, 2, '2025-01-24', 'status', 'message', '2025-01-16 20:02:58'),
(60, 'token', 60, 2, '2025-01-24', 'status', 'message', '2025-01-16 20:25:56'),
(61, 'token', 61, 2, '2025-01-30', 'status', 'message', '2025-01-16 20:30:59'),
(62, 'token', 1, 2, '2025-01-17', 'status', 'message', '2025-01-16 20:37:31'),
(63, 'token', 2, 4, '2025-01-19', 'status', 'message', '2025-01-16 20:39:15'),
(64, 'token', 3, 5, '2025-01-21', 'status', 'message', '2025-01-16 20:40:55'),
(65, 'token', 4, 2, '2025-01-28', 'status', 'message', '2025-01-16 20:47:15'),
(66, 'token', 1, 2, '2025-01-18', 'status', 'message', '2025-01-16 22:19:25'),
(67, 'token', 2, 3, '2025-01-19', 'status', 'message', '2025-01-16 22:20:47'),
(68, 'token', 3, 3, '2025-01-21', 'status', 'message', '2025-01-16 22:21:38'),
(69, 'token', 5, 3, '2025-01-21', 'status', 'message', '2025-01-17 04:02 AM'),
(70, 'token', 1, 1, '2025-01-20', 'status', 'message', '2025-01-17 04:04 AM'),
(71, 'token', 2, 2, '2025-01-22', 'status', 'message', '2025-01-17 04:05 AM'),
(72, 'token', 3, 3, '2025-01-25', 'status', 'message', '2025-01-17 04:07 AM'),
(73, 'token', 4, 2, '2025-01-22', 'status', 'message', '2025-01-17 20:41 PM'),
(74, 'token', 5, 3, '2025-01-22', 'status', 'message', '2025-01-17 20:49 PM'),
(75, 'token', 1, 2, '2025-01-19', 'status', 'message', '2025-01-17 21:09 PM'),
(76, 'token', 2, 3, '2025-01-21', 'status', 'message', '2025-01-17 21:10 PM'),
(77, 'token', 3, 4, '2025-01-22', 'status', 'message', '2025-01-17 21:11 PM'),
(78, 'token', 4, 2, '2025-01-31', 'status', 'message', '2025-01-17 23:32 PM'),
(79, 'token', 5, 3, '2025-01-28', 'status', 'message', '2025-01-17 23:35 PM'),
(80, 'token', 6, 2, '2025-01-28', 'status', 'message', '2025-01-17 23:37 PM'),
(81, 'token', 7, 2, '2025-01-20', 'status', 'message', '2025-01-17 23:51 PM'),
(82, 'token', 8, 2, '2025-01-26', 'status', 'message', '2025-01-18 00:03 AM'),
(83, 'token', 1, 1, '2025-01-19', 'status', 'message', '2025-01-18 00:13 AM'),
(84, 'token', 2, 4, '2025-01-21', 'status', 'message', '2025-01-18 00:15 AM'),
(85, 'token', 3, 3, '2025-01-23', 'status', 'message', '2025-01-18 00:23 AM'),
(86, 'token', 4, 4, '2025-01-25', 'status', 'message', '2025-01-18 01:24 AM'),
(87, 'token', 5, 3, '2025-01-26', 'status', 'message', '2025-01-18 01:29 AM'),
(88, 'token', 6, 2, '2025-01-28', 'status', 'message', '2025-01-18 04:50 AM'),
(89, 'token', 7, 2, '2025-01-29', 'status', 'message', '2025-01-18 04:52 AM'),
(90, 'token', 8, 2, '2025-01-19', 'status', 'message', '2025-01-18 20:08 PM'),
(91, 'token', 9, 4, '2025-01-29', 'status', 'message', '2025-01-21 02:50 AM'),
(92, 'token', 10, 2, '2025-03-22', 'status', 'message', '2025-03-22 20:55 PM'),
(93, 'token', 11, 2, '2025-03-22', 'status', 'message', '2025-03-22 21:02 PM'),
(94, 'token', 12, 2, '2025-03-23', 'status', 'message', '2025-03-22 21:04 PM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_yachtna`
--

CREATE TABLE `tbl_yachtna` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `yachtname` varchar(250) NOT NULL,
  `starttime` varchar(250) NOT NULL,
  `endtime` varchar(250) NOT NULL,
  `bdate` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_yachtna`
--

INSERT INTO `tbl_yachtna` (`id`, `username`, `date`, `reason`, `yachtname`, `starttime`, `endtime`, `bdate`) VALUES
(8, 'raj', '0001-01-01', 'Maintenance', 'asdfasdfasdf', '00:59', '23:59', '2024-07-18 21:26:43'),
(11, 'yacht', '2024-07-31', 'Private Booking', 'Oddyssey', '01:00', '05:00', '2024-07-19 19:50:09'),
(12, 'raj', '2025-01-24', 'Maintenance', 'Motor Yacht', '22:56', '11:56', '2025-01-17 22:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `data_time` datetime NOT NULL DEFAULT current_timestamp(),
  `otp` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `phone`, `gender`, `address`, `country`, `data_time`, `otp`) VALUES
(1, 'raj', 'raj@gmail.com', 'admin', '$2y$10$frmtGE0N3KgONXwukJsYEOwvKji3VqC9ipnNXvKq6vsgU352T8N1i', '8956231245', 'male', 'abc', 'India', '2024-07-02 04:40:25', '934450'),
(3, 'anjali', 'anjali@gmail.com', 'user', '$2y$10$jOEecvh6dC8SyYU797rZu.UpLC/IVmRF3J1enVLSj0zk3apO.o/Ki', '8527419630', 'female', 'abc', 'India', '2024-07-02 04:42:32', ''),
(17, 'pradeep', 'kolipradeep15@gmail.com', 'manager', '123123', '7894561230', 'male', 'abc', 'USA', '2024-07-12 00:13:40', NULL),
(18, 'pranali', 'pranali@gmail.com', 'manager', '$2y$10$Hl15LiqUn5pj0hmf8grUR.6wkO5UV0UsGb3zrtyZk/.mnTAUOmSOi', '7894561230', 'female', 'abc', 'India', '2024-07-12 21:29:37', ''),
(19, 'pranali', 'pranali@gmail.com', 'manager', '$2y$10$nvJCZv5KbXWsFY4Bz4hzDOsaoJiapKdHRoMJz1wFOJKtMWFvTAtFK', '7894561230', 'female', 'abc', 'India', '2024-07-12 21:29:42', ''),
(20, 'yacht', 'yacht@owner.com', 'manager', '$2y$10$k.vUdRhuK0ffAqvQAl0nX.VBFL15TEvN1zK4y9a74nCzJp4CBFH2u', '01234567890', 'male', 'pathardi', 'USA', '2024-07-15 14:12:19', ''),
(22, 'ScottandTracyEvents', 'info@scottandtracyevents.com', 'manager', '$2y$10$.5gXQqtFQz6pwSdkKR8HU.uyPQ9PAbl9zCWxQo.1CG6DG6FUDze6i', '2068983006', 'female', '5267 Shilshole Ave NW, Seattle, WA 98117', 'USA', '2024-07-18 20:41:11', ''),
(23, 'BMY', 'gatewayreplies@gmail.com', 'manager', '$2y$10$gb8KjlxSAUE4y/9GiuoQ9u5bfnXznj/04zqGTeWfYRbneU40H6bWC', '123456789', 'male', 'Miami', 'USA', '2024-07-29 15:20:39', '808308'),
(27, 'laurent', 'laurent@ycn.miami', 'manager', '$2y$10$odtIWJhg5/gaHYoT/1KQrOJwV7kNL8SKiTaw050uHmU7oHXFPSENq', '01234567890', 'male', 'pathardi', 'India', '2025-01-07 17:09:02', NULL),
(28, 'PradeepK', 'pradeep@gmail.com', 'manager', '$2y$10$Boi/IksyW92pb5DV29PIB.jNolCJAE8UwSUvI5SnA4hfJ72EdB2OW', '7984561230', 'male', 'Nashik', 'USA', '2025-01-18 00:07:19', NULL),
(29, 'Manas', 'manas@gmail.com', 'manager', '$2y$10$gaVNYZqP8byxuu1SXYdAsOHPgx/c5nHLXAuRFBO8JPNsW5M2XeeDa', '789486545', 'male', 'abc', 'India', '2025-01-18 20:46:00', NULL),
(30, 'mansi', 'mansi@gmail.com', 'admin', '$2y$10$3j8Bx8bX5/f8GYsr.CLY3eZwGHmy0zQjElmTSDFkO5h7K1bETzl96', '7889455612', 'female', 'Cidco Nashik', 'India', '2025-02-04 04:25:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE `user_contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `ownerCustomer` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_contact`
--

INSERT INTO `user_contact` (`id`, `name`, `email`, `contact`, `ownerCustomer`, `subject`, `message`) VALUES
(6, 'Matthew Williams', 'futurosalesco@gmail.com', '2144084827', 'Owner', 'Hear What Our Clients Are Saying', 'Hey there!\r\n\r\nWe’ve helped many businesses boost their efficiency through automation. But don’t just take our word for it—hear from our satisfied clients.\r\n\r\nReady to see if automation is right for you? Take our quick quiz!\r\n\r\nhttps://tally.so/r/3N6yBB\r\n\r'),
(9, 'Annett', 'bookmyyacht.us@msn.com', '312747638', 'Owner', 'Invalid URL', 'Morning \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we offer a lifetime warranty so you can be sure your pet is always safe'),
(10, 'Jay', 'fastprocess006@outlook.com', 'Lwkypq vdvolpj', 'Owner', 'Boost Your Operational Efficiency with Our Expert Team', 'Hi,\r\n\r\nThis is Jay. We are a small but experienced team specializing in delivering day-to-day business operational tasks with high-quality support for any department within your organization.\r\n\r\nTake advantage of our flexible hiring options—full-time, par'),
(11, 'Zain', 'projectsexpert222@outlook.com', '419135911', 'Owner', 'Personal Assistant', 'Hi, Are you in need of a personal assistant to streamline your daily business operations and simplify your life? I’m Zain Murt, and I can assist with administrative tasks, marketing, email management, website management, social media, content creation, pr'),
(12, 'Luckey', 'webdesignservices111@outlook.com', '442504925', 'Owner', 'Website designer and developer', 'Hi, This is Lucky, a website designer and developer. In 17 years of my career, I have worked on broad spectrum of technologies like PHP, WordPress, Codeigniter, Laravel, Opencart, Prestashop, Wix, Html, CSS, JavaScript, Drupal, Shopify, magento. I can hel'),
(13, 'Tanu', 'brandbuildingassistance@outlook.com', '4165705147', 'Owner', 'Content Writing Service', 'Hello, I’m Tanu, a HubSpot Certified copywriter and content writer, distinguished as one of the few globally certified in this field. With 8 years of experience, I excel in crafting compelling content across various formats, including blogs, articles, e-c'),
(14, 'Vai', 'hireonline4455@outlook.com', '507844093', 'Owner', 'Content Writing Service', 'Hi, I\'m Vai Michael, a seasoned copywriter and content strategist with over 12 years of experience helping brands like yours create compelling and impactful content. From blog posts and articles to SEO-driven web content, e-commerce product descriptions, '),
(15, 'Mandy', 'creativeteamhire@outlook.com', '7071087717', 'Owner', 'Content Writing Service', 'Hi, I\'m Mandy, a content and copywriter with over 12 years of experience creating content for various industries, including yours. I write blogs, news articles, SEO-friendly web content, product descriptions, business service descriptions, newsletters, br'),
(16, 'Kristen Dyke', 'kristen.dyke@gmail.com', '482773111', 'Owner', 'Dear bookmyyacht.us Webmaster!', 'hi'),
(17, 'Abhi', 'efficientmanage007@outlook.com', '261267944', 'Owner', 'data entry, research, and back office support', 'Hello! I\'m Abhi, a professional with 10 years of experience in data entry, research, and back office support. I’m skilled at understanding and adapting to your process and software. Rates: USD 7/hr–12/hr, with discounts for part/full-time jobs. \r\n\r\nContac'),
(18, 'Matthew Williams', 'futurosalesco@gmail.com', '298452061', 'Owner', 'Unlock Unlimited Potential with Lifetime APIs – No Limits, No Recurring Fees!', 'Hey there,\r\n\r\nImagine never having to worry about hitting API limits or paying recurring fees ever again. Sounds too good to be true? Well, let me introduce you to Zentara\'s game-changing Custom Unlimited Lifetime APIs!\r\n\r\nI’m Matthew Williams, and I’m he'),
(19, 'Ashok', 'webdesignservices111@outlook.com', '7824355259', 'Owner', 'Website designer and developer', 'Hello! If you\'re looking for a professional website developer or a responsive website designer, you\'re in the right place. With 15 years of experience, I specialize in WordPress design and development, full stack development, creating responsive and mobil'),
(20, 'Ayaan', 'projectsexpert222@outlook.com', '694635686', 'Owner', 'Data entry services', 'Need help managing your website? I can upload and update e-commerce products, blogs, news, images, and meta tags. I can also handle order processing, invoicing, shipping, inventory management, income/expenses, reports (daily/weekly/monthly), send individu'),
(21, 'Addy', 'venture4help@outlook.com', '646302453', 'Owner', 'Content Writing Service', 'My name is Addy, and I specialize in writing well-researched content tailored to meet the specific needs of your industry. I conduct thorough research using verified sources to ensure accuracy and reliability, incorporating elements like tables and statis'),
(22, 'Sandy', 'efficientmanage007@outlook.com', '3115008963', 'Owner', 'Part-Time/Hourly based Personal Assistant', 'Are you looking for a personal assistant who can handle your daily business operations and make your life easier? I can help with tasks related to admin, marketing, gathering data from multiple websites, answering emails, website management, social media,'),
(23, 'Vinay', 'web.techdevelopment@outlook.com', '3884169428', 'Owner', 'Website redesign', 'Are you considering a complete redesign of your website to enhance its look and functionality? I specialize in creating modern, mobile-responsive, fast, and SEO-optimized websites that provide a seamless user experience and help convert visitors into clie'),
(24, 'Arin', 'bizassistance008@outlook.com', '9257777245', 'Owner', 'Data Entry @ $6/hour', 'Hello, My name is Arin Shah. I provide data entry services starting at USD 6/hour. I can work as per instructions and follow step-by-step instructions. \r\n\r\nIf you are interested, Please share your requirements at bizassistance008@outlook.com and we can ta'),
(25, 'Maddy', 'businessgrowtogether@outlook.com', '753015222', 'Owner', 'Data Collection Specialist', 'Hi, are you looking to gather information from different websites or sources, like collecting email addresses, compiling competitor data, finding product reviews, gathering contact details of potential leads, collecting data on market trends, researching '),
(26, 'Sam', 'hireonline556600@outlook.com', '28152480', 'Owner', 'Data entry services', 'My name is Sam. I provide data entry services starting from $6 USD per hour. I can handle any computer-related task that is repetitive in nature, such as entering data into software, collecting data, bookkeeping, copy-paste work, uploading content to webs'),
(27, 'Matthew Williams', 'futurosalesco@gmail.com', '4285008', 'Owner', '������ Ready to Go Limitless?', 'Hey there,\r\n\r\nImagine having access to an API that’s not just a tool, but a total game-changer. The Infinite API isn’t just a product—it’s the ultimate key to custom, unlimited, lifetime API access.\r\n\r\nNo more caps. No more limits. Just pure, unstoppable '),
(28, 'Alex Calero', 'alex@deltasmaintenancecleaning.com', '6468600382', 'Owner', 'Cleaning', 'I am local and would love an opportunity to provide you with a professional cleaning quote. We’re working with several facilities in your area and everyone seems to love our work because of our attention to detail. Are you free for a quick 10-minute call '),
(29, 'Sid', 'socialmedia1145@outlook.com', 'Xwvluvgr', 'Owner', 'Enhance Social Media Presence', 'Are you looking to enhance your brand’s social media presence with engaging and consistent content? As a social media specialist, I offer custom posts for platforms like Facebook, Instagram, and LinkedIn, designed to boost engagement and connect with your'),
(30, 'Samir', 'your.assistant23@outlook.com', '391256611', 'Owner', 'Image-to-Text Manual Typing', 'Hey there! Looking for someone who can take text from images, PDFs, or files and organize it into Excel, Word, PPT, or a spreadsheet? I’ve got you covered! Just send over your requirements, and I’ll ensure everything is accurately entered and formatted to'),
(31, 'Matthew Williams', 'futuresalesco@gmail.com', '9591994578', 'Owner', 'Ready to Drive Tens of Thousands of Buyers to Your Website a Day?', 'Hi there,  \r\n\r\nI wanted to share something powerful with you—our revolutionary product, TrafficFuse. \r\n\r\nThis isn’t just any traffic tool. With TrafficFuse, you’ll have access to tens of thousands of visitors, views, and clicks daily to your website. 100K'),
(32, 'Amelia Brown', 'ameliabrown5822@gmail.com', '404818621', 'Owner', 'Youtube Promotion: Grow your subscribers by 700 each month', 'Hi there,\r\n\r\nWe run a YouTube growth service, which increases your number of subscribers both safely and practically.\r\n\r\n- We guarantee to gain you 700-1500+ subscribers per month.\r\n- People subscribe because they are interested in your channel/videos, in'),
(33, 'Gwen Rowley', 'rowley.gwen@gmail.com', '4065749051', 'Owner', 'seeking information', 'I can blast your ad text to millions of website contact forms. One flat rate, never any per click costs. People will read your message just like you\'re reading this one that I just sent through your website contact form now.\r\n\r\nLet me know if you’d like m'),
(34, 'Joanna Riggs', 'joannariggs94@gmail.com', '6732605019', 'Owner', 'Explainer Video for bookmyyacht.us?', 'Hi,\r\n\r\nI just visited bookmyyacht.us and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur videos cost just $195 for a 30 second video ($239 for 60 seconds) and include a full script, voice-over and video.\r\n\r\nI c'),
(35, 'Dean Mitchele', 'deanmitchele@gmail.com', '916-538-9126', 'Owner', 'Quick Question about your site', 'Quick question for you. While visiting your site I noticed a few things that could use some fixing. I would love to volunteer my time to unpack what I saw. Give a call or text 916-538-9126'),
(36, 'Katelyn Raiden', 'katelynraiden@gmail.com', '4140795', 'Owner', 'Youtube Promotion: Grow your subscribers by 700 each month', 'Hi there,\r\n\r\nWe run a YouTube growth service, which increases your number of subscribers both safely and practically.\r\n\r\n- We guarantee to gain you 700-1500+ subscribers per month.\r\n- People subscribe because they are interested in your channel/videos, in'),
(37, 'Katelyn Raiden', 'katelynraiden@gmail.com', '234361124', 'Owner', 'Youtube Promotion: Grow your subscribers by 700 each month', 'Hi there,\r\n\r\nWe run a Youtube growth service, where we can increase your subscriber count safely and practically. \r\n\r\n- Guaranteed: We guarantee to gain you 700-1500 new subscribers each month.\r\n- Real, human subscribers who subscribe because they are int'),
(38, 'Leila Marlay', 'leila.marlay@outlook.com', '542077218', 'Owner', 'Boost bookmyyacht.us\'s traffic with our AI traffic service.', '\r\nNeeding to propel your website traffic? Our AI-enhanced attracts precise website traffic through keywords and regional data from nations to local spots.\r\nDesiring more sales, livelier pages, or expanded digital reach?\r\nWe craft it to your vision. Enjoy '),
(39, 'Shonda McReynolds', 'shonda.mcreynolds@gmail.com', '533460018', 'Owner', 'Ready to Go Viral? Try Our AI-Powered Instagram Boost', 'Get more leads for your bookmyyacht.us website by using AI on Instagram. If you\'re looking to drive more traffic, generate leads, and grow your brand\'s reach, you can get more information and start a free trial here: https://ow.ly/WvaG50VhqpK\r\n\r\nThis is a'),
(40, 'Samara Hulsey', 'hulsey.samara@gmail.com', '527263330', 'Owner', 'Optimize bookmyyacht.us\'s traffic with a no-cost trial.', '\r\nWanting to maximize your website traffic? Our AI-driven system attracts perfect website traffic with keywords and geographic precision from continents to towns.\r\nSeeking more sales, livelier engagement, or greater digital impact?\r\nWe fine-tune it to mat'),
(41, 'Sam Disney', 'sam@247-employee.com', '6991349530', 'Owner', 'People hate cold calls, so I’m reaching out through your contact form.', 'People hate cold calls, so I’m reaching out through your contact form.\r\n\r\nI’d like to offer you an A.I. employee — to work for you free for weeks.\r\n\r\nIt turns lost website visitors into customers. Get results with no risk.\r\n\r\nThis is a limited-time offer:'),
(42, 'Addy', 'venture4help@outlook.com', '2062433345', 'Owner', 'Content Writing', 'I\'m Addy, a content writer specializing in blogs, articles, web copy, and product descriptions. My rate is $28 per 1000 words, with bulk discounts. I also provide AI & originality reports. \r\n\r\nEmail me at Venture4help@outlook.com\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(43, 'Kristeen Lucero', 'lucero.kristeen@outlook.com', '3526900024', 'Owner', 'Unlock Real Growth with AI: Grow Your Instagram Today', 'Get more leads for your bookmyyacht.us website by using AI on Instagram. If you\'re looking to drive more traffic, generate leads, and grow your brand\'s reach, you can get more information and start a free trial here: https://ow.ly/xUwz50VhqpW\r\n\r\nThis is a'),
(44, 'Claudine Hart', 'info@globalwidepr.com', '12345678', 'Owner', 'Boost Your Brand – No-Cost Digital Journal Feature Opportunity', 'Hi,\r\n\r\nYour brand deserves to stand out, and we’re here to help.\r\n\r\nAt Global Wide PR, we specialize in connecting businesses with top media platforms to increase visibility and credibility. As a gesture to get started, we’re offering a free article on Di'),
(45, 'Barbara Alfred', 'alfred.barbara@yahoo.com', '663386454', 'Owner', 'Maximize bookmyyacht.us\'s visitor count potential effortlessly with our free AI tool.', '\r\nNeeding to fuel your website growth? Our AI technology attracts targeted website traffic through keywords and location targeting from continents to city blocks.\r\nLooking for more revenue, engaged website traffic, or greater digital reach?\r\nWe shape it t'),
(46, 'Brian WRIGHT Eng.', 'newsletter@wexxon.com', '7209248652', 'Owner', 'Get the most essential information for your life', 'Please visit https://tinyurl.com/27g52cxz'),
(47, 'Omar Partin', 'partin.omar36@yahoo.com', '7856889852', 'Owner', 'Boost bookmyyacht.us\'s traffic with our AI traffic service.', '\r\nWanting to transform your website traffic flow? Our AI-powered system channels perfect visitors with keywords plus location filters from nations to neighborhoods.\r\nSeeking increased earnings, active website traffic, or greater digital impact?\r\nWe adjust'),
(48, 'Rahul', 'yourvirtualassistant23@outlook.com', '9057016549', 'Owner', 'Virtual Assistant', 'Hi, I\'m Rahul, a Data Entry Virtual Assistant offering accurate and efficient services for just $8/hour. I handle online data entry, e-commerce product uploads, form processing, web scraping, lead generation, Excel formatting, and more. \r\n\r\nEmail me at yo'),
(49, 'Matt Carner', 'mattseowebdigital@gmail.com', '2356895054', 'Customer', 'Re: SEO Report', 'Re: SEO Report\r\n\r\nHello Good Morning,\r\n\r\nI was checking your website and see you have a good design and it looks great, but it\'s not ranking on Google and other major search engines.\r\n\r\nWith your permission I would like to send you a SEO report with price'),
(50, 'Sid', 'socialmedia1145@outlook.com', '724198323', 'Owner', 'Social Media Manager', 'Looking to boost your brand’s social media presence? I create custom posts for Facebook, Instagram, and LinkedIn to enhance engagement and connect with your audience. Get unique, branded content for just $20 per post! \r\n\r\nContact me at socialmedia1145@out'),
(51, 'Hermelinda Borrie', 'borrie.hermelinda@gmail.com', 'Ttyelt', 'Owner', 'Unlock potential opportunities for bookmyyacht.us with a trial of our AI traffic service.', '\r\nReady to amplify your website’s reach? Our AI-powered technology brings tailored website traffic through keywords or place-based filters from continents to streets.\r\nLooking for more revenue, livelier website traffic, or a stronger digital presence?\r\nWe'),
(52, 'Lucinda Stace', 'lucinda.stace@gmail.com', '5145709863', 'Owner', 'Free Trial: TikTok Growth for bookmyyacht.us', 'Ever thought how bookmyyacht.us could leverage TikTok for authentic leads? Our smart AI growth service pinpoints the ideal users—based on hashtags they use and profiles they’re following—to skyrocket your reach and send traffic back to you. We’ve had simi'),
(53, 'Brian WRIGHT Eng.', 'newsletter@wexxon.com', '7209248652', 'Owner', 'Do you want to know the most dangerous days for you?', 'You can encounter days where fatal events will permanently change your life and become your nightmares. There are a lot of such kinds of events you may encounter, and there will be no way to get your life back to a quality before such a fatal event. Such '),
(54, 'Ben Graff', 'ben.graff20@gmail.com', '6994803564', 'Owner', 'Boost bookmyyacht.us\'s traffic with our AI traffic service.', '\r\nEager to drive your website traffic? Our AI-powered technology delivers tailored website traffic through keywords or place-based filters from countries to neighborhoods.\r\nAiming at higher profits, active engagement, or expanded online impact?\r\nWe adjust'),
(55, 'Jonas Tubb', 'tubb.jonas@gmail.com', '3181155934', 'Owner', 'Drive more visitors to bookmyyacht.us with our effective AI powered traffic system.', '\r\nWorking to enhance your website results? Our AI-powered tool delivers perfect website traffic using keywords plus geographic data from countries to towns.\r\nSeeking increased revenue, boosted visitors, or a wider digital presence?\r\nWe shape it to fit you'),
(56, 'Lewis Edwards', 'lewisedwards184@gmail.com', '(866) 349-6569', 'Owner', 'Transform Your Business with Expert Tax & CFO Solutions from Dragonstone Financial + Special Savings!', '\r\nIs your business getting the strategic financial guidance it deserves? Dragonstone Financial offers comprehensive tax and CFO services designed to help your business thrive.\r\n\r\n\r\n������ SPECIAL OFFER:\r\n- Save $50 on Personal Tax Preparation\r\n- Save $100 on '),
(57, 'Jess W.', 'enjoy@sitemateai.com', '(213) 712-9897', 'Owner', 'Your website is leaking — this A.I. FIXES that and tells jokes…', 'Your website is leaking customers — this A.I. FIXES that…\r\n\r\nAnd it will even TELL YOU A JOKE while explaining how it can FIX YOUR SITE.\r\n\r\nTALK TO IT YOURSELF — it’ll walk you through exactly what it can do.\r\n\r\nGET A SMILE NOW and see how to FIX YOUR WEB'),
(58, 'Cheryl Parker', 'cherylp@nextdayworkingcapital.com', '725-867-2209', 'Owner', 'Just a Thought—Could This Help Your Business?', 'Business Funding on Your Terms—No Credit Check, No Hassle.\r\n\r\nGet fast, flexible working capital without the usual roadblocks. \r\n\r\nInstant approvals, next-day funding, and no paperwork required. \r\n\r\nCheck your eligibility in 30 seconds—100% free!\r\n\r\nSee w'),
(59, 'Alec Brown', 'csp.digital8@gmail.com', '512-885-8595', 'Owner', 'Get nothing or get funded — your move', 'Hey,\r\n\r\n\r\n\r\nThe IRS refund window for self-employed workers closes this week.\r\n\r\n\r\n\r\nIf you were 1099 or Schedule C in 2021 and missed work due to COVID disruptions…\r\n\r\n\r\n\r\n You could still claim up to $32,220\r\n                                            '),
(60, 'Mark Wints', 'markwints39@gmail.com', '734-555-3714', 'Owner', 'customer', 'A lot of good businesses lose money because something small is broken in their system.\r\n\r\n\r\nIt’s like a leaky bucket—you pour in leads, but they drip out.\r\n\r\n\r\nThis free playbook shows how top brands fix that fast and grow big.\r\n\r\n\r\nGrab it here if you wa'),
(61, 'Dian McCorkindale', 'dian.mccorkindale49@gmail.com', '353532867', 'Owner', 'Unlock Real Growth with AI: Grow Your Instagram Today', 'Get more leads for your bookmyyacht.us website by using AI on Instagram. If you\'re looking to drive more traffic, generate leads, and grow your brand\'s reach, you can get more information and start a free trial here: https://ow.ly/POO450VvbmX\r\n\r\nThis is a'),
(62, 'Alexander Cavenagh', 'alexander.cavenagh58@yahoo.com', '419841788', 'Owner', 'Optimize bookmyyacht.us\'s traffic with a free trial.', '\r\nWanting to enhance your website traffic reach? Our AI-enhanced pulls targeted website traffic using keywords and location targeting from countries to local areas.\r\nLooking for more revenue, active pages, or a larger online presence?\r\nWe tailor it to you'),
(63, 'Corine Barber', 'barber.corine@yahoo.com', '714939732', 'Owner', 'Drive more visitors to bookmyyacht.us with our tested AI powered traffic system.', '\r\nYour website, bookmyyacht.us, has the potential to reach far more visitors than it currently does. Many sites fail to capture an enormous audience. That’s where our automated traffic system helps—delivering engaged visitors straight to your site.\r\n\r\nSta'),
(64, 'Aaron Chipper', 'chipper.aaron@yahoo.com', '894913352', 'Owner', 'Boost bookmyyacht.us\'s traffic with our AI traffic service.', '\r\nEager to turbocharge your website traffic? Our smart AI technology brings targeted website traffic through keywords or place-based filters from continents to streets.\r\nSeeking more revenue, livelier website traffic, or expanded online impact?\r\nWe shape '),
(65, 'Patrick Monet', 'patrickbmonet@outlook.com', '557635532', 'Owner', 'Urgent - Tax Issue!', 'Hey! You may have a tax issue. Click here to chat with me now to fix it >>https://expert.smallbusinessarena.com/tax');

-- --------------------------------------------------------

--
-- Table structure for table `user_subscribe`
--

CREATE TABLE `user_subscribe` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yacht`
--

CREATE TABLE `yacht` (
  `id` int(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `mintime` varchar(250) NOT NULL,
  `username` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(225) NOT NULL,
  `status` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `build_name` varchar(255) NOT NULL,
  `yacht_length` int(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `yacht_type` varchar(255) NOT NULL,
  `hname` varchar(255) NOT NULL,
  `engine` varchar(255) NOT NULL,
  `max_speed` varchar(255) NOT NULL,
  `builder` varchar(255) NOT NULL,
  `year_of_build` varchar(255) NOT NULL,
  `guest` varchar(255) NOT NULL,
  `cabin` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `thumb-img` varchar(255) NOT NULL,
  `other` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `yacht`
--

INSERT INTO `yacht` (`id`, `days`, `start_time`, `end_time`, `mintime`, `username`, `location`, `address`, `status`, `about`, `build_name`, `yacht_length`, `size`, `yacht_type`, `hname`, `engine`, `max_speed`, `builder`, `year_of_build`, `guest`, `cabin`, `price`, `thumb-img`, `other`) VALUES
(14, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '3', 'ScottandTracyEvents', 'Washington', 'Washington', 'Approve', 'The Private Reserve is a stunning luxury Italian motoryacht, meticulously built by Monte Fino. This 67-foot yacht boasts a spacious beam of 18.5 feet, offering ample space for relaxation and entertainment. With twin diesel engines powering her, she can achieve a maximum speed of 12 to 15 knots, making her perfect for smooth and swift cruising.\r\n', 'Monte Fino', 67, 'Medium', 'Motor Yachts', 'Private Reserve', 'Twin Diesel', '15', 'Monte Fino', '1997', '13', '3', 849, 'private-reserve13s.jpg', '<b>Paxs & Pricing:</b><br>\r\n1-6 Guests: $849 per hour<br>\r\n7-13 Guests: $1149 per hour<br><br>\r\n<b>Booking Requirements:</b><br>\r\nWeekdays: 3-hour minimum<br>\r\nWeekends: 4-hour minimum<br>   '),
(804, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'N.Miami', 'Bill Bird Marina', 'Approve', 'The 52ft Prestige yacht, specifically the Prestige 520, is a luxurious motor yacht known for its elegant design and high-performance features. Built by Prestige Yachts, part of Groupe Beneteau.\r\n\r\nWith powerful Volvo Penta IPS engines, the Prestige 520 reaches a top speed of 30-32 knots. It offers comfortable accommodations, including 3 spacious cabins and ample living space, perfect for both leisure cruising and long journeys.', 'Prestige 520', 52, 'Medium', 'Motor Yacht', 'Prestige', '435 HP per engine', '32', 'Groupe Beneteau', '2017', '6', '3', 2300, '52ft Prestige 500 Fly _ Whiskey and Waves 1.jpg', '3 beds | 2 baths | 6 sleeps + 1 crew<br>\r\nCaptain + Stew (gratuity paid directly)  '),
(806, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'N.Miami', 'Bill Bird Marina ', 'Approve', 'The Azimut 68 Flybridge is a prestigious motor yacht, designed for ultimate luxury and performance. Its spacious flybridge provides stunning views and an expansive outdoor living area, ideal for entertaining guests. The interior boasts high-end furnishings, modern amenities, and multiple cabins designed for privacy and comfort, making it perfect for extended stays on the water.\r\n\r\nWith a top speed of 30 knots, the Azimut 68 offers exhilarating cruising capabilities while ensuring smooth and stable sailing.', 'Azimut 68 Flybridge', 68, 'Medium', 'Motor Yachts', 'Azimut', 'twin MAN or Caterpillar engines', '30', 'Giorgio Medda', '2016', '6', '3', 3650, '68ft Azimut _Le Grand Bleu_ 1.jpg', '4 beds | 3 baths | 8 sleeps + 2 crews<br>\r\nCaptain + Stew (gratuity paid directly) '),
(810, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', 'Miami Beach Marina', 'Approve', 'The Princess 88 is a luxurious motor yacht, offering ample space and elegance with modern design. Equipped with a Jacuzzi and high-end amenities, it ensures ultimate relaxation while cruising. With top-tier engines, it can reach up to 30 knots, delivering both speed and stability on water.\r\n\r\nThe yacht\'s interior is designed for comfort, with spacious cabins, large windows, and premium finishes. Its unique features, like the Jacuzzi, make it perfect for both leisurely cruises and social gatherings with guests, offering the finest on-water experience.', 'Princess 88', 88, 'Large', 'Luxury Yachts', 'Princess Jacuzzi', 'Twin Diesel Engines', '30', 'Will Green', '2012', '8', '4', 4750, '88_ Princess _Praying For Overtime_ -_-19.jpg', '4 beds | 3 baths | 8 sleeps<br>\r\nCaptain + Stew (minimum gratuity paid) '),
(812, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', 'Venitian Marina Pier 1', 'Approve', 'The 94ft Leopard Jacuzzi yacht combines stunning speed with luxurious comfort. With modern design and powerful engines, it\'s ideal for exhilarating adventures and relaxing on the open sea.\r\n\r\nBoasting spacious cabins, a Jacuzzi, and premium features, this yacht offers a refined lifestyle at sea. Perfect for high-performance cruising and enjoying utmost luxury.', 'Leopard 94', 94, 'Large', 'Luxury Yachts', 'Leopard Jacuzzi', 'Twin Diesel Engines (MTU or MAN)', '33', 'Jacuzzi Brands\'s', '2008', '8', '4', 4200, 'Leopard 27M - 3 Large.jpeg', '3 beds | 3 baths | 6 sleeps + 2 crews<br>\r\nCaptain + Stew (gratuity paid directly)'),
(817, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '12:00 AM', '', 'laurent', 'Miami', 'Miami Beach Marina', 'Approve', 'The Aicon 75 is a luxurious and high-performance motor yacht designed to offer an exceptional cruising experience. With its sleek and modern design, the Aicon 75 is equipped with advanced technology and luxurious interiors, offering both comfort and style. Powered by twin diesel engines, the yacht can reach a maximum speed of 33 knots, ensuring smooth and fast cruises on the open water.', 'Aicon 75', 75, 'Medium', 'Motor Yachts', 'Aicon', 'Twin Diesel Engines', '33', 'Marc-Udo Broich', '2008', '8', '4', 3800, 'IMG_4253.jpg', '4 beds | 4 baths | 8 sleeps + 2 crews<br>\r\nCaptain + Stew (minimum gratuity paid) '),
(818, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', 'Bayside Marina', 'Approve', 'The Aicon 75 is a luxurious and high-performance motor yacht designed to offer an exceptional cruising experience. With its sleek and modern design, the Aicon 75 is equipped with advanced technology and luxurious interiors, offering both comfort and style. Powered by twin diesel engines, the yacht can reach a maximum speed of 33 knots, ensuring smooth and fast cruises on the open water.', 'Azimut 75', 75, 'Medium', 'Motor Yachts', 'Azimut', 'Twin Diesel Engines', '33', 'Vitelli', '2016', '8', '4', 3380, '75ft Azimut _ Mancusa _ Photo 16.jpg', '4 beds | 4 baths | 8 sleeps + 2 crews<br>\r\nCaptain + Stew (gratuity optional up to the client)  '),
(819, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Ft.Lauderdale', 'Cox Landing', 'Approve', 'The Prestige 750 is a perfect blend of luxury, performance, and style. Crafted with advanced engineering, it features spacious cabins, a stunning flybridge, and superior materials throughout. Its powerful twin engines ensure exhilarating speeds of up to 30 knots, offering both comfort and speed for long voyages or quick escapes.', 'Prestige 750', 75, 'Medium', 'Motor Yachts', 'Prestige', 'Twin Diesel Engines', '30', 'Erwin Bamps', '2015', '8', '4', 4750, '75_ Prestige _Oceana_ - Drone -_-34 copy 2.jpeg', '4 beds | 4 baths | 8 sleeps + 2 crews<br>\r\nCaptain + Stew (minimum gratuity paid) '),
(820, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', 'Miami Beach Marina ', 'Approve', 'The Sunseeker Predator 75 combines cutting-edge design with exceptional performance. With powerful twin engines, it achieves a top speed of 35 knots, making it a thrill on the water. The yacht\'s stylish interior offers 4 opulent cabins, along with ample space for socializing and relaxation.', 'Sunseeker 78', 78, 'Medium', 'Motor Yachts', 'Sunseeker', 'Twin Diesel Engines', '35', 'Andrea Frabetti', '2019', '8', '4', 5400, 'large_4066517.jpg', '4 beds | 3 baths | 8 sleeps + 2 crews<br>\r\nCaptain + Stew '),
(821, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', 'Island Gardens Marina', 'Approve', 'The Azimut 88 offers luxury and performance, combining sleek design with powerful engines for a top speed of 33 knots. The yacht features elegant interiors with 4 to 5 well-appointed cabins, ensuring utmost comfort for long voyages. Spacious salons and ample deck spaces allow guests to relax and enjoy every moment on the water.', 'Azimut 88', 88, 'Medium', 'Luxury Yachts', 'Azimut', 'Twin Diesel Engines', '33', 'Giovanna Vitelli', '2021', '10', '5', 9900, 'DJI_0014.jpg', '5 beds | 6 baths | 10 sleeps<br>\r\nCaptain + Stew '),
(825, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', 'Miami Beach Marina', 'Approve', 'The Sanlorenzo SL96 is a luxury yacht designed for comfort, elegance, and speed, boasting a top speed of 28 knots. Its modern, spacious interior features 4-5 beautifully appointed cabins and multiple social areas that provide the perfect setting for both relaxation and entertainment. The yacht is equipped with high-end finishes, making it an ideal choice for those seeking ultimate luxury.', 'Sanlorenzo SL97', 97, 'Medium', 'Luxury Yachts', 'Sanlorenzo', 'Twin Diesel Engines', '28', 'Massimo Perotti', '2012', '10', '5', 7600, '9804 W 34 court - Drone_-34.jpg', '4 beds | 3 baths | 8 sleeps<br>\r\nCaptain + Stew (minimum gratuity paid directly) '),
(827, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', 'Miami Beach Marina', 'Approve', 'The Azimut 116 is a luxury superyacht designed for those who seek high performance and elegance. Powered by twin diesel engines, it can reach a top speed of 27 knots. The yacht features an opulent interior with 5 spacious cabins, offering maximum comfort for long voyages or relaxing trips along the coast. Its expansive deck space includes a large sunbathing area, a Jacuzzi, and an elegant dining area perfect for entertaining.', 'Azimut 116', 116, 'Large', 'Luxury Yachts', 'Azimut', 'Twin Diesel Engines', '27', 'Marco Valle', '2012', '14', '5', 10700, '116_ Azimut _Rylax_ - Drone -_-25.jpg', '5 beds | 5 baths | 10 sleeps + 5 crews<br>\r\nCaptain + 4 crews '),
(830, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', 'Harbor West Marina', 'Approve', 'The Azimut 62 is a luxurious flybridge motor yacht, designed for comfort, elegance, and speed. It features spacious cabins, a powerful engine, and exceptional style.\r\n\r\nWith an exquisite layout and advanced technology, the Azimut 62 provides a smooth ride and luxury for up to 8 guests, perfect for cruising on the open sea.', 'Azimut 62', 62, 'Medium', 'Motor Yachts', 'Azimut', 'Twin Diesel Engines (typically MAN engines)', '33', 'Paolo Vitelli', '2008', '6', '3', 2250, '62ft Azimut _ Alisa _ Photo 15.jpg', '3 beds | 3 baths | 6 sleeps + 1 crew<br>\r\nCaptain + Stew (gratuity paid directly)  '),
(831, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', 'Miami Beach Marina', 'Approve', 'The Galeon 680 Fly is a luxurious, stylish motor yacht with spacious interiors and modern design elements. It’s ideal for long cruises with comfort and speed.\r\nEquipped with powerful engines, the yacht offers top-notch performance and excellent stability in various sea conditions. A perfect blend of luxury, functionality, and advanced technology for true connoisseurs.', 'Galeon 680 Fly', 68, 'Medium', 'Motor Yachts', 'Galeon', 'Volvo Penta IPS or MAN engines', '34', 'Galeon', '2025', '12', '4', 4900, '68_ Galeon -_-10.jpg', '4 beds | 3 baths | 8 sleeps + 2 crews<br>\r\nCaptain + Stew (minimum gratuity paid)  '),
(832, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Aventura', 'Marina Palms', 'Approve', 'The Galeon 680 Fly is a luxurious, stylish motor yacht with spacious interiors and modern design elements. It’s ideal for long cruises with comfort and speed.\r\nEquipped with powerful engines, the yacht offers top-notch performance and excellent stability in various sea conditions. A perfect blend of luxury, functionality, and advanced technology for true connoisseurs.', 'Galeon 680 Fly', 68, 'Medium', 'Motor Yachts', 'Galeon', 'Volvo Penta IPS or MAN engines', '34', 'Galeon', '2021', '8', '3', 3950, '68_ Galeon - Lets Toast - Drone -_-11-1.jpg', '4 beds | 3 baths | 8 sleeps + 1 crews<br>\r\nCaptain + Stew   '),
(834, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', '833 86th St, Miami Beach, FL 33141', 'Approve', 'The Axopar 38ft Yacht is an incredibly versatile, high-performance boat designed for both leisure cruising and thrilling adventures. Its cutting-edge design offers impressive speed and handling.\r\n\r\nBoasting twin engine options, this yacht offers a smooth ride with luxurious features. With space for 8-10 guests, it\'s perfect for memorable weekend getaways or day trips.', 'Axopar 38', 38, 'Small', 'Motor Yachts', 'Axopar', 'Outboard engines (twin engine options, Mercury or Yamaha engines)', '45', 'Jan-Erik Viinikkala', '2023', '8', '1', 1350, 'Axopar 38 - thumbnail.jpg', ' 1 bed | 1 bath<br>\r\nCaptain (gratuity paid directly) '),
(835, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', 'Bill Bird Marina', 'Approve', 'The Axopar 38ft Yacht is a high-performance, sleek vessel perfect for both leisure cruising and adventurous high-speed rides. With advanced design, it offers speed and comfort in every ride.\r\n\r\nEquipped with twin engines, this yacht ensures a smooth and stable ride. It’s designed with 1 to 2 cabins and accommodates up to 8-10 guests, making it ideal for memorable day trips.', 'Axopar 38', 38, 'Small', 'Motor Yachts', 'Axopar', 'Outboard engines (twin engine options, typically Mercury or Yamaha)', '45', 'Jan-Erik Viinikkala', '2025', '8', '1', 1380, '38ft Axopar _ thumbnail.png', ' 1 bed | 1 bath<br>\r\nCaptain (gratuity paid directly)'),
(836, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Coconut Grove', 'Bayshore landing ', 'Approve', 'The Sailing Catamaran 48ft Yacht is designed for luxury cruising, offering both speed and comfort. With its spacious layout and twin inboard engines, it provides a smooth, efficient sailing experience on the water.\r\n\r\nPerfect for long voyages or relaxed weekends, this catamaran features 4 luxurious cabins and ample space for up to 14 guests. Its design is perfect for those looking to explore the seas in style and comfort.', 'Catamaran 48', 48, 'Medium', 'Catamarans Yachts', 'Sailing Catamaran', 'Inboard engines (typically twin engines)', '15', 'Jacques Fountaine', '1990', '12', '4', 2500, '48ft Catamaran _ Bubble 34.png', ' 3 beds | 2 baths | 6 sleeps<br>\r\nCaptain + Stew (gratuity paid directly)   '),
(837, 'Monday,Tuesday,Friday,Saturday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', '1110 NW North River Drive, Miami FL 33136', 'Approve', 'The Sunseeker Predator 74ft Yacht is an epitome of luxury and speed. With a sleek, aerodynamic design and powerful twin engines, it offers unparalleled performance and comfort for those seeking high-end maritime experiences.\r\n\r\nThis yacht features spacious living areas, a stunning flybridge, and beautifully designed cabins. With space for up to 10 guests, it is perfect for unforgettable weekends, offering both comfort and exhilarating performance on the open seas.', 'Sunseeker Predator 74', 74, 'Medium', 'Motor Yachts', 'Sunseeker Predator', 'Twin diesel engines (typically MTU or MAN engines)', '30', 'Christian Marti', '2023', '3', '8', 3700, '74ft Sunseeker _ thumbnail.jpg', ' 3 beds | 3 baths | 6 sleeps + 2 crews<br>\r\nCaptain + Stew '),
(838, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'N. Miami', 'Bill Bird Marina (Haulover)', 'Approve', 'The Mangusta 84ft Yacht is a high-performance, luxury motor yacht designed for speed and comfort. With a sleek profile, it offers exceptional speed, making it perfect for cruising in style and elegance.\r\n\r\nThis yacht features spacious cabins, a large saloon, and a fantastic deck area. Accommodating 8-10 guests, it’s perfect for both short cruises and long trips, offering ultimate luxury and exhilarating performance on the water.', 'Mangusta 84', 84, 'Medium', 'Luxury Yachts', 'Mangusta', ' Twin diesel engines (typically MTU or Caterpillar engines)', '40', 'Francesco Cacitti', '1999', '10', '4', 3050, '84ft Mangusta _ thumbnail.jpeg', ' 4 beds | 4 baths | 9 sleeps + 2 crews<br>\r\nCaptain + Stew (gratuity paid directly) '),
(839, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Aventura', 'Aventura', 'Approve', 'The Sirena 96ft Yacht is a stunning blend of performance and luxury. Known for its sleek design and advanced technology, it offers an exhilarating cruising experience while maintaining utmost comfort for its guests.\r\n\r\nWith spacious cabins and modern amenities, this yacht is ideal for long voyages or lavish getaways. Accommodating 10-12 guests, it offers a sophisticated atmosphere for enjoying the open seas in unparalleled style and comfort.', 'Sirena 96', 96, 'Large', 'Luxury Yachts', 'Sirena', 'Twin diesel engines (typically MAN or Caterpillar engines)', '28', 'Serdar Demirtaş', '2024', '12', '5', 10700, 'Sirena - thumbnail.JPG', ' 5 beds | 5 baths | 10 sleeps + 5 crews<br>\r\nCaptain + Stew (ALL IN)  '),
(840, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', 'Bayside Marina', 'Approve', 'The Wally 85ft Yacht is a performance-driven luxury yacht, known for its sleek, minimalist design and cutting-edge technology. It combines speed with comfort, offering a thrilling sailing experience with unmatched elegance.\r\n\r\nDesigned with spacious interiors and modern amenities, this yacht features 3-4 cabins and can host up to 8-10 guests. Ideal for those seeking a luxurious and high-performance cruising experience, it’s perfect for adventurous and stylish journeys.', 'Wally 85', 85, 'Large', 'Luxury Yachts', 'Wally', 'Twin diesel engines (typically MAN or MTU engines)', '45', 'Luca Bassani', '2024', '4', '10', 7880, '85ft Wally _thumbnail.png', ' 4 beds | 4 baths | 8 sleeps + 4 crews<br>\r\nCaptain + Stews (ALL IN) '),
(841, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', 'Island Gardens Marina', 'Approve', 'The Custom Line 95ft Yacht combines sleek design with sophisticated engineering. Offering luxury and performance, this yacht delivers exceptional comfort, space, and speed, making it ideal for both long voyages and short getaways.\r\n\r\nWith 4-5 luxurious cabins, the Custom Line 95 offers ample space for 10-12 guests. Designed for those who seek refinement and performance, it provides a perfect blend of elegance and power on the water.', 'Custom Line 95', 95, 'Large', 'Luxury Yachts', 'Custom Line', 'Twin diesel engines (typically MAN or MTU engines)', '26', 'Alberto Galassi', '2018', '12', '5', 7500, 'thumbnail.jpg', ' 5 beds | 4 baths | 10 sleeps + 4 crews<br>\r\n\r\nCaptain + Stew (ALL IN)  '),
(842, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', 'North Bay Village', 'Approve', 'The Azimut 72 is an epitome of luxury and performance, combining a sleek design with state-of-the-art technology. Equipped with twin powerful MAN engines, this yacht can reach speeds of up to 31 knots, making it perfect for cruising.\r\n\r\nIts spacious flybridge offers ample space for relaxation, and the yacht’s interiors are designed with the finest materials to create an elegant ambiance\r\n', 'Azimut 72', 72, 'Medium', 'Motor Yachts', 'Azimut', 'Dual MAN CR V12 1400 mHP engines', '31', 'Giovanni P. Lazzarini.', '2019', '8', '4', 5000, '72ft Azimut-thumbnail.JPG', ' 4 beds | 3 baths | 8 sleeps<br>\r\nCaptain + Stew (gratuity paid directly) '),
(843, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Ft.Lauderdale', 'Cox\'s Landing', 'Approve', 'Azimut 64 is a luxury flybridge yacht renowned for its elegant design and high-speed performance. With Caterpillar C18 engines, this yacht can achieve a maximum speed of 33 knots.', 'Azimut 64', 64, 'Medium', 'Motor Yachts', 'Azimut', 'Caterpillar C18 1150hp diesel engines​', '33', 'Giovanna Vitelli​', '2013', '8', '4', 3500, '64ftAzimut-thumbnail.jpg', ' 4 beds | 3 baths | 8 sleeps + 2 crews<br>\r\nCaptain + Stew (gratuity paid directly) '),
(844, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', 'Bayside Marina', 'Approve', 'This yacht is 29 meters (94 feet) long and features a planning hull design that makes it fast and efficient. It is equipped with 2,510-gallon fuel tanks, allowing it to cover up to 320 nautical miles at a speed of 32 knots.', 'S10', 94, 'Medium', 'Luxury Yachts', 'Azimut', '2 x MTU 16V 2000 M96L diesel engines', '32', 'Marco Valle', '2020', '8', '4', 7880, '94Azimut-thumbnail.jpg', ' 4 beds | 4 baths | 8 sleeps + 4 crews<br>\r\nCaptain + Stew (ALL IN) '),
(845, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 AM', '10:00 PM', '', 'laurent', 'Miami', 'Miami Beach Marina', 'Approve', 'The Sunseeker 95 Yacht combines luxurious amenities with high-performance capabilities. Its spacious design features expansive deck areas and a well-appointed interior, providing guests with unparalleled comfort and style. Ideal for those seeking both adventure and elegance on the water, this yacht offers a superior cruising experience.', 'Sunseeker 96', 96, 'Large', 'Luxury Yachts', 'Sunseeker', 'Twin diesel MTU 12V 2000 M96L engines', '29', 'Andrea Frabetti', '2015', '8', '4', 9000, '96ftSunseeker _thumbnail.jpg', '  4 beds | 3 baths | 8 sleeps <br>\r\nCaptain + Stew (minimum gratuity paid directly)');

-- --------------------------------------------------------

--
-- Table structure for table `yacht_booking`
--

CREATE TABLE `yacht_booking` (
  `id` int(20) NOT NULL,
  `yacht_id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  `yacht_type` varchar(255) NOT NULL,
  `hname` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `ccount` varchar(300) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `plan_description` varchar(100) NOT NULL,
  `price` varchar(250) NOT NULL,
  `booking_date` varchar(255) DEFAULT NULL,
  `booking_time` varchar(255) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `adate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `yacht_booking`
--

INSERT INTO `yacht_booking` (`id`, `yacht_id`, `username`, `token`, `yacht_type`, `hname`, `customer_name`, `ccount`, `phone`, `email`, `address`, `plan_description`, `price`, `booking_date`, `booking_time`, `status`, `adate`) VALUES
(5, 826, 'raj', 'raj', 'Motor Yachts', 'Princess Jacuzzi', 'Sahil', '3', '7889465565', 'sahil@gmail.com', 'US', '6', '12075', '2025-01-26', '13:29', 'Approve', '2025-01-18 01:29 AM'),
(6, 821, 'raj', 'raj', 'Motor Yachts', 'Azimut', 'Vijay', '2', '7988989456', 'vijay@gmail.com', 'bac', '8', '10120', '2025-01-28', '16:50', 'Pending', '2025-01-18 04:50 AM'),
(9, 832, 'raj', 'raj', 'Motor Yachts', 'Galeon', 'Arpita', '4', '7889455612', 'arpita@gmail.com', 'abc', '3', '3680', '2025-01-29', '14:50', 'Pending', '2025-01-21 02:50 AM'),
(10, 832, 'raj', 'raj', 'Motor Yachts', 'Galeon', 'Pradeep K', '2', '7984562222', 'pradeep@gmail.com', 'abc', '4', '3680', '2025-03-22', '20:55', 'Pending', '2025-03-22 20:55 PM'),
(11, 832, 'laurent', 'laurent', 'Motor Yachts', 'Galeon', 'Pradeep K', '2', '7894562222', 'pradeep@gmail.com', 'abc', '2 hour', '7360', '2025-03-22', '09:03', 'Pending', '2025-03-22 21:02 PM'),
(12, 831, 'laurent', 'laurent', 'Motor Yachts', 'Galeon', 'Pradeep K', '2', '78945621232', 'pradeep@gmail.com', 'abc', '6', '6325', '2025-03-23', '09:04', 'Pending', '2025-03-22 21:04 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_subscribe`
--
ALTER TABLE `about_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_form`
--
ALTER TABLE `enquiry_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `yacht_id` (`yacht_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`),
  ADD KEY `price_ibfk_1` (`yacht_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_ibfk_1` (`service_id`);

--
-- Indexes for table `tbl_reservations`
--
ALTER TABLE `tbl_reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_yachtna`
--
ALTER TABLE `tbl_yachtna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_contact`
--
ALTER TABLE `user_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_subscribe`
--
ALTER TABLE `user_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yacht`
--
ALTER TABLE `yacht`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yacht_booking`
--
ALTER TABLE `yacht_booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_subscribe`
--
ALTER TABLE `about_subscribe`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiry_form`
--
ALTER TABLE `enquiry_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=382;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=648;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1098;

--
-- AUTO_INCREMENT for table `tbl_reservations`
--
ALTER TABLE `tbl_reservations`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tbl_yachtna`
--
ALTER TABLE `tbl_yachtna`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_contact`
--
ALTER TABLE `user_contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `user_subscribe`
--
ALTER TABLE `user_subscribe`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `yacht`
--
ALTER TABLE `yacht`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=849;

--
-- AUTO_INCREMENT for table `yacht_booking`
--
ALTER TABLE `yacht_booking`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`yacht_id`) REFERENCES `yacht` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
