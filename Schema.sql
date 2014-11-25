/**
* Created by Xin He
* 
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

Drop table IF EXISTS Concert.Have;
Drop table IF EXISTS Concert.Fans;
Drop table IF EXISTS Concert.Attend;
Drop table IF EXISTS Concert.Likes;
Drop table IF EXISTS Concert.Content;
Drop table IF EXISTS Concert.Follow;
Drop table IF EXISTS Concert.Genre;
Drop table IF EXISTS Concert.Content;
Drop table IF EXISTS Concert.FollowList;
Drop table IF EXISTS Concert.Hold;
Drop table IF EXISTS Concert.Lists;
Drop table IF EXISTS Concert.Concert;
Drop table IF EXISTS Concert.Location;
DROP TABLE IF EXISTS Concert.Art ;
Drop table IF EXISTS Concert.User;

create table User (
	uid varchar(20),
	upassword varchar(20),
	ufname varchar(20),
	ulname varchar(20),
	uemail varchar(40),
	ucity varchar(20),
	uphone varchar(10),
	regtime datetime,
	primary key (uid)
);

create table Art (
	aid varchar(20),
	apassword varchar(20),
	artname varchar(20),
	aemail varchar(40),
	asite varchar(100),
	aregtime datetime,
	primary key (aid)
);

create table Genre (
	gid int(2),
	ggenre char(20),
	primary key (gid)
);

create table Follow (
	followee varchar(20),
	follower varchar(20),
	foltime datetime,
	foreign key (follower) references User(uid),
	foreign key (followee) references User(uid)
);

create table Fans (
	fan varchar(20),
	follow varchar(20),
	fantime datetime,
	foreign key (fan) references User(uid),
	foreign key (follow) references Art(aid)
);

create table Location(
	lid int(10),
	lname char(20),
	lnumber int(8),
	street1 varchar(40),
	street2 varchar(40),
	city varchar(30),
	state char(2),
	zip int(5),
	primary key (lid)
);


create table Concert (
	cid int(10),
	cname varchar(40),
	holdtime datetime,
	price decimal(7,2),
	location int(10),
	capacity int(6),
	available int(6),
	primary key (cid),
	foreign key (location) references Location(lid)
);

create table Likes (
	luid varchar(20),
	lgenre int(2),
	foreign key (luid) references User(uid),
	foreign key (lgenre) references Genre(gid)
);

create table Have (
	haid varchar(20),
	hgenre int(2),
	foreign key (haid) references Art(aid),
	foreign key (hgenre) references Genre(gid)	
);

create table Attend (
	auid varchar(20),
	acid int(10),
	rate int(1),
	review varchar(500),
	reviewtime datetime,
	foreign key (auid) references User(uid),
	foreign key (acid) references Concert(cid)
);

create table Lists (
	listid int(10),
	luid varchar(20),
	moditime datetime,
	primary key (listid),
	foreign key (luid) references User(uid)
);

create table Content (
	clistid int(10),
	ccid int(10),
	foreign key (clistid) references Lists(listid),
	foreign key (ccid) references Concert(cid)
);

create table FollowList (
	flistid int(10),
	fluid varchar(20),
	folltime datetime,
	foreign key (flistid) references Lists(listid),
	foreign key (fluid) references User(uid)
);

create table Hold (
	haid varchar(20),
	hcid int(20),
	foreign key (haid) references Art(aid),
	foreign key (hcid) references Concert(cid)
);
