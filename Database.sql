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

create table Location(
	lid int(10),
	lnumber int(8),
	street1 var(40),
	street2 var(40),
	city var(30),
	state var(2),
	zip int(5),
	primary key (lid)
);


create table Concert (
	cname var(40),
	date int(8),
	time int(4),
	price decimal(7,2),
	location int(10),
	aval int(6),
	foreign key (location) references Location(lid)
);
