-- MySQL dump 10.13  Distrib 5.6.33, for Linux (x86_64)
--
-- Host: localhost    Database: wonderland_wonderland
-- ------------------------------------------------------
-- Server version	5.6.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`categoryID`, `name`) VALUES (1,'sublease');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `postID` int(11) NOT NULL AUTO_INCREMENT,
  `postTitle` text,
  `postContent` text,
  `userID` int(11) DEFAULT NULL,
  `parentPostID` int(11) DEFAULT NULL,
  `realEstateID` int(11) DEFAULT NULL,
  `createdDate` date NOT NULL,
  `picture` varchar(200) NOT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`postID`, `postTitle`, `postContent`, `userID`, `parentPostID`, `realEstateID`, `createdDate`, `picture`) VALUES (12,NULL,'Come ride with me,',NULL,2,NULL,'2013-12-11',''),(13,NULL,'Through the veins of history.',NULL,2,NULL,'2013-12-11',''),(14,NULL,'I\'ll show you how God',NULL,2,NULL,'2013-12-11',''),(15,NULL,'Falls asleep on his job.',NULL,2,NULL,'2013-12-11',''),(16,NULL,'How can we win,',NULL,2,NULL,'2013-12-11',''),(17,NULL,'When fools can be kings?',NULL,2,NULL,'2013-12-11',''),(18,NULL,'Don\'t waste your time',NULL,2,NULL,'2013-12-11',''),(19,NULL,'Or time will waste you.',NULL,2,NULL,'2013-12-11',''),(21,NULL,'One Friday night I took a pill or maybe two,',NULL,3,NULL,'2013-12-11',''),(22,NULL,'Down at the car park I saw everyone I knew.',NULL,3,NULL,'2013-12-11',''),(23,NULL,'And before the night had started,',NULL,3,NULL,'2013-12-11',''),(24,NULL,'We had planned to crush a party.',NULL,3,NULL,'2013-12-11',''),(25,NULL,'Just a place that someone knew,',NULL,3,NULL,'2013-12-11',''),(26,NULL,'A local house belonging to a ganster crew.',NULL,3,NULL,'2013-12-11',''),(27,NULL,'It ain\'t no use to sit and wonder why, babe',NULL,4,NULL,'2013-12-11',''),(28,NULL,'If you don’t know by now.',NULL,4,NULL,'2013-12-11',''),(30,NULL,'An\' it ain\'t no use to sit and wonder why, babe',NULL,4,NULL,'2013-12-11',''),(32,NULL,'It will never do somehow',NULL,4,NULL,'2013-12-11',''),(33,NULL,'So go ahead and ask her',NULL,8,NULL,'2013-12-11',''),(34,NULL,'For happy ever after',NULL,8,NULL,'2013-12-11',''),(35,NULL,'‘Cause nobody knows what’s coming',NULL,8,NULL,'2013-12-11',''),(36,NULL,'So why not take a chance on loving',NULL,8,NULL,'2013-12-11',''),(37,NULL,'When your rooster crows at the break of dawn',NULL,29,NULL,'2013-12-11',''),(38,NULL,'Look out your window and I\'ll be gone',NULL,29,NULL,'2013-12-11',''),(39,NULL,'You\'re the reason I\'m travlin\' on',NULL,29,NULL,'2013-12-11',''),(41,NULL,'Don\'t think twice, it\'s all right',NULL,31,NULL,'2013-12-11',''),(42,NULL,'Well, it ain\'t no use in turnin\' on your light, babe',NULL,31,NULL,'2013-12-11',''),(43,NULL,'Come on, pour the glass and tempt me',NULL,40,NULL,'2013-12-11',''),(44,NULL,'Either half-full or half-empty',NULL,40,NULL,'2013-12-11',''),(45,NULL,'‘Cause if it all comes down to flavor',NULL,40,NULL,'2013-12-11',''),(47,NULL,'I will leave behind all of my clothes ',NULL,46,NULL,'2013-12-11',''),(48,NULL,'I wore when I was with you, ',NULL,46,NULL,'2013-12-11',''),(49,NULL,'wonderful',NULL,3,NULL,'2013-12-11',''),(50,'wonderful house','GREAT',NULL,NULL,NULL,'2013-12-11','apt_pic_1.png'),(51,NULL,'WONDERFUL',NULL,50,NULL,'2013-12-11',''),(52,NULL,'great',NULL,50,NULL,'2013-12-11',''),(53,NULL,'aaaaaaaaaaa',NULL,50,NULL,'2013-12-11',''),(54,'Upgraded Apts at Nantucket Cove Come See!! (Champaign,IL)','Redefining Excellence In Apartment Living...\r\n\r\n\r\n\r\nNantucket Cove is a premier upscale luxury rental community...Where prestige and elegance have reached new heights. Nantucket Cove offers a timeless and unforgettable lifestyle as harmony, comfort, and tranquility flow through the architecture of every apartment home. Our world class amenities most certainly set us apart from the rest! Just a short walk to fine dining, exclusive shopping and entertainment. We love your pets as much as you do, as we offer a private pet park. Nantucket Cove is where style and sophistication come together to create a new way of living. Reserve your new home at Nantucket Cove Today! www.mckinley.com Apply Online today!\r\n\r\n\r\n\r\n\r\n\r\n\r\nLuxury Community Features:\r\n\r\n2, 3, & 4 Luxury Apartment Homes \r\n24-Hour Emergency Service \r\nAsk about Our Preferred Employer Program \r\nExclusive Clubhouse \r\nGated Community \r\nGarages \r\nResort Style Swimming Pool & Sundeck \r\nBusiness Center \r\nConference Rooms \r\nWasher and Dryers Included \r\nHigh Speed Internet \r\nGet Fit Fitness Center \r\nIndoor Basketball Court \r\nSand Volleyball \r\nBilliards Room \r\nArcade Room \r\nBBQ and Picnic Area \r\nBike Racks \r\nBark Park \r\nCar Wash \r\nPet Friendly \r\nEasy Access to Public Transportation \r\nWalking Distance to Shopping And Dining \r\nFriendly Professional Management Team \r\nWheelchair Access \r\nSecurity Deposit: $150-$300, Hold Fee: $100, Application Fee: $35 per person, Pet Fee: $200, Pet Rent: $20 *Aggressive Breed Restrictions and 2 pet max. \r\n\r\nContact Drew at the Leasing Office to hear about our great specials!! \r\n\r\nThe Perfect Blend of Luxury and Convenience',NULL,NULL,NULL,'2013-12-11','apt_pic_2.png'),(55,'Nantucket Cove Pre-Leasing! (Champaign,IL)','Luxury Community Features:\r\n\r\n2, 3, & 4 Luxury Apartment Homes \r\n24-Hour Emergency Service \r\nAsk about Our Preferred Employer Program \r\nExclusive Clubhouse \r\nGated Community \r\nGarages \r\nResort Style Swimming Pool & Sundeck \r\nBusiness Center \r\nConference Rooms \r\nWasher and Dryers Included \r\nHigh Speed Internet \r\nGet Fit Fitness Center \r\nIndoor Basketball Court \r\nSand Volleyball \r\nBilliards Room \r\nArcade Room \r\nBBQ and Picnic Area \r\nBike Racks \r\nBark Park \r\nCar Wash \r\nPet Friendly \r\nEasy Access to Public Transportation \r\nWalking Distance to Shopping And Dining \r\nFriendly Professional Management Team \r\nWheelchair Access \r\nSecurity Deposit: $150-$300, Hold Fee: $100, Application Fee: $35 per person, Pet Fee: $200, Pet Rent: $20 *Aggressive Breed Restrictions and 2 pet max. \r\n\r\nContact Drew at the Leasing Office to hear about our great specials!! \r\n\r\nThe Perfect Blend of Luxury and Convenience',NULL,NULL,NULL,'2013-12-11','apt_pic_3.png'),(56,' $889 / 2br - 1000ft² - 2 Bedroom Townhome 1.5 Bath (Hessel on the Park )','We are currently leasing for our lovely 2 bedroom 1.5 bath townhomes!!Dont wait until the last minute lease NOW!Come check out our gorgeous location at Hessel on the Park! You\'ll love the quiet ',NULL,NULL,NULL,'2013-12-11','apt_pic_4.png'),(57,'$595 / 2br - 930ft² - Holiday Special going fast! Discount on the first ten 2-bdrms rented! (Champaign ','Town Center is located in the heart of the newest retail area in Champaign-Urbana. Town Center offers spacious two- and three-bedroom apartments ranging from 930 to 1,185 square feet. We are conveniently located near Market Place Mall, Wal-Mart, Menards, and multiple dining establishments. We are also on the local transit bus line. Our amenities include locked entry to each building, balconies or patios in every unit, washer-dryer connections, deluxe kitchen appliances, cable-ready wiring, 24-hour fitness center, swimming pool, clubhouse, playground, and a wonderful bike path. Garages are available and we also have laundry facilities on site. Call us today for an appointment.',NULL,NULL,NULL,'2013-12-11','apt_pic_5.png'),(58,NULL,'good!',NULL,57,NULL,'2013-12-11',''),(59,NULL,'kkkkk\r\n',NULL,54,NULL,'2014-11-09',''),(60,NULL,'dgrgdsr',NULL,55,NULL,'2014-11-09',''),(61,NULL,'rwtergrff',NULL,55,NULL,'2014-11-09',''),(62,NULL,'wfwef',NULL,55,NULL,'2014-11-09',''),(63,NULL,'wfwetfwrw',NULL,55,NULL,'2014-11-09',''),(64,NULL,'gg4wg4w4wfewffffffffffff',NULL,55,NULL,'2014-11-09',''),(65,NULL,'agrgreagfdsafew',NULL,55,NULL,'2014-11-09',''),(66,NULL,'ryy6uy56y',NULL,55,NULL,'2014-11-09',''),(68,NULL,'haha',NULL,55,NULL,'2014-11-09',''),(69,NULL,'1516156',NULL,55,NULL,'2014-11-09',''),(70,NULL,'8916192652',NULL,55,NULL,'2014-11-09',''),(71,NULL,'91784252',NULL,55,NULL,'2014-11-09',''),(72,NULL,'85498598989',NULL,55,NULL,'2014-11-09',''),(73,NULL,'1651566565',NULL,55,NULL,'2014-11-09',''),(74,NULL,'48949849849',NULL,55,NULL,'2014-11-09',''),(75,NULL,'1616161616',NULL,55,NULL,'2014-11-09',''),(76,NULL,'sfafad',NULL,55,NULL,'2014-11-09',''),(77,NULL,'joijiojoikko',NULL,55,NULL,'2014-11-09',''),(78,NULL,'498985895985',NULL,55,NULL,'2014-11-09',''),(79,NULL,'23r4w',NULL,55,NULL,'2014-11-09',''),(80,NULL,'5/585858',NULL,55,NULL,'2014-11-09',''),(81,NULL,'134',NULL,55,NULL,'2014-11-09',''),(82,NULL,'hiuijjkkkk',NULL,55,NULL,'2014-11-09',''),(83,NULL,'earsa',NULL,55,NULL,'2014-11-09',''),(85,NULL,'Great apartment',NULL,57,NULL,'2015-12-21',''),(86,'Great location, reduced rent!! House near downtown Urbana and UIUC','2-bedroom, 1-bath house very close to downtown Urbana and UIUC, available for subletting *now* though July 31st 2016. There is a large kitchen (with washer and dryer), large and bright dining room, as well as living room; yard and a beautiful big tree in the front. Contact me for more info, and if you\'d like to check it out. \r\n\r\nRent is reduced to $950 per month, plus utilities.',NULL,NULL,NULL,'2015-12-21','apt_pic_6.png'),(87,NULL,'Loundry onsite?',NULL,86,NULL,'2015-12-21',''),(88,'PRIVATE BEDROOM/PRIVATE BATH','I am subleasing my private bedroom/private bathroom at ONE NORTH for spring and summer semesters. The rent is $440/mo and around $30 for utilities. There is wireless internet and cable included as well. This is a four bedroom apartment with the coolest roommates you could ever wish for. The apartment also features key-card entry and has an outdoor storage unit. I am needing to sublease immediately as I am no longer going to be living in the Urbana area. As a courtesy, I will be paying $100 of your first month\'s rent as well as taking care of the $45 sublease fee. The room is available for immediate move in and includes all necessary furniture, in unit laundry, and kitchen appliances. I will also be throwing in a free mini fridge that will remain with the bedroom. The bathroom is on-suite and is private (only yours). There is plenty of parking in front of the building and the community is gated. The community also features a very large clubhouse with an indoor pool, gym, tanning, game room, and study rooms. There are also outdoor tennis courts. Directly in front of the community there is a bus stop where buses come every 10 minutes and only take 9 minutes to get to campus. There are also plenty of gas stations, restaurants, and coffee shops nearby. Please let me know if you\'d like to come by and see the apartment and meet my roommates but hurry, this community is very desirable and the room won\'t last long!!!!! :)',NULL,NULL,NULL,'2015-12-21','apt_pic_7.png'),(89,'Affordable Vintage Studio Near Downtown! Pet Friendly!','STUDIO, 1 BATHROOM\r\n\r\nFEATURES IN THE UNIT:  Welcome to your new spacious studio at The Boutique Vintage Apartments. This charming and spacious unit features beautiful built-ins and character from floor to ceiling! The apartments are all unique and many include hardwood floors and a fireplace!\r\n\r\nFEATURES OF THE COMMUNITY:  Boutique Vintage Apartments is an exclusive property with only 4 apartment homes and free parking!  Don\'t have a car?  Don\'t worry about it!  There\'s a bus stop only one block away making transportation around town a breeze!\r\n\r\nWHAT CAMPUS BUILDINGS IS IT CLOSE TO:  With a bus stop only three blocks away, everything in town is a within a mere 10 min bus ride, including the Union, Grainger, the Armory, the UGL, and Follenger!\r\n\r\nBENEFITS OF THE LOCATION:  Centrally located in Champaign, you\'ll be within walking distance to downtown Champaign\'s restaurant and bar scene with favorites like Radio Maria where you can sample their coffee crusted filet.  Hang out with your friends and grab an English Ale at the Blind Pig or listen to a live band at Cowboy Monkey. Enjoy the downtown nightlife when you live at 703 Park!\r\n\r\nLEASE TERM:  AVAILABLE AUGUST 20th 2016!',NULL,NULL,NULL,'2015-12-21','apt_pic_8.png'),(90,'2 bedroom furnished on campus for August 2016','Now renting for August 2016! 2 bedroom furnished apartments on the Champaign side of the University of Illinois campus. New flooring throughout! Laundry on site. Underground parking available. Secure building. Rent includes garbage hauling, sewer tax, and recycling fee. Smith Apartments is owner-managed and has been providing comfortable, affordable housing in the Champaign-Urbana area for nearly 60 years. Personalized service is our specialty! Check out our website at www.smithapartments-cu.com.',NULL,NULL,NULL,'2015-12-21','apt_pic_9.png'),(91,NULL,'Very nice!',NULL,56,NULL,'2015-12-22',''),(92,NULL,'Nice post',NULL,55,NULL,'2015-12-23',''),(93,NULL,'interested pls contact blabla',NULL,57,NULL,'2016-03-12','');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_category`
--

DROP TABLE IF EXISTS `post_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_category` (
  `postID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  PRIMARY KEY (`postID`,`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_category`
--

LOCK TABLES `post_category` WRITE;
/*!40000 ALTER TABLE `post_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `realEstate`
--

DROP TABLE IF EXISTS `realEstate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `realEstate` (
  `realEstateID` int(11) NOT NULL AUTO_INCREMENT,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `pricePerMonth` int(11) DEFAULT NULL,
  `noOfBedrooms` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `createdDate` date DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `picture` varchar(200) NOT NULL,
  PRIMARY KEY (`realEstateID`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `realEstate`
--

LOCK TABLES `realEstate` WRITE;
/*!40000 ALTER TABLE `realEstate` DISABLE KEYS */;
INSERT INTO `realEstate` (`realEstateID`, `startDate`, `endDate`, `pricePerMonth`, `noOfBedrooms`, `userID`, `address`, `createdDate`, `provider`, `picture`) VALUES (12,NULL,NULL,NULL,NULL,1,'2','2013-12-11',NULL,''),(13,NULL,NULL,NULL,NULL,1,'2','2013-12-11',NULL,''),(14,NULL,NULL,NULL,NULL,1,'2','2013-12-11',NULL,''),(15,NULL,NULL,NULL,NULL,1,'2','2013-12-11',NULL,''),(16,NULL,NULL,NULL,NULL,1,'2','2013-12-11',NULL,''),(17,NULL,NULL,NULL,NULL,1,'2','2013-12-11',NULL,''),(18,NULL,NULL,NULL,NULL,1,'2','2013-12-11',NULL,''),(19,NULL,NULL,NULL,NULL,1,'2','2013-12-11',NULL,''),(21,NULL,NULL,NULL,NULL,1,'3','2013-12-11',NULL,''),(22,NULL,NULL,NULL,NULL,1,'3','2013-12-11',NULL,''),(23,NULL,NULL,NULL,NULL,1,'3','2013-12-11',NULL,''),(24,NULL,NULL,NULL,NULL,1,'3','2013-12-11',NULL,''),(25,NULL,NULL,NULL,NULL,1,'3','2013-12-11',NULL,''),(26,NULL,NULL,NULL,NULL,1,'3','2013-12-11',NULL,''),(27,NULL,NULL,NULL,NULL,1,'4','2013-12-11',NULL,''),(28,NULL,NULL,NULL,NULL,1,'4','2013-12-11',NULL,''),(30,NULL,NULL,NULL,NULL,1,'4','2013-12-11',NULL,''),(32,NULL,NULL,NULL,NULL,1,'4','2013-12-11',NULL,''),(33,NULL,NULL,NULL,NULL,1,'8','2013-12-11',NULL,''),(34,NULL,NULL,NULL,NULL,1,'8','2013-12-11',NULL,''),(35,NULL,NULL,NULL,NULL,1,'8','2013-12-11',NULL,''),(36,NULL,NULL,NULL,NULL,1,'8','2013-12-11',NULL,''),(37,NULL,NULL,NULL,NULL,1,'29','2013-12-11',NULL,''),(38,NULL,NULL,NULL,NULL,1,'29','2013-12-11',NULL,''),(39,NULL,NULL,NULL,NULL,1,'29','2013-12-11',NULL,''),(41,NULL,NULL,NULL,NULL,1,'31','2013-12-11',NULL,''),(42,NULL,NULL,NULL,NULL,1,'31','2013-12-11',NULL,''),(43,NULL,NULL,NULL,NULL,1,'40','2013-12-11',NULL,''),(44,NULL,NULL,NULL,NULL,1,'40','2013-12-11',NULL,''),(45,NULL,NULL,NULL,NULL,1,'40','2013-12-11',NULL,''),(47,NULL,NULL,NULL,NULL,1,'46','2013-12-11',NULL,''),(48,NULL,NULL,NULL,NULL,1,'46','2013-12-11',NULL,''),(49,NULL,NULL,NULL,NULL,1,'3','2013-12-11',NULL,''),(50,'2013-12-08','2014-01-17',1000,3,1,'106 S. Gregory, Urbana, IL','2013-12-11','CPM','apt_pic_1.png'),(51,NULL,NULL,NULL,NULL,1,'50','2013-12-11',NULL,''),(52,NULL,NULL,NULL,NULL,1,'50','2013-12-11',NULL,''),(53,NULL,NULL,NULL,NULL,1,'50','2013-12-11',NULL,''),(54,'0000-00-00','0000-00-00',300,5,1,'Nantucket Cove  2001 North Moreland Blvd  Champaign IL 61822','2013-12-11','JSM','apt_pic_2.png'),(55,'2013-12-02','2013-12-26',600,5,1,'Nantucket Cove  2001 North Moreland Blvd  Champaign IL 61822','2013-12-11','CPM','apt_pic_3.png'),(56,'2013-12-03','2013-12-03',889,3,1,'Hessel on the Park, 1862 Valley Rd, Champaign, IL 61820','2015-12-21','Personal','apt_pic_4.png'),(57,'0000-00-00','0000-00-00',900,5,1,'2413 N. Neil Street , Champaign, IL, 61820','2013-12-11','CPM','apt_pic_5.png'),(58,NULL,NULL,NULL,NULL,1,'57','2013-12-11',NULL,''),(59,NULL,NULL,NULL,NULL,1,'54','2014-11-09',NULL,''),(60,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(61,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(62,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(63,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(64,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(65,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(66,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(68,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(69,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(70,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(71,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(72,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(73,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(74,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(75,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(76,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(77,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(78,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(79,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(80,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(81,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(82,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(83,NULL,NULL,NULL,NULL,1,'55','2014-11-09',NULL,''),(85,NULL,NULL,NULL,NULL,1,'57','2015-12-21',NULL,''),(86,'2015-12-06','2016-03-03',950,2,1,'E Oregon St & S Webber St Urbana, IL 61801','2015-12-21','CPM',''),(87,NULL,NULL,NULL,NULL,1,'86','2015-12-21',NULL,''),(88,'0000-00-00','0000-00-00',100,1,1,'1601 N Lincoln Ave Urbana IL US','2015-12-21','Personal',''),(89,'2016-08-06','2017-08-06',550,1,1,'703 West Park Avenue, Champaign, IL 61820, USA','2015-12-21','Kennedy Wilson Properties',''),(90,'0000-00-00','0000-00-00',1010,2,1,'201 E. Armory, Champaign, IL','2015-12-21','University Group',''),(91,NULL,NULL,NULL,NULL,1,'56','2015-12-22',NULL,''),(92,NULL,NULL,NULL,NULL,1,'55','2015-12-23',NULL,''),(93,NULL,NULL,NULL,NULL,1,'57','2016-03-12',NULL,'');
/*!40000 ALTER TABLE `realEstate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `roleID` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`roleID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`roleID`, `description`) VALUES ('Account Administrator','Add, remove, and edit authors'),('Content Editor','Add, remove, and edit jokes'),('Site Administrator','Add, remove, and edit categories');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `password` char(32) NOT NULL,
  `phoneNo` int(11) DEFAULT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`userID`, `name`, `email`, `active`, `password`, `phoneNo`) VALUES (6,'Alex','alex@gmail.com',0,'alex',2147483647),(7,NULL,'abc',0,'abc',NULL),(8,NULL,'chaoran',0,'chaoran',NULL),(9,NULL,'super@gmail.com',0,'super',NULL),(10,NULL,'wangmifen@gmail.com',0,'wang',NULL),(11,NULL,'cs411@gmail.com',0,'cs411',NULL),(12,NULL,'wang374@illinois.edu',0,'wang374',NULL),(13,NULL,'chen338@illinois.edu',0,'chen338@illinois.edu',NULL),(14,NULL,'a',0,'b',NULL),(15,NULL,'1324@qq.com',0,'9876',NULL),(16,NULL,'superchaoran@gmail.com',0,'8515111q',NULL),(17,NULL,'caijunwei1988@gmail.com',0,'@q2bi.com',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_role` (
  `user_role_ID` int(11) NOT NULL,
  `roleID` varchar(255) NOT NULL,
  PRIMARY KEY (`user_role_ID`,`roleID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'wonderland_wonderland'
--

--
-- Dumping routines for database 'wonderland_wonderland'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-11 21:12:01
