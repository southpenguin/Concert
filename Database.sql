CREATE TABLE User (
	uid int(10),
	ufname varchar(20),
	ulname varchar(20),
	uemail varchar(40),
	cphone varchar(10),
	uname(ufname + " " + ulname),
	primary key (uid));
