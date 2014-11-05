create table User (
	uid int(10),
	ufname varchar(20),
	ulname varchar(20),
	uemail varchar(40),
	cphone varchar(10),
	uname(ufname + " " + ulname),
	primary key (uid));

create table Art (
	aid int(10),
	afname varchar(20),
	alname varchar(20),
	aemail varchar(40),
	asite varchar(100),
	aname(ufname + " " + ulname),
	primary key (aid)
);
