/**
* User: Users' information
* Art: Artists' information
* Genre: All genres
* Follow: Users follow Users
* Fans: Users follow Artists
* Location: Detialed location information
* Concert: Concerts information
* Like: Users like what kinds of genres of music
* Have: Artists have what kinds of genres
* Attend: Users attend to which concert
* List: Lists created by users that for concerts recommandation
* FollowList: Relations of users follow which lists
*/

DROP TABLE IF EXISTS Have;
DROP TABLE IF EXISTS Fans;
DROP TABLE IF EXISTS Attend;
DROP TABLE IF EXISTS Likes;
DROP TABLE IF EXISTS Content;
DROP TABLE IF EXISTS Follow;
DROP TABLE IF EXISTS SubGenre;
DROP TABLE IF EXISTS Genre;
DROP TABLE IF EXISTS Content;
DROP TABLE IF EXISTS FollowList;
DROP TABLE IF EXISTS Hold;
DROP TABLE IF EXISTS Lists;
DROP TABLE IF EXISTS Concert;
DROP TABLE IF EXISTS Location;
DROP TABLE IF EXISTS Art;
DROP TABLE IF EXISTS User;

CREATE TABLE User (
	uid int(10) AUTO_INCREMENT,
	username varchar(20),
	upassword varchar(20),
	ufname varchar(20),
	ulname varchar(20),
	uemail varchar(40),
	ucity varchar(20),
	uphone varchar(10),
	regtime datetime,
	lastlogin datetime,
	uscore int(3),
	ulink varchar(200),
	ubio varchar(500),
	PRIMARY KEY (uid)
);

CREATE TABLE Art (
	aid int(10) AUTO_INCREMENT,
	auname varchar(20),
	apassword varchar(20),
	artname varchar(20),
	aemail varchar(40),
	asite varchar(100),
	alink varchar(200),
	abio varchar(500),
	PRIMARY KEY (aid)
);

CREATE TABLE Genre (
	gid int(2) AUTO_INCREMENT,
	ggenre varchar(20),
	PRIMARY KEY (gid)
);

CREATE TABLE SubGenre(
	sgid int(4) AUTO_INCREMENT,
	ggid int(2),
	sggenre varchar(20),
	PRIMARY KEY (sgid, ggid),
	FOREIGN KEY (ggid) REFERENCES Genre(gid)
);

CREATE TABLE Follow (
	followee int(10),
	follower int(10),
	foltime datetime,
	FOREIGN KEY (follower) REFERENCES User(uid),
	FOREIGN KEY (followee) REFERENCES User(uid)
);

CREATE TABLE Fans (
	fan int(10),
	follow int(10),
	fantime datetime,
	FOREIGN KEY (fan) REFERENCES User(uid),
	FOREIGN KEY (follow) REFERENCES Art(aid)
);

CREATE TABLE Location(
	lid int(10) AUTO_INCREMENT,
	lname varchar(20),
	lnumber int(8),
	street1 varchar(40),
	street2 varchar(40),
	city varchar(30),
	state char(2),
	zip int(5),
	PRIMARY KEY (lid)
);

CREATE TABLE Concert (
	cid int(10) AUTO_INCREMENT,
	cname varchar(40),
	holdtime datetime,
	price decimal(7,2),
	location int(10),
	capacity int(6),
	available int(6),
	clink varchar(200),
	cbio varchar(500),
	PRIMARY KEY (cid),
	FOREIGN KEY (location) REFERENCES Location(lid)
);

CREATE TABLE Likes (
	luid int(10),
	lgenre int(2),
	FOREIGN KEY (luid) REFERENCES User(uid),
	FOREIGN KEY (lgenre) REFERENCES Genre(gid)
);

CREATE TABLE Have (
	haid int(10),
	hgenre int(2),
	FOREIGN KEY (haid) REFERENCES Art(aid),
	FOREIGN KEY (hgenre) REFERENCES Genre(gid)	
);

CREATE TABLE Attend (
	auid int(10),
	acid int(10),
	rate int(1),
	review varchar(500),
	reviewtime datetime,
	FOREIGN KEY (auid) REFERENCES User(uid),
	FOREIGN KEY (acid) REFERENCES Concert(cid)
);

CREATE TABLE Lists (
	listid int(10) AUTO_INCREMENT,
	luid int(10),
	moditime datetime,
	PRIMARY KEY (listid),
	FOREIGN KEY (luid) REFERENCES User(uid)
);

CREATE TABLE Content (
	clistid int(10),
	ccid int(10),
	FOREIGN KEY (clistid) REFERENCES Lists(listid),
	FOREIGN KEY (ccid) REFERENCES Concert(cid)
);

CREATE TABLE FollowList (
	flistid int(10),
	fluid int(10),
	folltime datetime,
	FOREIGN KEY (flistid) REFERENCES Lists(listid),
	FOREIGN KEY (fluid) REFERENCES User(uid)
);

CREATE TABLE Hold (
	haid int(10),
	hcid int(20),
	FOREIGN KEY (haid) REFERENCES Art(aid),
	FOREIGN KEY (hcid) REFERENCES Concert(cid)
);
