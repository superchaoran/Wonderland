DROP DATABASE IF EXISTS 'wonderland_wonderland';
CREATE DATABASE 'wonderland_wonderland';
Use 'wonderland_wonderland';

CREATE TABLE user
(
	userID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) NOT NULL,
	password CHAR(32) NOT NULL,
    sex BOOLEAN,
	phoneNo INT,
	UNIQUE (email)
)DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;

CREATE TABLE role (
	roleID VARCHAR(255) NOT NULL PRIMARY KEY,
	description VARCHAR(255)
) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;

CREATE TABLE user_role (
	user_role_ID INT NOT NULL,
	roleID VARCHAR(255) NOT NULL,
	PRIMARY KEY (user_role_ID, roleid)
) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;


CREATE TABLE category (
	categoryID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255)
) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;

CREATE TABLE post_category (
	postID INT NOT NULL,
	categoryID INT NOT NULL,
	PRIMARY KEY (postID, categoryID)
) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;

CREATE TABLE post
(
	postID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	postTitle TEXT,
	postContent TEXT,
	userID INT,
	parentPostID INT,
	realEstateID INT,
	createdDate DATE NOT NULL
) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;

CREATE TABLE realEstate
(
	realEstateID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	startDate DATE NOT NULL,
	endDate DATE NOT NULL,
	pricePerMonth INT NOT NULL,
	noOfBedrooms INT NOT NULL,
	userID INT NOT NULL,
	address VARCHAR(255) NOT NULL,
	createdDate DATE NOT NULL,
	provider VARCHAR(255) NOT NULL #CPM,University Group,JSM,Personal

)DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;

INSERT INTO `user`(`userID`, `name`, `email`, `password`, `phoneNo`) VALUES ([2],[admin],[admin@gmail.com],[md5('adminijdb')],[2170000000])



INSERT INTO post (postID,postTitle,postContent,userID,parentPostID,realEstateID,createdDate) 
VALUES('1','Spacious 1 bedroom apartment as low as $605/mo and save $250 now','Subleasing until July 2014..move in as early as Nov 15th and save $250','1','0','1','2013-09-22'),
VALUES('2','$500 / 8br - 12 Br/ 2 - 3 houses (High and Busey)','Nothing else like this. Got a big group? Don\'t rent one of those cramped group homes. Rent 2 or 3 of these large houses next to each other. With Pool Tables, Large Screen TVs, Parking Galore, 2 baths per house. Large yards, decks, porches, laundry in each. Too many amenities to mention. Relax, spread out, enjoy your own private community blocks from campus.','2','0','2','2013-10-02'),
VALUES('3','BEST Apt. for rent: November FREE, no security deposit, available NOW!','Do you need a place to live right now? How about living in a quiet neighborhood with a lot of trees close to U of I campus, the ARC, Hessel Park, stores, and restaurants? This bright and clean unit is on the top floor, far away from the busy streets and is pet-friendly. Laundry facilities are in the building, and a fitness center and swimming pool are a part of the apartment complex. Contact me today, move in tomorrow!','3','0','3','2013-11-11'),
VALUES('4','$1230 / 2br - 1150ft² - Penthouse Suite 1 Block from U of I Campus!','Furnished with full-sized bed, desk, and desk chair in each bedroom; new leather couch and matching chair in living room, coffee table, kitchen table and two chairs, oven, dishwasher, garbage disposal included. Lots of storage space, 4 huge closets, abundant cabinets in kitchen. Cathedral (vaulted) ceilings. Large windows in bedrooms and living room. Large balcony with room for a table and chairs. Two ceiling fans in large living room. Breakfast bar looks into kitchen from living room so the space feels very open and large. Large bathroom.','4','0','4','2013-12-02');