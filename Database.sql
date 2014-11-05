create table User (
	uid int(10),
	ufname varchar(20),
	ulname varchar(20),
	uemail varchar(40),
	cphone varchar(10),
	uname(ufname + " " + ulname),
	primary key (uid)
);

create table Art (
	aid int(10),
	afname varchar(20),
	alname varchar(20),
	aemail varchar(40),
	asite varchar(100),
	aname(afname + " " + alname),
	primary key (aid)
);

create table Genre (
	gid int(2),
	genre var(20),
	primary key (gid)
);

create table Follow (
	followee int(10),
	follower int(10),
	foreign key (follower) references User(uid),
	foreign key (followee) references User(uid),
);

create table Fans (
	fan int(10),
	follow int(10),
	foreign key (fan) references User(uid),
	foreign key (follow) references Art(aid),
);
